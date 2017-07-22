<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("remove");
  secure_variable("email");
  secure_variable("oneblock");
  secure_variable("onetrack");
  secure_variable("allcomp");
  secure_variable("alpha");
  secure_variable("train");
  secure_variable("level");
  secure_variable("newp");
  secure_variable("repp");
  secure_variable("curp");
  secure_variable("mysubmit");
  secure_variable_post("mysubmit2");
  secure_variable_post("ca");
  secure_variable_post("clear-ca");

  if ($us[t_id] != 0) {
    echo "<font color=red>Sorry, but you cannot change preferences, because current question is in progress.<br>";
    echo "First you need to <a href=quiz.php>answer your current question</a> and then you can go here.</font>";
    die();
  }
  
  if (isset($ca_file)) {
    if ($_FILES['ca_file']['error'] == UPLOAD_ERR_OK               //checks for errors
          && is_uploaded_file($_FILES['ca_file']['tmp_name'])) { //checks that file is uploaded
      $st = file_get_contents($_FILES['ca_file']['tmp_name']); 
      if (strlen($us[u_ca]) == strlen($st)) {
        $us[u_ca] = $st;
        save_user();
      } else {
        die( "Error reading file. Wrong format. Go back please.");
      }
    } else {
      die("Error reading file. Go back please.");
    }
    die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
  }
  
  if ($clear_ca>0) {
    $us[u_ca] = new_ca();
    save_user();
    die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
  }
  
  if ($remove == "all") {
    $r = mysql_query("DELETE FROM cc_qlog WHERE u_id=$us[u_id] AND u_level=$us[u_level]");
    $us[t_id]=0;
    $us[r_right]=0;
    $us[r_total]=0;
    $us[r_rightp]=0;
    $us[r_avsec]=0;
    $us[r_avcent]=0;
    $us[r_avcent2]=0;
    $us[r_r1]=0;
    save_user();
    die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
  }
  
  if (isset($level)) {
    $us[u_email] = $email;
    $us[u_oneblock] = isset($oneblock) ? 1 : 0;
    $us[u_onetrack] = isset($onetrack) ? 1 : 0;
    $us[u_allcomp] = isset($allcomp) ? 1 : 0;
    $us[u_alpha] = isset($alpha) ? 1 : 0;
    $us[u_train] = isset($train) ? 1 : 0;
    // Custom mode
    if ($us[u_level] == $level_cust) {
      for ($i=0; $i<strlen($us[u_ca]); $i++) {
        $a = "c$i";
        if (isset($$a)) {
          $us[u_ca][$i] = "X";
        } else {
          $us[u_ca][$i] = "o";
        }
      }
    }
    $us[u_level] = $level;
    update_tal();
    save_user();
    if ($newp != "") {
      if (strlen($newp)<5) die("<font color=red>Minimum password length is 5. Go back</font>");
      if ($newp != $repp) die("<font color=red>Passwords do not match. Go back</font>");
      if ($curp != $us[u_pass]) die("<font color=red>Wrong current password. Go back</font>");
      $us[u_pass] = $newp;
    }
    save_user();
    die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    //die ("<script language=javascript>window.history.back();</script>"); 
  }
  
  echo "<b>Preferences for user $us[u_name]:</b><br><br>";
  echo "<form action=prefs.php method=get>";
  //echo "<input type=hidden name=1 value=2>";
  echo "<table cellpadding=5 border=0>";

  echo "<tr>";
  echo "<td>";
  echo "Difficulty: ";
  echo "<td>";
  echo "<select name=level onChange='this.form.submit();'>";
  for ($i=1; $i<$level_cust+1; $i++) {
    echo "<option value=$i";
    if ($us[u_level] == $i) echo " selected";
    echo ">".$level_name2[$i]."</option>";
  }
  echo "</select> (In custom mode rating is not counted)";
  echo "<tr>";
  echo "<td>";
  echo "Play only 1-minute interval<br>for each question: ";
  echo "<td>";
  echo "<input onChange='this.form.submit();' type=checkbox name=oneblock value=1";
  if ($us[u_oneblock]) echo " checked";
  echo "> (increases difficulty and rating)";
  /*
  echo "<tr>";
  echo "<td>";
  echo "Allow only one track per question: ";
  echo "<td>";
  echo "<input type=checkbox name=onetrack value=1";
  if ($us[u_onetrack]) echo " checked";
  echo "> (increases difficulty)";
  */
  if ($us[u_level] != $level_cust) {
    echo "<tr>";
    echo "<td>";
    echo "Select answer from all composers: ";
    echo "<td>";
    echo "<input type=checkbox name=allcomp value=1";
    if ($us[u_allcomp]) echo " checked";
    echo "> (increases difficulty and rating)";
  }
  /*
  echo "<tr>";
  echo "<td>";
  echo "Do not show periods, sort <br>composers alphabetically: ";
  echo "<td>";
  echo "<input type=checkbox name=alpha value=1";
  if ($us[u_alpha]) echo " checked";
  echo "> (increases difficulty)";
  */
  /*
  echo "<tr>";
  echo "<td>";
  echo "Training mode: ";
  echo "<td>";
  echo "<input type=checkbox name=train value=1";
  if ($us[u_train]) echo " checked";
  echo "> (In training mode rating is not counted)";
  */
  
  if ($us[u_level] == $level_cust) {
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<hr>";

    echo "<tr>";
    echo "<td colspan=2>";
    echo "<b>Select composers for custom level:</b> ";
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<table cellpadding=5 border=0>";
    echo "<tr>";
    for ($x=1; $x<5; $x++) {
      echo "<td valign=top><b>".$level_name[$x]."</b><br>";
      $r = mysql_query("SELECT * FROM cc_composers LEFT JOIN cc_periods USING (p_name) WHERE c_folder != '' AND c_rating = $x ORDER BY p_id,c_name");
      echo mysql_error();
      $n = mysql_numrows($r);
      $p_name = "";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        if ($p_name != $w[p_name]) {
          echo "--- $w[p_name]<br>";
          $p_name = $w[p_name];
        }
        echo "<input type=checkbox name='c$w[ca_id]'";
        if ($us[u_ca][$w[ca_id]] == "X") echo " checked";
        echo "> <a title='$w[c_country] $w[c_years], $w[t_count] tracks' href=".comp_link($w[c_id]).">";
        if ($us[u_ca][$w[ca_id]] == "X") echo "<font color=orange>";
        echo "$w[c_name]</font></a><br>";
      }
    }
    echo "</table>";
  }

  echo "<tr>";
  echo "<td colspan=2>";

  echo "<hr>";

  echo "<tr>";
  echo "<td colspan=2>";
  echo "<b>If you want to change your password:</b> ";
  echo "<tr>";
  echo "<td>";
  echo "Current password: ";
  echo "<td>";
  echo "<input type=password name=curp>";
  echo "<tr>";
  echo "<td>";
  echo "New password: ";
  echo "<td>";
  echo "<input type=password name=newp>";
  echo "<tr>";
  echo "<td>";
  echo "Repeat new password: ";
  echo "<td>";
  echo "<input type=password name=repp>";
  echo "<br><a href=prefs.php?remove=all onclick='return confirm(\"Do you really want to delete all your statistics for level ".$level_name[$us[u_level]]."? All your previous answers will be removed and all counters will be reset to zero.\");'><font color=red>Please clear all my statistics for level ".$level_name[$us[u_level]].". I will begin from zero.</font></a><br>";
  
  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr>";

  echo "<tr>";
  echo "<td>";
  echo "Email: ";
  echo "<td>";
  echo "<input type=text name=email value='$us[u_email]'>";

  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr>";

  echo "<tr>";
  echo "<td>";
  echo "";
  echo "<td>";
  echo "<input type=submit name=mysubmit></form> ";
  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr><br>";
  echo "<form action=prefs.php method=post enctype='multipart/form-data'>";
  echo "<a href=prefs.php?clear_ca=1 onclick='return confirm(\"Do you really want to clear the list of your composers for Custom mode?\");'>Clear composers list</a> | ";
  echo "<a target=_blank href=save-ca.php>Backup list</a> | ";
  echo "<label for=ca_file>Load list:</label> ";
  echo "<input type=file name=ca_file id=ca_file /> ";
  echo "<input type=submit name=mysubmit2 />";
  echo "</form>";
  echo "</table>";
  
?>
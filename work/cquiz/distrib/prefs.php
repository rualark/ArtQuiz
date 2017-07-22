<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  echo "<body onload='update_checkboxes(\"id=c\");'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>";
  include "menu.php";
  
  secure_variable("countrycolor");
  secure_variable("remove");
  secure_variable("setl");
  secure_variable("settg");
  secure_variable("email");
  secure_variable("oneblock");
  secure_variable("subscribe");
  secure_variable("onetrack");
  secure_variable("allcomp");
  secure_variable("speechvol");
  secure_variable("select_style");
  secure_variable("level");
  secure_variable("trating");
  secure_variable("newp");
  secure_variable("repp");
  secure_variable("curp");
  secure_variable("mysubmit");
  secure_variable_post("mysubmit2");
  secure_variable_post("ca");
  secure_variable("clear_ca");
  secure_variable("ilevel");
  secure_variable("cab");
  secure_variable("gab");
  secure_variable("su_id");
  start_time();

  if ($us[t_id] != 0) {
    echo "<font color=red>Sorry, but you cannot change preferences, because current question is in progress. ";
    echo "First you need to <a href=quiz.php>answer your current question</a> and then you can go here.</font><br>";
    //die();
  } else {
    if ($clear_ca>0) {
      $us[u_ca] = new_ca();
      save_user();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if (isset($setl)) {
      $r = mysql_query2("SELECT * FROM cc_composers WHERE c_folder != '' AND c_rating = '$setl'");
      echo mysql_report_error();
      $n = mysql_numrows($r);
      $sign = "o";
      $ccount = get_ccount();
      while (strlen($us[u_ca])<$ccount) $us[u_ca] = $us[u_ca]."o";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        if (($us[u_ca][$w[ca_id]] != "X") && ($i==0)) $sign="X";
        $us[u_ca][$w[ca_id]]=$sign;
      }
      save_user();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if (isset($settg)) {
      $sign = "X";
      if ($us[u_ga][1] === "X") $sign = "o";
      $us[u_ga] = new_ga($sign);
      save_user();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if (isset($setp)) {
      $r = mysql_query2("SELECT * FROM cc_composers WHERE c_folder != '' AND p_name = '$setp'");
      echo mysql_report_error();
      $n = mysql_numrows($r);
      $sign = "o";
      $ccount = get_ccount();
      while (strlen($us[u_ca])<$ccount) $us[u_ca] = $us[u_ca]."o";
      //if (strlen($us[u_ca]) == 0) $us[u_ca] = "";
      //echo $us[u_ca];
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        if (($us[u_ca][$w[ca_id]] != "X") && ($i==0)) $sign="X";
        $us[u_ca][$w[ca_id]]=$sign;
      }
      save_user();
      //die();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if ($remove == "all") {
      // Check interval
      $r = mysql_query2("SELECT *,
        UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(c_last) as passed
        FROM cc_clears WHERE u_id=$us[u_id] AND c_level=$us[u_level] AND c_cab=x''");
      echo mysql_report_error();
      $w = mysql_fetch_assoc($r);
      if (($w[passed]>0) && ($w[passed] < 60*60*$clear_min_hours)) {
        echo "<font color=red>Less than $clear_min_hours hours passed from the last clear of this level/island. To protect from spammers we will allow you to clear statistics after this time passes. Sorry for inconvenience.</font>";
        die;
      }
      // Clear
      $r = mysql_query2("UPDATE cc_qlog SET l_cleared=1 WHERE u_id=$us[u_id] AND u_level=$us[u_level]");
      echo mysql_report_error();
      $cnt = mysql_affected_rows();
      // Log clear
      $r = mysql_query2("DELETE FROM cc_clears WHERE c_level='$us[u_level]' AND u_id='$us[u_id]'");
      echo mysql_report_error();
      $r = mysql_query2("REPLACE INTO cc_clears VALUES (x'', '$us[u_level]', NOW(), '$us[u_id]', '$cnt')");
      echo mysql_report_error();
      $us[u_clears] += $cnt;
      $r = mysql_query2("DELETE FROM cc_ur WHERE u_id=$us[u_id] AND r_level=$us[u_level]");
      echo mysql_report_error();
      $us[t_id]=0;
      $us[r_right]=0;
      $us[r_total]=0;
      $us[r_rightp]=0;
      $us[r_avsec]=0;
      $us[r_avcent]=0;
      $us[r_avcent2]=0;
      $us[r_r1]=0;
      save_user();
      update_ratings($us[u_id]);
      // Act
      $q5 = "DELETE FROM cc_act WHERE u_id='$us[u_id]' AND u_level='$us[u_level]'";
      $r5 = mysql_query2($q5);
      echo mysql_report_error();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if ($remove == "isle") {
      // Check interval
      $r = mysql_query2("SELECT *,
        UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(c_last) as passed
        FROM cc_clears WHERE u_id=$us[u_id] AND c_level=$us[u_level] AND c_cab=x'$us[cab]'");
      echo mysql_report_error();
      $w = mysql_fetch_assoc($r);
      if (($w[passed]>0) && ($w[passed] < 60*60*$clear_min_hours)) {
        echo "<font color=red>Less than $clear_min_hours hours passed from the last clear of this level/island. To protect from spammers we will allow you to clear statistics after this time passes. Sorry for inconvenience.</font>";
        die;
      }
      // Clear
      $r = mysql_query2("UPDATE cc_qlog SET l_cleared=1 WHERE u_id=$us[u_id] AND u_level=$us[u_level] AND u_cab=x'$us[cab]'");
      echo mysql_report_error();
      $cnt = mysql_affected_rows();
      // Log clear
      $r = mysql_query2("DELETE FROM cc_clears WHERE c_level='$us[u_level]' AND u_id='$us[u_id]' AND c_cab=x'$us[cab]'");
      $r = mysql_query2("REPLACE INTO cc_clears VALUES (x'$us[cab]', '$us[u_level]', NOW(), '$us[u_id]', '$cnt')");
      echo mysql_report_error();
      $r = mysql_query2("UPDATE cc_users SET u_clears=u_clears+$cnt WHERE u_id=$us[u_id]");
      echo mysql_report_error();
      $r = mysql_query2("DELETE FROM cc_ur WHERE u_id=$us[u_id] AND r_level=$us[u_level] AND r_cab=x'$us[cab]'");
      echo mysql_report_error();
      // Klog
      $q5 = "INSERT INTO cc_klog
        VALUES('', x'$us[cab]', NOW(), '', '', '', '', '',
        '', '', '', '', '', '$us[u_id]', '100', 0)";
      $r5 = mysql_query2($q5);
      echo mysql_report_error();
      update_isles($us[cab], 1);
      // Act
      $q5 = "DELETE FROM cc_act WHERE u_id='$us[u_id]' AND u_level='$us[u_level]' AND u_cab=x'$us[cab]'";
      $r5 = mysql_query2($q5);
      echo mysql_report_error();
      //die;
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if (isset($ilevel)) {
      $us[u_level] = $ilevel;
      if ($cab != "") $us[u_ca] = unpack_ca($cab);
      if ($gab != "") $us[u_ga] = unpack_ca($gab);
      if ($trating != "") $us[u_trating] = $trating;
      if ($allcomp != "") $us[u_allcomp] = $allcomp;
      if ($oneblock != "") $us[u_oneblock] = $oneblock;
      save_user();
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 
    }
    
    if (isset($level)) {
      $us[u_email] = $email;
      $us[u_speechvol] = $speechvol;
      $us[u_oneblock] = isset($oneblock) ? 1 : 0;
      $us[u_subscribe] = isset($subscribe) ? 1 : 0;
      $us[u_onetrack] = isset($onetrack) ? 1 : 0;
      $us[u_allcomp] = isset($allcomp) ? 1 : 0;
      $us[u_select_style] = $select_style;
      $us[u_trating] = $trating;
      // Custom mode
      if ($us[u_level] >= $level_cust) {
        $ccount = get_ccount();
        $us[u_ca] = "o";
        for ($i=0; $i<=$ccount; $i++) {
          $a = "c$i";
          if (isset($_GET[$a])) {
            $us[u_ca][$i] = "X";
          } else {
            $us[u_ca][$i] = "o";
          }
        }
      }
      // Groups
      if ($us[u_level] > $level_cust) {
        $gcount = get_gcount();
        $us[u_ga] = "o";
        for ($i=0; $i<=$gcount; $i++) {
          $a = "t$i";
          if (isset($_GET[$a])) {
            $us[u_ga][$i] = "X";
          } else {
            $us[u_ga][$i] = "o";
          }
        }
      }

      $us[u_level] = $level;

      save_user();
      if ($newp != "") {
        if (strlen($newp)<5) die("<font color=red>Minimum password length is 5. Go back</font>");
        if ($newp != $repp) die("<font color=red>Passwords do not match. Go back</font>");
        //if ($curp != $us[u_pass]) die("<font color=red>Wrong current password. Go back</font>");
        mysql_query2("UPDATE cc_users SET u_pass=PASSWORD('$newp') WHERE u_id='$us[u_id]'");
        echo mysql_report_error();
        load_user();
      }
      die ("<script language=\"javascript\">location.replace(\"prefs.php\");</script>"); 

    }
  }
  
  load_tga();

  echo "<b>Difficulty settings for user $us[u_name]:</b><br><br>";
  echo "<form action=prefs.php method=get>";

  echo "<table cellpadding=5 border=0>";

  echo "<tr>";
  echo "<td>";
  echo "Difficulty: ";
  echo "<td>";
  echo "<select name=level onChange='this.form.submit();'>";
  for ($i=1; $i<=count($level_name); $i++) {
    echo "<option value=$i";
    if ($us[u_level] == $i) echo " selected";
    echo ">".$level_name2[$i]."</option>";
  }
  echo "</select>";

  echo "<tr>";
  echo "<td valign=top>";
  echo "Play only 1-minute interval<br>for each question: ";
  echo "<td valign=top>";
  echo "<input onChange='this.form.submit();' type=checkbox name=oneblock value=1";
  if ($us[u_oneblock]) echo " checked";
  echo "> (increases difficulty and rating)";

  //if ($us[u_level] != $level_cust) {
  echo "<tr>";
  echo "<td>";
  echo "Select answer from all composers: ";
  echo "<td>";
  echo "<input onChange='this.form.submit();' type=checkbox name=allcomp value=1";
  if ($us[u_allcomp]) echo " checked";
  echo "> (increases difficulty and rating)";

  if ($us[u_level] > $level_cust) {
    echo "<tr>";
    echo "<td>";
    echo "Popularity: ";
    echo "<td>";
    echo "<select name=trating style='background-color: #ffeecc;' onChange='this.form.submit();'>";
    for ($i=0; $i<count($trating_name); $i++) {
      echo "<option value=$i";
      if ($us[u_trating] == $i) echo " selected";
      echo ">".$trating_name[$i]."</option>";
    }
    echo "</select>";
  }

  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr><br><b>Setup style:</b> ";
  echo "<tr>";
  echo "<td>";
  echo "Visual style: ";
  echo "<td>";
  echo "<select name=select_style onChange='this.form.submit();'>";
  echo "<option value=0";
  if ($us[u_select_style] == 0) echo " selected";
  echo ">Multiline select box</option>";
  echo "<option value=1";
  if ($us[u_select_style] == 1) echo " selected";
  echo ">Radio buttons</option>";
  echo "<option value=2";
  if ($us[u_select_style] == 2) echo " selected";
  echo ">Clickable composer pictures</option>";
  echo "</select>";
  echo "<tr>";
  echo "<td>";
  echo "Speech volume: ";
  echo "<td>";
  echo "<input type=number min=0 max=100 name=speechvol value='$us[u_speechvol]'> (0-100, 0 - no sound, 1 - effects) ";
  echo "<input type=submit name=mysubmit>";

  if ($us[u_level] >= $level_cust) {
    // Show current island
    
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<hr>";

    echo "<tr>";
    echo "<td colspan=2>";
    echo "<a title='Clear composers list' href=prefs.php?clear_ca=1><img align=top src=images/clear.png height=18></a> ";
    echo "<a title='Colored by country' href=prefs.php?countrycolor=1><img src=images/russia-flag.png height=15 align=top></a> ";
    echo "<b>Select composers for isle and free levels:</b> ";
    echo "<div align=right id='current_isle_text' class='current_isle_text'>";
    // Show stat
    $r = mysql_query2("SELECT r1_avg, cc_ur.r_total, i_cst2, HEX(i_cab) as cab FROM cc_ur LEFT JOIN cc_isles ON (cc_isles.i_cab=cc_ur.r_cab) WHERE cc_ur.u_id=$us[u_id] AND r_level=$us[u_level] AND r_cab=x'$us[cab]'");
    echo mysql_report_error();
    //$n = mysql_numrows($r);
    $w = mysql_fetch_array($r);
    if ($w[r1_avg]>0) {
      echo "<table><td bgcolor=#ffff77>You played <b>$w[r_total]</b> games on <a href=rating.php?cab=$w[cab]>$w[i_cst2]</a></table>";
    } else echo "<table><td>&nbsp;</table>";
    echo "</div>";
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<table cellpadding=5 border=0>";
    echo "<tr>";
    if (!isset($su_id)) $su_id=$us[u_id];
    $r = mysql_query2("SELECT cc_composers.c_id as c_id, c_rating, c_total, c_name3, c_name4, c_group, p_name, p_id, t_count, tg_list, tr_count,
      c_country, c_years, c_len, c_right, ca_id
      FROM cc_composers 
      LEFT JOIN cc_cstat ON (cc_cstat.c_id=cc_composers.c_id AND cc_cstat.u_id=$su_id)
      WHERE c_folder != '' 
      ORDER BY c_rating,p_id,c_start");
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $w = mysql_fetch_array($r);
    $cur_rat=1;
    for ($x=1; $x<5; $x++) {
      echo "<td valign=top><a title='Check/clear all composers in this level' href=prefs.php?setl=$x><font color=black>".$level_name[$x]."</font></a><br>";
      $p_name = "";
      for ($i=0; $i<$n; $i++) {
        if ($w[t_count] == 0) continue;
        if ($p_name != $w[p_name]) {
          echo "--- <a title='Check/clear all composers in this period' href='prefs.php?setp=$w[p_name]'><font color=black>$w[p_name]</font></a><br>";
          $p_name = $w[p_name];
        }
        echo "<div style='border-radius: 7px; display:inline-block' class='div-chk-comp' id='dc$w[ca_id]'><input id='c$w[ca_id]' type=checkbox name='c$w[ca_id]'";
        if ($us[t_id]>0) echo " disabled";
        if ($us[u_ca][$w[ca_id]] == "X") echo " checked";
        echo "></div> <a title='$w[c_name3]\n$w[c_country] $w[c_years], $w[t_count] tracks, ".round($w[c_len]/60)." min";
        if (strlen($w[c_group])>1) echo "\n$w[c_group]";
        //echo "\n$w[c_desc]";
        echo "\n$w[c_total] answers (".round($w[c_right]/$w[c_total]*100)."% correct)";
        echo "' href=".comp_link($w[c_id]).">";
        if (!is_file("cpic/$w[c_id].jpg")) echo "<font color=red>";
        $country_color = make_country_color($w[c_country]);
        $country_bgcolor = make_country_bgcolor($w[c_country]);
        $simg = "search.png";
        if ($countrycolor == 1) {
          echo "<font color=$country_color style='BACKGROUND-COLOR: $country_bgcolor'>";
          //if ($us[u_ca][$w[ca_id]] == "X") $simg = "search2.png";
        } else {
          //if ($us[u_ca][$w[ca_id]] == "X") echo "<font color=orange>";
          //else if ($w[c_total]>$w[c_len]/60) echo "<font color=gray>";
          $bgcolor=comp_color($w);
          $weight = "normal";
          if ($uname=="rualark" && $w[tr_count]>0) $weight="bold";
          echo "<font color=black style='BACKGROUND-COLOR: $bgcolor; font-weight: $weight;'>";
          //if ($us[u_ca][$w[ca_id]] == "X") $simg = "search2.png";
        }
        echo "$w[c_name4]</font></a> ";
        show_tga($w[tg_list], 4);
        //echo " <a title='Click to find islands with this composer' href='isles.php?cname=$w[c_name4]'><img height=18 border=0 align=top src=images/$simg></a>";
        echo "<br>";
        $w = mysql_fetch_array($r);
        if ($cur_rat != $w[c_rating]) break;
      }
      $cur_rat=$w[c_rating];
    }
    echo "</table>";
  }

  if ($us[u_level] > $level_cust) {
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<hr>";

    echo "<tr>";
    echo "<td colspan=2>";
    if (strpos($us[u_ga], "X") !== false) {
      $cross = count(count_caga_cross());
      if ($cross<2) echo "<font color=red><b>";
      echo "$cross of selected composers have works with selected instruments and popularity</font></b><br>";
    } else {
      //echo "<font color=red><b>No instruments selected</font></b><br>";
    }
    echo "<b>Select instruments for free level (<a title='Set/clear all instruments' href=?settg=1>Toggle</a>):</b> ";
    echo "<tr>";
    echo "<td colspan=2>";
    echo "<table cellpadding=5 border=0>";
    echo "<tr>";
    $q = "SELECT * FROM cc_tgroups WHERE tg_id>0 ORDER BY tg_group,tg_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $group = 0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      if ($group != $w[tg_group]) {
        if ($i != 0) echo "</td>";
        echo "<td valign=top>";
        $group = $w[tg_group];
      }
      echo "<input id='t$w[tg_id]' type=checkbox name='t$w[tg_id]'";
      if ($us[t_id]>0) echo " disabled";
      if ($us[u_ga][$w[tg_id]] == "X") echo " checked";
      echo "> <a title='$w[tg_comment]\n$w[tg_tracks] tracks, $w[tg_hours] hours, $w[tg_cnum] composers";
      echo "' href='tgroups.php?tg_id=$w[tg_id]'>";
      if ($us[u_ga][$w[tg_id]] == "X") echo "<font color=orange>";
      echo "$w[tg_name]</font></a>";
      echo "<br>";
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
  echo "<td valign=top>";
  echo "New password: ";
  echo "<td valign=top>";
  echo "<input type=password name=newp>";
  echo "<tr>";
  echo "<td valign=top>";
  echo "Repeat new password: ";
  echo "<td valign=top>";
  echo "<input type=password name=repp>";
  
  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr>";

  echo "<tr>";
  echo "<td valign=top>";
  echo "Email: ";
  echo "<td>";
  echo "<input type=text name=email value='$us[u_email]'>";
  
  echo "<tr>";
  echo "<td valign=top>";
  echo "Subscribe to new forum <br>messages on my islands: ";
  echo "<td valign=top>";
  echo "<input type=checkbox name=subscribe value=1"; // onChange='this.form.submit();' 
  if ($us[u_subscribe]) echo " checked";
  echo ">";

  //echo "<tr>";
  //echo "<td colspan=2>";
  //echo "<hr>";

  echo "<tr>";
  echo "<td>";
  echo "";
  echo "<td>";
  echo "<input type=submit name=mysubmit>";
  echo "</form> ";
  if ($us[u_level] == $level_cust+1) {
    echo "<br>You cannot delete statistics for Free level";
  } elseif ($us[u_level] == $level_cust && $us[cab] != "") {
    load_isle($us[cab]);
    echo "<br><a href=prefs.php?remove=isle onclick='return confirm(\"Do you really want to delete all your statistics for current island $is[i_cst2]? All your previous answers will be removed and all counters will be reset to zero. Please pay attention, that you are allowed to do a clear on each island or level only once per $clear_min_hours hours. Cleared answers are not taken into account when isle and level ratings are calculated. You have $clear_days days to answer at least $min_answers_after_clear questions on this island, or your cleared questions can be restored.\");'><font color=red>Please clear all my statistics for current island. I will begin from zero.</font></a><br>";
  } elseif ($us[u_level] < $level_cust) {
    echo "<br><a href=prefs.php?remove=all onclick='return confirm(\"Do you really want to delete all your statistics for level ".$level_name[$us[u_level]]."? All your previous answers will be removed and all counters will be reset to zero. Please pay attention, that you are allowed to do a clear on each island or level only once per $clear_min_hours hours. Cleared answers are not taken into account when level ratings are calculated.\");'><font color=red>Please clear all my statistics for level ".$level_name[$us[u_level]].". I will begin from zero.</font></a><br>";
  }
?>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script>
function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}

function show_caid(element, index, array) {
  if (index == 0) return 0;
  var d = element.split(':');
  var ia = document.getElementById('dc'+d[0]);
  if (d[1]>0) {
    var cl = Math.max(120, 240-d[1]*2);
    ia.style.backgroundColor = rgbToHex(255, cl, 255);
  } else {
    var cl = Math.max(120, 240-d[2]);
    ia.style.backgroundColor = rgbToHex(cl, cl, cl);
  }
}

function update_checkboxes(param) {
  if (!Date.now) {
    Date.now = function() { return new Date().getTime(); }
  }
  $.get('prefs_checkbox.php' , param+'&nc='+Date.now(), function(data){
      data2 = data.split(';');
      if(data2[0] != '') {
        $('.current_isle_text').html(data2[0]);   
      } else {
        $('.current_isle_text').html("<table><td>&nbsp;</table>");   
      }
      var elements = document.getElementsByClassName('div-chk-comp');
      for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor="white";
      }
      if (data2.length>0) {
        data2.forEach(show_caid);
      }
  });
}

$('input:checkbox').change(function(e) {
  //e.preventDefault();
  var EsID = $(this).attr('id');
  var isChecked = $(this).is(":checked") ? 1:0; 
  update_checkboxes("id=" + EsID + "&" + "value=" + isChecked);
});
</script>  

<?
  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr><br>";
  //echo "<a href='prefs.php?clear_ca=1' onclick='return confirm(\"Do you really want to clear the list of your composers for Custom mode?\");'>Clear composers list</a> | ";
  echo "</table>";
  echo "Circles around checkboxes show if island exists: pink - you played on this island, gray - someone else played on this island. Color intensity shows answered questions number.";
  stop_time();
?>
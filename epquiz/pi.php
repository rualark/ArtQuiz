<?
  include "lib.php";

  include "style.php";
  include "menu.php";
  start_time();
  
  secure_variable("act");
  secure_variable("order");

  if ($act == "create") {
    $aids = "-";
    $anames = "|";
    // Construct isle
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        $q = "SELECT a_name FROM ep_authors WHERE a_id=$i";
        $r = mysql_query($q);
        echo mysql_error();
        $w = mysql_fetch_assoc($r);
        echo "Adding author $i $w[a_name]<br>";
        $aida[] = $i;
        $aids .= "$i-";
        $anames .= "$w[a_name]|";
      }
    }
    // Count works
    $cond = str_replace("-", ",", substr($aids, 1, strlen($aids)-2));
    $q = "SELECT * FROM ep_works WHERE a_id IN ($cond) ORDER BY w_rating DESC";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $need_cut = 0;
    $old_r = 0;
    $cur_mr = 0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $acnt[$w[a_id]]++;
      if ($i+1 == $mr_levels_i[$cur_mr]) {
        echo "Found $i works<br>";
        $need_cut = 1;
      }
      if ($need_cut > 0) {
        if ($old_r != $w[w_rating]) {
          //print_r($acnt);
          //echo " $i cut $old_r<br>";
          $need_cut = 0;
          $cur_mr++;
          $i_mr .= "$old_r+";
          foreach ($aida as $key => $val) $i_mr .= "$acnt[$val]+";
          $i_mr = substr($i_mr, 0, -1)."|";
        } else {
          //echo "$i cannot cut $old_r<br>";
        }
      }
      $old_r = $w[w_rating];
    }
    if ($need_cut > 0) {
      $i_mr .= "$old_r+";
      foreach ($aida as $key => $val) $i_mr .= "$acnt[$val]+";
      $i_mr = substr($i_mr, 0, -1)."|";
    }
    // Save isle
    $i_mr = substr($i_mr, 0, -1);
    $q = "INSERT INTO ep_isles VALUES('', '$aids', '$i_mr', NOW(), '$anames', 0)";
    echo $q;
    mysql_query($q);
    echo mysql_error();
    stop_time();
    die ("<script language=\"javascript\">location.replace(\"pi.php\");</script>"); 
  }
  
  if ($act == "new") {
    echo "<b>Select poets for your island:</b>";
    if (!isset($order)) $order="a_rating, a_year1";
    $q = "SELECT * FROM ep_authors WHERE a_works>0 ORDER BY $order";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<form action=pi.php method=get>";
    echo "<input type=hidden name=act value=create>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th><a href=pi.php?act=new&order=a_name>Name";
    echo "<th><a href=pi.php?act=new&order=a_year1>Years";
    echo "<th><a href='pi.php?act=new&order=a_country, a_year1'>Country";
    echo "<th>Tags";
    echo "<th><a href='pi.php?act=new&order=a_works desc'>Works";
    echo "<th><a href='pi.php?act=new&order=a_rating, a_year1'>Rank";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<input type=checkbox name=a$w[a_id]> ";
      echo "<a href=authors.php?a_id=$w[a_id]>";
      if ($w[a_desc] != "") echo "<font color=green>";
      echo "$w[a_name]</font></a>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2] != 0) echo $w[a_year2];
      echo "<td>$w[a_country]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM ep_atags LEFT JOIN ep_tdesc USING (t_name) WHERE a_id='$w[a_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a href='works.php?t_id=$w2[t_id]'>";
        if ($w2[t_desc] != "") echo "<font color=green>";
        echo "$w2[t_name]</font></a>";
      }
      echo "<td>$w[a_works]";
      echo "<td>$w[a_rating]";
    }
    echo "</table>";
    echo "<br>";
    echo "<input type=submit value='Create an island with the selected poets'>";
    stop_time();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    exit;
  }
  
  echo "<p><a href=pi.php?act=new>Create new island of poets</a>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Poets";
  echo "<th>Poems number";
  echo "<th>Played";
  $r = mysql_query("SELECT * FROM ep_isles");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    $ai = explode("-", $w[i_aids]);
    $an = explode("|", $w[i_anames]);
    $n2 = count($ai);
    for ($x=1; $x<$n2-1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=authors.php?a_id=$ai[$x]><font color=$color[$x]>$an[$x]</font></a>";
    }
    echo "<td><center>";
    $am = explode("|", $w[i_mr]);
    $n3 = count($am);
    for ($x=0; $x<$n3; $x++) {
      //if ($x>0) echo " ";
      $amm = explode("+", $am[$x]);
      $n4 = count($amm);
      $st = "";
      $good = 1;
      for ($y=1; $y<$n4; $y++) {
        $st .= "<font color=$color[$y]>$amm[$y]</font>+";
        if ($amm[$y] == 0) $good = 0;
      }
      if ($good == 1) {
        $st = substr($st, 0, -1);
        echo "<a href=pquiz.php?act=reset&i_id=$w[i_id]&mr=$amm[0]>$st</a><br>";
      }
      echo "</a> ";
    }
    echo "<td><center>$w[i_games]";
  }
  echo "</table>";
  stop_time();
?>

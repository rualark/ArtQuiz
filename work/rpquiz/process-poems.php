<?
  include "mysql.php";
  include "../lib.php";

  start_time();
  // temp
  /*
  $r = mysql_query("SELECT * FROM l_authors ORDER BY a_year1");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo " <a target=_blank href='https://www.google.ru/search?q=$w[a_name]'>$w[a_name]</a><br>";
  }
  */
  
  // count mr
  $r = mysql_query("SELECT w_rating FROM l_works order by w_rating desc");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if (in_array($i, $mr_levels)) {
      echo "$w[w_rating] => $i, ";
    }
    if ($w[w_rating] == -2000) {
      echo "<br>-2000 reached at $i";
      break;
    }
  }
  echo "<br>";
  
  // Show year limit aftermath
  foreach ($mr_levels as $mr => $cnt) {
    $r = mysql_query("SELECT COUNT(*) as cnt FROM l_works LEFT JOIN l_authors USING (a_id) WHERE w_rating>='$mr' $year_cond");
    echo mysql_error();
    $n = mysql_numrows($r);
    $w = mysql_fetch_assoc($r);
    echo "$cnt => $w[cnt]<br>";
  }
  stop_time();
  
  // Show problem texts
  $r = mysql_query("SELECT w_id, a_name, w_name, w_text, w_rating FROM l_works LEFT JOIN l_authors USING (a_id) WHERE LENGTH(w_text)<10");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name] $w[w_name]'>$w[w_name]</a><br>";
  }
  
  stop_time();
  // Remove quotes and empty lines
  $r = mysql_query("SELECT * FROM l_works order by a_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  $old_a_id = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $w[w_name] = trim(html_entity_decode($w[w_name]));
    mysql_query("UPDATE l_works SET w_name = '$w[w_name]' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $w[w_text] = str_replace('&quot;', "\"", $w[w_text]);
    $w[w_text] = str_replace("'", "`", $w[w_text]);
    $sa = explode("\n", trim($w[w_text]));
    $st = "";
    $empty = 0;
    for ($x=0; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      if (trim($st2) == "") $empty++;
      else $empty = 0;
      if ($empty < 3) $st .= $st2."\n";
    }
    //echo "$w[w_id]<br>";
    //mysql_query("UPDATE l_works SET w_text = '$st' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    //years
    if ($w[a_id] != $old_a_id) {
      if (($old_a_id > 0) && ($ycnt>0)) {
        $q2 = "UPDATE l_authors SET a_start = '".round($ysum/$ycnt)."' WHERE a_id='$old_a_id'";
        //echo "$q2<br>";
        //mysql_query($q2);
      }
      $old_a_id = $w[a_id];
      $ysum=0;
      $ycnt=0;
    }
    $year = $w[w_years];
    for ($x = 0; $x<20; $x++) {
      if (!is_numeric($year[0])) $year = substr($year, 1);
    }
    $year = substr($year, 0, 4);
    if ($year > 1000) {
      $ysum += $year;
      $ycnt ++;
    }
  }
  //mysql_query("UPDATE l_authors SET a_start = '".round($ysum/$ycnt)."' WHERE a_id='$old_a_id'");
  
  stop_time();
  // Calculate tags and years
  $r = mysql_query("SELECT * FROM l_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    /*
    $r2 = mysql_query("SELECT DISTINCT(t_name) as tn, t_id FROM l_works left join l_tags USING (w_id) WHERE t_name is NOT NULL AND a_id=$w[a_id]");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $st = "";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($st != "") $st .= ", ";
      $w2[tn] = trim($w2[tn]);
      if ($w2[tn] != "") {
        $st .= $w2[tn];
        $q2 = "REPLACE INTO l_atags VALUES('$w[a_id]', '$w2[t_id]', '$w2[tn]')";
        //echo $q2;
        //mysql_query($q2);
        echo mysql_error();
      }
    }
    //mysql_query("UPDATE l_authors SET a_tags = '$st' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // years
    $r2 = mysql_query("SELECT AVG(LEFT(w_years, 4)) as sy FROM l_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>0) {
      $w2 = mysql_fetch_assoc($r2);
      //if ($w2[sy] > 0) mysql_query("UPDATE l_authors SET a_start = '$w2[sy]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    */
    // works
    $r2 = mysql_query("SELECT COUNT(*) as cnt FROM l_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    mysql_query("UPDATE l_authors SET a_works = '$w2[cnt]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // ratings
    $r2 = mysql_query("SELECT MAX(w_rating) as maxr FROM l_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    mysql_query("UPDATE l_authors SET a_maxr = '$w2[maxr]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    //mysql_query("UPDATE l_works SET a_maxr = '$w2[maxr]' WHERE a_id='$w[a_id]'");
    //echo mysql_error();
    // Calculate author rating
    $r2 = mysql_query("SELECT w_id, w_rating FROM l_works WHERE a_id=$w[a_id] ORDER BY w_rating DESC");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $st = "";
    $a_rating = 0;
    $a_rcnt = 0;
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($w2[w_rating] < 0) $w2[w_rating] += 1000;
      if ($w2[w_rating] > 50) {
        $a_rcnt++;
        $a_rating += $w2[w_rating]*$w2[w_rating]/500;
        if ($a_rcnt>9) break;
      }
    }
    $a_rating = round($a_rating);
    echo "<a target=_blank href=../authors.php?a_id=$w[a_id]>$w[a_name]</a> $w[a_rating] ";
    if ($w[a_rating]-$a_rating>10) echo "<b><font color=red>";
    if ($w[a_rating]-$a_rating<-10) echo "<b><font color=green>";
    echo "$a_rating</b></font><br>";
    mysql_query("UPDATE l_authors SET a_rating='$a_rating' WHERE a_id='$w[a_id]'");
    echo mysql_error();
  }
  stop_time();
?>
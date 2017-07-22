<?
  include "../mysql.php";
  include "lib.php";

  start_time();
  // temp
  /*
  $r = mysql_query("SELECT * FROM ep_authors ORDER BY a_year1");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo " <a target=_blank href='https://www.google.ru/search?q=$w[a_name]'>$w[a_name]</a><br>";
  }
  */
  
  // count mr
  $r = mysql_query("SELECT w_rating FROM ep_works order by w_rating desc");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if (in_array($i, $mr_levels)) {
      echo "$w[w_rating] => $i, ";
    }
    if ($w[w_rating] == 0) {
      echo "<br>0 reached at $i";
      break;
    }
  }
  echo "<br>";
  
  // Show problem texts
  /*
  $r = mysql_query("SELECT w_id, a_name, w_name, w_text, w_rating FROM ep_works LEFT JOIN ep_authors USING (a_id) WHERE LENGTH(w_text)<10");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name] $w[w_name]'>$w[w_name]</a><br>";
  }
  */
  
  // Process tags
  $q = "SELECT * FROM ep_tdesc";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $st = preg_replace("/\[[^]]+\]/", "", $w[t_desc]);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    mysql_query("UPDATE ep_tdesc SET t_desc='".mysql_real_escape_string($st)."' WHERE t_name='$w[t_name]'");
    echo mysql_error();
  }

  stop_time();
  $r = mysql_query("SELECT * FROM ep_works order by a_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  $old_a_id = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    /*
    if (($w[w_en1] == 0) && ($w[w_en2] == $w[w_lines])) { // Only those that are not split
      // Remove double blanks
      $st = file_get_contents("../../epquiz/poems/$w[a_id]/$w[w_id].txt");
      $st = trim($st, "\r\n");
      $st = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n\r\n", $st);
      $st = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n\r\n", $st);
      $st = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n\r\n", $st);
      $st = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n\r\n", $st);
      $st = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n\r\n", $st);
      file_put_contents("../../epquiz/poems/$w[a_id]/$w[w_id].txt", $st);
      // Count lines
      $fa = file("../../epquiz/poems/$w[a_id]/$w[w_id].txt");
      $c = count($fa);
      $st = implode($fa);
      if ($fa === false) {
        mysql_query("DELETE FROM ep_works WHERE w_id='$w[w_id]'");
        echo mysql_error();
      } else {
        if ($w[w_lines]-2 > $c) echo "$w[a_id]/$w[w_id]: $w[w_en1]/$w[w_en2]/$w[w_lines] -> $c<br>";
        mysql_query("UPDATE ep_works SET w_lines='$c', w_en2='$c' WHERE w_id='$w[w_id]'");
      }
    }
    */
    /*
    $w[w_name] = trim(html_entity_decode($w[w_name]));
    mysql_query("UPDATE ep_works SET w_name = '$w[w_name]' WHERE w_id='$w[w_id]'");
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
    //mysql_query("UPDATE ep_works SET w_text = '$st' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    */
  }
  //mysql_query("UPDATE ep_authors SET a_start = '".round($ysum/$ycnt)."' WHERE a_id='$old_a_id'");
  
  stop_time();
  // Calculate tags and years
  $r = mysql_query("SELECT * FROM ep_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $st = preg_replace("/\[[^]]+\]/", "", $w[a_desc]);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    $st = str_replace("\r\n\r\n", "\r\n", $st);
    mysql_query("UPDATE ep_authors SET a_desc='".mysql_real_escape_string($st)."' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    /*
    $r2 = mysql_query("SELECT DISTINCT(t_name) as tn, t_id FROM ep_works left join ep_tags USING (w_id) WHERE t_name is NOT NULL AND a_id=$w[a_id]");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $st = "";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($st != "") $st .= ", ";
      $w2[tn] = trim($w2[tn]);
      if ($w2[tn] != "") {
        $st .= $w2[tn];
        $q2 = "REPLACE INTO ep_atags VALUES('$w[a_id]', '$w2[t_id]', '$w2[tn]')";
        //echo $q2;
        //mysql_query($q2);
        echo mysql_error();
      }
    }
    //mysql_query("UPDATE ep_authors SET a_tags = '$st' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // years
    $r2 = mysql_query("SELECT AVG(LEFT(w_years, 4)) as sy FROM ep_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>0) {
      $w2 = mysql_fetch_assoc($r2);
      //if ($w2[sy] > 0) mysql_query("UPDATE ep_authors SET a_start = '$w2[sy]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    */
    //years
    /*
    if ($w[a_year1] == 0) {
      $years = $w[a_years];
      if ($years[0] == "-") {
        $years = substr($years, 1);
        $year1 = 0-substr($years, 0, strpos($years, '-'));
      } else {
        $year1 = substr($years, 0, strpos($years, '-'));
      }
      $year2 = substr($years, strpos($years, '-')+1);
      if (($year2 - $year1)<15) echo "Error with years<br>";
      mysql_query("UPDATE ep_authors SET a_year1 = '$year1', a_year2='$year2' WHERE a_id='$w[a_id]'");
      echo mysql_error();
      echo "$w[a_name]: /$year1/$year2/<br>\r\n";
    }
    */
    // works
    /*
    $r2 = mysql_query("SELECT COUNT(*) as cnt FROM ep_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    mysql_query("UPDATE ep_authors SET a_works = '$w2[cnt]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // ratings
    $r2 = mysql_query("SELECT MAX(w_rating) as maxr FROM ep_works WHERE a_id=$w[a_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    mysql_query("UPDATE ep_authors SET a_maxr = '$w2[maxr]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    */
    //mysql_query("UPDATE ep_works SET a_maxr = '$w2[maxr]' WHERE a_id='$w[a_id]'");
    //echo mysql_error();
    // Calculate author rating
    /*
    $r2 = mysql_query("SELECT w_id, w_rating FROM ep_works WHERE a_id=$w[a_id] ORDER BY w_rating DESC");
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
    mysql_query("UPDATE ep_authors SET a_rating='$a_rating' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    */
  }
  
  // Calculate name2
  $r = mysql_query("SELECT * FROM ep_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $sa = explode(' ', $w[a_name]);
    $surname = $sa[count($sa)-1];
    //if ($w[a_name2] == '') mysql_query("UPDATE ep_authors SET a_name2='$surname' WHERE a_id=$w[a_id]");
    echo mysql_error();
    $r2 = mysql_query("SELECT * FROM ep_authors WHERE a_name2='$w[a_name2]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>1) {
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        $init = substr($w2[a_name], 0, 1);
        //mysql_query("UPDATE ep_authors SET a_name2='$init $surname' WHERE a_id='$w2[a_id]'");
        echo mysql_error();
      }
    }
  }
  
  stop_time();
?>
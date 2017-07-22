<?
  // This is works loader for rare authors
  include "../mysql.php";
  include "style.php";

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  function find_closest_key($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $key);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  $w_id = $_GET[w_id];
  $tr_wid = $_GET[tr_wid];
  
  if ($w_id != 0) {
    //mysql_query("UPDATE rl_works SET tr_wid='$tr_wid' WHERE w_id='$w_id'");
    echo mysql_error();
    echo "Loaded $tr_wid to $w_id";
    exit;
  }
  
  $fa = file("allbooks-ru.txt");
  $c = count($fa);
  $old_name = '';
  $x=0;
  for ($i=0; $i<$c; $i++) {
    $st2 = $fa[$i];
    $st2 = iconv("windows-1251", "utf-8", $st2);
    $a_name = substr($st2, 0, strpos($st2, ' - '));
    $w_name = substr($st2, strpos($st2, ' - ')+3);
    $w_name = substr($w_name, 0, strpos($w_name, ' | '));
    $wname[$a_name][] = $w_name;
    $wname2[$a_name][] = trim(mb_strtolower($w_name));
  }
  
  $q = "SELECT a_name, a_id, tr_id, SUM(t_len) AS tl, SUM(t_len2) AS tl2, SUM(b_len) AS bl FROM rl_works LEFT JOIN rl_authors USING (a_id) GROUP BY a_id HAVING tl=0 AND tl2=0 AND bl=0 AND tr_id!=''";
  $r2 = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_array($r2);
    //echo "Author $w[a_name]
    $r = mysql_query("SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE a_id='$w2[a_id]' AND tr_wid=''");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($x=0; $x<$n; $x++) {
      $w = mysql_fetch_array($r);
      $w[w_name] = trim(str_replace('ё', 'е', $w[w_name]));
      $w[w_name] = mb_strtolower($w[w_name]);
      $w_id = find_closest($w[w_name], $wname2[$w[tr_id]]);
      $w_name = $wname[$w[tr_id]][$w_id];
      if ($last_lev == 0) {
        //mysql_query("UPDATE rl_works SET tr_wid='$w_name' WHERE w_id='$w[w_id]'");
        echo mysql_error();
        continue;
      }
      if ($last_lev>0) echo "<b>";
      if (($last_lev>strlen($w[w_name])/3) && ($last_lev>5)) echo "<font color=red>";
      echo "$w[a_name] - $w[w_name] - <a href='load-traum2.php?w_id=$w[w_id]&tr_wid=$w_name' target=_blank>$w_name</a></b></font> ";
      echo "<br>";
    }
  }
?>
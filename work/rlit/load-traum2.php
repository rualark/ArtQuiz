<?
  // This is works loader
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
  
  function find_closest2($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      if (strpos($val, $st) === false) continue;
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
    mysql_query("UPDATE rl_works SET tr_wid=\"$tr_wid\" WHERE w_id='$w_id'");
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
    $w_type = trim(substr($st2, strpos($st2, ' | ')+3));
    if (($w_type == 'fb2') || ($w_type == 'txt')) {
      $wname[$a_name][] = $w_name;
      if (strpos($w_name, ' - ') !== false) $w_name = substr($w_name, strpos($w_name, ' - ')+3);
      if (strpos($w_name, ' (') !== false) $w_name = substr($w_name, 0, strpos($w_name, ' ('));
      $wname2[$a_name][] = trim(mb_strtolower($w_name));
    }
  }
  
  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE tr_wid='' AND t_len=0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $w[w_name] = trim(str_replace('ё', 'е', $w[w_name]));
    $w[w_name] = mb_strtolower($w[w_name]);
    if (strpos($w[w_name], ' (') !== false) $w[w_name] = substr($w[w_name], 0, strpos($w[w_name], ' ('));
    $w_id = find_closest2($w[w_name], $wname2[$w[tr_id]]);
    $w_name = $wname[$w[tr_id]][$w_id];
    $w_name2 = $wname2[$w[tr_id]][$w_id];
    if ($last_lev == 0) {
      echo "FOUND! <a target=_blank href='../../rlit/authors.php?a_id=$w[a_id]'>$w[a_name]</a> - $w[w_name] - <a href=\"load-traum2.php?w_id=$w[w_id]&tr_wid=$w_name\" target=_blank>$w_name</a></b></font> - $w_name2<br>";
      //mysql_query("UPDATE rl_works SET tr_wid='$w_name' WHERE w_id='$w[w_id]'");
      echo mysql_error();
      continue;
    }
    if ($last_lev>0) echo "<b>";
    if (($last_lev>strlen($w[w_name])/3) && ($last_lev>5)) echo "<font color=red>";
    echo "<a target=_blank href='../../rlit/authors.php?a_id=$w[a_id]'>$w[a_name]</a> - $w[w_name] - <a href=\"load-traum2.php?w_id=$w[w_id]&tr_wid=$w_name\" target=_blank>$w_name</a></b></font> ";
    echo "<br>";
  }
?>

How to load new traum:
- Create associations with works (load-traum2)
- Create copy-traum.bat (copy-traum.php)
- Run copy-traum.bat at traum library
- Copy extracted files into traum folder
- Load files into database (finish-traum.php)
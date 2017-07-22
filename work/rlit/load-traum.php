<?
  // This is main loader
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
  
  $a_id = $_GET[a_id];
  $tr_id = $_GET[tr_id];
  
  if ($a_id != 0) {
    //mysql_query("UPDATE rl_authors SET tr_id='$tr_id' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $tr_id to $a_id";
    exit;
  }

  /*
  // load names
  $r = mysql_query("SELECT * FROM rl_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(' ', $name);
    $name2 = mb_substr($name, 0, 1).' '.$sa[count($sa)-1];
    $aname[$wa[a_id]] = trim($name);
    //$aname2[$wa[a_id]] = trim($name2);
  }
  // load names
  $r = mysql_query("SELECT * FROM rl_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }

  $fa = file("allbooks-ru.txt");
  $c = count($fa);
  $old_name = '';
  $x=0;
  for ($i=0; $i<$c; $i++) {
    $st2 = $fa[$i];
    $st2 = iconv("windows-1251", "utf-8", $st2);
    $a_name = substr($st2, 0, strpos($st2, ' - '));
    $x++;
    if ($a_name != $old_name) {
      $sa = explode(' ', $old_name);
      if (strpos($old_name, '+') === false) $wcnt[$sa[0].' '.$sa[1]][$old_name] = $x;
      $x=0;
      $old_name = $a_name;
      //if ($a_name != '') echo "$a_name<br>";
      $sa = explode(' ', $a_name);
      $aname2[] = "$sa[1] $sa[0]";
      if (strpos($a_name, '+') === false) $aname3[mb_substr($sa[1], 0, 1)." ".$sa[0]][] = $a_name;
      $aname4[] = $a_name;
    }
    //exit;
  }
  */
  
  /*
  $q = "SELECT * FROM rl_authors WHERE tr_id = ''";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q = "SELECT COUNT(*) AS cnt FROM rl_works WHERE a_id='$w[a_id]' AND t_len=0";
    $r2 = mysql_query($q);
    $w2 = mysql_fetch_array($r2);
    if ($w2[cnt] == 0) {
      $a_name = str_replace('ё', 'е', $w[a_name]);
      $a_id = find_closest($a_name, $aname2);
      if ($last_lev == 0) {
        //mysql_query("UPDATE rl_authors SET tr_id='$aname4[$a_id]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
        continue;
      }
      if ($last_lev>0) echo "<b>";
      if ($last_lev>5) echo "<font color=red>";
      echo "$w[a_name] - <a href='load-traum.php?a_id=$w[a_id]&tr_id=$aname4[$a_id]' target=_blank>$aname2[$a_id]</a></b></font> ";
      if ($last_lev>0) {
        $a_name2 = str_replace('ё', 'е', $w[a_name2]);
        $sa = explode(' ', $a_name2);
        $surname = mb_substr($w[a_name], 0, 1)." ".$sa[count($sa)-1];
        //echo "$surname ";
        //$surname2 = find_closest_key($surname, $aname3);
        if (is_array($aname3[$surname])) foreach ($aname3[$surname] as $key => $val) {
          echo " | <a href='load-traum.php?a_id=$w[a_id]&tr_id=$val' target=_blank>$val</a>";
        }
        echo "</b> | <a onclick='r=prompt(\"tr_id:\", \"\"); window.open(\"load-traum.php?a_id=$w[a_id]&tr_id=\"+r); return false' href=# target=_blank>Edit</a>";
      }
      echo "<br>";
    }
    //if ($i>20) break;
  }
  */

  /*
  $q = "SELECT * FROM rl_authors WHERE tr_id = ''";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $sa = explode(' ', $w[a_name]);
    $surname = $sa[count($sa)-1];
    $q = "SELECT COUNT(*) AS cnt FROM tr_authors WHERE tr_name LIKE '$surname%'";
    $r2 = mysql_query($q);
    $w2 = mysql_fetch_array($r2);
    if ($w2[cnt]>0) {
      echo "<a target=_blank href='showtraum.php?act=search&a_name=$surname, %'>$w[a_name]</a><br>";
    }
  }
  */

  /*
  $q = "SELECT * FROM rl_authors";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $sa = explode(' ', $w[tr_id]);
    $key = $sa[0].' '.$sa[1];
    if ((count($wcnt[$key])>1) && (strpos($w[a_name], '.') === false)) {
      echo "<b>$w[a_name]</b> $w[tr_id] ";
      arsort($wcnt[$key]);
      print_r($wcnt[$key]);
      $tr_id = key($wcnt[$key]);
      echo " $tr_id ";
      echo "<br>";
      mysql_query("UPDATE rl_authors SET tr_id='$key' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
  }
  */
?>
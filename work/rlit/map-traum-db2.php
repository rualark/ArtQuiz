<?
  // This is traum mapper for authors with no text
  include "../mysql.php";
  include "style.php";

  $w_id = $_GET[w_id];
  $tr_wid = $_GET[tr_wid];
  
  if ($w_id != 0) {
    mysql_query("UPDATE rl_works SET tr_wid=\"$tr_wid\" WHERE w_id='$w_id'");
    echo mysql_error();
    echo "Loaded $tr_wid to $w_id";
    exit;
  }
  
  function find_closest_work($st, $tr_id) {
    GLOBAL $last_lev, $min_key;
    $st2 = mysql_real_escape_string($st);
    $min = 10000;
    $c = count($arr);
    $q = "SELECT * FROM tr_books WHERE tr_id='$tr_id'";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $l = levenshtein($st, $w[b_name]);
      if ($l < $min) {
        $min = $l;
        $min_key = $w[tr_wid];
        $min_val = $w[b_name];
      }
    }
    $last_lev = $min;
    return $min_val;
  }
  
  function find_closest_work2($st, $tr_id) {
    GLOBAL $last_lev, $min_key;
    $st2 = mysql_real_escape_string($st);
    $min = 10000;
    $c = count($arr);
    $q = "SELECT * FROM tr_books WHERE tr_id='$tr_id' AND b_name LIKE '%$st2%'";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $l = levenshtein($st, $w[b_name]);
      if ($l < $min) {
        $min = $l;
        $min_key = $w[tr_wid];
        $min_val = $w[b_name];
      }
    }
    $last_lev = $min;
    return $min_val;
  }
  
  /*
  // Map authors
  $q = "SELECT * FROM tr_authors";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $w[a_name] = str_replace(',', '', $w[a_name]);
    $search = "$w[a_name] $w[a_midname]";
    if ($search == '') continue;
    echo "$w[a_name] $w[a_midname]<br>";
    $q = "SELECT * FROM rl_authors WHERE tr_id_old='$search'";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $w2 = mysql_fetch_array($r2);
    if ($n2>0) {
      mysql_query("UPDATE rl_authors SET tr_id='$w[tr_id]' WHERE tr_id_old='$search'");
      echo mysql_error();
    }
  }
  */
  
  $q = "SELECT * FROM rl_authors WHERE tr_id != 0 ORDER BY a_rating DESC";
  $r3 = mysql_query($q);
  echo mysql_error();
  $n3 = mysql_numrows($r3);
  for ($y=0; $y<$n3; $y++) {
    $w3 = mysql_fetch_array($r3);
    // Count works
    $q = "SELECT COUNT(*) AS cnt FROM rl_works WHERE a_id=$w3[a_id] AND (t_len>0 OR t_len2>0)";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_array($r);
    if ($w[cnt] > 0) continue;
    // Map works
    $q = "SELECT * FROM rl_works 
      LEFT JOIN rl_authors USING (a_id) WHERE a_id=$w3[a_id] AND tr_wid=0";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $q = "SELECT * FROM tr_books WHERE tr_id='$w[tr_id]' AND b_name = '$w[w_name]'";
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      $w2 = mysql_fetch_array($r2);
      if ($n2>0) {
        mysql_query("UPDATE rl_works SET tr_wid='$w2[tr_wid]' WHERE w_id='$w[w_id]'");
        echo mysql_error();
      } else {
        //echo "<font color=red>";
        $w[w_name2] = trim(str_replace('ё', 'е', $w[w_name]));
        $w[w_name2] = mb_strtolower($w[w_name2]);
        if (strpos($w[w_name2], ' (') !== false) $w[w_name2] = substr($w[w_name2], 0, strpos($w[w_name2], ' ('));
        $b_name = find_closest_work2($w[w_name2], $w[tr_id]);
        if ($b_name == '') {
          $b_name = find_closest_work($w[w_name2], $w[tr_id]);
        }
        echo "$w[w_name] - <a href=\"map-traum-db.php?w_id=$w[w_id]&tr_wid=$min_key\" target=_blank>$b_name</a>";
        echo " <a target=_blank href='showtraum.php?confirm=1&act=addwork&tr_id=$w[tr_id]&tr_wid=$min_key'><font color=red>N</font></a>";
        echo " <a target=_blank href='showtraum.php?act=showauthor&tr_id=$w[tr_id]'><font color=green>$w[a_name]</font></a>";
        echo "<br>";
      }
    }
  }
  
?>

How to load new traum:
- Create associations with works (map-traum-db)
- Create copy-traum2.bat (copy-traum2.php)
- Run copy-traum2.bat at traum library
- Copy extracted files into traum folder
- Load files into database (finish-traum.php)
- Update encodings and ratings (count-stat.php)
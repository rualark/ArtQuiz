<?
  // Sync with epquiz
  include "../mysql.php";
  
  $c_id = $_GET[c_id];
  $a_name = $_GET[a_name];
  $b_name = $_GET[b_name];
  
  if ($a_name != '') {
    $r = mysql_query("SELECT * FROM eq_authors WHERE a_name='$a_name'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    if ($w[a_name] == $a_name) {
      $r = mysql_query("UPDATE eq_authors SET cc_id=$c_id WHERE a_name='$a_name'");
      echo mysql_error();
      $r = mysql_query("UPDATE cc_composers SET eq_id=$w[a_id] WHERE c_id='$c_id'");
      echo mysql_error();
      echo "Set $a_name to $c_id";
    } else die("<font color=red>Not found $a_name</font>");
    exit;
  }
  
  if ($b_name != '') {
    $r = mysql_query("UPDATE cc_composers SET с_name='$b_name' WHERE c_id='$c_id'");
    echo mysql_error();
    echo "Renamed $c_id to $b_name";
    exit;
  }
  
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
  // load names
  $r = mysql_query("SELECT * FROM eq_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    //$sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
    $arating[$wa[a_id]] = $wa[a_rating];
    $atype[$wa[a_id]] = $wa[a_type];
  }

  $q = "SELECT * FROM cc_composers WHERE eq_id=0 ORDER BY c_rating";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $last_lev = 0;
    if ($w[eq_id] > 0) $a_id = $w[eq_id];
    else {
      $a_id = find_closest($w[c_name3], $aname);
      if ($last_lev>0) echo "<b>";
      if ($last_lev>5) echo "<font color=red>";
    }
    //if (($last_lev==0)) continue;
    echo "$w[c_rating] - <a target=_blank href='https://www.brainyquote.com/search_results.html?q=$w[c_name3]'>$w[c_name3]</a> - $aname[$a_id] - $atype[$a_id] - <a onclick='r=prompt(\"eq name:\", \"\"); window.open(\"sync-cc.php?c_id=$w[c_id]&a_name=\"+r); return false' href=# target=_blank>$arating[$a_id]</a></b></font>";
    if ($last_lev>0) {
      echo " <a target=_blank href='sync-cc.php?c_id=$w[c_id]&a_name=$aname[$a_id]'>Apply</a>";
      echo " <a target=_blank href='sync-cc.php?c_id=$w[c_id]&b_name=$aname[$a_id]'>Rename</a>";
    } else {
      //$r2 = mysql_query("UPDATE eq_authors SET cc_id=$w[c_id] WHERE a_id='$a_id'");
      echo mysql_error();
      //$r2 = mysql_query("UPDATE cc_composers SET eq_id='$a_id' WHERE c_id='$w[c_id]'");
      echo mysql_error();
    }
    echo "<br>";
  }
  
?>
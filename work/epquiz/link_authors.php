<?
  include "mysql.php";
  include "lib.php";
  include "style.php";

  start_time();

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
  $r = mysql_query("SELECT * FROM ep_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $aname[$wa[a_id]] = trim($name);
    mysql_query("UPDATE l_authors SET ea_id='$wa[a_id]' WHERE a_id='$wa[ra_id]'");
    echo mysql_error();
  }

  // check tags
  $r = mysql_query("SELECT * FROM ep_tdesc");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT * FROM l_tdesc WHERE t_name='$w[rt_name]'");
    echo mysql_error();
    $n2 = mysql_numrows($r);
    //$w2 = mysql_fetch_assoc($r);
    if ($n2 == 0) echo "Not found tag $w[rt_name]<br>";
    else {
      //mysql_query("UPDATE l_tdesc SET et_name='$w[t_name]' WHERE t_name='$w[rt_name]'");
      echo mysql_error();
    }
  }

  /*
  // Load russian
  $r = mysql_query("SELECT * FROM l_authors WHERE a_country != 'RUS'");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=1 style='border-collapse: collapse;'>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $name = rus2translit($w[a_name]);
    $key = find_closest($name, $aname);
    //if ($last_lev>1) $key = 0;
    //echo "<b>$name - $aname[$key]</b><br>";
    $name = str_replace("'", "", $name);
    //mysql_query("UPDATE ep_authors SET ra_id='$w[a_id]', ra_name='$name' WHERE a_id='$key'");
    echo mysql_error();
  }
  echo "</table>";
  */
  stop_time();
?>
<?
  include "../qlib.php";
  include "../auth.php";

  start_time();
  $debug=1;
  for ($i=0; $i<100; $i++) {
    $b_id = choose_block_new();
    $t_id=$ts[t_id];
    $r = mysql_query("SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id) WHERE t_id=$t_id");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $cstat[$w[c_name4]] ++;
    if ($c_id_old == $w[c_id]) {
      //echo " <font color=blue>Duplicate composer</font>";
      $dcstat[$w[c_name4]] ++;
    }
    if (($b_id_old == $b_id) && ($t_id_old == $t_id)) {
      echo " <font color=red>Duplicate block</font>";
      $dbstat[$w[c_name4]] ++;
    } elseif ($t_id_old == $t_id) {
      echo " <font color=green>Duplicate track</font>";
      $dtstat[$w[c_name4]] ++;
    }
    $ts2[$t_id] ++;
    $b_id_old = $b_id;
    $t_id_old = $t_id;
    $c_id_old = $w[c_id];
    echo " $t_id $b_id<br>";
  }
  print_r($cstat);
  echo "<br>Dup block: ";
  print_r($dbstat);
  echo "<br>Dup track: ";
  print_r($dtstat);
  echo "<br>Dup comp: ";
  print_r($dcstat);
  stop_time();
?>
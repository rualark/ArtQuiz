<?
  include "lib.php";
  // check time of pages

  start_time();
  $r = mysql_query("SELECT * FROM nq_pdf WHERE t_id>0");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $max = min($w[w_qpage]+4, $w[w_page2]);
    for ($x=$w[w_qpage]+1; $x<=$max; $x++) {
      $r2 = mysql_query("SELECT * FROM nq_jpeg WHERE w_id=$w[w_id] AND page='$x'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      $w2 = mysql_fetch_assoc($r2);
      if ($w2[t_time] == 0) echo "No time for <a target=_blank href=works.php?w_id=$w[w_id]&p=$x>$w[w_name]</a> page $x<br>";
    }
  }
  stop_time();
?>
<?
  include "../qlib.php";
  include "../auth.php";

  start_time();
  mysql_query("DELETE FROM cc_inext");
  echo mysql_error();
  $q = "SELECT HEX(i_cab) as cab, i_anum, i_cnum FROM cc_isles";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    create_inext($w[cab], $w[i_anum], $w[i_cnum]-1);
  }
  
  stop_time();
?>

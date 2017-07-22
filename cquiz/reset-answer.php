<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  protect_session();
  start_time();

  if ($i_am_admin==0) die("Only for admins.");
  $q="SELECT * FROM cc_qlog WHERE u_id='$us[u_id]' ORDER BY l_time DESC LIMIT 1";
  $r=mysql_query2($q);
  echo mysql_report_error();
  $w=mysql_fetch_assoc($r);
  if ($w[l_ok]==1) die("Last answer for user $us[u_name] is already reset.");
  $r=mysql_query2("UPDATE cc_qlog SET l_ok=1, l_wrong2=0, l_cent=0, c_id2=c_id WHERE l_id='$w[l_id]'");
  echo mysql_report_error();
  echo "Reset last answer for user $us[u_name] successfully.";
  stop_time();
?>

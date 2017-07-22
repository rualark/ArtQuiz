<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  start_time();
  secure_variable("su_id");
  
  if ($u_id==0) $u_id = $us[u_id];
  
  $q5 = "SELECT COUNT(*) as cnt FROM cc_ctracks";
  $r5 = mysql_query2($q5);
  echo mysql_report_error();
  $w = mysql_fetch_assoc($r5);
  $q5 = "SELECT COUNT(*) as cnt FROM cc_tstat WHERE u_id='$u_id'";
  $r5 = mysql_query2($q5);
  echo mysql_report_error();
  $w2 = mysql_fetch_assoc($r5);
  $q5 = "SELECT COUNT(*) as cnt FROM cc_qblocks";
  $r5 = mysql_query2($q5);
  echo mysql_report_error();
  $w3 = mysql_fetch_assoc($r5);
  $q5 = "SELECT COUNT(*) as cnt FROM cc_bstat WHERE u_id='$u_id'";
  $r5 = mysql_query2($q5);
  echo mysql_report_error();
  $w4 = mysql_fetch_assoc($r5);
  
  $r = mysql_query2("SELECT * FROM cc_users 
    WHERE cc_users.u_id='$u_id'");
  echo mysql_report_error();
  $ua = mysql_fetch_array($r);
  
  echo "$ua[u_name] has heared <b>".round($w4[cnt]/$w3[cnt]*100, 0)."%</b> of $w3[cnt] blocks, ";
  // <b>".round($w4[sec]/$w3[cnt]*100, 0)."%</b> of ".round($w3[cnt]/60, 0)." hours of music, 
  echo " <b>".round($w2[cnt]/$w[cnt]*100, 0)."%</b> of $w[cnt] tracks. ";
  stop_time();
?>
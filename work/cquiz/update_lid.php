<?
  include "qlib.php";
  include "auth.php";
  include "style.php";

  secure_variable("tag");
  
  if (!isset($tag)) {
    write_log("log/cquiz-system.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." Attempt to update lid blocked without session");
    die("<a href=?tag=".microtime(true).">Start new update session</a>");
  }
  
  if ((microtime(true)-$tag)>10) {
    write_log("log/cquiz-system.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." Tried to use timed out session for lid update");
    die("This session is timed out. You need to <a href=?>start new session</a>");
  }
  
  start_time();
  //update_system("s_state", 2);
  //$debug=1;
  
  echo "Updating lid...<br>";
  update_lid();
  stop_time();

  //update_system("s_state", 1);
?>

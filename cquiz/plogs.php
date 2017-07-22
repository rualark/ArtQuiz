<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("cab");
  secure_variable("u_id");
  secure_variable("level");
  secure_variable("f_time");
  secure_variable("a_count");

  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  if (!isset($cab)) $cab = "";
  if (!isset($u_id)) $u_id = -1;
  
  show_user_plogs($u_id, $cab, $level, $f_time, $a_count);
  stop_cache($suffix);
?>
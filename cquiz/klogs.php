<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("cab");
  secure_variable("u_id");
  secure_variable("filter");

  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  if (!isset($cab)) $cab = "";
  
  show_user_klogs($u_id, $cab);
  stop_cache($suffix);
?>
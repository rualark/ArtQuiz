<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("cab");
  secure_variable("u_id");

  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  if (!isset($cab)) $cab = "";
  
  echo "<p align=right>";
  if ($i_am_admin) echo "<a href=admin.php>Admin</a> | ";
  echo "<a href=forum.php>Last comments</a> | ";
  echo "<a href=plogs.php?cab=$cab>Last games</a> | ";
  echo "<a href=klogs.php>Island news</a> | ";
  echo "<p>";
  show_user_logs(-1, $cab);
  stop_cache($suffix);
?>
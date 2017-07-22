<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("u_id");

  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  echo "<b>Last comments:</b>";
  show_forum("", 200, 900, 1, "", $u_id);
  echo "<p>Showing 200 last comments";
  stop_cache($suffix);
?>
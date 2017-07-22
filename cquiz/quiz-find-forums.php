<?
  ignore_user_abort(true);
  include "qlib.php";
  include "auth.php";
  include "style.php";

  start_time();
  secure_variable("cas");
  secure_variable("limit");
  secure_variable("size");
  secure_variable("editbox");
  
  $ca_selected=explode(",", $cas);
  echo "<base target=_blank />";
  echo "<body bgcolor=#eeeeee>";
  echo "<b>Searching forums for these composers:</b><br>";
  find_forums($limit, $size, $editbox);
  
  stop_time();
?>
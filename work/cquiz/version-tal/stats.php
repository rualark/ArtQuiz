<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  secure_variable("su_id");
  
  echo "<p align=right><a href=cstats.php?u_id=$su_id>Composers stats</a> | ";
  echo "<a href=graph.php?u_id=$su_id>Graphs</a> | ";
  echo "<a href=ptracks.php?u_id=$su_id>Problem tracks</a><p>";
  if (isset($su_id)) {
    show_user_stat($su_id);
    show_user_logs($su_id);
  } else {
    show_user_stat();
    show_user_logs();
    echo "<br>";
  }
?>
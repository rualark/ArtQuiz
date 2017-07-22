<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  secure_variable("su_id");
  
  $suffix = "";
  if ($su_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  $u_id = $us[u_id];
  if ($su_id>0) $u_id = $su_id;
  
  echo "<p align=right><a href=cstats.php?u_id=$su_id>Composers stats</a> | ";
  echo "<a href=graph.php?u_id=$su_id>Graphs</a> | ";
  echo "<a href=ptracks.php?u_id=$su_id>Problem tracks</a> | ";
  echo "<a href=ptracks.php?showfav=1&u_id=$su_id>Favorite tracks</a> | ";
  echo "<a href=stats2.php?u_id=$su_id>Totals</a> | ";
  echo "<a href=ts.php?su_id=$u_id>Timesheet</a> | ";
  echo "<a href=quiz.php?su_id=$u_id&nc=".microtime(TRUE).">Follow</a> | ";
  //echo "<a href=isles.php?u_id=$u_id>My islands</a>";
  echo "<p>";
  if (isset($su_id)) {
    show_user_stat($su_id);
    show_user_king($su_id);
    show_user_logs($u_id, $cab, 100);
    //show_user_plogs($su_id);
  } else {
    show_user_stat();
    show_user_king();
    //show_user_plogs();
    show_user_logs($u_id, $cab, 100);
    echo "<br>";
  }
  include "footer.php";
  stop_cache($suffix);
?>
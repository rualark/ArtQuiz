<?
  ignore_user_abort(true);
  include "qlib.php";
  include "auth.php";
  include "style.php";

  start_time();
  secure_variable("state");
  secure_variable("su_id");
  secure_variable("u_last");
  
  // Set links to open in parent window
  //echo "<base target=_parent />";
  for ($i=0; $i<10; $i++) {
    $r=mysql_query2("SELECT t_id, u_last FROM cc_users WHERE u_id='$su_id'");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    //die ($u_last." ".$w[u_last]);
    $link1 = "<script>parent.document.location.href='quiz.php?su_id=$su_id&nc=".microtime(TRUE)."&c_id=1';</script>";
    $link2 = "<script>parent.document.location.href='quiz.php?su_id=$su_id&nc=".microtime(TRUE)."';</script>";
    if ($state==0) {
      if ($w[t_id] == 0) die($link1);
      if ($w[u_last] != $u_last) die($link1);
    }
    if ($state>0) {
      if (($w[t_id] != 0) || ($w[u_last] != $u_last)) die($link2);
      if ($w[u_last] != $u_last) die($link1);
    }
  }
  echo "<img align=center height=30 src=images/process_animation.gif> Waiting for followed user action...<br>";
  //stop_time();
  die ("<script language=JavaScript>setTimeout('rfl()', 1000); function rfl() { location = 'quiz-wait.php?u_last=$u_last&su_id=$su_id&state=$state&nc=".microtime(TRUE)."'; } </script>");
?>
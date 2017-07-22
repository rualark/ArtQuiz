<?
  ignore_user_abort(true);
  include "qlib.php";
  include "auth.php";
  include "style.php";

  start_time();
  secure_variable("f_id");
  secure_variable("cab");
  
  // Set links to open in parent window
  echo "<base target=_parent />";
 
  if ($act == "send-forum") {
    if (mail_forum($f_id, $cab)) {
      echo "Mail sent successfully.";
      mysql_query2("UPDATE cc_forum SET f_mailsent=1 WHERE f_id='$f_id'");
      echo mysql_report_error();
    } else {
      echo "Error sending mail.";
    }
  }
?>
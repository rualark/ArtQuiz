<?
  ignore_user_abort(true);
  include "qlib.php";
  include "style.php";
  include "menu.php";

  start_time();
  secure_variable("uname");
  secure_variable("h");
  secure_variable("u_id");
  secure_variable("newp");
  secure_variable("repp");
  
  // Set links to open in parent window
  echo "<base target=_parent />";
 
   if ($newp != "") {
    $q = "SELECT * FROM cc_users WHERE u_id='$u_id'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    $uname = $ua[u_name];
    load_user();
    if (strlen($newp)<5) die("<font color=red>Minimum password length is 5. Go back</font>");
    if ($newp != $repp) die("<font color=red>Passwords do not match. Go back</font>");
    mysql_query2("UPDATE cc_users SET u_pass=PASSWORD('$newp') WHERE u_id='$u_id'");
    echo mysql_report_error();
    die("Successfully set new password. Please <a href=isles.php>login</a>.");
  }

  if ($h != "") {
    $q = "SELECT * FROM cc_users WHERE u_id='$u_id'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    if ($ua[u_pass] == $h) {
      echo "<form action=mailpass.php method=get>";
      echo "<input type=hidden name=u_id value='$u_id'>";
      echo "<p>Set new password for user <b>$ua[u_name]</b>:";
      echo "<table>";
      echo "<tr>";
      echo "<td>";
      echo "New password: ";
      echo "<td>";
      echo "<input type=password name=newp>";
      echo "<tr>";
      echo "<td>";
      echo "Repeat new password: ";
      echo "<td>";
      echo "<input type=password name=repp>";
      echo "<tr>";
      echo "<td>";
      echo "<td>";
      echo "<input type=submit>";
      echo "</table>";
      echo "</form>";
    } else {
      echo "Password has already been changed. You can try to <a href=mailpass.php>generate new link</a> or <a href=isles.php>login</a>.";
    }
    stop_time();
    die();
  }
  
  if ($uname != "") {
    $q = "SELECT * FROM cc_users WHERE u_name='$uname'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    if (strtolower($ua[u_name]) == strtolower($uname)) {
      echo "Please check your mail that you used to register.<br><br>";
      $to      = "$ua[u_email]";
      $subject = "Password for CQuiz";
      $message = "Please follow the link to set new password for user $ua[u_name]:\r\n\r\n".
        $_SERVER["HTTP_HOST"].dirname($_SERVER["REQUEST_URI"]).
        "/mailpass.php?u_id=$ua[u_id]&h=$ua[u_pass]\r\n\r\nYou received this mail because someone tried to recover your password. If it was not you, you can do nothing.";
      $headers = "From: ComposerQuiz@gmail.com\r\n" .
        "Reply-To: ComposerQuiz@gmail.com\r\n" .
        "Bcc: ComposerQuiz@gmail.com\r\n" .
        "X-Mailer: PHP/" . phpversion();

      if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent successfully.";
      } else {
        echo "Error sending mail.";
      }
      write_log("log/mail.log", "to: $to sub: $subject mess: $message headers: $headers");
    } else {
      echo "Not found user <b>$uname</b>. Try inputting part of your username, I will try to search it for you<br><br>";
      $q = "SELECT * FROM cc_users WHERE u_name LIKE '%$uname%' LIMIT 100";
      $r = mysql_query2($q);
      echo mysql_report_error();
      $n = mysql_numrows($r);
      for ($i=0; $i<$n; $i++) {
        $ua = mysql_fetch_array($r);
        echo "Found user $ua[u_name]<br>";
      }
    }
    stop_time();
    die("<p><a href=mailpass.php>Go back</a>");
  }
  
  echo "<p>This form will help you to generate new password";
  echo "<form action=mailpass.php method=get>";
  echo "Please enter your user name: ";
  echo "<input type=text name=uname> ";
  echo "<input type=submit> ";
  echo "</form>";
  stop_time();
?>
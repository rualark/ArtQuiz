<?
  // Remember user/pass
  session_start();
  $uname = $_SERVER['PHP_AUTH_USER'];
  $upass = $_SERVER['PHP_AUTH_PW'];
  if ((!isset($_SERVER['PHP_AUTH_USER']) && ($_SESSION['PHP_AUTH_USER'] != '')))
    $uname = $_SESSION['PHP_AUTH_USER'];
  if ((!isset($_SERVER['PHP_AUTH_PW']) && ($_SESSION['PHP_AUTH_PW'] != '')))
    $upass = $_SESSION['PHP_AUTH_PW'];
  $admin_unames = array("rualark", "Rualark", "morpheus", "Morpheus", "YVArkh", "faraon");
  $r = mysql_query("SELECT u_id FROM cc_users WHERE u_name='$uname' AND 
    u_pass=PASSWORD('$upass')");
  $n = mysql_numrows($r);
  if (($uname == '') || ($n == 0)) {
    if ($auth_necessary == 1) {
      header('WWW-Authenticate: Basic realm="CQuiz"');
      header('HTTP/1.0 401 Unauthorized');
      echo "Not authenticated. Please <a href=$url_main/reg.php>Register</a> or <a href=$url_main/mailpass.php>Reset your password</a>.";
      exit;
    }
    //echo "!";
  } else {
    $ua = mysql_fetch_assoc($r);
    $us = $ua;
    //echo "?";
  }
  //echo "u=$uname";
  //echo "<div style='position: fixed; bottom: 0; right: 0;'><font color=lightgray>*</font></div>";

  if (($uname == "") && ($auth_necessary == 1)) die("Blank username not allowed. Please <a href=$url_main/reg.php>Register</a> or <a href=$url_main/mailpass.php>Reset your password</a>.");
  $i_am_admin = in_array($uname, $admin_unames);

  $_SESSION['PHP_AUTH_USER'] = $uname;
  $_SESSION['PHP_AUTH_PW'] = $upass;

  //if ($uname == "rualark") $debug=1;
  //if ($uname != "rualark") 
  //echo("<font size=+2 color=red><b>System is under maintenance. You are recommended to wait half an hour and update this page. You will be able to continue from where you left. If you continue, system can work, but you can experience some errors. Please continue at your own risk. Sorry for inconvenience.</font></b>");
?>
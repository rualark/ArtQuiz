<?
  $uname = $_SERVER['PHP_AUTH_USER'];
  $r = mysql_query2("SELECT * FROM cc_users WHERE u_name='{$_SERVER['PHP_AUTH_USER']}' AND 
    u_pass=PASSWORD('{$_SERVER['PHP_AUTH_PW']}')");
  $n = mysql_numrows($r);
  if ((!isset($_SERVER['PHP_AUTH_USER'])) || ($n == 0)) {
    if ($auth_not_necessary == 0) {
      header('WWW-Authenticate: Basic realm="CQuiz"');
      header('HTTP/1.0 401 Unauthorized');
      echo 'Not authenticated. Please <a href=reg.php>Register</a> or <a href=mailpass.php>Reset your password</a>.';
      exit;
      // For load testing
    }
  } else {
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    //echo "<p>You entered password {$_SERVER['PHP_AUTH_PW']}.</p>";
  }
  $uname = $_SERVER['PHP_AUTH_USER'];

  if (($uname == "") && ($auth_not_necessary == 0)) die("Blank username not allowed. Please <a href=reg.php>Register</a> or <a href=mailpass.php>Reset your password</a>.");
  //if ($uname == "rualark") $debug=1;
  //if ($uname != "rualark") 
  //echo("<font size=+2 color=red><b>System is under maintenance. You are recommended to wait half an hour and update this page. You will be able to continue from where you left. If you continue, system can work, but you can experience some errors. Please continue at your own risk. Sorry for inconvenience.</font></b>");
  load_system();
  if ($cc_system[s_state] == 2) die("<font color=red><b>System is under maintenance. Please wait several minutes and update this page. You will be able to continue from where you left.</font></b>");
  load_user();
  $i_am_admin = in_array($us[u_name], $admin_unames);
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    $i_am_admin2 = in_array($us[u_name], $admin_unames); // for db editing
  }
?>
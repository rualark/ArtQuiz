<?
  $uname = $_SERVER['PHP_AUTH_USER'];
  $r = mysql_query("SELECT * FROM cc_users WHERE u_name='{$_SERVER['PHP_AUTH_USER']}' AND 
    u_pass='{$_SERVER['PHP_AUTH_PW']}'");
  $n = mysql_numrows($r);
  if ((!isset($_SERVER['PHP_AUTH_USER'])) || ($n == 0)) {
    header('WWW-Authenticate: Basic realm="CQuiz"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Not authenticated';
    exit;
  } else {
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    //echo "<p>You entered password {$_SERVER['PHP_AUTH_PW']}.</p>";
  }
  $uname = $_SERVER['PHP_AUTH_USER'];

  //if ($uname != "alch") die("System is under maintenance. Please come back later.");
  // Initialize
  //assign_ca();
  //new_user();
  load_user();
  //update_tal();
  //save_user();
  //echo "TAL: $us[u_tal]<br>";
?>
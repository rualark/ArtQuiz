<?
  include "aquiz/alib.php";
  include "mysql.php";
  include "url.php";
  include('Mail.php');

  secure_variable_post("login");
  secure_variable_post("email");
  secure_variable_post("newp");
  secure_variable_post("repp");
  secure_variable_post("source");

  function new_user($pass, $email, $source, $level=1) {
    GLOBAL $uname;
    $q = "INSERT INTO cc_users (u_name, u_pass, u_level, u_oneblock, u_select_style, u_last, u_email, u_source, u_since, u_speechvol, u_subscribe) VALUES('$uname', PASSWORD('$pass'), $level, 1, 1,
      NOW(), '$email', '$source', NOW(), 50, 1)";
    $r = mysql_query($q);
    if (mysql_errno()>0) {
      echo "<font color=red><b>Error occured during creating a new user. Please try to register later. Thank you for your patience</b></font><br>";
      echo mysql_error();
      die("<br>");
    }
    $u_id = mysql_insert_id();
    $us[u_id] = $u_id;
  }
  
  function write_log($path, $st) {
    $fh = fopen($path, "a");
    fputs($fh, $st."\n");
    fclose($fh);
  }

  if (isset($login)) {
    write_log("log/reg-attempt.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['PHP_SELF']." Reg attempt: $email $login ($source)");
    $r = mysql_query("SELECT * FROM cc_users WHERE u_name='$login'");
    $n = mysql_numrows($r);
    $email = mysql_escape_string($email);
    $login = mysql_escape_string($login);
    $newp = mysql_escape_string($newp);
    $repp = mysql_escape_string($repp);
    if ($n>0) die("<font color=red>This login is used. Choose another one. Please go back.");
    if (strlen($email)<5) die("<font color=red>Please enter valid email address. Please go back.");
    if (strpos($email, '.')<3) die("<font color=red>Please enter valid email address. Please go back.");
    if (strpos($email, '@')<1) die("<font color=red>Please enter valid email address. Please go back.");
    if (strlen($login)<3) die("<font color=red>Minimum login length is 3. Please go back.");
    if (strlen($login)>12) die("<font color=red>Maximum login length is 12. Please go back.");
    if (strlen($newp)<5) die("<font color=red>Minimum password length is 5. Please go back.");
    if ($newp != $repp) die("<font color=red>Passwords do not match. Please go back</font>");
    $uname = $login;
    new_user($newp, $email, $source);
    echo "Your new account is created. Please <a href=$url_main>go to portal</a>.<br><br>";
    die();
  }
  
  echo "<b>Register new user:</b><br><br>";

  echo "<form action=reg.php method=post>";
  //echo "<input type=hidden name=1 value=2>";
  echo "<table cellpadding=5 border=0>";

  echo "<tr>";
  echo "<td>";
  echo "Login: ";
  echo "<td>";
  echo "<input type=text name=login> (minimum 3 characters)";
  echo "<tr>";
  echo "<td>";
  echo "Email: ";
  echo "<td>";
  echo "<input type=text name=email> (valid email will help you to recover your password)";

  echo "<tr>";
  echo "<td>";
  echo "Password: ";
  echo "<td>";
  echo "<input type=password name=newp> (minimum 5 characters)";
  echo "<tr>";
  echo "<td>";
  echo "Repeat password: ";
  echo "<td>";
  echo "<input type=password name=repp>";
  
  echo "<tr>";
  echo "<td>";
  echo "How did you hear about this site: ";
  echo "<td>";
  echo "<input type=text name=source>";

  echo "<tr>";
  echo "<td colspan=2>";
  echo "<hr>";

  echo "<tr>";
  echo "<td>";
  echo "";
  echo "<td>";
  echo "<input type=submit name=mysubmit>";
  echo "</table>";

?>
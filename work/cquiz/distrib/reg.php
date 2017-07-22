<?
  include "qlib.php";
  include "style.php";
  include "menu.php";
  
  secure_variable_post("login");
  secure_variable_post("email");
  secure_variable_post("newp");
  secure_variable_post("repp");
  secure_variable_post("source");

  if (isset($login)) {
    write_log("log/reg-attempt.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['PHP_SELF']." Reg attempt: $email $login ($source)");
    $r = mysql_query2("SELECT * FROM cc_users WHERE u_name='$login'");
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
    echo "Your new account is created. Please <a href=prefs.php>login</a>.<br><br>";
    echo "Your login is set to an easiest mode. Go to preferences to change mode.<br>";
    echo "You can also use Isles mode, if Easy mode is difficult (change in Preferences).<br>";
    echo "<p>Watch video on YouTube about CQuiz: in <a target=_blank href='http://www.youtube.com/watch?v=ZVCKmIfRkL0'>English</a> or in <a target=_blank href='http://www.youtube.com/watch?v=54LvBlLe6nw'>Russian.";
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
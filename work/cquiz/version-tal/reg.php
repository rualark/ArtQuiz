<?
  include "qlib.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("login");
  secure_variable("email");
  secure_variable("newp");
  secure_variable("repp");

  if (isset($login)) {
    $r = mysql_query("SELECT * FROM cc_users WHERE u_name='$login'");
    $n = mysql_numrows($r);
    $email = mysql_escape_string($email);
    $login = mysql_escape_string($login);
    $newp = mysql_escape_string($newp);
    $repp = mysql_escape_string($repp);
    if ($n>0) die("<font color=red>This login is used. Choose another one. Please go back.");
    if (strlen($email)<4) die("<font color=red>Please enter valid email address. Please go back.");
    if (strlen($login)<4) die("<font color=red>Minimum login length is 4. Please go back.");
    if (strlen($newp)<5) die("<font color=red>Minimum password length is 5. Please go back.");
    if ($newp != $repp) die("<font color=red>Passwords do not match. Please go back</font>");
    $uname = $login;
    new_user($newp, $email);
    echo "Your new account is created. Please <a href=prefs.php>login</a>.<br><br>";
    echo "Your login is set to an easiest mode. Go to preferences to change mode.<br>";
    echo "You can also use custom mode, if Easy mode is too difficult for you.<br>";
    die();
  }
  
  echo "<b>Register new user:</b><br><br>";

  echo "<form action=reg.php method=get>";
  //echo "<input type=hidden name=1 value=2>";
  echo "<table cellpadding=5 border=0>";

  echo "<tr>";
  echo "<td>";
  echo "Login: ";
  echo "<td>";
  echo "<input type=text name=login>";
  echo "<tr>";
  echo "<td>";
  echo "Email: ";
  echo "<td>";
  echo "<input type=text name=email>";

  echo "<tr>";
  echo "<td>";
  echo "Password: ";
  echo "<td>";
  echo "<input type=password name=newp>";
  echo "<tr>";
  echo "<td>";
  echo "Repeat password: ";
  echo "<td>";
  echo "<input type=password name=repp>";
  
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
<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  function randomPassword() {
      $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $pass = array(); //remember to declare $pass as an array
      $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
      for ($i = 0; $i < 8; $i++) {
          $n = rand(0, $alphaLength);
          $pass[] = $alphabet[$n];
      }
      return implode($pass); //turn the array into a string
  }

  start_time();
  secure_variable("u_name");

  if (!$i_am_admin) die("Sorry, this place is only for administrators");
  
  echo "<form action=admin_resetpass.php method=get>";
  echo "User name to reset password: <input type=text name=u_name value='$u_name'>";
  echo " <input type=submit>";
  echo "</form>";

  if (isset($u_name)) {
    $pass = randomPassword();
    //echo "UPDATE cc_users SET u_pass='$pass' WHERE u_name='$u_name'";
    $r=mysql_query("SELECT * FROM cc_users WHERE u_name='$u_name'");
    $w = mysql_fetch_assoc($r);
    mysql_query("UPDATE cc_users SET u_pass=PASSWORD('$pass') WHERE u_name='$u_name'");
    echo mysql_error();
    echo "<p>Changed rows: ".mysql_affected_rows();
    echo "<p>New password for $w[u_name] (mail $w[u_email]) is $pass";
  }

  stop_time();
?>

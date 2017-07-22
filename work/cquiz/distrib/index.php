<?
  $no_menu=1;
  include "qlib.php";
  include "style.php";
  include "menu.php";
  
  include "ad.php";
  
  echo "<br>";
  echo "<a href=reg.php><font size=6>Register new user</font></a><br><br>";
  echo "or<br><br>";
  echo "<a href=isles.php>Login</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo "<a href=mailpass.php><font color=gray>Forgot your password?</font></a>";
  echo "<br><br>";
  show_help();
?>
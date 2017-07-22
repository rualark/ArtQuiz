<?
  $no_menu=1;
  include "qlib.php";
  include "menu.php";
  include "style.php";
  
  include "ad.php";
  
  echo "<br>";
  echo "<table width=100%><tr><td>";
  echo "<a href=reg.php><font size=6>Register new user</font></a><br><br>";
  echo "or<br><br>";
  echo "<a href=prefs.php>Login</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  echo "<a href=mailpass.php><font color=gray>Forgot your password?</font></a>";
  echo "<br><br>";
  echo "<td align=right>";
  echo "<a target=_blank href=http://theclassicalcomposers.com><font size=5>Or play a simpler version<br> of composer quiz without login</a>";
  //echo "<a href=nquiz><img width=150 align=right src=nquiz/i/nquiz.png></a> ";
  //echo "<a href=$url_compart><img alt='Compart' align=absmiddle border=0 src=images/compart_120.png></a> ";
  echo "</table>";
  show_help();
?>
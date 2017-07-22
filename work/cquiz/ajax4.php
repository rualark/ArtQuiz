<?
  include "../mysql.php";
  if ($value==="off") $notused=0; else $notused=1;
  mysql_query("UPDATE cc_system set s_notused=$notused");
?>
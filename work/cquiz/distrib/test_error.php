<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "mysql.php";
  
  $r=mysql_query("ERROR QUERY");
  echo mysql_report_error();
?>
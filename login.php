<?
  $auth_necessary=1;
  include "mysql.php";
  include "auth.php";
  echo "Welcome, $uname";
  die("<script>window.history.back();</script>");
?>
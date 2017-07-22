<?
  if (!isset($mysql_link)) require_once "mysql.php";
  include "url.php";
  
  insert_analytics_hit('hits_b', $_GET[hitserver], $_GET[hitscript], $_GET[hitquery]);
?>
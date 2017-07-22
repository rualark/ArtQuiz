<?
  require "mysql.php";
  
  $q = "SELECT * FROM aq_artists WHERE a_name!='' ORDER BY a_id";
  $r = mysql_query($q);
  $a_cnt = mysql_numrows($r);
  for ($i=0; $i<$a_cnt; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<p><iframe width=1200 height=300 src=\"http://en.m.wikipedia.org/w/index.php?search=$w[a_name]\"></iframe>";
  }
?>
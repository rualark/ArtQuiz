<?
  include "qlib.php";
  
  start_time();
  $q = "SELECT ip FROM ca_log  
    WHERE country='' GROUP BY ip";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $country = file_get_contents("http://ipinfo.io/$w[ip]/country");
    mysql_query("UPDATE ca_log SET country='$country' WHERE ip='$w[ip]'");
    echo mysql_error();
  }
  stop_time();
?>
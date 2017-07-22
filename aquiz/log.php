<?
  include "alib.php";
  include "style.php";
  include "menu.php";

  $max_logs = 100;
  
  start_time();
  $r = mysql_query("SELECT l_id, aq_log.p_id, ip, time, aq_log.a_id, a_id2, a_name, p_name
    FROM aq_log 
    LEFT JOIN aq_paintings ON (aq_paintings.p_id=aq_log.p_id AND aq_paintings.a_id=aq_log.a_id)  
    LEFT JOIN aq_artists ON (aq_artists.a_id=aq_log.a_id) 
    ORDER BY l_id DESC LIMIT $max_logs");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Time";
  echo "<th>IP";
  echo "<th>Artist";
  echo "<th>Painting";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[time]";
    echo "<td>$w[ip]";
    echo "<td>$w[a_name]";
    $p_id2 = str_pad("$w[p_id]", 4, '0', STR_PAD_LEFT);
    echo "<td><img title='$w[p_id]' src='$url_art_preview/$w[a_id]/$p_id2.jpg' height=100>";
  }
  echo "</table>";
  stop_time();
  
?>
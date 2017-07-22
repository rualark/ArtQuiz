<?
  include "qlib.php";
  include "../auth.php";
  include "style.php";
  include "ca-menu.php";  

  start_time();
  echo "<b>Latest associations created (see <a href=ca-votes.php>votes</a>):</b><br><br>";
  $q = "SELECT c_id, c_name, a_name, ca_log.a_id, l_time, l_id, v_up, v_down, ip, ca_log.u_id, cc_users.u_name
    FROM ca_log 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN aq_artists ON (ca_log.a_id = aq_artists.a_id)
    LEFT JOIN cc_users ON (cc_users.u_id=ca_log.u_id)
    ORDER BY l_id DESC
    LIMIT 300";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $pl_id = $w[l_id]-1;
    echo "<tr>";
    echo "<td>";
    //echo "<a href=http://www.hostip.info><img src='http://api.hostip.info/flag.php?ip=$w[ip]'></a> ";
    //if ($w[ip] == get_ip()) echo "<b>";
    echo substr($w[l_time], 0, 16);
    //if ($w[u_id] == $ua[u_id]) echo "<b>";
    echo " <a href=$url_main/cquiz/stats.php?su_id=$w[u_id]>";
    echo "$w[u_name]</a> ";
    echo "<td><a target=_blank href=ca-slide.php?l_id=$pl_id><img height=14 src=i/play.gif></a> <a href=$url_main/cquiz/am.php?c_id=$w[c_id]>$w[c_name]</a> - ";
    echo "<a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]><font color=orange>$w[a_name]</font></a>";
    if ($w[v_up]>0) echo " <font color=green><b>$w[v_up]</b></font> <img border=0 height=15 src=images/up-g.png> ";
    if ($w[v_down]>0) echo " <img border=0 height=15 src=images/down-g.png> <font color=red><b>$w[v_down]</b></font> ";
  }
  echo "</table>";
  // Show total associations number
  $q = "SELECT count(*) as cnt FROM ca_log WHERE v_up>(v_down*2.5)";
  $r = mysql_query($q);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r);
  echo "<p><b>$w2[cnt]</b> associations total with 70% positive votes or more";
  stop_time();
?>
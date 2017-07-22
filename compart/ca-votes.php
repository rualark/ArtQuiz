<?
  include "qlib.php";
  include "style.php";
  include "ca-menu.php";  

  start_time();
  echo "<b>Latest votes for associations:</b><br><br>";
  $q = "SELECT cc_composers.c_id, v_type, c_name, a_name, v_time, l_id, v_up, v_down, v_ip, u_name, u_id2
    FROM ca_votes 
    LEFT JOIN ca_log USING (l_id)
    LEFT JOIN cc_composers ON (ca_log.c_id=cc_composers.c_id) 
    LEFT JOIN aq_artists ON (ca_log.a_id = aq_artists.a_id)
    LEFT JOIN cc_users ON (cc_users.u_id=ca_votes.u_id2)
    ORDER BY v_id DESC
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
    //if ($w[v_ip] == get_ip()) echo "<b>";
    echo substr($w[v_time], 0, 16);
    echo " <a href=$url_main/cquiz/stats.php?su_id=$w[u_id2]>";
    echo "$w[u_name]</a> ";
    echo "<td><a target=_blank href=ca-slide.php?l_id=$pl_id><img height=14 src=i/play.gif></a> <a href=$url_main/cquiz/am.php?c_id=$w[c_id]>$w[c_name]</a> - ";
    echo "<a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]><font color=orange>$w[a_name]</font></a>";
    $img = "up-g.png";
    if ($w[v_type] == 1) $img = "up.png";
    if ($w[v_up]>0) echo " <font color=green><b>$w[v_up]</b></font> <img border=0 height=15 src=images/$img> ";
    $img = "down-g.png";
    if ($w[v_type] == -1) $img = "down.png";
    if ($w[v_down]>0) echo " <img border=0 height=15 src=images/$img> <font color=red><b>$w[v_down]</b></font> ";
  }
  echo "</table>";
  stop_time();
?>
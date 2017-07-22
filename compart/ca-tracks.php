<?
  include "qlib.php";
  include "../auth.php";

  start_time();
  //secure_variable("l_id");

  include "style.php";
  $page_width = '100%';
  include "ca-menu.php";
  $img_width = 292;

  $cond .= " AND v_up>(v_down*2.5) ";

  echo "<b>Tracks, that were associated with more than one painting (only associations with 70% or more positive votes are shown)</b>:<p>";
  echo "<table>";
  $q = "SELECT COUNT(*) AS cnt, t_id FROM ca_log  
    WHERE 1=1 $cond
    GROUP BY t_id HAVING cnt>1 ORDER BY cnt DESC LIMIT 100";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    load_track($w[t_id]);
    echo "<td width=30 valign=top><div style='word-wrap: break-word; width: 100px'><a href=$url_main/cquiz/am.php?c_id=$ts[c_id]>$ts[c_name4]</a> $ts[c_country] ($ts[c_years])<br><a href=ptracks.php?t_id=$ts[t_id]>";
    if ($ts[t_folder2] != "") echo "$ts[t_folder2]/";
    echo "$ts[t_name]</a> ";
    echo meta_conv($ts[t_meta2]);
    $q2 = "SELECT a_id, p_id, a_name2, a_nation, a_years, a_genre, l_id, v_up, v_down, b_id
      FROM ca_log 
      LEFT JOIN aq_artists USING (a_id) 
      WHERE t_id='$w[t_id]' $cond
      GROUP BY a_id, p_id
      ORDER BY b_id DESC LIMIT 12";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $img_url = "$url_art_preview/$w2[a_id]/".str_pad($w2[p_id], 4, '0', STR_PAD_LEFT).".jpg";
      if (($x>0) && (($x) % 4 == 0)) echo "<tr><td>";
      echo "<td valign=top><center>";
      echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
      echo "<a target=_blank href=ca-slide.php?only_pos=on&l_id=".($w2[l_id]-1).">";
      echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=$img_url></a><br><a target=_blank href=$url_main/aquiz/artist.php?a_id=$w2[a_id]>$w2[a_name2]</a> ".strtoupper(substr($w2[a_nation], 0, 3))."-".(substr($w2[a_years], 0, 4))." ".$w2[a_genre];
      //echo " <a target=_blank href=$img_url><img height=14 src=i/zoom_in.png></a> ";
      echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
      if ($w2[v_up]>0) echo " <font color=green><b>$w2[v_up]</b></font> <img border=0 height=15 src=images/up-g.png> ";
      if ($w2[v_down]>0) echo " <img border=0 height=15 src=images/down-g.png> <font color=red><b>$w2[v_down]</b></font> ";
      echo "</div>";
    }
  }
  echo "</table>";
  stop_time();
?>
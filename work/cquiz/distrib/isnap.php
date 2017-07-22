<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  start_time();
  secure_variable("cab");
  secure_variable("gab");
  secure_variable("tg_id");
  secure_variable("ilevel");
  secure_variable("order");
  secure_variable("t_rating");
  
  if (isset($ilevel)) {
    $us[u_level] = $ilevel;
    if ($cab != "") $us[u_ca] = unpack_ca($cab);
    if ($gab != "") $us[u_ga] = unpack_ca($gab);
    save_user();
    $us[cab] = $cab;
    //load_user();
  }
  if ($us[cab] != "") {
    load_isle($us[cab]);
    create_isle_cst(unpack_ca($us[cab]));
  }
  echo "<div align=right id='jp_current_track_title' class='jp_current_track_title'>Currently playing: no song</div>";
  echo "<center>";
  echo "<b>";
  if ($level == $level_cust+1) echo "Free ";
  echo "Pre-listen ";
  if (isset($t_rating)) {
    echo " tracks with rating $t_rating or higher";
  } else {
    echo "<a href=rating.php?level=$level_cust&cab=$us[cab]>island</a></b>: $isle_cst3 ";
    if ($is[i_name] != "") echo " ($is[i_name]) ";
    echo " <a href=prefs.php?ilevel=$level_cust&cab=$cab> <img valign=center border=0 title='Click to play this island' src=images/play.gif></a>";
    //echo " <a href=isnap.php?ilevel=$level_cust&cab=$cab> <img valign=center border=0 title='Click to play this island' src=images/play_r.gif></a>";
    if ($is[i_level]>0) echo " <span title='Difficulty level' style='background-color: ".$i_level_color[$is[i_level]]."'>Level $is[i_level]</span>";
    echo " <a href=logs.php?cab=$cab>Logs</a> <a href=klogs.php?cab=$cab>News</a>";
  }
  echo "<br>";
  $c = strlen($us[u_ca]);
  $ca_cond = "ca_id in (";
  $first = 1;
  for ($x=0; $x<$c; $x++) if ($us[u_ca][$x] == "X") {
    if ($first) {
      $first = 0;
    } else {
      $ca_cond .= ",";
    }
    $ca_cond .= "$x";
  }
  $ca_cond .= ")";
  $cond = " AND $ca_cond";
  if (isset($tg_id)) $cond .= " AND cc_ctracks.tg_id=$tg_id ";
  if (isset($t_rating)) $cond = " AND cc_ctracks.t_rating BETWEEN 1 AND $t_rating ";
  echo "</center>";
  echo "<table border=0><tr><td valign=top>";
  if (!isset($order)) $order = "RAND()";
  // Show tracks list
  $table = "cc_tstat2";
  if ($u_id>0) {
    $cond = "AND cc_tstat.u_id='$u_id'";
    $table = "cc_tstat";
  }
  $q = "SELECT *,cc_ctracks.t_id as t_id,cc_ctracks.t_len as t_len,cc_ctracks.c_id as c_id FROM cc_ctracks 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN cc_tgroups ON (cc_tgroups.tg_id = cc_ctracks.tg_id)
    LEFT JOIN $table ON ($table.t_id=cc_ctracks.t_id $cond)
    WHERE t_bad=0 $cond ORDER BY $order";
  $r = mysql_query2($q);
  echo "<font color=red>".mysql_report_error()."</font><br/>";
  $n = mysql_numrows($r);
  echo "<form action=tgroups.php method=put>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $fld = "$w[t_folder2]/";
    if ($w[t_folder2] == "") $fld = "";
    $fname = $w[t_name];
    $sst = str_replace("'", "", "$w[t_name]");
    $sst = str_replace(".mp3", "", $sst);
    $sst = str_replace($w[c_name4], "", $sst);
    while (!ctype_alpha($sst[0])) {
      $sst = substr($sst, 1);
      if (strlen($sst)==0) break;
    }
    while (!ctype_alpha($sst[strlen($sst)-1])) {
      $sst = substr($sst, 0, strlen($sst)-1);
      if (strlen($sst)==0) break;
    }
    $sst = "$w[c_name4] $sst";
    //echo "<input type=checkbox name=t$w[t_id]> <a href=".comp_link($w[c_id]).">C</a> ";
    show_tg($w[tg_id], $w[tg_name], $w[tg_comment]);
    $weight="normal";
    $size="";
    if ($w[t_rating] > 0) {
      $weight="bold";
      if ($w[t_rating] == 1) $size="size=+2";
      if ($w[t_rating] == 2) $size="size=+1";
    }
    echo "<a href='ptracks.php?t_id=$w[t_id]&u_id=$u_id'><font style='BACKGROUND-COLOR: $bgcolor; font-weight: $weight; ' $size color=black>";
    if ($tg_moved[$w[t_id]]>0) echo "<font color=green>";
    echo "$w[t_folder]/$fname</font></font></a> <span style='vertical-align: center'>(".round($w[t_len]/60, 0)."m)</span>";
    /*
    echo "<a title='$w[t_meta]' href='ptracks.php?t_id=$w[t_id]'>";
    echo "$w[t_folder]/$fname</font></a> (".gmdate('H:i:s', $w[t_len]).")";
    */
    echo " <a href=# onclick='myPlaylist.select($i); $(\"#jquery_jplayer_1\").jPlayer(\"play\"); return false; '><img src=images/play_g.gif height=16></a>";
    echo " <a target=_blank href='http://www.google.ru/search?q=".$sst."'><img src=images/search.png height=16></a>";
    echo "<br>\n";
    $wa[$i] = $w;
  }
  echo "</td><td valign=top>";
  show_player_i($wa);
  echo "</td></tr></table>";
  echo "Use Z and X buttons to start and stop playback. Use V and B to go to previous/next track.";
  stop_time();
?>
<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  function load_moves() {
    GLOBAL $tg_moved;
    $fa = file("log/tgroups.log");
    for ($i=0; $i<count($fa); $i++) {
      $st2 = $fa[$i];
      for ($x=0; $x<1000; $x++) {
        $pos = strpos($st2, "t_id=");
        if ($pos === false) break;
        $st2 = substr($st2, $pos+5);
        $id = substr($st2, 0, strpos($st2, " "));
        $id = str_replace(";", "", $id);
        $tg_moved[$id] ++;
      }
    }
  }
  
  start_time();
  secure_variable("tg_id");
  secure_variable("tg_id2");
  secure_variable("act");
  secure_variable("caf");
  
  count_stats();
  if ($act == "move") {
    if (!in_array($uname, $admin_unames)) {
      echo "<font color=red>You do not have access to this action. Please contact site administrator.</font>";
      die();
    }
    $st = "";
    for ($i=0; $i<15000; $i++) {
      if (isset($_GET["t".$i])) {
        if ($st != "") $st .= " OR ";
        $st .= "t_id=$i";
      }
    }
    if ($st == "") die("Nothing was selected. Please go back.");
    $q = "UPDATE cc_ctracks SET tg_id='$tg_id' WHERE $st";
    //die( $q);
    mysql_query2($q);
    echo mysql_report_error();
    write_log("log/tgroups.log", "$q; /* ".date("Y-m-d H:i")." by $us[u_name] */");
    update_tgroups(1);
    // Update composers stat
    mysql_query2("UPDATE cc_composers
      LEFT JOIN (
      SELECT c_id, GROUP_CONCAT(DISTINCT tg_id ORDER BY tg_id ASC SEPARATOR ',') AS lst FROM cc_ctracks GROUP BY c_id
      ) AS a USING (c_id)  
      SET tg_list=lst");
    echo mysql_report_error();
    //die();
    die ("<script language=\"javascript\">location.replace(\"tgroups.php?tg_id=$tg_id2\");</script>"); 
  }
  
  if (isset($tg_id)) {
    load_moves();
    echo "<div align=right id='jp_current_track_title' class='jp_current_track_title'>Currently playing: no song</div>";
    //print_r($tg_moved);
    $q = "SELECT * FROM cc_tgroups WHERE tg_id=$tg_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $tgw = mysql_fetch_array($r);
    echo "<center><h3><a href=tgroups.php>All groups</a> - $tgw[tg_name]</h3>$tgw[tg_comment] ";
    $cond = "";
    if ((isset($caf)) && ($us[u_ca] != "")) {
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
      echo "(Showing selected composers only)";
      $cond = " AND $ca_cond";
    }
    else echo "(<a href=tgroups.php?tg_id=$tg_id&caf=1>Show selected composers only</a>)";
    echo "</center>";
    echo "<table border=0><tr><td valign=top>";
    // Show tracks list
    $table = "cc_tstat2";
    if ($u_id>0) {
      $cond = "AND cc_tstat.u_id='$u_id'";
      $table = "cc_tstat";
    }
    $q = "SELECT *,cc_ctracks.t_id as t_id,cc_ctracks.t_len as t_len,cc_ctracks.c_id as c_id FROM cc_ctracks 
      LEFT JOIN cc_composers USING (c_id) 
      LEFT JOIN $table ON ($table.t_id=cc_ctracks.t_id $cond)
      WHERE t_bad=0 AND tg_id='$tg_id' $cond ORDER BY c_start,cc_ctracks.c_id";
    $r = mysql_query2($q);
    echo "<font color=red>".mysql_report_error()."</font><br/>";
    $n = mysql_numrows($r);
    echo "<form action=tgroups.php method=put>";
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      $fld = "$w[t_folder2]/";
      if ($w[t_folder2] == "") $fld = "";
      $w[t_name] = $w[t_name];
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
      //while ($sst[0] == '.') $sst = substr($sst, 1);
      //while ($sst[0] == ' ') $sst = substr($sst, 1);
      //while ($sst[0] == '-') $sst = substr($sst, 1);
      $sst = "$w[c_name4] $sst";
      echo "<input type=checkbox name=t$w[t_id]> <a href=".comp_link($w[c_id])."><font color=#888888>$w[c_name4]</font></a> ";
      $weight="normal";
      $size="";
      if ($w[t_rating] > 0) {
        $weight="bold";
        if ($w[t_rating] == 1) $size="size=+2";
        if ($w[t_rating] == 2) $size="size=+1";
      }
      echo "<a href='ptracks.php?t_id=$w[t_id]&u_id=$u_id'><font style='BACKGROUND-COLOR: $bgcolor; font-weight: $weight; ' $size color=black>";
      if ($tg_moved[$w[t_id]]>0) echo "<font color=green>";
      $fld = "$w[t_folder2]/";
      if ($w[t_folder2] == "") $fld = "";
      echo "$fld$fname</font></font></a> <span style='vertical-align: center'>(".round($w[t_len]/60, 0)."m)</span>";
      if ($i_am_admin) if ($w[t_comment] != "") echo " <img title=\"".stripslashes($w[t_comment])."\" src=images/edit.png height=17>";
      /*
      echo "<a title=\"".str_replace("<br>", "\n", $w[t_meta2])."\" href='ptracks.php?t_id=$w[t_id]'>";
      echo "$w[t_folder]/$fname</font></a> (".round($w[t_len]/60)."m)";
      */
      echo " <a href=# onclick='myPlaylist.select($i); $(\"#jquery_jplayer_1\").jPlayer(\"play\"); return false; '><img src=images/play_g.gif height=16></a>";
      echo " <a target=_blank href='http://www.google.ru/search?q=".$sst."'><img src=images/search.png height=16></a>";
      echo "<br>\n";
      $wa[$i] = $w;
    }
    echo "<br>Move selected tracks to group: <select name=tg_id onChange='this.form.submit();'>";
    //echo "<option value=0>[no group]</option>";
    $q = "SELECT * FROM cc_tgroups ORDER BY tg_id";
    $r = mysql_query2($q);
    echo "<font color=red>".mysql_report_error()."</font><br/>";
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<option value=$w[tg_id]";
      if ($tg_id == $w[tg_id]) echo " selected";
      echo ">$w[tg_name] ($w[tg_tracks] tracks, $w[tg_hours] hours, $w[tg_cnum] composers)</option>";
    }
    echo "<input type=hidden name=act value=move>";
    echo "<input type=hidden name=tg_id2 value='$tg_id'>";
    echo "</select><br><br>";
    echo "</td><td valign=top>";
    show_player_i($wa);
    echo "</td></tr></table>";
    echo "Pieces, that were moved manually, are colored green. Other pieces were moved initially by robot.";
    stop_time();
    exit;
  }

  update_tgroups();
  
  $q = "SELECT *
    FROM cc_tgroups
    ORDER BY tg_id
  ";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  echo "<center>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Group</th>";
  echo "<th>Tracks</th>";
  echo "<th>Hours</th>";
  echo "<th>Composers</th>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<tr>";
    echo "<td><center>";
    if ($w[tg_id]>0) echo "<img title='$w[tg_name]' height=15 src=images/tg$w[tg_id].png> ";
    echo "<a href=tgroups.php?tg_id=$w[tg_id]>";
    echo "$w[tg_name]";
    if ($w[tg_name] == "") echo "[no group]";
    echo "<td><center>";
    echo "$w[tg_tracks]";
    echo "<td><center>$w[tg_hours]";
    echo "<td><center>$w[tg_cnum]";
  }
  echo "<tr>";
  echo "<th>Total</th>";
  echo "<th>$current_t_count</th>";
  echo "<th>$current_t_len</th>";
  echo "<th>$current_c_count</th>";
  echo "</table>";
  echo "</center>";
  stop_time();
?>
<?
  include "qlib.php";
  include "auth.php";
  include "style.php";

  secure_variable("action");
  secure_variable("t_id");
  secure_variable("b_id");
  secure_variable("showall");

  if ($i_am_admin == 0) die("This place is only for administrators.");
  start_time();
  if ($action == "Mbad") {
    echo "Marking track with t_id $t_id as bad.<br>";
    $r2 = mysql_query("UPDATE cc_ctracks SET t_bad=1 WHERE t_id='$t_id'");
    echo mysql_error();
    echo "Updated ".mysql_affected_rows()." rows.<br>";
    echo "You need to rerun bblocks.php now.";
    // Reject after marking
    $action = "Reject";
    //exit;
  }
  
  if ($action == "Reject") {
    echo "Rejecting all reports for blocks with t_id $t_id and b_id $b_id.<br>";
    $r2 = mysql_query("UPDATE cc_bblocks SET b_state=1 WHERE t_id='$t_id' AND b_id='$b_id'");
    echo mysql_error();
    echo "Rejected ".mysql_affected_rows()." applications.<br>";
    echo "Done.";
    exit;
  }
  
  if ($action == "Dblock") {
    echo "Deleting block with t_id $t_id b_lid $b_id from cc_qblocks.<br>";
    $r2 = mysql_query("DELETE FROM cc_qblocks WHERE t_id='$t_id' AND b_lid='$b_id'");
    echo mysql_error();
    echo "Updated ".mysql_affected_rows()." rows.<br>";
    echo "You need to rerun bblocks.php now.";
    exit;
  }
  
  // Analyse bblocks
  if ($showall == 0) $cond = " AND b_state = 0 ";
  $r = mysql_query("SELECT *,cc_ctracks.c_id as c_id,cc_bblocks.t_id as tid, cc_bblocks.b_id as bid, cc_qblocks.b_id as gbid FROM cc_bblocks 
    LEFT JOIN cc_ctracks USING (t_id) 
    LEFT JOIN cc_users ON (cc_users.u_id=cc_bblocks.u_id) 
    LEFT JOIN cc_qblocks ON (cc_qblocks.t_id = cc_bblocks.t_id AND cc_qblocks.b_lid = cc_bblocks.b_id)
    WHERE cc_bblocks.t_id > 0 $cond
    ORDER BY b_time DESC");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "Detected $n bblocks with t_id not zero:<br>";
  $cnt=0;
  echo "<table border=1>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $link = block_url($w[tid], $w[bid], 0);
    $r2 = mysql_query("SELECT MAX(b_lid) AS mblid FROM cc_qblocks WHERE t_id=$w[tid]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    $found = 0;
    $desc = "\nFile for this block does not exist.";
    $font = "";
    if (file_exists($link)) {
      $font .= "<b>";
      $desc = "\nFile for this block exists.";
      $cnt++;
      $found=1;
    }
    if ($w2[mblid]>0) { // Check if database has blocks for this track
      if ($w[gbid] > 0) { // Check if this block is in database
        $font .= "<font color=red>";
        $desc .= "\nThis block is registered.";
        $found=1;
      } else {
        $desc .= "\nBlocks are registered for this track, but this block is not registered.";
      }
      $desc .= "\nGreatest registered block is $w2[mblid].";
    } else {
      $desc .= "\nBlocks are not registered for this track.";
    }
    if ($w[t_bad]>0) $desc .= "\nTrack is marked as bad.";
    if ($found>0) {
      echo "<tr>";
      echo "<td>$font";
      echo "[$w[b_time]]</font></b> <a href='stats.php?su_id=$w[u_id]'>$w[u_name]</a> T$w[tid] B$w[bid] ";
      echo "<a href='".comp_link($w[c_id])."'>$w[t_folder]</a> <a title='Comment: $w[b_comment]$desc' target=_blank href='ptracks.php?t_id=$w[tid]&b_id=$w[bid]'>$w[t_name]</font></a></b> ";
      echo "<td>";
      echo "<a target=_blank href=bblocks.php?action=Reject&b_id=$w[bid]&t_id=$w[tid]><font color=red>Reject</font></a> ";
      echo "<a target=_blank href=bblocks.php?action=Mbad&b_id=$w[bid]&t_id=$w[tid]><font color=red>Mark track bad</font></a> ";
      echo "<a target=_blank href=bblocks.php?action=Dblock&b_id=$w[bid]&t_id=$w[tid]><font color=red>Delete qblock</font></a> ";
      echo "<br>";
    }
  }
  echo "</table>";
  echo "<br><a href=bblocks.php?showall=1>Show all applications, including rejected</a>";
  echo "<br>Red time means that block is registered in database";
  stop_time();
  echo "<a href=bblocks.php?action=CheckFiles>Find and delete non-existent blocks (no file for cc_qblocks table row)</a><br>"; 
  
  // Delete blocks for bad tracks from cc_qblocks
  $r = mysql_query("SELECT *,cc_ctracks.t_id as t_id FROM cc_ctracks 
    LEFT JOIN cc_composers USING (c_id) 
    WHERE t_bad=1");
    //LEFT JOIN cc_bblocks ON (cc_bblocks.t_id=cc_ctracks.t_id)
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "Detected $n bad tracks<br>";
  $cnt=0;
  $fh = fopen("remove_bad_tracks.bat", "w");
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT COUNT(*) AS cnt FROM cc_qblocks WHERE t_id=$w[t_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    if ($w2[cnt] > 0) echo "Track $w[t_id] $w[t_name] $w[c_name] has $w2[cnt] blocks<br>";
    $r2 = mysql_query("DELETE FROM cc_qblocks WHERE t_id=$w[t_id]");
    $fld = str_replace("/", "\\", $w[t_folder]);
    if (!file_exists("tracks/$w[t_folder]/$w[t_fname]")) fputs($fh, "rem ");
    else fputs($fh, "rd /s /q blocks\\$w[t_id]\n");
    fputs($fh, "del \"tracks\\$fld\\$w[t_fname]\"\n");
  }
  fclose($fh);
  stop_time();

  //exit;
  if ($action == "CheckFiles") {
    // Find and delete non-existent blocks (no file for cc_qblocks table row)
    $r = mysql_query("SELECT * FROM cc_qblocks LEFT JOIN cc_ctracks USING (t_id)");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "Detected $n qblocks<br>";
    $cnt=0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $link = block_url($w[t_id], $w[b_lid], 0);
      if (!file_exists($link)) {
        if ($w[b_lid] == 1) echo "<b>";
        echo "Removed block <a href=ptracks.php?t_id=$w[t_id]&b_id=$w[b_lid]>$w[t_id]</a> $w[b_lid] $w[t_folder] $w[t_name]</b> ";
        $q2 = "DELETE FROM cc_qblocks WHERE t_id='$w[t_id]' AND b_lid='$w[b_lid]'";
        $r2 = mysql_query($q2);
        echo mysql_error();
        $cnt++;
        // Get track
        $r2 = mysql_query("SELECT * FROM cc_ctracks WHERE t_id='$w[t_id]'");
        echo mysql_error();
        $w2=mysql_fetch_assoc($r2);
        $new_len = ($w[b_lid]-1)*60-1;
        if ($w2[t_len]>$new_len) {
          $q2 = "UPDATE cc_ctracks SET t_len='$new_len' WHERE t_id='$w[t_id]'";
          echo $q2;
          $r2 = mysql_query($q2);
          echo mysql_error();
          echo "Corrected t_len ";
        }
        echo mysql_error();
        echo "<br>";
      }
    }
    echo "Detected $cnt non-existent blocks<br>";
    stop_time();
  }

  // Find and mark tracks as bad without blocks in cc_qblocks
  $r = mysql_query("SELECT * 
    FROM cc_ctracks 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN cc_qblocks ON (cc_ctracks.t_id = cc_qblocks.t_id) 
    WHERE t_bad = 0 AND cc_qblocks.t_id IS NULL");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "Detected $n good tracks without blocks<br>";
  $cnt=0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT COUNT(*) AS cnt FROM cc_qblocks WHERE t_id=$w[t_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    if ($w2[cnt] == 0) {
      echo "No blocks for track $w[t_id] $w[t_folder] $w[c_id] $w[c_name] $w[t_name]</b><br>";
      $r2 = mysql_query("UPDATE cc_ctracks SET t_bad=1 WHERE t_id='$w[t_id]'");
      $cnt++;
    }
  }
  echo "Marked $cnt tracks as bad<br>";
  
  // Find blocks, that have c_id not equal to track c_id
  $r = mysql_query("SELECT *,cc_qblocks.c_id as bc_id 
    FROM cc_qblocks
    LEFT JOIN cc_ctracks ON (cc_ctracks.t_id = cc_qblocks.t_id) 
    WHERE cc_qblocks.c_id != cc_ctracks.c_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "Detected $n blocks with c_id not equal to track c_id<br>";
  $cnt=0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    print_r($w);
    echo "<br>";
    $q2 = "UPDATE cc_qblocks SET c_id=$w[c_id] WHERE b_id=$w[b_id]";
    echo "$q2<br>";
    $r2 = mysql_query($q2);
    echo "<font color=red>".mysql_error()."</font>";
  }
  if ($n>0) {
    echo "Set qblocks c_id to ctracks c_id...<br>";
  }
  echo "You may need to <a href=load12.php>recalculate bcount and c_len</a> and <a href=update_ratings.php>update tstat</a> after removing blocks.<br>";
  stop_time();
?>
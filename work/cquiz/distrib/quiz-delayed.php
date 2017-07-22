<?
  ignore_user_abort(true);
  include "qlib.php";
  include "auth.php";
  include "style.php";

  start_time();
  secure_variable("l_id");
  
  // Set links to open in parent window
  echo "<base target=_parent />";
  
  $tp_max = rand(50, 100);
  // Check non-processed log entries
  $q = "SELECT l_id, u_id, UNIX_TIMESTAMP()-UNIX_TIMESTAMP(l_time) as tp FROM cc_qlog WHERE l_processed=0";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if (($w[l_id] != $l_id) && ($w[tp]>$tp_max)) {
      //echo "Detected $w[l_id] log<br>";
      write_log("log/process-stack.log", date("Y-m-d H:i:s")." u$w[u_id] l$w[l_id]");
      process_log($w[l_id]);
    }
  }
  // Process current log
  //stop_time();
  // Check if correct l_id
  if ($l_id == 0) die("Error: l_id=0");
  process_log($l_id);
  //stop_time();
  load_user();
  $bgcolor="#ffe5e5";
  if ($la[l_ok] == 1) $bgcolor="e5ffe5";
  echo "<body bgcolor=$bgcolor>";
  //sleep(1);
  // Load local variables
  $t_id = $la[t_id];
  $b_id = $la[b_id];
  $r1 = $la[l_r1];
  
  //show_tg($ts[tg_id], $ts[tg_name], $ts[tg_comment]);
  $q5 = "SELECT SUM(t_total) as cnt, sum(t_wrong) as wrong FROM cc_bstat WHERE u_id='$us[u_id]' AND t_id=$t_id";
  $r5 = mysql_query2($q5);
  echo mysql_report_error();
  $w5 = mysql_fetch_assoc($r5);
  $q6 = "SELECT t_total, t_wrong FROM cc_bstat WHERE u_id='$us[u_id]' AND t_id=$t_id AND b_id=$b_id";
  $r6 = mysql_query2($q6);
  echo mysql_report_error();
  $w6 = mysql_fetch_assoc($r6);
  echo "You hear <a href=ptracks.php?t_id=$t_id&b_id=$b_id>this track</a> $w5[cnt] times (".round(($w5[cnt]-$w5[wrong])/$w5[cnt]*100)."% correct)";
  if ($us[u_oneblock]) echo ", this minute <b>$w6[t_total] times</b> (".round(($w6[t_total]-$w6[t_wrong])/$w6[t_total]*100)."% correct).";
  echo "<br>Your rating: <a title='";
  echo "You get ".round($r1)." rating for this answer.\n";
  echo "Track duration: ".date('i:s', $ts[t_len])."\n";
  if ($us[u_oneblock] == 1) echo "Minute selected for quiz: $b_id.\n";
  echo "You answered in ".date('i:s', time()-$us[u_start])."\n";
  if ($us[u_level]>=$level_cust) $cab = $us[cab];
  echo "' href=graph.php?level=$us[u_level]&cab=$cab>".round($us[r_r1])."</a>";
  echo ". ";
  if ($us[u_level] == $level_cust) {
    $r11 = mysql_query2("SELECT * FROM cc_isles LEFT JOIN cc_users USING (u_id) WHERE i_cab=x'$us[cab]'");
    $w11 = mysql_fetch_assoc($r11);
    if ($us[u_id] == $w11[u_id]) {
      echo "You are the king ";
      echo show_crown($w11[r_total], $w11[u_id2], $w11[i_unum]);
      echo " of this island.";
    }
    elseif ($w11[r1_max]==0) echo "This island has no king yet.";
    else {
      echo "This island king <b>$w11[u_name]</b> ";
      echo show_crown($w11[r_total], $w11[u_id2], $w11[i_unum]);
      echo " has rating <b>".round($w11[r1_max])."</b>.";
    }
  }
  echo " Correct composer: <a href='plogs.php?u_id=$us[u_id]&level=$us[u_level]&cab=$cab' title='";
  stop_time();
  echo "'>".round($us[r_right]/$us[r_total]*100, 0)."%</a> ";
  if ($us[r_total]>$slope_min_ans) echo " ".show_slope_ok($us[r_right_b]);
  echo "<br>";
  show_played_composer($ts[c_id]);
  flush_cache();
  
?>
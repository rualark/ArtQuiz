<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("u_id");
  secure_variable("t_id");
  secure_variable("sort");
  
  $mtime = microtime();
  $mtime = explode(" ",$mtime);
  $mtime = $mtime[1] + $mtime[0];
  $starttime = $mtime; 

  if ($u_id>0) load_user($u_id);
  else $u_id = $us[u_id];

  if (isset($t_id)) {
    load_track($t_id);
    echo "<table border=1 cellpadding=5>";
    echo "<tr>";
    echo "<td valign=top align=left>";
    echo "<b>Statistics for track $ts[t_name]</b> since $tracks_start<br><br>";
    echo "Composer: <a target=_blank href=../classclass/am.php?c_id=$ts[c_id]>$ts[c_name]</a> [$ts[c_years]] $ts[c_country] ($ts[p_name])<br>";
    echo "Track duration: ".date('i:s', $ts[t_len])."<br>";
    echo "<br>";
    echo str_replace("\n", "<br>", iconv("cp1252", "utf-8", $ts[t_meta]));
    /*
    $ea = mb_list_encodings();
    for ($i=0; $i<count($ea); $i++) {
      echo str_replace("\n", "<br>", iconv($ea[$i], "utf-8//translit", $ts[t_meta]))."<br>";
    }
    */
    echo "<br>";
    echo "<td align=left>";
    $xmlurl = "qlist.php?t_id=$t_id";
    /*
    echo "<div><object type='application/x-shockwave-flash' data='dewplayer/dewplayer-playlist-cover.swf' width='240' height='200' id='dewplayer' name='dewplayer'>";
    echo "<param name='wmode' value='transparent' />";
    echo "<param name='movie' value='dewplayer/dewplayer-playlist-cover.swf' />";
    echo "<param name='flashvars' value='";
    //echo "autoplay=1&";
    echo "showtime=1&autoreplay=true&javascript=on&";
    echo "xml=$xmlurl' />";
    echo "</object></div>";*/
    show_player($t_id, 0, 0, 0, 0);
    echo "<a target=_blank href=".block_url($t_id, 1).">Alternative link</a><br>";
    echo "</table>";
    echo "<br>";
    $filter_t_id = $t_id;
    show_user_logs($u_id);
    die();
  }
  
  $q = "SELECT count(DISTINCT t_id) as cnt FROM cc_qlog 
    WHERE u_id='$us[u_id]' AND UNIX_TIMESTAMP(cc_qlog.l_time) > UNIX_TIMESTAMP('$tracks_start')";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  $q2 = "SELECT count(DISTINCT (t_id*1000+b_id)) as cnt FROM cc_qlog 
    WHERE u_id='$us[u_id]' AND UNIX_TIMESTAMP(cc_qlog.l_time) > UNIX_TIMESTAMP('$tracks_start')";
  $r2 = mysql_query($q2);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r2);
  echo "User $us[u_name] heard $w[cnt] of $current_t_count tracks and 
    $w2[cnt] of $current_b_count 1-minute blocks (since $tracks_start)<br><br>";
  echo "<b>Problem tracks for user $us[u_name] (since $tracks_start):</b><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th><a href='ptracks.php?sort=c_name,correct'>Composer</th>";
  echo "<th><a href='ptracks.php?sort=t_name'>Track</th>";
  echo "<th><a href='ptracks.php?sort=correct,cnt DESC'>Correct</th>";
  echo "<th><a href='ptracks.php?sort=cnt desc'>Asked</th>";
  echo "<th><a href='ptracks.php?sort=wrong2 desc'>Wrong period</th>";
  echo "<th><a href='ptracks.php?sort=sec desc'>Think time</th>";
  echo "<th><a href='ptracks.php?sort=acent desc'>Abs. years error</th>";
  echo "<th><a href='ptracks.php?sort=cent desc'>Years error</th>";
  echo "</tr>";

  $order = "correct,cnt DESC";
  if (isset($sort)) $order = $sort;
  //$q = "SELECT *,count(t_id) as cnt,sum(c_len) as tln FROM cc_composers LEFT JOIN cc_periods USING (p_name) LEFT JOIN cc_ctracks ON (cc_composers.c_id=cc_ctracks.c_id) WHERE c_folder != '' GROUP BY cc_ctracks.c_id ORDER BY $order";
  $q = "SELECT *,avg(l_r1) as r1,sum(l_ok)/count(l_id) as correct,
    count(l_id) as cnt,avg(l_sec) as sec,
    sum(l_wrong2)/count(l_id) as wrong2,avg(abs(l_cent)) as acent,avg(l_cent) as cent 
    FROM cc_qlog 
    LEFT JOIN cc_ctracks USING (t_id) 
    LEFT JOIN cc_composers ON (cc_composers.c_id=cc_qlog.c_id)
    WHERE UNIX_TIMESTAMP(cc_qlog.l_time) > UNIX_TIMESTAMP('$tracks_start') AND cc_qlog.u_id='$u_id'
    GROUP BY cc_qlog.t_id 
    HAVING cnt>1 AND correct<1
    ORDER BY $order
    LIMIT $max_ptracks";
  //echo $q;
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  if ($n == 0) die("There was not a single track asked at least two times, that was answered wrong.");
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<tr>";
    echo "<td><a href=".comp_link($w[c_id]).">$w[c_name]</a> [$w[c_years]] $w[c_country]</td>";
    echo "<td><a href=ptracks.php?u_id=$us[u_id]&t_id=$w[t_id]>";
    if ($w[correct] == 0) echo "<font color=brown>";
    echo "$w[t_name] $w[t_len]</td>";
    //echo "<td>".gmdate('H:i:s', $w[c_len])."</td>";
    //echo "<td>";
    //if (round($w[r1])>0) echo round($w[r1])."</td>";
    echo "<td><center>";
    if ($w[correct] == 0) echo "<b><font color=brown>";
    echo round(100*$w[correct], 1)."%";
    echo "<td><center>";
    if ($w[cnt]>0) echo "$w[cnt]</td>";
    echo "<td><center>";
    if ($w[wrong2]>0) echo round(100*$w[wrong2], 1)."%";
    echo "<td><center>";
    if ($w[sec]>0) echo gmdate('H:i:s', round($w[sec]))."</td>";
    echo "<td><center>";
    if ($w[acent]!=0) echo round($w[acent], 1);
    echo "<td><center>";
    if ($w[cent]!=0) echo round($w[cent], 1);
    echo "</tr>";
  }
  echo "</table>";
  echo "<br>Only tracks, asked more than once and answered at least one time wrong are shown.";
  
  // SELECT u_name,cc_qlog.u_level,count(*) as cnt,avg(l_r1) as r1,avg(l_ok) FROM `cc_qlog` LEFT JOIN cc_users USING (u_id) WHERE c_id=192 GROUP BY u_id,cc_qlog.u_level HAVING cnt>3 ORDER BY r1 desc 
  // Show run time
  $mtime = microtime();
  $mtime = explode(" ",$mtime);
  $mtime = $mtime[1] + $mtime[0];
  $endtime = $mtime;
  $totaltime = round($endtime - $starttime, 2);
  echo "<p>The script ran ".$totaltime." seconds"; 
?>
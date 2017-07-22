<?
  //header('Content-Type: text/html; charset=cp1251');
  include "qlib.php";
  include "auth.php";
  include "style.php";
  //echo "<body onload='play_correct();'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>";

  include "menu.php";
  //mysql_set_charset("utf8");
  
  secure_variable("u_id");
  secure_variable("t_id");
  secure_variable("b_id");
  secure_variable("sort");
  secure_variable("t_comment");
  secure_variable("t_folder");
  secure_variable("c_id");
  secure_variable("t_name");
  secure_variable("t_fname");
  secure_variable("t_rating");
  secure_variable("showfav");
  
  start_time();
  
  if (isset($t_comment)) {
    if ($i_am_admin == 0) die("This place is only for administrators.");
    $cond = "t_id='$t_id'";
    $r=mysql_query2("SELECT t_comment FROM cc_ctracks WHERE $cond");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    write_log("log/t_comment.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." $us[u_name] changed t_comment from '$w[t_comment]' to '$t_comment' (t_id=$t_id, folder=$t_folder)");
    if (isset($t_folder)) $cond = " c_id='$c_id' AND t_folder='$t_folder' ";
    mysql_query2("UPDATE cc_ctracks SET t_comment='$t_comment' WHERE $cond");
    echo mysql_report_error();
    die ("<script language=\"javascript\">location.replace(\"ptracks.php?t_id=$t_id\");</script>"); 
  }
  
  if ($t_name != "") {
    if ($i_am_admin == 0) die("This place is only for administrators.");
    $r=mysql_query2("SELECT t_name, t_folder2 FROM cc_ctracks WHERE t_id='$t_id'");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    write_log("log/t_name.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." $us[u_name] changed t_name from '$w[t_name]' to '$t_name', t_folder2 from '$w[t_folder2]' to '$t_folder' (t_id=$t_id)");
    mysql_query2("UPDATE cc_ctracks SET t_name='$t_name', t_folder2='$t_folder' WHERE t_id='$t_id'");
    echo mysql_report_error();
    die ("<script language=\"javascript\">location.replace(\"ptracks.php?t_id=$t_id\");</script>"); 
  }
  
  if (isset($t_rating)) {
    if ($i_am_admin == 0) die("This place is only for administrators.");
    $r=mysql_query2("SELECT t_rating FROM cc_ctracks WHERE t_id='$t_id'");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    write_log("log/t_rating.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." $us[u_name] changed t_rating from '$w[t_rating]' to '$t_rating' (t_id=$t_id)");
    $cond = "t_id='$t_id'";
    if (isset($t_folder)) $cond = " c_id='$c_id' AND t_folder='$t_folder' ";
    $q = "UPDATE cc_ctracks SET t_rating='$t_rating' WHERE $cond";
    mysql_query2($q);
    echo mysql_report_error();
    die ("<script language=\"javascript\">location.replace(\"ptracks.php?t_id=$t_id\");</script>"); 
  }
  
  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  if ($u_id>0) load_user($u_id);
  else $u_id = $us[u_id];
  if (!isset($b_id)) $b_id=1;

  if (isset($t_id)) {
    load_track($t_id);
    //text2speech("play_correct", "Correct. ".str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", $ts[c_name3])));
    echo "<table border=1 cellpadding=5>";
    echo "<tr>";
    echo "<td valign=top align=left>";
    echo "<b>Statistics for track $ts[t_name]</b> since $tracks_start<br><br>";
    echo "Composer: <a href=am.php?u_id=$us[u_id]&c_id=$ts[c_id]>$ts[c_name]</a> [$ts[c_years]] $ts[c_country] ($ts[p_name])<br>";
    echo "Group: ";
    if ($ts[tg_id]>0) echo "<img title='$ts[tg_name]' height=15 src=images/tg$ts[tg_id].png> ";
    echo "<a title='$ts[tg_comment]\n$ts[tg_tracks] tracks, $ts[tg_hours] hours, $ts[tg_cnum] composers";
    echo "' href='tgroups.php?tg_id=$ts[tg_id]'>";
    echo "$ts[tg_name]</font></a> ";
    if ($ts[tg_comment] != "") echo "($ts[tg_comment])";
    echo "<br>";
    $r = mysql_query2("SELECT t_id FROM cc_ctracks WHERE c_id=$ts[c_id] AND t_id>$t_id LIMIT 1");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    echo "Track duration: ".date('i:s', $ts[t_len]);
    if ($w[t_id]>0) echo " <a href=ptracks.php?t_id=$w[t_id]&u_id=$u_id>Next track</a>";
    echo "<br>";
    if ($ts[t_bad]>0) {
      echo "<br>";
      echo "<font color=red><b>This track is marked bad. It will not take place in the game and can be removed from database later. Tracks are marked bad if they are duplicates or if they have bad quality.</b></font>";
      echo "<br>";
    }
    $fld = $ts[t_folder2]."/";
    if ($ts[t_folder2] == "") $fld = "";
    if ($ts[t_comment] != "") echo "<br><b><font style='BACKGROUND-COLOR: #dddddd'>".stripslashes($ts[t_comment])."</font></b>";
    echo "<font color=black><b><br>".str_replace("/", " / ", "$fld".$ts[t_name]);
    //echo "<p title=\"".meta_conv($ts[t_meta])."\">".meta_conv($ts[t_meta2]);
    
    // Show rating
    if ($ts[t_rating]>0) echo " <img title='Rating of popularity' height=16 src=images/rating$ts[t_rating].png>";
    // Show search
    $sst = str_replace("'", "", "$ts[t_name]");
    $sst = str_replace(".mp3", "", $sst);
    $sst = str_replace($ts[c_name4], "", $sst);
    while (!ctype_alpha($sst[0])) {
      $sst = substr($sst, 1);
      if (strlen($sst)==0) break;
    }
    while (!ctype_alpha($sst[strlen($sst)-1])) {
      $sst = substr($sst, 0, strlen($sst)-1);
      if (strlen($sst)==0) break;
    }
    $sst = "$ts[c_name4] $sst";
    echo " <a target=_blank href='http://www.google.ru/search?q=".$sst."'><img src=images/search.png height=16></a>";
    
    echo "<br>".str_replace("\n", "<br>", meta_conv($ts[t_meta2]))."</b> ";
    echo "".str_replace("\n", "<br>", meta_conv($ts[t_meta3]))."<br>";
    if ($i_am_admin) {
      // Change comment
      echo "<br><form action=ptracks.php>";
      echo "<input type=hidden name=t_id value='$t_id'>";
      echo "<input type=hidden name=c_id value='$ts[c_id]'>";
      echo "<b>Track comment</b>:";
      if ($uname=="rualark") {
        echo " ";
        for ($i=0; $i<6; $i++) {
          echo "<a title='Set rating' href=?t_id=$t_id&t_rating=$i>";
          if ($ts[t_rating] == $i) echo "<font color=red>"; else echo "<font color=#dddddd>";
          echo "$i</font></a> ";
        }
      }
      echo "<br><input type=text size=90 name=t_comment value=\"".stripslashes($ts[t_comment])."\" style='background-color: #eeeeee;'> ";
      echo "<br><label title=\"";
      $q = "SELECT t_name, t_meta2 FROM cc_ctracks WHERE c_id='$ts[c_id]' AND t_folder='$ts[t_folder]'";
      $r = mysql_query2($q);
      echo mysql_report_error();
      $n = mysql_numrows($r);
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        echo str_replace(".mp3", "", $w[t_name])." - ".str_replace("<br>", "; ", $w[t_meta2])."\n";
      }
      echo "\"><input type=checkbox name=t_folder value='$ts[t_folder]'> Apply to whole folder</label> ";
      echo "<input type=submit>";
      echo "</form>";
      
      // Change rating
      echo "<form action=ptracks.php>";
      echo "<input type=hidden name=t_id value='$t_id'>";
      echo "<input type=hidden name=c_id value='$ts[c_id]'>";
      echo "<b>Rating:</b> <input type=text size=3 name=t_rating value='$ts[t_rating]' style='background-color: #eeeeee;'> ";
      echo "<input type=checkbox name=t_folder value='$ts[t_folder]'> Apply to whole folder ";
      echo "<input type=submit>";
      echo "</form>";
      
      echo "<br><form action=ptracks.php>";
      echo "<input type=hidden name=t_id value='$t_id'>";
      echo "<b>Track name</b>:<br>";
      echo "<input type=text size=90 name=t_name value=\"$ts[t_name]\" style='background-color: #ccddff;'><br> ";
      echo "<b>Folder name</b>:<br>";
      echo "<input type=text size=70 name=t_folder value=\"$ts[t_folder2]\" style='background-color: #ccddff;'> ";
      echo "<input type=submit>";
      echo "</form>";
      echo "<font color=gray>Original file name: $ts[t_fname]<br>";
      echo "Original folder name: $ts[t_folder]";
      echo "</font><br>";
    }
    // Show reports
    $q = "SELECT *, cc_bblocks.b_id as b_id FROM cc_bblocks LEFT JOIN cc_users USING (u_id) WHERE cc_bblocks.t_id=$t_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    if ($n>0) {
      if ($t_id>0) echo "<br><b>Detected bad block reports for this track:</b>";
      echo "<table border=1>";
      echo "<tr>";
      echo "<th><center>Time";
      echo "<th><center>User";
      echo "<th><center>Block";
      echo "<th><center>Comment";
      echo "<th><center>Status";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        $bgcolor="#ffdddd";
        echo "<td bgcolor=$bgcolor><center>$w[b_time]";
        echo "<td bgcolor=$bgcolor><center><a href=stats.php?su_id=$w[u_id]>$w[u_name]";
        echo "<td bgcolor=$bgcolor><center>$w[b_id]";
        echo "<td bgcolor=$bgcolor><center>$w[b_comment]";
        echo "<td bgcolor=$bgcolor><center>".$bb_states[$w[b_state]];
      }
      echo "</table>";
    }
    echo "<br>";
    echo "<td valign=top align=left>";
    $xmlurl = "qlist.php?t_id=$t_id";

    show_fav_button($t_id, $b_id, $ts[c_id]);
    show_player($t_id, 0, 0, 0, 0, $b_id);
    //show_player($t_id, 0, 0, 0, is_mobile(), $b_id);
    echo "<table width=100% cellpadding=3 border=0 cellspacing=0 align=center><td bgcolor=#3a2a45><center>&nbsp;";
    //echo "<a target=_blank href='".block_url($t_id, 1)."?$us[u_start]'>";
    echo "<a target=_blank href='".full_url()."?$us[u_start]'>";
    echo "<font size=4 style='font-family:Verdana, Arial, sans-serif; font-weight : normal;' color=#8c7b9b>Alternative link to MP3&nbsp;</table>";
    //echo "<a target=_blank href=".block_url($t_id, 1).">Alternative link</a><br>";
    echo "<br><center><a onclick='return confirm(\"Please confirm, that you want to report this track as broken. Report will be sent to site administration. You should only report tracks as broken if you do not hear any sound or if the sound is garbled. PLEASE NOTE THAT TO PROTECT PLAYERS FROM CHEATING, YOU WILL HAVE TO ANSWER THIS QUESTION ANYWAY. Please select any answer after reporting broken track. Thank you for your patience!\");' target=_blank href=quiz.php?ac=$start&bblock=1";
    echo "&c_id=$c_id&t_id=$t_id&b_id=$b_id";
    echo "><font color=red>Report broken track</font></a>";
    echo "</table>";
    echo "<br>";
    $filter_t_id = $t_id;
    show_user_plogs($u_id);
    stop_time();
    die();
  }

  
  if (isset($sort)) $order = $sort;
  if ($showfav==1) {
    if ($order == "") $order = "c_start";
    $tit = "Favorite";
    $q = "SELECT *,((t_total-t_wrong)/t_total) as correct 
      FROM cc_fav
      LEFT JOIN cc_ctracks USING (t_id) 
      LEFT JOIN cc_composers ON (cc_fav.c_id=cc_composers.c_id)
      LEFT JOIN cc_tstat ON (cc_tstat.t_id=cc_fav.t_id AND cc_tstat.u_id='$u_id')
      WHERE cc_fav.u_id='$u_id' AND f_deleted=0 AND cc_fav.u_id='$u_id'
      ORDER BY $order
      LIMIT $max_ptracks";
  } else {
    if ($order == "") $order = "correct,t_total DESC";
    $tit = "Problem";
    $q = "SELECT *,((t_total-t_wrong)/t_total) as correct,
      cc_tstat.t_id as t_id
      FROM cc_tstat 
      LEFT JOIN cc_ctracks USING (t_id) 
      LEFT JOIN cc_composers ON (cc_tstat.c_id=cc_composers.c_id)
      LEFT JOIN cc_fav ON (cc_tstat.t_id=cc_fav.t_id AND cc_fav.u_id='$u_id' AND cc_fav.f_deleted=0)
      WHERE cc_tstat.u_id='$u_id' AND t_wrong>2
      ORDER BY $order
      LIMIT $max_ptracks";
  }
  //echo $q;
  echo "<b>$tit tracks for user $us[u_name]:</b><br>"; // (since $tracks_start)
  echo "<table border=0><tr><td bgcolor=black><table id=table1 cellpadding=3 border=0 cellspacing=1>";
  echo "<tr>";
  echo "<th><a href='ptracks.php?showfav=$showfav&sort=c_start'>Composer</th>";
  echo "<th>Track</th>";
  echo "<th><a href='ptracks.php?showfav=$showfav&sort=correct,t_total DESC'>Correct</th>";
  echo "<th><a href='ptracks.php?showfav=$showfav&sort=t_total desc'>Asked</th>";
  //echo "<th><a href='ptracks.php?showfav=$showfav&sort=t_wrong2 desc'>Wrong period</th>";
  echo "<th><a href='ptracks.php?showfav=$showfav&sort=t_avsec desc'>Think time</th>";
  if ($showfav==1) {
    echo "<th width=120><a href='ptracks.php?showfav=$showfav&sort=f_group'>Favorite group</th>";
    echo "<th>";
  }
  echo "</tr>";

  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  if ($n == 0) {
    if ($showfav==1) {
      die("</table></table>Favorite list empty.");
    } else {
      die("</table></table>There was not a single track asked at least two times, that was answered wrong.");
    }
  }
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $bgcolor=track_color($w);
    echo "<tr id=row$i>";
    echo "<td bgcolor=$bgcolor><a href=".comp_link($w[c_id])."><font color=black>$w[c_name]</a> [$w[c_years]] $w[c_country] ";
    echo "<td bgcolor=$bgcolor><a href=ptracks.php?u_id=$us[u_id]&b_id=$w[b_id]&t_id=$w[t_id]>";
    //if ($w[correct] == 0) echo "<font color=brown>";
    echo "<font color=black>";
    if ($w[t_folder2] != "") echo "$w[t_folder2]/";
    echo "$w[t_name]</td>";
    echo "<td bgcolor=$bgcolor><center><b>";
    //if ($w[correct] == 0) echo "<font color=brown>";
    echo round(100*$w[correct], 1)."%";
    echo "<td bgcolor=$bgcolor><center><b>";
    if ($w[t_total]>0) echo "$w[t_total]</td>";
    /*echo "<td bgcolor=$bgcolor><center>";
    if ($w[t_wrong2]>0) echo round(100*$w[t_wrong2]/$w[t_total], 0)."%";
    */
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[t_avsec]>0) echo round($w[t_avsec])."</td>";
    /*
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[t_avcent2]!=0) echo round($w[t_avcent2], 0);
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[t_avcent]!=0) echo round($w[t_avcent], 0);
    */
    if ($showfav==1) {
      echo "<td bgcolor=$bgcolor ";
      if ($w[f_time] == "") echo "><center>-";
      else echo "contenteditable=true align=center id='$w[t_id]'>  $w[f_group]</td>";
      echo "<td bgcolor=$bgcolor><a href='javascript:void(0)'><img onclick='
        var row = document.getElementById(\"row$i\"); 
        row.parentNode.removeChild(row);
        $.post(\"add_fav.php\", \"t_id=$w[t_id]&value=on\");
        ' border=0 height=14 src=images/cross.png>";
    }
  }
  echo "</table></table>";
?>
<script>
$(function(){
  $("td[contenteditable=true]").blur(function(){
    var field_userid = $(this).attr("id") ;
    var value = $(this).text() ;
    $.post('add_fav.php' , "value=group&t_id=" + field_userid + "&group=" + value, function(data){
        if(data != '') {
          alert(data);
        }
    });
  });
});
</script>
<?
  if ($showfav==0) echo "<br>Only tracks, having more than two wrong answers.";
  
  // SELECT u_name,cc_qlog.u_level,count(*) as cnt,avg(l_r1) as r1,avg(l_ok) FROM `cc_qlog` LEFT JOIN cc_users USING (u_id) WHERE c_id=192 GROUP BY u_id,cc_qlog.u_level HAVING cnt>3 ORDER BY r1 desc 
  stop_cache($suffix);
?>
<?
  $perc_min = 3;
  $perc_max = 5;

  include "analytics.php";
  include "mysql.php";
  include "cclib.php";
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable_post("c_desc");
  secure_variable_post("c_desc2");
  secure_variable_post("c_id2");
  secure_variable("c_id");
  secure_variable("u_id");
  secure_variable("t_id");
  secure_variable("sort");
  secure_variable("amg_id");

  start_time();
  
  function show_mysql_report_error() {
    echo "<font color=red>".mysql_report_error()."</font><br/>";
  }
  
  if ($c_desc != "") {
    if ($i_am_admin == 0) die("This place is only for administrators.");
    write_log("log/cdesc.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." $us[u_name] changed description for c_id $c_id2");
    write_log("log/cdesc.log", "Old: $c_desc2");
    write_log("log/cdesc.log", "New: $c_desc");
    mysql_query2("UPDATE cc_composers SET c_desc='$c_desc' WHERE c_id=$c_id2");
    echo mysql_report_error();
    die ("<script language=\"javascript\">location.replace(\"am.php?c_id=$c_id2\");</script>"); 
  }
  
  //echo "<title>ClassClass - classical music classification</title>";
  //echo "<center><a href=am.php>Genres</a> | <a href=amc.php>Composers</a> | <a href=ams.php>Search</a></center>";
  $cond_c = "AND cc_ctracks.c_id='$c_id'";
  
  echo "<center><b>";
  /*
  $r = mysql_query2("SELECT c_desc,c_group,c_caid,c_amid,c_country,c_name3,c_years,count(*),c_name4 as cnt FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE c_id='$c_id'");
  echo mysql_report_error();
  $w = mysql_fetch_array($r);
  */
  if ($w[c_name] == "") {
    $r = mysql_query2("SELECT * FROM cc_composers WHERE c_id='$c_id'");
    $w = mysql_fetch_array($r);
  }
  $wc = $w;
  echo "$w[c_name3] ";
  echo " <a title='Click to find islands with this composer' href='isles.php?cname=$w[c_name4]'><img height=18 border=0 align=top src=images/search.png></a> ";
  echo "<a target=_blank href=\"http://en.wikipedia.org/w/index.php?search=$w[c_name3]\"><img height=20 border=0 src=i/wikipedia.jpg></a> ";
  echo "<a target=_blank href=\"http://youtube.com/results?search_query=$w[c_name3]\"><img height=20 border=0 src=i/youtube.png></a> ";
  echo "<a target=_blank href='http://www.google.ru/search?q=$w[c_name3]'><img height=20 border=0 src=i/google.png></a> ";
  echo "<a target=_blank href='http://www.google.ru/search?q=mfiles $w[c_name3]'><img height=20 border=0 src=i/mf.png></a> ";
  echo "<a target=_blank href='http://www.google.ru/search?q=site:imslp.org $w[c_name3]'><img height=20 border=0 src=i/imslp150.jpg></a> ";
  echo "<a target=_blank href=\"http://www.allmusic.com/artist/$w[c_amid]\"><img height=20 border=0 src=i/allmusic.png></a> ";
  echo "<a target=_blank href=\"http://www.classicalarchives.com/composer/$w[c_caid].html\"><img height=20 border=0 src=i/classicalarchives.jpg></a> ";
  echo "$w[c_country] [$w[c_years]]";
  echo "</b><br>";
  if (strlen($w[c_group])>1) echo "<b>Group:</b> $w[c_group]<br>";
  if (strlen($w[c_desc])>1) echo "<b>Short description:</b> $w[c_desc]<br>";
  echo "</center>";
  
  // Show tracks
  if ((isset($u_id)) && ($us[u_id]==0)) $us[u_id] = $u_id;
  if (!isset($u_id)) $u_id=$us[u_id];
  if ($u_id>0) {
    echo "<a title='Currently showing stats for one user. Switch to all users' href=am.php?c_id=$c_id&u_id=0><img height=18 border=0 src=images/onecomp.png></a> ";
  } else {
    echo "<a title='Currently showing stats for all users. Switch to your stats' href=am.php?c_id=$c_id&u_id=$us[u_id]><img height=18 border=0 src=images/allcomp.png></a> ";
  }
  //echo $u_id;
  show_played_composer($c_id, $u_id);
  echo " Played blocks map: <br><img src='png-cblocks.php?u_id=$u_id&c_id=$c_id'>";
  echo "<br>";
  echo "<table><tr><td valign=top>";
  if (is_file("cpic/$w[c_id].jpg")) echo "<img width=200 src=cpic/$w[c_id].jpg align=right>";
  $table = "cc_tstat2";
  if ($u_id>0) {
    $cond = "AND cc_tstat.u_id='$u_id'";
    $table = "cc_tstat";
  }
  $q = "SELECT *,cc_ctracks.t_id as t_id,cc_ctracks.t_len as t_len,b_time
    FROM cc_ctracks 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN cc_tgroups ON (cc_tgroups.tg_id=cc_ctracks.tg_id) 
    LEFT JOIN $table ON ($table.t_id=cc_ctracks.t_id $cond)
    LEFT JOIN cc_bblocks ON (cc_bblocks.t_id=cc_ctracks.t_id AND cc_bblocks.b_state=0)
    WHERE t_bad=0 $cond_c
    GROUP BY cc_ctracks.t_id
    ORDER BY cc_ctracks.t_id
  ";
  $r = mysql_query2($q);
  show_mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i]=mysql_fetch_array($r);
    $w = &$wa[$i];
    show_track($w);
    if ($w[b_time] != "") echo " <img title='Open bad block reports' height=17 src=images/fire.png> ";
    echo " <a href=# onclick='myPlaylist.select($i); $(\"#jquery_jplayer_1\").jPlayer(\"play\"); return false; '><img src=images/play_g.gif height=16></a>";
    echo "<br>\n";
  }
  echo "<br><b>Last comments for this composer:</b> ";
  show_forum("", 100, 700, 0, $wc[c_name4]);
  echo "Showing 100 last comments";

  /*
  // Show example table
  echo "<table cellpadding=10>";
  echo "<tr><td>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Answered";
  echo "<th colspan=10>Correct 0 to 100%";
  $w[t_len]=6000;
  $w[t_wrong]=0;
  for ($i=1; $i<11; $i++) {
    $w[t_total] = 10*$i;
    echo "<tr>";
    echo "<td>$w[t_total]% questions";
    for ($x=1; $x<11; $x++) {
      $w[t_wrong] = $w[t_total]-$w[t_total]*$x/10;
      $color = track_color($w, 0.5);
      echo "<td bgcolor=$color>";
      echo "<font color=$color>__";
      //echo "$color";
    }
  }
  echo "</table>";
  */

  echo "<td valign=top>";
  show_player_i($wa);
  echo "</table>";
  if ($i_am_admin) {
    // Change desc
    echo "<br><form method=post action=am.php>";
    echo "<input type=hidden name=c_id2 value='$c_id'>";
    echo "<input type=hidden name=c_desc2 value=\"".stripslashes($wc[c_desc])."\">";
    echo "<b>Composer desc</b>:<br>";
    echo "<textarea rows=14 cols=80 name=c_desc>";
    echo stripslashes($wc[c_desc]);
    echo "</textarea> ";
    echo "<input type=submit>";
    echo "</form>";
  }
  stop_time();
?>
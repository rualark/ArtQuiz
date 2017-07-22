<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  start_time();
  
  secure_variable("level");
  secure_variable("sort");
  secure_variable("c_id");
  secure_variable("cab");
  secure_variable("i_name");
  secure_variable("f_text");
  secure_variable("f_id");
  secure_variable("fu_id");
  secure_variable("action");
  secure_variable("vote");

  if (isset($i_name)) {
    if (($us[u_id] != $wi[nu_id]) && (!in_array($uname, $admin_unames))) {
      die("<font color=red>You do not have access to this action. Please contact site administrator.</font>");
    }
    mysql_query2("UPDATE cc_isles SET i_name='$i_name' WHERE i_cab=x'$cab'");
    flush_cache();
    die ("<script language=\"javascript\">location.replace(\"rating.php?level=$level&cab=$cab\");</script>"); 
  }

  if ($action=="removeforum") {
    load_isle($cab);
    mysql_query2("UPDATE cc_forum SET f_deleted=1 WHERE f_id='$f_id'");
    echo mysql_report_error();
    mysql_query2("UPDATE cc_isles SET f_count=f_count-1 WHERE i_cab=x'$cab'");
    echo mysql_report_error();
    mysql_query2("UPDATE cc_users SET u_posted=u_posted-1 WHERE u_id=$fu_id");
    echo mysql_report_error();
    // Update composer f_count
    if ($is[i_cnum]<=$max_forum_cnum) {
      $r=mysql_query2("SELECT f_count FROM cc_isles WHERE i_cab=x'$cab'");
      echo mysql_report_error();
      $w = mysql_fetch_assoc($r);
      if ($w[f_count] == 0) {
        $ca = unpack_ca($cab);
        $ca_cond = get_ca_cond($ca);
        mysql_query2("UPDATE cc_composers SET f_count=f_count-1 WHERE $ca_cond");
        echo mysql_report_error();
      }
    }
    flush_cache();
    die ("<script language=\"javascript\">location.replace(\"rating.php?level=$level&cab=$cab\");</script>"); 
  }

  if ($action == "vote") {
    // Get current vote state
    $r=mysql_query2("SELECT * FROM cc_fvotes WHERE f_id='$f_id' AND u_id='$us[u_id]'");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    // Get comment
    $r2=mysql_query2("SELECT * FROM cc_forum WHERE f_id='$f_id'");
    echo mysql_report_error();
    $w2 = mysql_fetch_assoc($r2);
    // Check if author tries to vote
    if ($us[u_id] == $w2[fu_id]) die();
    if ($w[v_type] == 0) {
      // Add vote
      if ($vote == 1) {
        mysql_query2("UPDATE cc_forum SET f_up=f_up+1 WHERE f_id='$f_id'");
        echo mysql_report_error();
        mysql_query2("UPDATE cc_users SET u_fup=IFNULL(u_fup, 0)+1 WHERE u_id=$w2[fu_id]");
        echo mysql_report_error();
      } else {
        mysql_query2("UPDATE cc_forum SET f_down=f_down+1 WHERE f_id='$f_id'");
        echo mysql_report_error();
        mysql_query2("UPDATE cc_users SET u_fdown=IFNULL(u_fdown, 0)+1 WHERE u_id=$w2[fu_id]");
        echo mysql_report_error();
      }
      mysql_query2("INSERT INTO cc_fvotes VALUES('$f_id', '$us[u_id]', $vote, NOW())");
      echo mysql_report_error();
      mysql_query2("UPDATE cc_users SET u_voted=IFNULL(u_voted, 0)+1 WHERE u_id=$us[u_id]");
      echo mysql_report_error();
    } elseif ($w[v_type] == $vote) {
      // Remove vote
      if ($vote == 1) {
        mysql_query2("UPDATE cc_forum SET f_up=f_up-1 WHERE f_id='$f_id'");
        echo mysql_report_error();
        mysql_query2("UPDATE cc_users SET u_fup=u_fup-1 WHERE u_id=$w2[fu_id]");
        echo mysql_report_error();
      } else {
        mysql_query2("UPDATE cc_forum SET f_down=f_down-1 WHERE f_id='$f_id'");
        echo mysql_report_error();
        mysql_query2("UPDATE cc_users SET u_fdown=u_fdown-1 WHERE u_id=$w2[fu_id]");
        echo mysql_report_error();
      }
      mysql_query2("DELETE FROM cc_fvotes WHERE f_id='$f_id' AND u_id='$us[u_id]'");
      echo mysql_report_error();
      mysql_query2("UPDATE cc_users SET u_voted=u_voted-1 WHERE u_id=$us[u_id]");
      echo mysql_report_error();
    }
    echo mysql_report_error();
    //die ("<a href='rating.php?level=$level&cab=$cab'> Go to forum</a>");
    flush_cache();
    die ("<script language=\"javascript\">location.replace(\"rating.php?level=$level&cab=$cab\");</script>"); 
  }
  
  if ((isset($f_id)) && (isset($f_text))) {
    //$f_text2 = forum_parse_text($f_text, $cab);
    mysql_query2("UPDATE cc_forum SET f_text='$f_text', f_text2='', f_edited=NOW() WHERE f_id='$f_id'");
    echo mysql_report_error();
    update_forum($f_id);
    flush_cache();
    die ("<script language=\"javascript\">location.replace(\"rating.php?level=$level&cab=$cab\");</script>"); 
  }
  
  if (isset($f_text)) {
    load_isle($cab);
    $f_text2 = forum_parse_text($f_text, $cab);
    mysql_query2("INSERT INTO cc_forum VALUES('', x'$cab', $us[u_id], NOW(), '".$_SERVER['REMOTE_ADDR']."', '', '$f_text', '$f_text2', 0, 0, 0, 0, 0)");
    echo mysql_report_error();
    $f_id = mysql_insert_id();
    echo "<iframe height=130 width=500 scrolling=auto src='mailer.php?act=send-forum&f_id=$f_id&cab=$cab'></iframe>";
    mysql_query2("UPDATE cc_isles SET f_count=f_count+1 WHERE i_cab=x'$cab'");
    echo mysql_report_error();
    mysql_query2("UPDATE cc_users SET u_posted=IFNULL(u_posted, 0)+1 WHERE u_id=$us[u_id]");
    echo mysql_report_error();
    update_forum($f_id);
    // Update composer f_count
    if ($is[i_cnum]<=$max_forum_cnum) {
      $r=mysql_query2("SELECT f_count FROM cc_isles WHERE i_cab=x'$cab'");
      echo mysql_report_error();
      $w = mysql_fetch_assoc($r);
      if ($w[f_count] == 1) {
        $ca = unpack_ca($cab);
        $ca_cond = get_ca_cond($ca);
        mysql_query2("UPDATE cc_composers SET f_count=f_count+1 WHERE $ca_cond");
        echo mysql_report_error();
      }
    }
    flush_cache();
    die ("<script language=\"javascript\">location.replace(\"rating.php?level=$level&cab=$cab\");</script>"); 
  }
  
  $suffix = "";
  start_cache($suffix);

  if (!isset($level)) $level = $us[u_level];
  $rating_min = $rating_min_total;
  if ($level == $level_cust) $rating_min = $rating_min_isle;
  echo "<center><form action=rating.php method=get>";
  echo "Difficulty: ";
  //echo "<select name=level onChange='this.form.submit();'>";
  for ($i=1; $i<$level_cust; $i++) {
    if ($i == $level) echo "<b><font style='BACKGROUND-COLOR: yellow'>";
    else echo "<a href=rating.php?level=$i>";
    if ($i == $us[u_level]) echo " <font color=brown>";
    echo "".$level_name[$i]."</b></font></font></a> | ";
  }
  if ($level_cust == $level) echo "<b><font style='BACKGROUND-COLOR: yellow'>";
  else echo "<a href=rating.php?level=$level_cust>";
  echo "Isles</b></font></a> | ";
  if (($level == $level_cust) && ($cab == "")) {
    if (!isset($sort)) $sort = "u_kr desc";
    $q = "SELECT u_id, u_name, u_kr, u_kcnt, u_acnt, u_total, u_total2, u_medal1, u_medal2, u_medal3, u_medal4, u_fires, u_palms, u_hc1, u_hc2, u_fup, u_fdown, 
      u_posted, u_icr, u_clears, u_rent, u_last,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(u_last) as u_passed
      FROM cc_users
      WHERE u_fires>0 OR u_kcnt>0 OR u_fup>0 OR u_fdown>0 OR u_posted>0
      ORDER BY $sort
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
    echo "<tr>";
    echo "<th>User</th>";
    $bgcolor1="#eeeeee";
    $bgcolor2="white";
    echo "<td bgcolor=$bgcolor1 title='King rank'><a href='rating.php?level=$level&sort=u_kr desc'>Rank";
    echo "<td bgcolor=$bgcolor1 title='Isles where user is king'><a href='rating.php?level=$level&sort=u_kcnt desc,u_kr desc'><center><img align=top height=18 src=images/isle.png>";
    echo "<td bgcolor=$bgcolor1><center><a href='rating.php?level=$level&sort=u_medal1 desc,u_kr desc'>".show_crown($isle_king_min[0]+1);
    echo "<td bgcolor=$bgcolor1><center><a href='rating.php?level=$level&sort=u_medal2 desc,u_kr desc'>".show_crown($isle_king_min[1]+1);
    echo "<td bgcolor=$bgcolor1><center><a href='rating.php?level=$level&sort=u_medal3 desc,u_kr desc'>".show_crown($isle_king_min[2]+1);
    echo "<td bgcolor=$bgcolor1><center><a href='rating.php?level=$level&sort=u_medal4 desc,u_kr desc'>".show_crown($isle_king_min[3]+1);
    echo "<td bgcolor=$bgcolor1><center><a href='rating.php?level=$level&sort=u_fires desc,u_kr desc'>".show_crown($isle_king_min[3]+1, 1);
    echo "<td bgcolor=white><center><a href='rating.php?level=$level&sort=u_palms desc,u_kr desc'>".show_crown(0, 0, 1);
    echo "<td bgcolor=white><center><a href='rating.php?level=$level&sort=u_hc1 desc,u_kr desc'>".show_crown(0, 0, $isle_palace_min[0]+1);
    echo "<td bgcolor=white><center><a href='rating.php?level=$level&sort=u_hc2 desc,u_kr desc'>".show_crown(0, 0, $isle_palace_min[1]+1);
    echo "<td bgcolor=white title='Created islands'><center><a href='rating.php?level=$level&sort=u_icr desc,u_kr desc'><img align=top height=17 src=images/star.png>";
    echo "<td bgcolor=$bgcolor1 title='Received up votes'><center><a href='rating.php?level=$level&sort=u_fup desc,u_kr desc'><img align=top height=17 src=images/up.png>";
    echo "<td bgcolor=$bgcolor1 title='Received down votes'><center><a href='rating.php?level=$level&sort=u_fdown desc,u_kr desc'><img align=top height=17 src=images/down.png>";
    echo "<td bgcolor=$bgcolor1 title='Created posts'><center><a href='rating.php?level=$level&sort=u_posted desc,u_kr desc'><img align=top height=17 src=images/edit.png>";
    echo "<td bgcolor=white title='Cleared games'><center><a href='rating.php?level=$level&sort=u_clears desc,u_kr desc'><img align=top height=17 src=images/recyclebin.png>";
    echo "<td bgcolor=white title='Renters on all islands where user is king'><center><a href='rating.php?level=$level&sort=u_rent desc,u_kr desc'><img align=top height=17 src=images/user.png>";
    echo "<td bgcolor=white title='Answers by renters on all islands where user is king'><center><a href='rating.php?level=$level&sort=u_acnt desc,u_kr desc'><img align=top height=17 src=images/tg0.png>";
    //echo "<td title='Answers by user on all islands where user is king'><center><a href='rating.php?level=$level&sort=u_total2 desc,u_kr desc'>KAns";
    echo "<td bgcolor=white title='Answers by user on all islands'><center><a href='rating.php?level=$level&sort=u_total desc,u_kr desc'>Total";
    echo "<td bgcolor=white><center><a href='rating.php?level=$level&sort=u_last desc'>Last online</th>";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td bgcolor=white><a href=stats.php?su_id=$w[u_id]>$w[u_name]</a>";
      echo "<td bgcolor=$bgcolor1><center><b>".shn0($w[u_kr]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]>".shn0($w[u_kcnt]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]&k_cond=2>".shn0($w[u_medal1]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]&k_cond=3>".shn0($w[u_medal2]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]&k_cond=4>".shn0($w[u_medal3]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]&k_cond=5>".shn0($w[u_medal4]);
      echo "<td bgcolor=$bgcolor1><center><a href=isles.php?ku_id=$w[u_id]&k_cond=1>".shn0($w[u_fires]);
      echo "<td title='$w[u_palms] isles with no other players' bgcolor=$bgcolor2><center><a href=isles.php?ku_id=$w[u_id]&k_cond=6>"; 
      if ($w[u_kcnt]>0) echo round($w[u_palms]/$w[u_kcnt]*100)."%";
      echo "<td bgcolor=$bgcolor2><center><a href=isles.php?ku_id=$w[u_id]&k_cond=7>".shn0($w[u_hc1]);
      echo "<td bgcolor=$bgcolor2><center><a href=isles.php?ku_id=$w[u_id]&k_cond=8>".shn0($w[u_hc2]);
      echo "<td bgcolor=$bgcolor2><center>".shn0($w[u_icr]);
      echo "<td bgcolor=$bgcolor1><center>".shn0($w[u_fup]);
      echo "<td bgcolor=$bgcolor1><center>".shn0($w[u_fdown]);
      echo "<td bgcolor=$bgcolor1><center><a href=forum.php?u_id=$w[u_id]>".shn0($w[u_posted]);
      echo "<td bgcolor=$bgcolor2><center>".shn0($w[u_clears]);
      echo "<td bgcolor=$bgcolor2><center>".shn0($w[u_rent]);
      echo "<td bgcolor=$bgcolor2><center>".shn0($w[u_acnt]);
      //echo "<td bgcolor=$bgcolor1><center>".shn0($w[u_total2]);
      echo "<td bgcolor=$bgcolor1><center>".shn0($w[u_total]);
      echo "<td bgcolor=$bgcolor1><center>";
      if ($w[u_passed] < 60*60) echo "<b>";
      echo shn0($w[u_last]);
    }
    echo "</table></table>";
    stop_cache($suffix);
    exit;
  }
  if ($cab != "") {
    load_isle($cab);
    create_isle_cst(unpack_ca($cab));
    echo "<b>";
    if ($level == $level_cust+1) echo "Free ";
    echo "Island</b>: $isle_cst3 ";
    if ($is[i_name] != "") echo " ($is[i_name]) ";
    echo " <a href=prefs.php?ilevel=$level_cust&cab=$cab> <img valign=center border=0 title='Click to play this island' src=images/play.gif></a>";
    echo " <a href=isnap.php?ilevel=$level_cust&cab=$cab> <img valign=center border=0 title='Click to preview tracks of this island' src=images/play_r.gif></a>";
    if ($is[i_level]>0) echo " <span title='Difficulty level' style='background-color: ".$i_level_color[$is[i_level]]."'>Level $is[i_level]</span>";
    echo " <a href=logs.php?cab=$cab>Logs</a> <a href=klogs.php?cab=$cab>News</a>";
    echo "<br>";
    $isle_cond = "AND cc_ur.r_cab = x'$cab'";
    $isle_cond2 = "AND cc_qlog.u_cab = x'$cab'";
    $isle_group2 = ", cc_qlog.u_cab";

    if ($action=="editforum") {
      $r = mysql_query2("SELECT * FROM cc_forum WHERE f_id='$f_id'");
      $w = mysql_fetch_assoc($r);
      echo "<form action=rating.php>";
      echo "<input type=hidden name=level value='$level'>";
      echo "<input type=hidden name=cab value='$cab'>";
      echo "<input type=hidden name=f_id value='$f_id'>";
      echo "<p align=center style='vertical-align: top;'><b style='vertical-align: top;'>Edit your comment to this island</b>: ";
      echo "<textarea rows=16 cols=80 name=f_text>".stripslashes($w[f_text])."</textarea> ";
      echo "<input style='vertical-align: top;' type=submit>";
      echo "</form>";
      die();
    }
  } else {
  }
  echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
  echo "<tr>";
  echo "<th>User</th>";
  if ($level == $level_cust && $cab == "") echo "<th>Isle</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=r_r1 desc'>Rating</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=r_total desc'>Answers</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=rght desc'>Correct</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=rghtp desc'>Period</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=cc_ur.r_avsec'>ATT, sec</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=r_avcent2'>AAYE</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=r_oneblock desc'>1M</th>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=r_allcomp desc'><img valign=middle title='Selecting from all composers' height=16 src=images/allcomp.png>";
  echo "<th><a href='rating.php?cab=$cab&c_id=$c_id&level=$level&sort=u_last desc'>Last online</th>";
  //echo "<th><a href='rating.php?sort=cent desc'>Years error</th>";
  echo "</tr>";

  // Load isle
  if ($level == $level_cust && $cab != "") {
    //if ($level == $level_cust+1) $cond = " AND i_gab=x'$gab' ";
    $q = "SELECT *,cc_isles.u_id as u_id FROM cc_isles LEFT JOIN cc_users ON (cc_isles.nu_id=cc_users.u_id) WHERE i_cab = x'$cab' $cond";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $wi = mysql_fetch_array($r);
  }

  $order = "r_r1 desc";
  if (isset($sort)) $order = $sort;
  $cond = "";
  $q = "SELECT cc_users.u_id, u_name, r_total, r_r1, r_avsec, r_avcent, r_avcent2, u_last, r_right_b, r_r1_b,
    hex(cc_ur.r_cab) as cab,
    (r_right/cc_ur.r_total) as rght,
    (r_oneblock/cc_ur.r_total) as ob,
    (r_allcomp/cc_ur.r_total) as ac,
    (r_rightp/cc_ur.r_total) as rghtp,
    UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(u_last) as u_passed
    FROM cc_ur
    LEFT JOIN cc_users ON (cc_ur.u_id=cc_users.u_id)
    WHERE cc_ur.r_total>=$rating_min AND cc_ur.r_level=$level $isle_cond
    ORDER BY $order
    LIMIT $rating_max_count";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<tr>";
    echo "<td bgcolor=white><a href=stats.php?su_id=$w[u_id]>";
    //if ($w[t_id]>0) echo "<font color=brown>";
    echo "$w[u_name]</a> ";
    if ($level == $level_cust && $cab != "") {
      if ($wi[u_id] == $w[u_id]) echo show_crown($wi[r_total], $wi[u_id2], $wi[i_unum]);
      //if ($wi[u_id2] == $w[u_id]) echo " <img border=0 title='This user is creating a conflict on this island. See comment for the king.' align=top height=18 src=images/fire_g.png>";
      if ($w[r_total] <= $isle_king_min[0]) 
        echo "<img height=15 title='Player has to answer more than $isle_king_min[0] questions to be able to become king (currently $w[r_total])' src=images/dummy.png>";
    }
    if ($level == $level_cust && $cab == "") {
      echo "<td bgcolor=white>";
      if ($w[cab] != "") {
        load_isle($w[cab]);
        echo "<a title='$is[i_cst2]' href=rating.php?level=$level_cust&cab=$w[cab]>Isle";
      }
    }
    echo "<td bgcolor=white><center><a href=graph.php?u_id=$w[u_id]&level=$level";
    if ($level == $level_cust) echo "&cab=$w[cab]";
    echo ">".round($w[r_r1]);
    //echo "</a> ".show_slope_r1($w[r_r1_b])."";
    echo "<td bgcolor=white><center><a href=plogs.php?level=$level&cab=$w[cab]&u_id=$w[u_id]>$w[r_total]</a>";
    echo "<td bgcolor=white title='".round($w[rght]*$w[r_total])."'><center>".round($w[rght]*100, 0)."%";
    if ($w[r_total]>$slope_min_ans) echo " ".show_slope_ok($w[r_right_b]);
    echo "<td bgcolor=white><center>".round($w[rghtp]*100, 0)."%";
    echo "<td bgcolor=white title='Spent ".gmdate("H:i:s", round($w[r_avsec]*$w[r_total]))." here'><center>".round($w[r_avsec], 0)."";
    echo "<td bgcolor=white><center>".round($w[r_avcent2], 0)."";
    echo "<td bgcolor=white><center>".round($w[ob]*100, 0)."%";
    echo "<td bgcolor=white><center>".round($w[ac]*100, 0)."%";
    echo "<td bgcolor=white><center>";
    if ($w[u_passed] < 60*60) echo "<b>";
    echo "$w[u_last]";
    echo "</tr>";
  }
  echo "</table></table></center>";
  if ($cab != "") {
    //echo "<b>Island name</b>: $wi[i_name]<br>";
    echo "<p align=center>Island was created by $wi[u_name] on $wi[i_since]. Last active $wi[i_last]<br>";
    echo "<a href=isles.php?cab=$cab>Find similar islands</a>";
    show_forum($cab);
    if (($us[u_id] == $wi[nu_id]) || (in_array($uname, $admin_unames))) {
      echo "<form action=rating.php>";
      echo "<input type=hidden name=level value='$level'>";
      echo "<input type=hidden name=cab value='$cab'>";
      echo "<p align=center><b>You can change island name</b>: ";
      echo "<input type=text size=80 name=i_name value='$wi[i_name]' style='background-color: #eeeeee;'> ";
      echo "<input type=submit>";
      echo "</form>";
    }
    if (in_array($uname, $admin_unames)) {
      echo "<center>Change island level: ";
      for ($iii=0; $iii<count($i_level_color); $iii++) {
        echo "<a target=_blank href=isles.php?setlevel=$iii&cab=$cab>";
        if ($iii != $wi[i_level]) echo "<font color=lightgray>";
        else echo "<font color=red>";
        echo "$iii</font></a> ";
      }
      echo "</center>";
    }
    echo "<p>";
  }
  if ($c_id>0) echo "<br>Table includes only top $rating_max_count users with at least $rating_min_total2 answers.<br>";
  else echo "<br>Table includes only top $rating_max_count users with at least $rating_min answers.<br>";
  echo "Users currently answering a question are marked red. Active time less than an hour ago is bold.<br>";
  echo "In composers drop-down list you can see (Total number of answers - Your correctness - Average correctness) for each composer.";
  show_legend();
  stop_cache($suffix);
?>
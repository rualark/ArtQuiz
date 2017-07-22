<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("u_id"); // Played
  secure_variable("ku_id"); // King
  secure_variable("k_cond"); // King condition
  secure_variable("sort");
  secure_variable("cab");
  secure_variable("cname");
  secure_variable("setlevel");
  secure_variable("showmyr");

  $suffix = "";
  if ($showmyr>0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);

  load_comps();
  
  $order = "i_anum desc, i_unum desc, i_cnum desc, r1_max desc";
  if ($sort != "") $order = $sort;
  $cond = "i_anum>$isle_king_min[0] ";

  echo "
    <script type='text/javascript'>
    setTimeout('blink()',300);
    var col = new String();
    var blink_state=1;
    function blink() {
      if(blink_state%2) {
        col = '#2574d0';
      } else {
        col = '#aaccdd';
      }
      blink_id.style.color=col; blink_state++; if(blink_state>2){blink_state=1}; setTimeout('blink()',300);
    }
    </script>";
  if (isset($setlevel)) {
    if (!in_array($uname, $admin_unames)) {
      echo "<font color=red>You do not have access to this action. Please contact site administrator.</font>";
      die();
    }
    load_isle($cab);
    write_log("log/i_level.log", date("Y-m-d H:i:s")." $uname changed $is[i_cst2] from $is[i_level] to $setlevel");
    $q = "UPDATE cc_isles SET i_level=$setlevel WHERE i_cab=x'$cab'";
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    die();
  }
  
  echo "<table width=100%><tr><td>";
  if ($cab != "") {
    load_isle($cab);
    $ca = unpack_ca($cab);
    echo "<b>Showing similar islands to <a href=rating.php?level=$level_cust&cab=$cab>$is[i_cst2]</a>:</b>";
    $isles_max_count *= 50;
  } elseif ($cname != "") {
    echo "<b>Showing islands containing $cname:</b>";
    // Remove condition for i_anum
    $cond = " i_cst REGEXP '\[\[:<:\]\]$cname\[\[:>:\]\]' "; // like '%$cname%'
  } elseif ($u_id>0) {
    $r = mysql_query2("SELECT * FROM cc_users WHERE u_id='$u_id'");
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    echo "<b>Islands, where user $ua[u_name] played:</b><br>";
  } elseif ($ku_id>0) {
    $r = mysql_query2("SELECT * FROM cc_users WHERE u_id='$ku_id'");
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    echo "<b>Islands, where user $ua[u_name] ";
    if ($k_cond == 0) {
      echo "is a king";
    } elseif ($k_cond == 1) {
      echo "has ".show_crown($isle_king_min[3]+1, 1);
      $cond .= " AND cc_isles.u_id2>0 ";
    } elseif ($k_cond == 2) {
      echo "has ".show_crown($isle_king_min[0]+1);
      $cond .= " AND cc_isles.r_total>$isle_king_min[0] AND cc_isles.r_total<=$isle_king_min[1] ";
    } elseif ($k_cond == 3) {
      echo "has ".show_crown($isle_king_min[1]+1);
      $cond .= " AND cc_isles.r_total>$isle_king_min[1] AND cc_isles.r_total<=$isle_king_min[2] ";
    } elseif ($k_cond == 4) {
      echo "has ".show_crown($isle_king_min[2]+1);
      $cond .= " AND cc_isles.r_total>$isle_king_min[2] AND cc_isles.r_total<=$isle_king_min[3] ";
    } elseif ($k_cond == 5) {
      echo "has ".show_crown($isle_king_min[3]+1);
      $cond .= " AND cc_isles.r_total>$isle_king_min[2] ";
    } elseif ($k_cond == 6) {
      echo "is a king without ".show_crown(0, 0, 1);
      $cond .= " AND cc_isles.i_unum>1 ";
    } elseif ($k_cond == 7) {
      echo "has ".show_crown(0, 0, $isle_palace_min[0]+1);
      $cond .= " AND cc_isles.i_unum>$isle_palace_min[0] ";
    } elseif ($k_cond == 8) {
      echo "has ".show_crown(0, 0, $isle_palace_min[1]+1);
      $cond .= " AND cc_isles.i_unum>$isle_palace_min[1] ";
    }
    echo ":</b><br>";
    $cond .= " AND cc_isles.u_id=$ku_id ";
  } else {
    echo "<b>Click blue play button to play on this island. ";
    if (strpos($sort, "i_level") !== 0) {
      echo "<a id='blink_id' href='isles.php?u_id=&sort=i_level,%20r1_max%20desc,%20i_anum%20desc'>Sort by difficulty</a>. ";
    }
    echo "Create your own islands in <a href=prefs.php>Preferences</a>.</b>";
  }
  echo "<td align=right>";
  echo "<a href=klogs.php>News</a> | ";
  echo "</table>";
  if (strpos($sort, "i_level")===0) {
    $cond2 = "AND i_level>0";
    $cond = "1=1 "; // Remove condition for i_anum
  }

  if ($u_id>0) {
    $q = "SELECT *, 
      cc_isles.u_id as u_id,
      ($kr_sql) as kr,
      hex(cc_ur.r_cab) as cab,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(i_since) as i_sp,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(i_last) as i_sl
      FROM cc_ur
      LEFT JOIN cc_isles ON (cc_ur.r_cab = cc_isles.i_cab)
      LEFT JOIN cc_users ON (cc_users.u_id = cc_isles.u_id)
      WHERE cc_ur.u_id = $u_id AND cc_ur.r_level=$level_cust AND cc_ur.r_cab != x'' $cond2
      GROUP BY cc_ur.r_cab
      ORDER BY $order
      LIMIT $isles_max_count";
  } else {
    $q = "SELECT i_unum, i_anum, i_last, cc_isles.u_id as u_id, r1_avg, r1_max, u_name, r_total, u_id2, i_cst2, i_cnum, i_name, f_count, i_level,
      hex(cc_isles.i_cab) as cab,
      ($kr_sql) as kr,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(i_since) as i_sp,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(i_last) as i_sl
      FROM cc_isles
      LEFT JOIN cc_users ON (cc_users.u_id = cc_isles.u_id)
      WHERE $cond $cond2
      ORDER BY $order
      LIMIT $isles_max_count";
  }
  $r = mysql_query2($q);
  //echo $q;
  echo mysql_report_error();
  $n = mysql_numrows($r);

  echo "<center>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th title='Number of users on the island'><a href='isles.php?u_id=$u_id&sort=i_unum desc, i_anum desc, i_cnum desc'>UN</th>";
  echo "<th title='Total number of answers on the island'><a href='isles.php?u_id=$u_id&sort=i_anum desc, i_unum desc, i_cnum desc'>ANS</th>";
  if ($showmyr>0) {
    echo "<th title='Your rating on the island'>My R</th>";
  }
  echo "<th title='Rating of the king on this island'><a href='isles.php?u_id=$u_id&sort=r1_max desc'>King R</th>";
  echo "<th><a href='isles.php?u_id=$u_id&sort=cc_isles.u_id,i_anum desc, i_unum desc, i_cnum desc'>King</th>";
  echo "<th title='Sort by number of composers on an island. Color shows difficulty (see L column).' width=650><a href='isles.php?u_id=$u_id&sort=i_cnum desc, i_anum desc, i_unum desc'>Islands of composers</th>";
  echo "<th title='Difficulty level of the island'><a href='isles.php?u_id=$u_id&sort=i_level, r1_max desc, i_anum desc'>L</th>";
  //echo "<th title='Average rating on the island'><a href='isles.php?u_id=$u_id&sort=r1_avg desc'>AVG R</th>";
  //echo "<th title='Number of composers on the island'><a href='isles.php?u_id=$u_id&sort=i_cnum desc, i_anum desc, i_unum desc'>CN</th>";
  echo "</tr>";
  //if (in_array($uname, $admin_unames)) unlink("i_levels.txt");
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $w3 = $w;
    if (($ca != "") && (levenshtein($ca, unpack_ca($w[cab]), 3, 1, 3) > 3)) continue;
    echo "<tr>";
    echo "<td";
    echo "><center><a href=klogs.php?cab=$w[cab]>$w3[i_unum]";
    echo "</td>";
    $title="";
    $font="";
    $bgcolor="";
    if ($w[i_sl] < $i_last_hours*60*60) {
      $title = "Activity less than $i_last_hours hours ago ($w[i_last]).";
      $font = "<b>";
      $bgcolor="bgcolor=#ddffdd";
    }
    echo "<td $bgcolor title='$title'><center><a href=logs.php?cab=$w[cab]>$font";
    echo "$w3[i_anum]";
    echo "</td>";
    // Load my rating
    if ($showmyr>0) {
      $q2 = "SELECT *,hex(r_cab) as cab FROM cc_ur WHERE u_id=$us[u_id] AND r_level=$level_cust AND r_cab=x'$w[cab]'";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
      $n2 = mysql_numrows($r2);
      $w2 = mysql_fetch_assoc($r2);
      $font = "";
      if (($w2[r_r1] >= $w3[r1_avg]) || ($w3[u_id] == $us[u_id])) $font .= "<b>";
      if ($w3[u_id] == $us[u_id]) $font .= "<font color=brown>";
      if ($w2[r_total] == 0) {
        $st = "-";
        $title = "You have not played on this island yet. ";
      } elseif ($w2[r_total] > $rating_min_isle) {
        $st = round($w2[r_r1], $r_round);
        $title = "You spent ".gmdate("H:i:s", round($w2[r_avsec]*$w2[r_total]))." on this island. ";
      } else {
        $st = "";
        $title = "Less than ".($rating_min_isle+1)." questions answered ($w2[r_total]). Your rating is ".round($w2[r_r1], $r_round).". ";
      }
      echo "<td ";
      if (($w2[r_r1] >= $w3[r1_max]*$i_success) && ($w2[r_total] > $isle_king_min[0])) {
        echo "bgcolor=#ddffdd ";
        $title .= "You successfully achieved ".(round($i_success*100))."% of this island king rating (".round($w3[r1_max]*$i_success).").";
      } else {
        $title .= "You need to play more than $isle_king_min[0] questions and get ".(round($i_success*100))."% of this island king rating (".round($w3[r1_max]*$i_success).").";
      }
      echo "title='$title'><center><a href=graph.php?u_id=$w2[u_id]&level=$w2[r_level]&cab=$w2[cab]>$font$st</font></b></a> ";
      if (($w2[r_total]>0) && ($w2[r_total] <= $isle_king_min[0])) 
        echo "<img height=15 title='Player has to answer more than $isle_king_min[0] questions to be able to become king (currently $w2[r_total])' src=images/dummy.png>";
      echo "</td>";
    }
    echo "<td";
    echo "><center>";
    $font="";
    //if ($w3[u_id] == $us[u_id]) $font .= "<font color=brown>";
    if ($w3[r1_max]>0) echo "<a href=graph.php?u_id=$w3[u_id]&level=$level_cust&cab=$w3[cab]>$font".round($w3[r1_max], $r_round);
    if ($w3[u_name] == "") echo "-";
    echo "</td>";
    echo "<td>";
    echo "<a title='Adds ".round($w[kr])." to rank' href=stats.php?su_id=$w3[u_id]>";
    //if ($w3[u_id] == $us[u_id]) echo "<font color=brown>";
    echo "$w3[u_name]</a> ";
    if ($w3[u_name] == "") echo "<center>-";
    else echo show_crown($w3[r_total], $w3[u_id2], $w[i_unum]);
    echo "</td>";
    echo "<td";
    if ($w3[i_level]>0) echo " bgcolor='".$i_level_color[$w3[i_level]]."'";
    echo " align=left>";
    echo " <a href=prefs.php?ilevel=$level_cust&cab=$w[cab]><img align=top border=0 title='Click to move to this island' src=images/play.gif></a> ";
    echo "<a title='$w[i_cnum] composers\nAVG rating is $w[r1_avg]\nCreated $w[i_since]\nLast active $w[i_last]\n$w[i_name]' href=rating.php?level=$level_cust&cab=$w[cab]>";
    if (strcmp($w[cab], $us[cab]) == 0) echo "<font color=brown>";
    $i_cst2 = $w3[i_cst2];
    if (($w3[i_cnum] > 5) && ($w3[i_name] != "")) $i_cst2 = "[$w3[i_name], $w3[i_cnum] composers]";
    echo "$i_cst2</a>";
    if ($w[f_count]>0) echo " <img title='Has comments' height=16 border=0 align=top src=images/edit.png> ";
    echo " <a title='Click to find similar islands' href=isles.php?cab=$w[cab]><img height=18 border=0 align=top src=images/search.png></a> ";
    if ($w[i_sp] < $i_since_hours*60*60) echo " <img title='Created less than $i_since_hours hours ago.' height=10 src=images/new.gif>";
    /*
    if (in_array($uname, $admin_unames)) {
      if (strpos($sort, "i_level")===0) write_log("i_levels.txt", "$w3[i_level] $w3[i_cst2]");
      for ($iii=0; $iii<count($i_level_color); $iii++) {
        echo "<a target=_blank href=isles.php?setlevel=$iii&cab=$w[cab]>";
        if ($iii != $w[i_level]) echo "<font color=lightgray>";
        else echo "<font color=red>";
        echo "$iii</font></a> ";
      }
    }
    */
    echo "</td>";
    echo "<td";
    if ($w3[i_level]>0) echo " bgcolor='".$i_level_color[$w3[i_level]]."'";
    echo ">";
    if ($w[i_level]>0) echo "<b>$w[i_level]";
    echo "</tr>";
  }
  echo "</table></center>";
  //echo "<br>Please pay attention, that I will hide users with less than 30 answers from rating table soon.";
  echo "<br><a href=isles.php?u_id=$u_id&sort=$sort&showmyr=1>Show my rating</a>";
  echo "<br>Table includes only top $isles_max_count islands with kings. Your current island is highlited in red. Your ratings and your name are highlited in red when you are the king. Number of answers (ANS) is highlighted with green if there was activity last $i_last_hours hours.<br>";
  show_legend();
  stop_cache($suffix);
  include "footer.php";
?>
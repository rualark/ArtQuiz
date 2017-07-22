<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  
  if ($us[u_name] != "Rualark") die("Sorry, you do not have access here");
  
  start_time();
  
  /*
  echo "Updating tghist...<br>";
  update_tghist();
  stop_time();
  */

  protect_session();

  update_system("s_state", 2);
  //$debug=1;
  
  // Create c_name4
  $r = mysql_query2("SELECT * FROM cc_composers");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $sa = explode(" ", $w[c_name3]);
    $surname = $sa[count($sa)-1];
    //$r2 = mysql_query2("UPDATE cc_composers SET c_name4='$surname' WHERE c_id=$w[c_id]");
    echo mysql_report_error();
  }
  
  // Check dupliñates
  $r = mysql_query2("SELECT * FROM cc_composers");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $sa = explode(" ", $w[c_name3]);
    $surname = $sa[count($sa)-1];
    $r3 = mysql_query2("SELECT count(*) as cnt FROM cc_composers WHERE c_name4='$surname'");
    echo mysql_report_error();
    $w3[$i] = mysql_fetch_assoc($r3);
  }
  // Add initials
  $r = mysql_query2("SELECT * FROM cc_composers");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $sa = explode(" ", $w[c_name3]);
    $surname = $sa[count($sa)-1];
    $name = $surname;
    $initials = "";
    if ($w3[$i][cnt] > 1) {
      for ($x=0; $x<count($sa)-1; $x++) {
        $initials .= $sa[$x][0];
      }
      $initials .= " ";
    }
    //$r2 = mysql_query2("UPDATE cc_composers SET c_name4='$initials$name' WHERE c_id=$w[c_id]");
    echo mysql_report_error();
  }
  
  // Update users dates
  $r = mysql_query2("SELECT * FROM cc_users LEFT JOIN cc_qlog USING (u_id) WHERE u_since=0 GROUP BY u_id");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  echo "Detected $n users without u_since<br>";
  $cnt=0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query2("UPDATE cc_users SET u_since='$w[l_time]' WHERE u_id='$w[u_id]'");
    if ($w[l_time] == 0) $r2 = mysql_query2("UPDATE cc_users SET u_since='$w[u_last]' WHERE u_id='$w[u_id]'");
    echo mysql_report_error();
  }

  // Remove logs without users
  $r = mysql_query2("SELECT * FROM cc_qlog LEFT JOIN cc_users USING (u_id) WHERE u_name is NULL");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  echo "Detected $n logs without users<br>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //print_r($w);
    //$r2 = mysql_query2("DELETE FROM cc_qlog WHERE l_id=$w[l_id]");
    echo mysql_report_error();
  }

  // Create ur
  $r = mysql_query2("SELECT * FROM cc_users LEFT JOIN cc_ur USING (u_id) WHERE r_r1 is NULL");
  $n = mysql_numrows($r);
  echo "Detected $n users without ur<br>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    new_ur($w[u_id]);
  }
  
  stop_time();
  //die;
  echo "Parsing forum text...<br>";
  update_forum();
  stop_time();
  // Clear ratings
  $r = mysql_query2("UPDATE cc_ur SET 
    r_r1=0,
    r_right=0,
    r_total=0,
    r_rightp=0,
    r_avsec=0,
    r_avcent=0,
    r_avcent2=0
    ");
  echo mysql_report_error();
  echo "Updating qlog ratings...<br>";
  update_qlog_ratings();
  stop_time();
  echo "Updating ratings...<br>";
  update_ratings();
  stop_time();
  echo "Updating isles...<br>";
  $r = mysql_query2("SELECT *,hex(i_cab) as cab FROM cc_isles");
  $n = mysql_numrows($r);
  echo "Detected $n isles<br>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    update_isles($w[cab]);
  }
  stop_time();
  echo "Updating cstat...<br>";
  update_cstat();
  stop_time();
  echo "Updating cc_act...<br>";
  update_act();
  stop_time();
  echo "Updating ustat...<br>";
  update_ustat();
  stop_time();
  echo "Updating slopes...<br>";
  update_slope();
  stop_time();
  echo "Updating tstat...<br>";
  update_tstat();
  stop_time();
  echo "Updating timesheet...<br>";
  update_timesheet();
  stop_time();
  update_system("s_state", 1);
  
?>

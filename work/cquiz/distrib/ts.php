<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";

  start_time();
  secure_variable("su_id");
  
  $u_id = $us[u_id];
  if ($su_id>0) $u_id = $su_id;
  
  if ($su_id == -1) {
    echo "<b>Timesheet for all users";
    echo ":</b>";
    $cond = "";
  } else {
    $cond = "AND u_id='$u_id'";
    $r = mysql_query2("SELECT * FROM cc_users 
      WHERE cc_users.u_id='$u_id'");
    echo mysql_report_error();
    $ua = mysql_fetch_array($r);
    if (isset($email)) echo "$ua[u_email] ";
    echo "<b>Timesheet for $ua[u_name] (<a href=ts.php?su_id=-1>see all</a>):</b>";
  }

  echo "<center><table border=1 cellpadding=3>";
  echo "<tr>";
  echo "<th>Date</th>";
  echo "<th>Spent<br>hours</th>";
  echo "<th>Answers</th>";
  echo "<th>Correct</th>";
  echo "<th title='Average think time'>ATT</th>";
  if ($su_id == -1) echo "<th>Users</th>";
  echo "</tr>";

  if ($su_id==-1) {
    $q = "SELECT t_date, SUM(t_total) as t_total, SUM(t_correct) as t_correct, SUM(t_sec) as t_sec, COUNT(*) as unum FROM cc_timesheet GROUP BY t_date ORDER BY t_date DESC";
  } else {
    $q = "SELECT *
      FROM cc_timesheet
      WHERE 1=1 $cond
      ORDER BY t_date DESC";
  }
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_assoc($r);
    $ssa[$i] = $wa[$i][t_sec];
    $stotal += $wa[$i][t_total];
    $sok += $wa[$i][t_correct]/$wa[$i][t_total];
  } 
  $max_sec = max($ssa);
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    $date = $w[t_date];
    echo "<tr>";
    echo "<td><center>";
    //if (($olddate != "" ) && ($date != date('Y-m-d', strtotime($olddate." - 1 days")))) echo "<b>";
    echo $date;
    $color = make_color(255, 255, 255 - $w[t_sec]/$max_sec*255);
    echo "<td bgcolor=$color><center>";
    echo round($w[t_sec]/60/60, 1);
    echo "<td><center>";
    echo "$w[t_total]";
    $c = $w[t_correct]/$w[t_total]*55;
    $color = make_color(255-$c, 200+$c, 200);
    echo "<td bgcolor=$color><center>";
    echo round(100*$w[t_correct]/$w[t_total], 1)."%";
    echo "<td><center>";
    echo round($w[t_sec]/$w[t_total]);
    if ($su_id == -1) {
      echo "<td><center>";
      echo "$w[unum]";
    }
    $olddate = $date;
  }
  echo "<tr>";
  echo "<th>Total</th>";
  $sm = array_sum($ssa);
  echo "<th>";
  echo round($sm/60/60, $sm>36000?0:1)."</th>";
  echo "<th>$stotal</th>";
  echo "<th>".round(100*$sok/$n, 0)."%</th>";
  echo "<th>".round($sm/$stotal)."</th>";
  echo "</tr>";
  echo "</table>";
  echo "<p>Dates before a pause are bold";
  stop_time();
?>
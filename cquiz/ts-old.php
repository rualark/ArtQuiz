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
  echo "<th>Spent time</th>";
  echo "<th>Answers</th>";
  echo "<th>Correct</th>";
  echo "<th title='Average think time'>ATT</th>";
  if ($su_id == -1) echo "<th>Users</th>";
  echo "</tr>";

  $q = "SELECT 
    DATE(l_time) as dt, 
    sum(IF(l_sec<60*10, l_sec, 0)) as ssec,
    sum(l_ok) as sok,
    count(l_id) as cnt,
    count(distinct u_id) as did
    FROM cc_qlog
    WHERE 1=1 $cond
    GROUP BY DATE(l_time)
    ORDER BY l_id DESC";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_assoc($r);
    $ssa[$i] = $wa[$i][ssec];
    $scnt[$i] = $wa[$i][cnt];
    $sok[$i] = $wa[$i][sok]/$wa[$i][cnt];
  } 
  $max_sec = max($ssa);
  for ($i=0; $i<$n; $i++) {
    $w = $wa[$i];
    $date = $w[dt];
    echo "<tr>";
    echo "<td><center>";
    if (($olddate != "" ) && ($date != date('Y-m-d', strtotime($olddate." - 1 days")))) echo "<b>";
    echo $date;
    echo "</td>";
    $color = make_color(255, 255, 255 - $w[ssec]/$max_sec*255);
    echo "<td bgcolor=$color><center>";
    echo gmdate('H:i:s', $w[ssec]);
    echo "</td>";
    echo "<td><center>";
    echo "$w[cnt]";
    echo "</td>";
    $c = $w[sok]/$w[cnt]*55;
    $color = make_color(255-$c, 200+$c, 200);
    echo "<td bgcolor=$color><center>";
    echo round(100*$w[sok]/$w[cnt], 1)."%";
    echo "</td>";
    echo "<td>";
    echo round($w[ssec]/$w[cnt]);
    echo "</td>";
    if ($su_id == -1) {
      echo "<td>";
      echo "$w[did]";
      echo "</td>";
    }
    echo "</tr>";
    $olddate = $date;
  }
  echo "<tr>";
  echo "<th>Total</th>";
  $sm = array_sum($ssa);
  $years = floor($sm / (365*60*60*24));
  $months = floor(($sm - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($sm - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));  
  echo "<th>";
  if ($years>0) echo $years."y, ";
  if ($months>0) echo $months."m, ";
  if ($days>0) echo $days."d ";
  echo gmdate('H:i:s', $sm)."</th>";
  echo "<th>".array_sum($scnt)."</th>";
  echo "<th>".round(100*array_sum($sok)/count($sok), 1)."%</th>";
  echo "<th>".round($sm/array_sum($scnt))."</th>";
  echo "</tr>";
  echo "</table>";
  echo "<p>Dates before a pause are bold";
  stop_time();
?>
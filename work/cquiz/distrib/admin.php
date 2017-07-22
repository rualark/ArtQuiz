<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  start_time();

  if (!$i_am_admin) die("Sorry, this place is only for administrators");
  
  echo "<p align=right>";
  echo "<a href=time.php>Server time</a> | ";
  echo "<a href=ts.php?su_id=-1>Full timesheet</a> | ";
  echo "<a href=log/errors.log>Error log</a> | ";
  echo "<a href=log/reg-attempt.log>Reg attempts</a> | ";
  echo "<a href=log/cquiz-system.log>Rebuilds log</a> | ";
  echo "<a href=update_ratings.php>Rebuild DB</a> | ";
  echo "<p>";

  $r = mysql_query2("SELECT COUNT(*) as cnt FROM cc_bblocks WHERE b_state=0"); 
  echo mysql_report_error();
  $w = mysql_fetch_assoc($r);
  echo "<a target=_blank href=bblocks.php>";
  if ($w[cnt]>0) echo "<font color=red>";
  echo "Open bad block reports: $w[cnt]</font></a><br>";

  echo "<b>Last registered users:</b>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Joined";
  echo "<th>User";
  echo "<th>Email";
  echo "<th>Source";
  echo "<th>Games";
  $r = mysql_query2("SELECT u_id, u_name, u_total3, u_since, u_email, u_source FROM cc_users 
  ORDER BY u_since DESC LIMIT 100");
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[u_since]";
    echo "<td><center><a href=stats.php?su_id=$w[u_id]>$w[u_name]";
    echo "<td><center><a href=mailto:$w[u_email]>$w[u_email]";
    echo "<td><center>$w[u_source]";
    echo "<td><center>";
    if ($w[u_total3]>0) echo "$w[u_total3]";
  }
  echo "</table>";

  stop_time();
?>

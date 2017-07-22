<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  $max_logs = 300;
  
  start_time();
  $r = mysql_query("SELECT rq_log.i_id, rq_log.q_id, 
    i_name, l_mar, l_mqr, l_an, l_qn, rq_authors.a_id, a_id2, 
    l_time, l_correct, l_total, l_time, l_ip, l_session, a_name, q_rating, u_name
    FROM rq_log 
    LEFT JOIN rq_quotes USING (q_id) 
    LEFT JOIN rq_authors ON (rq_authors.a_id=rq_log.a_id)
    LEFT JOIN rq_isles ON (rq_log.i_id=rq_isles.i_id)
    LEFT JOIN cc_users ON (rq_log.u_id=cc_users.u_id)
    ORDER BY l_id DESC LIMIT $max_logs");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Time";
  echo "<th>User";
  echo "<th>IP";
  echo "<th>Session";
  echo "<th>Cor";
  echo "<th>Isle";
  echo "<th>Author";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[l_time]";
    echo "<td>$w[u_name]";
    echo "<td>$w[l_ip]";
    echo "<td>".substr($w[l_session], 0, 8);
    echo "<td>$w[l_total]";
    echo "<td><a href=qi.php?act=edit&i_id=$w[i_id]>$w[i_name]</a> <a href=qquiz.php?act=reset&an=$w[l_an]&qn=$w[l_qn]&mar=$w[l_mar]&mqr=$w[l_mqr]>$w[l_an]a/$w[l_qn]q</a>";
    echo "<td><a href=authors.php?a_id=$w[a_id]>";
    if ($w[l_correct] == 0) echo "<font color=red>";
    echo "$w[a_name]</font>";
    echo " <a href=works.php?q_id=$w[q_id]><img src=i/edit.png height=15></a>";
  }
  echo "</table>";
  stop_time();
  
?>
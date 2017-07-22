<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  $max_logs = 300;
  
  start_time();
  $r = mysql_query("SELECT l_page, nq_log.w_id, l_mr, cc_composers.c_id, c_id2, l_time, l_correct, l_total, l_time, l_ip, l_session, w_name, c_name4, w_rating
    FROM nq_log 
    LEFT JOIN nq_pdf USING (w_id) 
    LEFT JOIN cc_composers ON (cc_composers.c_id=nq_pdf.c_id)
    ORDER BY l_id DESC LIMIT $max_logs");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Time";
  echo "<th>IP";
  echo "<th>Session";
  echo "<th>Cor";
  echo "<th>Level";
  echo "<th>Composer";
  echo "<th>Work";
  echo "<th><a href='works.php?order=w_rating desc'>Rating";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[l_time]";
    echo "<td>$w[l_ip]";
    echo "<td>$w[l_session]";
    echo "<td>$w[l_total]";
    echo "<td>$w[l_mr]";
    echo "<td><a href=works.php?c_id=$w[c_id]>";
    if ($w[l_correct] == 0) echo "<font color=red>";
    echo "$w[c_name4]</font>";
    echo "<td><a href='works.php?w_id=$w[w_id]&p=$w[l_page]'>$w[w_name]";
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  stop_time();
  
?>
<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  $max_logs = 300;
  
  start_time();
  $r = mysql_query("SELECT ep_log.i_id, i_anames, l_line, ep_log.w_id, l_mr, ep_authors.a_id, a_id2, l_time, l_correct, l_total, l_time, l_ip, l_session, w_name, a_name, w_rating
    FROM ep_log 
    LEFT JOIN ep_works USING (w_id) 
    LEFT JOIN ep_authors ON (ep_authors.a_id=ep_works.a_id)
    LEFT JOIN ep_isles ON (ep_log.i_id=ep_isles.i_id)
    ORDER BY l_id DESC LIMIT $max_logs");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Время";
  echo "<th>IP";
  echo "<th>Сессия";
  echo "<th>ПР";
  echo "<th>Уровень";
  echo "<th>Автор";
  echo "<th>Произведение";
  echo "<th><a href='works.php?order=w_rating desc'>Рейтинг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[l_time]";
    echo "<td>$w[l_ip]";
    echo "<td>".substr($w[l_session], 0, 8);
    echo "<td>$w[l_total]";
    if ($w[i_id] > 0) {
      $i_name = str_replace("|", ", ", substr($w[i_anames], 1, -1));
      echo "<td><a href=pi.php>$i_name</a>";
    } else {
      echo "<td>$w[l_mr]";
    }
    echo "<td><a href=authors.php?a_id=$w[a_id]>";
    if ($w[l_correct] == 0) echo "<font color=red>";
    echo "$w[a_name]</font>";
    echo "<td><a href='works.php?w_id=$w[w_id]&line=$w[l_line]'>$w[w_name]";
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  stop_time();
  
?>
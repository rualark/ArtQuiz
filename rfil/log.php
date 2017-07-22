<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  $max_logs = 300;
  
  start_time();
  $r = mysql_query("SELECT rl_log.i_id, i_anames, l_line, rl_log.w_id, l_mr, rl_authors.a_id, a_id2, l_time, l_correct, l_total, l_time, l_ip, l_session, w_name, a_name, w_rating, w_years
    FROM rl_log 
    LEFT JOIN rl_works USING (w_id) 
    LEFT JOIN rl_authors ON (rl_authors.a_id=rl_works.a_id)
    LEFT JOIN rl_isles ON (rl_log.i_id=rl_isles.i_id)
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
  echo "<th><a href='works.php?order=w_years'>Год";
  echo "<th>Метки";
  echo "<th><a href='works.php?order=w_rating desc'>Рейтинг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>$w[l_time]";
    echo "<td>$w[l_ip]";
    echo "<td>$w[l_session]";
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
    echo "<td>$w[w_years]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
    }
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  stop_time();
  
?>
<?
  include "qlib.php";
  include "style.php";
  include "menu.php";  

  start_time();
  echo "<b>Composers descriptions:</b><p>";
  $q = "SELECT * FROM cc_composers WHERE ca_id>0 ORDER BY p_id,c_start";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Composer";
  echo "<th>Years";
  echo "<th>Group";
  echo "<th>Desc";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if ($p_name_old != $w[p_name]) {
      echo "<tr><td colspan=4><center><b>$w[p_name]";
      $p_name_old = $w[p_name];
    }
    echo "<tr>";
    echo "<td>$w[c_name]";
    echo "<td>$w[c_years]";
    echo "<td>$w[c_group]";
    echo "<td>$w[c_desc]";
  }
  echo "</table>";
  stop_time();
?>
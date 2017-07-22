<?
  include "qlib.php";
  $auth_not_necessary = 1;
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("sort");
  secure_variable("u_id");
  secure_variable("c_id");

  if ($c_id != 0) {
    die ("<script language=\"javascript\">location.replace(\"am.php?c_id=$c_id\");</script>"); 
  }
  start_time();
  
  if (isset($u_id)) load_user($u_id);
  $u_id = $us[u_id];

  count_stats();
  echo "<p align=right>Total $current_c_count composers, ".number_format($current_t_count, 0, '.', ' ')." tracks.<br>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href='composers.php?sort=c_name3'>Composer</th>";
  echo "<th><a href='composers.php?sort=c_start'>Years</th>";
  echo "<th><a href='composers.php?sort=c_country'>Country</th>";
  echo "<th>Tags</th>";
  echo "<th><a href='composers.php?sort=t_count desc'>Tracks</th>";
  echo "<th><a title='Lower rank shows more easily distinguishable composers' href='composers.php?sort=c_rating, c_start'>Rank</th>";
  echo "</tr>";

  $order = "c_start";
  if (isset($sort)) $order = $sort;
  $q = "SELECT * FROM cc_composers 
    WHERE c_folder != '' 
    ORDER BY $order
  ";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $bgcolor = comp_color($w);
    echo "<tr>";
    echo "<td><a href=".comp_link($w[c_id]).">";
    //if ($w[c_rating]<4) echo "<font color=black>";
    echo "$w[c_name3]";
    //if ($w[gid] != 0) echo " <font color=red>G</font>";
    //echo " <a target=_blank href='https://www.google.ru/search?q=$w[c_name3] caricature'>car</a>";
    echo "<td>$w[c_years]";
    echo "<td>$w[c_country]";
    echo "<td>$w[p_name]";
    if (($w[c_group] != ' ') && ($w[c_group] != $w[p_name])) echo ", $w[c_group]";
    echo "<td>$w[t_count]";
    echo "<td>$w[c_rating]";
  }
  echo "</table>";
  stop_time();
?>
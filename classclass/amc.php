<? include "../url.php"; ?>
<?
  if (isset($_GET['sort'])) $sort=$_GET['sort'];
  include "../analytics.php";
  include "../mysql.php";
  include "style.php";
  include "cclib.php";
  
  function show_mysql_error() {
    //echo "<font color=red>".mysql_error()."</font><br/>";
  }

  echo "<title>ClassClass - classical music classification</title>";
  echo "<center><a href=am.php>Genres</a> | <a href=amc.php>Composers</a> | <a href=ams.php>Search</a></center>";
  
  echo "<center><h2>Composers</h2></center>";
  if (!isset($sort)) $sort="c_start";
  if (isset($r)) $cond .= " AND c_rating<'$r' ";
  $r = mysql_query("SELECT * FROM cc_composers LEFT JOIN cc_periods USING (p_name) WHERE 1=1 $cond ORDER BY $sort");
  show_mysql_error();
  $n = mysql_numrows($r);
  $amg_id = 0;
  echo "<center><table border=0 cellpadding=3>";
  echo "<tr>";
  echo "<th><a href=amc.php?sort=c_start>Years</a></th>";
  echo "<th><a href=amc.php?sort=c_name3>Composer</a></th>";
  echo "<th><a href='amc.php?sort=c_works desc'>Works</a></th>";
  echo "<th><a href='amc.php?sort=c_country'>Country</a></th>";
  echo "<th><a href='amc.php?sort=c_rating,c_start'>Fame</a></th>";
  echo "<th><a href='amc.php?sort=p_id,c_start'>Period</a></th>";
  echo "</tr>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "<tr>";
    echo "<td>[$w[c_years]]</td>";
    echo "<td><a href=am.php?c_id=$w[c_id]>";
    echo "<font color=".composer_color($w[c_country]).">";
    echo "$w[c_name3]</font></a></td>";
    echo "<td>$w[c_works]</td>";
    echo "<td>$w[c_country]</td>";
    echo "<td>$w[c_rating]</td>";
    echo "<td>$w[p_name]</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
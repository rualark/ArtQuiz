<?
  include "../mysql.php";
  include "lib.php";
  include "style.php";

  start_time();

  $r = mysql_query("SELECT * FROM rq_atags LEFT JOIN rq_tdesc USING (t_name) 
    WHERE t_desc is NULL AND t_type>1 
    GROUP BY t_name
    ORDER BY t_name 
    ");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<a target=_blank href='https://www.google.com/search?q=$w[t_name]'>$w[t_name]</a><br> ";
  }
  stop_time();
?>
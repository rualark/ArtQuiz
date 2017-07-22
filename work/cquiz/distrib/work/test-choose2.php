<?
  include "mysql.php";

  $r = mysql_query("SELECT *,count(*) as cnt 
    FROM cc_qblocks 
    LEFT JOIN cc_composers USING (c_id) 
    GROUP BY cc_qblocks.c_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $cbc[$w[c_name3]] = $w[cnt];
  }

  $r = mysql_query("SELECT 
    *,
    cc_qblocks.b_id as bid
    FROM cc_qlog 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN cc_qblocks ON (cc_qlog.t_id=cc_qblocks.t_id AND cc_qlog.b_id=cc_qblocks.b_lid)
    LIMIT 50000");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $cbs[$w[c_name3]][$w[bid]] ++;
  }
  
  foreach ($cbc as $key => $val) {
    $cbp[$key] = count($cbs[$key])/$val;
  }
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Composer</th>";
  echo "<th>Answers</th>";
  echo "<th>Blocks</th>";
  echo "<th>Coverage</th>";
  foreach ($cbc as $key => $val) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>".array_sum($cbs[$key])."</td>";
    echo "<td>$val</td>";
    echo "<td>$cbp[$key]</td>";
  }
  echo "</table>";
  print_r($cbp);
  print_r($cbc);
  print_r($cbs);
  
  
?>
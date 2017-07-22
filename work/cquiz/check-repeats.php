<?
  include "../qlib.php";
  
  $start_date = "2015-03-26 09:38:56";
  $r=mysql_query("SELECT u_id, c_id FROM cc_qlog WHERE u_id=27 AND l_time>'$start_date' GROUP BY u_id, c_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "Combination u$w[u_id] c$w[c_id]<br>";
    $r2 = mysql_query("SELECT t_id, b_id, l_id, l_time, u_level, c_id FROM cc_qlog WHERE u_id=$w[u_id] AND c_id=$w[c_id] AND l_time>'$start_date' ORDER BY l_id");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $tbs = array();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $tb = $w2[t_id]*1000+$w2[b_id];
      $tbs[$x] = $tb;
      $cnt=0;
      echo "Log u$w[u_id] c$w[c_id] t$w2[t_id] b$w2[b_id] l$w2[l_id] $w2[l_time] level=$w2[u_level]<br>";
      if ($x>0) for ($y=$x-1; $y>=0; $y--) {
        $cnt++;
        if ($tb == $tbs[$y]) {
          echo "Detected duplicate u$w[u_id] t$w2[t_id] b$w2[b_id] l$w2[l_id] c$w2[c_id] $w2[l_time] level=$w2[u_level] depth=$cnt<br>";
        }
        if ($cnt >= $bhist_max) break;
      }
    }
  }
  
?>

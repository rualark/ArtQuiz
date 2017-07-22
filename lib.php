<?
  function secure_variable($st) {
    GLOBAL ${$st};
    if (isset($_GET[$st])) ${$st} = mysql_real_escape_string($_GET[$st]);
  }
  function start_time() {
    GLOBAL $starttime, $starttime2;
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    if ($starttime2 == 0) $starttime2 = $mtime;
    $starttime = $mtime; 
  }

  function stop_time($st="", $show=1) {
    GLOBAL $starttime, $starttime2, $us, $view_child;
    // Show run time
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    $endtime = $mtime;
    $totaltime = round($endtime - $starttime, 3);
    $totaltime2 = round($endtime - $starttime2, 3);
    $dif = round(($endtime - $starttime)*1000);
    if ($show>0) {
      echo "<p>The script ran ".$totaltime." seconds ";
      if ($totaltime2>$totaltime) echo "($totaltime2 total) ";
      echo "$st. "; 
    }
    // Set all subsequent views to child
    $view_child=1;
    // Restart timer
    start_time();
  }
  
?>
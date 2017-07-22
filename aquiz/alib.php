<?
  error_reporting(E_ERROR);
  include "../mysql.php";
  include "../url.php";
  
  $button_height=30;
  $mr_levels = array(
4 => 'Easy (10 artists, 2361 paintings)',
3 => 'Normal (53 artists, 8496 paintings)',
2 => 'Hard (139 artists, 19485 paintings)',
1 => 'Very hard (245 artists, 23886 paintings)',
0 => 'Insane (416 artists, 27035 paintings)',
  );
  
  function get_ip() {
    if (isset($_SERVER["HTTP_X_REMOTE_ADDR"])) return $_SERVER["HTTP_X_REMOTE_ADDR"];
    return $_SERVER[REMOTE_ADDR];
  }
  
  function secure_variable($st) {
    GLOBAL ${$st};
    if (isset($_GET[$st])) ${$st} = mysql_real_escape_string($_GET[$st]);
  }

  function secure_variable_post($st) {
    GLOBAL ${$st};
    if (isset($_POST[$st])) ${$st} = mysql_real_escape_string($_POST[$st]);
  }

  function rnd($x1, $x2) {
    return ($x2-$x1)*(mt_rand()/mt_getrandmax())+$x1;
  }
  
  function get_purl($a_id, $p_id) {
    GLOBAL $url_art;
    return "$url_art/$a_id/".str_pad($p_id, 4, '0', STR_PAD_LEFT).".jpg";
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
  
  function awiki($name) {
    $wsa = explode(", ", $name);
    $wiki = "";
    if (count($wsa)>1) $wiki = "$wsa[1] ";
    $wiki .= "$wsa[0]";
    return $wiki;
  }
  
?>
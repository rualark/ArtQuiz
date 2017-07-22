<?
  include "../mysql.php";
  include "../url.php";
  
  $button_height = 50;

  $mr_levels = array(40009 => 10, 39925 => 20, 39915 => 30, 39901 => 45, 30036 => 60, 30002 => 100, 20010 => 150, 8999 => 200, 5237 => 250, 3659 => 300, 2531 => 400, 1952 => 500, 1354 => 700, 910 => 1000, 318 => 2000, 1 => 3000);
  $jpeg_path = "jpeg";
  $jpeg_width = 900;
  
  function get_ip() {
    if (isset($_SERVER["HTTP_X_REMOTE_ADDR"])) return $_SERVER["HTTP_X_REMOTE_ADDR"];
    return $_SERVER[REMOTE_ADDR];
  }
  
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
      echo "<p>The script ran ".$totaltime." seconds";
      if ($totaltime2>$totaltime) echo " ($totaltime2 total) ";
      if ($st != "") echo " $st";
      echo ". "; 
    }
    // Set all subsequent views to child
    $view_child=1;
    // Restart timer
    start_time();
  }

  function listdir($dir='.') { 
      if (!is_dir($dir)) { 
          return false; 
      } 
      $files = array(); 
      listdiraux($dir, $files); 
      return $files; 
  } 

  function listdiraux($dir, &$files) { 
      $handle = opendir($dir); 
      while (($file = readdir($handle)) !== false) { 
          if ($file == '.' || $file == '..') { 
              continue; 
          } 
          $filepath = $dir == '.' ? $file : $dir . '/' . $file; 
          if (is_link($filepath)) 
              continue; 
          if (is_file($filepath)) 
              $files[] = $filepath; 
          else if (is_dir($filepath)) 
              listdiraux($filepath, $files); 
      } 
      closedir($handle); 
  } 
  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $last_lev = 100000;
    if (!is_array($arr)) return 0;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val, 1, 3, 3);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
?>
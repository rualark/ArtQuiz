<?
  $max_depth = 1;
  
  function dirToArray($dir, $filter, &$dar, $depth=0) { 
    GLOBAL $max_depth;
    if ($depth>$max_depth) return;
    $result = array(); 
    $cdir = scandir($dir); 
    foreach ($cdir as $key => $value) { 
      if (!in_array($value,array(".", ".."))) { 
        if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) { 
          $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value, $filter, $dar, $depth+1); 
        } else { 
          if (!preg_match($filter, $value)) continue;
          $result[] = $value; 
          $dar[] = $dir . DIRECTORY_SEPARATOR . $value; 
        } 
      } 
    } 
    return $result; 
  } 

  $da = dirToArray('c:\web\site\artquiz', '/^.*\.(php)$/i', $dar);
  for ($i=0; $i<count($dar); $i++) {
    $st = file_get_contents($dar[$i]);
    if (strpos($st, 'analytics.php') === false) {
      //echo "Not found in $dar[$i]<br>";
    }
    if (strpos($st, 'GoogleAnalyticsObject') !== false) {
      echo "Found in $dar[$i]<br>";
    }
  }
?>
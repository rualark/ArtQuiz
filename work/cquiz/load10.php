<?
  // Set composers ratings

  include "mysql.php";
  
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

  $path = "../music";
  $fl=listdir($path);
  if ($fl==0 || count($fl)<1) echo "Error reading dir<br>";
  //if (is_array($fl)) sort($fl);
  $dir1="";
  for ($i=0; $i<count($fl); $i++) {
    $st = substr($fl[$i], strlen($path)+1, 1000);
    // Check iconv
    $st2 = iconv("cp1251", "UTF-8//TRANSLIT", $st);
    if ($st != $st2) {
      $pos = 0;
      for ($x=0; $x<strlen($st); $x++) {
        $pos = $x;
        if ($st[$x] != $st2[$x]) break;
      }
      //$pos = floor($pos / 2)*2;
      $pos-=1;
      echo "<font color=red>Bad symbols at pos $pos in file ";
      echo substr($st, 0, $pos);
      echo "<u><b>*".substr($st, $pos, 1)."*</b></u>";
      echo substr($st, $pos+1, strlen($st));
      echo "</font><br>";
    }
    $st = substr($st, 0, strpos($st, "/"));
    if ($dir1 != $st) {
      $dir1 = $st;
      //echo $st."<br>";
      $q = "SELECT * FROM cc_composers WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'";
      $r = mysql_query($q);
      $n = mysql_numrows($r);
      if ($n != 1) echo "<font color=red>$n results for $st</font><br>";
      else {
        $w = mysql_fetch_array($r);
        //echo "Found tracks for $w[c_name3]<br>";
        //$r2 = mysql_query("UPDATE cc_composers SET c_r2 = 1 WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
        //$r2 = mysql_query("UPDATE cc_composers SET c_folder = '$st' WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
      }
    }
  }

  // Find composers without folders
  $q = "SELECT * FROM cc_composers WHERE c_folder='' ORDER BY c_rating,c_start";
  $r = mysql_query($q);
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo ($i+1).". R$w[c_rating] - $w[c_name3] [$w[c_years]]<br>";
  }
  
?>  
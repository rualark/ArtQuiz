<?
  // This is local file loader
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

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  $fl = listdir("pic-src");

  // load names
  $r = mysql_query("SELECT * FROM aq_artists");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    //$sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = strtolower(trim($name));
    $aid[$wa[a_name]] = $wa[a_id];
  }

  $x=0;
  $fh=fopen("copy-jpg.bat", "w");
  fputs($fh, "chcp 1251\r\n");
  for ($i=0; $i<count($fl); $i++) {
    $st = $fl[$i];
    //$st = iconv("windows-1251", "utf-8", $st);
    $st = str_replace("'", '`', $st);
    $st = str_replace("--", '-', $st);
    $st = str_replace("--", '-', $st);
    $st = str_replace("--", '-', $st);
    $st = str_replace("--", '-', $st);
    $st = str_replace('–', '-', $st);
    $name = str_replace('  ', ' ', $name);
    $name = str_replace('  ', ' ', $name);
    $name = str_replace('  ', ' ', $name);
    $sa = explode('/', $st);
    $name = $sa[count($sa)-1];
    $name_l = strtolower($name);
    if ((strpos($name_l, '.jp') == 0) && (strpos($name_l, '.gif') == 0)) continue;
    $name = str_ireplace(".jpg", '', $name);
    $name = str_ireplace(".jpeg", '', $name);
    $name = str_ireplace(".gif", '', $name);
    // Check biopic
    if (($name == "biopic") || ($name == "photo")) {
      echo "Found biopic ($name) in $st<br>";
      fputs($fh, "mkdir paintings\\$a_id\r\n");
      fputs($fh, "copy \"".str_replace('/', "\\", $fl[$i])."\" \"paintings\\$a_id\\photo.jpg\"\r\n");
      continue;
    }
    // process folder
    $a_name = $sa[1];
    $p_name = $name;
    // process a_name
    $a_name = trim($a_name);

    if ($a_name == '') continue;
    $a_names[$a_name]++;
    $x++;
    echo "$x. ";
    if ($a_name != '') echo "<font color=green>'$a_name'</font> ";
    else echo "<font color=red>NO ANAME!</font> ";
    echo "$p_name<br>";
    // add to db
    if ($aid[$a_name] > 0) {
      $a_id = $aid[$a_name];
      echo "AID: $aid[$a_name]<br>";
    } else {
      //mysql_query("INSERT INTO aq_artists VALUES('', '$a_name', -1, 0, 1, '', '', '', '', '', '', '', '', 0, 0, '')");
      $a_id = mysql_insert_id();
      $aid[$a_name] = $a_id;
      echo mysql_error();
    }
    $pids[$a_id]++;
    $p_id = $pids[$a_id];
    $p_id2 = str_pad("$p_id", 4, '0', STR_PAD_LEFT);
    //mysql_query("INSERT INTO aq_paintings VALUES($a_id, $p_id, '$p_id2', 0, 0, '$p_name')");
    echo mysql_error();
    //mysql_query("UPDATE aq_artists SET p_num='$p_id' WHERE a_id='$a_id'");
    echo mysql_error();
    //$st = iconv("windows-1251", "utf-8", $fl[$i]);
    fputs($fh, "mkdir paintings\\$a_id\r\n");
    fputs($fh, "copy \"".str_replace('/', "\\", $fl[$i])."\" \"paintings\\$a_id\\$p_id2.jpg\"\r\n");
  }
  fclose($fh);
  /*
  echo "<pre>";
  arsort($a_names);
  //$fh=fopen("src-anames.txt", "w");
  foreach ($a_names as $a_name => $val) {
    //$a_id = find_closest(mb_strtolower($a_name), $aname);
    $a_name = str_replace(',', '', $a_name);
    $a_name = str_replace('.', '', $a_name);
    $a_name = str_replace('  ', ' ', $a_name);
    $a_name = str_replace('  ', ' ', $a_name);
    $a_name = str_replace('  ', ' ', $a_name);
    $sa = explode(' ', $a_name);
    $r = mysql_query("SELECT * FROM aq_artists WHERE a_name LIKE '%$sa[0]%' AND a_name LIKE '%$sa[1]%' LIMIT 1");
    $w = mysql_fetch_assoc($r);
    echo " <a target=_blank href='https://www.google.ru/search?q=$a_name'>$a_name</a> - $val";
    echo " = $w[a_name] ";
    //fputs($fh, "$a_name-$w[a_name]\r\n");
    //echo " = $aname[$a_id] ($last_lev)";
    echo "<br>";
  }
  //fclose($fh);
  */
  
  /*
  for ($a=1; $a<119; $a++) {
    mkdir("paintings/$a");
    for ($i=1; $i<1000; $i++) {
      $fa = myfile("http://artchallenge.me/painters/$a/$i.jpg", 1);
      //echo $fa;
      if ($fa == 0) {
        mysql_query("INSERT INTO artists VALUES($a,'','',".($i-1).")");
        echo mysql_error();
        mysql_query("UPDATE artists SET p_num=".($i-1)." WHERE a_id=$a");
        echo mysql_error();
        break;
      }
      file_put_contents("../paintings/$a/".str_pad($i, 4, '0', STR_PAD_LEFT).".jpg", $fa);
      //if ($i>193) exit;
    }
  }
  */
?>
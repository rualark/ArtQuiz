<?
  // This is main loader
  include "mysql.php";
  
  $first_id=100000;
  
  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    print_r($return);
    curl_close($ch);
    return $return;
  }

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  function load_poems($url, $id=0) {
    GLOBAL $aname, $last_lev, $wname;
    $fa = myfile($url);
    $sf1 = "<A HREF=\"/works.php?G=$id&ID=";
    $fa = myfile($url);
    $started = 0;
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      //echo $st;
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strpos($st, $sf1)+10);
        $link = substr($link, 0, strpos($link, "\""));
        $w_name = trim(strip_tags($st));
        $a_name = trim(strip_tags(iconv("windows-1251", "utf-8", $fa[$i+1])));
        $sa = explode(" ", $a_name);
        $a_name = "$sa[0] ".$sa[1][0].$sa[1][1];
        $p_name = trim(strip_tags(iconv("windows-1251", "utf-8", $fa[$i+2])));
        //echo "$link - $w_name - $a_name - $p_name<br>";
        $i += 3;
        // load
        $a_id = find_closest($a_name, $aname);
        $good = 0;
        if ($last_lev<1) $good = 1;
        //if (($last_lev>1) && ($last_lev<10) && (mb_strlen($a_name)>=$last_lev*2)) $good = 1;
        if ($good == 1) {
          //echo "<b>$a_name - $aname[$a_id] - $last_lev</b><br>";
          $w_id = find_closest(mb_strtolower($w_name), $wname[$a_id]);
          $good = 0;
          if ($last_lev<1) $good = 1;
          if (($last_lev>0) && ($last_lev<10) && (mb_strlen($a_name)>$last_lev*2)) $good = 1;
          if ($good == 1) {
            echo "$a_name - $aname[$a_id] <font color=red><b>$w_name - ".$wname[$a_id][$w_id]." - $last_lev</b></font>";
            load_poem($a_id, $w_id, $p_name, $link);
          }
        }
      }
    }
  }
  
  function load_poem($a_id, $w_id, $p_name, $link) {
    $url = "http://gold.stihophone.ru/$link";
    $sf1 = "<A HREF=\"get.php?";
    $fa = myfile($url);
    $started = 0;
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strpos($st, $sf1)+9);
        $link = substr($link, 0, strpos($link, "\""));
        $r = mysql_query("INSERT INTO l_perf VALUES('', '$a_id', '$w_id', '$p_name')");
        echo mysql_error();
        $id = mysql_insert_id();
        echo " $id<br>";
        myfile("http://gold.stihophone.ru/$link", 0, "perf", "$id.mp3");
        //echo "$link<br>";
        return;
      }
    }
  }
  
  // load names
  $r = mysql_query("SELECT * FROM l_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    $name = "$sa[1] ".$sa[0][0].$sa[0][1];
    echo "$name<br>";
    $aname[$wa[a_id]] = trim($name);
  }
  // load names
  $r = mysql_query("SELECT * FROM l_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }

  load_poems("http://gold.stihophone.ru/works.php?G=1&P=1", 1);
  load_poems("http://gold.stihophone.ru/works.php?G=1&P=2", 1);
  load_poems("http://gold.stihophone.ru/works.php?G=1&P=3", 1);
  load_poems("http://gold.stihophone.ru/works.php?G=1&P=4", 1);
  load_poems("http://gold.stihophone.ru/works.php?G=1&P=5", 1);
  load_poems("http://gold.stihophone.ru/works.php?G=1&P=5", 1);

  load_poems("http://gold.stihophone.ru/works.php?G=13&P=1", 13);
  load_poems("http://gold.stihophone.ru/works.php?G=3&P=1", 3);
  load_poems("http://gold.stihophone.ru/works.php?G=3&P=2", 3);

  load_poems("http://gold.stihophone.ru/works.php?G=4&P=1", 4);
  load_poems("http://gold.stihophone.ru/works.php?G=4&P=2", 4);
  load_poems("http://gold.stihophone.ru/works.php?G=4&P=3", 4);
  load_poems("http://gold.stihophone.ru/works.php?G=4&P=4", 4);
  load_poems("http://gold.stihophone.ru/works.php?G=4&P=5", 4);
  load_poems("http://gold.stihophone.ru/works.php?G=4&P=6", 4);

  load_poems("http://gold.stihophone.ru/works.php?G=9&P=1", 9);
  load_poems("http://gold.stihophone.ru/works.php?G=10&P=1", 10);

?>
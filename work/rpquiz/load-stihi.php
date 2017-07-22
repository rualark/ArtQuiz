<?
  // This is main loader
  include "mysql.php";
  
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
    $data = file_get_contents($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $last_lev = 100000;
    if (!is_array($arr)) return 0;
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
  
  function load_poets($url) {
    GLOBAL $aname, $last_lev;
    $fa = myfile($url);
    $sf1 = "<li><a href=\"";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strlen($sf1));
        $link = substr($link, 0, strpos($link, "\""));
        $name = strip_tags($st);
        $sa = explode(" ", $name);
        if (count($sa) == 2) $name = "$sa[1] $sa[0]";
        $a_id = find_closest($name, $aname);
        if ($last_lev>5) $a_id = 0;
        //echo "<b>$name - <font color=red>$aname[$a_id]</font> - $link</b><br>";
        //mysql_query("UPDATE l_authors SET a_er3ed='$link' WHERE a_id='$a_id'");
        echo mysql_error();
        if ($a_id>0) load_poet($name, $link, $a_id);
        else {
          mysql_query("INSERT INTO l_authors VALUES('','$name','','','','','','','','','')");
        }
      }
    }
  }
  
  function load_poet($a_name, $link, $a_id) {
    GLOBAL $wname, $last_lev;
    $fa = myfile($link);
    $sf1 = "<li><a href=\"";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strlen($sf1));
        $link = substr($link, 0, strpos($link, "\""));
        $name = str_replace("'", "`", strip_tags($st));
        $w_id = find_closest(mb_strtolower($name), $wname[$a_id]);
        if ($last_lev>5) $w_id = 0;
        if ($w_id > 0) echo "$a_name <b>$name - <font color=red>".$wname[$a_id][$w_id]."</font> - $link</b><br>";
        if ($w_id == 0) load_poem($name, $link, $a_id, $w_id);
      }
    }
  }
  
  function load_poem($name, $link, $a_id, $w_id) {
    echo "$name - $link<br>";
    $sf1 = "<table border=\"0\">";
    $sf2 = "</td></tr></table></center>";
    $fa = myfile($link);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      if ((strpos($st, $sf1) !== false)) {
        $started = 1;
        $i += 1;
        continue;
      }
      if (($started>0)) {
        if (strpos($st, $sf2) !== false) {
          break;
        }
        $poem .= trim(str_replace("'", "`", strip_tags(html_entity_decode($st))))."\r\n";
      }
    }
    echo "<pre>$poem</pre>";
    mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','',-2001,0,0,'$poem','','$link')");
    echo mysql_error();
  }
  
  // load names
  $r = mysql_query("SELECT * FROM l_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    $name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
  }
  // load names
  $r = mysql_query("SELECT * FROM l_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    //$sf1 = mb_convert_encoding('&#x00bb; - &#x00ab;', 'UTF-8', 'HTML-ENTITIES');
    //echo $sf1;
    //if (strpos($name, $sf1)>0) $name = substr($name, strpos($name, $sf1)+5);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
    $wrat[$wa[w_id]] = $wa[w_rating];
  }

  load_poets("http://www.stihi-xix-xx-vekov.ru/spisok1.html");
?>

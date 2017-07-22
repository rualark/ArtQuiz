<?
  // This is main loader
  include "mysql.php";
  include "../lib.php";
  start_time();
  
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
    $sf1 = "<li><a href=\"http://rustih.ru/";
    $sf2 = "/?random";
    $sf3 = "<div class=ads-info>";
    foreach ($fa as $st) {
      if (strpos($st, $sf3) !== false) break;
      if (strpos($st, $sf1) === 0) {
        if (strpos($st, $sf2) !== false) continue;
        $link = substr($st, strpos($st, 'href="')+6);
        $link = substr($link, 0, strpos($link, "\""));
        $name = strip_tags($st);
        if (strpos($name, ":") !== false) $name = substr($name, 0, strpos($name, ":"));
        $name = trim($name);
        $a_id = find_closest($name, $aname);
        if ($last_lev>4) $a_id = 0;
        echo "<b>$name - ";
        if ($last_lev<=4) echo "<font color=red>";
        echo "$aname[$a_id]</font> - $link</b><br>";
        //mysql_query("UPDATE l_authors SET a_er3ed='$link' WHERE a_id='$a_id'");
        echo mysql_error();
        if ($a_id>0) {
          for ($x=1; $x<100; $x++) if (load_poet($name, $link."page/$x/", $a_id)>0) break;
        } else {
          mysql_query("INSERT INTO l_authors VALUES('','$name','','','','','','','','','')");
        }
      }
    }
  }
  
  function load_poet($a_name, $link, $a_id) {
    GLOBAL $wname, $last_lev;
    $fa = myfile($link);
    $sf1 = "<span class=\"entry-title hh2\"><a href=\"";
    $sf2 = "<div class=\"hhentry error404\">";
    $c = count($fa);
    if ($c <10) return 1;
    foreach ($fa as $st) {
      if (strpos($st, $sf2) !== false) return 1;
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strlen($sf1));
        $link = substr($link, 0, strpos($link, "\""));
        $name = trim(str_replace("'", "`", strip_tags(html_entity_decode($st))));
        if (strpos($name, "—")>0) $name = substr($name, strpos($name, "—")+3);
        $w_id = find_closest(mb_strtolower($name), $wname[$a_id]);
        if ($last_lev>5) $w_id = 0;
        //if ($w_id > 0) 
        echo "$a_name <b>$name - <font color=red>".$wname[$a_id][$w_id]."</font> - $link</b><br>";
        if ($w_id == 0) load_poem($name, $link, $a_id, $w_id);
      }
    }
  }
  
  function load_poem($name, $link, $a_id, $w_id) {
    echo "$name - $link<br>";
    $sf1 = "</div><p>";
    $sf2 = "<div id";
    $fa = myfile($link);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = $fa[$i];
      if ((strpos($st, $sf1) !== false)) {
        $started = 1;
        $st = substr($st, strpos($st, $sf1));
      }
      if (($started>0)) {
        if (strpos($st, $sf2) !== false) {
          break;
        }
        $poem .= str_replace("'", "`", strip_tags(str_replace("<p>", "\r\n", str_replace("\r", "\r\n", html_entity_decode(trim($st))))))."\r\n";
      }
    }
    $poem = trim($poem);
    echo "<pre>$poem</pre>";
    if (strlen($poem)>20) {
      mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','',-2002,0,0,'$poem','','$link')");
      echo mysql_error();
    } else echo "<font color=red>Warning wrong length!</font><br>";
  }
  
  // load names
  $r = mysql_query("SELECT * FROM l_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
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

  load_poets("http://rustih.ru/stixi-zarubezhnih-poetov-klassikov/");
  stop_time();
?>
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
  
  function load_poets($url, $lang) {
    GLOBAL $aname, $last_lev;
    $fa = myfile($url);
    $sf1 = '<a href="http://www.poeti.biz/stihi/';
    $sf2 = '<a href="';
    $sf3 = "/stihi/";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $fa2 = explode($sf2, $st);
        foreach ($fa2 as $st2) if (strpos($st2, $sf3) !== false) {
          $i++;
          $link = substr($st2, 0, strpos($st2, "\""));
          $name = substr($st2, strpos($st2, ">")+1);
          $name = substr($name, 0, strpos($name, "<"));
          $name = str_replace(",", "", $name);
          $name = str_replace(".", "", $name);
          $name = mb_trim($name);
          $sa = explode(" ", $name);
          if (count($sa) == 2) $name = "$sa[1] $sa[0]";
          if (count($sa) == 3) {
            if ($sa[0] == "По") $name = "$sa[2] $sa[1] $sa[0]";
            else $name = "$sa[1] $sa[2] $sa[0]";
          }
          if ($sa[0] == "Гете") continue;
          if ($sa[0] == "Верлен") continue;
          if ($sa[0] == "Рембо") continue;
          if ($sa[0] == "Барбье") continue;
          if ($sa[0] == "Шиллер") continue;
          if ($sa[0] == "Ленау") continue;
          if ($sa[0] == "Леопарди") continue;
          if ($sa[0] == "Гейне") continue;
          if ($sa[0] == "Мистраль") continue;
          if ($sa[0] == "Алигьери") continue;
          $a_id = find_closest($name, $aname);
          if ($last_lev>4) $a_id = 0;
          echo "<b>$name - ";
          if ($last_lev<=4) echo "<font color=red>";
          echo "$aname[$a_id]</font> - $link</b><br>";
          if ($a_id>0) {
            load_poet($name, $link, $a_id, $lang)>0;
          } else {
            //mysql_query("INSERT INTO l_authors VALUES('','$name','$lang','','','','','','','','')");
          }
        }
        break;
      }
    }
  }
  
  function load_poet($a_name, $link, $a_id, $lang) {
    GLOBAL $wname, $last_lev;
    $fa = myfile($link);
    $sf1 = "</b></a><br><br>";
    $c = count($fa);
    if ($c <10) return 1;
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strpos($st, "\"")+1);
        $link = substr($link, 0, strpos($link, "\""));
        $name = trim(str_replace("'", "`", strip_tags(html_entity_decode($st))));
        if (strpos($name, "—")>0) $name = substr($name, strpos($name, "—")+3);
        $w_id = find_closest(mb_strtolower($name), $wname[$a_id]);
        if ($last_lev>5) $w_id = 0;
        //if ($w_id > 0) 
        echo "$a_name <b>$name - <font color=red>".$wname[$a_id][$w_id]."</font> - $link</b><br>";
        if ($w_id == 0) load_poem($name, $link, $a_id, $w_id, $lang);
      }
    }
  }
  
  function load_poem($name, $link, $a_id, $w_id, $lang) {
    echo "$name - $link<br>";
    $sf1 = "<em><b></b></em></div><br>";
    $sf2 = "<div";
    $fa = myfile($link);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = $fa[$i];
      $st = iconv("windows-1251", "utf-8", $st);
      if ((strpos($st, $sf1) !== false)) {
        $started = 1;
        continue;
      }
      if (($started>0)) {
        if (strpos($st, $sf2) !== false) {
          break;
        }
        if (trim($st) != "") $poem .= str_replace("'", "`", strip_tags(str_replace("<p>", "\r\n", str_replace("\r\n", "\r\n", html_entity_decode($st)))));
      }
    }
    $poem = trim($poem);
    echo "<pre>$poem</pre>";
    if (strlen($poem)>20) {
      mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','',-1999,0,0,'$poem','$lang','$link')");
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

  //load_poets("http://www.poeti.biz/stihi/amerikanskie_poetj.html", "Английский");
  //load_poets("http://www.poeti.biz/stihi/frantsuzskie_poetj.html", "Французский");
  load_poets("http://www.poeti.biz/stihi/avstrijskie_poetj.html", "Немецкий");
  load_poets("http://www.poeti.biz/stihi/ispanskie_poetj.html", "Испанский");
  load_poets("http://www.poeti.biz/stihi/italyanskie_poetj.html", "Итальянский");
  load_poets("http://www.poeti.biz/stihi/nemetskie_poetj.html", "Немецкий");
  load_poets("http://www.poeti.biz/stihi/izrailskie_poetj.html", "Израильский");
  load_poets("http://www.poeti.biz/stihi/latinoamerikanskie_poetj.html", "Латино-американский");
  load_poets("http://www.poeti.biz/stihi/portugalskie_poetj.html", "Португальский");
  stop_time();
?>

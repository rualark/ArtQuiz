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
  
  function load_poems($url) {
    GLOBAL $aname, $wname, $last_lev, $wrat;
    $fa = myfile($url);
    $sf1 = "<div class='stat'>";
    $sf2 = "<a href='";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strpos($st, $sf2)+strlen($sf2));
        $link = substr($link, 0, strpos($link, "'"));
        $name = substr($st, strpos($st, "/'>")+3);
        $name = substr($name, 0, strpos($name, "<"));
        $name = substr($name, strpos($name, " ")+1);
        $name1 = substr($name, 0, strpos($name, "—")-1);
        $name2 = substr($name, strpos($name, "—")+4);
        $rat = substr($st, strpos($st, $sf1)+strlen($sf1)+5);
        $rat = substr($rat, 0, strpos($rat, "<"));
        $new_rat = round(($rat-34000)/265);
        // find
        $a_id = find_closest($name1, $aname);
        $alast_lev = $last_lev;
        $w_id = find_closest(mb_strtolower($name2), $wname[$a_id]);
        $wlast_lev = $last_lev;
        $good = 0;
        if ($last_lev<2) $good = 1;
        if (($last_lev>1) && ($last_lev<10) && (mb_strlen($name2)>$last_lev*2)) $good = 1;
        if (($good == 0) && (strpos($wname[$a_id][$w_id], mb_strtolower($name2)) !== false)) {
        }
        if ($good == 0) if ($last_lev>0) {
        }
        if ($good == 1) {
          if ($new_rat > $wrat[$w_id]) {
            mysql_query("UPDATE l_works SET w_rating='$new_rat' WHERE w_id='$w_id'");
            echo mysql_error();
          }
        } else {
          echo "$name1|<b>$name2</b>|$link|$rat|$aname[$a_id]|$alast_lev|<b>".$wname[$a_id][$w_id]."</b>|$wlast_lev|$wrat[$w_id]|$new_rat|<br>";
          load_poem($name2, $link, $a_id, $new_rat);
        }
      }
    }
  }

  function load_poem($name, $link, $a_id, $new_rat) {
    GLOBAL $first_id;
    $fa = myfile("http://slova.org.ru$link");
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      if ((strpos($st, "<pre>") !== false)) {
        $started = 1;
        continue;
      }
      if (($started>0)) {
        if (strpos($st, "<i>") !== false) {
          $year = strip_tags($st)." ".strip_tags(iconv("windows-1251", "utf-8", $fa[$i+1]));
          break;
        }
        if (strpos($st, "</pre>") !== false) {
          break;
        }
        $poem .= trim(str_replace("'", "`", strip_tags($st)))."\r\n";
      }
    }
    echo "<b>$name - $year - $new_rat</b><br>";
    echo "<pre>$poem</pre>";
    mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','$year','$new_rat',0,0,'$poem','Русский')");
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

  load_poems("http://slova.org.ru/top_poems.html");
?>
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
  
  function load_poems($url) {
    GLOBAL $aname, $wname, $last_lev, $wrat;
    $fa = myfile($url);
    $sf1 = "<a href='Poem.php?PoemId";
    $sf2 = "<a href='Poet.php?PoetId";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $fa2 = explode($sf1, $st);
        foreach ($fa2 as $st2) if ($st2[0] == '=') {
          $i++;
          $link = "http://www.eng-poetry.ru/Poem.php?PoemId".substr($st2, 0, strpos($st2, "'"));
          $w_name = substr($st2, strpos($st2, ">")+1);
          $w_name = substr($w_name, 0, strpos($w_name, "<"));
          $a_name = substr($st2, strpos($st2, $sf2));
          $a_name = substr($a_name, strpos($a_name, ">")+1);
          $a_name = substr($a_name, 0, strpos($a_name, "<"));
          $a_id = find_closest(mb_strtolower($a_name), $aname);
          $new_rat = 600-$i*5;
          if ($last_lev > 5) $a_id = 0;
          if ($a_id>0) {
            $w_id = find_closest(mb_strtolower($w_name), $wname[$a_id]);
            if ($last_lev > 5) $w_id = 0;
            if ($w_id > 0) {
              mysql_query("UPDATE l_works SET w_rating='$new_rat' WHERE w_id='$w_id'");
              echo mysql_error();
            } else {
              load_poem($w_name, $link, $a_id, $new_rat);
            }
          } else {
            //mysql_query("INSERT INTO l_authors VALUES('','$a_name','','','','','','','','','')");
          }
          echo "$new_rat - $a_name - <font color=red>$aname[$a_id]</font> - $w_name - <font color=green><b>".$wname[$a_id][$w_id]."</b></font> - $link<br>";
        }
      }
    }
  }

  function load_poem($name, $link, $a_id, $new_rat) {
    $fa = myfile($link);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      if ((strpos($st, "<pre>") !== false)) {
        if ($started > 0) break;
        $started = 1;
        $st = substr($st, strpos($st, "<pre>")+5);
      }
      if (($started>0)) {
        if (strpos($st, "</pre>") !== false) {
          break;
        }
        $poem .= trim(str_replace("'", "`", strip_tags($st)))."\r\n";
      }
    }
    echo "<b>$name - $new_rat</b><br>";
    //echo "<pre>$poem</pre>";
    mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','',-2001,0,0,'$poem','Английский','$link')");
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

  load_poems("http://www.eng-poetry.ru/PoemStat.php");
?>
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
  
  function load_poets($url) {
    GLOBAL $aname, $wname, $last_lev, $wrat;
    $fa = myfile($url);
    $sf1 = "href=\"http://ru.wikisource.org/wiki/";
    $sf2 = "<div class=\"separator\"";
    $sf3 = "href=\"http://ru.wikipedia.org/wiki/";
    $state = 0;
    foreach ($fa as $st) {
      if ((strpos($st, $sf2) !== false)) {
        $state = 0;
        echo "<pre>$text</pre>";
        if ($a_id>0) {
          mysql_query("UPDATE l_authors SET a_cite='$text' WHERE a_id='$a_id'");
          echo mysql_error();
        }
        $text = "";
      }
      if ($state == 1) {
        $text .= trim(str_replace("'", "`", strip_tags(html_entity_decode($st))))."\r\n";
      }
      if ((strpos($st, $sf1) !== false) || (strpos($st, $sf3) !== false)) {
        $name = strip_tags($st);
        $i++;
        $state = 1;
        // find
        $name = str_replace("&nbsp;", "", $name);
        $name = str_replace("-Марлинский", "", $name);
        $sa = explode(" ", $name);
        $name = trim("$sa[0] $sa[2]");
        $a_id = find_closest($name, $aname);
        if ($last_lev>3) $a_id = 0;
        echo "<b>$name</b> - $aname[$a_id]<br>";
      }
    }
    echo "$i<br>";
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

  load_poets("http://russianbookchamber.blogspot.ru/p/russkie-pisateli-klassiki.html");
?>
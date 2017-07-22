<?
  // This is main loader
  include "mysql.php";
  include "../lib.php";
  start_time();
  
  $country_map = array(
    "древнегреческий" => "GRC",
    "Римская" => "ROM",
    "Российская" => "RUS",
    "Россия" => "RUS",
    "русский" => "RUS",
    "СССР" => "RUS",
    "Америка" => "USA",
    "США" => "USA",
    "американский" => "USA",
    "Польша" => "POL",
    "польский" => "POL",
    "Япония" => "JAP",
    "Великобритания" => "ENG",
    "Англия" => "ENG",
    "Франция" => "FRA",
    "Италия" => "ITA",
    "итальянский" => "ITA",
    "Испания" => "SPA",
    "испанский" => "SPA",
    "Португалия" => "POR",
    "португальский" => "POR",
    "Франция" => "FRA",
    "французский" => "FRA",
    "Германская" => "DEU",
    "немецкий" => "DEU",
    "Чили" => "CHL",
  );
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    //$ln = iconv("utf-8", "windows-1251//translit", $ln);
    $ln = str2url($ln);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("'", "", $ln);
    $ln = str_replace("\\", "", $ln);
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
  
  function load_poets() {
    GLOBAL $country_map;
    $sf1 = 'title="Категория:Родившиеся в ';
    $sf2 = '<th style="">Язык произведений:</th>';
    $sf3 = '<span class="country-name">';
    $sf4 = '<th style="">Гражданство:</th>';
    $sf5 = '<th style="">Страна:</th>';
    $sf6 = 'src="//upload.wikimedia.org/wikipedia/';
    $r = mysql_query("SELECT * FROM l_authors ORDER BY a_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Автор";
    echo "<th>Год";
    echo "<th>Год";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    echo "<th>";
    for ($x=0; $x<$n; $x++) {
      $wa = mysql_fetch_assoc($r);
      $year1 = 0;
      $year2 = 0;
      $lang = "";
      $country = "";
      $country2 = "";
      $country3 = "";
      $img = "";
      $url = str_replace(" ", "%20", "http://ru.wikipedia.org/w/index.php?search=".trim($wa[a_name]));
      if ($wa[a_wiki] != "") $url = $wa[a_wiki];
      //$url = str_replace(" ", "%20", "https://ru.wikipedia.org/wiki/$a_name");
      $fa = myfile($url);
      $c = count($fa);
      for ($i=0; $i<$c; $i++) {
        $st = $fa[$i];
        preg_match("'title=\"Категория:Родившиеся в ([^<]*) году\"'si", $st, $match);
        if ($match) {
          $year1 = $match[1];
        }
        preg_match("'title=\"Категория:Умершие в ([^<]*) году\"'si", $st, $match);
        if ($match) {
          $year2 = $match[1];
        }
        if (strpos($st, $sf2) !== false) {
          $lang = str_replace(" язык", "", strip_tags($fa[$i+2]));
          if (strpos($lang, "[")>0) $lang = substr($lang, 0, strpos($lang, "["));
        }
        if ((strpos($st, $sf4) !== false) || (strpos($st, $sf5) !== false)) {
          $country2 = html_entity_decode(strip_tags(str_replace("→", " ", str_replace("&#160;", " ", $fa[$i+2]))));
          if (strpos($country2, "[")>0) $country2 = substr($country2, 0, strpos($country2, "["));
          if (strpos($country2, "[")>0) $country2 = substr($country2, 0, strpos($country2, "["));
          $country2 = preg_replace('/\s+/', ' ', $country2);
          $country2 = implode(' ', array_unique(explode(" ", $country2)));
        }
        if (strpos($st, $sf3) !== false) {
          $country = html_entity_decode(strip_tags(str_replace("&#160;", " ", $st)));
          if (strpos($country, "[")>0) $country = substr($country, 0, strpos($country, "["));
          $country = preg_replace('/\s+/', ' ', $country);
          $country = implode(' ', array_unique(explode(" ", $country)));
        }
        if ((strpos($st, $sf6) !== false) && ($img == "")) {
          $bad = 0;
          if (strpos($st, "Broom") !== false) $bad = 1;
          if (strpos($st, "Wikisource-logo") !== false) $bad = 1;
          if (strpos($st, "Flag_of") !== false) $bad = 1;
          if (strpos($st, "Disambig") !== false) $bad = 1;
          if (strpos($st, "_star_") !== false) $bad = 1;
          if (strpos($st, "_Star_") !== false) $bad = 1;
          if (strpos($st, "Images.png") !== false) $bad = 1;
          if (strpos($st, "Image-silk.png") !== false) $bad = 1;
          if (strpos($st, "Wiki_letter_") !== false) $bad = 1;
          if (strpos($st, "-Tools") !== false) $bad = 1;
          if (strpos($st, "Help-") !== false) $bad = 1;
          if (strpos($st, "Searchtool") !== false) $bad = 1;
          if (strpos($st, "-Aquote") !== false) $bad = 1;
          if (strpos($st, "Ambox_") !== false) $bad = 1;
          if (strpos($st, "Medal_") !== false) $bad = 1;
          if (strpos($st, "_recycle") !== false) $bad = 1;
          if (strpos($st, "Question_") !== false) $bad = 1;
          if (strpos($st, "Prize-") !== false) $bad = 1;
          if (strpos($st, "Medal-") !== false) $bad = 1;
          if (strpos($st, "Hero_") !== false) $bad = 1;
          if (strpos($st, "Orden_") !== false) $bad = 1;
          if (strpos($st, "Zaslugi") !== false) $bad = 1;
          if (strpos($st, "Orderredbannerlabor_rib") !== false) $bad = 1;
          if (strpos($st, "Quill_") !== false) $bad = 1;
          if (strpos($st, "Sound-") !== false) $bad = 1;
          if (strpos($st, "Order") !== false) $bad = 1;
          if (strpos($st, "_lenin_") !== false) $bad = 1;
          if (strpos($st, "Ribbon_") !== false) $bad = 1;
          if (strpos($st, "Ribbon.") !== false) $bad = 1;
          if (strpos($st, "-logo.") !== false) $bad = 1;
          if (strpos($st, "_rib") !== false) $bad = 1;
          if (strpos($st, "Userinfo.") !== false) $bad = 1;
          if (strpos($st, "3_stars") !== false) $bad = 1;
          if (strpos($st, "-Wiki") !== false) $bad = 1;
          if (strpos($st, "Crystal_Clear_") !== false) $bad = 1;
          if (strpos($st, "-Ribbon") !== false) $bad = 1;
          if (strpos($st, "/40px-") !== false) $bad = 1;
          if (strpos($st, "/10px-") !== false) $bad = 1;
          if (strpos($st, "_signatur") !== false) $bad = 1;
          if (strpos($st, "65_years") !== false) $bad = 1;
          if (strpos($st, "-kmix") !== false) $bad = 1;
          if (strpos($st, "_flag_") !== false) $bad = 1;
          if (strpos($st, "%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D0%B8_%D0%B3%D0%BE%D0%B4%D0%B0") !== false) $bad = 1;
          if (strpos($st, "%D0%93%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_%D0%BF%D1") !== false) $bad = 1;
          if ($bad == 0) {
            $img = substr($st, strpos($st, $sf6));
            $img = substr($img, strpos($img, '"')+1);
            $img = substr($img, 0, strpos($img, '"'));
          }
        }
        /*
        if (strpos($st, $sf1) !== false) {
          $year1 = substr($st, strpos($st, $sf1)+strlen($sf1));
          $year1 = substr($year1, 0, strpos($year1, " "));
        }
        */
      }
      $lang = mb_strtolower($lang);
      if ($lang == "" ) $lang = $wa[a_lang];
      if ($country == "" ) $country = $wa[a_country];
      $ca = explode(" ", $lang);
      for ($i=count($ca); $i--; $i>=0) if ($country_map[trim($ca[$i])] != "") $country3 = $country_map[trim($ca[$i])];
      $ca = explode(" ", $country);
      for ($i=count($ca); $i--; $i>=0) if ($country_map[trim($ca[$i])] != "") $country3 = $country_map[trim($ca[$i])];
      $ca = explode(" ", $country2);
      for ($i=count($ca); $i--; $i>=0) if ($country_map[trim($ca[$i])] != "") $country3 = $country_map[trim($ca[$i])];
      echo "<tr>";
      echo "<td><a target=_blank href='$url'>$wa[a_name]</a>";
      echo " <a target=_blank href='https://www.google.ru/search?q=$wa[a_name]'><img valign=top height=18 src=../i/google.png></a> ";
      echo "<td>$wa[a_year1]";
      echo "<td><b>$year1-$year2";
      echo "<td><img height=100 src='$img'>";
      echo "<td>$country3";
      echo "<td>$lang";
      echo "<td>$country";
      echo "<td>$country2";
      if ($wa[a_country] == "") {
        //mysql_query("UPDATE l_authors SET a_country='$country3' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      }
      if ($wa[a_year1] == 0) {
        //mysql_query("UPDATE l_authors SET a_year1='$year1' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      }
      if ($wa[a_year2] == 0) {
        mysql_query("UPDATE l_authors SET a_year2='$year2' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      }
      if (!file_exists("apic/".$wa[a_id].".jpg")) {
        myfile("http:$img", 0, "apic2", "$wa[a_id].jpg");
      }
    }
    echo "</table>";
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
  $r = mysql_query("SELECT * FROM l_authors ORDER BY a_name");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
    $awiki[$wa[a_id]] = $wa[a_wiki];
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

  load_poets();

  stop_time();
?>

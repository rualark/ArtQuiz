<?
  // This is main loader
  include "../mysql.php";
  
  $a_id = $_GET[a_id];
  $bb_id = $_GET[bb_id];
  $a_briefly = $_GET[a_briefly];
  
  if ($a_id != 0) {
    $r = mysql_query("UPDATE rl_authors SET bb_id='$bb_id' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Set bb_id to $bb_id for $a_id";
    exit;
  }

  if ($a_briefly != '') {
    $r = mysql_query("UPDATE rl_authors SET bb_id='$bb_id' WHERE a_briefly='$a_briefly'");
    echo mysql_error();
    echo "Set bb_id to $bb_id for $a_briefly";
    exit;
  }

  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    //print_r($return);
    curl_close($ch);
    return $return;
  }

  function myfile2($name, $load=1, $path="cache", $fname="") {
    $ln = $name;
    $ln = str_replace("http://", "", $ln);
    $ln = str_replace("https://", "", $ln);
    $ln = str_replace("%20", " ", $ln);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file_get_contents($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return $data;
    else return 1;
  }

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
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

  function load_poems($url, $dr=0) {
    $fa = myfile($url);
    $sf[0] = "href='name_info.php?id=";
    //$sf[1] = "<span itemprop=\"name\">";
    $sf[2] = "href='item_info.php?id=";
    $sf[3] = "<span itemprop='name'>";
    $sf[4] = "</TD><TD class='vline-year'>";
    $sf[5] = "</TD><TD class='vline'><b>";
    $sf[6] = "</TD><TD class='vline'>";
    $sf[7] = "</TD><TD>";
    $kname[0] = 'a_id';
    //$kname[1] = 'a_name';
    $kname[2] = 'w_id';
    $kname[3] = 'w_name';
    $kname[4] = 'w_years';
    $kname[5] = 'w_rating';
    $kname[6] = 'w_rating2';
    $kname[7] = 'w_votes';
    $sfe[0] = "'";
    $sfe[1] = "<";
    $sfe[2] = "'";
    $sfe[3] = "<";
    $sfe[4] = "<";
    $sfe[5] = "<";
    $sfe[6] = "<";
    $sfe[7] = "<";
    foreach ($fa as $st) {
      if (strpos($st, $sf[0])>0) {
        $st1 = $st;
        $q = "";
        $a_id = 0;
        $no_author = 0;
        foreach ($sf as $key => $sf0) {
          $p1 = strpos($st1, $sf0);
          $st1 = substr($st1, $p1+strlen($sf0));
          $value = substr($st1, 0, strpos($st1, $sfe[$key]));
          if ($key == 5) $value -= $dr;
          if ($key == 0) {
            $r3 = mysql_query("SElECT * FROM rl_authors WHERE a_id='$value'");
            $n3 = mysql_numrows($r3);
            if ($n3 == 0) $no_author = 1;
          }
          echo "$key = '$value'<br>";
          if ($q != "" ) $q .= ",";
          $q .= "'$value'";
        }
        if ($no_author == 0) {
          $q2 = "INSERT INTO l_works VALUES($q, '', '')";
          echo $q2;
          //mysql_query($q2);
          echo mysql_error();
        }
      }
    }
  }
  
  function load_poets($url) {
    GLOBAL $aname, $aname2, $last_lev;
    $fa = myfile($url);
    $sf[0] = "href='name_info.php?id=";
    $sf[1] = "<span itemprop='name'>";
    $sf[2] = "</TD><TD class='vline'>";
    $sf[3] = "</TD><TD>";
    $kname[0] = 'a_id';
    $kname[1] = 'a_name';
    $kname[2] = 'a_rating';
    $kname[3] = 'a_works';
    $sfe[0] = "'";
    $sfe[1] = "<";
    $sfe[2] = "<";
    $sfe[3] = "<";
    foreach ($fa as $st) {
      if (strpos($st, $sf[1])>0) {
        $st1 = $st;
        $q = "";
        foreach ($sf as $key => $sf0) {
          $p1 = strpos($st1, $sf0);
          $st1 = substr($st1, $p1+strlen($sf0));
          $value = substr($st1, 0, strpos($st1, $sfe[$key]));
          if ($key == 0) $bb_id=$value;
          if ($key == 1) $a_name=$value;
          if ($key == 2) $a_rating=$value;
          //echo "$key = '$value'<br>";
          if ($q != "" ) $q .= ",";
          $q .= "'$value'";
        }
        $sa = explode(' ', $a_name);
        $a_name2 = mb_substr($a_name, 0, 1).' '.$sa[count($sa)-1];
        // Try to load bb_id
        $r = mysql_query("SELECT a_id FROM rl_authors WHERE bb_id='$bb_id'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $a_id=$w[a_id];
        $last_lev=0;
        // Find levenshtein
        if ($a_id == 0) {
          $a_id = find_closest($a_name2, $aname2);
          if ($last_lev>0) echo "<b>";
        }
        echo "$aname2[$a_id] - <a href='http://www.100bestbooks.ru/name_info.php?id=$bb_id' target=_blank>$a_name2</a> - $aname[$a_id] - <a href='https://briefly.ru/search/?q=$a_name' target=_blank>$a_name</a> - $bb_id - $a_rating";
        if ($last_lev>0) {
          echo "</b> <a target=_blank href='load-100bestbooks.php?a_id=$a_id&bb_id=$bb_id'>Apply</a>";
          echo "</b> <a onclick='r=prompt(\"a_briefly:\", \"\"); window.open(\"load-100bestbooks.php?bb_id=$bb_id&a_briefly=\"+r); return false' href=# target=_blank>a_briefly</a>";
          //echo " <a target=_blank href='load-100bestbooks.php?a_id=$a_id&b_name=$aname[$a_id]'>Rename</a>";
          //mysql_query("INSERT IGNORE INTO rl_authors(a_name, a_name2, bb_id, bb_rating) VALUES('$a_name','$a_name2','$bb_id','$a_rating')");
          echo mysql_error();
          $r = mysql_query("SELECT a_id FROM rl_authors WHERE a_name='$a_name'");
          echo mysql_error();
          $w=mysql_fetch_assoc($r);
          $a_id=$w[a_id];
        } else {
          //$r = mysql_query("UPDATE rl_authors SET bb_id='$bb_id', bb_rating='$a_rating' WHERE a_id='$a_id'");
          echo mysql_error();
        }
        echo "<br>";
        load_poet($a_id, $bb_id, $a_name, $a_name2);
      }
    }
    //exit;
  }
  
  function load_poem($a_id, $w_id, $bba_id, $bbw_id) {
    $url = "http://www.100bestbooks.ru/item_info.php?name_id=$bba_id&id=$bbw_id";
    $st = myfile2($url);
    //echo "$url<br>";
    echo "Loading $a_id $w_id $bba_id $bbw_id<br>";
    if (preg_match_all("`<a href='index.php\?tag_id=(.*?)'>(.*?)</a>`", $st, $match) > 0) {
      for ($x=0; $x<count($match[1]); $x++) {
        $t_id = $match[1][$x];
        $tag = html_entity_decode($match[2][$x]);
        //echo "$t_id - $tag<br>";
        //mysql_query("INSERT IGNORE INTO rl_wtags(w_id, t_name, bb_Id) VALUES('$w_id','$tag','$t_id')");
        echo mysql_error();
      }
    }
    if (preg_match('`<td class="bookinfo-col-head">Язык оригинала:</td>(.*?)<td class="bookinfo-col-text">(.*?)</td>`s', $st, $match) === 1) {
      $match[2] = mysql_real_escape_string(trim(strip_tags($match[2])));
      //echo "Lang: $match[2]<br>";
      //$r = mysql_query("UPDATE rl_works SET w_lang='$match[2]' WHERE w_id='$w_id'");
      echo mysql_error();
    }
    $txt2 = '';
    $ftn = 0;
    for ($i=1; $i<1000; $i++) {
      //echo "$bbw_id<br>";
      $url = "http://www.100bestbooks.ru/read_book.php?item_id=$bbw_id&page=$i";
      $st = myfile2($url);
      $txt = '';
      if (preg_match('`<td class="bookinfo-book-text" itemprop="text">(.*?)</td>`s', $st, $match) === 1) {
        $txt = $match[1];
        if (strpos($txt, '<div id=ftn1>') !== false) {
          echo "Found footnote<br>";
          $ftn = 1;
          $txt = substr($txt, 0, strpos($txt, '<div id=ftn1>'));
        }
        elseif (strpos($txt, 'ПРИМЕЧАНИЯ') !== false) {
          echo "Found <a target=_blank href='http://alch.strangled.net/artquiz/rlit/works.php?w_id=$w_id'>footnote2</a><br>";
          $ftn = 1;
          $txt = substr($txt, 0, strpos($txt, '<div id=ftn1>'));
        }
        elseif (strpos($txt, 'Примечания') !== false) {
          echo "Found <a target=_blank href='http://alch.strangled.net/artquiz/rlit/works.php?w_id=$w_id'>footnote3</a><br>";
          $ftn = 1;
          $txt = substr($txt, 0, strpos($txt, '<div id=ftn1>'));
        }
        elseif (strpos($txt, 'Список примечаний') !== false) {
          echo "Found footnote4<br>";
          $ftn = 1;
          $txt = substr($txt, 0, strpos($txt, '<div id=ftn1>'));
        }
        $txt = str_replace("\r", ' ', $txt);
        $txt = str_replace("\n", ' ', $txt);
        $txt = str_replace('<p>', "\r\n\r\n", $txt);
        $txt = str_replace('<pre>', "\r\n\r\n", $txt);
        $txt = preg_replace('`<p (.*?)>`', "\r\n\r\n", $txt);
        $txt = str_replace('<p >', "\r\n\r\n", $txt);
        $txt = str_replace('<br>', "\r\n\r\n", $txt);
        $txt = str_replace('<h1>', "\r\n\r\n", $txt);
        $txt = str_replace('<h2>', "\r\n\r\n", $txt);
        $txt = str_replace('<h3>', "\r\n\r\n", $txt);
        $txt = str_replace('<br/>', "\r\n", $txt);
        $txt = trim(html_entity_decode($txt));
        $txt = strip_tags($txt);
        $txt = str_replace("\r\n\r\n\r\n\r\n", "\r\n\r\n", $txt);
        $txt2 .= $txt;
        if ($ftn>0) break;
        //echo "/$txt/";
      }
      if ($txt == '') break;
    }
    $len = strlen($txt2);
    $r = mysql_query("UPDATE rl_works SET t_len='$len' WHERE w_id='$w_id'");
    echo mysql_error();
    if ($len > 0) {
      if (!file_exists("works/$a_id")) mkdir("works/$a_id");
      file_put_contents("works/$a_id/$w_id.txt", $txt2);
    }
    //$enc = gzencode($txt2);
    //if (!file_exists("cworks/$a_id")) mkdir("cworks/$a_id");
    //file_put_contents("cworks/$a_id/$w_id.gz", $enc);
    //exit;
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
  
  function load_poet($a_id, $bba_id, $a_name, $a_name2) {
    $url = "http://www.100bestbooks.ru/name_info.php?id=$bba_id";
    $sf1 = "";
    $st = myfile2($url);
    
    if (preg_match("`<a itemprop='image' href='pictures/autors/(.*?)'>`", $st, $img) === 1) {
      if (!file_exists("apic/$a_id.jpg")) {
        //echo "!!! PIC<br>";
        //myfile("http://www.100bestbooks.ru/pictures/autors/$img[1]", 0, "apic", "$a_id.jpg");
      }
    }
    if (preg_match('`<h1 itemprop="name">(.*?)</h1>`', $st, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
    }
    if (preg_match('`<td class="bookinfo-col-head">Язык произведений:</td>(.*?)<td class="bookinfo-col-text">(.*?)</td>`s', $st, $match) === 1) {
      $match[2] = mysql_real_escape_string($match[2]);
      //echo "Lang: $match[2]<br>";
      //$r = mysql_query("UPDATE rl_authors SET a_lang='$match[2]' WHERE a_id='$a_id'");
      echo mysql_error();
      $sa = explode(',', $match[2]);
      $lang = $sa[0];
      if (strpos($lang, 'Русск') !== false) $country='RUS';
      if (strpos($lang, 'Француз') !== false) $country='FRE';
      if (strpos($lang, 'Немецк') !== false) $country='GER';
      if (strpos($lang, 'Англий') !== false) $country='BRI';
      if (strpos($lang, 'Японск') !== false) $country='JAP';
      if (strpos($lang, 'Китайск') !== false) $country='CHN';
      if (strpos($lang, 'Индийск') !== false) $country='IND';
      if (strpos($lang, 'Бенгаль') !== false) $country='IND';
      if (strpos($lang, 'Армянск') !== false) $country='ARM';
      if (strpos($lang, 'Бельгийск') !== false) $country='BEL';
      if (strpos($lang, 'Грузинск') !== false) $country='GEO';
      if (strpos($lang, 'Датская') !== false) $country='DNK';
      if (strpos($lang, 'Турецк') !== false) $country='TUR';
      if (strpos($lang, 'Древнегречес') !== false) $country='GRC';
      if (strpos($lang, 'Гречес') !== false) $country='GRC';
      if (strpos($lang, 'Древнеримск') !== false) $country='ROM';
      if (strpos($lang, 'Еврейск') !== false) $country='ISR';
      if (strpos($lang, 'Ирландск') !== false) $country='IRL';
      if (strpos($lang, 'Испанск') !== false) $country='SPA';
      if (strpos($lang, 'Италья') !== false) $country='ITA';
      if (strpos($lang, 'Персидск') !== false) $country='PER';
      if (strpos($lang, 'Бразил') !== false) $country='BRA';
      if (strpos($lang, 'Гватемал') !== false) $country='GTM';
      if (strpos($lang, 'Аргентин') !== false) $country='ARG';
      if (strpos($lang, 'Колумби') !== false) $country='COL';
      if (strpos($lang, 'Исланд') !== false) $country='ISL';
      if (strpos($lang, 'Прочая вост') !== false) $country='KOR';
      if (strpos($lang, 'Чили') !== false) $country='CHL';
      if (strpos($lang, 'Кубинс') !== false) $country='CUB';
      if (strpos($lang, 'США') !== false) $country='USA';
      if (strpos($lang, 'Канад') !== false) $country='CAN';
      if (strpos($lang, 'Норвеж') !== false) $country='NOR';
      if (strpos($lang, 'Нидерлан') !== false) $country='NLD';
      if (strpos($lang, 'Польск') !== false) $country='POL';
      if (strpos($lang, 'Латинск') !== false) $country='LAT';
      if (strpos($lang, 'Болгарск') !== false) $country='BGR';
      if (strpos($lang, 'Венгерск') !== false) $country='HUN';
      if (strpos($lang, 'Португальск') !== false) $country='POR';
      if (strpos($lang, 'Украинск') !== false) $country='UKR';
      if (strpos($lang, 'Финск') !== false) $country='FIN';
      if (strpos($lang, 'Чешск') !== false) $country='CZE';
      if (strpos($lang, 'Шведск') !== false) $country='SWE';
      if (strpos($lang, 'Швейцар') !== false) $country='CHE';
      if (strpos($lang, 'Югослав') !== false) $country='YSL';
      //$r = mysql_query("UPDATE rl_authors SET a_country='$country' WHERE a_id='$a_id' AND a_country=''");
      echo mysql_error();
    }
    if (preg_match('`<td class="bookinfo-col-text" itemprop="alternateName">(.*?)</td>`', $st, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
      $a_name = $match[1];
      //$r = mysql_query("UPDATE rl_authors SET a_name3='$match[1]' WHERE a_id='$a_id' AND a_name3=''");
      echo mysql_error();
    }
    if (preg_match('`<p itemprop="description">(.*?)</p>`', $st, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
      //$r = mysql_query("UPDATE rl_authors SET a_desc='$match[1]' WHERE a_id='$a_id' AND a_desc=''");
      echo mysql_error();
    }
    
    if (preg_match_all("`<a href='index.php\?tag_id=(.*?)'>(.*?)</a>`", $st, $match) > 0) {
      for ($x=0; $x<count($match[1]); $x++) {
        $t_id = $match[1][$x];
        $tag = html_entity_decode($match[2][$x]);
        //echo "$t_id - $tag<br>";
        //mysql_query("INSERT IGNORE INTO rl_atags(a_id, t_name, bb_Id) VALUES('$a_id','$tag','$t_id')");
        echo mysql_error();
      }
    }
    $sa = explode('&id=', $st);
    //if (preg_match_all("`\\&id=(.*?)\" itemprop=\"url\"(.*?)<span itemprop=\"name\">(.*?)</span>(.*?)<span itemprop='datePublished'>(.*?)</span>(.*?)Место в списке:&nbsp;(.*?)</span>(.*?)Баллы:&nbsp;(.*?)</span>(.*?)Средний балл:&nbsp;(.*?)</span></span>`", $st, $match) > 0) {
    for ($x=1; $x<count($sa); $x++) {
      //echo "$sa[$x]";
      $bbw_id = mysql_real_escape_string(substr($sa[$x], 0, strpos($sa[$x], '"')));
      preg_match("`<span itemprop=\"name\">(.*?)</span>`", $sa[$x], $match);
      $w_name = mysql_real_escape_string($match[1]);
      preg_match("`<span itemprop='datePublished'>(.*?)</span>`", $sa[$x], $match);
      $w_years = mysql_real_escape_string($match[1]);
      preg_match("`Место в списке:&nbsp;(.*?)</span>`", $sa[$x], $match);
      $w_rank = mysql_real_escape_string($match[1]);
      if (preg_match("`Место в списке кандидатов:&nbsp;(.*?)</span>`", $sa[$x], $match) > 0) {
        $w_rank = 1000+mysql_real_escape_string($match[1]);
      }
      preg_match("`Баллы:&nbsp;(.*?)</span>`", $sa[$x], $match);
      $w_rating = mysql_real_escape_string($match[1]);
      preg_match("`<span itemprop='ratingValue'>(.*?)</span>`", $sa[$x], $match);
      $w_rating2 = mysql_real_escape_string($match[1]);
      //echo "$bb_id - $w_name | y$w_years | r$w_rank | r$w_rating | r$w_rating2<br>";
      //mysql_query("INSERT IGNORE INTO rl_works(a_id, w_name, w_rank, w_rating, w_rating2, bb_wid)
        //VALUES('$a_id','$w_name','$w_rank','$w_rating', '$w_rating2','$bbw_id')");
      $r = mysql_query("SELECT * FROM rl_works WHERE a_id='$a_id' AND w_name='$w_name'");
      echo mysql_error();
      $w=mysql_fetch_assoc($r);
      $w_id=$w[w_id];
      if ($w_id == 0) {
        echo "Zero w_id for $w_name - $a_id<br>";
        echo "$bb_id - $w_name | y$w_years | r$w_rank | r$w_rating | r$w_rating2<br>";
        //mysql_query("INSERT IGNORE INTO rl_works(a_id, w_name, w_rank, w_rating, w_rating2, bb_wid)
          //VALUES('$a_id','$w_name','$w_rank','$w_rating', '$w_rating2','$bbw_id')");
        $r = mysql_query("SELECT * FROM rl_works WHERE a_id='$a_id' AND w_name='$w_name'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $w_id=$w[w_id];
      }
      //$r = mysql_query("UPDATE rl_works SET w_years='$w_years' WHERE w_id='$w_id'");
      echo mysql_error();
      load_poem($a_id, $w_id, $bba_id, $bbw_id);
      echo mysql_error();
    }
    
    //exit;
  }
  
  // load names
  $r = mysql_query("SELECT * FROM rl_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(' ', $name);
    $name2 = mb_substr($name, 0, 1).' '.$sa[count($sa)-1];
    $aname[$wa[a_id]] = trim($name);
    $aname2[$wa[a_id]] = trim($name2);
  }
  // load names
  //$r = mysql_query("SELECT * FROM rl_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }

  load_poets("http://www.100bestbooks.ru/names.php?npage=1");
  load_poets("http://www.100bestbooks.ru/names.php?npage=2");
  load_poets("http://www.100bestbooks.ru/names.php?npage=3");
  load_poets("http://www.100bestbooks.ru/names.php?npage=4");
  load_poets("http://www.100bestbooks.ru/names.php?npage=5");
  exit;
  
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=1");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=2");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=3");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=4");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=5");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=6");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=7");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=8");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=9");
  load_poems("http://www.100bestbooks.ru/index.php?main_list=1&page=10");
  
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=1", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=2", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=3", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=4", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=5", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=6", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=7", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=8", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=9", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=10", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=11", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=12", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=13", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=14", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=15", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=16", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=17", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=18", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=19", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=20", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=21", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=22", 1000);
  load_poems("http://www.100bestbooks.ru/index.php?main_list=0&page=23", 1000);
  
  $r = mysql_query("SELECT * FROM rl_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //load_poem($w[w_id]);
  }
?>
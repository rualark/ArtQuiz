<?
  // This is main loader
  include "../mysql.php";
  
  $first_id=100000;
  
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

  function myfile($name, $load=1, $path="cache", $fname="") {
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
            $r3 = mysql_query("SElECT * FROM ep_authors WHERE a_id='$value'");
            $n3 = mysql_numrows($r3);
            if ($n3 == 0) $no_author = 1;
          }
          echo "$key = '$value'<br>";
          if ($q != "" ) $q .= ",";
          $q .= "'$value'";
        }
        if ($no_author == 0) {
          $q2 = "INSERT INTO ep_works VALUES($q, '', '')";
          echo $q2;
          //mysql_query($q2);
          echo mysql_error();
        }
      }
    }
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
    GLOBAL $aname, $last_lev;
    $st = myfile($url);
    $st = iconv("windows-1251", "utf-8", $st);
    $sf1 = "<div id=content-box";
    $sf2 = "</div></div></div>";
    $sf3 = ' class=p>';
    $st2 = substr($st, strpos($st, $sf1));
    $st2 = substr($st2, 0, strpos($st2, $sf2));
    $sa = explode('<a href="/', $st2);
    for ($x=1; $x<count($sa); $x++) {
      $st3 = $sa[$x];
      //echo "$st3<br>";
      if (strpos($st3, '<img src') !== false) continue;
      $i++;
      $rat = 9;
      if (strpos($st3, $sf3) !== false) $rat = 8;
      $link = substr($st3, 0, strpos($st3, '"'));
      if ($link[strlen($link)-1] == '/') $link = substr($link, 0, strlen($link)-1);
      $name = substr($st3, strpos($st3, '>')+1);
      $name = substr($name, 0, strpos($name, '<'));
      if (strpos($link, 'surnames') !== false) {
        load_surname($name, $link, $rat);
      } else {
        $q = "INSERT IGNORE INTO rl_authors(a_name2, a_briefly, a_rating) VALUES('$name','$link','$rat')";
        echo "$st3 - $q<br>";
        //mysql_query($q);
        echo mysql_error();
        $r = mysql_query("SELECT * FROM rl_authors WHERE a_name2='$name'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $a_id=$w[a_id];
        echo "<a href='https://briefly.ru/$link' target=_blank>$link</a> - <a href='http://www.100bestbooks.ru/name_info.php?id=$w[bb_id]' target=_blank>$name</a> - $rat - $a_id<br>";
        //load_poet($name, $link, $a_id, $rat);
      }
      //exit;
    }
    //echo $i;
  }
  
  function load_surname($surname, $link, $rat) {
    $url = "https://briefly.ru/$link/";
    //echo "<a href='$url'>$link</a><br>";
    $st = myfile($url);
    $st = iconv("windows-1251", "utf-8", $st);
    if (preg_match_all('`<h4><a href="/(.*?)</a></h4>`', $st, $match) > 0) {
      for ($x=0; $x<count($match[1]); $x++) {
        $st2 = $match[1][$x];
        //echo $match[1][$x]."<br>";
        $link = substr($st2, 0, strpos($st2, '/'));
        $name = substr($st2, strpos($st2, '>')+1);
        $name2 = mb_substr($name, 0, 1)." $surname";
        //mysql_query("INSERT IGNORE INTO rl_authors(a_name, a_name2, a_briefly, a_rating) VALUES('$name','$name2','$link','$rat')");
        echo mysql_error();
        $r = mysql_query("SELECT * FROM rl_authors WHERE a_name='$name'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $a_id=$w[a_id];
        echo "<a href='https://briefly.ru/$link' target=_blank>$link</a> - <a href='http://www.100bestbooks.ru/name_info.php?id=$w[bb_id]' target=_blank>$name</a> - $name2 - $rat - $a_id<br>";
        load_poet($name, $link, $a_id, $rat);
      }
      //exit;
    }
  }
    
  function load_poet($a_name2, $link, $a_id, $rat) {
    GLOBAL $wname, $last_lev;
    $url = "https://briefly.ru/$link/";
    //echo "<a href='$url'>$link</a><br>";
    $st = myfile($url);
    $st = iconv("windows-1251", "utf-8", $st);
    
    if (preg_match('`<h2>(.*?)</h2>`', $st, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
      $a_name = $match[1];
      //$r = mysql_query("UPDATE rl_authors SET a_name='$match[1]' WHERE a_id='$a_id'");
      echo mysql_error();
    }
    if (preg_match('`<div class=photo><span><img src="(.*?)"`', $st, $img) === 1) {
      //echo "$img[1]<br>";
      //myfile("https://briefly.ru$img[1]", 0, "apic", "$a_id.jpg");
    }
    if (preg_match('`<noindex><a href="(.*?)"`', $st, $match) === 1) {
      //echo "$match[1]<br>";
      $st2 = myfile($match[1]);
      $len = strlen($st2);
      $match[1] = mysql_real_escape_string($match[1]);
      //$r = mysql_query("UPDATE rl_authors SET a_wiki='$match[1]', w_size='$len' WHERE a_id='$a_id'");
      echo mysql_error();
    }
    if (preg_match('`<span class=years>(.*?)</span>`', $st, $match) === 1) {
      //echo "$match[1]<br>";
      $match[1] = str_replace("&#8722;", "-", $match[1]);
      $match[1] = str_replace("&#8211;", "-", $match[1]);
      $match[1] = str_replace("&#8201;", " ", $match[1]);
      $sa=explode("-", str_replace('род. ', '', $match[1]));
      $match[1] = mysql_real_escape_string($match[1]);
      if (strpos($match[1], 'до н. э.') !== false) {
        $sa[0] = -$sa[0];
        $sa[1] = -$sa[1];
      }
      //$r = mysql_query("UPDATE rl_authors SET a_years='$match[1]', a_year1='$sa[0]', a_year2='$sa[1]' WHERE a_id='$a_id'");
      echo mysql_error();
    }
    if (preg_match('`<div class=culture><a href="/cultures/(.*?)/">(.*?)</a>`', $st, $match) === 1) {
      //echo "$match[1] $match[2]<br>";
      $match[1] = mysql_real_escape_string($match[1]);
      $match[2] = mysql_real_escape_string($match[2]);
      if (strpos($match[1], 'russian') !== false) $country='RUS';
      if (strpos($match[1], 'french') !== false) $country='FRE';
      if (strpos($match[1], 'german') !== false) $country='GER';
      if (strpos($match[1], 'english') !== false) $country='BRI';
      if (strpos($match[1], 'japanese') !== false) $country='JAP';
      if (strpos($match[1], 'chinese') !== false) $country='CHN';
      if (strpos($match[1], 'australian') !== false) $country='AUS';
      if (strpos($match[1], 'indian') !== false) $country='IND';
      if (strpos($match[0], 'Армянск') !== false) $country='ARM';
      if (strpos($match[0], 'Бельгийск') !== false) $country='BEL';
      if (strpos($match[0], 'Грузинск') !== false) $country='GEO';
      if (strpos($match[0], 'Датская') !== false) $country='DNK';
      if (strpos($match[0], 'Турецк') !== false) $country='TUR';
      if (strpos($match[0], 'Древнегречес') !== false) $country='GRC';
      if (strpos($match[0], 'Гречес') !== false) $country='GRC';
      if (strpos($match[0], 'Древнеримск') !== false) $country='ROM';
      if (strpos($match[0], 'Еврейск') !== false) $country='ISR';
      if (strpos($match[0], 'Ирландск') !== false) $country='IRL';
      if (strpos($match[0], 'Испанск') !== false) $country='SPA';
      if (strpos($match[0], 'Италья') !== false) $country='ITA';
      if (strpos($match[0], 'Персидск') !== false) $country='PER';
      if (strpos($match[0], 'Бразил') !== false) $country='BRA';
      if (strpos($match[0], 'Гватемал') !== false) $country='GTM';
      if (strpos($match[0], 'Аргентин') !== false) $country='ARG';
      if (strpos($match[0], 'Колумби') !== false) $country='COL';
      if (strpos($match[0], 'Исланд') !== false) $country='ISL';
      if (strpos($match[0], 'Прочая вост') !== false) $country='KOR';
      if (strpos($match[0], 'Чили') !== false) $country='CHL';
      if (strpos($match[0], 'Кубинс') !== false) $country='CUB';
      if (strpos($match[0], 'США') !== false) $country='USA';
      if (strpos($match[0], 'Канад') !== false) $country='CAN';
      if (strpos($match[0], 'Норвеж') !== false) $country='NOR';
      if (strpos($match[0], 'Нидерлан') !== false) $country='NLD';
      if (strpos($match[0], 'Польская') !== false) $country='POL';
      if (strpos($match[0], 'Португальская') !== false) $country='POR';
      if (strpos($match[0], 'Украинская') !== false) $country='UKR';
      if (strpos($match[0], 'Финская') !== false) $country='FIN';
      if (strpos($match[0], 'Чешск') !== false) $country='CZE';
      if (strpos($match[0], 'Шведск') !== false) $country='SWE';
      if (strpos($match[0], 'Швейцар') !== false) $country='CHE';
      if (strpos($match[0], 'Югослав') !== false) $country='YSL';
      //$r = mysql_query("UPDATE rl_authors SET a_group='$match[2]', a_group2='$match[1]', a_country='$country' WHERE a_id='$a_id'");
      echo mysql_error();
    }
    if (strpos($st, '<div class=works>') !== false) {
      $st2 = substr($st, strpos($st, '<div class=works>')+strlen('<div class=works>'));
      $sa = explode("<h3>", $st2);
      for ($x=1; $x<count($sa); $x++) {
        $st3 = $sa[$x];
        $link = substr($st3, strpos($st3, '"')+2);
        $link = substr($link, 0, strpos($link, '"')-1);
        $name = substr($st3, strpos($st3, '>')+1);
        $name = substr($name, 0, strpos($name, '<'));
        //echo "$link - $name<br>";
        load_poem($a_id, $link, $name, '', 9);
      }
      //exit;
    } else {
      $st2 = substr($st, strpos($st, '<ul class=works>'));
      $st2 = substr($st2, 0, strpos($st2, '<div id=wanted-promo>'));
      $sa = explode("<li", $st2);
      for ($x=1; $x<count($sa); $x++) {
        $st3 = $sa[$x];
        $rat = 9;
        if (strpos($st3, ' class=p>') !== false) $rat=8;
        if (preg_match('`<span class=year>(.*?)</span>`', $st3, $year) === 1) {
          //echo "$year[1]<br>";
        }
        if (preg_match('`<a href="/(.*?)/">(.*?)</a>`s', $st3, $m) === 1) {
          $img = '';
          if (preg_match('`src="/(.*?)"`s', $m[2], $m2) === 1) {
            $img = $m2[1];
            //echo "Image: $img<br>";
          }
          $m[2] = strip_tags($m[2]);
          //echo "$m[1] - $m[2] - $img<br>";
          load_poem($a_id, $m[1], $m[2], $img, $rat);
        }
      }
    }
  }
  
  function load_poem($a_id, $w_link, $w_name, $img, $rat) {
    GLOBAL $wname, $last_lev;
    if (isset($wname[$a_id])) {
      $w_name = trim(str_replace("&#160;", " ", $w_name));
      $w_name2 = mb_strtolower($w_name);
      $w_id = find_closest($w_name2, $wname[$a_id]);
      // Check if manually linked
      $r = mysql_query("SELECT * FROM rl_works WHERE w_id='$w_id'");
      echo mysql_error();
      $w=mysql_fetch_assoc($r);
      //echo "$w_id $w[br_id] != $w_link<br>";
      if ($w[br_id] == $w_link) $last_lev = 0;
      if ($last_lev>0) echo "<b>";
      if ($last_lev>7) echo "<font color=red>";
      echo "$w_name2 - ".$wname[$a_id][$w_id]." - $last_lev</b></font>";
      if ($last_lev>0) echo " <a target=_blank href='load-briefly.php?w_id=$w_id&br_id=$w_link'>Apply</a>";
      echo "<br>";
      if ($last_lev == 0) {
        //$r = mysql_query("UPDATE rl_works SET br_id='$w_link' WHERE w_id='$w_id'");
        echo mysql_error();
        //$r = mysql_query("UPDATE rl_works SET w_rank='$rat' WHERE w_id='$w_id' AND w_rank=0");
        echo mysql_error();
        if ($img != '') {
          //myfile("https://briefly.ru/$img", 0, "wpic", "$w_id.jpg");
          //$r = mysql_query("UPDATE rl_works SET w_img=1 WHERE w_id='$w_id'");
          echo mysql_error();
        }
      } else {
        //mysql_query("INSERT IGNORE INTO rl_works(a_id, w_name, br_id)
          //VALUES('$a_id','$w_name','$w_link')");
        //$w_id=mysql_insert_id();
        //echo "$w_id<br>";
      }
    } else {
      //mysql_query("INSERT IGNORE INTO rl_works(a_id, w_name, br_id)
        //VALUES('$a_id','$w_name','$w_link')");
      //$w_id=mysql_insert_id();
      //echo "$w_id<br>";
    }
    // Load text
    $st = myfile("https://briefly.ru/$w_link/");
    $st = iconv("windows-1251", "utf-8", $st);
    echo "Loading $w_link<br>";
    if (strpos($st, '<div class=img>') !== false) {
      if (preg_match('`<img src="/static(.*?)"`s', $st, $img2) === 1) {
        $img2 = "/static$img2[1]";
        //echo "!!! Image: $img2 - $img<br>";
        //myfile("https://briefly.ru/$img2", 0, "wpic", "$w_id.jpg");
        //$r = mysql_query("UPDATE rl_works SET w_img=1 WHERE w_id='$w_id'");
        echo mysql_error();
      }
    }
    if (preg_match('`<div class=published>(.*?)</div>`s', $st, $m) === 1) {
      $m[1] = trim($m[1]);
      //$r = mysql_query("UPDATE rl_works SET w_years='$m[1]' WHERE w_id='$w_id' AND w_years=''");
      echo mysql_error();
    }
    $len = 0;
    $found = 0;
    if (preg_match('`<div class=entry-content>(.*?)<div class=source>`s', $st, $m) === 1) $found = 1;
    elseif (preg_match('`<div class=entry-content>(.*?)<span class=teller-space>`s', $st, $m) === 1) $found = 1;
    elseif (preg_match('`<div class=entry-content>(.*?)<div id=rate-social>`s', $st, $m) === 1) $found = 1;
    if ($found) {
      $txt = $m[1];
      $txt = preg_replace('`<p id=audiobook>(.*?)</noindex><br><br>`', '', $txt);
      $txt = preg_replace('`<noindex>(.*?)</noindex>`', '', $txt);
      //$txt = str_replace('&#160;', ' ', $txt);
      $txt = str_replace('<p>', "\r\n\r\n", $txt);
      $txt = str_replace('<h1>', "\r\n\r\n", $txt);
      $txt = str_replace('<h2>', "\r\n\r\n", $txt);
      $txt = str_replace('<h3>', "\r\n\r\n", $txt);
      $txt = str_replace('Благодаря рекламе Брифли бесплатен', "", $txt);
      $txt = str_replace('<blockquote class=featured>', "\r\n\r\n\"", $txt);
      $txt = str_replace('</blockquote>', "\"", $txt);
      $txt = str_replace('<br/>', "\n", $txt);
      $txt = strip_tags($txt);
      $txt = trim(html_entity_decode($txt));
      $len = strlen($txt);
      //$r = mysql_query("UPDATE rl_works SET b_len='$len' WHERE w_id='$w_id'");
      echo mysql_error();
      if ($len>0) {
        if (!file_exists("brief/$a_id")) mkdir("brief/$a_id");
        file_put_contents("brief/$a_id/$w_id.txt", $txt);
      }
    }
    if ($len == 0) echo "!!! Failed text load for <a target=_blank href='https://briefly.ru/$w_link/'>$w_id</a><br>";
    if (preg_match('`<a href="/narrators/(.*?)/">(.*?)</a>`s', $st, $m) > 0) {
      //$r = mysql_query("UPDATE rl_works SET b_aid='$m[1]', b_aname='$m[2]' WHERE w_id='$w_id'");
      echo mysql_error();
    }
    if (preg_match('`"id":"(.*?)","unique_id":"(.*?)"`s', $st, $m) > 0) {
      $st2=myfile("https://polldaddy.com/ratings/rate.php?cmd=get&id=$m[1]&uid=$m[2]&item_id=");
      if (preg_match('`nero_up = (.*?);`', $st2, $m) > 0) {
        //$r = mysql_query("UPDATE rl_works SET b_up='$m[1]' WHERE w_id='$w_id'");
        echo mysql_error();
      }
      if (preg_match('`nero_dn = (.*?);`s', $st2, $m) > 0) {
        //$r = mysql_query("UPDATE rl_works SET b_down='$m[1]' WHERE w_id='$w_id'");
        echo mysql_error();
      }
    }
    //if ($w_id == 1725) exit;
    //exit;
  }
  
  $w_id = $_GET[w_id];
  $br_id = $_GET[br_id];
  
  if ($br_id != '') {
    //$r = mysql_query("UPDATE rl_works SET br_id='$br_id' WHERE w_id='$w_id'");
    echo mysql_error();
    echo "Loaded $br_id to $w_id";
    exit;
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
  $r = mysql_query("SELECT * FROM rl_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }

  load_poets("https://briefly.ru/authors/");
?>
<?
  // This is main loader
  include "../mysql.php";
  
  $first_id=100000;
  
//curl 'https://allpoetry.com/poems' -H 'If-None-Match: W/"b2721dcd90b451c2e02c22a21deb0c0a"' -H 'Accept-Encoding: gzip, deflate, sdch, br' -H 'Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4' -H 'Upgrade-Insecure-Requests: 1' -H 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8' -H 'Cache-Control: max-age=0' -H 'Cookie: _gat=1; z=1; remember_me=BAhbB0kiDFJ1YWxhcmsGOgZFVEkiDkNvbmdyZXNzMQY7AFQ%3D--d2095d64525be07157ce9949b010cbbbc3bc1462; my_vs=1; sm_dapi_session=1; _s=a1p2L0w4SG96RE90OTFOMmtMWGNqTDkxcjVaeDhHZ3p0Y1JHS0ozMWNYbkg2YXRENlgyNFhsTUQ5OWU3NnVvZU9PQzV4ZmJmdUhBNWduWm9uMHpiUURxMlhlbXJSU1dERVFDeDNQN2k3VzZVTWdWUGVXWEpVcFIvS1Z3cGJ4ZkxGYlZ1TlJMeVcwa2hzbERtWFJrdnpBYnJuZVIwZS9jODRGVUhYNStNTlQ4bklSemJMOGZMLzNuZDBmY0c1c0R3azNrZXhyMkZWajNHdmdRNkNDQktabEVsWmpFaUhDdE5vU01BOVJyWTdKc0JOa1NjeWpjeVhzdThucnpvZlJPU0lVRHR3aWZmZ0FidHNpWUk3L3JDb3R6OTRZaFlUOXdKZ2cxejd2cVhoMjd2Wkt1anM2WG1GaUZLNVZVSmlTRURQMUxTMThUbm96UnZsdEhmWlNzSEV5bFlsc1ljalNYUjI2THd0UmFqU3pPY2hMVUY2dzFvWkdZMDJac2J5ZFE5WGJVeGNkTlVhQTlGUG5pY2pPTVZZL1hsb0lwcWxuaFdPdUUxbFgvZjhLcjJoM0Nra0M1ek5KZWtTeHJpM2w4UC0taDFEdGN4bFBENzJsWU9aSlZUcGJYdz09--e2bdd69c88e40e43e7da365d07657ea1e84c4223; H1:c08355ca0bd80467ee5483e3e8cbf=1; _ga=GA1.2.2060582491.1470325243' -H 'Connection: keep-alive' --compressed

  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_COOKIE, '_gat=1; z=1; remember_me=BAhbB0kiDFJ1YWxhcmsGOgZFVEkiDkNvbmdyZXNzMQY7AFQ%3D--d2095d64525be07157ce9949b010cbbbc3bc1462; my_vs=1; sm_dapi_session=1; _s=a1p2L0w4SG96RE90OTFOMmtMWGNqTDkxcjVaeDhHZ3p0Y1JHS0ozMWNYbkg2YXRENlgyNFhsTUQ5OWU3NnVvZU9PQzV4ZmJmdUhBNWduWm9uMHpiUURxMlhlbXJSU1dERVFDeDNQN2k3VzZVTWdWUGVXWEpVcFIvS1Z3cGJ4ZkxGYlZ1TlJMeVcwa2hzbERtWFJrdnpBYnJuZVIwZS9jODRGVUhYNStNTlQ4bklSemJMOGZMLzNuZDBmY0c1c0R3azNrZXhyMkZWajNHdmdRNkNDQktabEVsWmpFaUhDdE5vU01BOVJyWTdKc0JOa1NjeWpjeVhzdThucnpvZlJPU0lVRHR3aWZmZ0FidHNpWUk3L3JDb3R6OTRZaFlUOXdKZ2cxejd2cVhoMjd2Wkt1anM2WG1GaUZLNVZVSmlTRURQMUxTMThUbm96UnZsdEhmWlNzSEV5bFlsc1ljalNYUjI2THd0UmFqU3pPY2hMVUY2dzFvWkdZMDJac2J5ZFE5WGJVeGNkTlVhQTlGUG5pY2pPTVZZL1hsb0lwcWxuaFdPdUUxbFgvZjhLcjJoM0Nra0M1ek5KZWtTeHJpM2w4UC0taDFEdGN4bFBENzJsWU9aSlZUcGJYdz09--e2bdd69c88e40e43e7da365d07657ea1e84c4223; H1:c08355ca0bd80467ee5483e3e8cbf=1; _ga=GA1.2.2060582491.1470325243');
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
  
  function load_authors($url, $page) {
    GLOBAL $aname, $last_lev;
    $result = 0;
    $st = myfile($url);
    $sf1 = '<div class="block-sm-holder-az">';
    $sf2 = 'href="';
    $sf3 = 'class="link-name">';
    $sf4 = '<div class="bq_s">';
    $sf5 = '<a href="/quotes/authors/';
    $st3 = substr($st, strpos($st, $sf4));
    $sa = explode($sf5, $st3);
    // Load all
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $link = substr($st2, 0, strpos($st2, '"'));
      $name = substr($st2, strpos($st2, '>')+1);
      $name = substr($name, 0, strpos($name, '<'));
      //$name = mysql_real_escape_string($name);
      $name = str_replace("'", "\'", $name);
      $result++;
      mysql_query("INSERT IGNORE INTO eq_authors VALUES('','','','$name',".($page+100).",'',0,0,'',0,'','$link',0)");
      echo mysql_error();
      //mysql_query("UPDATE eq_authors SET a_rating='".($page+100)."'WHERE a_name='$name'");
      //echo mysql_error();
      //$r = mysql_query("UPDATE eq_authors SET a_rating=1 WHERE a_name='$name'");
      $r = mysql_query("SELECT a_id FROM eq_authors WHERE a_name='$name'");
      echo mysql_error();
      $w=mysql_fetch_assoc($r);
      $a_id=$w[a_id];
      echo "<b>$a_id - $name - <a target=_blank href='https://www.brainyquote.com/quotes/authors/$link'>$link</a></b><br>\n";
      for ($i=1; $i<100; $i++) {
        $result2 = load_author($name, $link, $a_id, $i);
        if ($result2 == 0) break;
      }
    }
    $sa = explode($sf1, $st);
    // Load popular
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $link = substr($st2, strpos($st2, $sf2)+strlen($sf2));
      $link = substr($link, 0, strpos($link, '"'));
      $name = substr($st2, strpos($st2, $sf3)+strlen($sf3));
      $name = substr($name, 0, strpos($name, '<'));
      $r = mysql_query("UPDATE eq_authors SET a_rating=10 WHERE a_name='$name'");
      echo mysql_error();
      echo "<b>Popular: $name - <a target=_blank href='$link'>$link</a></b><br>\n";
    }
    return $result;
  }
  
  function load_author($a_name, $a_link, $a_id, $page) {
    GLOBAL $wname, $last_lev;
    $result = 0;
    $url = "https://www.brainyquote.com/quotes/authors/$a_link";
    if ($page > 1) $url = str_replace(".html", "_{$page}.html", $url);
    //echo "$url<br>";
    $sf1 = '<div class="bqLn">Nationality:';
    $sf2 = '<div class="bqLn">Type:';
    $sf3 = '<div class="bqLn">Born:';
    $sf4 = '<div class="bqLn">Died:';
    $sf5 = '<div class="masonryitem boxy bqQt bqShare">';
    $sf6 = 'zoomc bqpht" src="';
    $sf7 = '<a title="view quote"';
    $sf8 = 'href="/quotes/quotes/';
    $sf9 = '<div class="col-lg-3';
    $sf10= 'href="/quotes/authors/';
    $sf11= '<span class="link-name">';
    $st = myfile($url);
    $nation = '';
    if (strpos($st, $sf1) !== false) {
      $nation = substr($st, strpos($st, $sf1)+strlen($sf1));
      $nation = substr($nation, strpos($nation, '>')+1);
      $nation = substr($nation, 0, strpos($nation, '<'));
      mysql_query("UPDATE eq_authors SET a_country='$nation' WHERE a_name='$a_name'");
      echo mysql_error();
    }
    if (strpos($st, $sf2) !== false) {
      $type = substr($st, strpos($st, $sf2)+strlen($sf2));
      $type = substr($type, strpos($type, '>')+1);
      $type = substr($type, 0, strpos($type, '<'));
      mysql_query("UPDATE eq_authors SET a_type='$type' WHERE a_name='$a_name'");
      echo mysql_error();
    }
    if (strpos($st, $sf3) !== false) {
      $year1 = substr($st, strpos($st, $sf3)+strlen($sf3));
      //$year1 = substr($year1, strpos($year1, '>')+1);
      $year1 = substr($year1, 0, strpos($year1, '</div>'));
      $year12 = strip_tags($year1);
      preg_match_all('/(\d{4})/', $year12, $matches);
      if (count($matches[0])>0) $year1 = $matches[0][count($matches[0])-1];
      else {
        preg_match_all('/(\d{3})/', $year12, $matches);
        if (count($matches[0])>0) $year1 = $matches[0][count($matches[0])-1];
      }
      if (strpos($year12, ' BC')>0) $year1 = -$year1;
      mysql_query("UPDATE eq_authors SET a_year1='$year1' WHERE a_name='$a_name'");
      echo mysql_error();
    }
    if (strpos($st, $sf4) !== false) {
      $year2 = substr($st, strpos($st, $sf4)+strlen($sf4));
      //$year2 = substr($year2, strpos($year2, '>')+1);
      $year2 = substr($year2, 0, strpos($year2, '</div>'));
      $year22 = strip_tags($year2);
      //echo "$year2-";
      preg_match_all('/(\d{4})/', $year22, $matches);
      if (count($matches[0])>0) $year2 = $matches[0][count($matches[0])-1];
      else {
        preg_match_all('/(\d{3})/', $year22, $matches);
        if (count($matches[0])>0) $year2 = $matches[0][count($matches[0])-1];
      }
      if (strpos($year12, ' BC')>0) $year2 = -$year2;
      mysql_query("UPDATE eq_authors SET a_year2='$year2' WHERE a_name='$a_name'");
      echo mysql_error();
    }
    //if ($a_name == 'Avigdor Lieberman') exit;
    //return;
    // Load quotes
    $sa = explode($sf5, $st);
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $bq_id = substr($st2, strpos($st2, $sf8)+strlen($sf8));
      $bq_id = substr($bq_id, 0, strpos($bq_id, '"'));
      if (strpos($st2, $sf7) !== false) {
        $txt = substr($st2, strpos($st2, $sf7)+strlen($sf7));
        $txt = substr($txt, strpos($txt, '>')+1);
        $txt = substr($txt, 0, strpos($txt, '<'));
        $txt = str_replace("&#39;", "\'", $txt);
        $rat = $page*100+$x;
        mysql_query("INSERT IGNORE INTO eq_quotes VALUES('','$a_id','$txt',0,'$rat','$bq_id')");
        echo mysql_error();
        $r = mysql_query("SELECT q_id FROM eq_quotes WHERE q_txt='$txt' AND a_id='$a_id'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $q_id=$w[q_id];
        $result++;
      }
      if (strpos($st2, $sf6) !== false) {
        $img = substr($st2, strpos($st2, $sf6)+strlen($sf6));
        $img = substr($img, 0, strpos($img, '"'));
        if (!file_exists("qpic/$a_id")) mkdir("qpic/$a_id");
        myfile("https://www.brainyquote.com$img", 0, "qpic/$a_id", "$q_id.jpg");
        mysql_query("UPDATE eq_quotes SET q_img=1 WHERE q_id='$q_id'");
        echo mysql_error();
      }
    }
    // Load links
    $sa = explode($sf9, $st);
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $bq_id = substr($st2, strpos($st2, $sf10)+strlen($sf10));
      $bq_id = substr($bq_id, 0, strpos($bq_id, '"'));
      //echo "$bq_id<br>";
      $r = mysql_query("SELECT a_id FROM eq_authors WHERE a_brainyquote='$bq_id'");
      echo mysql_error();
      $w=mysql_fetch_assoc($r);
      $a_id2=$w[a_id];
      if ($a_id2 > 0) {
        mysql_query("INSERT IGNORE INTO eq_alink VALUES('$a_id','$a_id2')");
        echo mysql_error();
      }
    }
    return $result;
  }
  
  function load_poem($name, $link) {
    $url = "https://allpoetry.com$link";
    $sf1 = '<div class="rendered poem_body" itemprop="description">';
    $sf2 = '</p>';
    $sf3 = '</div>';
    $sf4 = '<span id="views">';
    $sf5 = 'new this week, ';
    $fa = myfile($url);
    $c = count($fa);
    $started = 0;
    $empty = 0;
    for ($i=0; $i<$c; $i++) {
      $st = $fa[$i];
      if ($started == 1) {
        $st2 = $st;
        if (strpos($st2, "<")>0) $st2 = substr($st2, 0, strpos($st2, "<"));
        $st2 = str_replace("\t", "", $st2);
        $st2 = str_replace("	", "", $st2);
        $st2 = trim(str_replace("'", "`", strip_tags($st2)));
        if (($empty == 0) || ($st2 != '')) {
          $poem .= $st2."\r\n";
          if (strpos($st, "<br><br>") != 0) {
            $poem .= "\r\n";
            $empty = 1;
          }
          if ($st2 == '') $empty = 1;
          else $empty = 0;
        }
      }
      if (strpos($st, $sf1) !== false) {
        $poem = trim(str_replace("'", "`", strip_tags(substr($st, strpos($st, $sf1)+strlen($sf1)))))."\r\n";
        $started = 1;
        continue;
      }
      if (strpos($st, $sf2) !== false) {
        $started = 0;
      }
      if (strpos($st, $sf3) !== false) {
        $started = 0;
      }
      if (strpos($st, $sf4) !== false) {
        $views = substr($st, strpos($st, $sf4)+strlen($sf4));
        $views = trim(substr($views, 0, strpos($views, ' ')));
        echo "Views: $views<br>\n";
      }
      if (strpos($st, $sf5) !== false) {
        $rating = substr($st, strpos($st, $sf5)+strlen($sf5));
        $rating = trim(substr($rating, 0, strpos($rating, ' ')));
        echo "Rating: $rating<br>\n";
      }
    }
    echo "<pre>$poem</pre>";
  }
  
  /*
  // load names
  $r = mysql_query("SELECT * FROM ep_authors");
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
  $r = mysql_query("SELECT * FROM ep_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }
  */
  
  foreach (range('a', 'z') as $letter) {
    for ($i=1; $i<100; $i++) {
      $x = $i;
      if ($i == 1) $x = '';
      $result = load_authors("https://www.brainyquote.com/authors/$letter$x", $i);
      if ($result == 0) break;
    }
  }

  // Load popular
  $st = myfile("https://www.brainyquote.com/quotes/favorites.html");
  $sf1 = '<a href="/quotes/authors/';
  $sf2 = 'alt="Favorite"';
  $sa = explode($sf1, $st);
  for ($x=1; $x<count($sa); $x++) {
    $st2 = $sa[$x];
    $link = substr($st2, 0, strpos($st2, '"'));
    echo "$link<br>";
    $r = mysql_query("SELECT a_rating FROM eq_authors WHERE a_brainyquote='$link'");
    echo mysql_error();
    $w=mysql_fetch_assoc($r);
    $rat2=$w[a_rating];
    if ($rat2 > 0) {
      if (strpos($st2, $sf2) !== false) {
        $rat = 3;
      } else {
        if ($rat2 < 11) $rat = 4;
        else $rat = 11;
      }
      echo "$rat<br>";
      mysql_query("UPDATE eq_authors SET a_rating='$rat' WHERE a_brainyquote='$link'");
    }
  }

?>
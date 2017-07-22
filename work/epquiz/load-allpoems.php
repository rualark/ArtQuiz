<?
  // This is main loader
  include "mysql.php";
  
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
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
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
    $fa = myfile($url);
    $sf1 = "<div class='thumb'><a href='";
    for ($x=0; $x<count($fa); $x++) {
      $st = $fa[$x];
      if (strpos($st, $sf1) !== false) {
        $sa = explode($sf1, $st);
        for ($i=1; $i<count($sa); $i++) {
          $st2 = $sa[$i];
          $link = substr($st2, 0, strpos($st2, "'"));
          $name = substr($st2, strpos($st2, ' poems">')+8);
          $name = substr($name, 0, strpos($name, '<'));
          //mysql_query("INSERT IGNORE INTO ep_authors VALUES('','$name','','',0,0,'',0,0,0,'$link','')");
          echo mysql_error();
          $r = mysql_query("SELECT a_id FROM ep_authors WHERE a_allpoetry='$link'");
          echo mysql_error();
          $w=mysql_fetch_assoc($r);
          $a_id=$w[a_id];
          echo "<b>$a_id - $name - <a target=_blank href='https://allpoetry.com$link'>$link</a></b><br>\n";
          if ($a_id > 0) load_poet($name, $link, $a_id);
          //if ($i > 10) exit;
        }
      }
    }
  }
  
  function load_poet($a_name, $link3, $a_id) {
    GLOBAL $wname, $last_lev;
    $link2 = str_replace(" ", "-", $link3);
    $link3 = str_replace(" ", "%20", $link3);
    $url = "https://allpoetry.com$link2";
    $sf1 = '<div class="dim ttgap">';
    $sf2 = '<h1 class="title"><a class="nocolor" href="';
    $sf3 = '/><link href="//';
    $sf4 = 'Ranked #';
    $sf5 = '<i class="fa fa-comment"></i>';
    $sf6 = "<span class='num'>";
    $sf7 = '<div class="tttgap">';
    $sf11 = '<div class="preview poem_body">';
    $sf12 = '<div';
    $sf13 = '</div>';
    $sf14 = '<span id="views">';
    $sf15 = 'new this week, ';
    $sf16 = '<a href';
    $fa = myfile($url);
    $c = count($fa);
    $st = implode($fa);
    if (strpos($st, $sf7) !== false) {
      $bio = substr($st, strpos($st, $sf7)+strlen($sf7));
      $bio = str_replace("\n", "", $bio);
      $bio = str_replace("\r", "", $bio);
      $bio = str_replace("<br>", "\r\n", $bio);
      $bio = str_replace("<p>", "\r\n", $bio);
      $bio = str_replace("Read More</a>", "", $bio);
      $bio = substr($bio, 0, strpos($bio, '<div class="row">'));
      for ($z=0; $z<10; $z++) $bio = str_replace("\r\n\r\n", "\r\n", $bio);
      $bio = mysql_real_escape_string(strip_tags(trim(html_entity_decode((str_replace("'", "`", $bio))))));
    }
    $sa = explode('<div class="body"><a href="', $st);
    for ($i=1; $i<count($sa); $i++) {
      $rlink = substr($sa[$i], 0, strpos($sa[$i], '"'));
      $rlink = str_replace("-", " ", $rlink);
      $r = mysql_query("SELECT a_id FROM ep_authors WHERE a_allpoetry='$rlink'");
      echo mysql_error();
      $wr=mysql_fetch_assoc($r);
      //echo "Related to $rlink [$wr[a_id]]<br>";
      //$r = mysql_query("INSERT IGNORE INTO ep_arel VALUES('$a_id','$wr[a_id]')");
      echo mysql_error();
    }
    for ($i=0; $i<$c; $i++) {
      $st = $fa[$i];
      if (strpos($st, $sf1) !== false) {
        $years = substr($st, strpos($st, $sf1)+strlen($sf1));
        $years = trim(substr($years, 0, strpos($years, "<")));
        echo "Years: $years<br>\n";
      }
      if (strpos($st, $sf4) !== false) {
        $rank = substr($st, strpos($st, $sf4)+strlen($sf4));
        $rank = trim(substr($rank, 0, strpos($rank, ' ')));
        echo "Rank: $rank<br>\n";
      }
      if (strpos($st, $sf3) !== false) {
        $apic = substr($st, strpos($st, $sf3)+strlen($sf3));
        $apic = trim(substr($apic, 0, strpos($apic, '"')));
        echo "Pic: <img src='http://$apic'><br>\n";
        //myfile("http://$apic", 0, 'apic', "$a_id.jpg");
      }
    }
    //mysql_query("UPDATE ep_authors SET a_rating='$rank', a_years='$years', a_desc='$bio' WHERE a_id='$a_id'");
    echo mysql_error();
    return;
    // Load poems
    mkdir("poems/$a_id");
    for ($i=1; $i<1000; $i++) {
      $url = "https://allpoetry.com/poems/read_by$link3?page=$i";
      $fa = myfile($url);
      if ($fa == 0) break;
      $lcount = 0;
      $st2 = implode($fa);
      $st2 = str_replace("\n", "", $st2);
      $st2 = str_replace("\r", "", $st2);
      $sa = explode($sf2, $st2);
      if (count($sa)>1) for ($x=1; $x<count($sa); $x++) {
        $st = $sa[$x];
        $ncom = "";
        $likes = "";
        $poem = "";
        $lcount++;
        $name = substr($st, strpos($st, ">")+1);
        $name = substr($name, 0, strpos($name, "<"));
        $link = substr($st, 0, strpos($st, '"'));
        $link = str_replace("&#x27;", "'", $link);
        //echo "$name - <a target=_blank href=\"http://allpoetry.com$link\">$link</a><br>\n";
        if (strpos($st, $sf5) !== false) {
          $ncom = substr($st, strpos($st, $sf5)+strlen($sf5));
          $ncom = trim(substr($ncom, 0, strpos($ncom, '<')));
          //echo "Comments: $ncom<br>\n";
        }
        if (strpos($st, $sf6) !== false) {
          $likes = substr($st, strpos($st, $sf6)+strlen($sf6));
          $likes = trim(substr($likes, 0, strpos($likes, '<')));
          //echo "Likes: $likes<br>\n";
        }
        if (strpos($st, $sf11) !== false) {
          $poem = trim(str_replace("'", "`", substr($st, strpos($st, $sf11)+strlen($sf11))));
          $pos1 = strpos($poem, $sf12);
          $pos2 = strpos($poem, $sf13);
          $pos3 = strpos($poem, $sf16);
          $poem = html_entity_decode(substr($poem, 0, min($pos1, $pos2, $pos3)));
          $poem = str_replace("<br>", "\r\n", $poem);
          $poem = str_replace("<p>", "\r\n", $poem);
          $poem = strip_tags($poem);
          //echo "<pre>$poem</pre>";
        }
        // Save poem
        $name2 = str_replace("'", "`", $name);
        //mysql_query("INSERT INTO ep_works VALUES ('$a_id','','$name2','','$ncom','$likes','','http://allpoetry.com".mysql_real_escape_string($link)."')");
        echo mysql_error();
        $r = mysql_query("SELECT w_id FROM ep_works WHERE a_id='$a_id' AND w_name='$name2'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $w_id=$w[w_id];
        //file_put_contents("poems/$a_id/$w_id.txt", $poem);
        if ($a_id == '') echo "Error in a_id $a_id for $name<br>";
      }
      //echo "Loaded <a target=_blank href='$url'>page $i</a>...<br>\n";
      if ($lcount == 0) break;
    }
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

  /*
  $url = "https://allpoetry.com/poems/read_by/Langston%20Hughes?page=1";
  $fa = myfile($url);
  foreach ($fa as $st) echo $st;
  exit;
  */
  
  for ($i=1; $i<9; $i++) 
    load_poets("https://allpoetry.com/classics/famous_poets?page=$i");
?>
<?
  // This is main loader
  include "lib.php";
  
  $first_id=100000;
  
  start_time();
  
//curl "https://www.google.ru/search?q=^%^D0^%^92^%^D0^%^B0^%^D0^%^BB^%^D0^%^B5^%^D0^%^BD^%^D1^%^82^%^D0^%^B8^%^D0^%^BD^%^D0^%^BE+^%^D0^%^93^%^D0^%^B0^%^D1^%^80^%^D0^%^B0^%^D0^%^B2^%^D0^%^B0^%^D0^%^BD^%^D0^%^B8" -H "Upgrade-Insecure-Requests: 1" -H "Referer: http://alch.strangled.net/artquiz/work/rquotes/load-gkg.php" -H "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36" --compressed
//curl 'https://allpoetry.com/poems' -H 'If-None-Match: W/"b2721dcd90b451c2e02c22a21deb0c0a"' -H 'Accept-Encoding: gzip, deflate, sdch, br' -H 'Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4' -H 'Upgrade-Insecure-Requests: 1' -H 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8' -H 'Cache-Control: max-age=0' -H 'Cookie: _gat=1; z=1; remember_me=BAhbB0kiDFJ1YWxhcmsGOgZFVEkiDkNvbmdyZXNzMQY7AFQ%3D--d2095d64525be07157ce9949b010cbbbc3bc1462; my_vs=1; sm_dapi_session=1; _s=a1p2L0w4SG96RE90OTFOMmtMWGNqTDkxcjVaeDhHZ3p0Y1JHS0ozMWNYbkg2YXRENlgyNFhsTUQ5OWU3NnVvZU9PQzV4ZmJmdUhBNWduWm9uMHpiUURxMlhlbXJSU1dERVFDeDNQN2k3VzZVTWdWUGVXWEpVcFIvS1Z3cGJ4ZkxGYlZ1TlJMeVcwa2hzbERtWFJrdnpBYnJuZVIwZS9jODRGVUhYNStNTlQ4bklSemJMOGZMLzNuZDBmY0c1c0R3azNrZXhyMkZWajNHdmdRNkNDQktabEVsWmpFaUhDdE5vU01BOVJyWTdKc0JOa1NjeWpjeVhzdThucnpvZlJPU0lVRHR3aWZmZ0FidHNpWUk3L3JDb3R6OTRZaFlUOXdKZ2cxejd2cVhoMjd2Wkt1anM2WG1GaUZLNVZVSmlTRURQMUxTMThUbm96UnZsdEhmWlNzSEV5bFlsc1ljalNYUjI2THd0UmFqU3pPY2hMVUY2dzFvWkdZMDJac2J5ZFE5WGJVeGNkTlVhQTlGUG5pY2pPTVZZL1hsb0lwcWxuaFdPdUUxbFgvZjhLcjJoM0Nra0M1ek5KZWtTeHJpM2w4UC0taDFEdGN4bFBENzJsWU9aSlZUcGJYdz09--e2bdd69c88e40e43e7da365d07657ea1e84c4223; H1:c08355ca0bd80467ee5483e3e8cbf=1; _ga=GA1.2.2060582491.1470325243' -H 'Connection: keep-alive' --compressed

  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_COOKIE, 'GOOGLE_ABUSE_EXEMPTION=ID=b9dccd069e83c8ee:TM=1486240909:C=r:IP=95.165.137.69-:S=APGng0sPJRVHivn5Va67cRjlXoB6jv3m2g; DV=0rDjQejS0H8cXM2xWaQ_WXlwI70VtAI; NID=96=Ph53vMIf1NixsOzX2MyQc0CQJOcrtCVYs3gvq3kwmapec-NLUnk9B0ymA8UJZsEO5TMqIT7glfhLflTq8lULAPGGnMOGCB98otq90DhCYQS9lGKsdNAyqLqak1dF4bXG;');
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
    $st = myfile($url.$page);
    $sf1 = '<tbody>';
    $sf2 = '</tbody>';
    $sf3 = '<a href="/man/';
    $sf4 = '<div class="bq_s">';
    $sf5 = '<a href="/quotes/authors/';
    $st3 = substr($st, strpos($st, $sf1));
    $st3 = substr($st3, 0, strpos($st3, $sf2));
    $sa = explode($sf3, $st3);
    // Load all
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $link = substr($st2, 0, strpos($st2, '"'));
      $name = substr($st2, strpos($st2, '>')+1);
      $name = substr($name, 0, strpos($name, '<'));
      //$name = mysql_real_escape_string($name);
      $name = str_replace("'", "\'", $name);
      $result++;
      //mysql_query("INSERT IGNORE INTO rq_authors (a_name, a_citaty) VALUES('$name','$link')");
      echo mysql_error();
      //mysql_query("UPDATE rq_authors SET a_rating='".($page+100)."'WHERE a_name='$name'");
      //echo mysql_error();
      //$r = mysql_query("UPDATE rq_authors SET a_rating=1 WHERE a_name='$name'");
      $r = mysql_query("SELECT a_id FROM rq_authors WHERE a_name='$name'");
      echo mysql_error();
      $w=mysql_fetch_assoc($r);
      $a_id=$w[a_id];
      echo "<b>$a_id - $name - <a target=_blank href='http://citaty.info/man/$link?page=0'>$link</a></b><br>\n";
      for ($i=0; $i<1000; $i++) {
        $result2 = load_author($name, $link, $a_id, $i);
        if ($result2 == 0) break;
      }
    }
  }
  
  function load_author($a_name, $a_link, $a_id, $page) {
    GLOBAL $wname, $last_lev;
    $result = 0;
    $url = "http://citaty.info/man/$a_link?page=$page";
    //echo "$url<br>";
    $sf0 = '<div class="node__content">';
    $sf1 = '<div class="field-item even last"><p>';
    $sf2 = '</p></div>';
    $sf3 = '<a href="/category/';
    $sf4 = '<a href="/tema/';
    $sf5 = '';
    $sf6 = '<div class="rating__value__digits">';
    $sf7 = '<div class="rating__result rating__value-negative">';
    $st = myfile($url);
    if ($page == 0) {
      if (preg_match('`<div class="field-label">Род деятельности:(.*?)<div class="field-items">(.*?)</div>`s', $st, $m) > 0) {
        $m[2] = str_replace('<span class="show-more"><a class="show-more__link">...</a><span class="show-more__hidden">', "", $m[2]);
        $prof = mysql_real_escape_string(strip_tags(trim($m[2])));
      }
      if (preg_match('`<div class="field-label">Дата рождения:(.*?)<div class="field-items">(.*?)</div>`s', $st, $m) > 0) {
        $m[2] = str_replace('<span class="show-more"><a class="show-more__link">...</a><span class="show-more__hidden">', "", $m[2]);
        $a_start = mysql_real_escape_string(strip_tags(trim($m[2])));
        $a_start = substr($a_start, strrpos($a_start, '.')+1);
      }
      if (preg_match('`<div class="field-label">Дата смерти:(.*?)<div class="field-items">(.*?)</div>`s', $st, $m) > 0) {
        $m[2] = str_replace('<span class="show-more"><a class="show-more__link">...</a><span class="show-more__hidden">', "", $m[2]);
        $a_stop = mysql_real_escape_string(strip_tags(trim($m[2])));
        $a_stop = substr($a_stop, strrpos($a_stop, '.')+1);
      }
      if (preg_match('`<div class="taxonomy-term-description"><p>(.*?)</div>`s', $st, $m) > 0) {
        $a_desc = mysql_real_escape_string(html_entity_decode(strip_tags(trim($m[1]))));
      }
      if (preg_match('`<img class="image-poster" src="(.*?)"`s', $st, $m) > 0) {
        $img = mysql_real_escape_string(trim($m[1]));
        //echo "<img src='$img'> ";
        if (!file_exists("apic/$a_id.jpg")) {
          myfile("$img", 0, "apic", "$a_id.jpg");
        }
      }
      echo "$prof - $a_start - $a_stop - $a_desc<br>";
      $q = "UPDATE rq_authors SET a_type='$prof', a_year1='$a_start', a_year2='$a_stop', a_desc='$a_desc'
        WHERE a_id='$a_id'
      ";
      // Next line is temporary query
      $q = "UPDATE rq_authors SET a_year3='$a_start' WHERE a_id='$a_id'";
      //echo $q;
      mysql_query($q);
      echo mysql_error();
    }
    // Load quotes
    $sa = explode($sf0, $st);
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $ci_id = '';
      if (preg_match('`<li class="comment-comments last"><a href="(.*?)#`s', $st2, $m) === 1) {
        $ci_id = mysql_real_escape_string($m[1]);
        $result++;
      }
      $txt = '';
      if (preg_match('`<div class="field field-name-body field-type-text-with-summary field-label-hidden">(.*?)</div>`s', $st2, $m) === 1) {
        $txt = $m[1];
        if (strpos($txt, '<div class="partner-link">') !== false) 
          $txt = substr($txt, 0, strpos($txt, '<div class="partner-link">'));
        $txt = str_replace("\n", "", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("  ", " ", $txt);
        $txt = str_replace("<p>", "\n", $txt);
        $txt = str_replace("<br />", "\n", $txt);
        $txt = mysql_real_escape_string(trim(html_entity_decode(strip_tags($txt))));
      }
      $u_id = '';
      if (preg_match('`<a href="/user/(.*?)"`s', $st2, $m) === 1) {
        $u_id = mysql_real_escape_string($m[1]);
      }
      $u_name = '';
      $q_time = '';
      if (preg_match('`class="username">(.*?)</(.*?)>(.*) в `', $st2, $m) > 0) {
        $u_name = mysql_real_escape_string($m[1]);
        $q_time = mysql_real_escape_string(trim($m[3]));
      }
      $t_up = 0;
      if (preg_match('`<div class="rating__result rating__value-positive">(.*?)</div>`s', $st2, $m) === 1) {
        $t_up = mysql_real_escape_string(trim($m[1]));
      }
      $t_down = 0;
      if (preg_match('`<div class="rating__result rating__value-negative">(.*?)</div>`s', $st2, $m) === 1) {
        $t_down = mysql_real_escape_string(trim($m[1]));
      }
      echo "$t_up - $t_down - $ci_id - $u_id - $u_name - $q_time<br>";
      $q_rating = $t_up-$t_down;
      //mysql_query("INSERT IGNORE INTO rq_quotes VALUES('','$a_id','$txt','$q_rating','$ci_id','$t_up','$t_down')");
      $q_id = mysql_insert_id();
      echo mysql_error();
      // Tags
      if (preg_match_all('`<a href="/category/(.*?)">(.*?)</a>`', $st2, $m) > 0) {
        for ($i=0; $i<count($m[1]); $i++) {
          $c_cid = $m[1][$i];
          $c_name = $m[2][$i];
          //echo "$c_cid - $c_name<br>\n";
          //mysql_query("INSERT IGNORE INTO rq_tags VALUES('$c_name', '$c_cid', 1, 0)");
          echo mysql_error();
          //mysql_query("INSERT IGNORE INTO rq_qtags VALUES('$c_name', '$q_id')");
          echo mysql_error();
        }
      }
      if (preg_match_all('`<a href="/tema/(.*?)">(.*?)</a>`', $st2, $m) > 0) {
        for ($i=0; $i<count($m[1]); $i++) {
          $c_cid = $m[1][$i];
          $c_name = $m[2][$i];
          //echo "$c_cid - $c_name<br>\n";
          //mysql_query("INSERT IGNORE INTO rq_tags VALUES('$c_name', '$c_cid', 10, 0)");
          echo mysql_error();
          //mysql_query("INSERT IGNORE INTO rq_qtags VALUES('$c_name', '$q_id')");
          echo mysql_error();
        }
      }
    }
    return $result;
  }

  //exit;
  for ($x=0; $x<158; $x++) {
    $result = load_authors("http://citaty.info/man?sort_by=name&page=", $x);
    //stop_time();
    //exit;
  }

?>
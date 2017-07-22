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

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val, 1, 4, 1);
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
    $sf1 = '" alt="poet ';
    $sf2 = '" class="name">';
    $st = implode($fa);
    if (strpos($st, $sf1) !== false) {
      $sa = explode($sf1, $st);
      for ($i=1; $i<count($sa); $i++) {
        $st2 = $sa[$i];
        //echo "$st2|".strpos($st2, '<a href')."|";
        $link = substr($st2, strpos($st2, '<a href="')+9);
        $link = substr($link, 0, strpos($link, '"'));
        $name = substr($st2, strpos($st2, $sf2)+strlen($sf2));
        $name = substr($name, 0, strpos($name, '<'));
        //mysql_query("INSERT IGNORE INTO ep_authors VALUES('','$name','','',0,0,'',0,0,0,'$link','')");
        $a_id = find_closest($name, $aname);
        //if ($last_lev>1) $a_id = 0;
        if ($last_lev>min(strlen($name), strlen($aname[$a_id]))*0.4) {
          if ($last_lev>0) {
            echo "<font color=red>";
          }
          echo "<b>$name - $aname[$a_id] - $last_lev - $link</b><br>";
          echo "</font>";
          //if ($a_id > 0) load_poet($name, $link, $a_id);
        }
        //if ($i > 10) exit;
      }
    }
  }
  
  function load_poet($a_name, $link3, $a_id) {
    GLOBAL $wname, $last_lev;
    $url = "http://www.poemhunter.com$link3";
    $sf1 = '/up_poet.png" alt="';
    $sf2 = '/down_poet.png" alt="';
    $fa = myfile($url);
    $st = implode($fa);
    if (strpos($st, $sf1) !== false) {
      $up = substr($st, strpos($st, $sf1)+strlen($sf1));
      $up = substr($up, 0, strpos($up, ' '));
    }
    if (strpos($st, $sf1) !== false) {
      $down = substr($st, strpos($st, $sf2)+strlen($sf2));
      $down = substr($down, 0, strpos($down, ' '));
    }
    echo "$up - $down<br>";
    //mysql_query("UPDATE ep_authors SET 
      //a_vup='$up', a_vdown='$down', a_vote=$up/($up+$down), a_poemhunter='$link3' 
      //WHERE a_id='$a_id'");
    echo mysql_error();
  }
  
  // load names
  $r = mysql_query("SELECT * FROM ep_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    //$sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
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
  
  for ($i=0; $i<9; $i++) 
    load_poets("http://www.poemhunter.com/p/t/l.asp?a=0&l=Top500&cinsiyet=&Populer_mi=&Classicmi=&Dogum_Tarihi_yil=&Dogum_Yeri=&p=$i");
?>
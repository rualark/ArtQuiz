<?
  include "../mysql.php";
  
  $first_id=100000;
  

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

  function load_tag($tag, $url, $page) {
    GLOBAL $aname, $last_lev;
    $result = 0;
    $url = "https://www.brainyquote.com/quotes/topics/$url";
    if ($page > 1) $url = str_replace(".html", "{$page}.html", $url);
    echo "$url<br>";
    $st = myfile($url);
    $sf1 = 'title="view quote" href="/quotes/quotes/';
    $sf2 = 'href="';
    $sf3 = 'class="link-name">';
    $sf4 = '<div class="bq_s">';
    $sf5 = '<a href="/quotes/authors/';
    $sa = explode($sf1, $st);
    // Load tags
    for ($x=1; $x<count($sa); $x++) {
      $st2 = $sa[$x];
      $link = substr($st2, 0, strpos($st2, '?'));
      if ($link != "") {
        $result++;
        $r = mysql_query("SELECT q_id FROM eq_quotes WHERE q_brainyquote='$link'");
        echo mysql_error();
        $w=mysql_fetch_assoc($r);
        $q_id=$w[q_id];
        echo "$q_id - $link<br>";
        if ($q_id > 0) {
          mysql_query("INSERT IGNORE INTO eq_qtags VALUES('$tag','$q_id')");
          echo mysql_error();
        }
      }
    }
    return $result;
  }

  // Load tags
  $st = myfile("https://www.brainyquote.com/quotes/topics.html");
  $sf1 = '<a href="/quotes/topics/';
  $sf2 = 'alt="Favorite"';
  $sa = explode($sf1, $st);
  for ($x=1; $x<count($sa); $x++) {
    $st2 = $sa[$x];
    $link = substr($st2, 0, strpos($st2, '"'));
    $name = substr($st2, strpos($st2, '>')+1);
    $name = substr($name, 0, strpos($name, '<'));
    $rat = 10;
    if (strpos($st2, $sf2) !== false) $rat = 1;
    echo "$name - $link - $rat<br>";
    $name = str_replace("'", "\'", $name);
    mysql_query("INSERT IGNORE INTO eq_tags VALUES('$name','$link','$rat')");
    echo mysql_error();
    for ($i=1; $i<1000; $i++) {
      $result = load_tag($name, $link, $i);
      if ($result == 0) break;
    }
    //exit;
  }
?>
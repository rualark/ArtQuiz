<?
  include "../mysql.php";

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
  
  // load gkg
  $r = mysql_query("SELECT * FROM eq_authors ORDER BY a_rating");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $en = urlencode($w[a_name]);
    $url = "https://kgsearch.googleapis.com/v1/entities:search?".
      "query=$en&key=AIzaSyB_iKWHmie-0KGU9voRXECCdFpf3oHVQAI&indent=True";
    $st = myfile($url, 1, "cache", "gkg-$en.txt");
    //echo $st;
    $ju = json_decode($st);
    //print_r($ju->{itemListElement}[0]->{result});
    $id = 0;
    $name = $ju->{itemListElement}[$id]->{result}->{name};
    $img = $ju->{itemListElement}[$id]->{result}->{image}->{contentUrl};
    $wiki = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{url};
    $l = levenshtein($name, $w[a_name]);
    if ($l > 2) {
      $aname = array();
      foreach ($ju->{itemListElement} as $key => $val) {
        $aname[$key] = $val->{result}->{name};
      }
      $id = find_closest($w[a_name], $aname);
      $name = $ju->{itemListElement}[$id]->{result}->{name};
      $img = $ju->{itemListElement}[$id]->{result}->{image}->{contentUrl};
      $wiki = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{url};
      $l = $last_lev;
      if ($last_lev <= 2) {
        echo "<br>Search: $w[a_name] ($w[a_id]) [$last_lev]";
        echo "<br>Name: <a target=_blank href='$url'>".$ju->{itemListElement}[$id]->{result}->{name}."</a>";
        echo "<br>Descr: ".$ju->{itemListElement}[$id]->{result}->{description};
        echo "<br>Image: <img src=".$img.">";
        echo "<br>Descr2: ".$ju->{itemListElement}[$id]->{result}->{detailedDescription}->{articleBody};
        echo "<br>Wiki: <a target=_blank href='$wiki'>$wiki</a>";
      }
    } 
    if ($l <= 2) {
      //myfile("$img", 0, "apic", "$w[a_id].jpg");
    }
  }
?>

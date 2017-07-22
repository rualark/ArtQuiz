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
        if ($min<2) break;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  $a_id = $_GET[a_id];
  $gkg = $_GET[gkg];
  
  if ($a_id != 0) {
    mysql_query("UPDATE eq_authors SET a_gkg_id='$gkg' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $gkg to $a_id";
    exit;
  }
  
  // load gkg
  $r = mysql_query("SELECT * FROM eq_authors 
    WHERE (a_group='Literature' OR a_group='Philosophy' OR a_group='Art') AND a_gkg=''
    ORDER BY a_rating");
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
    $gkg = $ju->{itemListElement}[$id]->{result}->{"@id"};
    $name = $ju->{itemListElement}[$id]->{result}->{name};
    $img = $ju->{itemListElement}[$id]->{result}->{image}->{contentUrl};
    $wiki = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{url};
    $descr = $ju->{itemListElement}[$id]->{result}->{description};
    $descr2 = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{articleBody};
    $l = levenshtein($name, $w[a_name]);
    $ok = 0;
    if (($l > 2) && ($w[a_gkg_id] != 0)) {
      if ((strpos($name, 'University') !== false) ||
          (strpos($name, 'School') !== false) ||
          (strpos($name, 'Airport') !== false) ||
          (strpos($name, 'House') !== false) ||
          (strpos($name, 'Award') !== false) ||
          (strpos($name, 'Theatre') !== false) ||
          (strpos($descr, 'Arena') !== false) ||
          (strpos($descr, 'company') !== false) ||
          (strpos($descr, 'Company') !== false) ||
          (strpos($descr, 'Breed') !== false) ||
          (strpos($descr, 'Municipality') !== false) ||
          (strpos($name, 'College') !== false) ||
          (strpos($descr, 'Cathedral') !== false) ||
          (strpos($descr, ' band') !== false)
        ) {
        $aname = array();
        foreach ($ju->{itemListElement} as $key => $val) {
          $aname[$key] = $val->{result}->{name};
        }
        $id = find_closest($w[a_name], $aname);
        $l = $last_lev;
      }
      if ($w[a_gkg_id] > -1) {
        $id = $w[a_gkg_id];
      }
      $gkg = $ju->{itemListElement}[$id]->{result}->{"@id"};
      $name = $ju->{itemListElement}[$id]->{result}->{name};
      $img = $ju->{itemListElement}[$id]->{result}->{image}->{contentUrl};
      $wiki = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{url};
      $descr = $ju->{itemListElement}[$id]->{result}->{description};
      $descr2 = $ju->{itemListElement}[$id]->{result}->{detailedDescription}->{articleBody};
      echo "<br>Search: <a target=_blank href=/artquiz/equotes/authors.php?a_id=$w[a_id]>$w[a_name]</a> [$w[a_year1]] $w[a_country] - <b>$w[a_type]</b> ($w[a_id]) [$l] <a target=_blank href=load-gkg.php?a_id=$w[a_id]&gkg=$id>Load</a>  <a onclick='r=prompt(\"gkg id:\", \"\"); window.open(\"load-gkg.php?a_id=$w[a_id]&gkg=\"+r); return false' href=# target=_blank>New</a>";
      echo "<br>Name: <a target=_blank href='$url'>".$ju->{itemListElement}[$id]->{result}->{name}."</a>";
      echo "<br>Descr: <b>$descr</b>";
      //echo "<br>Id: <b>$gkg</b>";
      echo "<br>Image: <img src=$img>";
      echo "<br>Descr2: $descr2";
      echo "<br>Wiki: <a target=_blank href='$wiki'>$wiki</a>";
      if ($w[a_gkg_id] == $id) {
        $ok = 1;
        echo " <font color=red>OK</font> ";
      }
    } else $ok = 1;
    if ($ok == 1) {
      myfile("$img", 0, "apic", "$w[a_id].jpg");
      $descr = str_replace("'", "\'", $descr);
      $descr2 = str_replace("'", "\'", $descr2);
      $wiki = str_replace("'", "\'", $wiki);
      mysql_query("UPDATE eq_authors SET a_gkg='$gkg', a_type2='$descr', a_desc='$descr2', a_wiki='$wiki' WHERE a_id=$w[a_id]");
      echo mysql_error();
    }
  }
?>

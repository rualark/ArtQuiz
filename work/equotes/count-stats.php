<?
  include "../mysql.php";
  
  $first_id=100000;
  $ar_levels = array(3, 4, 11, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117);
  

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

  // Build types
  // Truncate
  mysql_query("TRUNCATE TABLE eq_types");
  echo mysql_error();
  // Delete all stat columns
  for ($x=1; $x<1000; $x++) {
    mysql_query("ALTER TABLE eq_types DROP COLUMN s$x");
    //echo mysql_error();
  }
  // Load types
  mysql_query("INSERT IGNORE INTO eq_types (a_group, a_type, a_cnt)
    SELECT a_group, a_type, COUNT(*) AS cnt FROM eq_authors 
    GROUP BY a_group, a_type");
  echo mysql_error();
  // Create new stat columns
  foreach ($ar_levels as $key => $val) {
    mysql_query("ALTER TABLE eq_types ADD s$val INT NOT NULL");
    echo mysql_error();
    // Load stats
    mysql_query("UPDATE eq_types 
      LEFT JOIN (SELECT a_type, COUNT(*) AS cnt 
      FROM eq_authors 
      WHERE a_rating<=$val GROUP BY a_type) a 
      USING (a_type) SET s$val=a.cnt");
    echo mysql_error();
  }

  // Count atags
  mysql_query("INSERT IGNORE INTO eq_atags
    SELECT a_id, t_name, COUNT(*) AS cnt 
    FROM eq_authors 
    INNER JOIN eq_quotes USING (a_id) 
    INNER JOIN eq_qtags USING (q_id) 
    GROUP BY a_id, t_name");
  echo mysql_error();
  
  // Count quotes
  mysql_query("UPDATE eq_authors 
    LEFT JOIN (SELECT a_id, COUNT(*) AS cnt, MIN(q_rating) AS minr FROM eq_quotes GROUP BY a_id) q USING (a_id) 
    SET a_quotes=q.cnt, a_minr=q.minr");
  echo mysql_error();
    
  exit;
  
  // Load top quotes
  $st = myfile("https://www.brainyquote.com/top_100_quotes");
  $sf1 = '<a href="/quotes/quotes/';
  $sf2 = 'alt="Favorite"';
  $sa = explode($sf1, $st);
  for ($x=1; $x<count($sa); $x++) {
    $st2 = $sa[$x];
    $link = substr($st2, 0, strpos($st2, '"'));
    $rat = 101-$x;
    if ($rat<1) $rat = 1;
    mysql_query("UPDATE eq_quotes SET q_rating='$rat' WHERE q_brainyquote='$link'");
    echo mysql_error();
    echo "Affected rows: ".mysql_affected_rows()."<br>";
    //exit;
  }
?>

INSERT IGNORE INTO eq_countries
SELECT a_country, COUNT(*) AS cnt FROM eq_authors GROUP BY a_country;

<?
  include "../mysql.php";
  include "../../url.php";
  
  $first_id=100000;
  $ar_levels = array(3, 4, 11, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117);
  
  $country_map = array(
    'КВН' => 'RUS',
    'Германи' => 'DEU',
    'Украин' => 'UKR',
    'российск' => 'RUS',
    'России' => 'RUS',
    'ССР' => 'RUS',
    'московск' => 'RUS',
    'питерск' => 'RUS',
    'африканск' => 'AFR',
    'отечественн' => 'RUS',
    'сибирск' => 'RUS',
    'иудейск' => 'ISR',
    'израильск' => 'ISR',
    'пакистан' => 'PAK',
    'советск' => 'RUS',
    'египетск' => 'EGY',
    'багдадск' => 'IRQ',
    'иракск' => 'IRQ',
    'португальск' => 'POR',
    'боливийск' => 'BOL',
    'словенск' => 'SVN',
    'австрийск' => 'AUT',
    'узбекск' => 'UZB',
    'сербск' => 'SRB',
    'болгарск' => 'BGR',
    'ямайск' => 'JAM',
    'колумбийск' => 'COL',
    'казахстанск' => 'KAZ',
    'аргентинск' => 'ARG',
    'чилийск' => 'CHL',
    'молдавск' => 'MDA',
    'бельгийск' => 'BEL',
    'ирландск' => 'IRL',
    'германск' => 'DEU',
    'грузинск' => 'GEO',
    'корейск' => 'KOR',
    'уругвайск' => 'URY',
    'индуистс' => 'IND',
    'норвежск' => 'NOR',
    'чешск' => 'CZE',
    'литовск' => 'LTU',
    'шведск' => 'SWE',
    'австралийск' => 'AUS',
    'мексиканск' => 'MEX',
    'немецк' => 'DEU',
    'бразильск' => 'BRA',
    'армянский' => 'ARM',
    'Азербайдж' => 'AZE',
    'ангольск' => 'AFR',
    'польск' => 'POL',
    'венгерск' => 'HUN',
    'шотландск' => 'SCO',
    'голландск' => 'NLD',
    'швейцарск' => 'CHE',
    'нидерландск' => 'NLD',
    'турецк' => 'TUR',
    'финск' => 'FIN',
    'японск' => 'JAP',
    'тайск' => 'THA',
    'китайск' => 'CHN',
    'украинск' => 'UKR',
    'датск' => 'DNK',
    'румынск' => 'ROU',
    'римск' => 'ROM',
    'афинск' => 'GRC',
    'Греци' => 'GRC',
    'персидск' => 'PER',
    'русск' => 'RUS',
    'испанск' => 'SPA',
    'французск' => 'FRA',
    'английск' => 'ENG',
    'Никарагуа' => 'NIC',
    'британск' => 'ENG',
    'США' => 'USA',
    'американск' => 'USA',
    'канадск' => 'CAN',
    'индийск' => 'IND',
    'греческ' => 'GRC',
    'итальянск' => 'ITA',
  );
  

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

  /*
  $rus_letter = "абвгдеёжзийклмнопрстуфхцчшщэюяыьъАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЭЮЯЫЬЪ";
  // Count russian letters
  for ($i=0; $i<strlen($rus_letter); $i++) {
    $letter = mb_substr($rus_letter, $i, 1);
    $q = "UPDATE rq_quotes SET rus_let=rus_let+1 WHERE q_txt LIKE '%$letter%'";
    echo "$q<br>";
    mysql_query($q);
  }
  */

  /*
  // Process authors
  $r = mysql_query("SELECT * FROM rq_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // ratings
    $r2 = mysql_query("SELECT MAX(q_rating) as maxr, COUNT(*) AS cnt FROM rq_quotes WHERE a_id=$w[a_id]");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    mysql_query("UPDATE rq_authors SET a_maxr = '$w2[maxr]', a_quotes='$w2[cnt]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
  }
  */

  // Replace countries
  /*
  foreach ($country_map as $key => $val) {
    $q = "UPDATE rq_authors SET a_country='$val' 
      WHERE a_country = 'THA' AND a_desc LIKE '%$key%' OR a_desc2 LIKE '%$key%'";
    echo "$q<br>";
    mysql_query($q);
    echo mysql_error();
  }
  */
  
  // Short enames
  $r = mysql_query("SELECT eq_authors.a_name, rq_authors.a_year1, rq_authors.a_id FROM rq_authors 
    LEFT JOIN eq_authors ON (rq_authors.eq_id=eq_authors.a_id) 
    WHERE rq_authors.map_pos != 0
  ");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Create name2
    $sa = explode(' ', $w[a_name]);
    if (count($sa) > 1) {
      if ($w[a_year1] < 1000) {
        $surname = $sa[0];
        $q = "SELECT COUNT(*) as cnt FROM rq_authors WHERE a_name LIKE '$surname %' AND a_fil=1"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $w4 = mysql_fetch_array($r2);
        $name2 = $surname;
        if ($w4[cnt] > 1) {
          $name2 = "$surname ".mb_substr($sa[1], 0, 1);
        }
        echo "$w[a_name] - $name2<br>";
        //if (strlen($name2) > 1) mysql_query("UPDATE rq_authors SET map2_name='$name2' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      } else {
        $surname = $sa[count($sa)-1];
        $q = "SELECT COUNT(*) as cnt FROM rq_authors WHERE a_name LIKE '% $surname' AND a_fil=1"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $w4 = mysql_fetch_array($r2);
        $name2 = $surname;
        if ($w4[cnt] > 1) {
          $name2 = mb_substr($w[a_name], 0, 1)." $surname";
        }
        echo "$w[a_name] - $name2<br>";
        //if (strlen($name2) > 1) mysql_query("UPDATE rq_authors SET map2_name='$name2' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
    } else {
      echo "$w[a_name] !!<br>";
      //if ($w[a_name] != '') mysql_query("UPDATE rq_authors SET map2_name='$w[a_name]' WHERE a_id='$w[a_id]'");
      //else mysql_query("UPDATE rq_authors SET map2_pos=0 WHERE a_id='$w[a_id]'");
    }
  }
  exit;

  // Short names
  $r = mysql_query("SELECT * FROM rq_authors WHERE a_fil=1");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Create name2
    $sa = explode(' ', $w[a_name]);
    if (count($sa) > 1) {
      if ($w[a_year1] < 1000) {
        $surname = $sa[0];
        $q = "SELECT COUNT(*) as cnt FROM rq_authors WHERE a_name LIKE '$surname %' AND a_fil=1"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $w4 = mysql_fetch_array($r2);
        $name2 = $surname;
        if ($w4[cnt] > 1) {
          $name2 = "$surname ".mb_substr($sa[1], 0, 1);
        }
        //if (strlen($name2) > 3) mysql_query("UPDATE rq_authors SET map_name='$name2' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      } else {
        $surname = $sa[count($sa)-1];
        $q = "SELECT COUNT(*) as cnt FROM rq_authors WHERE a_name LIKE '% $surname' AND a_fil=1"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $w4 = mysql_fetch_array($r2);
        $name2 = $surname;
        if ($w4[cnt] > 1) {
          $name2 = mb_substr($w[a_name], 0, 1)." $surname";
        }
        //if (strlen($name2) > 3) mysql_query("UPDATE rq_authors SET map_name='$name2' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
    }
  }
  //exit;

  /*
  // Check and update countries
  $r = mysql_query("SELECT * FROM rq_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $pcnt = array();
    foreach ($country_map as $key => $val) {
      $p1 = mb_stripos($w[a_desc], $key);
      $p2 = mb_stripos($w[a_name], $key);
      //echo "Search $w[a_country] - $key<br>";
      if ($p1 !== false) {
        if ($p2 !== false) {
          //echo "Warning: country $key found in <a target=_blank href=$url_main/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
          break;
        }
        $pcnt[$p1] = $val;
        //die ("!!!");
      }
    }
    if ($p2 !== false) continue;
    ksort($pcnt);
    if (count($pcnt)<2) {
      continue;
      //print_r($pcnt);
      //exit;
    }
    $best = array_values($pcnt)[0];
    if ((count($pcnt)>0) && ($best != $w[a_country])) {
      //if ($w[a_country] != 'ENG') {
      //  $q = "UPDATE rq_authors SET a_country='$best' WHERE a_id='$w[a_id]'";
      //  //echo "$q<br>";
      //  mysql_query($q);
      //  echo mysql_error();
      //}
      echo "<a target=_blank href=$url_main/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a> - $w[a_country] -> <a href='$url_main/work/integration/integration.php?act=set-cnt&eid=rq&id=$w[a_id]&cnt=$best' target=_blank>$best</a> (";
      print_r($pcnt);
      echo ")<br>";
    }
  }
  */

  // Build types
  // Truncate
  mysql_query("TRUNCATE TABLE rq_types");
  echo mysql_error();
  // Delete all stat columns
  for ($x=1; $x<1000; $x++) {
    //mysql_query("ALTER TABLE rq_types DROP COLUMN s$x");
    //echo mysql_error();
  }
  // Load types
  mysql_query("INSERT IGNORE INTO rq_types (a_group, a_type, a_cnt)
    SELECT a_group, a_type, COUNT(*) AS cnt FROM rq_authors 
    GROUP BY a_group, a_type");
  echo mysql_error();
  // Create new stat columns
  /*
  foreach ($ar_levels as $key => $val) {
    mysql_query("ALTER TABLE rq_types ADD s$val INT NOT NULL");
    echo mysql_error();
    // Load stats
    mysql_query("UPDATE rq_types 
      LEFT JOIN (SELECT a_type, COUNT(*) AS cnt 
      FROM rq_authors 
      WHERE a_rating<=$val GROUP BY a_type) a 
      USING (a_type) SET s$val=a.cnt");
    echo mysql_error();
  }
  */
  
  // Count atags
  mysql_query("INSERT IGNORE INTO rq_atags
    SELECT a_id, t_name, COUNT(*) AS cnt 
    FROM rq_authors 
    INNER JOIN rq_quotes USING (a_id) 
    INNER JOIN rq_qtags USING (q_id) 
    GROUP BY a_id, t_name");
  echo mysql_error();
  
  // Count quotes
  mysql_query("UPDATE rq_authors 
    LEFT JOIN (SELECT a_id, COUNT(*) AS cnt FROM rq_quotes GROUP BY a_id) q USING (a_id) 
    SET a_quotes=q.cnt");
  echo mysql_error();
    
?>

INSERT IGNORE INTO rq_countries
SELECT a_country, COUNT(*) AS cnt FROM rq_authors GROUP BY a_country;


UPDATE rq_tags LEFT JOIN (SELECT t_name, COUNT(*) AS cnt FROM rq_qtags GROUP BY t_name) q USING (t_name) SET q_cnt=q.cnt;

UPDATE rq_authors LEFT JOIN rq_atags USING (a_id) 
SET a_fil=1 WHERE t_type>0;

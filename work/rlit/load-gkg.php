<?
  include "../mysql.php";

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
  $r = mysql_query("SELECT * FROM rl_authors 
    WHERE tr_id=''
    ORDER BY a_rating");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $link = $w[a_name]."";
    $en = urlencode($link);
    $url = "https://www.google.ru/search?q=$en";
    $st = myfile($url, 1, "cache", "gsrc-$link.txt");
    //echo $st;
    echo "<a href='$url' target=_blank>$w[a_name]</a><br>";
    //if (preg_match('`<div class="Z_x8d"(.*?)</td>`s', $st, $match) === 1) {
      //echo "+";
      $st2 = $st;
      //echo "$st2<br>\r\n\r\n\r\n\r\n";
      //if ($i>10) break;
      $bad=0;
      if (preg_match('`Родился: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year1: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year1='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year1] != $m2[1]) echo "Year1 mismatch $w[a_year1] != $m2[1]<br>";
        if ((abs($w[a_year1]-$m2[1])>5) && ($w[a_year1]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Родилась: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year1: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year1='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year1] != $m2[1]) echo "Year1 mismatch $w[a_year1] != $m2[1]<br>";
        if ((abs($w[a_year1]-$m2[1])>5) && ($w[a_year1]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Умер: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year2: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year2='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year2] != $m2[1]) echo "Year2 mismatch $w[a_year2] != $m2[1]<br>";
        if ((abs($w[a_year2]-$m2[1])>5) && ($w[a_year2]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Умерла: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year2: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year2='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year2] != $m2[1]) echo "Year2 mismatch $w[a_year2] != $m2[1]<br>";
        if ((abs($w[a_year2]-$m2[1])>5) && ($w[a_year2]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if ($bad == 1) continue;
      if (preg_match('`<div class="Z_B5d">(.*?)</div>`s', $st2, $m) === 1) {
        echo "gs_id: <a href='cache/gsrc-$link.txt' target=_blank>$m[1]</a><br>";
        if ($w[gs_id] == '') mysql_query("UPDATE rl_authors SET gs_id='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<a class="fl" href="/url\\?q=(.*?)\\&amp`s', $st2, $m) > 0) {
        $m[1]=urldecode(urldecode($m[1]));
        if ($w[a_wiki] == '') mysql_query("UPDATE rl_authors SET a_wiki='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<img src="(.*?)"`s', $st2, $img) === 1) {
        if (!file_exists("apic/$a_id.jpg")) {
          echo "!!! PIC<br>";
          //myfile("http://www.100bestbooks.ru/pictures/autors/$img[1]", 0, "apic", "$a_id.jpg");
        }
      }
      if (preg_match('`<div class="Z_zdb Z_Pxg">(.*?)</div>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        echo "Prof: $m[1]<br>";
        mysql_query("UPDATE rl_authors SET a_prof='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<div class="Z_tXc">(.*?)<a class="fl"`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim(strip_tags($m[1])));
        echo "Desc: $m[1]<br>";
        if ($w[a_desc] == '') mysql_query("UPDATE rl_authors SET a_desc='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
  }

  // load gkg
  $r = mysql_query("SELECT * FROM rl_authors 
    WHERE tr_id!=''
    ORDER BY a_rating");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $link = $w[tr_id]."";
    $en = urlencode($link);
    $url = "https://www.google.ru/search?q=$en";
    $st = myfile($url, 1, "cache", "gsrc-$link.txt");
    //echo $st;
    echo "<a href='$url' target=_blank>$w[a_name]</a><br>";
    //if (preg_match('`<div class="Z_x8d"(.*?)</td>`s', $st, $match) === 1) {
      //echo "+";
      $st2 = $st;
      //echo "$st2<br>\r\n\r\n\r\n\r\n";
      //if ($i>10) break;
      $bad=0;
      if (preg_match('`Родился: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year1: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year1='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year1] != $m2[1]) echo "Year1 mismatch $w[a_year1] != $m2[1]<br>";
        if ((abs($w[a_year1]-$m2[1])>5) && ($w[a_year1]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Родилась: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year1: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year1='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year1] != $m2[1]) echo "Year1 mismatch $w[a_year1] != $m2[1]<br>";
        if ((abs($w[a_year1]-$m2[1])>5) && ($w[a_year1]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Умер: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year2: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year2='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year2] != $m2[1]) echo "Year2 mismatch $w[a_year2] != $m2[1]<br>";
        if ((abs($w[a_year2]-$m2[1])>5) && ($w[a_year2]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if (preg_match('`Умерла: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        preg_match('/(\d{4})/', $m[1], $m2);
        //echo "Year2: $m2[1]<br>";
        if ($w[a_years] == '') mysql_query("UPDATE rl_authors SET a_year2='$m2[1]' WHERE a_id='$w[a_id]'");
        elseif ($w[a_year2] != $m2[1]) echo "Year2 mismatch $w[a_year2] != $m2[1]<br>";
        if ((abs($w[a_year2]-$m2[1])>5) && ($w[a_year2]!=0) && ($m2[1]!=0)) $bad=1;
        echo mysql_error();
      }
      if ($bad == 1) continue;
      if (preg_match('`<div class="Z_B5d">(.*?)</div>`s', $st2, $m) === 1) {
        echo "gs_id: <a href='cache/gsrc-$link.txt' target=_blank>$m[1]</a><br>";
        if ($w[gs_id] == '') mysql_query("UPDATE rl_authors SET gs_id='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<a class="fl" href="/url\\?q=(.*?)\\&amp`s', $st2, $m) > 0) {
        $m[1]=urldecode(urldecode($m[1]));
        if ($w[a_wiki] == '') mysql_query("UPDATE rl_authors SET a_wiki='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<img src="(.*?)"`s', $st2, $img) === 1) {
        if (!file_exists("apic/$a_id.jpg")) {
          echo "!!! PIC<br>";
          //myfile("http://www.100bestbooks.ru/pictures/autors/$img[1]", 0, "apic", "$a_id.jpg");
        }
      }
      if (preg_match('`<div class="Z_zdb Z_Pxg">(.*?)</div>`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim($m[1]));
        echo "Prof: $m[1]<br>";
        mysql_query("UPDATE rl_authors SET a_prof='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      if (preg_match('`<div class="Z_tXc">(.*?)<a class="fl"`s', $st2, $m) === 1) {
        $m[1] = mysql_real_escape_string(trim(strip_tags($m[1])));
        echo "Desc: $m[1]<br>";
        if ($w[a_desc] == '') mysql_query("UPDATE rl_authors SET a_desc='$m[1]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
      //exit;
  }
?>

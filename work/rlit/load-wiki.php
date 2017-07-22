<?
  // This is works loader
  include "../mysql.php";
  include "style.php";

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
    echo $name;
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return $data;
    else return 1;
  }

  $q = "SELECT * FROM rl_authors WHERE a_wiki!=''
    ORDER BY a_id"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    //if ($w[a_id] != 221) continue;
    $w[a_wiki] = html_entity_decode(str_replace("http:", "https:", $w[a_wiki]));
    $st2 = myfile($w[a_wiki]);
    $len = strlen($st2);
    //echo "Loading $w[a_wiki] - $len<br>";
    //mysql_query("UPDATE rl_authors SET w_size='$len' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // Get english link
    //if (preg_match('`<li class="interlanguage-link interwiki-en"><a href="https://en.wikipedia.org/wiki/(.*?)" title="(.*?) — английский" lang="en" hreflang="en" class="interlanguage-link-target">English</a></li>`', $st2, $match) === 1) {
    if (preg_match('`<a href="https://en.wikipedia.org/wiki/(.*?)" title="(.*?) — английский" lang="en" hreflang="en" class="interlanguage-link-target">English</a></li>`', $st2, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
      $match[2] = mysql_real_escape_string($match[2]);
      if (strpos($match[2], ' (') !== false) {
        $match[2] = substr($match[2], 0, strpos($match[2], ' ('));
      }
      echo "$w[a_name] - $match[1] - $match[2]<br>";
      //mysql_query("UPDATE rl_authors SET a_ename='$match[2]', a_ewiki='$match[1]' WHERE a_id='$w[a_id]' AND a_ename = ''");
      echo mysql_error();
    }
    if (preg_match('`<title>(.*?) — Википедия</title>`', $st2, $m) > 0) {
      $m[1] = mysql_real_escape_string($m[1]);
      $m[1] = str_replace("'", "`", $m[1]);
      if (strpos($m[1], ' (') !== false) {
        $m[1] = substr($m[1], 0, strpos($m[1], ' ('));
      }
      if (strpos($m[1], ',') !== false) {
        $m[1] = substr($m[1], strpos($m[1], ',')+2)." ".substr($m[1], 0, strpos($m[1], ','));
      }
      echo "$w[a_name] - $m[1]<br>";
      mysql_query("UPDATE rl_authors SET w_name='$m[1]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
  }
?>
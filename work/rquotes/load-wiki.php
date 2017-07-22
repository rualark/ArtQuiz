<?
  include "../mysql.php";
  
  $bad_group = array('Книга', 'Компания', 'Рок группа', 'Религиозный текст', 'Фильм, 2007', 'Порода собак',
    'Телесериал', 'Книга, Платон', '1977 г. ‧ Драма/Романтический фильм ‧ 1 ч 33 мин', 'Гостиница', 'Пьеса, Фридрих Шиллер', '1979 г. ‧ Драма/Эротика ‧ 2 ч 36 мин', '2001 г. ‧ Драма/Романтический фильм ‧ 2 ч 1 мин');

  function translit($str){
    $translit=array(
      "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g","Д"=>"d","Е"=>"e","Ё"=>"e","Ж"=>"zh","З"=>"z","И"=>"i","Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n","О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t","У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch","Ш"=>"sh","Щ"=>"shch","Ъ"=>"","Ы"=>"y","Ь"=>"","Э"=>"e","Ю"=>"yu","Я"=>"ya",
      "а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"zh","з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l","м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h","ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"shch","ъ"=>"","ы"=>"y","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
      "A"=>"a","B"=>"b","C"=>"c","D"=>"d","E"=>"e","F"=>"f","G"=>"g","H"=>"h","I"=>"i","J"=>"j","K"=>"k","L"=>"l","M"=>"m","N"=>"n","O"=>"o","P"=>"p","Q"=>"q","R"=>"r","S"=>"s","T"=>"t","U"=>"u","V"=>"v","W"=>"w","X"=>"x","Y"=>"y","Z"=>"z"
    );
    $result=strtr($str,$translit);
    $result=preg_replace("/[^a-zA-Z0-9_]/i","-",$result);
    $result=preg_replace("/\-+/i","-",$result);
    $result=preg_replace("/(^\-)|(\-$)/i","",$result);
    return $result;
  }
  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    //curl_setopt($ch, CURLOPT_COOKIE, 'GOOGLE_ABUSE_EXEMPTION=ID=a6488a658b064ac8:TM=1486244439:C=r:IP=95.165.137.69-:S=APGng0tGgmZj8HYjbWJlxdzWvZfET3fyFw; DV=0rDjQejS0H8cXM2xWaQ_WXnGMSUWtAI; NID=96=Ph53vMIf1NixsOzX2MyQc0CQJOcrtCVYs3gvq3kwmapec-NLUnk9B0ymA8UJZsEO5TMqIT7glfhLflTq8lULAPGGnMOGCB98otq90DhCYQS9lGKsdNAyqLqak1dF4bXG');
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
    if (strpos($data, "<TITLE>302 Moved</TITLE>") !== false) {
      echo "Quitting! Detected 302 moved at $name";
      exit;
    }
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
    mysql_query("UPDATE rq_authors SET a_gkg_id='$gkg' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $gkg to $a_id";
    exit;
  }
  
  // load wiki
  $r = mysql_query("SELECT * FROM rq_authors 
    WHERE a_wiki != ''
    ORDER BY a_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $link2 = translit($w[a_wiki]);
    $st = myfile($w[a_wiki], 1, "cache", "$link2");
    $size = strlen($st);
    mysql_query("UPDATE rq_authors SET w_size='$size' WHERE a_id='$a_id'");
    echo mysql_error();
    // Get english link
    //if (preg_match('`<li class="interlanguage-link interwiki-en"><a href="https://en.wikipedia.org/wiki/(.*?)" title="(.*?) — английский" lang="en" hreflang="en" class="interlanguage-link-target">English</a></li>`', $st2, $match) === 1) {
    if (preg_match('`<a href="https://en.wikipedia.org/wiki/(.*?)" title="(.*?) — английский" lang="en" hreflang="en" class="interlanguage-link-target">English</a></li>`', $st, $match) === 1) {
      $match[1] = mysql_real_escape_string($match[1]);
      $match[2] = mysql_real_escape_string($match[2]);
      $match[2] = str_replace("'", "`", $match[2]);
      if (strpos($match[2], ' (') !== false) {
        $match[2] = substr($match[2], 0, strpos($match[2], ' ('));
      }
      //echo "$w[a_name] - $match[1] - $match[2]<br>";
      //mysql_query("UPDATE rq_authors SET a_ename='$match[2]', a_ewiki='$match[1]' WHERE a_id='$w[a_id]' AND a_ename = ''");
      echo mysql_error();
    }
    if (preg_match('`<title>(.*?) — Википедия</title>`', $st, $m) === 1) {
      $m[1] = mysql_real_escape_string($m[1]);
      $m[1] = str_replace("'", "`", $m[1]);
      if (strpos($m[1], ' (') !== false) {
        $m[1] = substr($m[1], 0, strpos($m[1], ' ('));
      }
      if (strpos($m[1], ',') !== false) {
        $m[1] = substr($m[1], strpos($m[1], ',')+2)." ".substr($m[1], 0, strpos($m[1], ','));
      }
      echo "$w[a_name] - $m[1]<br>";
      mysql_query("UPDATE rq_authors SET w_name='$m[1]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    //if ($i>30) exit;
  }
?>

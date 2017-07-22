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
  
  function mysql_query2($st) {
  }
  
  $a_id = $_GET[a_id];
  $gkg = $_GET[gkg];
  
  if ($a_id != 0) {
    mysql_query("UPDATE rq_authors SET a_gkg_id='$gkg' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $gkg to $a_id";
    exit;
  }
  
 // load gkg
  $r = mysql_query("SELECT * FROM rq_authors 
    WHERE 1=1
    ORDER BY a_id"); // a_id=1901
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $link = $w[a_name]."";
    $en = urlencode($link);
    $url = "https://www.google.ru/search?q=$en";
    $link2 = translit($link);
    //$link2 = iconv("utf-8", "windows-1251", $link);
    $st = myfile($url, 1, "cache", "gsrc-$link2.txt");
    //echo $st;
    echo "<li><a href='$url' target=_blank>$w[a_name]</a><br>";
    //if (preg_match('`<div class="Z_x8d"(.*?)</td>`s', $st, $match) === 1) {
    //echo "+";
    $st2 = $st;
    //echo "$st2<br>\r\n\r\n\r\n\r\n";
    //if ($i>10) break;
    $bad=0;
    
    preg_match('`Родился</a>: </span><span class="_Xbe kno-fv">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Родилась</a>: </span><span class="_Xbe kno-fv">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Родился: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Родилась: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m);
    if (count($m)>1) {
      $m[1] = mysql_real_escape_string(trim($m[1]));
      preg_match('/(\d{4})/', $m[1], $m2);
      echo "Year1: $m2[1]<br>";
      if ($w[a_year1_с] == 0) mysql_query("UPDATE rq_authors SET a_year1_с='$m2[1]' WHERE a_id='$w[a_id]'");
      elseif ($w[a_year1] != $m2[1]) echo "Year1 mismatch $w[a_year1] != $m2[1]<br>";
      if ((abs($w[a_year1]-$m2[1])>5) && ($w[a_year1]!=0) && ($m2[1]!=0)) $bad=1;
      echo mysql_error();
    }
    preg_match('`Умер</a>: </span><span class="_Xbe kno-fv">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Умерла</a>: </span><span class="_Xbe kno-fv">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Умер: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`Умерла: </span><span class="Z_tA">(.*?)</span>`s', $st2, $m);
    if (count($m)>1) {
      $m[1] = mysql_real_escape_string(trim($m[1]));
      preg_match('/(\d{4})/', $m[1], $m2);
      echo "Year2: $m2[1]<br>";
      if ($w[a_year2] == 0) mysql_query2("UPDATE rq_authors SET a_year2='$m2[1]' WHERE a_id='$w[a_id]'");
      elseif ($w[a_year2] != $m2[1]) echo "Year2 mismatch $w[a_year2] != $m2[1]<br>";
      if ((abs($w[a_year2]-$m2[1])>5) && ($w[a_year2]!=0) && ($m2[1]!=0)) $bad=1;
      echo mysql_error();
    }
    if ($bad == 1) {
      echo "Bad years!<br>";
      continue;
    }
    
    preg_match('`<div class="_gdf kno-fb-ctx">(.*?)</div>`s', $st2, $m);
    if (count($m)<2) 
    preg_match('`<div class="Z_zdb Z_Pxg">(.*?)</div>`s', $st2, $m);
    if (count($m)>1) {
      $m[1] = mysql_real_escape_string(strip_tags(trim($m[1])));
      echo "Prof: $m[1]<br>";
      if (in_array($m[1], $bad_group)) $bad = 1;
      else mysql_query2("UPDATE rq_authors SET a_type2='$m[1]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    if ($bad == 1) {
      echo "Bad prof!<br>";
      continue;
    }
    preg_match('`<div class="kno-ecr-pt kno-fb-ctx" (.*?)>(.*?)</div>`s', $st2, $m);
    if (count($m)<3)
    preg_match('`<div class="Z_B5d"(.*?)>(.*?)</div>`s', $st2, $m);
    if (count($m)>2) {
      echo "gs_id: <a href='cache/gsrc-$link.txt' target=_blank>$m[2]</a><br>";
      if ($w[gs_id] == '') mysql_query2("UPDATE rq_authors SET gs_id='$m[2]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    
    preg_match('`<a class="fl" href="/url\\?q=(.*?)\\&amp`s', $st2, $m);
    if (count($m)<2)
    preg_match('`href="https://ru.wikipedia.org/wiki/%(.*?)"`s', $st2, $m);
    if (count($m)>1) {
      $m[1]=urldecode("%".$m[1]);
      if ($w[a_wiki] == '') {
        echo "New wiki $m[1]<br>";
        mysql_query2("UPDATE rq_authors SET a_wiki='https://ru.wikipedia.org/wiki/$m[1]' WHERE a_id='$w[a_id]'");
      }
      echo mysql_error();
    }
    
    preg_match('`<div class="kno-rdesc(.*?)>(.*?)</span>`s', $st2, $m);
    if (count($m)<3) 
    preg_match('`<div class="Z_tXc"(.*?)>(.*?)<a class="fl"`s', $st2, $m);
    if (count($m)>2) {
      $m[2] = mysql_real_escape_string(trim(strip_tags($m[2])));
      echo "Desc: $m[2]<br>";
      mysql_query2("UPDATE rq_authors SET a_desc2='$m[2]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    
    preg_match("`var _image_src='data:image/(.*?)';`s", $st2, $m);
    if (count($m)>1) {
      if (!file_exists("apic/$w[a_id].jpg")) {
        //file_put_contents("apic/$w[a_id].jpg", base64_decode("data:image/$m[1]"));
        echo "Saved image<br>";
      }
    }
    //exit;
    //if ($i>3700) break;
  }
?>

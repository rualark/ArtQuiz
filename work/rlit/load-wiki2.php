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
    mysql_query("UPDATE rl_authors SET a_ename='', a_ewiki='', a_wiki='', a_desc2='', gs_id='', w_name='' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Cleared $a_id";
    exit;
  }
  
  // load wiki
  $r = mysql_query("SELECT * FROM rl_authors 
    WHERE w_name != '' AND a_name != w_name
    ORDER BY a_rating");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $w[w_name] = str_replace('ё', 'е', $w[w_name]);
    $w[a_name] = str_replace('ё', 'е', $w[a_name]);
    if (strpos($w[a_name], ' (') !== false) $w[a_name] = substr($w[a_name], 0, strpos($w[a_name], ' ('));
    if (strpos($w[w_name], ' (') !== false) $w[w_name] = substr($w[w_name], 0, strpos($w[w_name], ' ('));
    $sa = explode(' ', $w[a_name]);
    $surname = $sa[count($sa)-1];
    $letter = mb_substr($w[a_name], 0, 1);
    $sa2 = explode(' ', $w[w_name]);
    $surname2 = $sa2[count($sa2)-1];
    $letter2 = mb_substr($w[w_name], 0, 1);
    $good = 0;
    if (($surname == $surname2) && ($letter == $letter2) ) $good = 1;
    if (mb_stripos($w[a_name], $w[w_name]) !== false) $good = 1;
    if (mb_stripos($w[w_name], $w[a_name]) !== false) $good = 1;
    $found = 1;
    for ($x=0; $x<count($sa); $x++) if ($sa[$x] != '') if (mb_stripos($w[w_name], $sa[$x]) === false) $found = 0;
    if ($found) $good = 1;
    $found = 1;
    for ($x=0; $x<count($sa2); $x++) if (mb_stripos($w[a_name], $sa2[$x]) === false) $found = 0;
    if ($found) $good = 1;
    //if ($good) echo "<b>";
    if (!$good) {
      if (levenshtein($w[a_name], $w[w_name]) < 400) {
        echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'>$w[a_name]</a> - <a target=_blank href='https://www.google.com/search?q=$w[w_name]'>$w[w_name]</a></b> ";
        echo " <a href=?a_id=$w[a_id] target=_blank><img src=i/cross.png height=20></a>";
        echo "<br>";
      } else if ($w[a_rating]>5093) {
        //mysql_query("UPDATE rl_authors SET a_ename='', a_ewiki='', a_wiki='', a_desc2='', gs_id='', w_name='' WHERE a_id='$w[a_id]'");
        echo mysql_error();
      }
    }
  }
?>

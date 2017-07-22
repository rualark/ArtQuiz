<?
  include "../mysql.php";
  include "../url.php";
  
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
  $a_id2 = $_GET[a_id2];
  $gkg = $_GET[gkg];
  
  if ($a_id != 0) {
    echo "Moving author...<br>";
    $r = mysql_query("SELECT * FROM rq_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    if ($w[a_id] != $a_id) die ("<font color=red>Cannot find first author</font>");
    echo "First author: [$a_id] $w[a_name] - $w[a_quotes] quotes - $w[a_rating] rating<br>";
    $r2 = mysql_query("SELECT * FROM rq_authors WHERE a_id='$a_id2'");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    if ($w2[a_id] != $a_id2) die ("<font color=red>Cannot find second author</font>");
    echo "Second author: [$a_id2] $w2[a_name] - $w2[a_quotes] quotes - $w2[a_rating] rating<br>";
    // Find best incarnation
    if ($w[a_rating] > $w2[a_rating]) {
      $a_id = $w[a_id2];
      $a_id2 = $w[a_id];
      echo "Selected second<br>";
    }
    // Move quotes
    $q = "UPDATE rq_quotes SET a_id='$a_id' WHERE a_id='$a_id2'";
    echo "$q<br>";
    mysql_query($q);
    echo mysql_error();
    $q = "DELETE FROM rq_authors WHERE a_id='$a_id2'";
    echo "$q<br>";
    mysql_query($q);
    echo mysql_error();
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
    $sa = explode(' ', $w[a_name]);
    $cond = '';
    for ($x=0; $x<count($sa); $x++) if ($sa[$x] != '') {
      if ($cond != '') $cond .= " AND ";
      $cond .= "a_name LIKE BINARY '%$sa[$x]%'";
    }
    $surname = $sa[count($sa)-1];
    $letter = mb_substr($w[a_name], 0, 1);
    $q = "SELECT * FROM rq_authors 
      WHERE a_id != $w[a_id] AND (
      a_name LIKE BINARY '$letter% $surname'
      OR a_name LIKE BINARY '$surname %$letter%'
      OR a_name = '$surname'
      OR ($cond))
    ";
    $q = "SELECT * FROM rq_authors 
      WHERE a_id > $w[a_id] AND w_name='$w[w_name]'
    ";
    //echo "$q<br>";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if (($w[a_year1] != 0) && ($w2[a_year1] != 0) && (abs($w[a_year1] - $w2[a_year1]) > 8)) continue;
      echo "$w[w_name] ";
      echo "<a href=$url_main/rquotes/authors.php?a_id=$w[a_id] target=_blank>$w[a_name]</a> <a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img style='opacity: 0.3' valign=middle height=14 src=i/google.png></a> - ";
      echo "<a href=$url_main/rquotes/authors.php?a_id=$w2[a_id] target=_blank>$w2[a_name]</a> <a target=_blank href='https://www.google.com/search?q=$w2[a_name]'><img style='opacity: 0.3' valign=middle height=14 src=i/google.png></a>";
      echo " <a href='?a_id=$w[a_id]&a_id2=$w2[a_id]' target=_blank><img src=i/cross.png height=16></a>";
      echo "<br>";
    }
    //if ($i>30) exit;
  }
?>

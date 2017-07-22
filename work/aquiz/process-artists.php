<?
   $translit = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'yo',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'j',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'x',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shh',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'\'',
            'э' => 'e\'',   'ю' => 'yu',  'я' => 'ya',
            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'J',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C',
            'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH',
            'Ь' => '\'',  'Ы' => 'Y\'',   'Ъ' => '\'\'',
            'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA',
        );
  include "lib.php";
  start_time();
  $q = "SELECT * FROM aq_artists";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $st = preg_replace("/\[[^]]+\]/","", $w[a_bio_en]);
    $st = str_replace("</p>", "", $st);
    $st = str_replace("<p>", "\r\n", $st);
    if ($w[a_name2] == "") {
      if (strpos($w[a_name], ',')>0) {
        $w[a_name2] = substr($w[a_name], 0, strpos($w[a_name], ','));
      } else {
        $an2a = explode(' ', $w[a_name]);
        if ($an2a[count($an2a)-1] == 'art') {
          $w[a_name2] = $w[a_name];
        } else {
          $w[a_name2] = $an2a[count($an2a)-1];
        }
      }
      //echo "/$w[a_name2]/$w[a_name]/<br>";
      mysql_query("UPDATE aq_artists SET a_name2='$w[a_name2]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    if ($w[a_bio_en] != $st) {
      echo "<font color=green>$w[a_bio_en]</font><br>$st<br>---------------------------<br>";
      $st = str_replace("'", "`", $st);
      mysql_query("UPDATE aq_artists SET a_bio_en='$st' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    $w[a_years] = str_replace(' ', '', $w[a_years]);
    $w[a_years] = str_replace('–', '-', $w[a_years]);
    mysql_query("UPDATE aq_artists SET a_years='$w[a_years]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    if ($w[a_start] == 0) {
      $sa = explode("-", $w[a_years]);
      $sign1 = 1;
      if (strpos($sa[0], "BC") !== false) {
        $sign1 = -1;
        $sa[0] = str_replace("BC", "", $sa[0]);
      }
      $sign2 = 1;
      if (strpos($sa[1], "BC") !== false) {
        $sign2 = -1;
        $sa[1] = str_replace("BC", "", $sa[1]);
      }
      echo "$w[a_years]:$sa[0]:$sa[1]<br>";
      mysql_query("UPDATE aq_artists SET a_start=$sign1*'$sa[0]', a_stop=$sign2*'$sa[1]' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    // find similar
    if (strpos($w[a_name], " art") === false) {
      $na = explode(" ", str_replace(",", "", $w[a_name]));
      $q = "SELECT * FROM aq_artists WHERE a_name LIKE '%$na[0]%' AND a_name LIKE '%$na[1]%' AND a_id != $w[a_id]";
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        echo "$w[a_name] ($w[a_id]) is similar to $w2[a_name] ($w2[a_id])<br>";
      }
      // find similar name2
      $q = "SELECT * FROM aq_artists WHERE a_name2='$w[a_name2]' AND a_id != $w[a_id]";
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        echo "$w[a_name] ($w[a_id]) has similar name2 ($w[a_name2]) to $w2[a_name] ($w2[a_id])<br>";
      }
    }
    // load tags
    $ta = explode(",", $w[a_genre]);
    for ($x=0; $x<count($ta); $x++) {
      $tag = trim($ta[$x]);
      if ($tag != '') $tagc[$tag]++;
    }
  }
  
  // delete old tags
  //$r = mysql_query("DELETE FROM aq_tags WHERE t_desc='' AND map_x2=0");
  //echo mysql_error();
  mysql_query("UPDATE aq_tags SET t_count=0");
  echo mysql_error();
  
  // process t_desc
  $q = "SELECT * FROM aq_tags";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $st = preg_replace("/\[[^]]+\]/", "", $w[t_desc]);
    if ($w[t_desc] != $st) {
      echo "<font color=green>$w[t_desc]</font><br>$st<br>---------------------------<br>";
      $st = str_replace("'", "`", $st);
      mysql_query("UPDATE aq_tags SET t_desc='$st' WHERE t_name='$w[t_name]'");
      echo mysql_error();
    }
  }
  
  foreach ($tagc as $tag => $cnt) {
    //$r = mysql_query("INSERT INTO aq_tags VALUES('$tag', '', '$cnt')
    $r = mysql_query("UPDATE aq_tags SET t_count = '$cnt' WHERE t_name='$tag'");
    echo mysql_error();
  }
  
  // count levels
  $level_names = array(4 => 'Easy', 3 => 'Normal', 2 => 'Hard', 1 => 'Very hard', 0 => 'Insane');
  $anum=0;
  $pnum=0;
  $q = "SELECT a_rating, COUNT(*) as cnt, SUM(p_num) as psum FROM aq_artists GROUP BY a_rating ORDER BY a_rating DESC";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $anum += $w[cnt];
    $pnum += $w[psum];
    echo "$w[a_rating] => '".$level_names[$w[a_rating]]." ($anum artists, $pnum paintings)',<br>";
  }
  
  /*
  // Convert painting names
  $q = "SELECT * FROM aq_paintings";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $translit2 = array_flip($translit);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $tra = strtr($w[p_desc_ru], $translit2);
    if ($tra != '') echo "$tra<br>";
    //$word = strtr('prochee', array_flip($translit));
    //$word = strtr('прочее', $translit);
  }
  */
  
  stop_time();
?>

<p>How to import paintings:
<li>Rename (transliterate from French, Spanish, German, Russian; remove all except letters, numbers and "_-() ,")
<li>Try to BatchResize
<li>Run load-src2 without mysql
<li>Run load-src2 with mysql
<li>Run imgsize

<p>After deleting duplicate paintings run imgsize.php
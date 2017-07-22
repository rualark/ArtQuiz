<?
  // This is main loader
  include "mysql.php";
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  function load_poems($url, $dr=0) {
    $fa = myfile($url);
    $sf[0] = "href='name_info.php?id=";
    //$sf[1] = "<span itemprop=\"name\">";
    $sf[2] = "href='item_info.php?id=";
    $sf[3] = "<span itemprop='name'>";
    $sf[4] = "</TD><TD class='vline-year'>";
    $sf[5] = "</TD><TD class='vline'><b>";
    $sf[6] = "</TD><TD class='vline'>";
    $sf[7] = "</TD><TD>";
    $kname[0] = 'a_id';
    //$kname[1] = 'a_name';
    $kname[2] = 'w_id';
    $kname[3] = 'w_name';
    $kname[4] = 'w_years';
    $kname[5] = 'w_rating';
    $kname[6] = 'w_rating2';
    $kname[7] = 'w_votes';
    $sfe[0] = "'";
    $sfe[1] = "<";
    $sfe[2] = "'";
    $sfe[3] = "<";
    $sfe[4] = "<";
    $sfe[5] = "<";
    $sfe[6] = "<";
    $sfe[7] = "<";
    foreach ($fa as $st) {
      if (strpos($st, $sf[0])>0) {
        $st1 = $st;
        $q = "";
        $a_id = 0;
        $no_author = 0;
        foreach ($sf as $key => $sf0) {
          $p1 = strpos($st1, $sf0);
          $st1 = substr($st1, $p1+strlen($sf0));
          $value = substr($st1, 0, strpos($st1, $sfe[$key]));
          if ($key == 5) $value -= $dr;
          if ($key == 0) {
            $r3 = mysql_query("SElECT * FROM l_authors WHERE a_id='$value'");
            $n3 = mysql_numrows($r3);
            if ($n3 == 0) $no_author = 1;
          }
          echo "$key = '$value'<br>";
          if ($q != "" ) $q .= ",";
          $q .= "'$value'";
        }
        if ($no_author == 0) {
          $q2 = "INSERT INTO l_works VALUES($q, '', '')";
          echo $q2;
          mysql_query($q2);
          echo mysql_error();
        }
      }
    }
  }
  
  function load_poets($url) {
    $fa = myfile($url);
    $sf[0] = "href='name_info.php?id=";
    $sf[1] = "<span itemprop='name'>";
    $sf[2] = "</TD><TD class='vline'>";
    $sf[3] = "</TD><TD>";
    $kname[0] = 'a_id';
    $kname[1] = 'a_name';
    $kname[2] = 'a_rating';
    $kname[3] = 'a_works';
    $sfe[0] = "'";
    $sfe[1] = "<";
    $sfe[2] = "<";
    $sfe[3] = "<";
    foreach ($fa as $st) {
      if (strpos($st, $sf[1])>0) {
        $st1 = $st;
        $q = "";
        foreach ($sf as $key => $sf0) {
          $p1 = strpos($st1, $sf0);
          $st1 = substr($st1, $p1+strlen($sf0));
          $value = substr($st1, 0, strpos($st1, $sfe[$key]));
          if ($key == 0) $a_id=$value;
          echo "$key = '$value'<br>";
          if ($q != "" ) $q .= ",";
          $q .= "'$value'";
        }
        $q2 = "REPLACE INTO l_authors VALUES($q, '', '')";
        echo $q2;
        mysql_query($q2);
        echo mysql_error();
        //load_poet($a_id);
      }
    }
  }
  
  function load_poem($w_id) {
    $url = "http://www.100bestpoems.ru/item_info.php?id=$w_id";
    $sf1 = "read_book.php?item_id=";
    $sf2 = "<span itemprop=\"citation\">";
    $sf3 = "</span>";
    $sf4 = "index.php?tag_id=";
    $sf5 = "href='index.php?lang_id=";
    $fa = myfile($url);
    foreach ($fa as $i => $st) {
      if (strpos($st, $sf1)>0) return;
      while (strpos($st, $sf4)>0) {
        $st = substr($st, strpos($st, $sf4)+strlen($sf4));
        $tag_id = substr($st, 0, strpos($st, '\''));
        $st = substr($st, strpos($st, '>')+1);
        $tag = substr($st, 0, strpos($st, '<'));
        mysql_query("REPLACE INTO l_tags VALUES('$w_id', '$tag_id', '$tag')");
        echo mysql_error();
      }
      if (strpos($st, $sf5)>0) {
        $st = substr($st, strpos($st, $sf5)+strlen($sf5));
        $st = substr($st, strpos($st, '>')+1);
        $tag = substr($st, 0, strpos($st, '<'));
        mysql_query("UPDATE l_works SET w_lang = '$tag' WHERE w_id='$w_id'");
        echo mysql_error();
      }
      if (strpos($st, $sf2)>0) {
        $text = $fa[$i+1];
        $text = substr($text, 0, strpos($text, $sf3));
        $text = str_replace("<br>", "\n", $text);
        $text = trim(str_replace("'", "`", $text));
        //echo "$text";
        mysql_query("UPDATE l_works SET w_text = '$text' WHERE w_id='$w_id'");
        echo mysql_error();
      }
    }
  }
  
  function load_poet($a_id) {
    $url = "http://www.100bestpoems.ru/name_info.php?id=$a_id";
    $sf1 = "";
    $fa = myfile($url);
    foreach ($fa as $i => $st) {
    }
  }
  
  load_poets("http://www.100bestpoems.ru/names.php?npage=1");
  load_poets("http://www.100bestpoems.ru/names.php?npage=2");
  
  load_poems("http://www.100bestpoems.ru/index.php?main_list=1&page=1");
  load_poems("http://www.100bestpoems.ru/index.php?main_list=1&page=2");
  load_poems("http://www.100bestpoems.ru/index.php?main_list=1&page=3");
  
  load_poems("http://www.100bestpoems.ru/index.php?main_list=0&page=1", 1000);
  load_poems("http://www.100bestpoems.ru/index.php?main_list=0&page=2", 1000);
  load_poems("http://www.100bestpoems.ru/index.php?main_list=0&page=3", 1000);
  load_poems("http://www.100bestpoems.ru/index.php?main_list=0&page=4", 1000);
  
  $r = mysql_query("SELECT * FROM l_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //load_poem($w[w_id]);
  }
?>
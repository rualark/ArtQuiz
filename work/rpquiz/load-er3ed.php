<?
  // This is main loader
  include "mysql.php";
  
  $first_id=100000;
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
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
          //mysql_query($q2);
          echo mysql_error();
        }
      }
    }
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
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  function load_poets($url) {
    GLOBAL $aname, $last_lev;
    $fa = myfile($url);
    $sf1 = "<li><a href=\"";
    $sf2 = "Избранное";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf2) !== false) break;
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strlen($sf1));
        $link = substr($link, 0, strpos($link, "\""));
        $name = strip_tags($st);
        $sa = explode(" ", $name);
        if (count($sa) == 2) $name = "$sa[1] $sa[0]";
        $key = find_closest($name, $aname);
        if ($last_lev>1) $key = 0;
        echo "<b>$name - $link</b><br>";
        mysql_query("UPDATE l_authors SET a_er3ed='$link' WHERE a_id='$key'");
        echo mysql_error();
        if ($key>0) load_poet($name, $link, $key);
        else {
          //mysql_query("INSERT INTO l_authors VALUES('','$name',0,0,0,0)");
        }
      }
    }
  }
  
  function load_poet($a_name, $link, $a_id, $w_name="") {
    GLOBAL $wname, $last_lev;
    $url = "http://er3ed.qrz.ru/$link";
    $sf1 = "<li><h3><a href=\"";
    $sf2 = "<pre>";
    $sf3 = "<img src=\"";
    $sf4 = "<li><h4><a href=\"";
    $fa = myfile($url);
    $started = 0;
    $c = count($fa);
    $alive=0;
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      preg_match_all('/(\d{4})/', $st, $matches);
      //print_r($matches);
      if (strpos($st, "class=\"life\"") !== false) $alive=1;
      if ((count($matches[0])>1) && (strpos($st, "<span class=\"up\">") !== false)) {
        echo "<a href=$url>$a_name</a> ".$matches[0][0]."-".$matches[0][1]."<br>";
        if ($alive>0) $matches[0][1]=0;
        mysql_query("UPDATE l_authors SET a_year1='".$matches[0][0]."', a_year2='".$matches[0][1]."' WHERE a_id='$a_id'");
        echo mysql_error();
        return;
      }
      if ($started == 2) {
        if (strpos($st, "</pre>") !== false) {
          if (strpos($fa[$i+1], "<p class=\"date\">") !== false) {
            $year = iconv("windows-1251", "utf-8", $fa[$i+2]);
            echo "<b>!!!! $w_name - $year</b><br>";
            //echo "<pre>$poem</pre>";
            //mysql_query("INSERT INTO l_works VALUES('$a_id','','$w_name','$year',-2000,0,0,'$poem','Русский','')");
            echo mysql_error();
            return;
          }
        }
        $poem .= trim(str_replace("'", "`", strip_tags($st)))."\r\n";
      }
      if (strpos($st, $sf3) !== false) {
        if ($w_name == "") {
          $img_link = substr($st, strpos($st, $sf3)+strlen($sf3));
          $img_link = substr($img_link, 0, strpos($img_link, "\""));
          //echo "IMG: $img_link<br>";
          myfile("http://er3ed.qrz.ru/$img_link", 0, 'apic', "$a_id.jpg");
        }
      }
      if ((strpos($st, $sf1) !== false) || (strpos($st, $sf4) !== false)) {
        $started = 1;
        if (strpos($st, $sf1) !== false) $link = substr($st, strlen($sf1));
        if (strpos($st, $sf4) !== false) $link = substr($st, strlen($sf1));
        $link = substr($link, 0, strpos($link, "\""));
        $name = str_replace("'", "`", strip_tags($st));
        if ($w_name != "") $name = $w_name . " - " . $name;
        $w_id = find_closest(mb_strtolower($name), $wname[$a_id]);
        $good = 0;
        if ($last_lev<2) $good = 1;
        if (($last_lev>1) && ($last_lev<10) && (mb_strlen($name)>$last_lev*2)) $good = 1;
        if ($good == 0) {
          //if ($link[0] == '#') load_poem($name, $link, $a_id, $url);
          //else
          if (strpos($link, '#')>0) load_poem($name, substr($link, strpos($link, '#')), $a_id, "http://er3ed.qrz.ru/".substr($link, 0, strpos($link, '#')));
          else {
            //echo "???? $link - $name<br>";
            load_poet($a_name, $link, $a_id, $name);
          }
        }
      }
    }
    //exit;
  }
  
  function load_poem($name, $link, $a_id, $url2) {
    GLOBAL $first_id;
    echo "$name - $link - $url2<br>";
    $sf1 = "id=\"".substr($link, 1)."\"";
    $fa = myfile($url2);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = iconv("windows-1251", "utf-8", $fa[$i]);
      if ((strpos($st, $sf1) !== false)) {
        $started = 1;
        $i += 1;
        continue;
      }
      if (($started>0)) {
        if (strpos($st, "</pre>") !== false) {
          if (strpos($fa[$i+1], "<p class=\"date\">") !== false) {
            $year = iconv("windows-1251", "utf-8", $fa[$i+2]);
            break;
          }
        }
        $poem .= trim(str_replace("'", "`", strip_tags($st)))."\r\n";
      }
    }
    echo "<b>$name - $year</b><br>";
    //echo "<pre>$poem</pre>";
    //mysql_query("INSERT INTO l_works VALUES('$a_id','','$name','$year',-2000,0,0,'$poem','Русский','')");
    echo mysql_error();
  }
  
  // load names
  $r = mysql_query("SELECT * FROM l_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    $name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
  }
  // load names
  $r = mysql_query("SELECT * FROM l_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
  }

  load_poets("http://er3ed.qrz.ru/menu.htm");
?>
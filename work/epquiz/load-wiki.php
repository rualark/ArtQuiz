<?
  // This is main loader
  include "../mysql.php";
  include "lib.php";
  include "style.php";
  start_time();
  
  $country_map = array(
    "Vietnamese" => "VNM",
    "Danish" => "DNK",
    "Slovenian" => "SVN",
    "Iranian" => "IRN",
    "Greek" => "GRC",
    "Roman" => "ROM",
    "Russian" => "RUS",
    "USSR" => "RUS",
    "African" => "USA",
    "American" => "USA",
    "Polish" => "POL",
    "Japanese" => "JAP",
    "English" => "ENG",
    "British" => "ENG",
    "Scottish" => "SCO",
    "Irish" => "IRL",
    "French" => "FRA",
    "Italian" => "ITA",
    "Spanish" => "SPA",
    "Portuguese" => "POR",
    "German" => "DEU",
    "Israeli" => "ISR",
    "Australian" => "AUS",
    "Pakistani" => "PAK",
    "Canadian" => "CAN",
    "Indian" => "IND",
    "Colombian" => "COL",
    "Chilean" => "CHL",
  );
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    //$ln = iconv("utf-8", "windows-1251//translit", $ln);
    $ln = str2url($ln);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("'", "", $ln);
    $ln = str_replace("\\", "", $ln);
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

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $last_lev = 100000;
    if (!is_array($arr)) return 0;
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
  
  function load_poets() {
    GLOBAL $country_map, $awiki, $aname, $ayears, $url_main;
    $sf1 = 'class="image"';
    $sf2 = 'disambiguation page';
    $sf3 = ' - Search results - Wikipedia';
    $sf4 = '<link rel="canonical" href="';
    $sf5 = '<h2><span class="mw-headline" id="Notes">';
    $sf6 = 'src="//upload.wikimedia.org/wikipedia/';
    $sf7 = '<h2><span class="mw-headline" id="References">';
    $sf8 = '<h2><span class="mw-headline" id="Sources">';
    $sf9 = '<h2><span class="mw-headline" id="External links">';
    $sf10 = '<h2><span class="mw-headline" id="Citations">';
    $sf11 = '<th scope="row" class="navbox-group">';
    $r = mysql_query("SELECT * FROM ep_authors WHERE a_state=0 ORDER BY w_size desc");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Автор";
    echo "<th>Год";
    echo "<th>Год";
    echo "<th>";
    echo "<th>";
    for ($x=0; $x<$n; $x++) {
      $wa = mysql_fetch_assoc($r);
      $country = "";
      $img2 = "";
      $url = str_replace(" ", "%20", "http://en.wikipedia.org/w/index.php?search=".trim($wa[a_name]));
      if ($wa[a_wiki] != "") $url = $wa[a_wiki];
      $fa = myfile($url);
      //echo "$url";
      $st = implode($fa);
      $w_size = strlen($st);
      if ($wa[w_size] == 0) {
        mysql_query("UPDATE ep_authors SET w_size='$w_size' WHERE a_id='$wa[a_id]'");
      }
      $pos2 = 100000000;
      $country = '';
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key poet");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key male poet");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key writer");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key essayist");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key women poet");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key author");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      foreach ($country_map as $key => $val) {
        $pos1 = strpos($st, "$key folklore");
        if ($pos1 === false) continue;
        if ($pos1 < $pos2) {
          $country = $val;
          $pos2 = $pos1;
        }
      }
      echo "<tr>";
      echo "<td><a target=_blank href='$url_main/epquiz/authors.php?a_id=$wa[a_id]'>";
      if (strpos($st, $sf2) !== false) {
        echo "<font color=green>";
      }
      if (strpos($st, $sf3) !== false) {
        echo "<font color=red>";
      }
      if (strpos($st, $sf4) !== false) {
        $canon = substr($st, strpos($st, $sf4)+strlen($sf4));
        $canon = substr($canon, 0, strpos($canon, '"'));
        if ($wa[a_wiki] == '') {
          //mysql_query("UPDATE ep_authors SET a_wiki='$canon' WHERE a_id='$wa[a_id]'");
          echo mysql_error();
        }
      }
      if ($wa[a_wiki] != '') {
        $sa = explode("/", $wa[a_wiki]);
        $wiki_id = $sa[count($sa)-1];
        //echo "$wiki_id ";
        mysql_query("UPDATE ep_authors SET a_wiki_id='$wiki_id' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      }
      echo "$wa[a_name]</a>";
      echo " <a target=_blank href='$url'><img valign=top height=18 style='opacity:0.2' src=i/wiki.png></a> ";
      echo " <a target=_blank href='https://www.google.com/search?q=$wa[a_name]&a_id=$wa[a_id]'><img valign=top height=18 style='opacity:0.1' src=i/google.png></a> ";
      if ((strpos($st, $sf6) !== false) && ($img2 == "")) {
        $img = substr($st, strpos($st, $sf6));
        $img = substr($img, strpos($img, '"')+1);
        $img = substr($img, 0, strpos($img, '"'));
        $bad = 0;
        if (strpos($img, "Broom") !== false) $bad = 1;
        if (strpos($img, "Wikisource-logo") !== false) $bad = 1;
        //echo "$bad";
        if (strpos($img, "Flag_of") !== false) $bad = 1;
        if (strpos($img, "Disambig") !== false) $bad = 1;
        if (strpos($img, "_star_") !== false) $bad = 1;
        if (strpos($img, "_Star_") !== false) $bad = 1;
        if (strpos($img, "Images.png") !== false) $bad = 1;
        if (strpos($img, "Image-silk.png") !== false) $bad = 1;
        if (strpos($img, "Wiki_letter_") !== false) $bad = 1;
        if (strpos($img, "-Tools") !== false) $bad = 1;
        if (strpos($img, "Help-") !== false) $bad = 1;
        if (strpos($img, "Searchtool") !== false) $bad = 1;
        if (strpos($img, "-Aquote") !== false) $bad = 1;
        if (strpos($img, "Ambox_") !== false) $bad = 1;
        if (strpos($img, "Medal_") !== false) $bad = 1;
        if (strpos($img, "_recycle") !== false) $bad = 1;
        if (strpos($img, "Question_") !== false) $bad = 1;
        if (strpos($img, "Prize-") !== false) $bad = 1;
        if (strpos($img, "Medal-") !== false) $bad = 1;
        if (strpos($img, "Hero_") !== false) $bad = 1;
        if (strpos($img, "Colonet_") !== false) $bad = 1;
        if (strpos($img, "Orden_") !== false) $bad = 1;
        if (strpos($img, "Zaslugi") !== false) $bad = 1;
        if (strpos($img, "Orderredbannerlabor_rib") !== false) $bad = 1;
        if (strpos($img, "Quill_") !== false) $bad = 1;
        if (strpos($img, "Sound-") !== false) $bad = 1;
        if (strpos($img, "Order") !== false) $bad = 1;
        //echo "$bad";
        if (strpos($img, "_lenin_") !== false) $bad = 1;
        if (strpos($img, "Ribbon_") !== false) $bad = 1;
        if (strpos($img, "Ribbon.") !== false) $bad = 1;
        if (strpos($img, "-logo.") !== false) $bad = 1;
        if (strpos($img, "_rib") !== false) $bad = 1;
        if (strpos($img, "Userinfo.") !== false) $bad = 1;
        if (strpos($img, "Hammon_address") !== false) $bad = 1;
        if (strpos($img, "3_stars") !== false) $bad = 1;
        if (strpos($img, "-Wiki") !== false) $bad = 1;
        if (strpos($img, "Crystal_Clear_") !== false) $bad = 1;
        if (strpos($img, "-Ribbon") !== false) $bad = 1;
        //echo "$bad";
        if (strpos($img, "/40px-") !== false) $bad = 1;
        if (strpos($img, "/10px-") !== false) $bad = 1;
        if (strpos($img, "_signatur") !== false) $bad = 1;
        if (strpos($img, "65_years") !== false) $bad = 1;
        if (strpos($img, "-kmix") !== false) $bad = 1;
        if (strpos($img, "_flag_") !== false) $bad = 1;
        if (strpos($img, "Padlock-silver.svg") !== false) $bad = 1;
        if (strpos($img, "%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D0%B8_%D0%B3%D0%BE%D0%B4%D0%B0") !== false) $bad = 1;
        if (strpos($img, "%D0%93%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_%D0%BF%D1") !== false) $bad = 1;
        if ($bad == 0) {
          $img2 = $img;
        }
      }
      echo "<td>$wa[a_year1]";
      echo "<td>$wa[a_year2]";
      echo "<td>";
      if (!file_exists("apic/".$wa[a_id].".jpg")) {
        //echo "<img height=100 src='$img2'>";
        //myfile("http:$img2", 0, "apic2", "$wa[a_id].jpg");
      }
      //echo "<td>$country";
      if ($wa[a_country] == "") {
        //mysql_query("UPDATE ep_authors SET a_country='$country' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      } else echo " <font color=green>($wa[a_country])</font> ";
      if ($wa[a_year1] == 0) {
        //mysql_query("UPDATE ep_authors SET a_year1='$year1' WHERE a_id='$wa[a_id]'");
        echo mysql_error();
      }
      // Search influences
      echo "<td>";
      $pos = 100000000;
      $pos1 = strpos($st, $sf5);
      //echo "1-".$pos1;
      if ($pos1 > 0) $pos = min($pos, $pos1);
      $pos2 = strpos($st, $sf7);
      //echo "2-".$pos2;
      if ($pos2 > 0) $pos = min($pos, $pos2);
      $pos3 = strpos($st, $sf8);
      //echo "3-".$pos3;
      if ($pos3 > 0) $pos = min($pos, $pos3);
      $pos4 = strpos($st, $sf9);
      //echo "4-".$pos4;
      if ($pos4 > 0) $pos = min($pos, $pos4);
      $pos5 = strpos($st, $sf11);
      //echo "4-".$pos4;
      if ($pos5 > 0) $pos = min($pos, $pos5);
      if ($pos === false) echo "!!!";
      $st2 = substr($st, 0, $pos);
      //file_put_contents("wiki/$wa[a_id].txt", $st2);
      $found = array();
      foreach ($awiki as $a_id => $value) if ($a_id != $wa[a_id]) {
        $sa = explode("$value\"", $st2);
        $sa2 = explode($aname[$a_id], $st2);
        $p = strlen($sa[0]);
        $st3 = substr($st, max(0, $p-400), 800);
        $p2 = strpos($st3, 'influenc');
        if ($aname[$a_id] == 'Aphra Behn') {
          //echo count($sa2);
          //echo strpos($st2, $aname[$a_id]);
          //echo $st2;
        }
        if (count($sa)+count($sa2)>2) {
          $found[$a_id] = 1;
          $r2 = mysql_query("SELECT * FROM ep_alink
            WHERE (a_id=$wa[a_id] AND a_id2='$a_id') OR (a_id='$a_id' AND a_id2=$wa[a_id])");
          echo mysql_error();
          $n2 = mysql_numrows($r2);
          $w2 = mysql_fetch_assoc($r2);
          $st3 = str_replace("'", "`", strip_tags($st3));
          echo "<a onclick='r=prompt(\"Interaction:\", \"influenced\"); window.open(\"$url_main/epquiz/authors.php?a_name=$aname[$a_id]&a_name2=$wa[a_name]&a_id3=$wa[a_id]&l_type=\"+r); return false' href=# target=_blank><font color=black>&larr;</font></a> ";
          echo "<a onclick='r=prompt(\"Interaction:\", \"influenced\"); window.open(\"$url_main/epquiz/authors.php?a_name=$wa[a_name]&a_name2=$aname[$a_id]&a_id3=$wa[a_id]&l_type=\"+r); return false' href=# target=_blank><font color=black>&rarr;</font></a> ";
          echo "<a title='$st3' target=_blank href='$url_main/epquiz/authors.php?a_id=$a_id'>";
          if ($n2>0) echo "<s><font style='font-weight: normal'>";
          if ($p2 !== false) echo "<font color=green>";
          echo "$aname[$a_id]</font></s></font></a> ".(count($sa)-1)."+".(count($sa2)-1);
          echo " ($ayears[$a_id]) ";
          if ($w2[l_type] != '') echo " ($w2[l_type]";
          if ($w2[a_id]==$a_id) echo " by";
          echo ")";
          echo "<br>";
        }
      }
      // Links not found
      $r2 = mysql_query("SELECT * FROM ep_alink
        WHERE a_id=$wa[a_id]");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($i=0; $i<$n2; $i++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($found[$w2[a_id2]] == 0)
          echo "<a href=$url_main/epquiz/authors.php?a_id=$w2[a_id2]><font color=red>".$aname[$w2[a_id2]]."</font></a><br>";
      }
      $r2 = mysql_query("SELECT * FROM ep_alink
        WHERE a_id2=$wa[a_id]");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($i=0; $i<$n2; $i++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($found[$w2[a_id]] == 0)
          echo "<a href=$url_main/epquiz/authors.php?a_id=$w2[a_id]><font color=red>".$aname[$w2[a_id]]."</font></a><br>";
      }
    }
    echo "</table>";
  }
  
  
  // load names
  $r = mysql_query("SELECT * FROM ep_authors ORDER BY a_name");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    $sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
    $ayears[$wa[a_id]] = $wa[a_year1].'-'.$wa[a_year2];
    $awiki[$wa[a_id]] = $wa[a_wiki_id];
  }
  // load names
  $r = mysql_query("SELECT * FROM ep_works");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = mb_strtolower($wa[w_name]);
    //$sf1 = mb_convert_encoding('&#x00bb; - &#x00ab;', 'UTF-8', 'HTML-ENTITIES');
    //echo $sf1;
    //if (strpos($name, $sf1)>0) $name = substr($name, strpos($name, $sf1)+5);
    $wname[$wa[a_id]][$wa[w_id]] = trim($name);
    $wrat[$wa[w_id]] = $wa[w_rating];
  }

  load_poets();

  stop_time();
?>

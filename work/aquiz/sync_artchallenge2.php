<?
  // This is main loader for json database and painter photos
  include "lib.php";
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    //$ln = str_replace(":", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file_get_contents($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return $data;
    else return 1;
  }
  
  function check_field($w, $field, $value) {
    GLOBAL $url_main, $url;
    if ($value != $w[$field]) echo "<a href=$url>Different</a> <b>$field</b> for <a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a>: $value -> $w[$field]<br>";
  }
  
  start_time();
  echo "<pre>";
  $q = "SELECT * FROM aq_artists WHERE a_id<119 ORDER BY a_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //$fa = myfile("http://artchallenge.me/painters/$a/photo.jpg", 1);
    //file_put_contents("paintings/$a/photo.jpg", $fa);
    $url = "http://178.62.133.139:5994/painters/$w[a_id]";
    $fa = myfile($url, 1);
    $ju = json_decode($fa);
    $ju_name = $ju->{name};
    $ju_years = $ju->{years};
    $ju_pnum = count($ju->{paintings});
    $ju_bio = $ju->{bio};
    $ju_link = $ju->{link};
    $ju_link_wiki = $ju_link->{wikipedia};
    $genre = '';
    foreach ($ju->{genre} as $key => $val) {
      if ($genre != "") $genre .= ', ';
      $genre .= mysql_real_escape_string($val);
    }
    $nation = '';
    foreach ($ju->{nationality} as $key => $val) {
      if ($nation != "") $nation .= ', ';
      $nation .= mysql_real_escape_string($val);
    }
    echo "<font color=red>";
    foreach ($ju->{paintings} as $key => $pai) {
      $p_id = $pai->{id};
      // Load painting
      $q = "SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$p_id'";
      $r2 = mysql_query($q);
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      if ($w2[p_id] != $p_id) continue;
      $pai->{year} = trim(str_replace("'", "`", $pai->{year}));
      $pai->{place} = trim(str_replace("'", "`", $pai->{place}));
      $pai->{genre} = trim(str_replace("'", "`", $pai->{genre}));
      $pai->{name}->{ru} = trim(str_replace("'", "`", $pai->{name}->{ru}));
      $pai->{name}->{en} = trim(str_replace("'", "`", $pai->{name}->{en}));
      //if (mysql_real_escape_string($pai->{name}->{ru}) != $pai->{name}->{ru}) echo "Detected mysql escape: ".$pai->{name}->{ru}."<br>";
      if (strlen($pai->{name}->{ru}) > 200) {
        echo "Too long desc_ru for <a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> / $p_id<br>";
        continue;
      }
      if (($pai->{name}->{ru} != '') && ($pai->{name}->{ru} != $w2[p_desc_ru])) {
        mysql_query("UPDATE aq_paintings SET p_desc_ru='".mysql_real_escape_string($pai->{name}->{ru})."' WHERE p_id='$p_id' AND a_id='$w[a_id]'");
        echo mysql_error();
        echo "Imported p_desc_ru for <a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> / $p_id<br>";
        echo $pai->{name}->{ru}."<br>";
      }
      if (($pai->{name}->{en} != '') && ($pai->{name}->{en} != $w2[p_desc_en])) {
        mysql_query("UPDATE aq_paintings SET p_desc_en='".mysql_real_escape_string($pai->{name}->{en})."' WHERE p_id='$p_id' AND a_id='$w[a_id]'");
        echo mysql_error();
        echo "Imported p_desc_en for $w[a_name2] / $p_id<br>";
      }
      if (($pai->{genre} != '') && ($pai->{genre} != $w2[p_genre])) {
        mysql_query("UPDATE aq_paintings SET p_genre='".$pai->{genre}."' WHERE p_id='$p_id' AND a_id='$w[a_id]'");
        echo mysql_error();
        echo "Imported p_genre for $w[a_name2] / $p_id: ".mysql_real_escape_string($pai->{genre})." <- $w2[p_genre]<br>";
      }
      if (($pai->{place} != '') && ($pai->{place} != $w2[p_place])) {
        mysql_query("UPDATE aq_paintings SET p_place='".$pai->{place}."' WHERE p_id='$p_id' AND a_id='$w[a_id]'");
        echo mysql_error();
        echo "Imported p_place for $w[a_name2] / $p_id: ".mysql_real_escape_string($pai->{place})." <- $w2[p_place]<br>";
      }
      if (($pai->{year} != '') && ($pai->{year} != $w2[p_year])) {
        mysql_query("UPDATE aq_paintings SET p_year='".$pai->{year}."' WHERE p_id='$p_id' AND a_id='$w[a_id]'");
        echo mysql_error();
        echo "Imported p_year for $w[a_name2] / $p_id: ".mysql_real_escape_string($pai->{year})." <- $w2[p_year]<br>";
      }
      //echo "Painting ".$pai->{name}->{ru}."<br>";
    }
    if (($ju_bio->{en} != '') && ($w[a_bio_en] == '')) {
      echo "New bio for $w[a_name]<br>";
      mysql_query("UPDATE aq_artists SET a_bio_en='".mysql_real_escape_string($ju_bio->{en})."'
        WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    if (($ju_bio->{ru} != '') && ($w[a_bio_ru] == '')) {
      echo "Новая биография для $w[a_name]<br>";
      mysql_query("UPDATE aq_artists SET a_bio_ru='".mysql_real_escape_string($ju_bio->{ru})."'
        WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    echo "</font>";
    $ju_years = str_replace(' ', '', $ju_years);
    $ju_years = str_replace('–', '-', $ju_years);
    check_field($w, 'a_name', $ju_name);
    check_field($w, 'a_years', $ju_years);
    check_field($w, 'p_num', $ju_pnum);
    check_field($w, 'a_genre', $genre);
    check_field($w, 'a_nation', $nation);
    check_field($w, 'a_wiki_en', $ju_link_wiki->{en});
    check_field($w, 'a_wiki_ru', $ju_link_wiki->{ru});
    // Load paintings
    /*
    if ($w[p_num] < $ju_pnum) {
      echo "Loading paintings for $w[a_id]...<br>";
      for ($x=$w[p_num]+1; $x<=$ju_pnum+1; $x++) {
        $fa = myfile("http://artchallenge.me/painters/$w[a_id]/$x.jpg", 1);
        //echo $fa;
        if ($fa === 0) {
          //echo $fa;
          break;
        }
        exec("mkdir paintings\\$w[a_id]");
        file_put_contents("paintings/$w[a_id]/".str_pad($x, 4, '0', STR_PAD_LEFT).".jpg", $fa);
        echo "Imported painting $w[a_id]/$x<br>";
      }
      mysql_query("UPDATE aq_artists SET p_num=".($x-1)." WHERE a_id=$w[a_id]");
      echo mysql_error();
    }
    */
  }
  stop_time();
?>
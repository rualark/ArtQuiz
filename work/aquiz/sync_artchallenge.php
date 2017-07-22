<?
  // This is main loader for json database and painter photos
  include "mysql.php";
  include "../url.php";
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
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
    GLOBAL $url_main;
    if ($value != $w[$field]) echo "Different <b>$field</b> for <a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a>: $value -> $w[$field]<br>";
  }
  
  echo "<pre>";
  $q = "SELECT * FROM aq_artists WHERE a_id<119 ORDER BY a_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //$fa = myfile("http://artchallenge.me/painters/$a/photo.jpg", 1);
    //file_put_contents("paintings/$a/photo.jpg", $fa);
    $fa = myfile("http://artchallenge.me/painters/$w[a_id]/data.json", 1);
    $ju = json_decode($fa);
    $ju_name = $ju->{name};
    $ju_years = $ju->{years};
    $ju_pnum = $ju->{paintings};
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
    $ju_years = str_replace(' ', '', $ju_years);
    $ju_years = str_replace('–', '-', $ju_years);
    check_field($w, 'a_name', $ju_name);
    check_field($w, 'a_years', $ju_years);
    check_field($w, 'p_num', $ju_pnum);
    check_field($w, 'a_genre', $genre);
    check_field($w, 'a_nation', $nation);
    check_field($w, 'a_wiki_en', $ju_link_wiki->{en});
    check_field($w, 'a_wiki_ru', $ju_link_wiki->{ru});
    //if ($ju_name != $w[a_name]) echo "Different name for $w[a_name]: $ju_name -> $w[a_name]<br>";
    //if ($ju_pnum != $w[p_num]) echo "Different pnum for $w[a_name]: $ju_pnum -> $w[p_num]<br>";
    //if ($ju_years != $w[a_years]) echo "Different years for $w[a_name]: $ju_years -> $w[a_years]<br>";
    //if ($genre != $w[a_genre]) echo "Different genre for $w[a_name]: $genre -> $w[a_genre]<br>";
    //if ($nation != $w[a_nation]) echo "Different nation for $w[a_name]: $nation -> $w[a_nation]<br>";
    //print_r($ju);
    /*
    $q = "INSERT INTO artists VALUES('{$ju->{id}}', '".mysql_real_escape_string($ju->{name})."', '', '', 
      '".mysql_real_escape_string($ju->{years})."', 
      '$genre', '$nation', 
      '".mysql_real_escape_string($ju_bio->{ru})."', 
      '".mysql_real_escape_string($ju_bio->{en})."', 
      '{$ju_link->{local}}', '{$ju_link_wiki->{ru}}', '{$ju_link_wiki->{en}}')";
    //echo "<p>$q";
    mysql_query($q);
    echo mysql_error();
    */
    //echo $fa;
    /*
    if ($fa == 0) {
      mysql_query("INSERT INTO artists VALUES($a,'','',".($i-1).")");
      echo mysql_error();
      mysql_query("UPDATE artists SET p_num=".($i-1)." WHERE a_id=$a");
      echo mysql_error();
      break;
    }
    file_put_contents("paintings/$a/".str_pad($i, 4, '0', STR_PAD_LEFT).".jpg", $fa);
    */
    //if ($i>193) exit;
  }
?>
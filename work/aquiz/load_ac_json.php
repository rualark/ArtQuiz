<?
  // This is main loader for json database and painter photos
  include "mysql.php";
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    echo "$name // $ln<br>";
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
  
  echo "<pre>";
  for ($a=1; $a<119; $a++) {
    $fa = myfile("http://artchallenge.me/painters/$a/photo.jpg", 1);
    file_put_contents("paintings/$a/photo.jpg", $fa);
    $fa = myfile("http://artchallenge.me/painters/$a/data.json", 1);
    $ju = json_decode($fa);
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
    //print_r($ju);
    $q = "INSERT INTO artists VALUES('{$ju->{id}}', '".mysql_real_escape_string($ju->{name})."', '', '', 
      '".mysql_real_escape_string($ju->{years})."', 
      '$genre', '$nation', 
      '".mysql_real_escape_string($ju_bio->{ru})."', 
      '".mysql_real_escape_string($ju_bio->{en})."', 
      '{$ju_link->{local}}', '{$ju_link_wiki->{ru}}', '{$ju_link_wiki->{en}}')";
    //echo "<p>$q";
    mysql_query($q);
    echo mysql_error();
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
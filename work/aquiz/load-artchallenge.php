<?
  // This is main loader
  include "mysql.php";
  
  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
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

  for ($a=1; $a<119; $a++) {
    mkdir("paintings/$a");
    for ($i=1; $i<1000; $i++) {
      $fa = myfile("http://artchallenge.me/painters/$a/$i.jpg", 1);
      //echo $fa;
      if ($fa == 0) {
        mysql_query("INSERT INTO artists VALUES($a,'','',".($i-1).")");
        echo mysql_error();
        mysql_query("UPDATE artists SET p_num=".($i-1)." WHERE a_id=$a");
        echo mysql_error();
        break;
      }
      file_put_contents("../paintings/$a/".str_pad($i, 4, '0', STR_PAD_LEFT).".jpg", $fa);
      //if ($i>193) exit;
    }
  }
?>
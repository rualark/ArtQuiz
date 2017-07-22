<?
  $maxlen = 128;
  function myfile($name, $path="cache", $fname="", $load=1) {
    GLOBAL $maxlen;
    $bad = array_merge(
        array_map('chr', range(0,31)),
        array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));
    $bn = basename($name);
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    if ($fname != "") $ln = $fname;
    $ln = str_replace($bad, "", $ln);
    //$ln = str_replace(".", "-", $ln);
    if (strlen($ln)>$maxlen) $ln = substr($ln, 0, $maxlen);
    $ln = iconv("cp1251", "UTF-8//IGNORE", $ln);
    $ln = "$path/".$ln;
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return;
    }
    //usleep(100000);
    file_put_contents($ln, file_get_contents($name));
    if ($load>0) return file($ln);
  }
  


  $fh = fopen("links.php", "w");
  $sf1 = "<img src=\"/pics/";
  for ($i=0; $i<4954; $i++) {
    fputs($fh, "<a href='http://www.art-pics.ru/?picture=$i'>$i</a><br>\r\n");
    $fa = myfile("http://www.art-pics.ru/?picture=$i");
    $found=0;
    for ($x=0; $x<count($fa); $x++) {
      $st = $fa[$x];
      if (strpos($st, $sf1) !== false) {
        $st2 = substr($st, strpos($st, $sf1)+11, strlen($st));
        $st2 = substr($st2, 0, strpos($st2, "\""));
        $st3 = substr($st2, strpos($st2, "/")+1);
        $st3 = substr($st3, strpos($st3, "/")+1);
        $st3 = str_replace(".jpg", "", $st3);
	if (strlen($st3)>($maxlen-4)) $st3 = substr($st3, 0, $maxlen-4);
        $url = "http://www.art-pics.ru/$st2";
        //echo "$url<br>";
        echo iconv("cp1251", "UTF-8//IGNORE", $st3)."<br>";
        //echo "<img src=$url><br>";
        myfile($url, "pics", $st3.".jpg", 0);
        $found=1;
        break;
      }
    }
    if ($found == 0) echo "<font color=red>Not found image tag for $i</font><br>";
    //if ($i>30) break;
  }
  fclose($fh);
?>
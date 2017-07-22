<?
  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    print_r($return);
    curl_close($ch);
    return $return;
  }

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace(":", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    if (strlen($ln)>100) $ln = substr($ln, 0, 100);
    echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  for ($a=1; $a<119; $a++) {
    for ($i=1; $i<1000; $i++) {
      $fa = myfile("http://images.google.com/searchbyimage?image_url=http://artchallenge.me/painters/$a/$i.jpg", 1);
      $url = substr($fa[4], 9);
      $url = substr($url, 0, strpos($url, "\""));
      echo "URL: <b>$url</b><br>";
      $fa2 = myfile($url, 1);
      //echo $fa;
      if ($i>0) exit;
      if ($fa == 0) break;
    }
  }
?>
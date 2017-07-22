<?
  $fa=file("ralphpatt/Song.html");
  $fp=fopen("ralphpatt.htm", "w");
  echo "<h1><center>Jazz Standards: Ralph Patt Vanilla Book</center></h1>";
  for ($i=0; $i<count($fa); $i++) {
    $pos1=strpos($fa[$i], "../ancho.php?cf");
    if (!($pos1 === FALSE)) {
      $fname=substr($fa[$i], $pos1+16, 100);
      $fname=substr($fname, 0, strpos($fname, "\""));
      $name=substr($fa[$i], strpos($fa[$i], ">")+1, 100);
      $name=substr($name, 0, strpos($name, "<"));
      //echo $fname."-<br>";
      $fa2=file($fname);
      $st="";
      for ($x=0; $x<count($fa2); $x++) {
        $st.=$fa2[$x];
      }
      //$st=str_replace(" ", "+", $st);
      //$st=str_replace("\r", "%0D", $st);
      //$st=str_replace("\n", "%0A", $st);
      //$st=str_replace("\n", "%0A", $st);
      $st=urlencode($st);
      echo "<a href=\"ancho.php?cfs=$st\">$name</a><br>\r\n";
    }
  }
  fclose($fp);
?>
<?
function list_files($directory, $stringSearch, $searchHandler, $outputHandler) {
 $errorHandler = false;
 $result = array();
 if (! $directoryHandler = @opendir ($directory)) {
  //echo ("<pre>\nerror: directory \"$directory\" doesn't exist!\n</pre>\n");
  return 0;
 }
 if ($searchHandler === 0) {
  while (false !== ($fileName = @readdir ($directoryHandler))) {
   if(@substr ($fileName, - @strlen ($stringSearch)) === $stringSearch) {
    @array_push ($result, $fileName);
   }
  }
 }
 if ($searchHandler === 1) {
  while(false !== ($fileName = @readdir ($directoryHandler))) {
   if(@substr_count ($fileName, $stringSearch) > 0) {
    @array_push ($result, $fileName);
   }
  }
 }
 if (($errorHandler === true) &&  (@count ($result) === 0)) {
  //echo ("<pre>\nerror: no filetype \"$fileExtension\" found!\n</pre>\n");
  return 0;
 }
 else {
  sort ($result);
  if ($outputHandler === 0) {
   return $result;
  }
  if ($outputHandler === 1) {
   echo ("<pre>\n");
   print_r ($result);
   echo ("</pre>\n"); 
  }
 }
}

  $ppn = file("artist.txt");
  $ppn_count = count($ppn);
  for ($i=0; $i<$ppn_count; $i++) $ppn[$i] = str_replace("\r\n", "", $ppn[$i]);
  $fl = list_files("pics/", "jpg", 1, 0);
  //print_r($fl);  
  foreach ($fl as $key => $val) {
    $author2 = "";
    for ($x = 0; $x<$ppn_count; $x++) {
      if (strpos($val, $ppn[$x]) !== false) {
        $author2 = $ppn[$x];
        //echo "<b>Detected $author2</b><br>";
      }
    }
    $author = str_replace(".jpg", "", $val);
    $pos1 = strpos($author, "-");
    //while (1) {
      $pos2 = strpos($author, "-", $pos1+1);
      //if ($pos2 === false) break;
    //}
    $name = substr($author, $pos1+1);
    $author = substr($author, 0, $pos1);
    if ($author2 != "") $author = $author2;
    //echo "$author - $name - $val<br>";
    if ($pos2 > 0) {
      $pprob[$author] = $val;
      if ($author2=="") $cpic2[$author] ++;
    }
    $cpic[$author] ++;
  }
  arsort($cpic);
  foreach ($cpic as $key => $val) {
    echo "$key - $val картин ";
    if ($cpic2[$key] == $cpic[$key]) echo "<font color=red>$pprob[$key]</font>";
    echo "<br>";
  }
?>

<?
  $offline_site = 0;
  if ($offline_site) {
    $link_amp = "$url_arkhipenko";
    $link_search1 = "$url_main/classclass/search.php";
    $link_search2 = "$url_main/classclass/search.php";
    $link_am = "$url_main/classclass/am.php";
  } else {
    $link_amp = "../index.php";
    $link_search1 = "../search.php";
    $link_search2 = "search.php";
    $link_am = "../am.php";
  }
  
  function composer_color($country) {
    $ctr = explode("/", $country);
    if ($ctr[0] == "DEU") return "brown";
    if ($ctr[0] == "ITA") return "red";
    if ($ctr[0] == "ENG") return "green";
    if ($ctr[0] == "FRA") return "blue";
    if ($ctr[0] == "ESP") return "orange";
    return "black";
  }
  
  function make_perc($perc, $perc_max, $perc_min) {
    $st = "";
    $pa = explode("\n", $perc);
    $shown = 0;
    for ($x=1; $x<$perc_max; $x++) {
      if ($pa[$x] != "") {
        $perc2 = substr($pa[$x], strpos($pa[$x], "[")+1, strpos($pa[$x], "%")-strpos($pa[$x], "[")-1);
        //echo "/".$pa[$x]."/$perc2/";
        if (($perc2 >= $perc_min) || ($x<3)) {
          $st .= $pa[$x]." ";
          $shown = $x;
        }
      }
    }
    if (count($pa)>$shown+1) $st .= " ...";
    return $st;
  }
  
  function write_file($fh, $fa) {
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      fputs($fh, $fa[$i]);
    }
  }
  
  function write_menu($fh, $title, $hr=0) {
    GLOBAL $link_amp;
    fputs($fh, "<title>Classclass - classical music classification: $title</title>\n");
    fputs($fh, "<table border=0>\n");
    fputs($fh, "<tr>\n");
    fputs($fh, "<td>\n");
    fputs($fh, "<a border=0 href=frame1.php><img border=0 align=middle src=i/Classclass200.png></a><br> <b>Classical music classification</b>\n");
    fputs($fh, "</td>\n");
    fputs($fh, "<td>\n");
    fputs($fh, "<font face=arial size=4>\n");
    fputs($fh, "<a href=frame1.php>Timeline</a> |\n");
    fputs($fh, "<a href=graph2.php>Graph</a> |\n");
    fputs($fh, "<a href=gtree.php>Tree</a> |\n");
    fputs($fh, "<a target=_blank href='http://en.wikipedia.org/wiki/List_of_classical_music_composers_by_era'>Composers</a> |\n");
    fputs($fh, "<a href=contact.php>Contact</a>\n");
    fputs($fh, "</td>\n");
    fputs($fh, "<td>\n");
    fputs($fh, "<a target=_top border=0 href=$link_amp><img border=0 align=middle src=i/amp200.gif></a>");
    fputs($fh, "</td>\n");
    fputs($fh, "<tr>\n");
    fputs($fh, "<td colspan=3>\n");
    if ($hr>0) fputs($fh, "<hr>\n");
    fputs($fh, "</table>\n");
  }
  
  function create_colors($im) {
    GLOBAL $pastel, $solid, $white, $black, $red, $orange, $brown, $green, $blue, $gray,
      $lightgray;
    $pastel[0] = imagecolorallocatealpha($im, 120, 180, 255, 65);
    $pastel[1] = imagecolorallocatealpha($im, 255, 120, 180, 65);
    $pastel[2] = imagecolorallocatealpha($im, 255, 180, 120, 65);
    $pastel[3] = imagecolorallocatealpha($im, 120, 120, 255, 65);
    $pastel[4] = imagecolorallocatealpha($im, 120, 200, 120, 65);
    $pastel[5] = imagecolorallocatealpha($im, 255, 120, 120, 65);
    $pastel[6] = imagecolorallocatealpha($im, 120, 255, 180, 65);
    $pastel[7] = imagecolorallocatealpha($im, 180, 120, 255, 65);
    $pastel[8] = imagecolorallocatealpha($im, 160, 200, 100, 65);

    $solid[0] = imagecolorallocatealpha($im, 80, 120, 180, 0);
    $solid[1] = imagecolorallocatealpha($im, 180, 80, 120, 0);
    $solid[2] = imagecolorallocatealpha($im, 180, 120, 80, 0);
    $solid[3] = imagecolorallocatealpha($im, 80, 80, 180, 0);
    $solid[4] = imagecolorallocatealpha($im, 80, 180, 80, 0);
    $solid[5] = imagecolorallocatealpha($im, 180, 80, 80, 0);
    $solid[6] = imagecolorallocatealpha($im, 80, 180, 120, 0);
    $solid[7] = imagecolorallocatealpha($im, 120, 80, 180, 0);
    $solid[8] = imagecolorallocatealpha($im, 120, 180, 80, 0);
    $white = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im, 0, 0, 0);
    $red = imagecolorallocate($im, 200, 0, 0);
    $brown = imagecolorallocate($im, 110, 60, 0);
    $orange = imagecolorallocate($im, 255, 120, 0);
    $blue = imagecolorallocate($im, 0, 0, 200);
    $green = imagecolorallocate($im, 0, 150, 0);
    $gray = imagecolorallocate($im, 190, 190, 190);
    $lightgray = imagecolorallocate($im, 235, 235, 235);
  }
  
  function showlegend($x, $y) {
    GLOBAL $im, $white, $black, $red, $green, $brown, $blue, $orange, $font, $font2;
    imagefilledrectangle($im, $x+80, $y-70, $x+190, $y-40, $green);
    imagerectangle($im, $x+80, $y-70, $x+190, $y-40, $brown);
    imagefttext($im, 13, 0, $x+90, $y-48, $white, $font2, "TUTORIAL");
    imagefilledrectangle($im, $x, $y, $x+190, $y+170, $white);
    imagerectangle($im, $x, $y, $x+190, $y+170, $black);
    imagefttext($im, 13, 0, $x+10, $y+23, $black, $font, "Genre color shows \noriginating country:");
    imagefttext($im, 13, 0, $x+10, $y+66, $red, $font, "Italy");
    imagefttext($im, 13, 0, $x+10, $y+87, $blue, $font, "France");
    imagefttext($im, 13, 0, $x+10, $y+108, $green, $font, "England");
    imagefttext($im, 13, 0, $x+10, $y+129, $brown, $font, "Germany");
    imagefttext($im, 13, 0, $x+10, $y+150, $orange, $font, "Spain");
  }  
  
  function arrow($im, $x1, $y1, $x2, $y2, $alength, $awidth, $color) {
    GLOBAL $arrow_maxd;
    $distance = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    if ($distance > $arrow_maxd) return;
    if ($distance == 0) return;
    
    imageline($im, $x1, $y1, $x2, $y2, $color);

    // Decrease length 
    $x2 = ($x2+$x1 - ($x1 - $x2) * $alength / $distance)/2;
    $y2 = ($y2+$y1 - ($y1 - $y2) * $alength / $distance)/2;

    $distance = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));

    $dx = $x2 + ($x1 - $x2) * $alength / $distance;
    $dy = $y2 + ($y1 - $y2) * $alength / $distance;

    $k = $awidth / $alength;

    $x2o = $x2 - $dx;
    $y2o = $dy - $y2;

    $x3 = $y2o * $k + $dx;
    $y3 = $x2o * $k + $dy;

    $x4 = $dx - $y2o * $k;
    $y4 = $dy - $x2o * $k;

    imageline($im, $x1, $y1, $dx, $dy, $color);
    imagefilledpolygon($im, array($x2, $y2, $x3, $y3, $x4, $y4), 3, $color);
  }
  
  function rus2translit($string) {
      $converter = array(
          'à' => 'a',   'á' => 'b',   'â' => 'v',
          'ã' => 'g',   'ä' => 'd',   'å' => 'e',
          '¸' => 'e',   'æ' => 'zh',  'ç' => 'z',
          'è' => 'i',   'é' => 'y',   'ê' => 'k',
          'ë' => 'l',   'ì' => 'm',   'í' => 'n',
          'î' => 'o',   'ï' => 'p',   'ð' => 'r',
          'ñ' => 's',   'ò' => 't',   'ó' => 'u',
          'ô' => 'f',   'õ' => 'h',   'ö' => 'c',
          '÷' => 'ch',  'ø' => 'sh',  'ù' => 'sch',
          'ü' => "'",  'û' => 'y',   'ú' => "'",
          'ý' => 'e',   'þ' => 'yu',  'ÿ' => 'ya',
   
          'À' => 'A',   'Á' => 'B',   'Â' => 'V',
          'Ã' => 'G',   'Ä' => 'D',   'Å' => 'E',
          '¨' => 'E',   'Æ' => 'Zh',  'Ç' => 'Z',
          'È' => 'I',   'É' => 'Y',   'Ê' => 'K',
          'Ë' => 'L',   'Ì' => 'M',   'Í' => 'N',
          'Î' => 'O',   'Ï' => 'P',   'Ð' => 'R',
          'Ñ' => 'S',   'Ò' => 'T',   'Ó' => 'U',
          'Ô' => 'F',   'Õ' => 'H',   'Ö' => 'C',
          '×' => 'Ch',  'Ø' => 'Sh',  'Ù' => 'Sch',
          'Ü' => "'",  'Û' => 'Y',   'Ú' => "'",
          'Ý' => 'E',   'Þ' => 'Yu',  'ß' => 'Ya',
      );
      return strtr($string, $converter);
  }

  function cmp($a, $b) {
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
  }

  function listdir($dir='.') { 
      if (!is_dir($dir)) { 
          return false; 
      } 
      
      $files = array(); 
      listdiraux($dir, $files); 

      return $files; 
  } 

  function listdiraux($dir, &$files) { 
      $handle = opendir($dir); 
      while (($file = readdir($handle)) !== false) { 
          if ($file == '.' || $file == '..') { 
              continue; 
          } 
          $filepath = $dir == '.' ? $file : $dir . '/' . $file; 
          if (is_link($filepath)) 
              continue; 
          if (is_file($filepath)) 
              $files[] = $filepath; 
          else if (is_dir($filepath)) 
              listdiraux($filepath, $files); 
      } 
      closedir($handle); 
  } 
  
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
     //echo ("<pre>\n");
     //print_r ($result);
     //echo ("</pre>\n"); 
    }
   }
  }

  function binary_search(array $a, $first, $last, $key, $compare) {
    /*
     * Parameters: 
     *   $a - The sort array.
     *   $first - First index of the array to be searched (inclusive).
     *   $last - Last index of the array to be searched (exclusive).
     *   $key - The key to be searched for.
     *   $compare - A user defined function for comparison. Same definition as the one in usort
     *
     * Return:
     *   index of the search key if found, otherwise return (-insert_index - 1). 
     *   insert_index is the index of smallest element that is greater than $key or sizeof($a) if $key
     *   is larger than all elements in the array.
     */
    $lo = $first; 
    $hi = $last - 1;
    while ($lo <= $hi) {
        $mid = (int)(($hi - $lo) / 2) + $lo;
        $cmp = call_user_func($compare, $a[$mid], $key);
        if ($cmp < 0) {
            $lo = $mid + 1;
        } elseif ($cmp > 0) {
            $hi = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -($hi);
  }
    
  function makex($x) {
    GLOBAL $cx_in, $cx_out;
    $key = binary_search($cx_in, 0, sizeof($cx_in), $x, "cmp");
    if ($key<0) {
      $key = -$key;
      if ($key>count($cx_out)-1) $key--;
      $x2 = $cx_out[$key] + ($cx_out[$key+1]-$cx_out[$key])/($cx_in[$key+1]-$cx_in[$key])*($x-$cx_in[$key]);
      //echo "$x/$x2/$key/".$cx_out[$key]."/".$cx_out[$key+1]."/".$cx_in[$key]."/".$cx_in[$key+1]."<br>";
    } else {
      $x2 = $cx_out[$key];
    }
    if ($key === false) return "false";
    return $x2*0.5;
  }

  function extractSongName($st) {
    //if (strpos($st, "- ")>0) $st=substr($st, strpos($st, "- ")+2, strlen($st));
    $st = str_replace('music/', '', $st);
    $st = substr($st, strpos($st, '/')+1, strlen($st));
    $st = str_replace('/', ' - ', $st);
    if (strpos($st, ".mp3")>0) $st=substr($st, 0, strpos($st, ".mp3"));
    return $st;
  }
  
  function sortByChangeTime($file1, $file2)
  {
    GLOBAL $myPath;
    return (filectime($myPath.'/'.$file1) < filectime($myPath.'/'.$file2)); 
  }

  function sortByTime($file1, $file2)
  {
    GLOBAL $cdate;
    $date1=$cdate[strtolower(extractSongName(rus2translit(iconv("utf-8","cp1251",$file1))))];
    $date2=$cdate[strtolower(extractSongName(rus2translit(iconv("utf-8","cp1251",$file2))))];
    $res=$date1 < $date2;
    //if ($date1<1) $res=0;
    //echo "$file1 ".$cdate[strtolower(extractSongName(rus2translit(iconv("utf-8","cp1251",$file1))))]." - $file2 ".$cdate[strtolower(extractSongName(rus2translit(iconv("utf-8","cp1251",$file2))))]." - $res<br>";
    return $res; 
  }

  function glink($st, $ltype=0, $a=0, $path="") {
    GLOBAL $gsa, $gname, $gfname, $gname_l, $glk;
    $sa = explode(",", $st);
    $st2 = "";
    for ($i=0; $i<count($sa); $i++) {
      if ($sa[$i][0] == " ") $sa[$i] = substr($sa[$i], 1, strlen($sa[$i]));
      $sal[$i] = strtolower($sa[$i]);
      $key = array_search($sal[$i], $gname_l);
      if ($key === false) {
        //echo "Not found $sal[$i] genre.<br>";
        $sa[$i] = "<a target=_blank href=\"http://en.wikipedia.org/w/index.php?search=".
          $sa[$i]."\"><font color=gray>".$sa[$i]."</font></a>";
      } else {
        if ($gsa[$key][3] == 0) {
          $sa[$i] = "<a target=_blank href='".$gsa[$key][16]."'><font color=gray>".$sa[$i]."</font></a>";
        } else {
          //if ($gsa[$key][24] == 0) {
            //$sa[$i] = "<a target=_blank href=\"http://en.wikipedia.org/w/index.php?search=".
              //$sa[$i]."\"><font color=gray>".$sa[$i]."</font></a>";
          //} else {
          $country = strtolower($gsa[$key][6]);
          $color="black";
          if (strpos($country, "italy") === 0) $color="red";
          if (strpos($country, "germany") === 0) $color="brown";
          if (strpos($country, "england") === 0) $color="green";
          if (strpos($country, "france") === 0) $color="blue";
          if (strpos($country, "spain") === 0) $color="orange";
          $sa[$i] = "<a target=cc_rt_frm href='$path".$gfname[$key].".htm'><font color=$color>".$sa[$i]."</font></a>";
          if ($ltype>0) {
            //if ($glk[$a][$key]>0) echo "<font color>GLK rewrite $a $key ".$glk[$a][$key]." to $ltype of $gname[$a]/$gname[$key]</font><br>";
            //else echo "<font color>GLK $a $key ".$glk[$a][$key]." to $ltype of $gname[$a]/$gname[$key]</font><br>";
            $glk[$a][$key]=$ltype;
          }
        }
      }
      $st2 .= $sa[$i];
      if ($i < count($sa)-1) $st2 .= ", ";
    }
    return $st2;
  }
  
  function getSongList($Path) {
    $fl=listdir("$Path");
    //echo "Count $Path ".count($fl)."<br>";
    if ($fl==0 || count($fl)<1) return 0;
    //usort($fl, 'sortByTime'); // sort by callback
    //echo ("<pre>\n");
    //print_r ($fl);
    //echo ("</pre>\n"); 
    return $fl;
  }
?>
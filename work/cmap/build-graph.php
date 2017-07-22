<?
  include "qlib.php";
  
  load_comps();
  start_time();
  
  function x($x) {
    GLOBAL $cstart;
    $cent = floor($x/100);
    return 20+round($cstart[$cent]+($x/100-$cent)*($cstart[$cent+1]-$cstart[$cent]));
  }

  function make_country_col($st) {
    if (strpos($st, "USA") !== FALSE) $cl="black";
    if (strpos($st, "CAN") !== FALSE) $cl="black";
    if (strpos($st, "ITA") !== FALSE) $cl="red";
    if (strpos($st, "FRA") !== FALSE) $cl="blue";
    if (strpos($st, "FLM") !== FALSE) $cl="blue";
    if (strpos($st, "ENG") !== FALSE) $cl="green";
    if (strpos($st, "BRI") !== FALSE) $cl="green";
    if (strpos($st, "IRL") !== FALSE) $cl="green";
    if (strpos($st, "DNK") !== FALSE) $cl="brown";
    if (strpos($st, "DEU") !== FALSE) $cl="brown";
    if (strpos($st, "POR") !== FALSE) $cl="violet";
    if (strpos($st, "AUT") !== FALSE) $cl="brown";
    if (strpos($st, "ESP") !== FALSE) $cl="orange";
    if (strpos($st, "EST") !== FALSE) $cl="gray2";
    if (strpos($st, "HUN") !== FALSE) $cl="gray2";
    if (strpos($st, "CHE") !== FALSE) $cl="gray2";
    if (strpos($st, "CZE") !== FALSE) $cl="gray2";
    if (strpos($st, "POL") !== FALSE) $cl="gray2";
    if (strpos($st, "BOH") !== FALSE) $cl="gray2";
    if (strpos($st, "ARM") !== FALSE) $cl="gray2";
    if (strpos($st, "FIN") !== FALSE) $cl="lblue";
    if (strpos($st, "NOR") !== FALSE) $cl="lblue";
    if (strpos($st, "ARG") !== FALSE) $cl="lgreen";
    if (strpos($st, "BRA") !== FALSE) $cl="lgreen";
    if (strpos($st, "RUS") !== FALSE) $cl="pink";
    if (strpos($st, "UKR") !== FALSE) $cl="pink";
    return $cl;
  }

  function make_country_bgcol($st) {
    $cl = "white";
    if (strpos($st, "EST") !== FALSE) $cl="dgray";
    if (strpos($st, "HUN") !== FALSE) $cl="dgray";
    if (strpos($st, "CHE") !== FALSE) $cl="dgray";
    if (strpos($st, "CZE") !== FALSE) $cl="dgray";
    if (strpos($st, "POL") !== FALSE) $cl="dgray";
    if (strpos($st, "BOH") !== FALSE) $cl="dgray";
    if (strpos($st, "ARM") !== FALSE) $cl="dgray";
    if (strpos($st, "FIN") !== FALSE) $cl="dgray";
    if (strpos($st, "NOR") !== FALSE) $cl="dgray";
    if (strpos($st, "ARG") !== FALSE) $cl="dgray";
    if (strpos($st, "BRA") !== FALSE) $cl="dgray";
    if (strpos($st, "RUS") !== FALSE) $cl="dgray";
    return $cl;
  }
  
  function draw_box($x1, $y1, $x2, $y2, $col, $col2, $text, $pos, $wiki='', $min=0, $max=0) {
    GLOBAL $lh, $im, $cl, $font2, $gcount, $area, $btext, $im_width, $box;
    $box[$text][x1] = $x1;
    $box[$text][x2] = $x2;
    $box[$text][y1] = $y1;
    $box[$text][y2] = $y2;
    $gcount[$text]++;
    $font_size=10;
    //imagefilledrectangle($im, $x1, $y1, $x2, $y2, $col);
    $btext .= "<font color=white size=3 style='opacity: 1; position: absolute; top: ".($y1-15)."px; left: ".($im_width)."px; width: 100%'>$text</font>\n";
    imagefilledrectangle($im, $x1, $y1, $x2, $y2, $col);
    if ($text[0] != '(') {
      imagerectangle($im, $x1, $y1, $x2, $y2, $cl[gray]);
    } else {
      $style = array($cl[gray], $cl[gray], $cl[gray], $cl[gray], $cl[gray], IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT);
      imagesetstyle($im, $style);
      imageline($im, $x1, $y1, $x1, $y2, IMG_COLOR_STYLED);
      imageline($im, $x2, $y1, $x2, $y2, IMG_COLOR_STYLED);
      imageline($im, $x1, $y2, $x2, $y2, IMG_COLOR_STYLED);
      imageline($im, $x1, $y1, $x2, $y1, IMG_COLOR_STYLED);
    }
    $bbox = imageftbbox($font_size, 0, $font2, $text);
    //print_r($bbox);
    if ($pos == 1) { // Left top
      $tx = $x1+3;
      $ty = $y1+2-$bbox[5];
    }
    if ($pos == 2) { // Right top
      $tx = $x2-5-$bbox[4];
      $ty = $y1+2-$bbox[5];
    }
    if ($pos == 3) { // Right bottom
      $tx = $x2-5-$bbox[4];
      $ty = $y2-2;
    }
    if ($pos == 4) { // Left bottom
      $tx = $x1+3;
      $ty = $y2-2;
    }
    imagefttext($im, $font_size, 0, $tx, $ty, $col2, $font2, $text);
    $text = str_replace('(', '', $text);
    $text = str_replace(')', '', $text);
    if (strpos($text, "\n")>0) $text = substr($text, 0, strpos($text, "\n"));
    if ($wiki != '') $text = $wiki;
    $area .= "<area target=_blank href='http://en.wikipedia.org/w/index.php?search=$text' shape=rect coords='$tx,".($ty+2).",".($tx+$bbox[4]+2).",".($ty+$bbox[5])."'>";
    if ($min>0) imagefilledrectangle($im, x($min), $y1+1, x($max), $y1+3, $col2);
  }
  
  function draw_link($box1, $box2, $x, $y1, $y2, $col) {
    GLOBAL $box, $im;
    if ($x>0) {
      $x1 = $box[$box1][x2]+1; // first box
      $x2 = $box[$box2][x2]+1; // second box
      $x3 = max($x1, $x2) + $x;
      $x4 = $x2 + 5; // arrow
      $x5 = $x3 - 5; // rounded
    } else {
      $x1 = $box[$box1][x1]-1;
      $x2 = $box[$box2][x1]-1;
      $x3 = min($x1, $x2) + $x;
      $x4 = $x2 - 5; // arrow
      $x5 = $x3 + 5; // rounded
    }
    $y11 = ($box[$box1][y1]+$box[$box1][y2])/2+$y1;
    $y21 = ($box[$box2][y1]+$box[$box2][y2])/2+$y2;
    // Rounded
    if ($y21 > $y11) {
      $y12 = $y11 + 5;
      $y22 = $y21 - 5;
      if ($x>0) {
        $a1 = -90;
        $a2 = 0;
        $a3 = 0;
        $a4 = 90;
      } else {
        $a1 = 180;
        $a2 = 270;
        $a3 = 90;
        $a4 = 180;
      }
    } else {
      $y12 = $y11 - 5;
      $y22 = $y21 + 5;
      if ($x>0) {
        $a1 = 0;
        $a2 = 90;
        $a3 = -90;
        $a4 = 0;
      } else {
        $a1 = 90;
        $a2 = 180;
        $a3 = 180;
        $a4 = 270;
      }
    }
    imageline($im, $x1, $y11, $x5, $y11, $col); // from first group
    imageline($im, $x3, $y22, $x3, $y12, $col);
    imageline($im, $x5, $y21, $x4, $y21, $col); // to second group
    // corners
    imagearc($im, $x5, $y12, 10, 10, $a1, $a2, $col);
    imagearc($im, $x5, $y22, 10, 10, $a3, $a4, $col);
    // arrow
    imageline($im, $x2, $y21, $x4, $y21-3, $col); 
    imageline($im, $x2, $y21, $x4, $y21+3, $col); 
    imageline($im, $x4, $y21-3, $x4, $y21+3, $col); 
  }
  
  function fps($st) {
    GLOBAL $file1;
    fputs($file1, $st."\n");
    echo $st;
  }
  
  $font = "fonts/arial.ttf";
  $font2 = "fonts/arialb.ttf";
  $im_width=1400;
  $im_height=3220;
  $lh = 14;
  $im = imagecreatetruecolor($im_width, $im_height);
  $cl[red] = imagecolorallocate($im, 220, 0, 0);
  $cl[pink] = imagecolorallocate($im, 255, 150, 150);
  $cl[green] = imagecolorallocate($im, 0, 120, 0);
  $cl[lgreen] = imagecolorallocate($im, 0, 200, 0);
  $cl[yellow] = imagecolorallocate($im, 255, 255, 0);
  $cl[blue] = imagecolorallocate($im, 0, 0, 255);
  $cl[lblue] = imagecolorallocate($im, 100, 100, 255);
  $cl[brown] = imagecolorallocate($im, 100, 100, 0);
  $cl[orange] = imagecolorallocate($im, 255, 120, 0);
  $cl[cyan] = imagecolorallocate($im, 0, 150, 150);
  $cl[violet] = imagecolorallocate($im, 150, 0, 200);
  $cl[black] = imagecolorallocate($im, 0, 0, 0);
  $cl[white] = imagecolorallocate($im, 255, 255, 255);
  $cl[gray] = imagecolorallocate($im, 180, 180, 180);
  $cl[gray2] = imagecolorallocate($im, 140, 140, 140);
  $cl[dgray] = imagecolorallocate($im, 50, 50, 50);
  $cl[lgray] = imagecolorallocate($im, 243, 243, 243);
  $cl[agreen] = imagecolorallocatealpha($im, 0, 250, 0, 100);
  $cl[ablue] = imagecolorallocatealpha($im, 0, 0, 255, 110);
  $cl[ayellow] = imagecolorallocatealpha($im, 255, 255, 0, 100);
  $cl[ared] = imagecolorallocatealpha($im, 255, 0, 0, 100);
  $cl[aorange] = imagecolorallocatealpha($im, 255, 150, 0, 100);
  $cl[aviolet] = imagecolorallocatealpha($im, 150, 0, 200, 100);
  $cl[amagenta] = imagecolorallocatealpha($im, 255, 0, 255, 100);
  $cl[acyan] = imagecolorallocatealpha($im, 0, 250, 250, 100);
  $cl[agray] = imagecolorallocatealpha($im, 40, 40, 40, 100);
  $font_size = 10;
  imagefill($im, 0, 0, $cl[white]);
  
  // Count density
  $q = "SELECT c_start FROM cc_composers WHERE ca_id>0 ";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $ccnt[floor($w[c_start]/100)]++;
  }
  $pos = 5;
  if ($ccnt[20] == 0) $ccnt[20] = 50;
  //$ccnt[14]=9;
  //$ccnt[15]=9;
  for ($i=0; $i<30; $i++) {
    $cstart[$i] = $pos;
    $pos += round($ccnt[$i]*5.4);
  }

  // Show network
  imagefilledrectangle($im, x(1400), 20, x(1600), $im_height, $cl[lgray]);
  imagefilledrectangle($im, x(1750), 20, x(1820), $im_height, $cl[lgray]);
  imagefilledrectangle($im, x(1900), 20, x(1960), $im_height, $cl[lgray]);
  imageline($im, 0, 0, 0, $im_height, $cl[gray]);
  imageline($im, $im_width-1, 0, $im_width-1, $im_height-1, $cl[gray]);
  imageline($im, 0, $im_height-1, $im_width-1, $im_height-1, $cl[gray]);
  imageline($im, 0, 0, $im_width-1, 0, $cl[gray]);
  imageline($im, 0, 20, $im_width-1, 20, $cl[gray]);
  //imagedashedline($im, x(1000), 20, x(1000), $im_height, $cl[gray]);
  imagedashedline($im, x(1400), 20, x(1400), $im_height, $cl[gray]);
  imagedashedline($im, x(1600), 20, x(1600), $im_height, $cl[gray]);
  imagedashedline($im, x(1700), 20, x(1700), $im_height, $cl[gray]);
  imagedashedline($im, x(1800), 20, x(1800), $im_height, $cl[gray]);
  imagedashedline($im, x(1900), 20, x(1900), $im_height, $cl[gray]);
  imagedashedline($im, x(2000), 20, x(2000), $im_height, $cl[gray]);
  imagedashedline($im, x(2100), 20, x(2100), $im_height, $cl[gray]);
  //imagefttext($im, $font_size, 0, x(1000)-7, 15, $cl[black], "fonts/arial.ttf", "10");
  imagefttext($im, $font_size, 0, x(1400)-7, 15, $cl[black], "fonts/arial.ttf", "14");
  imagefttext($im, $font_size, 0, x(1600)-7, 15, $cl[black], "fonts/arial.ttf", "16");
  imagefttext($im, $font_size, 0, x(1700)-7, 15, $cl[black], "fonts/arial.ttf", "17");
  imagefttext($im, $font_size, 0, x(1800)-7, 15, $cl[black], "fonts/arial.ttf", "18");
  imagefttext($im, $font_size, 0, x(1900)-7, 15, $cl[black], "fonts/arial.ttf", "19");
  imagefttext($im, $font_size, 0, x(2000)-7, 15, $cl[black], "fonts/arial.ttf", "20");
  imagefttext($im, $font_size, 0, x(1510)-7, 15, $cl[gray2], "fonts/arial.ttf", "Renaiss.");
  imagefttext($im, $font_size, 0, x(1635)-7, 15, $cl[gray2], "fonts/arial.ttf", "Baroque");
  imagefttext($im, $font_size, 0, x(1807)-7, 15, $cl[gray2], "fonts/arial.ttf", "Classical");
  imagefttext($im, $font_size, 0, x(1860)-7, 15, $cl[gray2], "fonts/arial.ttf", "Romantic");
  imagefttext($im, $font_size, 0, x(1924)-7, 15, $cl[gray2], "fonts/arial.ttf", "Modern");
  imagefttext($im, $font_size, 0, x(1973)-7, 15, $cl[gray2], "fonts/arial.ttf", "Post-modern");
  $area .= "
<area alt=Renaissance target=_blank href=http://en.wikipedia.org/wiki/Renaissance_music
 shape=rect coords='45,3,100,18'>
<area alt=Baroque target=_blank href=http://en.wikipedia.org/wiki/Baroque_music
 shape=rect coords='130,3,183,18'>
<area alt=Classical target=_blank href=http://en.wikipedia.org/wiki/Classical_period_(music)
 shape=rect coords='300,3,370,18'>
<area alt=Romantic target=_blank href=http://en.wikipedia.org/wiki/Romantic_music
 shape=rect coords='585,2,650,18'>
<area alt=Romantic target=_blank href=http://en.wikipedia.org/wiki/Modernism_(music)
 shape=rect coords='905,2,970,18'>
<area alt=Romantic target=_blank href=http://en.wikipedia.org/wiki/Postmodern_music
 shape=rect coords='1155,2,1235,18'>
  ";

  // Show legend
  imagefilledrectangle($im, 50, 1700, 300, 1900, $cl[white]);
  imagerectangle($im, 50, 1700, 300, 1900, $cl[black]);
  imagefttext($im, $font_size, 0, 55, 1714, $cl[black], "fonts/arialb.ttf", "Composer color shows his country:");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*1, $cl[red], "fonts/arial.ttf", "Italy");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*2, $cl[black], "fonts/arial.ttf", "USA / Canada / Mexico");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*3, $cl[blue], "fonts/arial.ttf", "France");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*4, $cl[green], "fonts/arial.ttf", "England / Ireland");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*5, $cl[brown], "fonts/arial.ttf", "Germany / Denmark / Austria");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*6, $cl[orange], "fonts/arial.ttf", "Spain");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*7, $cl[gray2], "fonts/arial.ttf", "Eastern europe");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*8, $cl[lblue], "fonts/arial.ttf", "Finland / Norway");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*9, $cl[lgreen], "fonts/arial.ttf", "Argentina / Brazil");
  imagefttext($im, $font_size, 0, 55, 1716+$lh*10, $cl[pink], "fonts/arial.ttf", "Russia / Ukraine");

  // Load composers
  $q = "SELECT c_start, c_stop, c_id, c_name3, c_rating, c_name4, c_group, c_country, map_pos FROM cc_composers WHERE map_pos>0 ORDER BY c_start";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_array($r);
    $cp[$wa[$i][c_name4]] = $wa[$i][map_pos];
  }

  draw_box(x(1000)-22, $cp[Hildegard]*$lh+8, x(1770), $cp[Machaut]*$lh+33, $cl[agray], $cl[gray2], "Medieval", 2, 'Medieval music', 500, 1400);
  draw_box(x(1000)-20, $cp[Leonin]*$lh+11, x(1690), $cp[Perotin]*$lh+31, $cl[agray], $cl[gray2], "Notre Dame school\nArs antiqua", 2);
  draw_box(x(1000)-20, $cp[Machaut]*$lh+11, x(1690), $cp[Machaut]*$lh+31, $cl[agray], $cl[gray2], "Ars nova", 2);

  draw_box(x(1000)-22, $cp[Dufay]*$lh+8, x(1800), $cp[Dowland]*$lh+31, $cl[aorange], $cl[brown], "Renaissance", 3, '', 1400, 1600);
  draw_box(x(1000)-18, $cp[Dufay]*$lh+11, x(1720), $cp[Dufay]*$lh+31, $cl[aorange], $cl[brown], "Burgundian School", 2);
  draw_box(x(1000)-15, $cp[Desprez]*$lh+11, x(1740), $cp[Lassus]*$lh+31, $cl[aorange], $cl[brown], "Franco-flemish school", 2);
  draw_box(x(1000)-10, $cp[Palestrina]*$lh+11, x(1750), $cp[Palestrina]*$lh+31, $cl[aorange], $cl[brown], "Roman School", 2);

  draw_box(x(1000)-10, $cp['G Gabrieli']*$lh+8, x(1780), $cp['D Scarlatti']*$lh+31, $cl[ayellow], $cl[brown], "Baroque", 4, 'Baroque music', 1600, 1750);
  draw_box(x(1000), $cp['G Gabrieli']*$lh+11, x(1770), $cp[Monteverdi]*$lh+31, $cl[ayellow], $cl[brown], "Venetian School", 2);
  
  draw_box(x(1500), $cp[Pergolesi]*$lh+11, x(1770), $cp[Pergolesi]*$lh+31, $cl[agreen], $cl[green], "Neapolitan school", 1);
  draw_box(x(1550), $cp[Stamitz]*$lh+11, x(1805), $cp[Stamitz]*$lh+31, $cl[agreen], $cl[green], "Mannheim school", 1);
  draw_box(x(1400), $cp[Pergolesi]*$lh+8, x(1821), $cp[Mozart]*$lh+34, $cl[agreen], $cl[green], "Classical", 4, 'Classical period music', 1750, 1820);
  
  draw_box(x(1590), $cp[Haydn]*$lh+11, x(1830), $cp[Schubert]*$lh+31, $cl[agray], $cl[gray2], "First Viennese School", 4);
  draw_box(x(1730), $cp[Wagner]*$lh+11, x(1890), $cp[Wagner]*$lh+31, $cl[agreen], $cl[green], "(Neoromanticism)", 1);
  //draw_box(x(1710), $cp[Chopin]*$lh+11, x(1850), $cp[Chopin]*$lh+31, $cl[agreen], $cl[green], "(Folk)", 1, 'Musical nationalism');

  draw_box(x(1850), $cp[Debussy]*$lh+11, x(1950), $cp[Falla]*$lh+31, $cl[agreen], $cl[green], "Impressionism", 2, 'Impressionism in music', 1890, 1920);
  draw_box(x(1802), $cp[Ravel]*$lh+5, x(2020), $cp[Graca]*$lh+31, $cl[ared], $cl[red], "Folk", 1, 'Musical nationalism');
  draw_box(x(1875), $cp[Stravinsky]*$lh+11, x(1999), $cp[Bartok]*$lh+31, $cl[agray], $cl[gray2], "Primitivism", 3, '', 1890, 1920);
  draw_box(x(1870), $cp[Ravel]*$lh+11, x(1980), $cp[Stravinsky]*$lh+31, $cl[acyan], $cl[cyan], "(Neoclassicism)", 2, '', 1920, 1945);
  draw_box(x(1865), $cp[Carter]*$lh+11, x(2020), $cp[Thomson]*$lh+32, $cl[acyan], $cl[cyan], "Neoclassicism", 1, '', 1920, 1945);
  draw_box(x(1830), $cp[Schoenberg]*$lh+11, x(1955), $cp[Webern]*$lh+30, $cl[aviolet], $cl[violet], "Atonal expressionism\nSerialism", 1, '', 1920, 1945);
  draw_box(x(1867), $cp[Thomson]*$lh+11, x(2018), $cp[Adams]*$lh+32, $cl[ayellow], $cl[brown], "Neoromanticism", 4, '', 1960, 2000);
  draw_box(x(1920), $cp[Adams]*$lh+11, x(2020), $cp[Adams]*$lh+36, $cl[agray], $cl[gray2], "Post-minimalism", 1, '', 1980, 2000);
  draw_box(x(1920), $cp['JL Adams']*$lh+11, x(2020), $cp['JL Adams']*$lh+36, $cl[agray], $cl[gray2], "Totalism", 1, '', 1985, 2000);
  
  draw_box(x(1902), $cp[Boulez]*$lh+11, x(2020), $cp[Babbitt]*$lh+31, $cl[acyan], $cl[cyan], "Total serialism", 1, '', 1945, 1960);
  draw_box(x(1870), $cp[Russolo]*$lh+11, x(1990), $cp[Russolo]*$lh+33, $cl[ared], $cl[red], "Futurism", 1, 'Futurism_(music)', 1920, 1930);
  draw_box(x(1865), $cp[Antheil]*$lh+11, x(2008), $cp[Ferrari]*$lh+33, $cl[ayellow], $cl[brown], "Ultramodern", 1, '', 1920, 1930);
  draw_box(x(1870), $cp[Cowell]*$lh+11, x(2020), $cp[Ives]*$lh+33, $cl[ared], $cl[red], "Aleatoric music", 1, '', 1945, 1960);
  draw_box(x(1860), $cp[Ives]*$lh+11, x(2018), $cp[Schnittke]*$lh+31, $cl[agreen], $cl[green], "Polystylism", 4, '', 1960, 1980);
  draw_box(x(1904), $cp[Schnittke]*$lh+11, x(2022), $cp[Part]*$lh+31, $cl[aviolet], $cl[violet], "New simplicity", 1, '', 1970, 1980);
  draw_box(x(1915), $cp[Part]*$lh+11, x(2020), $cp[Riley]*$lh+31, $cl[agray], $cl[gray2], "Minimalism", 4, '', 1960, 1980);
  draw_box(x(1922), $cp[Murail]*$lh+11, x(2020), $cp[Grisey]*$lh+31, $cl[amagenta], $cl[red], "Spectral music", 4, '', 1970, 1980);
  draw_box(x(1901), $cp[Kagel]*$lh+11, x(2020), $cp[Stockhausen]*$lh+31, $cl[aviolet], $cl[violet], "Darmstadt School", 1, '', 1946, 2015);
  draw_box(x(1880), $cp[Maderna]*$lh+11, x(2022), $cp[Henry]*$lh+31, $cl[ablue], $cl[blue], "Electronic music", 4, '', 1980, 2000);
  draw_box(x(1880), $cp[Glass]*$lh+11, x(2022), $cp[Murail]*$lh+31, $cl[ablue], $cl[blue], "(Electronic music)", 4, '', 1980, 2000);
  draw_box(x(1906), $cp[Schaeffer]*$lh+11, x(2020), $cp[Lachenmann]*$lh+31, $cl[agreen], $cl[green], "Musique concrete", 4);
  draw_box(x(1890), $cp[Lachenmann]*$lh+8, x(2022), $cp[Gubaidulina]*$lh+31, $cl[acyan], $cl[cyan], "Extended techniques", 4);
  draw_box(x(1915), $cp[Ferneyhough]*$lh+11, x(2020), $cp[Ferneyhough]*$lh+31, $cl[ayellow], $cl[brown], "New complexity", 1, '', 1980, 2000);
  draw_box(x(1901), $cp[Scelsi]*$lh+11, x(2020), $cp[Feldman]*$lh+31, $cl[agray], $cl[gray2], "Minimum notes", 4);
  draw_box(x(1880), $cp[Partch]*$lh+11, x(2022), $cp[Nancarrow]*$lh+31, $cl[amagenta], $cl[red], "New instruments", 4);
  draw_box(x(1880), $cp[Ligeti]*$lh+8, x(2022), $cp[Orff]*$lh+31, $cl[agray], $cl[gray2], "Other", 4);
  draw_link('Futurism', 'Ultramodern', -15, 0, 0, $cl[gray]);
  draw_link('Minimalism', 'Totalism', -15, -10, -5, $cl[gray]);
  draw_link('Total serialism', 'Totalism', -15, -10, +5, $cl[gray]);
  draw_link("Atonal expressionism\nSerialism", 'Total serialism', +15, 0, 0, $cl[dgray]);
  draw_link('Minimalism', 'Post-minimalism', +10, -20, 0, $cl[pink]);

  draw_box(x(1860), $cp[Gershwin]*$lh+8, x(2022), $cp[Rodrigo]*$lh+31, $cl[ayellow], $cl[brown], "Pop", 4, 'Popular music');
  draw_box(x(1885), $cp[Gershwin]*$lh+11, x(1998), $cp[Kuryokhin]*$lh+31, $cl[ayellow], $cl[brown], "Jazz", 4);
  draw_box(x(1660), $cp[Weiss]*$lh+8, x(1970), $cp[Barrios]*$lh+31, $cl[amagenta], $cl[red], "Guitar", 4, 'Classical guitar repertoire');
  draw_box(x(1720), $cp[Bochsa]*$lh+8, x(1970), $cp[Tournier]*$lh+31, $cl[ablue], $cl[blue], "Harp", 4, 'List of compositions for harp');
  draw_box(x(1885), $cp[Steiner]*$lh+11, x(2020), $cp[Zimmer]*$lh+31, $cl[acyan], $cl[cyan], "Film", 4, 'Film music', 1930, 2015);
  
  draw_box(x(1832), $cp[Borodin]*$lh+11, x(1935), $cp['Rimsky-Korsakov']*$lh+31, $cl[aviolet], $cl[violet], "Mighty Handful\n(Five)", 2, '', 1856, 1870);
  draw_box(x(1710), $cp[Rossini]*$lh+11, x(1948), $cp[Mascagni]*$lh+32, $cl[aviolet], $cl[violet], "Opera", 4);
  draw_box(x(1830), $cp[Leoncavallo]*$lh+11, x(1947), $cp[Mascagni]*$lh+30, $cl[aviolet], $cl[violet], "Opera verismo", 4);
  draw_box(x(1770), $cp[Schubert]*$lh+11, x(1944), $cp[Rachmaninov]*$lh+30, $cl[aviolet], $cl[violet], "Conservative", 4);
  draw_box(x(1770), $cp[Berlioz]*$lh+11, x(1926), $cp[Scriabin]*$lh+30, $cl[aviolet], $cl[violet], "Progressive", 4);
  draw_box(x(1770), $cp[Gounod]*$lh+11, x(1926), $cp[Rosas]*$lh+34, $cl[aviolet], $cl[violet], "Light", 4);
  draw_box(x(1822), $cp['J Strauss II']*$lh+11, x(1917), $cp[Rosas]*$lh+30, $cl[agray], $cl[gray2], "Waltz", 4);
  draw_box(x(1680), $cp[Beethoven]*$lh+11, x(1949), $cp[Mascagni]*$lh+35, $cl[aviolet], $cl[violet], "Romantic", 2, '', 1820, 1900);
  draw_box(x(1850), $cp[Sousa]*$lh+11, x(1944), $cp[Fucik]*$lh+31, $cl[aviolet], $cl[violet], "Martial", 4, 'Martial music');
  
  $gcount[National]++;
  $gcount[Five]++;
  
  // Show composers
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    $z2 = $w[map_pos]-1;
    if ($z2 == -1) {
      $z2 = $z+50;
      $z++;
      if ($z>135) $z = 0;
    }
    $fnt = $font;
    if (($w[c_rating]>0) && ($w[c_rating]<3)) $fnt = $font2;
    $cl1 = $cl[make_country_col($w[c_country])];
    $cl2 = $cl[make_country_bgcol($w[c_country])];
    $cl2 = $cl[white];
    $cl4 = $cl[gray];
    if ($cl2 == $cl[dgray]) $cl4 = $cl[dgray];
    //imageline($im, x($w[c_start]), 0, x($w[c_start]), 5, $cl[black]);
    $x = x($w[c_start]);
    $y = $z2*$lh+40;
    $y1 = $y-11;
    $y2 = $y+1;
    $name = $w[c_name4];
    if (($w[c_group] != " ") && ($w[c_start] > 1770) && ($gcount[$w[c_group]] == 0)) $name .= " - $w[c_group]";
    //if ($w[c_start]>1760) $name = $w[c_name3];
    $bbox = imageftbbox($font_size, 0, $fnt, $name);
    if ($w[c_stop] == 0) $x2 = x(2015);
    else $x2 = x($w[c_stop]);
    imagerectangle($im, $x-1, $y1, $x2, $y2, $cl4);
    if ($x < floor(($x+$x2-$bbox[4])/2)-1) {
      $ax1 = $x;
      $ax2 = $x2;
    } else {
      $ax1 = floor(($x+$x2-$bbox[4])/2)-1;
      $ax2 = floor(($x+$x2+$bbox[4])/2)+1;
    }
    imagefilledrectangle($im, $ax1, $y1+1, $ax2, $y2-1, $cl2);
    if ($w[c_stop] == 0) $cl3 = $cl[white];
    else $cl3 = $cl4;
    imageline($im, $x2, $y1, $x2, $y2, $cl3);
    imagefilledrectangle($im, floor(($x+$x2-$bbox[4])/2)-1, $y1+1, floor(($x+$x2+$bbox[4])/2)+1, $y2-1, $cl2);
    imagefttext($im, $font_size, 0, floor(($x+$x2-$bbox[4])/2)-1, $y, $cl1, $fnt, $name);
    $area .= "<area target=_blank href=<?=\$url_main;?>/cquiz/am.php?c_id=$w[c_id]&mp=$w[map_pos] shape=rect coords='$ax1,$y1,$ax2,$y2'>\n";
    $btext .= "<font color=white size=3 style='opacity: 1; position: absolute; top: ".($y-15)."px; left: ".($im_width)."px; width: 100%'>$name</font>\n";
    //$btext .= "<font color=black size=3 style='opacity: 1; position: absolute; top: ".($y-15)."px; left: ".(floor(($x+$x2-$bbox[4])/2)-1)."px; width: 100%'>$name</font>\n";
  }
  imagefttext($im, $font_size, 0, 1055, $im_height-10, $cl[black], "fonts/arial.ttf", "This timeline was created by Alexey Arkhipenko (c) 2015");
  // Save map
  imagepng($im, "cmap/maps/en.png");
  //copy("cmap/maps/en.png", "maps/en.png");
  $file1 = fopen("cmap/index.php", "w");
  fps("<? include '../url.php'; ?>");
  fps("<HEADER><LINK href='css/main.css' rel='stylesheet' type='text/css'>");
  fps("
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56489282-1', 'auto');
      ga('send', 'pageview');

    </script>
    <title>Classclass - classical music classification: Composers</title>
    <table border=0>
    <tr>
    <td>
    <a border=0 href='<?=\$url_main;?>/classclass'><img border=0 align=middle src=i/Classclass200.png></a><br> <b>Classical music classification</b>
    </td>
    <td>
    <font face=arial size=4>
    <a href='<?=\$url_main;?>/classclass'>Genres</a> |
    <a target=_blank href='<?=\$url_main;?>/cmap'>Composers</a> |
    <a target=_blank href=http://arkhipenko.weebly.com>Contact</a>
    </td>
    <td>
    <a target=_top border=0 href=http://arkhipenko.weebly.com><img border=0 align=middle src=i/amp200.gif></a></td>
    <tr>
    <td colspan=3>
    </table>
  ");
  fps("<script src='js/jquery-1.9.1.min.js'></script>");
  fps("<script src='js/jquery.maphighlight.js'></script>");
  fps("<script type='text/javascript'>$(function() {");
  fps("$('.map').maphilight();");
  fps("});</script>");
  fps("<p><div style='position: relative; width: 100%'>");
  fps($btext);
  fps("<img class=map border=0 src=maps/en.png usemap='#Navigation'>");
  fps("</div>");
  fps("<map name=Navigation>");
  fps($area);
  fps("</map>");
  fps("<p><a target=_blank href=<?=\$url_main;?>/classclass/i/tut2.png>Here is a tutorial to this timeline</a>.");
  fps("<p>Most styles have a thick colored line at their top, which shows the main interval when the style was active.");
  fps("<p>Click on composer, style or period to know more and listen to composer works. Bold font shows most known composers.");
  fps("<p>Most well known composers are marked bold.");
  fps("<p>Image is searchable. Use Ctrl+F or 'Search in page'.");
  fclose($file1);

  stop_time();
?>
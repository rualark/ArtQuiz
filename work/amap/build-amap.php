<?
  include "qlib.php";
  
  load_comps();
  start_time();
  
  $id='';
  
  secure_variable("a_id");
  secure_variable("map_pos");
  secure_variable("map_right");
  secure_variable("map_year");
  secure_variable("map_comment");
  secure_variable("a_genre");
  secure_variable("a_nation");
  secure_variable("a_name");
  secure_variable("a_start");
  secure_variable("a_stop");
  secure_variable("a_name2");

  secure_variable("t_name");
  secure_variable("t_name2");
  secure_variable("t_wiki");
  secure_variable("map_x1");
  secure_variable("map_x2");
  secure_variable("map_y1");
  secure_variable("map_y2");
  secure_variable("map_active");
  secure_variable("map_label");
  secure_variable("map_color1");
  secure_variable("map_color2");
  secure_variable("t_year1");
  secure_variable("t_year2");
  secure_variable("t_year1t");
  secure_variable("t_year2t");
  secure_variable("move_x");
  
  $cent_step = 100; // step for density calculation
  
  function make_area($x1, $y1, $x2, $y2, $href, $title='', $add='') {
    return "<a $add href='$href' title='$title'><div class=area style='position:absolute; width:".
      abs($x2-$x1)."px; height:".abs($y2-$y1)."px; left:".min($x1, $x2)."px; top:".min($y1, $y2)."px'></div></a>\n";
  }
  
  function lookup_pos($st) {
    // replace variables
    $q = "SELECT a_name2, map_pos FROM aq_artists WHERE a_name2 LIKE '$st%' ORDER BY LENGTH(a_name2)";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $w2 = mysql_fetch_assoc($r2);
    return $w2[map_pos];
  }
  
  function lookup_year($st) {
    // replace variables
    $q = "SELECT a_name2, map_pos, a_start, a_stop, map_year FROM aq_artists WHERE a_name2 LIKE '$st%' ORDER BY LENGTH(a_name2)";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $w2 = mysql_fetch_assoc($r2);
    if ($w2[a_start] == 0) return 0;
    $year1 = $w2[a_start];
    $year2 = $w2[a_stop];
    //die("$w2[a_name2]");
    if ($year2 == 0) $year2 = 2016;
    return round(($year1+$year2)/2)+$w2[map_year];
  }
  
  if (($move_x != 0) && ($move_x != $map_x1)) {
    $move_x = $move_x - $map_x1;
    // Check for collisions
    $q = "SELECT *,ROUND((IF(a_stop=0, 2016, a_stop)+a_start)/2+map_year) as my FROM aq_artists";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($w2[map_pos] == 0) continue;
      $p1 = 0;
      $p2 = 0;
      $dx = 20;
      if ($w2[map_right] == 1) $dx = -20;
      if (($w2[my] >= $map_y1) && ($w2[my] <= $map_y2) && 
        ($w2[map_pos]+$dx >= $map_x1) && ($w2[map_pos]+$dx <= $map_x2)) $p1=1;
      if (($w2[my] >= $map_y1) && ($w2[my] <= $map_y2) && 
        ($w2[map_pos]+$dx >= $map_x1+$move_x) && ($w2[map_pos]+$dx <= $map_x2+$move_x)) $p2=1;
      if (($p1==0) && ($p2==1)) die("<font color=red>Error: this move will include new artist $w2[a_name2]</font>");
    }
    // Move artists
    $q = "SELECT *,ROUND((IF(a_stop=0, 2016, a_stop)+a_start)/2+map_year) as my FROM aq_artists";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($w2[map_pos] == 0) continue;
      $p1 = 0;
      $p2 = 0;
      $dx = 20;
      if ($w2[map_right] == 1) $dx = -20;
      if (($w2[my] >= $map_y1) && ($w2[my] <= $map_y2) && 
        ($w2[map_pos]+$dx >= $map_x1) && ($w2[map_pos]+$dx <= $map_x2)) $p1=1;
      if (($w2[my] >= $map_y1) && ($w2[my] <= $map_y2) && 
        ($w2[map_pos]+$dx >= $map_x1+$move_x) && ($w2[map_pos]+$dx <= $map_x2+$move_x)) $p2=1;
      if ($p1==1) {
        echo "Moving $w2[a_name2]...<br>";
        mysql_query("UPDATE aq_artists SET map_pos=map_pos+($move_x) WHERE a_id='$w2[a_id]'");
        echo mysql_error();
      }
    }
    // Move tag
    $q = "UPDATE aq_tags SET map_x1=map_x1+($move_x), map_x2=map_x2+($move_x)
      WHERE t_name='$t_name'";
    //die($q);
    $r = mysql_query($q);
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"build-amap.php#t$t_name\");</script>"); 
  }
  
  if (isset($map_pos)) {
    // count
    $ma = explode("-", $map_pos);
    $ma2 = explode("+", $map_pos);
    if (count($ma)>1) {
      $ma[0] = lookup_pos($ma[0]);
      $map_pos = $ma[0] - $ma[1];
    } elseif (count($ma2)>1) {
      $ma2[0] = lookup_pos($ma2[0]);
      $map_pos = $ma2[0] + $ma2[1];
    } else {
      $pos = lookup_pos($map_pos);
      if ($pos>0) $map_pos = $pos;
    }
    $year = lookup_year($map_year);
    if ($year != 0) {
      $year1 = $a_start;
      $year2 = $a_stop;
      if ($year2 == 0) $year2 = 2016;
      $map_year = $year-round(($year1+$year2)/2);
      //die("$year1 - $year2 - $year - $map_year<br>");
    }
    // change
    echo "Updating artist...<br>";
    $q = "UPDATE aq_artists SET map_pos='$map_pos', map_right='$map_right', 
      a_name='$a_name', a_name2='$a_name2', a_genre='$a_genre', a_nation='$a_nation', 
      map_comment='$map_comment', map_year='$map_year' WHERE a_id='$a_id'";
    $r = mysql_query($q);
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"build-amap.php#a$a_id\");</script>"); 
  }
  
  if (isset($a_id)) {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").setSelectionRange(0, document.getElementById(\"sel1\").value.length)'>";
    $q = "SELECT * FROM aq_artists WHERE a_id='$a_id'";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_array($r);
    echo "<form>";
    echo "<input type=hidden name=a_id value='$a_id'>";
    echo "<input type=hidden name=a_start value='$w[a_start]'>";
    echo "<input type=hidden name=a_stop value='$w[a_stop]'>";
    echo "<a href='$url_main/aquiz/artist.php?a_id=$w[a_id]'>$w[a_name]</a> [$w[a_years]]";
    if ($w[a_wiki_en] == '') $w[a_wiki_en] = "http://en.wikipedia.org/w/index.php?search=".awiki($w[a_name]);
    echo " <a target=_blank href=\"$w[a_wiki_en]\"><img height=20 border=0 src=i/wikipedia.jpg></a> ";

    echo "<p>Map position: ";
    echo "<input id=sel1 type=text size=80 name=map_pos value='$w[map_pos]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name2, map_pos FROM aq_artists";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name2]'></option>";
    }
    echo "</datalist>";

    echo "<p>Map year delta: ";
    echo "<input id=sel1 type=text size=80 name=map_year value='$w[map_year]' list=bcomlist><br>";

    //echo "<p>Map year delta: <input name=map_year value='$w[map_year]'>";
    echo "<p>Map right: <input name=map_right value='$w[map_right]'>";
    echo "<p>Comment: <input size=80 name=map_comment value='$w[map_comment]'>";
    echo "<p>Genre: <input size=80 name=a_genre value='$w[a_genre]'>";
    echo "<p>Nation: <input size=80 name=a_nation value='$w[a_nation]'>";
    echo "<p>Name: <input size=80 name=a_name value='$w[a_name]'>";
    echo "<p>Name2: <input size=80 name=a_name2 value='$w[a_name2]'>";
    echo "<p><input type=submit>";
    echo "</form>";
    exit;
  }
  
  if (isset($map_x2)) {
    // count
    if (($map_x1+0) == 0) $map_x1 = lookup_pos($map_x1);
    if (($map_x2+0) == 0) $map_x2 = lookup_pos($map_x2);
    echo "Updating tag...<br>";
    //die("$map_x1 $map_x2");
    // change
    $q = "UPDATE aq_tags SET map_x1='$map_x1', map_x2='$map_x2', map_y1='$map_y1', map_y2='$map_y2', 
      map_label='$map_label', map_active='$map_active', 
      t_year1='$t_year1', t_year2='$t_year2', t_year1t='$t_year1t', t_year2t='$t_year2t', map_color1='$map_color1',
      map_color2='$map_color2', t_wiki='$t_wiki', t_name='$t_name2' WHERE t_name='$t_name'";
    //die($q);
    $r = mysql_query($q);
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"build-amap.php#t$t_name\");</script>"); 
  }
  
  if (isset($t_name)) {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").setSelectionRange(0, document.getElementById(\"sel1\").value.length)'>";
    $q = "SELECT * FROM aq_tags WHERE t_name='$t_name'";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_array($r);
    echo "<form>";
    echo "<input type=hidden name=t_name value='$t_name'>";
    echo "<b>$w[t_name]</b>";
    $wiki = $w[t_wiki];
    if ($wiki == '') $wiki = $w[t_name];
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$wiki'><img height=20 border=0 src=i/wikipedia.jpg></a> ";

    echo "<p>Map x1: ";
    echo "<input id=sel1 type=text size=80 name=map_x1 value='$w[map_x1]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name2, map_pos FROM aq_artists";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name2]'></option>";
    }
    echo "</datalist>";

    echo "<p>Map y1: <input name=map_y1 value='$w[map_y1]'>";
    echo "<p>Map x2: ";
    echo "<input id=sel1 type=text size=80 name=map_x2 value='$w[map_x2]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name2, map_pos FROM aq_artists";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name2]'></option>";
    }
    echo "</datalist>";
    echo "<p>Map y2: <input name=map_y2 value='$w[map_y2]'>";

    echo "<p>Map active year1: <input name=t_year1 value='$w[t_year1]'> unknown <input name=t_year1t value='$w[t_year1t]'>";
    echo "<p>Map active year2: <input name=t_year2 value='$w[t_year2]'> unknown <input name=t_year2t value='$w[t_year2t]'>";
    echo "<p>Map color1: <input name=map_color1 value='$w[map_color1]'>";
    echo "<p>Map color2: <input name=map_color2 value='$w[map_color2]'>";
    echo "<p>Map label position: <input name=map_label value='$w[map_label]'>";
    echo "<p>Map active right: <input name=map_active value='$w[map_active]'>";
    echo "<p>Tag name: <input name=t_name2 value='$w[t_name]'>";
    echo "<p>Wiki: <input name=t_wiki value='$w[t_wiki]'>";
    echo "<p><font color=red><b>Move tag with artists to x:</font></b> <input name=move_x>";
    echo "<p><input type=submit>";
    echo "</form>";
    exit;
  }
  
  function awiki($name) {
    $wsa = explode(", ", $name);
    $wiki = "";
    if (count($wsa)>1) $wiki = "$wsa[1] ";
    $wiki .= "$wsa[0]";
    return $wiki;
  }

  function y($y) {
    GLOBAL $astart, $cent_step;
    $y = round($y);
    $cent = floor($y/$cent_step);
    return 20+round(($astart[$cent]+($y/$cent_step-$cent)*($astart[$cent+1]-$astart[$cent])));
  }

  function make_nation_col($st) {
    $cl='black';
    if (strpos($st, "Japan") !== FALSE) $cl="black";
    if (strpos($st, "Islam") !== FALSE) $cl="black";
    if (strpos($st, "India") !== FALSE) $cl="black";
    if (strpos($st, "Pre-hist") !== FALSE) $cl="black";
    if (strpos($st, "Christ") !== FALSE) $cl="brown";
    if (strpos($st, "Korea") !== FALSE) $cl="black";
    if (strpos($st, "India") !== FALSE) $cl="black";
    if (strpos($st, "Chin") !== FALSE) $cl="orange";
    if (strpos($st, "Gree") !== FALSE) $cl="black";
    if (strpos($st, "Mesopot") !== FALSE) $cl="black";
    if (strpos($st, "Egypt") !== FALSE) $cl="black";
    if (strpos($st, "Roman") !== FALSE) $cl="red";
    if (strpos($st, "Assyr") !== FALSE) $cl="black";
    if (strpos($st, "Byzant") !== FALSE) $cl="black";
    if (strpos($st, "Assyr") !== FALSE) $cl="black";
    if (strpos($st, "Australi") !== FALSE) $cl="black";
    if (strpos($st, "Americ") !== FALSE) $cl="black";
    if (strpos($st, "USA") !== FALSE) $cl="black";
    if (strpos($st, "Mexic") !== FALSE) $cl="black";
    if (strpos($st, "Canad") !== FALSE) $cl="black";
    if (strpos($st, "Ital") !== FALSE) $cl="red";
    if (strpos($st, "Floren") !== FALSE) $cl="red";
    if (strpos($st, "Fren") !== FALSE) $cl="blue";
    if (strpos($st, "Fran") !== FALSE) $cl="blue";
    if (strpos($st, "Engl") !== FALSE) $cl="green";
    if (strpos($st, "Brit") !== FALSE) $cl="green";
    if (strpos($st, "Dutc") !== FALSE) $cl="black";
    if (strpos($st, "Flem") !== FALSE) $cl="black";
    if (strpos($st, "Germ") !== FALSE) $cl="brown";
    if (strpos($st, "Europ") !== FALSE) $cl="brown";
    if (strpos($st, "Austri") !== FALSE) $cl="brown";
    if (strpos($st, "Spa") !== FALSE) $cl="black";
    if (strpos($st, "Hung") !== FALSE) $cl="black";
    if (strpos($st, "Cze") !== FALSE) $cl="black";
    if (strpos($st, "Croa") !== FALSE) $cl="black";
    if (strpos($st, "Armen") !== FALSE) $cl="black";
    if (strpos($st, "Lith") !== FALSE) $cl="black";
    if (strpos($st, "Pol") !== FALSE) $cl="black";
    if (strpos($st, "Belg") !== FALSE) $cl="black";
    if (strpos($st, "Norw") !== FALSE) $cl="lblue";
    if (strpos($st, "Rus") !== FALSE) $cl="black";
    if ($cl == "") echo "$st<br>";
    return $cl;
  }

  function make_nation_bgcol($st) {
    $cl = "white";
    if (strpos($st, "Japan") !== FALSE) $cl="lviolet";
    if (strpos($st, "Kore") !== FALSE) $cl="lblue2";
    if (strpos($st, "Islam") !== FALSE) $cl="lorange";
    if (strpos($st, "Span") !== FALSE) $cl="lyellow";
    if (strpos($st, "Assyr") !== FALSE) $cl="lorange";
    if (strpos($st, "Gree") !== FALSE) $cl="lgray";
    if (strpos($st, "India") !== FALSE) $cl="lgreen2";
    if (strpos($st, "Flem") !== FALSE) $cl="lyellow";
    if (strpos($st, "Dutc") !== FALSE) $cl="lcyan";
    if (strpos($st, "Rus") !== FALSE) $cl="lred";
    if (strpos($st, "Hung") !== FALSE) $cl="lgray";
    if (strpos($st, "Cze") !== FALSE) $cl="lgray";
    if (strpos($st, "Croa") !== FALSE) $cl="lgray";
    if (strpos($st, "Armen") !== FALSE) $cl="lgray";
    if (strpos($st, "Lith") !== FALSE) $cl="lgray";
    if (strpos($st, "Pol") !== FALSE) $cl="lgray";
    if (strpos($st, "Belg") !== FALSE) $cl="lgray";
    return $cl;
  }
  
  function draw_box($x1, $y1, $x2, $y2, $col, $col2, $text, $pos, $act, $wiki, $min, $max, $mint, $maxt) {
    GLOBAL $lh, $im, $cl, $font2, $gcount, $area_main, $area_dev, $btext, $im_width, $box, $url_main;
    $x1 += 34;
    $x2 += 34;
    $box[$text][x1] = $x1;
    $box[$text][x2] = $x2;
    $box[$text][y1] = $y1;
    $box[$text][y2] = $y2;
    $gcount[strtolower($text)]++;
    $font_size=10;
    $btext .= "<a id='t$text' name='t$text' style='position: absolute; top: ".($y1-15)."px; left: ".($im_width)."px'><font color=white size=3>$text</font></a>\n";
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
    $text2 = $text;
    $bbox = imageftbbox($font_size, 0, $font2, $text2);
    if ($bbox[4] > abs($x2-$x1)) {
      $text2 = str_replace(" ", "\n", $text2);
      $bbox = imageftbbox($font_size, 0, $font2, $text2);
    }
    //print_r($bbox);
    if ($pos == 1) { // Left top
      $tx = $x1+8;
      $ty = $y1+5-$bbox[5];
    }
    if ($pos == 2) { // Right top
      $tx = $x2-8-$bbox[4];
      $ty = $y1+3-$bbox[5];
    }
    if ($pos == 3) { // Right bottom
      $tx = $x2-8-$bbox[4];
      $ty = $y2-5;
    }
    if ($pos == 4) { // Left bottom
      $tx = $x1+8;
      $ty = $y2-5;
    }
    //imagettftext($im, $font_size, 0, $tx, $ty, $col2, $font2, $text);
    imagettfstroketext($im, $font_size, 0, $tx, $ty, $col2, $cl[white], $font2, $text2, 1);
    //$text = str_replace('(', '', $text);
    //$text = str_replace(')', '', $text);
    $bx1 = $tx-4;
    $bx2 = $tx+$bbox[4]+5;
    $by1 = $ty+5;
    $by2 = $ty+$bbox[5]-2;
    $x11 = round(($bx1+$bx2)/2);
    /*
    $area_main .= "<area href='<?=\$url_main;?>/aquiz/artists.php?tag=$text' shape=rect coords='$bx1,$by1,$bx2,$by2'>";
    $area_dev .= "<area href='build-amap.php?t_name=$text' shape=rect coords='$x11,$by1,$bx2,$by2'>";
    $area_dev .= "<area target=_blank href='http://en.wikipedia.org/w/index.php?search=$text' shape=rect coords='$bx1,$by1,$x11,$by2'>";
    */
    $area_main .= make_area($bx1, $by1, $bx2, $by2, "<?=\$url_main;?>/aquiz/artists.php?tag=$text");
    $area_dev .= make_area($x11, $by1, $bx2, $by2, "build-amap.php?t_name=$text");
    if ($wiki != '') $text = $wiki;
    $area_dev .= make_area($bx1, $by1, $x11, $by2, "http://en.wikipedia.org/w/index.php?search=$text");
    // show active years
    if ($min != 0) {
      $ay1 = y($min);
      $ay2 = y($max);
      if ($act == 1) {
        $ax = $x2-3;
      } else {
        $ax = $x1+1;
      }
      // Show dashed active
      if ($maxt == 1) {
        $ay2 -= 20;
        imagefilledrectangle($im, $ax, $ay2+0,  $ax+2, $ay2+0+1,  $col2);
        imagefilledrectangle($im, $ax, $ay2+4,  $ax+2, $ay2+4+1,  $col2);
        imagefilledrectangle($im, $ax, $ay2+8,  $ax+2, $ay2+8+1,  $col2);
        imagefilledrectangle($im, $ax, $ay2+12, $ax+2, $ay2+12+1,  $col2);
        imagefilledrectangle($im, $ax, $ay2+16, $ax+2, $ay2+16+1, $col2);
      }
      imagefilledrectangle($im, $ax, $ay1, $ax+2, $ay2, $col2);
    }
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
    GLOBAL $file1, $file2;
    fputs($file1, $st."\n");
    fputs($file2, $st."\n");
    echo $st;
  }
  
  function fps_main($st) {
    GLOBAL $file1;
    fputs($file1, $st."\n");
    //echo $st;
  }
  
  function fps_dev($st) {
    GLOBAL $file2;
    fputs($file2, $st."\n");
    echo $st;
  }
  
  function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
    for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
        for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
            $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
    return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
  }
  
  function draw_cent($year) {
    GLOBAL $font, $font_size, $im, $im_width;
    $y = y($year);
    imageline($im, 20, $y, $im_width, $y, IMG_COLOR_STYLED);
    if ($year == 0) imageline($im, 21, $y+1, $im_width, $y+1, IMG_COLOR_STYLED);
    $txt = abs($year);
    if ($year<0) $txt .= "BC";
    $bbox = imagettfbbox($font_size, 90, $font, $txt);
    imagefttext($im, $font_size, 90, 16, $y-round($bbox[3]/2)-3, $cl[black], $font, $txt);
  }

  function image_gradientrect($img, $x, $y, $x1, $y1, $start, $end) {
    if($x > $x1 || $y > $y1) {
      return false;
    }
    $s = array(
      hexdec(substr($start,0,2)),
      hexdec(substr($start,2,2)),
      hexdec(substr($start,4,2))
    );
    $e = array(
      hexdec(substr($end,0,2)),
      hexdec(substr($end,2,2)),
      hexdec(substr($end,4,2))
    );
    $steps = $y1 - $y;
    for($i = 0; $i < $steps; $i++) {
      $r = $s[0] - ((($s[0]-$e[0])/$steps)*$i);
      $g = $s[1] - ((($s[1]-$e[1])/$steps)*$i);
      $b = $s[2] - ((($s[2]-$e[2])/$steps)*$i);
      $color = imagecolorallocate($img,$r,$g,$b);
      imagefilledrectangle($img,$x,$y+$i,$x1,$y+$i+1,$color);
    }
    return true;
  }  

  function image_gradientrect2($img, $x, $y, $x1, $y1, $col) {
    $s = array(
      hexdec(substr($col, 0, 2)),
      hexdec(substr($col, 2, 2)),
      hexdec(substr($col, 4, 2))
    );
    $steps = abs($y1 - $y);
    $step = 1;
    if ($y1<$y) $step=-1;
    $y_cur = $y;
    for($i = 0; $i < $steps; $i++) {
      $y_cur = $y_cur+$step;
      $alpha = 50+round(77/$steps*$i);
      $color = imagecolorallocatealpha($img, $s[0], $s[1], $s[2], $alpha);
      if ($i>$steps-12) $dim = round(($i-$steps+12)/6);
      /*
      if ($dim_old < $dim) {
        $color2 = imagecolorallocatealpha($img, $r, $g, $b, round(127-(127-$alpha)/2));
        //imagefilledrectangle($img, $x+$dim_old, $y_cur+1, $x+$dim_old, $y_cur-1, $color2);
        //imagefilledrectangle($img, $x1-$dim_old, $y_cur, $x1-$dim_old-1, $y_cur+1, $color2);
        $dim_old = $dim;
      } 
      */
      imagefilledrectangle($img, $x+$dim, $y_cur, $x1-$dim, $y_cur+1, $color);
    }
    return true;
  }  

  $font = "fonts/arial.ttf";
  $font2 = "fonts/arialb.ttf";
  $im_width=1820;
  $im_height=2000;
  $lh = 14;
  $im = imagecreatetruecolor($im_width, $im_height);
  //imageantialias($im, true);
  $cl[red] = imagecolorallocate($im, 200, 0, 0);
  $cl[lred] = imagecolorallocate($im, 250, 200, 200);
  $cl[pink] = imagecolorallocate($im, 255, 150, 150);
  $cl[green] = imagecolorallocate($im, 0, 140, 0);
  $cl[lgreen] = imagecolorallocate($im, 0, 200, 0);
  $cl[lgreen2] = imagecolorallocate($im, 200, 255, 200);
  $cl[yellow] = imagecolorallocate($im, 255, 255, 0);
  $cl[lyellow] = imagecolorallocate($im, 255, 255, 200);
  $cl[blue] = imagecolorallocate($im, 0, 0, 255);
  $cl[lblue] = imagecolorallocate($im, 100, 100, 255);
  $cl[lblue2] = imagecolorallocate($im, 180, 180, 255);
  $cl[brown] = imagecolorallocate($im, 150, 80, 0);
  $cl[orange] = imagecolorallocate($im, 250, 120, 0);
  $cl[lorange] = imagecolorallocate($im, 255, 220, 180);
  $cl[cyan] = imagecolorallocate($im, 0, 150, 150);
  $cl[lcyan] = imagecolorallocate($im, 190, 250, 250);
  $cl[violet] = imagecolorallocate($im, 150, 0, 200);
  $cl[lviolet] = imagecolorallocate($im, 220, 160, 255);
  $cl[black] = imagecolorallocate($im, 0, 0, 0);
  $cl[white] = imagecolorallocate($im, 255, 255, 255);
  $cl[gray] = imagecolorallocate($im, 180, 180, 180);
  $cl[gray2] = imagecolorallocate($im, 140, 140, 140);
  $cl[dgray] = imagecolorallocate($im, 50, 50, 50);
  $cl[lgray] = imagecolorallocate($im, 220, 220, 220);
  $cl[agreen] = imagecolorallocatealpha($im, 100, 255, 100, 100);
  $cl[ablue] = imagecolorallocatealpha($im, 80, 80, 255, 110);
  $cl[ayellow] = imagecolorallocatealpha($im, 255, 255, 100, 100);
  $cl[ared] = imagecolorallocatealpha($im, 255, 100, 100, 100);
  $cl[aorange] = imagecolorallocatealpha($im, 255, 120, 0, 100);
  $cl[aviolet] = imagecolorallocatealpha($im, 180, 120, 255, 100);
  $cl[amagenta] = imagecolorallocatealpha($im, 255, 100, 255, 100);
  $cl[acyan] = imagecolorallocatealpha($im, 0, 200, 200, 100);
  $cl[agray] = imagecolorallocatealpha($im, 40, 40, 40, 100);
  $cl[abrown] = imagecolorallocatealpha($im, 80, 60, 0, 100);
  $cl[agray2] = imagecolorallocatealpha($im, 40, 40, 40, 118);
  $font_size = 10;
  imagefill($im, 0, 0, $cl[white]);
  
  // Count density
  $q = "SELECT a_start, a_stop FROM aq_artists WHERE a_rating>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $year1 = $w[a_start];
    $year2 = $w[a_stop];
    if ($year2 == 0) $year2 = 2016;
    $acnt[floor(($year2+$year1)/2/$cent_step)]++;
  }
  $pos = 5;
  $acnt[-40100/$cent_step] = 1;
  $acnt[1700/$cent_step] = 10;
  $acnt[1400/$cent_step] = 18;
  $acnt[1300/$cent_step] = 5;
  $acnt[1500/$cent_step] = 16;
  $acnt[1600/$cent_step] = 17;
  $acnt[1800/$cent_step] = 17;
  $acnt[1900/$cent_step] = 30;
  $acnt[2000/$cent_step] = 10;
  for ($i=-40100/$cent_step; $i<3000/$cent_step; $i++) {
    $astart[$i] = $pos;
    $pos += round($acnt[$i]*14);
  }
  ksort($acnt);
  //print_r($acnt);

  // Show network
  //imagefilledrectangle($im, x(1400), 20, x(1600), $im_height, $cl[lgray]);
  //imagefilledrectangle($im, x(1750), 20, x(1820), $im_height, $cl[lgray]);
  //imagefilledrectangle($im, x(1900), 20, x(1960), $im_height, $cl[lgray]);
  imageline($im, 0, 0, 0, $im_height, $cl[gray]);
  imageline($im, $im_width-1, 0, $im_width-1, $im_height-1, $cl[gray]);
  imageline($im, 0, $im_height-1, $im_width-1, $im_height-1, $cl[gray]);
  imageline($im, 0, 0, $im_width-1, 0, $cl[gray]);
  imageline($im, 20, 0, 20, $im_height, $cl[gray]);
  $dashed = array($cl[gray], $cl[gray], $cl[gray], $cl[white], $cl[white], $cl[white]);
  imagesetstyle($im, $dashed);
  //draw_cent(-40000);
  draw_cent(-3000);
  draw_cent(-1000);
  draw_cent(0);
  //draw_cent(100);
  draw_cent(200);
  //draw_cent(300);
  //draw_cent(400);
  //draw_cent(500);
  //draw_cent(600);
  //draw_cent(700);
  //draw_cent(800);
  draw_cent(900);
  //draw_cent(1000);
  //draw_cent(1100);
  draw_cent(1200);
  draw_cent(1300);
  draw_cent(1400);
  draw_cent(1450);
  draw_cent(1500);
  draw_cent(1550);
  draw_cent(1600);
  draw_cent(1650);
  draw_cent(1700);
  draw_cent(1750);
  draw_cent(1800);
  draw_cent(1850);
  draw_cent(1900);
  draw_cent(1950);
  draw_cent(2000);

  // Show legend
  $legend_x = -100;
  $legend_y = -400;
  $im_scroll = imagecreatefromgif('i/scroll5.gif');
  imagecopy($im, $im_scroll, $legend_x+1196, $legend_y+470, 0, 0, 320, 414);

  imagettfstroketext($im, $font_size+5, 0, $legend_x+1290, $legend_y+550, $cl[white], $cl[abrown], $font2, "Color legend", 1);
  $nat_legend = array('American', 'Italian', 'French', 'Russian', 'Dutch', 'German', 
    'British', 'Spanish', 'Greek', 'Chinese', 'Mexican', 'Indian', 'Japanese', 'Islamic',
    'Belgian', 'Czech', 'Lithuanian', 'Armenian', 'Korean', 'Other');
  $q = "SELECT *, COUNT(*) as cnt FROM aq_artists WHERE map_pos>0 AND a_rating>0 GROUP BY a_nation ORDER BY cnt desc";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $x = $legend_x+1270;
  $y = $legend_y+600;
  for ($i=0; $i<count($nat_legend); $i++) {
    $nat = $nat_legend[$i];
    $cl1 = $cl[make_nation_col($nat)];
    $cl2 = $cl[make_nation_bgcol($nat)];
    imagettfstroketext($im, $font_size, 0, $x, $y, $cl1, $cl2, $font2, $nat, 3);
    $bbox = imageftbbox($font_size, 0, $font2, $nat);
    $x1 = $x-5;
    $x2 = $x+$bbox[4]+5;
    $y1 = $y+5;
    $y2 = $y-$lh-1;
    if ($nat != 'Other') {
      $area_main .= make_area($x1, $y1, $x2, $y2, "<?=\$url_main;?>/aquiz/artists.php?nat=$nat");
      $area_dev .= make_area($x1, $y1, $x2, $y2, "$url_main/aquiz/artists.php?nat=$nat");
    }
    $y += 23;
    if ($y > $legend_y+820) {
      $x += 120;
      $y = $legend_y+600;
    }
  }
  $dx = 25;
  imagefilledrectangle($im, $legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, $cl[green]);
  imagerectangle($im, $legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, $cl[gray]);
  imagefttext($im, $font_size+5, 0, $legend_x+1266, $legend_y+443, $cl[white], $font2, "WATCH TUTORIAL");
  $area_main .= make_area($legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, "i/tutorial.png", '', 'target=_blank');
  $area_dev .= make_area($legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, "i/tutorial.png", '', 'target=_blank');

  // Load artists
  $q = "SELECT a_start, a_stop, a_id, a_years, a_name, a_name2, a_rating, a_genre, a_nation, a_wiki_en,
    map_comment, map_pos, map_right, map_year
    FROM aq_artists WHERE map_pos>0 AND a_rating>0 ORDER BY a_start";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_array($r);
    $cp[$wa[$i][a_name]] = $wa[$i][map_pos];
    if ($wa[$i][a_wiki_en] == '') $wa[$i][a_wiki_en] = "http://en.wikipedia.org/w/index.php?search=".awiki($wa[$i][a_name]);
  }

  // Show years of life
  /*  
  $z = 1;
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    if ($w[map_pos] == -1) continue;
    // Cut genre
    $ga = explode(", ", $w[a_genre]);
    foreach ($ga as $key => $val) {
      if (($gcount[strtolower($val)]==0) && ($val != $w[a_name])) {
        if ($agenre[$i] != '') $agenre[$i] .= ', ';
        $agenre[$i] .= $val;
      }
    }
    $z2 = $w[map_pos]-1;
    if ($z2 == -1) {
      $z2 = $z;
      $z += 200;
      if ($z>1100) $z = ($i*2 % 200);
    }
    $year1 = $w[a_start];
    $year2 = $w[a_stop];
    $fnt = $font;
    if ($w[a_rating]>2) $fnt = $font2;
    $name = "$w[a_name2]";
    if ($w[map_comment] != '') $name .= " - $w[map_comment]";
    $bbox = imageftbbox($font_size, 0, $fnt, $name);
    if ($year2 == 0) $year2 = 2016;
    $x = $z2+40;
    $x1 = $x-5;
    image_gradientrect2($im, $x1-2, y(($year1+$year2)/2), $x1+2, y($year1), '888888');
    image_gradientrect2($im, $x1-2, y(($year1+$year2)/2)-1, $x1+2, y($year2), '888888');
    //imagefilledrectangle($im, $x1-2, y($year1), $x1+2, y($year2), $cl[agray2]);
  }
  */

  // Show tags
  $q = "SELECT * FROM aq_tags WHERE map_x2!=0";
  $r = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r);
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_array($r);
    draw_box($w2[map_x1], y($w2[map_y1]), $w2[map_x2], y($w2[map_y2]), $cl[$w2[map_color1]], 
      $cl[$w2[map_color2]], $w2[t_name], $w2[map_label], $w2[map_active], 
      $w2[t_wiki], $w2[t_year1], $w2[t_year2], $w2[t_year1t], $w2[t_year2t]);
  }

  // Show links
  //draw_link('Gothic', 'Romanticism', -10, 0, 0, $cl[gray]);
  
  // Show artists
  $z = 1;
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    if ($w[map_pos] == -1) continue;
    $z2 = $w[map_pos]-1;
    if ($z2 == -1) {
      $z2 = $z;
      $z += 200;
      if ($z>1100) $z = ($i*2 % 200);
    }
    $fnt = $font;
    if ($w[a_rating]>2) $fnt = $font2;
    $cl1 = $cl[make_nation_col($w[a_nation])];
    $cl2 = $cl[make_nation_bgcol($w[a_nation])];
    //$cl2 = $cl[white];
    $cl4 = $cl[gray];
    if ($cl2 == $cl[dgray]) $cl4 = $cl[dgray];
    if ($w[map_pos] == 0) $cl2 = $cl[aorange];
    $year1 = $w[a_start];
    $year2 = $w[a_stop];
    if ($year2 == 0) $year2 = 2016;
    $year = ($year1+$year2)/2 + $w[map_year];
    //if ($w[map_year] != 0) $year += $w[map_year];
    $y = y($year)+$lh/2+1;
    $x = $z2+40;
    $name = "$w[a_name2]";
    if ($w[map_comment] != '') $name .= " - $w[map_comment]";
    $bbox = imageftbbox($font_size, 0, $fnt, $name);
    if ($w[map_right] == 1) $x = $x - $bbox[4] - 10;
    $x1 = $x-5;
    $x2 = $x+$bbox[4]+5;
    $y1 = $y+5;
    $y2 = $y-$lh-1;
    imagefilledrectangle($im, $x1, $y1, $x2, $y2, $cl2);
    imagerectangle($im, $x1, $y1, $x2, $y2, $cl1);
    if ($w[map_right] == 1) {
      //imagefilledrectangle($im, $x2+1, $y1, $x2-1, $y2, $cl1);
    } else {
      //imagefilledrectangle($im, $x1+1, $y1, $x1-1, $y2, $cl1);
    }
    imagefttext($im, $font_size, 0, $x, $y, $cl1, $fnt, $name);
    $area_main .= make_area($x1, $y1, $x2, $y2, 
      "<?=\$url_main;?>/aquiz/artist.php?mp=$w[map_pos]&a_id=$w[a_id]&g=$w[a_genre]&y=$w[a_start]", 
      "$w[a_name]\n$w[a_genre]\n$w[a_nation]\n$w[a_years]");
    // Dev areas
    $x11 = round(($x1+$x2)/2);
    $area_dev .= make_area($x1, $y1, $x11, $y2, 
      "$url_main/aquiz/artist.php?mp=$w[map_pos]&a_id=$w[a_id]&g=$w[a_genre]&y=$w[a_start]", 
      "$w[a_name]\n$w[a_genre]\n$w[a_nation]\n$w[a_years]");
    $area_dev .= make_area($x11, $y1, $x2, $y2, 
      "build-amap.php?mp=$w[map_pos]&a_id=$w[a_id]&g=$w[a_genre]&y=$w[a_start]", 
      "$w[a_name]\n$w[a_genre]\n$w[a_nation]\n$w[a_years]");
    $btext .= "<a id='a$w[a_id]' name='#a$w[a_id]' style='position: absolute; top: ".($y-15)."px; left: ".($im_width)."px'><font color=white size=3>$name</font></a>\n";
  }
  imagefttext($im, $font_size, 0, 1455, $im_height-10, $cl[black], "fonts/arial.ttf", "This timeline was created by Alexey Arkhipenko (c) 2016");
  // Save map
  imagepng($im, "amap/maps/en$id.png");
  $file1 = fopen("amap/index$id.php", "w");
  $file2 = fopen("amap/index$id-dev.php", "w");
  fps("<? include '../url.php'; ?>");
  fps("<? include '../analytics.php'; ?>");
  fps("<? include 'style.php'; ?>");
  fps("<? include 'menu.php'; ?>");
  fps_dev("<style>#tooltip { text-align:center; background:black; color:white; padding:3px 0; width:60px; position:fixed; display:none; opacity: 0.6; white-space:nowrap; }</style>");
  fps("<script type='text/javascript' src='http://code.jquery.com/jquery-git.js'></script>");
  fps("<script src='js/jquery-1.9.1.min.js'></script>");
  fps("<script src='js/jquery.maphighlight.js'></script>");
  fps("<script type='text/javascript'>$(function() {");
  fps("$('.coords').maphilight({ stroke: false, fillColor: '999999',});");
  fps("});</script>");
  fps("<style>.area:hover { background: rgba(120, 120, 120, 0.2); }</style>");
  fps("<p>");
  fps("<table><tr><td>");
  fps("<div style='position: relative; width: 100%'>");
  fps($btext);
  fps("<img align=left class=coords border=0 src=maps/en$id.png>");
  fps("<div style='background:transparent; position:absolute; top: 0px; left: 0px; width:100%; height:100%;'>");
  fps_main($area_main);
  fps_dev($area_dev);
  fps("</div>");
  fps("</div>");
  fps("</table>");
  fps("<p>Most styles have a thick colored line at their side, which shows the main interval when the style was active.");
  fps("<p>Click on artist, style or period to know more and view paintings. Bold font shows most known artists.");
  fps("<p>Most well known artists are marked bold.");
  fps("<p>Image is searchable. Use Ctrl+F or 'Search in page'.");
  fps("<p>Other interactive timelines: <a href=index4.php>timeline by country</a>, <a href=index3.php>linear timeline</a>.");
  fps_dev("
    <script type='text/javascript'>//<![CDATA[
    $(window).on('load', function() {
    var tooltip = $( '<div id=tooltip>' ).appendTo( 'body' )[0];
    $( '.coords' ).
    each(function () {
        var pos = $( this ).position(),
            top = pos.top,
            left = pos.left,
            width = $( this ).width(),
            height = $( this ).height();
        
        $( this ).
            mousemove(function ( e ) {
                var x = ( e.clientX - 42 + $(window).scrollLeft()),
                    y = ( ( ( e.clientY - top ) ) );
                
                $( tooltip ).text( 'x = ' + x).css({
                    left: e.clientX - 30,
                    top: e.clientY - 30
                }).show();
            }).
            mouseleave(function () {
                $( tooltip ).hide();
            }); 
    });
    });</script>
  ");
  fclose($file1);
  fclose($file2);

  stop_time();
?>
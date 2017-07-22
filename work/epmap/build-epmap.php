<?
  include "qlib.php";
  
  load_comps();
  start_time();
  
  $id='';
  
  secure_variable("a_id");
  secure_variable("map_pos");
  secure_variable("map_right");
  secure_variable("map_year");
  secure_variable("map_img");
  secure_variable("map_comment");
  secure_variable("map_name");
  secure_variable("t_name");
  secure_variable("a_country");
  secure_variable("a_name");
  secure_variable("a_rating");
  secure_variable("a_year1");
  secure_variable("a_year2");
  secure_variable("a_name");
  secure_variable("forcemove");

  secure_variable("t_name");
  secure_variable("t_name2");
  secure_variable("t_wiki");
  secure_variable("map_x1");
  secure_variable("map_x2");
  secure_variable("map_y1");
  secure_variable("map_y2");
  secure_variable("map_active");
  secure_variable("map_label");
  secure_variable("map_color");
  secure_variable("t_year1");
  secure_variable("t_year2");
  secure_variable("t_year1t");
  secure_variable("t_year2t");
  secure_variable("move_x");
  
  $cent_step = 100; // step for density calculation
  $bg2txt_color = array('ared' => 'red', 'agreen' => 'green', 'agray' => 'black', 'ayellow' => 'brown', 
    'ablue' => 'blue', 'acyan' => 'cyan', 'amagenta' => 'red', 'aviolet' => 'violet', 'aorange' => 'brown');
    
  function make_area($x1, $y1, $x2, $y2, $href, $title='', $add='') {
    return "<a $add href='$href' title='$title'><div class=area style='position:absolute; width:".
      abs($x2-$x1)."px; height:".abs($y2-$y1)."px; left:".min($x1, $x2)."px; top:".min($y1, $y2)."px'></div></a>\n";
  }
  
  function lookup_pos($st) {
    // replace variables
    $q = "SELECT a_name, map_pos FROM ep_authors WHERE map_pos!=0 AND a_name LIKE '%$st%' ORDER BY a_rating, LENGTH(a_name)";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $w2 = mysql_fetch_assoc($r2);
    return $w2[map_pos];
  }
  
  function lookup_year($st) {
    // replace variables
    $q = "SELECT a_name, map_pos, a_year1, a_year2, map_year FROM ep_authors WHERE map_pos!=0 AND a_name LIKE '%$st%' ORDER BY a_rating, LENGTH(a_name)";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $w2 = mysql_fetch_assoc($r2);
    if ($w2[a_year1] == 0) return 0;
    $year1 = $w2[a_year1];
    $year2 = $w2[a_year2];
    //die("$w2[a_name]");
    if ($year2 == 0) $year2 = 2016;
    return round(($year1+$year2)/2)+$w2[map_year];
  }
  
  if (($move_x != 0) && ($move_x != $map_x1)) {
    $move_x = $move_x - $map_x1;
    // Check for collisions
    $q = "SELECT *,ROUND((IF(a_year2=0, 2016, a_year2)+a_year1)/2+map_year) as my FROM ep_authors";
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
      if (($p1==0) && ($p2==1)) {
        if (!isset($forcemove)) {
          die("<font color=red>Error: this move will include new artist $w2[a_name]</font>");
        } else {
          echo "New artist $w2[a_name] force included<br>";
        }
      }
    }
    echo "Moving tag $t_name ...<br>";
    // Move artists
    $q = "SELECT *,ROUND((IF(a_year2=0, 2016, a_year2)+a_year1)/2+map_year) as my FROM ep_authors";
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
        echo "Moving $w2[a_name]...<br>";
        mysql_query("UPDATE ep_authors SET map_pos=map_pos+($move_x) WHERE a_id='$w2[a_id]'");
        echo mysql_error();
      }
    }
    // Move tag
    $q = "UPDATE ep_tdesc SET map_x1=map_x1+($move_x), map_x2=map_x2+($move_x)
      WHERE t_name='$t_name'";
    //die($q);
    $r = mysql_query($q);
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"build-epmap.php\");</script>"); // #t$t_name
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
      $year1 = $a_year1;
      $year2 = $a_year2;
      if ($year2 == 0) $year2 = 2016;
      $map_year = $year-round(($year1+$year2)/2);
      //die("$year1 - $year2 - $year - $map_year<br>");
    }
    // change
    echo "Updating artist...<br>";
    $q = "UPDATE ep_authors SET map_pos='$map_pos', a_rating='$a_rating', map_right='$map_right', 
      a_name='$a_name', a_name='$a_name', a_country='$a_country', 
      map_comment='$map_comment', map_year='$map_year', map_img='$map_img' WHERE a_id='$a_id'";
    $r = mysql_query($q);
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"build-epmap.php\");</script>"); // #a$a_id
  }
  
  if (isset($a_id)) {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").setSelectionRange(0, document.getElementById(\"sel1\").value.length)'>";
    $q = "SELECT * FROM ep_authors WHERE a_id='$a_id'";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_array($r);
    echo "<form>";
    echo "<input type=hidden name=a_id value='$a_id'>";
    echo "<input type=hidden name=a_year1 value='$w[a_year1]'>";
    echo "<input type=hidden name=a_year2 value='$w[a_year2]'>";
    echo "<a href='$url_main/epquiz/authors.php?a_id=$w[a_id]'>$w[a_name]</a> [$w[a_year1]]";
    if ($w[a_wiki] == '') $w[a_wiki] = "http://en.wikipedia.org/w/index.php?search=".awiki($w[a_name]);
    echo " <a target=_blank href=\"$w[a_wiki]\"><img height=20 border=0 src=i/wikipedia.jpg></a> ";
    $q2 = "SELECT t_name FROM ep_atags WHERE a_id=".$w[a_id]."";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x > 0) echo ", ";
      echo "<a href=$url_main/epquiz/works.php?tag=$w2[t_name]>$w2[t_name]</a>";
    }

    echo "<p>Map position: ";
    echo "<input id=sel1 type=text size=80 name=map_pos value='$w[map_pos]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name, map_pos FROM ep_authors WHERE map_pos>0";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name]'></option>";
    }
    echo "</datalist>";

    echo "<p>Map year delta: ";
    echo "<input type=text size=80 name=map_year value='$w[map_year]' list=bcomlist><br>";

    //echo "<p>Map year delta: <input name=map_year value='$w[map_year]'>";
    echo "<p>Map right: <input name=map_right value='$w[map_right]'>";
    echo "<p>Comment: <input size=80 name=map_comment value='$w[map_comment]'>";
    //echo "<p>Genre: <input size=80 name=t_name value='$w[t_name]'>";
    echo "<p>Image: <input size=80 name=map_img value='$w[map_img]'>";
    echo "<p>Nation: <input size=80 name=a_country value='$w[a_country]'>";
    echo "<p>Name: <input size=80 name=a_name value='$w[a_name]'>";
    echo "<p>Rating: <input size=80 name=a_rating value='$w[a_rating]'>";
    //echo "<p>Name2: <input size=80 name=a_name value='$w[a_name]'>";
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
    $q = "UPDATE ep_tdesc SET map_x1='$map_x1', map_x2='$map_x2', map_y1='$map_y1', map_y2='$map_y2', 
      map_label='$map_label', map_active='$map_active', 
      t_year1='$t_year1', t_year2='$t_year2', t_year1t='$t_year1t', t_year2t='$t_year2t',
      map_color='$map_color', t_wiki='$t_wiki', map_name='$map_name' WHERE t_name='$t_name'";
    // t_name='$t_name2' 
    //die($q);
    $r = mysql_query($q);
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"build-epmap.php\");</script>"); //#t$t_name
  }
  
  if (isset($t_name)) {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").setSelectionRange(0, document.getElementById(\"sel1\").value.length)'>";
    $q = "SELECT * FROM ep_tdesc WHERE t_name='$t_name'";
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
    echo "<input type=text size=80 name=map_x1 value='$w[map_x1]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name, map_pos FROM ep_authors WHERE map_pos>0";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name]'></option>";
    }
    echo "</datalist>";

    echo "<p>Map y1: <input name=map_y1 value='$w[map_y1]'>";
    echo "<p>Map x2: ";
    echo "<input type=text size=80 name=map_x2 value='$w[map_x2]' list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    $q = "SELECT a_name, map_pos FROM ep_authors WHERE map_pos>0";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[a_name]'></option>";
    }
    echo "</datalist>";
    echo "<p>Map y2: <input name=map_y2 value='$w[map_y2]'>";

    echo "<p>Map active year1: <input name=t_year1 value='$w[t_year1]'> unknown <input name=t_year1t value='$w[t_year1t]'>";
    echo "<p>Map active year2: <input name=t_year2 value='$w[t_year2]'> unknown <input name=t_year2t value='$w[t_year2t]'>";
    echo "<p>Map color: <input name=map_color value='$w[map_color]' list=colorlist>";
    echo "<datalist id=colorlist>";
    echo "<option value='agray'></option>";
    echo "<option value='ared'></option>";
    echo "<option value='ablue'></option>";
    echo "<option value='acyan'></option>";
    echo "<option value='aviolet'></option>";
    echo "<option value='agreen'></option>";
    echo "<option value='ayellow'></option>";
    echo "<option value='amagenta'></option>";
    echo "<option value='aorange'></option>";
    echo "</datalist>";
    echo "<p>Map label position: <input name=map_label value='$w[map_label]'>";
    echo "<p>Map active right: <input name=map_active value='$w[map_active]'>";
    echo "<p>Tag name: <input name=t_name2 value='$w[t_name]'>";
    echo "<p>Map name: <input name=map_name value='$w[map_name]'>";
    echo "<p>Wiki: <input name=t_wiki value='$w[t_wiki]'>";
    echo "<p><font color=red><b>Move tag with artists to x:</font></b> <input id=sel1 name=move_x>";
    echo "<p>Force move including new artists: <input type=checkbox name=forcemove>";
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
    return 5+round(($astart[$cent]+($y/$cent_step-$cent)*($astart[$cent+1]-$astart[$cent])));
  }

  function make_nation_col($st) {
    $cl='black';
    if (strpos($st, "JPN") !== FALSE) $cl="black";
    if (strpos($st, "Islam") !== FALSE) $cl="black";
    if (strpos($st, "IND") !== FALSE) $cl="black";
    if (strpos($st, "Pre-hist") !== FALSE) $cl="black";
    if (strpos($st, "Christ") !== FALSE) $cl="brown";
    if (strpos($st, "KOR") !== FALSE) $cl="white";
    if (strpos($st, "VNM") !== FALSE) $cl="white";
    if (strpos($st, "CHI") !== FALSE) $cl="orange";
    if (strpos($st, "GRC") !== FALSE) $cl="black";
    if (strpos($st, "Mesopot") !== FALSE) $cl="black";
    if (strpos($st, "Egypt") !== FALSE) $cl="black";
    if (strpos($st, "ROM") !== FALSE) $cl="red";
    if (strpos($st, "Assyr") !== FALSE) $cl="black";
    if (strpos($st, "Byzant") !== FALSE) $cl="black";
    if (strpos($st, "Assyr") !== FALSE) $cl="black";
    if (strpos($st, "AUS") !== FALSE) $cl="black";
    if (strpos($st, "USA") !== FALSE) $cl="black";
    if (strpos($st, "MEX") !== FALSE) $cl="black";
    if (strpos($st, "CAN") !== FALSE) $cl="black";
    if (strpos($st, "ITA") !== FALSE) $cl="red";
    if (strpos($st, "Floren") !== FALSE) $cl="red";
    if (strpos($st, "FRA") !== FALSE) $cl="blue";
    if (strpos($st, "ENG") !== FALSE) $cl="green";
    if (strpos($st, "IRL") !== FALSE) $cl="green";
    if (strpos($st, "BRI") !== FALSE) $cl="green";
    if (strpos($st, "WEL") !== FALSE) $cl="green";
    if (strpos($st, "SCO") !== FALSE) $cl="green";
    if (strpos($st, "DUT") !== FALSE) $cl="black";
    if (strpos($st, "Flem") !== FALSE) $cl="black";
    if (strpos($st, "DEU") !== FALSE) $cl="brown";
    if (strpos($st, "AUS") !== FALSE) $cl="brown";
    if (strpos($st, "GER") !== FALSE) $cl="brown";
    if (strpos($st, "SPA") !== FALSE) $cl="black";
    if (strpos($st, "HUN") !== FALSE) $cl="black";
    if (strpos($st, "CZE") !== FALSE) $cl="black";
    if (strpos($st, "Croa") !== FALSE) $cl="black";
    if (strpos($st, "ARM") !== FALSE) $cl="black";
    if (strpos($st, "LIT") !== FALSE) $cl="black";
    if (strpos($st, "POL") !== FALSE) $cl="black";
    if (strpos($st, "PEL") !== FALSE) $cl="black";
    if (strpos($st, "NOR") !== FALSE) $cl="lblue";
    if (strpos($st, "RUS") !== FALSE) $cl="black";
    if (strpos($st, "AFR") !== FALSE) $cl="violet";
    if (strpos($st, "AUS") !== FALSE) $cl="magenta";
    if ($cl == "") echo "$st<br>";
    return $cl;
  }

  function make_nation_bgcol($st) {
    $cl = "white";
    if (strpos($st, "JAP") !== FALSE) $cl="lviolet";
    if (strpos($st, "KOR") !== FALSE) $cl="lblue";
    if (strpos($st, "VNM") !== FALSE) $cl="lblue";
    if (strpos($st, "PAK") !== FALSE) $cl="lorange";
    if (strpos($st, "PER") !== FALSE) $cl="lorange";
    if (strpos($st, "SPA") !== FALSE) $cl="lyellow";
    if (strpos($st, "Assyr") !== FALSE) $cl="lorange";
    if (strpos($st, "GRC") !== FALSE) $cl="lgray";
    if (strpos($st, "SVN") !== FALSE) $cl="lgray";
    if (strpos($st, "IND") !== FALSE) $cl="lgreen2";
    if (strpos($st, "Flem") !== FALSE) $cl="lyellow";
    if (strpos($st, "DUT") !== FALSE) $cl="lcyan";
    if (strpos($st, "RUS") !== FALSE) $cl="lred";
    if (strpos($st, "HUN") !== FALSE) $cl="lgray";
    if (strpos($st, "CZE") !== FALSE) $cl="lgray";
    if (strpos($st, "CRO") !== FALSE) $cl="lgray";
    if (strpos($st, "ARM") !== FALSE) $cl="lgray";
    if (strpos($st, "LIT") !== FALSE) $cl="lgray";
    if (strpos($st, "POL") !== FALSE) $cl="lgray";
    if (strpos($st, "BEL") !== FALSE) $cl="lgray";
    if (strpos($st, "AFR") !== FALSE) $cl="lyellow";
    if (strpos($st, "AUS") !== FALSE) $cl="lblue2";
    if (strpos($st, "CAN") !== FALSE) $cl="lcyan";
    return $cl;
  }
  
  function imagefilledarc2($im, $x0, $y0, $r1, $r2, $d1, $d2, $col) {
    //echo "imagefilledarc2($im, $x0, $y0, $r1, $r2, $d1, $d2, $col)<br>";
    $old_x = 0;
    $old_y = 0;
    $el = M_PI*($r1/2+$r2/2);
    $step = 360/$el*4;
    //echo "$step<br>";
    $d = $d1;
    if ($d2<$d1) return;
    $pa[] = $x0;
    $pa[] = $y0;
    for ($i=0; $i<10000; $i++) {
      $x = $x0+round($r2/2*cos(deg2rad($d)));
      $y = $y0+round($r1/2*sin(deg2rad($d)));
      if (($x != $old_x) || ($y != $old_y)) {
        $pa[] = $x;
        $pa[] = $y;
        $old_x = $x;
        $old_y = $y;
      }
      if ($d > $d2) break;
      $d += $step;
    }
    //print_r($pa);
    imagefilledpolygon($im, $pa, count($pa)/2, $col);
  }
  
  // helper function, draws pixel and mirrors it
  function setpixel4($img, $centerX, $centerY, $deltaX, $deltaY, $color, $d1, $d2)
  {
    if ($d1==0) imagesetpixel($img, $centerX + $deltaX, $centerY + $deltaY, $color);
    if ($d1==90) imagesetpixel($img, $centerX - $deltaX, $centerY + $deltaY, $color);
    if ($d1==270) imagesetpixel($img, $centerX + $deltaX, $centerY - $deltaY, $color);
    if ($d1==180) imagesetpixel($img, $centerX - $deltaX, $centerY - $deltaY, $color);
  }

  // Xiaolin Wu
  function imagearc2($img, $centerX, $centerY, $r1, $r2, $d1, $d2, $color) {
    $radiusX = $r1/2;
    $radiusY = $r2/2;
    static $maxTransparency = 0x7F; // 127
    $radiusX2 = $radiusX * $radiusX;
    $radiusY2 = $radiusY * $radiusY;
    // upper and lower halves
    $quarter = round($radiusX2 / sqrt($radiusX2 + $radiusY2));
    for ($x = 0; $x <= $quarter; $x++)
    {
      $y = $radiusY * sqrt(1-$x*$x/$radiusX2);
      $error = $y - floor($y);
      $transparency = round($error * $maxTransparency);
      $alpha  = $color | ($transparency << 24);
      $alpha2 = $color | (($maxTransparency - $transparency) << 24);
      setpixel4($img, $centerX, $centerY, $x, floor($y),   $alpha, $d1, $d2);
      setpixel4($img, $centerX, $centerY, $x, floor($y)+1, $alpha2, $d1, $d2);
    }
    // right and left halves
    $quarter = round($radiusY2 / sqrt($radiusX2 + $radiusY2));
    for ($y = 0; $y <= $quarter; $y++)
    {
      $x = $radiusX * sqrt(1-$y*$y/$radiusY2);
      $error = $x - floor($x);
      $transparency = round($error * $maxTransparency);
      $alpha  = $color | ($transparency << 24);
      $alpha2 = $color | (($maxTransparency - $transparency) << 24);
      setpixel4($img, $centerX, $centerY, floor($x),   $y, $alpha, $d1, $d2);
      setpixel4($img, $centerX, $centerY, floor($x)+1, $y, $alpha2, $d1, $d2);
    }
  }

  function draw_roundrectangle($img, $x1, $y1, $x2, $y2, $radius, $color, $filled=1) {
    //echo "$x1-$y1-$x2-$y2<br>";
    if ($filled==1) {
      imagefilledrectangle($img, $x1+$radius+1, $y1, $x2-$radius-1, $y2, $color);
      imagefilledrectangle($img, $x1, $y1+$radius+1, $x1+$radius, $y2-$radius-1, $color);
      imagefilledrectangle($img, $x2-$radius, $y1+$radius+1, $x2, $y2-$radius-1, $color);

      imagefilledarc2($img, $x1+$radius, $y1+$radius, $radius*2, $radius*2, 180 , 270, $color);
      imagefilledarc2($img, $x2-$radius, $y1+$radius, $radius*2, $radius*2, 270 , 360, $color);
      imagefilledarc2($img, $x1+$radius, $y2-$radius, $radius*2, $radius*2, 90 , 180, $color);
      imagefilledarc2($img, $x2-$radius, $y2-$radius, $radius*2, $radius*2, 0 , 90, $color);
    } else {
      imageline($img, $x1+$radius, $y1, $x2-$radius, $y1, $color);
      imageline($img, $x1+$radius, $y2, $x2-$radius, $y2, $color);
      imageline($img, $x1, $y1+$radius, $x1, $y2-$radius, $color);
      imageline($img, $x2, $y1+$radius, $x2, $y2-$radius, $color);

      imagearc2($img, $x1+$radius, $y1+$radius, $radius*2, $radius*2, 180 , 270, $color);
      imagearc2($img, $x2-$radius, $y1+$radius, $radius*2, $radius*2, 270 , 360, $color);
      imagearc2($img, $x1+$radius, $y2-$radius, $radius*2, $radius*2, 90 , 180, $color);
      imagearc2($img, $x2-$radius, $y2-$radius, $radius*2, $radius*2, 0 , 90, $color);
    }                
  }
  
  function draw_box($x1, $y01, $x2, $y02, $col, $text, $short, $pos, $act, $wiki, $min, $max, $mint, $maxt, $poly) {
    GLOBAL $lh, $im, $cl, $font2, $gcount, $area_main, $area_dev, $btext, $im_width, $box, 
      $url_main, $bg2txt_color;
    $col_txt = $cl[$bg2txt_color[$col]];
    $col = $cl[$col];
    $y1 = y($y01);
    $y2 = y($y02);
    $x1 += 34;
    $x2 += 34;
    $box[$text][x1] = $x1;
    $box[$text][x2] = $x2;
    $box[$text][y1] = $y1;
    $box[$text][y2] = $y2;
    $gcount[strtolower($text)]++;
    $font_size=10;
    $btext .= "<a id='t$text' name='t$text' style='position: absolute; top: ".($y1-15)."px; left: ".($im_width)."px'><font color=white size=3>$text</font></a>\n";
    $radius = 7; 
    if ($poly != '') {
      $pa = explode(',', $poly);
      foreach ($pa as $key => $val) {
        $pa2 = explode('x', $val);
        //print_r($pa2);
        $pco[] = $pa2[0]+$x1;
        $pco[] = y($pa2[1]+$y01);
      }
      //print_r($pco);
      imagefilledpolygon($im, $pco, count($pa), $col);
      imagepolygon($im, $pco, count($pa), $cl[gray]);
    } else {
      //imagefilledrectangle($im, $x1, $y1, $x2, $y2, $col);
      draw_roundrectangle($im, $x1, $y1, $x2, $y2, $radius, $col, 1);
      if ($text[0] != '(') {
        //imagerectangle($im, $x1, $y1, $x2, $y2, $cl[gray]);
        draw_roundrectangle($im, $x1, $y1, $x2, $y2, $radius, $cl[gray], 0);
      } else {
        $style = array($cl[gray], $cl[gray], $cl[gray], $cl[gray], $cl[gray], IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT);
        imagesetstyle($im, $style);
        imageline($im, $x1, $y1, $x1, $y2, IMG_COLOR_STYLED);
        imageline($im, $x2, $y1, $x2, $y2, IMG_COLOR_STYLED);
        imageline($im, $x1, $y2, $x2, $y2, IMG_COLOR_STYLED);
        imageline($im, $x1, $y1, $x2, $y1, IMG_COLOR_STYLED);
      }
    }
    $text2 = $short;
    $bbox = imageftbbox($font_size, 0, $font2, $text2);
    if ($bbox[4] > abs($x2-$x1)) {
      $text2 = str_replace(" ", "\n", $text2);
      $bbox = imageftbbox($font_size, 0, $font2, $text2);
    }
    //print_r($bbox);
    $margin = 5;
    if ($pos == 1) { // Left top
      $tx = $x1+$margin;
      $ty = $y1+5-$bbox[5];
    }
    if ($pos == 2) { // Right top
      $tx = $x2-$margin-$bbox[4];
      $ty = $y1+3-$bbox[5];
    }
    if ($pos == 3) { // Right bottom
      $tx = $x2-$margin-$bbox[4];
      $ty = $y2-5;
    }
    if ($pos == 4) { // Left bottom
      $tx = $x1+$margin;
      $ty = $y2-5;
    }
    //imagettftext($im, $font_size, 0, $tx, $ty, $col_txt, $font2, $text);
    imagettfstroketext($im, $font_size, 0, $tx, $ty, $col_txt, $cl[white], $font2, $text2, 1);
    //$text = str_replace('(', '', $text);
    //$text = str_replace(')', '', $text);
    $bx1 = $tx-4;
    $bx2 = $tx+$bbox[4]+5;
    $by1 = $ty+5;
    $by2 = $ty+$bbox[5]-2;
    $x11 = round(($bx1+$bx2)/2);
    /*
    $area_main .= "<area href='<?=\$url_main;?>/epquiz/artists.php?tag=$text' shape=rect coords='$bx1,$by1,$bx2,$by2'>";
    $area_dev .= "<area href='build-epmap.php?t_name=$text' shape=rect coords='$x11,$by1,$bx2,$by2'>";
    $area_dev .= "<area target=_blank href='http://en.wikipedia.org/w/index.php?search=$text' shape=rect coords='$bx1,$by1,$x11,$by2'>";
    */
    if ($short != $text) $add = $text;
    $area_main .= make_area($bx1, $by1, $bx2, $by2, "<?=\$url_main;?>/epquiz/works.php?tag=$text", $add);
    $area_dev .= make_area($x11, $by1, $bx2, $by2, "build-epmap.php?t_name=$text", $add);
    if ($wiki != '') $text = $wiki;
    $area_dev .= make_area($bx1, $by1, $x11, $by2, "http://en.wikipedia.org/w/index.php?search=$text", $add);
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
        imagefilledrectangle($im, $ax, $ay2+0,  $ax+2, $ay2+0+1,  $col_txt);
        imagefilledrectangle($im, $ax, $ay2+4,  $ax+2, $ay2+4+1,  $col_txt);
        imagefilledrectangle($im, $ax, $ay2+8,  $ax+2, $ay2+8+1,  $col_txt);
        imagefilledrectangle($im, $ax, $ay2+12, $ax+2, $ay2+12+1,  $col_txt);
        imagefilledrectangle($im, $ax, $ay2+16, $ax+2, $ay2+16+1, $col_txt);
      }
      imagefilledrectangle($im, $ax, $ay1, $ax+2, $ay2, $col_txt);
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
  $im_width=1900;
  $im_height=1450;
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
  $cl[lblue2] = imagecolorallocate($im, 190, 190, 255);
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
  $cl[gray3] = imagecolorallocate($im, 210, 210, 210);
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
  $q = "SELECT a_year1, a_year2 FROM ep_authors WHERE a_rating<100";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $year1 = $w[a_year1];
    $year2 = $w[a_year2];
    if ($year2 == 0) $year2 = 2016;
    $acnt[floor(($year2+$year1)/2/$cent_step)]++;
  }
  $pos = 5;
  $acnt[0/$cent_step] = 0;
  $acnt[100/$cent_step] = 0;
  $acnt[200/$cent_step] = 0;
  $acnt[300/$cent_step] = 0;
  $acnt[400/$cent_step] = 0;
  $acnt[500/$cent_step] = 0;
  $acnt[600/$cent_step] = 0;
  $acnt[700/$cent_step] = 0;
  $acnt[800/$cent_step] = 0;
  $acnt[900/$cent_step] = 0;
  $acnt[1000/$cent_step] = 0;
  $acnt[1100/$cent_step] = 0;
  $acnt[1200/$cent_step] = 1;
  $acnt[1300/$cent_step] = 1;
  $acnt[1400/$cent_step] = 2;
  $acnt[1500/$cent_step] = 3;
  $acnt[1600/$cent_step] = 3;
  $acnt[1700/$cent_step] = 8;
  //$acnt[-40100/$cent_step] = 1;
  //$acnt[1700/$cent_step] = 10;
  //$acnt[1400/$cent_step] = 18;
  //$acnt[1300/$cent_step] = 5;
  //$acnt[1500/$cent_step] = 16;
  //$acnt[1600/$cent_step] = 17;
  $acnt[1800/$cent_step] = 44;
  $acnt[1900/$cent_step] = 44;
  //$acnt[2000/$cent_step] = 10;
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
  //draw_cent(-3000);
  //draw_cent(-1000);
  draw_cent(0);
  //draw_cent(100);
  //draw_cent(200);
  //draw_cent(300);
  //draw_cent(400);
  //draw_cent(500);
  //draw_cent(600);
  //draw_cent(700);
  //draw_cent(800);
  //draw_cent(900);
  //draw_cent(1000);
  //draw_cent(1100);
  //draw_cent(1200);
  //draw_cent(1300);
  //draw_cent(1400);
  //draw_cent(1450);
  //draw_cent(1500);
  //draw_cent(1550);
  //draw_cent(1600);
  //draw_cent(1650);
  draw_cent(1400);
  draw_cent(1700);
  //draw_cent(1750);
  draw_cent(1800);
  draw_cent(1850);
  draw_cent(1900);
  draw_cent(1950);
  draw_cent(2000);

  // Load tags
  $q = "SELECT *
    FROM ep_tdesc";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $img2tname[$w[map_img]] = $w[t_name];
  }

  // Show legend
  $legend_x = -135;
  $legend_y = -175;
  $im_scroll = imagecreatefrompng('i/scroll7.png');
  imagecopy($im, $im_scroll, $legend_x+1196, $legend_y+470, 0, 0, 431, 280);

  imagettfstroketext($im, $font_size+5, 0, $legend_x+1375, $legend_y+540, $cl[white], $cl[abrown], $font2, "Legend", 1);
  $nat_legend = array(
    'USA' => 'USA', 
    'CAN' => 'Canada', 
    'RUS' => 'Russia', 
    'ITA' => 'Italy', 
    'FRA' => 'France', 
    'DEU' => 'Germany', 
    'ENG' => 'England', 
    'SPA' => 'Spain', 
    'GRC' => 'Greece', 
    'POL' => 'Poland', 
    'AUS' => 'Australia', 
    'AFR' => 'AFR/USA', 
    'IND' => 'India', 
    'JAP' => 'Japan', 
    'CHI' => 'China', 
    '' => 'Other');
  /*
  $q = "SELECT *, COUNT(*) as cnt FROM ep_authors WHERE map_pos>0 AND a_rating>0 GROUP BY a_country ORDER BY cnt desc";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  */
  $x = $legend_x+1280;
  $y = $legend_y+580;
  $i=0;
  foreach ($nat_legend as $key => $val) {
    $nat = $val;
    $cl1 = $cl[make_nation_col($key)];
    $cl2 = $cl[make_nation_bgcol($key)];
    imagettfstroketext($im, $font_size, 0, $x, $y, $cl1, $cl2, $font2, $nat, 3);
    $bbox = imageftbbox($font_size, 0, $font2, $nat);
    $x1 = $x-5;
    $x2 = $x+$bbox[4]+5;
    $y1 = $y+5;
    $y2 = $y-$lh-1;
    if ($nat != 'Other') {
      $area_main .= make_area($x1, $y1, $x2, $y2, "<?=\$url_main;?>/epquiz/authors.php?order=a_country,%20a_year1");
      $area_dev .= make_area($x1, $y1, $x2, $y2, "$url_main/epquiz/authors.php?order=a_country,%20a_year1");
    }
    $y += 23;
    if ($y > $legend_y+710) {
      $x += 110;
      $y = $legend_y+580;
    }
    $i++;
  }
  
  /*
  $x2 = 1250+$legend_x;
  $y2 = 740+$legend_y;
  $img = "goth";
  $ii = getimagesize("i/$img.png");
  $im_temp = imagecreatefrompng("i/$img.png");
  imagecopy($im, $im_temp, $x2+2, $y2+2, 0, 0, $ii[0], $ii[1]);
  $area_main .= make_area($x2+2, $y2, $x2+2+150, $y2+5+$ii[1], 
    "<?=\$url_main;?>/epquiz/works.php?tag=".$img2tname[$img], 
    $img2tname[$img]);
  $area_dev .= make_area($x2+2, $y2, $x2+2+150, $y2+5+$ii[1], 
    "$url_main/epquiz/works.php?tag=".$img2tname[$img], 
    $img2tname[$img]);
  imagettfstroketext($im, $font_size, 0, $x2+20, $y2+14, $cl[black], $cl[yellow], $font2, $img2tname[$img], 0);
  
  $x2 = 1250+$legend_x;
  $y2 = 760 +$legend_y;
  $img = "impress";
  $ii = getimagesize("i/$img.png");
  $im_temp = imagecreatefrompng("i/$img.png");
  imagecopy($im, $im_temp, $x2+2, $y2+2, 0, 0, $ii[0], $ii[1]);
  $area_main .= make_area($x2+2, $y2, $x2+2+150, $y2+5+$ii[1], 
    "<?=\$url_main;?>/epquiz/works.php?tag=".$img2tname[$img], 
    $img2tname[$img]);
  $area_dev .= make_area($x2+2, $y2, $x2+2+150, $y2+5+$ii[1], 
    "$url_main/epquiz/works.php?tag=".$img2tname[$img], 
    $img2tname[$img]);
  imagettfstroketext($im, $font_size, 0, $x2+20, $y2+14, $cl[black], $cl[yellow], $font2, $img2tname[$img], 0);
  
  // Show legend2
  $legend_x = -400;
  $legend_y = -390;
  $dx = 25;
  imagefilledrectangle($im, $legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, $cl[green]);
  imagerectangle($im, $legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, $cl[gray]);
  imagefttext($im, $font_size+5, 0, $legend_x+1266, $legend_y+443, $cl[white], $font2, "   ИНСТРУКЦИЯ");
  $area_main .= make_area($legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, "i/tutorial.png", '', 'target=_blank');
  $area_dev .= make_area($legend_x+1258, $legend_y+418, $legend_x+1450, $legend_y+452, "i/tutorial.png", '', 'target=_blank');
  */
  
  // Load artists
  $q = "SELECT a_year1, a_year2, a_id, a_name, a_name2, a_rating, a_country, a_wiki,
    map_comment, map_pos, map_right, map_year, map_img
    FROM ep_authors WHERE map_pos>0 AND a_rating>0 ORDER BY a_year1";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_array($r);
    $cp[$wa[$i][a_name]] = $wa[$i][map_pos];
    if ($wa[$i][a_wiki] == '') $wa[$i][a_wiki] = "http://en.wikipedia.org/w/index.php?search=".awiki($wa[$i][a_name]);
    $wa[$i][a_years] = $wa[$i][a_year1]."-";
    if ($wa[$i][a_year2] > 0) $wa[$i][a_years] .= $wa[$i][a_year2];
    // Load tags
    $q2 = "SELECT t_name FROM ep_atags WHERE a_id=".$wa[$i][a_id]." AND l_type=''";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w = mysql_fetch_assoc($r2);
      if ($wa[$i][t_names] != '') $wa[$i][t_names] .= ", ";
      $wa[$i][t_names] .= $w[t_name];
    }
  }

  // Show years of life
  /*  
  $z = 1;
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    if ($w[map_pos] == -1) continue;
    // Cut genre
    $ga = explode(", ", $w[t_name]);
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
    $year1 = $w[a_year1];
    $year2 = $w[a_year2];
    $fnt = $font;
    if ($w[a_rating]>2) $fnt = $font2;
    $name = "$w[a_name]";
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
  $q = "SELECT * FROM ep_tdesc WHERE map_x2!=0";
  $r = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r);
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_array($r);
    if ($w2[map_name] == '') $w2[map_name] = $w2[t_name];
    draw_box($w2[map_x1], $w2[map_y1], $w2[map_x2], $w2[map_y2], 
      $w2[map_color], $w2[t_name], $w2[map_name], $w2[map_label], $w2[map_active], 
      $w2[t_wiki], $w2[t_year1], $w2[t_year2], $w2[t_year1t], $w2[t_year2t], $w2[map_poly]);
  }

  // Show links
  //draw_link('Gothic', 'Romanticism', -10, 0, 0, $cl[gray]);
  
  $file1 = fopen("rpmap/index$id.php", "w");
  $file2 = fopen("rpmap/index$id-dev.php", "w");
 // Show artists
  $z = 1;
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    //if ($w[a_name2] != 'Gordon') continue;
    //echo "Gordon<br>";
    if ($w[map_pos] == -1) continue;
    $z2 = $w[map_pos]-1;
    if ($z2 == -1) {
      $z2 = $z;
      $z += 200;
      if ($z>1100) $z = ($i*2 % 200);
    }
    $fnt = $font;
    if ($w[a_rating]<50) $fnt = $font2;
    $cl1 = $cl[make_nation_col($w[a_country])];
    $cl2 = $cl[make_nation_bgcol($w[a_country])];
    //$cl2 = $cl[white];
    $cl4 = $cl[gray];
    if ($cl2 == $cl[dgray]) $cl4 = $cl[dgray];
    if ($w[map_pos] == 0) $cl2 = $cl[aorange];
    $year1 = $w[a_year1];
    $year2 = $w[a_year2];
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
    //imagefilledrectangle($im, $x1, $y1, $x2, $y2, $cl2);
    //imagerectangle($im, $x1, $y1, $x2, $y2, $cl1);
    $radius=8;
    draw_roundrectangle($im, $x1, $y2, $x2, $y1, $radius, $cl2, 1);
    draw_roundrectangle($im, $x1, $y2, $x2, $y1, $radius, $cl1, 0);
    // Check intersections
    if (is_array($abox)) foreach ($abox as $key => $val) {
      $found = 0;
      if (($val[y1] == $y1) && ($val[x1] <= $x1) && ($val[x2] >= $x2)) $found=1;
      if (($val[y1] == $y1) && ($val[x1] >= $x1) && ($val[x2] <= $x2)) $found=1;
      if ($found) fps_dev("Intersection $w[a_name2] - $key<br>");
    }
    $abox[$w[a_name2]][x1] = $x1;
    $abox[$w[a_name2]][x2] = $x2;
    $abox[$w[a_name2]][y1] = $y1;
    $abox[$w[a_name2]][y2] = $y2;
    if ($w[map_right] == 1) {
      //imagefilledrectangle($im, $x2+1, $y1, $x2-1, $y2, $cl1);
    } else {
      //imagefilledrectangle($im, $x1+1, $y1, $x1-1, $y2, $cl1);
    }
    imagefttext($im, $font_size, 0, $x, $y, $cl1, $fnt, $name);
    $area_main .= make_area($x1, $y1, $x2, $y2, 
      "<?=\$url_main;?>/epquiz/authors.php?mp=$w[map_pos]&a_id=$w[a_id]&y=$w[a_year1]", 
      "$w[a_name]\n$w[t_names]\n$w[a_country]\n$w[a_years]");
    // Dev areas
    $x11 = round(($x1+$x2)/2);
    $area_dev .= make_area($x1, $y1, $x11, $y2, 
      "$url_main/epquiz/authors.php?mp=$w[map_pos]&a_id=$w[a_id]&y=$w[a_year1]", 
      "$w[a_name]\n$w[t_names]\n$w[a_country]\n$w[a_years]\nMY: $w[map_year]\nMX: $w[map_pos]");
    $area_dev .= make_area($x11, $y1, $x2, $y2, 
      "build-epmap.php?mp=$w[map_pos]&a_id=$w[a_id]&y=$w[a_year1]", 
      "$w[a_name]\n$w[t_names]\n$w[a_country]\n$w[a_years]\nMY: $w[map_year]\nMX: $w[map_pos]");
    $btext .= "<a id='a$w[a_id]' name='#a$w[a_id]' style='position: absolute; top: ".($y-15)."px; left: ".($im_width)."px'><font color=white size=3>$name</font></a>\n";
    // Icon
    if ($w[map_img] != '') {
      $ii = getimagesize("i/$w[map_img].png");
      $im_temp = imagecreatefrompng("i/$w[map_img].png");
      imagecopy($im, $im_temp, $x2+2, $y2+2, 0, 0, $ii[0], $ii[1]);
      $area_main .= make_area($x2+2, $y2+2, $x2+2+$ii[0], $y2+2+$ii[1], 
        "<?=\$url_main;?>/epquiz/works.php?tag=".$img2tname[$w[map_img]], 
        $img2tname[$w[map_img]]);
      $area_dev .= make_area($x2+2, $y2+2, $x2+2+$ii[0], $y2+2+$ii[1], 
        "$url_main/epquiz/works.php?tag=".$img2tname[$w[map_img]], 
        $img2tname[$w[map_img]]);
    }
  }
  imagefttext($im, $font_size, 0, 1355, $im_height-10, $cl[black], "fonts/arial.ttf", "This timeline was created by Alexey Arkhipenko (c) 2016");
  // Save map
  imagepng($im, "rpmap/maps/en$id.png");
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
  fps("<p>Click on poet, style or country to find out more and read poems.");
  fps("<p>Most well known poets are marked bold.");
  fps("<p>Image is searchable. Use Ctrl+F or 'Search in page'.");
  fps_dev("
    <script type='text/javascript'>//<![CDATA[\n");
  fps_dev("var astart = [];\n");
  $astart2 = array_reverse($astart, true);
  $old_val = 0;
  foreach ($astart2 as $key => $val) {
    if ($old_val != $val) {
      if ($old_val != 0) fps_dev("astart[$old_key] = $old_val;\n");
    }
    $old_val = $val;
    $old_key = $key;
    //fps_dev("astart[$key] = $val;\n");
  }
  fps_dev("
    function closest (num, arr) {
      var curr = arr[13];
      var diff = num - curr;
      for (var i = 20; i > 12; i--) {
        var diff = num - arr[i];
        if (diff > 0) {
          return i;
        }
      }
      return 0;
    }
    function binaryIndexOf(searchElement) {
    'use strict';
 
    var minIndex = 0;
    var maxIndex = this.length - 1;
    var currentIndex;
    var currentElement;
 
    while (minIndex <= maxIndex) {
        currentIndex = (minIndex + maxIndex) / 2 | 0;
        currentElement = this[currentIndex];
 
        if (currentElement < searchElement) {
            minIndex = currentIndex + 1;
        }
        else if (currentElement > searchElement) {
            maxIndex = currentIndex - 1;
        }
        else {
            return currentIndex;
        }
    }
 
    return currentIndex;
    }");
  fps_dev("function make_y(y) {
      cent = closest(y, astart);
      return Math.round($cent_step*(cent+(y-astart[cent])/(astart[cent+1]-astart[cent])));
    }
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
                var x = ( e.clientX - 45 + $(window).scrollLeft()),
                    y = make_y( e.clientY - 16 + $(window).scrollTop() );
                
                $( tooltip ).text( x + ' : ' + y).css({
                    left: e.clientX - 30,
                    top: e.clientY - 30,
                    width: 80
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
<?
  //include "qlib.php";
  include "alib.php";
  include "style.php";
  include "menu.php";  

  start_time();
  secure_variable("a_id");
  $img_width = 293;

  $q = "SELECT * FROM aq_artists WHERE a_id=$a_id";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  
  if ($w[a_wiki_en] == '') $w[a_wiki_en] = "http://en.wikipedia.org/w/index.php?search=".awiki($w[a_name]);
  echo "<center>";
  echo "<h3>$w[a_name] ($w[a_years]) $w[a_nation] ";
  echo "<a target=_blank href=\"$w[a_wiki_en]\"><img height=25 border=0 src=i/wikipedia.jpg></a> ";
  echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=25 src=i/google.png></a> ";
  if ($w[map_pos]>0) echo " <a target=_blank href='$url_main/amap/index.php#a$w[a_id]'><img valign=top height=25 src=i/time.png></a> ";
  echo "<a title='Pronounce name' target=_blank href=\"http://forvo.com/search/$w[a_name]\"><img height=25 border=0 src=i/speaker.png></a> ";
  show_integration($w);
  echo "</h3>";
  $ta = explode(",", $w[a_genre]);
  for ($x=0; $x<count($ta); $x++) {
    if ($x>0) echo ", ";
    $ta[$x] = trim($ta[$x]);
    echo "<a href='artists.php?tag=$ta[$x]'>$ta[$x]</a>";
  }
  echo "<table>";
  $q2 = "SELECT * FROM aq_paintings WHERE a_id='$a_id' ORDER BY RAND() LIMIT 4";
  $r2 = mysql_query($q2);
  $n2 = mysql_numrows($r2);
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_assoc($r2);
    $p_id = $w2[p_id];
    echo "<td valign=top><center>";
    echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a href='painting.php?a_id=$w[a_id]&p_id=$p_id'>";
    echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=preview/$w[a_id]/".str_pad($p_id, 4, '0', STR_PAD_LEFT).".jpg></a>";
    // Load painting
    $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$p_id'");
    echo mysql_error();
    $wp = mysql_fetch_assoc($r);
    // Descr
    if ($wp[p_desc_en] != '') echo "<i>".substr($wp[p_desc_en], 0, 100)."</i>";
    else if ($wp[p_desc_ru] != '') echo "<i>".substr($wp[p_desc_ru], 0, 100)."</i>";
    if ($wp[p_year] != '') echo " <i>[".substr($wp[p_year], 0, 100)."]</i> ";
    if ($wp[p_place] != '') echo " <i>(".substr($wp[p_place], 0, 100).")</i>";
  }
  /*
  $numbers = range(1, $w[p_num]);
  shuffle($numbers);
  for ($i=0; $i<4; $i++) {
    $p_id = $numbers[$i];
    if ($p_id == 0) break;
    echo "<td valign=top><center>";
    echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a target=_blank href='painting.php?a_id=$w[a_id]&p_id=$p_id'>";
    echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=preview/$w[a_id]/".str_pad($p_id, 4, '0', STR_PAD_LEFT).".jpg></a>";
    // Load painting
    $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$p_id'");
    echo mysql_error();
    $wp = mysql_fetch_assoc($r);
    // Descr
    if ($wp[p_desc_en] != '') echo "<i>".substr($wp[p_desc_en], 0, 100)."</i>";
    else if ($wp[p_desc_ru] != '') echo "<i>".substr($wp[p_desc_ru], 0, 100)."</i>";
    if ($wp[p_year] != '') echo " <i>[".substr($wp[p_year], 0, 100)."]</i> ";
    if ($wp[p_place] != '') echo " <i>(".substr($wp[p_place], 0, 100).")</i>";
  }
  */
  echo "</table></center>";
  echo "<table><tr><td valign=top>";
  echo "<p>".str_replace("\n", "<p>", $w[a_bio_en]);
  if (file_exists("paintings/$w[a_id]/photo.jpg")) echo "<td valign=top><img style='border-radius: 20px' src='paintings/$w[a_id]/photo.jpg' width=200>";
  echo "</table>";

  echo "<br><center><b>Associated composers:</b>";
  echo "<table>";
  // Show pictures
  $q = "SELECT a_id, ca_log.c_id, ca_log.p_id, c_country, c_start, p_name, c_name4, l_id, SUM(v_up) as vu FROM ca_log 
    LEFT JOIN cc_composers USING (c_id) WHERE a_id='$a_id' AND v_up>(v_down*2.5) GROUP BY c_id ORDER BY c_start LIMIT 16";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w2=mysql_fetch_array($r);
    //print_r($w2);
    $img_url = "$url_art_preview/$w2[a_id]/".str_pad($w2[p_id], 4, '0', STR_PAD_LEFT).".jpg";
    $pre_url = "preview/$w2[a_id]/".str_pad($w2[p_id], 4, '0', STR_PAD_LEFT).".jpg";
    if ($i % 4 == 0) echo "<tr>";
    echo "<td><center>";
    echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a target=_blank href=$url_main/compart/ca-slide.php?only_pos=on&l_id=".($w2[l_id]-1).">";
    echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=$pre_url></a><br><a href=$url_main/cquiz/am.php?c_id=$w2[c_id]>$w2[c_name4]</a> $w2[c_country] $w2[p_name] ($w2[c_start])";
    //echo " <a target=_blank href=$img_url><img height=14 src=i/zoom_in.png></a> ";
    //echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
    if ($w2[v_up]>0) echo " <font color=green><b>$w2[v_up]</b></font> <img border=0 height=15 src=images/up-g.png> ";
    if ($w2[v_down]>0) echo " <img border=0 height=15 src=images/down-g.png> <font color=red><b>$w2[v_down]</b></font> ";
    echo "</div>";
  }
  echo "</table>";

  stop_time();
?>
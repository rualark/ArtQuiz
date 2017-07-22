<?
  include "qlib.php";
  //include "alib.php";
  include "style.php";
  include "menu.php";  

  start_time();
  secure_variable("a_id");
  secure_variable("p_id");

  $q = "SELECT * FROM aq_artists WHERE a_id=$a_id";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);

  if ($w[a_wiki_en] == '') $w[a_wiki_en] = "http://en.wikipedia.org/w/index.php?search=".awiki($w[a_name]);
  echo "<center>";
  echo "<h3><a href=artist.php?a_id=$w[a_id]>$w[a_name]</a> ($w[a_years]) $w[a_nation] ";
  echo "<a target=_blank href=\"$w[a_wiki_en]\"><img height=25 border=0 src=i/wikipedia.jpg></a> ";
  echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=25 src=i/google.png></a> ";
  if ($w[map_pos]>0) echo " <a target=_blank href='$url_main/amap/index.php#a$w[a_id]'><img valign=top height=25 src=i/time.png></a> ";
  echo "</h3>";
  $ta = explode(",", $w[a_genre]);
  for ($x=0; $x<count($ta); $x++) {
    if ($x>0) echo ", ";
    $ta[$x] = trim($ta[$x]);
    echo "<a href='artists.php?tag=$ta[$x]'>$ta[$x]</a>";
  }
  
  echo "<p>";
  show_painting($a_id, $p_id, 850, 850);
  
  echo "<p>";
  // Load painting
  $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$p_id'");
  echo mysql_error();
  $wp = mysql_fetch_assoc($r);
  // Descr
  if ($wp[p_desc_en] != '') echo "<i>".substr($wp[p_desc_en], 0, 100)."</i>";
  else if ($wp[p_desc_ru] != '') echo "<i>".substr($wp[p_desc_ru], 0, 100)."</i>";
  if ($wp[p_year] != '') echo " <i>[".substr($wp[p_year], 0, 100)."]</i> ";
  if ($wp[p_place] != '') echo " <i>(".substr($wp[p_place], 0, 100).")</i>";
  
  stop_time();
?>
<?
  include "qlib.php";
  include "../auth.php";
  include "style.php";
  include "ca-menu.php";  

  start_time();
  echo "<b>Associations for artists:</b><br>";
  $q = "SELECT a_id, a_name2, COUNT(c_id) as cnt, a_start FROM ca_log LEFT JOIN aq_artists USING (a_id) GROUP BY a_id ORDER BY a_start";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Count progress
    $q3 = "SELECT AVG(c_start) as sas, COUNT(*) as cnt FROM ca_log LEFT JOIN cc_composers USING (c_id) WHERE a_id=$w[a_id] AND v_up>(v_down*2.5)";
    $r3 = mysql_query($q3);
    echo mysql_error();
    $w3=mysql_fetch_array($r3);
    echo "<br>";
    // count opacity
    if ($w3[cnt]>3) {
      $minopa = 0.1;
      $min_slope = 0;
      $max_slope = 50;
      $slope = round($w3[sas]-$w[a_start]);
      $slope2=abs($slope);
      if ($slope2<$min_slope) $opa="$minopa";
      elseif ($slope2>$max_slope) $opa="1";
      else $opa = round($minopa+($slope2-$min)/($max_slope-$min_slope)*(1-$minopa), 1);
      if ($slope>=1) echo "<img style='opacity: $opa' title='".round($slope)."' align=bottom height=13 src=images/right-arrow.png>"; 
      elseif ($slope<=-1) echo "<img style='opacity: $opa' title='".round($slope)."' align=bottom height=13 src=images/left-arrow.png>";
      else echo "<img style='opacity: .2' title='".round($slope)."' align=bottom height=13 src=images/block-g.png>";
    } else echo "<img style='opacity: 0' align=bottom height=13 src=images/block-g.png>";
    echo " <a target=_blank href=ca-slide.php?a_id=$w[a_id]><img height=14 style='opacity: 0.5' src=images/play_g.gif></a> <a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]><font color=orange>$w[a_name2]</font></a> - ";
    $q2 = "SELECT c_id, c_name4, COUNT(*) as cnt, SUM(v_up) as vu, SUM(v_down) as vd, SUM(v_up-v_down) as vud
      FROM ca_log LEFT JOIN cc_composers USING (c_id) WHERE a_id=$w[a_id] GROUP BY c_id ORDER BY vud DESC LIMIT 20";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<a href=$url_main/cquiz/am.php?c_id=$w2[c_id]>$w2[c_name4]</a> <a target=_blank href=ca-slide.php?a_id=$w[a_id]&c_id=$w2[c_id]>";
      if ($w2[vu] > $w2[vd]) $color='#00aa00';
      if ($w2[vu] <= $w2[vd]) $color='red';
      if (($w2[vu]+$w2[vd]) == 0) $color='black';
      echo "<font color=$color>";
      echo "($w2[cnt])</font></a> ";
    }
  }
  echo "<p>Total: $n artists with associations";
  stop_time();

?>
<p>Number in brackets means the number of associations between particular composer and painter. Color of the number means high voting rating (green), low (red) or no votes (black).
<p>Arrows show which composers are associated with current artist: left arrow shows that artist is associated with older composers, right arrow shows that artist is associated with newer composers.
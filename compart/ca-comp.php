<?
  include "qlib.php";
  include "../auth.php";
  include "style.php";
  include "ca-menu.php";  

  start_time();
  echo "<b>Associations for composers:</b><br>";
  $q = "SELECT c_id, c_name4, COUNT(a_id) as cnt, c_start, t_count
    FROM ca_log LEFT JOIN cc_composers USING (c_id) GROUP BY c_id ORDER BY c_start";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Count progress
    $q3 = "SELECT AVG(a_start) as sas, COUNT(*) as cnt FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE c_id=$w[c_id] AND v_up>(v_down*2.5)";
    $r3 = mysql_query($q3);
    echo mysql_error();
    $w3=mysql_fetch_array($r3);
    echo "<br>";
    // count opacity
    if ($w3[cnt]>3) {
      $minopa = 0.1;
      $min_slope = 0;
      $max_slope = 50;
      $slope = round($w3[sas]-$w[c_start]);
      $slope2=abs($slope);
      if ($slope2<$min_slope) $opa="$minopa";
      elseif ($slope2>$max_slope) $opa="1";
      else $opa = round($minopa+($slope2-$min)/($max_slope-$min_slope)*(1-$minopa), 1);
      if ($slope>=1) echo "<img style='opacity: $opa' title='".round($slope)."' align=bottom height=13 src=images/right-arrow.png>"; 
      elseif ($slope<=-1) echo "<img style='opacity: $opa' title='".round($slope)."' align=bottom height=13 src=images/left-arrow.png>";
      else echo "<img style='opacity: .2' title='".round($slope)."' align=bottom height=13 src=images/block-g.png>";
    } else echo "<img style='opacity: 0' align=bottom height=13 src=images/block-g.png>";
    // Load artists
    echo " <a target=_blank href=ca-slide.php?c_id=$w[c_id]><img height=14 style='opacity: 0.5' src=images/play_g.gif></a> <a href=$url_main/cquiz/am.php?c_id=$w[c_id]>$w[c_name4]</a> ";
    //echo "($w[t_count])";
    echo " - ";
    $q2 = "SELECT a_id, a_name2, COUNT(p_id) as cnt, SUM(v_up) as vu, SUM(v_down) as vd, SUM(v_up-v_down) as vud
    FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE c_id=$w[c_id] GROUP BY a_id ORDER BY vud DESC LIMIT 20";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<a target=_blank href=$url_main/aquiz/artist.php?a_id=$w2[a_id]><font color=orange>$w2[a_name2]</font></a> ";
      echo "<a target=_blank href=ca-slide.php?a_id=$w2[a_id]&c_id=$w[c_id]>";
      if ($w2[vu] > $w2[vd]) $color='#00aa00';
      if ($w2[vu] <= $w2[vd]) $color='red';
      if (($w2[vu]+$w2[vd]) == 0) $color='black';
      echo "<font color=$color>";
      echo "($w2[cnt])</font></a> ";
    }
  }
  echo "<p>Total: $n composers with associations";
  stop_time();

?>
<p>Number in brackets means the number of associations between particular composer and painter. Color of the number means high voting rating (green), low (red) or no votes (black).
<p>Arrows show which artists are associated with current composer: left arrow shows that composer is associated with older artists, right arrow shows that composer is associated with newer artists.
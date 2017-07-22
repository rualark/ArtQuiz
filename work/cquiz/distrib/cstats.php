<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("sort");
  secure_variable("u_id");

  $suffix = "";
  if ($u_id == 0) $suffix = "u_id=$us[u_id]";
  start_cache($suffix);
  
  if (isset($u_id)) load_user($u_id);
  $u_id = $us[u_id];

  echo "<b>Composers statistics for user $us[u_name]:</b><br>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href='cstats.php?u_id=$u_id&u_id=$u_id'>Composer</th>";
  echo "<th><a title='Tracks in database' href='cstats.php?u_id=$u_id&u_id=$u_id&sort=t_count desc'>Tracks</th>";
  echo "<th><a title='Hours of playback in database' href='cstats.php?u_id=$u_id&sort=c_len desc'>Hours</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=r1 desc'>Rating</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=c_total desc'>Asked</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=correct desc'>Correct</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=wrong2 desc'>Correct period</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=sec desc'>Think time</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=acent desc'>Abs. years error</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=cent desc'>Years error</th>";
  echo "</tr>";

  $order = "p_id,c_start";
  if (isset($sort)) $order = $sort;
  $q = "SELECT *,cc_composers.c_id as c_id, c_right/c_total as correct, c_sec/c_total as sec, f_count
    FROM cc_composers 
    LEFT JOIN cc_cstat ON (cc_cstat.c_id=cc_composers.c_id AND cc_cstat.u_id=$us[u_id]) 
    WHERE c_folder != '' 
    GROUP BY cc_composers.c_id ORDER BY $order
  ";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  $p_name = "";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    if ($p_name != $w[p_name]) {
      if (!isset($sort)) echo "<tr><td colspan=6>================ <b>$w[p_name]</td></tr>";
      $p_name = $w[p_name];
    }
    //$w[correct] = min(0.5+$i*0.02, 1);
    $bgcolor = comp_color($w);
    echo "<tr>";
    echo "\n<td bgcolor=$bgcolor><a title='$w[c_name3]\n$w[c_country] $w[c_years], $w[t_count] tracks, ".round($w[c_len]/60)." min";
    if (strlen($w[c_group])>1) echo "\n$w[c_group]";
    echo "\n$w[c_desc]' href=".comp_link($w[c_id]).">";
    if ($w[c_rating]<4) echo "<font color=black>";
    else echo "<font style='font-weight : normal;' color=black>";
    if (($i_am_admin) && (strlen($w[c_desc])<40)) {
      echo "<font color=brown>";
      $low_cdesc++;
    }
    echo "$w[c_name]</a> [$w[c_years]] $w[c_country]";
    //echo " <a title='Click to find islands with this composer' href='isles.php?cname=$w[c_name4]'><img height=18 border=0 align=top src=images/search.png></a>";
    $opa = round(min(1, $w[f_count] / 5), 1);
    echo " <img align=right hspace=3 title='$w[f_count] islands have comments' style='opacity: $opa' border=0 height=16 src=images/edit.png>";
    echo "</td>";
    echo "<td bgcolor=$bgcolor><center>";
    if (strlen($w[c_desc])>10) echo "<b>";
    echo "$w[t_count]</td>";
    echo "<td bgcolor=$bgcolor><center>".round($w[c_len]/60/60, 1)."</td>";
    //echo "<td>";
    //if (round($w[r1])>0) echo round($w[r1])."</td>";
    echo "<td title='".round(100*$w[c_total]/$w[c_len]*60, 0)."%' bgcolor=$bgcolor><center>";
    if ($w[c_total]>0) {
      if ($w[c_total]>$w[c_len]/60) echo "<b>";
      echo "$w[c_total]</td>";
    }
    $cnum++;
    if ($w[c_total]>0) $cpnum++;
    if ($w[c_total]>15) $cpnum2++;
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[c_total]>0) echo "<b>".round(100*$w[c_right]/$w[c_total], 0)."%";
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[c_total]>0) echo round(100*($w[c_rightp]/$w[c_total]), 1)."%";
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[c_sec]>0) echo gmdate('H:i:s', round($w[c_sec]/$w[c_total]))."</td>";
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[c_cent2]!=0) echo round($w[c_cent2]/$w[c_total], 1);
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[c_cent]!=0) echo round($w[c_cent]/$w[c_total], 1);
    echo "</tr>";
    // Total stats
    $c_total += $w[c_total];
    $c_len += $w[c_len];
    $c_right += $w[c_right];
  }
  echo "</table>";
  
  echo "<p>Total $cnum composers. ";
  echo "Played $cpnum composers. ";
  if ($i_am_admin) echo "<font color=brown>$low_cdesc composers have too short descriptions.</font> ";
  echo "Over 15 answers - $cpnum2 composers.<br> ";
  echo "<b title='$c_total of ".($c_len/60)."'>".round($c_total/$c_len*60*100)."</b>% questions answered, <b>".round($c_right/$c_total*100)."</b>% correct. ";
  echo "Bold composers are Easy, Normal, Hard. Bold tracks number: description is present. Bold answers: 100% answered";
  
  // Show example table
  echo "<table cellpadding=10>";
  echo "<tr><td>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Answered";
  echo "<th colspan=10>Correct 0 to 100%";
  $w[c_len]=6000;
  $w[c_right]=1;
  for ($i=1; $i<11; $i++) {
    $w[c_total] = 10*$i;
    echo "<tr>";
    echo "<td>$w[c_total]% questions";
    for ($x=1; $x<11; $x++) {
      $w[c_right] = $w[c_total]*$x/10;
      $color = comp_color($w);
      echo "<td bgcolor=$color>";
      /*
      if (($c_total/$c_len*60 < $i/10) && ($c_right/$c_total < $x/10) && ($c_total/$c_len*60 >= ($i-1)/10) && ($c_right/$c_total >= ($x-1)/10)) {
        echo "<center title='".round($c_total/$c_len*60*100)."% questions answered\n".round($c_right/$c_total*100)."% correct'><b>#";
      } else 
      */
      echo "<font color=$color>__";
      //echo "$color";
    }
  }
  echo "</table>";
  echo "<td valign=top width=300>";
  echo "100% answered questions means that number of answered questions equals number of 1-minute blocks in database for this composer (this is usually around 70% blocks heard due to statistical distribution).";
  echo "</table>";
  stop_cache($suffix);
?>
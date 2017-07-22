<?
  function comp_color($w) {
    $cco = max($w[correct], 0.5)*2-1;
    $cco2 = (0.25 - min(abs($w[correct]-0.75), 0.25))*1;
    $cco3 = (min(abs($w[correct]-0.75), 0.25))*0.5;
    $bgcolor=make_color(
      255-min($w[cnt]/$w[c_len]*60, 1)*255*($cco), 
      255-min($w[cnt]/$w[c_len]*60, 1)*255*(1-$cco), 
      255-min($w[cnt]/$w[c_len]*60, 1)*255
    );
    return $bgcolor;
  }
  
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("sort");
  secure_variable("u_id");

  start_time();
  
  if (isset($u_id)) load_user($u_id);
  $u_id = $us[u_id];

  echo "<b>Composers statistics for user $us[u_name]:</b><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th><a href='cstats.php?u_id=$u_id&u_id=$u_id'>Composer</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&u_id=$u_id&sort=t_count desc'>Tracks</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=c_len desc'>Play time</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=r1 desc'>Rating</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=cnt desc'>Asked</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=correct desc'>Correct</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=wrong2 desc'>Correct period</th>";
  echo "<th><a href='cstats.php?u_id=$u_id&sort=sec desc'>Think time</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=acent desc'>Abs. years error</th>";
  //echo "<th><a href='cstats.php?u_id=$u_id&sort=cent desc'>Years error</th>";
  echo "</tr>";

  $order = "p_id,c_start";
  if (isset($sort)) $order = $sort;
  //$q = "SELECT *,count(t_id) as cnt,sum(c_len) as tln FROM cc_composers LEFT JOIN cc_periods USING (p_name) LEFT JOIN cc_ctracks ON (cc_composers.c_id=cc_ctracks.c_id) WHERE c_folder != '' GROUP BY cc_ctracks.c_id ORDER BY $order";
  $q = "SELECT *,avg(l_r1) as r1,sum(l_ok)/count(l_id) as correct,count(l_id) as cnt,
    avg(l_sec) as sec,cc_composers.c_id as cid,
    sum(l_wrong2)/count(l_id) as wrong2,avg(abs(l_cent)) as acent,avg(l_cent) as cent 
    FROM cc_composers 
    LEFT JOIN cc_periods USING (p_name) 
    LEFT JOIN cc_qlog ON (cc_qlog.c_id=cc_composers.c_id AND cc_qlog.u_id=$us[u_id]) 
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
    echo "\n$w[c_desc]' href=".comp_link($w[cid]).">";
    if ($w[c_rating]<4) echo "<font color=black>";
    else echo "<font style='font-weight : normal;' color=black>";
    echo "$w[c_name]</a> [$w[c_years]] $w[c_country]";
    echo " <a title='Click to find islands with this composer' href='isles.php?cname=$w[c_name4]'><img height=18 border=0 align=top src=images/search.png></a>";
    echo "</td>";
    echo "<td bgcolor=$bgcolor><center>$w[t_count]</td>";
    echo "<td bgcolor=$bgcolor><center>".gmdate('H:i:s', $w[c_len])."</td>";
    //echo "<td>";
    //if (round($w[r1])>0) echo round($w[r1])."</td>";
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[cnt]>0) echo "<b>$w[cnt]</td>";
	$cnum++;
	if ($w[cnt]>0) $cpnum++;
	if ($w[cnt]>15) $cpnum2++;
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[cnt]>0) echo "<b>".round(100*$w[correct], 1)."%";
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[cnt]>0) echo round(100*(1-$w[wrong2]), 1)."%";
    echo "<td bgcolor=$bgcolor><center>";
    if ($w[sec]>0) echo gmdate('H:i:s', round($w[sec]))."</td>";
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[acent]!=0) echo round($w[acent], 1);
    //echo "<td bgcolor=$bgcolor><center>";
    //if ($w[cent]!=0) echo round($w[cent], 1);
    echo "</tr>";
  }
  echo "</table>";
  
  echo "<p>Total $cnum composers. ";
  echo "Played $cpnum composers. ";
  echo "Over 15 answers - $cpnum2 composers. ";
  echo "Bold composers are Easy, Normal, Hard. ";
  stop_time();
  // SELECT u_name,cc_qlog.u_level,count(*) as cnt,avg(l_r1) as r1,avg(l_ok) FROM `cc_qlog` LEFT JOIN cc_users USING (u_id) WHERE c_id=192 GROUP BY u_id,cc_qlog.u_level HAVING cnt>3 ORDER BY r1 desc 
?>
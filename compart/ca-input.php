<?
  $auth_necessary=1;
  include "qlib.php";
  include "../auth.php";
  
  $max_painters = 30;
  $col_num = 1;
  $img_width = 600;

  start_time();
  secure_variable("admin");
  secure_variable("c_id");
  secure_variable("t_id");
  secure_variable("b_id");
  secure_variable("a_id");
  secure_variable("p_id");

  if (isset($a_id)) {
    // Check duplicate
    $q = "SELECT * FROM ca_log WHERE a_id='$a_id' AND p_id='$p_id' AND t_id='$t_id' AND UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(l_time) < 30*60";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    if ($n == 0) {
      // Insert
      mysql_query("INSERT INTO ca_log VALUES('', '$c_id', '$t_id', '$b_id', '$a_id', '$p_id', NOW(), '".get_ip()."', '', '$ua[u_id]', '', '')");
      echo mysql_error();
      $l_id = mysql_insert_id();
      // auto vote
      if ($i_am_admin == 1) vote_compart($l_id, 1);
    } else echo 'Duplicate';
    echo "<script language=\"javascript\">location.replace(\"ca-input.php";
    if ($admin == 1) echo "?admin=1";
    echo "\");</script>"; 
    exit;
  }
  
  include "style.php";
  $page_width="100%";
  include "ca-menu.php";

  start_time();
  
  $us[u_id] = 0;
  $us[u_oneblock] = 1;
  $us[u_level] = 4;
  //$us[u_trating] = 0;
  
  if (!isset($t_id)) {
    //$b_id = choose_block_new();
    
    // Load tracks
    //WHERE (t_rating>0 AND t_rating<5) OR w_rating>20000
    //LEFT JOIN nq_pdf ON (cc_ctracks.t_id=nq_pdf.t_id)
    // Select composer
    $q = "
      SELECT cc_composers.c_id,
      SUM((CASE WHEN ca_log.c_id IS NOT NULL THEN 1 ELSE 0 END)) AS cnt FROM cc_composers 
      LEFT JOIN ca_log ON (cc_composers.c_id=ca_log.c_id)
      WHERE t_count != 0
      GROUP BY cc_composers.c_id
      ORDER BY cnt,RAND()";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    //echo "Composer $w[c_id] ";
    // Select track
    $q = "
      SELECT cc_ctracks.t_id, t_rating, t_name, 
      SUM((CASE WHEN ca_log.t_id IS NOT NULL THEN 1 ELSE 0 END)) AS cnt FROM cc_ctracks 
      LEFT JOIN ca_log ON (cc_ctracks.t_id=ca_log.t_id)
      WHERE t_bad=0 AND cc_ctracks.c_id='$w[c_id]'
      GROUP BY cc_ctracks.t_id
      ORDER BY cnt,RAND()";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $t_id = $w[t_id];
    echo "$w[cnt] associations already with this track ";

    // Load block
    $q = "SELECT * FROM cc_qblocks WHERE t_id=$t_id ORDER BY RAND() LIMIT 1";
    $r2 = mysql_query($q);
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r2);
    $b_id = $w2[b_lid];
  }

  load_track($t_id);
  
  echo "<table>";
  echo "<tr><td bgcolor=lightgray><b><center>Associate this music with artist who was born before $ts[c_name4]:";
  echo "<td rowspan=2 bgcolor=black>";
  echo "<td bgcolor=lightgray><b><center>Or artist who was born after $ts[c_name4]:";
  echo "<tr><td valign=top><table>";
  echo "<tr><td width=$img_width bgcolor=#eeeeff valign=top>";
  //echo "<a href=ca.php>MENU</a><br><br>";

  echo "<table><tr><td valign=top>";
  show_player($t_id, $b_id, $us[u_oneblock], $play_symlinks, 1, $b_id);
  echo "<td valign=top>";
  echo "<br><a href=$url_main/cquiz/am.php?c_id=$ts[c_id]>$ts[c_name4]</a> $ts[c_country] $ts[p_name] ($ts[c_years])<br><a href=ptracks.php?t_id=$ts[t_id]>$ts[t_name]</a> ";
  echo meta_conv($ts[t_meta2]);
  echo "<p><table><tr><td>";
  echo "<form action=ca-input.php>";
  echo "<input type=hidden name=t_id value='$t_id'>";
  echo "<input type=hidden name=b_id value='$b_id'>";
  if ($admin == 1) echo "<input type=hidden name=admin value=1>";
  echo "<input type=submit value='Change paintings'></form>";
  echo "<td>";
  echo "<form action=ca-input.php>";
  if ($admin == 1) echo "<input type=hidden name=admin value=1>";
  echo "<input type=submit value='Change music & paintings'></form>";
  echo "</table>";
  echo "</table>";
  
  // Find years frame
  $q = "SELECT ABS(a_start-'$ts[c_start]') as dist FROM aq_artists ORDER BY dist LIMIT $max_painters";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $years_frame = $w[dist];
  }
  //echo "Years frame: $years_frame<br>";

  echo "<tr>";
  // Show old composers
  //$q = "SELECT *, (a_start-'$ts[c_start]') as dy FROM aq_artists HAVING dy<=0 ORDER BY dy DESC LIMIT ".($max_painters-1);
  /*
    LEFT OUTER JOIN ca_log ON (aq_artists.a_id=ca_log.a_id AND ca_log.v_up>(ca_log.v_down*2.5)) 
    WHERE ca_log.a_id IS NULL 
  */
  $q = "SELECT *, (a_start-'$ts[c_start]') as dy, aq_artists.a_id as a_id
    FROM aq_artists 
    GROUP BY aq_artists.a_id 
    HAVING dy<=0
    ORDER BY dy DESC 
    LIMIT ".($max_painters-1);
  //echo $q;
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT p_id, p_desc_ru, p_desc_en FROM aq_paintings 
      WHERE a_id='$w[a_id]' ORDER BY RAND() LIMIT 1");
    echo mysql_error();
    $wp = mysql_fetch_assoc($r2);
    //$p_id = mt_rand(1, $w[p_num]);
    echo "<td valign=top><center>";
    //echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a href='javascript:void(0)' onclick='location.replace(\"ca-input.php\" + \"?c_id=$ts[c_id]&t_id=$ts[t_id]&b_id=$b_id&a_id=$w[a_id]&p_id=$wp[p_id]";
    if ($admin == 1) echo "&admin=1";
    echo "\"); return false;'>";
    // style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;'
    $img_url = show_painting($w[a_id], $wp[p_id], $img_width, $img_width);
    echo "</a><br><a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> ".strtoupper(substr($w[a_nation], 0, 3))."-".(substr($w[a_years], 0, 4))." ".$w[a_genre];
    if ($wp[p_desc_en] != '') echo "<br><i>".substr($wp[p_desc_en], 0, 100)."</i>";
    else if ($wp[p_desc_ru] != '') echo "<br><i>".substr($wp[p_desc_ru], 0, 100)."</i>";
    echo " <a target=_blank href=$img_url><img height=14 src=i/zoom_in.png></a> ";
    echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
    //echo "</div>";
    if (($i+2) % ($col_num) == 0) echo "<tr>";
  }
  echo "</table>";

  // Show new composers
  //echo "<td bgcolor=black>";
  echo "<td valign=top><table>";
  //$q = "SELECT *, (a_start-'$ts[c_start]') as dy FROM aq_artists HAVING dy>0 ORDER BY dy LIMIT $max_painters";
  /*
    LEFT OUTER JOIN ca_log ON (aq_artists.a_id=ca_log.a_id AND ca_log.v_up>(ca_log.v_down*2.5)) 
    WHERE ca_log.a_id IS NULL 
  */
  $q = "SELECT *, (a_start-'$ts[c_start]') as dy, aq_artists.a_id as a_id
    FROM aq_artists 
    GROUP BY aq_artists.a_id 
    HAVING dy>0
    ORDER BY dy 
    LIMIT ".($max_painters-1);
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $p_id = mt_rand(1, $w[p_num]);
    echo "<td valign=top><center>";
    //echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a href=# onclick='location.replace(\"ca-input.php\" + \"?c_id=$ts[c_id]&t_id=$ts[t_id]&b_id=$b_id&a_id=$w[a_id]&p_id=$p_id\")'>";
    // style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' 
    $img_url = show_painting($w[a_id], $p_id, $img_width, $img_width);
    echo "</a><br><a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> ".strtoupper(substr($w[a_nation], 0, 3))."-".(substr($w[a_years], 0, 4))." ".$w[a_genre];
    echo " <a target=_blank href=$img_url><img height=14 src=i/zoom_in.png></a> ";
    echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
    //echo "</div>";
    if (($i+1) % ($col_num) == 0) echo "<tr>";
  }
  echo "</table>";
  echo "</table>";
  echo "<p>Please select painting, which best represents music that is playing. Please be careful at making your decisions, because it will influence overall statistics.";
  echo "<p>Please refresh page if you cannot find appropriate association.";
  
  stop_time();
?>
<script>window.scroll(0, 100);</script>
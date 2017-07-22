<?
  include "lib.php";
  
  start_time();
  $q = "SELECT p_num, a_id, a_name2 FROM aq_artists";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    for ($p=1; $p<=$w[p_num]; $p++) {
      $p_name = str_pad($p, 4, '0', STR_PAD_LEFT);
      $exist = file_exists("../../aquiz/paintings/$w[a_id]/$p_name.jpg");
      $exist2 = file_exists("../../aquiz/preview/$w[a_id]/$p_name.jpg");
      $q = "SELECT p_height FROM aq_paintings WHERE a_id=$w[a_id] AND p_id=$p";
      $r2 = mysql_query($q);
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      if (($exist == 0) || ($exist2 == 0) || ($w2[p_height] == 0)) {
        $pcnt++;
        echo "<a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> ($w[a_id]) / $p: $exist/$exist2/$w2[p_height]/<br>";
      }
      if (($w2[p_height] == 0) && ($exist == true)) {
        $img_url = "$url_main/aquiz/paintings/$w[a_id]/$p_name.jpg";
        $ii = getimagesize($img_url);
        echo "$w[a_id] $p $ii[0] $ii[1]<br>";
        /*
        mysql_query("INSERT INTO aq_paintings VALUES('$w[a_id]', '$p', '$p_name', '$ii[0]', '$ii[1]', '', '', '', '', '')
          ON DUPLICATE KEY UPDATE 
          p_width='$ii[0]', p_height='$ii[1]'");
        */
        echo mysql_error();
      }
    }
    //break;
  }
  echo "Total $pcnt problem paintings<br>";
  
  // Check all paintings
  $q = "SELECT p_id, p_num, aq_paintings.a_id, a_name2 FROM aq_paintings LEFT JOIN aq_artists USING (a_id)";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $p_name = str_pad($w[p_id], 4, '0', STR_PAD_LEFT);
    $exist = file_exists("../../aquiz/paintings/$w[a_id]/$p_name.jpg");
    if ($exist == 0) {
      echo "Not found file for SQL entry <a href=$url_main/aquiz/artist.php?a_id=$w[a_id]>$w[a_name2]</a> / $w[p_id] ($w[p_num])<br>\n";
      mysql_query("DELETE FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$w[p_id]'");
      echo mysql_error();
    }
  }
  stop_time();
?>
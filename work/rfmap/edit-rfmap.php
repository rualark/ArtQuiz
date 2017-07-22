<?
  include "lib.php";
  include "../mysql.php";
  include "style.php";
  include "map-lib.php";

  secure_variable("act");
  secure_variable("tag");
  secure_variable("map_pos");
  secure_variable("ladder");
  
  $min_dist = 22; // in pixels
  $mi = '';
  $font = "fonts/arial.ttf";
  $font_size = 10;
  
  start_time2();
  
  if ($act == "edit-tag") {
    $q = "SELECT *, ROUND(IF(a_year2!=0, (a_year1+a_year2)/2, a_year1+20)) AS ayear
      FROM rq_atags LEFT JOIN rq_authors USING (a_id) 
      WHERE t_name='$tag' AND t_type=2
      ORDER BY ayear"; // AND map_pos=0 
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $map_pos2 = $map_pos;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      mysql_query("UPDATE rq_authors SET map{$mi}_pos='$map_pos2' WHERE a_id='$w[a_id]'");
      echo "Set $w[a_name] to $map_pos2<br>";
      $bbox = imageftbbox($font_size, 0, $font, $w[map_name]);
      if ($ladder == "on") $map_pos2 += $bbox[4]*1.1 + 15;
      if (($i+1) % 6 == 0) $map_pos2 = $map_pos;
      echo mysql_error();
    }
    exit;
  }
  
  function optim_dist($map_pos) {
    GLOBAL $min_dist, $mi;
    //mysql_query("UPDATE rq_authors SET map_ayear=IF(a_year2!=0, (a_year1+a_year2)/2, a_year1+20) WHERE map_pos='$map_pos'");
    echo mysql_error();
    //mysql_query("UPDATE rq_authors SET map_ayear=0 WHERE map_pos='$map_pos'");
    echo mysql_error();
    $q = "SELECT *, ROUND(IF(a_year2!=0, (a_year1+a_year2)/2, a_year1+20)) AS ayear
      FROM rq_authors WHERE map{$mi}_pos='$map_pos' ORDER BY ayear, a_year1"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $ayear = array();
    $aayear = array();
    $aid = array();
    echo "Detected $n2 authors at $map_pos<br>";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $aayear[$x] = $w2[ayear]+$w2["map{$mi}_year"];
      $ayear[$x] = $aayear[$x];
      $ay[$x] = y($ayear[$x]);
      $aid[$x] = $w2[a_id];
      $aname2[$x] = $w2[a_name2];
      //echo "Loaded $x - $aname2[$x] - $aayear[$x] - $ayear[$x]<br>";
    }
    // Optimize
    for ($t=0; $t<100000; $t++) {
      $changes = 0;
      for ($z=0; $z<$n2-1; $z++) {
        if (($ay[$z+1]-$ay[$z]) < $min_dist) {
          $ayear[$z+1] += 1;
          $ay[$z+1] = y($ayear[$z+1]);
          $changes++;
        }
        //if ($aid[$z+1] == 813) echo "Debug $z - $aid[$z] - $aname2[$z] - $ayear[$z] - ".($ayear[$z+1])." - $changes<br>";
      }
      //echo "Moved $changes forward<br>";
      for ($z=$n2-1; $z>0; $z--) {
        if (($ay[$z]-$ay[$z-1]) < $min_dist) {
          $ayear[$z-1] -= 1;
          $ay[$z-1] = y($ayear[$z-1]);
          $changes++;
        }
        //if ($aid[$z-1] == 813) echo "Debug $z - $aid[$z] - $aname2[$z] - $ayear[$z] - ".($ayear[$z-1])." - $changes<br>";
      }
      //echo "Moved $changes backward<br>";
      if ($changes == 0) break;
    }
    // Write
    for ($z=0; $z<$n2; $z++) {
      $year = $ayear[$z] - $aayear[$z];
      mysql_query("UPDATE rq_authors SET map{$mi}_ayear='$year' WHERE a_id='$aid[$z]'");
      echo mysql_error();
    }
  }
  
  if ($act == "optim-dist") {
    $q = "SELECT map{$mi}_pos FROM rq_authors WHERE map{$mi}_pos!=0 GROUP BY map{$mi}_pos ORDER BY map{$mi}_pos"; 
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      optim_dist($w["map{$mi}_pos"]);
    }
  }
  
  stop_time2();
  echo "<br><br><br><br><br><br>";
?>
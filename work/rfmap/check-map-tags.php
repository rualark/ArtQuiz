<?
  include "../mysql.php";
  include "qlib.php";
  include "map-lib.php";
  include "style.php";

  start_time();

  $id='';
  $mi='';
  $sa = 20; // Starting age of author

  // Check shapes
  $w = mysql_fetch_assoc($r);
  //echo "<a target=_blank href='https://www.google.com/search?q=$w[t_name]'>$w[t_name]</a><br> ";
  $q = "SELECT t_type, rq_authors.a_id, map{$mi}_right, map{$mi}_pos, a_name,IF(a_year2!=0, (a_year1+a_year2)/2, a_year1+$sa)+map{$mi}_year+map{$mi}_ayear AS my 
    FROM rq_authors 
    LEFT JOIN rq_atags ON (rq_atags.t_name='Материализм' AND rq_atags.t_type>0 AND rq_atags.a_id=rq_authors.a_id)
    WHERE map{$mi}_pos != 0 AND map_shape=1";
  $r2 = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  for ($x=0; $x<$n2; $x++) {
    $w2 = mysql_fetch_assoc($r2);
    $dx = 20;
    if ($w2["map{$mi}_right"] == 1) $dx = -20;
    if ($w2[t_type] < 1) {
      echo "Материализм - <a href='$url_main/rfil/authors.php?a_id=$w2[a_id]' target=_blank>$w2[a_name]</a> ";
      $r3 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w2[a_id]' AND t_type>0 ORDER BY t_type DESC");
      //echo "SELECT * FROM rq_atags WHERE a_id='$w2[a_id]' AND t_type>0 ORDER BY t_type DESC";
      echo mysql_error();
      $n3 = mysql_numrows($r3);
      echo mysql_error();
      for ($z=0; $z<$n3; $z++) {
        $w3 = mysql_fetch_assoc($r3);
        if ($z>0) echo ", ";
        echo "<a title='$w3[l_type]' href='works.php?tag=$w3[t_name]'>";
        if ($w3[t_type] == 2) echo "<font color=green>";
        echo "$w3[t_name]</font></a>";
      }
      echo "<br>";
    }
  }
  exit;

  // Check visual tags
  $r = mysql_query("SELECT * FROM rq_tdesc
    WHERE map{$mi}_label > 0
    ");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //echo "<a target=_blank href='https://www.google.com/search?q=$w[t_name]'>$w[t_name]</a><br> ";
    $q = "SELECT t_type, rq_authors.a_id, map{$mi}_right, map{$mi}_pos, a_name,IF(a_year2!=0, (a_year1+a_year2)/2, a_year1+$sa)+map{$mi}_year+map{$mi}_ayear AS my 
      FROM rq_authors 
      LEFT JOIN rq_atags ON (rq_atags.t_name='$w[t_name]' AND rq_atags.t_type>0 AND rq_atags.a_id=rq_authors.a_id)
      WHERE map{$mi}_pos != 0";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $dx = 20;
      if ($w2["map{$mi}_right"] == 1) $dx = -20;
      if (($w2[my] >= $w["map{$mi}_y1"]) && ($w2[my] <= $w["map{$mi}_y2"]) && 
        ($w2["map{$mi}_pos"]+$dx >= $w["map{$mi}_x1"]) && ($w2["map{$mi}_pos"]+$dx <= $w["map{$mi}_x2"])) {
        if ($w2[t_type] < 1) {
          echo "$w[t_name] - <a href='$url_main/rfil/authors.php?a_id=$w2[a_id]' target=_blank>$w2[a_name]</a> ";
          $r3 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w2[a_id]' AND t_type>0 ORDER BY t_type DESC");
          //echo "SELECT * FROM rq_atags WHERE a_id='$w2[a_id]' AND t_type>0 ORDER BY t_type DESC";
          echo mysql_error();
          $n3 = mysql_numrows($r3);
          echo mysql_error();
          for ($z=0; $z<$n3; $z++) {
            $w3 = mysql_fetch_assoc($r3);
            if ($z>0) echo ", ";
            echo "<a title='$w3[l_type]' href='works.php?tag=$w3[t_name]'>";
            if ($w3[t_type] == 2) echo "<font color=green>";
            echo "$w3[t_name]</font></a>";
          }
          echo "<br>";
        }
      }
    }
  }
  stop_time();
  
?>
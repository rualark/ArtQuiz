<?
  include "lib.php";
  
  start_time();
  // delete jpeg
  //mysql_query("DELETE FROM nq_jpeg");
  //echo mysql_error();
  // rating
  $r = mysql_query("SELECT w_rating FROM nq_pdf WHERE c_id>0 ORDER BY w_rating DESC");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Rating
    if (in_array($i, $mr_levels)) {
      echo "$w[w_rating] => $i, ";
    }
  }
  $fh2 = fopen("remove_bad_jpeg.bat", "a");
  // load names
  $r = mysql_query("SELECT nq_pdf.c_name9, cc_composers.c_id, w_id, c_maxr, w_rating, w_name, w_qpage, w_type, w_page1
    FROM nq_pdf LEFT JOIN cc_composers USING (c_id) ORDER BY w_rating");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Find title pages
    if ($w[w_qpage]-$w[w_page1] > 1) {
      echo "Found title <a href=works.php?w_id=$w[w_id]>page</a> $w[w_qpage]-$w[w_page1]<br>";
      for ($x=$w[w_page1]; $x<$w[w_qpage]-1; $x++) {
        echo "Deleting page $x<br>";
        if (file_exists("$jpeg_path/$w[w_id]_$x.jpg")) fputs($fh2, "del $jpeg_path\\$w[w_id]_$x.jpg\r\n");
      }
    }
    // Trim
    //$w[c_name9] = trim($w[c_name9]);
    //mysql_query("UPDATE nq_pdf SET c_name9='$w[c_name9]' WHERE w_id='$w[w_id]'");
    //echo mysql_error();
    //$r2 = mysql_query("SELECT w_type FROM amusic2.nq_pdf WHERE w_id='$w[w_id]'");
    //echo mysql_error();
    //$w2 = mysql_fetch_assoc($r2);
    //$w[w_type] = $w2[w_type];
    $w[w_type] = str_replace("фортепиано", "piano", $w[w_type]);
    $w[w_type] = str_replace("фортепьяно", "piano", $w[w_type]);
    $w[w_type] = str_replace("гитара", "guitar", $w[w_type]);
    $w[w_type] = str_replace("флейта", "flute", $w[w_type]);
    $w[w_type] = str_replace("скрипка", "violin", $w[w_type]);
    $w[w_type] = str_replace("альт", "viola", $w[w_type]);
    $w[w_type] = str_replace("виолончель", "cello", $w[w_type]);
    $w[w_type] = str_replace("оркестр", "orchestra", $w[w_type]);
    $w[w_type] = str_replace("медные духовые", "brass", $w[w_type]);
    $w[w_type] = str_replace("орган", "organ", $w[w_type]);
    $w[w_type] = str_replace("кларнет", "clarinet", $w[w_type]);
    $w[w_type] = str_replace("в четыре руки", "4 hands", $w[w_type]);
    $w[w_type] = str_replace("в 4 руки", "4 hands", $w[w_type]);
    $w[w_type] = str_replace("два", "2", $w[w_type]);
    mysql_query("UPDATE nq_pdf SET w_type='$w[w_type]' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $w[w_name] = str_replace("_", " ", $w[w_name]);
    mysql_query("UPDATE nq_pdf SET w_name='$w[w_name]' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    // rating
    if ($w[c_maxr] < $w[w_rating]) {
      mysql_query("UPDATE cc_composers SET c_maxr='$w[w_rating]' WHERE c_id='$w[c_id]'");
      echo mysql_error();
    }
    // c_id
    if ($w[c_id]>0) {
      mysql_query("UPDATE nq_pdf SET c_id='$w[c_id]' WHERE w_id='$w[w_id]'");
      echo mysql_error();
    }
    // Check pdf
    //$fh = fopen("pdf/$w[w_id].pdf", "r");
    //$w_header = fgets($fh, 5);
    //fclose($fh);
    //echo "$w[w_id] - $w_header<br>";  
    //mysql_query("UPDATE nq_pdf SET w_header='$w_header' WHERE w_id='$w[w_id]'");
    //echo mysql_error();
    // Check jpeg
    $page1 = 0;
    $page2 = 0;
    $started = 0;
    for ($x=1; $x<1000; $x++) {
      $path = "$jpeg_path/$w[w_id]_$x.jpg";
      if (file_exists($path)) {
        $ii = getimagesize($path);
        mysql_query("INSERT INTO nq_jpeg VALUES('$w[w_id]', '$x', '$ii[0]', '$ii[1]', '$w[w_id]_$x.jpg', 0)
          ON DUPLICATE KEY UPDATE p_width='$ii[0]', p_height='$ii[1]'");
        echo mysql_error();
        if ($w[c_id] == 0) fputs($fh2, "del $jpeg_path\\$w[w_id]_$x.jpg\r\n");
        if ($started == 1) {
          $page2 = $x;
        } else {
          $page1 = $x;
          $page2 = $x;
          $started = 1;
        }
      } else {
        if ($started == 1) break;
        if ($x>10) break;
      }
    }
    mysql_query("DELETE FROM nq_jpeg WHERE w_id='$w[w_id]' AND page>$page2");
    $path2 = "$jpeg_path/$w[w_id]_".($x+1).".jpg";
    if (file_exists($path2)) {
      echo "Found discontiguous score $path2 $w[c_name] $w[w_name]<br>";
      for ($z=$x+1; $z<1000; $z++) if (file_exists("$jpeg_path/$w[w_id]_$z.jpg")) fputs($fh2, "del $jpeg_path\\$w[w_id]_$z.jpg\r\n");
    }
    if ($page2 == 1) {
      //echo "<a target=_blank href=works.php?w_id=$w[w_id]><img src='$jpeg_path/$w[w_id]_1.jpg' width=600></a> $w[c_name9] $w[w_name] $w[w_rating]<br>";
    }
    if ($page2 > 100) {
      echo "Score <a target=_blank href=works.php?w_id=$w[w_id]>$w[w_id]</a> has $page2 pages!<br>";
      for ($z=100; $z<$page2; $z++) if (file_exists("$jpeg_path/$w[w_id]_$z.jpg")) fputs($fh2, "del $jpeg_path\\$w[w_id]_$z.jpg\r\n");
    }
    //if ($page1 == 0) echo "$w[w_id] - $page1 - $page2<br>";
    if ($w[w_id] == 14) echo "$w[w_id] $page1 $page2<br>";
    mysql_query("UPDATE nq_pdf SET w_page1='$page1', w_page2='$page2' WHERE w_id='$w[w_id]'");
    echo mysql_error();
    // Change qpage only if we increase it
    $qpage = $page1+1;
    if ($qpage > $page2) $qpage = $page2;
    if (($w[w_qpage] < $page1) || ($w[w_qpage] > $page2)) {
      mysql_query("UPDATE nq_pdf SET w_qpage='$qpage' WHERE w_id='$w[w_id]'");
      echo mysql_error();
    }
    //if ($i>100) break;
  }
  fclose($fh2);
  stop_time();
?>
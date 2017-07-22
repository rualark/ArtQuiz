<?
  include "mysql.php";
  include "cclib.php";
  include "../qlib.php";

  start_time();
  
  $relpath = "../";
  $path1 = "blocks"; // Source folder
  $fl=getSongList($relpath.$path1);
  if (is_array($fl)) sort($fl);
  $cnt = count($fl);
  for ($i=0; $i<$cnt; $i++) {
    $st = str_replace(".mp3", "" ,strtolower($fl[$i]));
    $fld = explode("/", $st);
    $t_id = $fld[2]+0;
    $b_id = $fld[3]+0;
    $size = filesize($fl[$i]);
    /*
    $q = "SELECT t_bad, b_lid FROM cc_qblocks 
      LEFT JOIN cc_ctracks USING (t_id) 
      WHERE cc_qblocks.t_id='$t_id' AND cc_qblocks.b_lid='$b_id'";
    */
    $q = "SELECT t_bad FROM cc_ctracks 
      WHERE t_id='$t_id'";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    //echo "$q $w[t_bad] $w[b_lid]<br>";
    $bad = 0;
    if ($w[t_bad] == 1) $bad = 1;
    //if ($w[b_lid] == 0) $bad = 1;
    if ($bad>0) {
      //echo "t$t_id b$b_id bad=$w[t_bad]<br>";
      $tsize += $size;
      $tcnt ++;
    }
    $tsize2 += $size;
  }
  echo "<p>Bad size: ".round($tsize/1000000/1000, 3)." of ".round($tsize2/1000000000, 3)." Gb";
  echo "<p>Bad blocks: $tcnt of $cnt";
  stop_time();
?>
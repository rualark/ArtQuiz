<?
  include "../qlib.php";
  
  $fa = file("silent_blocks.csv");
  
  for ($i=0; $i<count($fa); $i++) {
    $st = $fa[$i];
    $sa = explode(",", $st);
    $b_id = substr($sa[1], 0, strpos($sa[1], "."));
    $b_id2 = str_pad($b_id+1, 3, '0', STR_PAD_LEFT);
    mkdir("../blocks-silent/$sa[0]");
    // Check if block is in table
    $q = "SELECT * FROM cc_qblocks 
      LEFT JOIN cc_composers USING (c_id) 
      WHERE t_id='$sa[0]' AND b_lid='$b_id'";
    //echo "$q<br>";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_array($r);
    // move only final blocks
    if (is_file("../blocks/$sa[0]/".$b_id2.".mp3")) {
      echo "<font color=red>";
    } else {
      rename("../blocks/$sa[0]/$sa[1]", "../blocks-silent/$sa[0]/$sa[1]");
    }
    echo "$sa[0]/$sa[1] ".round(filesize("../blocks-silent/$sa[0]/$sa[1]")/1024/1024, 2)." <b>$w[b_id]</b> $w[c_name]</font><br>";
    // Delete block from table
    $q = "DELETE FROM cc_qblocks WHERE t_id='$sa[0]' AND b_lid='$b_id'";
    $r = mysql_query($q);
    echo mysql_error();
    //rename("../blocks-silent/$sa[0]/$sa[1]", "../blocks/$sa[0]/$sa[1]");
  }
?>
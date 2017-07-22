<?
  include "lib.php";
  
  secure_variable("s");

  echo "<form>";
  echo "Search artist: <input name=s value='$s'>";
  echo "</form>";
  
  if ($s != '') { 
    $q = "SELECT * FROM aq_artists WHERE p_num>2 AND a_name LIKE '%$s%'";
    $r = mysql_query($q);
    $a_cnt = mysql_numrows($r);
    for ($i=0; $i<$a_cnt; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<a href=artist.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    }
  }
?>
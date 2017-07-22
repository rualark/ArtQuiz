<?
  include "qlib.php";
  include "style.php";

  $q = "SELECT * FROM aq_artists";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $sa = explode(" ", $w[a_years]);
    $sa2 = explode(" ", $w[a_name]);
    mysql_query("UPDATE aq_artists SET a_start='$sa[0]', a_stop='$sa[2]', a_name2='".$sa2[count($sa2)-1]."' WHERE a_id=$w[a_id]");
    echo mysql_error();
  }
?>
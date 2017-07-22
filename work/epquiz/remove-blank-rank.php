<?
  include "mysql.php";
  include "lib.php";

  start_time();
 
  for ($i=1; $i<1000; $i++) {
    //echo "Probing rank $i<br>";
    $r = mysql_query("SELECT COUNT(*) as cnt FROM ep_authors WHERE a_rating='$i'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    if ($w[cnt]>1) echo "$w[cnt] entries for rank $w[a_rating]<br>";
    if ($w[cnt] == 0) {
      $r2 = mysql_query("SELECT MIN(a_rating) as a_rating FROM ep_authors WHERE a_rating>'$i'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      $w2 = mysql_fetch_assoc($r2);
      // Check if no more poets
      if (($n2 == 0) || ($w2[a_rating] == 0)) break;
      $di = $w2[a_rating]-$i;
      echo "UPDATE eq_authors SET a_rating=a_rating-'$di' WHERE a_rating>'$i'<br>";
      $r = mysql_query("UPDATE ep_authors SET a_rating=a_rating-'$di' WHERE a_rating>'$i'");
      echo mysql_error();
    }
  }
  stop_time();
?>
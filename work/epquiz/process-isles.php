<?
  include "mysql.php";
  include "../lib.php";

  start_time();
  $r = mysql_query("DELETE FROM l_arat");
  echo mysql_error();
  
  // count arat
  $r = mysql_query("SELECT * FROM l_authors WHERE a_works>0");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT w_rating FROM l_works WHERE a_id='$w[a_id]' ORDER BY w_rating desc");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $need_cut = 0;
    $old_r = 0;
    $cur_mr = 0;
    $a_mr = "";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x+1 == $mr_levels_i[$cur_mr]) {
        //echo "Found $x works by $w[a_name]<br>";
        $need_cut = 1;
      }
      if ($need_cut > 0) {
        if ($old_r != $w2[w_rating]) {
          //echo " $x cut $old_r<br>";
          $need_cut = 0;
          $cur_mr++;
          $a_mr .= "$old_r+$x|";
        }
      }
      $old_r = $w2[w_rating];
    }
    $a_mr .= "$old_r+$x|";
    echo "$a_mr<br>";
    //break;
  }
  

  stop_time();
?>
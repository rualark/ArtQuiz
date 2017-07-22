<?
  // This is works loader
  include "../mysql.php";
  include "style.php";

  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id)";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q = "SELECT * FROM rl_works WHERE a_id='$w[a_id]' AND w_name='$w[w_name]' AND tr_wid='$w[tr_wid]' AND t_len='$w[t_len]' AND b_len='$w[b_len]' AND t_len2='$w[t_len2]' ORDER BY w_rating";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    //$w2 = mysql_fetch_array($r2);
    if ($n2>1) {
      echo "Duplicate <a href='../../rlit/authors.php?a_id=$w[a_id]'>$w[a_name]</a> - $w[w_name]<br>";
    }
  }
?>
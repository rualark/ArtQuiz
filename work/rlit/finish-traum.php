<?
  // This is copy creator
  include "../mysql.php";
  include "style.php";

  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE tr_wid!=0
    ORDER BY a_id"; // AND t_len=0
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    if (file_exists("traum/$w[a_id]/$w[w_id].fb2")) {
      $fs = filesize("traum/$w[a_id]/$w[w_id].fb2");
      echo "$w[a_id] - $w[w_id] - $fs<br>";
      mysql_query("UPDATE rl_works SET t_len2='$fs', tr_wtype='fb2' WHERE w_id='$w[w_id]'");
      echo mysql_error();
    }
    if (file_exists("traum/$w[a_id]/$w[w_id].txt")) {
      $fs = filesize("traum/$w[a_id]/$w[w_id].txt");
      echo "$w[a_id] - $w[w_id] - $fs<br>";
      mysql_query("UPDATE rl_works SET t_len2='$fs', tr_wtype='txt' WHERE w_id='$w[w_id]'");
      echo mysql_error();
    }
  }
?>
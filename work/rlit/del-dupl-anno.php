<?
  // This is works loader
  include "../mysql.php";
  include "style.php";

  echo "Anno: ";
  $r = mysql_query("SELECT w_id FROM rl_wanno GROUP BY w_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r2 = mysql_query("SELECT * FROM rl_wanno WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      $anno[$x] = $w2[w_anno];
    }
    if ($n2>1) {
      for ($x=0; $x<$n2; $x++) {
        for ($z=$x+1; $z<$n2; $z++) {
          $dif = levenshtein(mb_substr($anno[$x], 0, 100), mb_substr($anno[$z], 0, 100));
          if ($dif < 90) {
            echo "Duplicate $w[w_id] - $dif<br>$anno[$x]<br>$anno[$z]<br><br>";
            if (strlen($anno[$x]) < strlen($anno[$z])) $del_id = $x;
            else $del_id = $z;
            $an = mysql_real_escape_string($anno[$del_id]);
            //mysql_query("DELETE FROM rl_wanno WHERE w_id='$w[w_id]' AND w_anno='$an'");
            echo mysql_error();
          }
        }
      }
    }
  }

?>
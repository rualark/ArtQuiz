<?
  // This is copy creator
  include "../mysql.php";
  include "style.php";

  function fs3($fh, $st) {
    //$st2 = iconv("utf-8", "windows-1251", $st);
    $st2 = mb_convert_encoding($st, "windows-1251", "utf-8");
    fputs($fh, $st2);
  }
  
  $fa = file("allbooks-ru.txt");
  $c = count($fa);
  $old_name = '';
  $x=0;
  for ($i=0; $i<$c; $i++) {
    $st2 = $fa[$i];
    $st2 = iconv("windows-1251", "utf-8", $st2);
    $a_name = substr($st2, 0, strpos($st2, ' - '));
    $w_name = substr($st2, strpos($st2, ' - ')+3);
    $w_name = substr($w_name, 0, strpos($w_name, ' | '));
    $w_type = substr($st2, strpos($st2, ' | ')+3);
    $wtype[$w_name] = trim($w_type);
  }
  
  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) LEFT JOIN tr_books ON (tr_books.tr_wid=rl_works.tr_wid) WHERE rl_works.tr_wid!=0 AND t_len2=0
    ORDER BY a_id"; // AND t_len=0
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "$n<br>";
  $fh = fopen('copy-traum2.bat', 'w');
  fputs($fh, "chcp 1251\r\n");
  fputs($fh, "mkdir traum\r\n");
  fputs($fh, "mkdir traum\r\n");
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    if (($w[b_ext] != 'fb2') && ($w[b_ext] != 'fb2')) continue;
    //if (($wtype[$w[tr_wid]] != "fb2")) continue;
    echo "$w[a_name] - $w[b_name] - $w[b_ext]";
    echo "<br>";
    if ($old_a_id != $w[a_id]) {
      fputs($fh, "mkdir \"traum\\$w[a_id]\"\r\n");
      fputs($fh, "mkdir \"traum2\\$w[a_id]\"\r\n");
      $old_a_id = $w[a_id];
    }
    // Copy full
    fs3($fh, "copy \"$w[b_path]$w[b_fname].zip\" \"traum\\$w[a_id]\\$w[w_id].zip\"\r\n");
    fs3($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].zip\r\n");
    fs3($fh, "move \"$w[b_fname]\" \"traum2\\$w[a_id]\\$w[w_id].$w[b_ext]\"\r\n");
  }
  fclose($fh);
?>
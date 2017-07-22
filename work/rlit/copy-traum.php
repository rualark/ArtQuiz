<?
  // This is copy creator
  include "../mysql.php";
  include "style.php";

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
  
  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE tr_wid!='' AND t_len2=0
    ORDER BY a_id"; // AND t_len=0
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "$n<br>";
  $fh = fopen('copy-traum.bat', 'w');
  fputs($fh, "chcp 1251\r\n");
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    if (($wtype[$w[tr_wid]] != 'fb2') && ($wtype[$w[tr_wid]] != 'txt')) continue;
    //if (($wtype[$w[tr_wid]] != "fb2")) continue;
    echo "$w[tr_id] - $w[tr_wid] ".$wtype[$w[tr_wid]];
    echo "<br>";
    $w[tr_wid] = str_replace('«', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('»', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('"', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('…', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('–', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('/', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace(':', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('?', '_', $w[tr_wid]);
    $w[tr_wid] = str_replace('ё', 'е', $w[tr_wid]);
    $w[tr_id] = iconv("utf-8", "windows-1251", $w[tr_id]);
    $w[tr_wid] = iconv("utf-8", "windows-1251", $w[tr_wid]);
    $letter = substr($w[tr_id], 0, 1);
    $subf = '';
    if (strpos($w[tr_wid], ' - ') !== false) {
      $subf = substr($w[tr_wid], 0, strpos($w[tr_wid], ' - '))."\\";
      $w[tr_wid2] = substr($w[tr_wid], strpos($w[tr_wid], ' - ')+3);
    }
    $sa = explode(' ', $w[tr_id]);
    if ($old_a_id != $w[a_id]) {
      fputs($fh, "mkdir \"traum\\$w[a_id]\"\r\n");
      fputs($fh, "mkdir \"traum2\\$w[a_id]\"\r\n");
      $old_a_id = $w[a_id];
    }
    // Copy subfolder
    if ($subf != '') {
      fputs($fh, "copy \"ru\\$letter\\$sa[0] $sa[1]\\$subf$sa[0] - $w[tr_wid2].fb2.zip\" \"traum\\$w[a_id]\\$w[w_id].fb2.zip\"\r\n");
      fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].fb2.zip\r\n");
      fputs($fh, "move \"$sa[0] - $w[tr_wid2].fb2\" \"traum2\\$w[a_id]\\$w[w_id].fb2\"\r\n");
    }
    // Copy full
    fputs($fh, "copy \"ru\\$letter\\$sa[0] $sa[1] $sa[2]\\$sa[0] - $w[tr_wid].fb2.zip\" \"traum\\$w[a_id]\\$w[w_id].fb2.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].fb2.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].fb2\" \"traum2\\$w[a_id]\\$w[w_id].fb2\"\r\n");
    // Copy simple
    fputs($fh, "copy \"ru\\$letter\\$sa[0] $sa[1]\\$sa[0] - $w[tr_wid].fb2.zip\" \"traum\\$w[a_id]\\$w[w_id].fb2.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].fb2.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].fb2\" \"traum2\\$w[a_id]\\$w[w_id].fb2\"\r\n");
    // Copy simple2
    fputs($fh, "copy \"ru\\$letter\\$sa[0]\\$sa[0] - $w[tr_wid].fb2.zip\" \"traum\\$w[a_id]\\$w[w_id].fb2.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].fb2.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].fb2\" \"traum2\\$w[a_id]\\$w[w_id].fb2\"\r\n");
    // Copy full txt
    fputs($fh, "copy \"ru\\$letter\\$sa[0] $sa[1] $sa[2]\\$sa[0] - $w[tr_wid].txt.zip\" \"traum\\$w[a_id]\\$w[w_id].txt.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].txt.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].txt\" \"traum2\\$w[a_id]\\$w[w_id].txt\"\r\n");
    // Copy simple txt
    fputs($fh, "copy \"ru\\$letter\\$sa[0] $sa[1]\\$sa[0] - $w[tr_wid].txt.zip\" \"traum\\$w[a_id]\\$w[w_id].txt.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].txt.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].txt\" \"traum2\\$w[a_id]\\$w[w_id].txt\"\r\n");
    // Copy simple txt2
    fputs($fh, "copy \"ru\\$letter\\$sa[0]\\$sa[0] - $w[tr_wid].txt.zip\" \"traum\\$w[a_id]\\$w[w_id].txt.zip\"\r\n");
    fputs($fh, "7z.exe e -y traum\\$w[a_id]\\$w[w_id].txt.zip\r\n");
    fputs($fh, "move \"$sa[0] - $w[tr_wid].txt\" \"traum2\\$w[a_id]\\$w[w_id].txt\"\r\n");
  }
  fclose($fh);
?>
<?
  include "mysql.php";
  include "lib.php";
  
  $g_id = 20700;
  $w_rating = 10000;
  
  start_time();
  
  $fh2 = fopen("move_pdf.bat", "w");

  $fl = listdir("composers");
  echo "<pre>";
  print_r($fl);
  for ($i=0; $i<count($fl); $i++) {
    $sa = explode('/', $fl[$i]);
    $name = str_replace("'", '`', $sa[2]);
    $name = str_replace(".pdf", '', $name);
    echo "$sa[1] ";
    $r = mysql_query("SELECT * FROM cc_composers WHERE c_folder='$sa[1]'");
    echo mysql_error();
    $n = mysql_numrows($r);
    $w = mysql_fetch_assoc($r);
    if ($w[c_id] == 0) {
      $r = mysql_query("SELECT * FROM cc_composers WHERE c_folder LIKE '%$sa[1]%'");
      echo mysql_error();
      $n = mysql_numrows($r);
      for ($x=0; $x<$n; $x++) {
        $w2 = mysql_fetch_assoc($r);
        echo "<font color=red><b>$w2[c_folder]</b></font> | ";
      }
    }
    echo "<b>$w[c_name]</b><br>";
    $g_id++;
    //mysql_query("INSERT INTO nq_pdf VALUES('$w[c_id]', '', '$name', 0, '$g_id', '".($w_rating+$i)."', 0, 0, '', '%PDF', 0, 0, 0, 0, 0)");
    echo mysql_error();
    fputs($fh2, "copy \"$sa[0]\\$sa[1]\\$sa[2]\" \"pdf\\$g_id.pdf\"\r\n");
  }
  fclose($fh2);
  
  // Then:
  // - run move_pdf.bat
  // - convert pdf to jpeg using Free PDF to Jpeg converter (freepdfsolutions.com)
  // - run process-notomania.php
  // - check margins and first page
?>
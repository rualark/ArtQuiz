<?
  include "mysql.php";
  
  // Count tracks with rating
  $q = "UPDATE cc_composers
    LEFT JOIN (
    SELECT c_id, SUM(IF(t_rating>0, 1, 0)) AS cnt
    FROM cc_ctracks
    GROUP BY c_id) t USING (c_id)
    SET tr_count=cnt";
  $r = mysql_query($q);
  echo mysql_error();
  
  // Remove composer from t_name and t_folder2
  $q = "SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id) ORDER BY c_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $p_name = "";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $cname = preg_replace('/[^ A-Za-z0-9\-]/', "", iconv("UTF-8", "cp1251//TRANSLIT", $w[c_name3]));
    //$cname = $w[c_name3];
    $t_name = $w[t_name];
    $t_folder = $w[t_folder];
    $p1 = strpos($t_folder, "/");
    $t_folder = substr($t_folder, $p1+1);
    if ($p1 == 0) $t_folder="";
    $t_folder = str_ireplace($w[c_name], "", $t_folder);
    $t_folder = str_ireplace($w[c_name2], "", $t_folder);
    $t_folder = str_ireplace($w[c_name3], "", $t_folder);
    $t_folder = str_ireplace($cname, "", $t_folder);
    $t_folder = str_ireplace($w[c_name4], "", $t_folder);
    $t_folder = str_replace("()", "", $t_folder);
    $t_folder = str_replace("[]", "", $t_folder);
    $t_folder = str_ireplace("[mp3]", "", $t_folder);
    $t_folder = preg_replace("/([\- \.,])(\\1+)/i", '\\1', $t_folder);
    $t_folder = str_replace("- -", "-", $t_folder);
    $t_folder = str_replace(". .", ".", $t_folder);
    $t_folder = str_replace(" - .", ".", $t_folder);
    $t_folder = str_replace("- .", ".", $t_folder);
    $t_folder = str_replace(" .", ".", $t_folder);
    $t_folder = trim($t_folder, "-., /\t\n\r\0\x0B");

    $t_name = str_ireplace(".mp3", "", $t_name);
    $t_name = str_ireplace($w[c_name], "", $t_name);
    $t_name = str_ireplace($w[c_name2], "", $t_name);
    $t_name = str_ireplace($w[c_name3], "", $t_name);
    $t_name = str_ireplace($cname, "", $t_name);
    $t_name = str_ireplace($w[c_name4], "", $t_name);
    $t_name = str_replace("()", "", $t_name);
    $t_name = str_replace("[]", "", $t_name);
    $t_name = str_ireplace("[Edition]", "", $t_name);
    $t_name = preg_replace("/([\- \.,])(\\1+)/i", '\\1', $t_name);
    $t_name = str_replace("- -", "-", $t_name);
    $t_name = str_replace(". .", ".", $t_name);
    $t_name = str_replace(" - .", ".", $t_name);
    $t_name = str_replace("- .", ".", $t_name);
    $t_name = str_replace(" .", ".", $t_name);
    $t_name = trim($t_name, "-., /\t\n\r\0\x0B");
    //if ($t_folder != $w[t_folder2]) echo "<a href=../am.php?c_id=$w[c_id]>$cname</a> - $t_folder<br>"; // ($w[t_id])
    //if ($t_name != $w[t_name]) echo "<a href=../am.php?c_id=$w[c_id]>$cname</a> - $t_name<br>"; // ($w[t_id])
    //if ($t_name == "") echo "Error<Br>";
    $r2 = mysql_query("UPDATE cc_ctracks SET t_name=\"$t_name\", t_folder2=\"$t_folder\" WHERE t_id='$w[t_id]'");
    echo mysql_error();
  }
  
  // Update composer stats
  $q = "SELECT *,count(t_id) as cnt,sum(cc_ctracks.t_len) as tln FROM cc_composers LEFT JOIN cc_periods USING (p_name) LEFT JOIN cc_ctracks ON (cc_composers.c_id=cc_ctracks.c_id) WHERE c_folder != '' AND t_bad=0 GROUP BY cc_ctracks.c_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $p_name = "";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_composers SET c_len=$w[tln],t_count=$w[cnt] WHERE c_id=$w[c_id]");
  }
  
  // Update composer block count
  $q = "SELECT c_id,count(*) as cnt FROM cc_qblocks GROUP BY c_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_composers SET c_bcount='$w[cnt]' WHERE c_id='$w[c_id]'");
  }

  // Update track b_max
  $q = "SELECT *,max(b_lid) as b_max FROM cc_qblocks GROUP BY t_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $p_name = "";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_ctracks SET b_max=$w[b_max] WHERE t_id='$w[t_id]'");
    echo mysql_error();
  }
  
?>
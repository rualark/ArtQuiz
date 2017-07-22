<?
  include "../mysql.php";

  // clear marked
  $r = mysql_query("SELECT * FROM eq_authors 
    WHERE a_type LIKE '%!'");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo mysql_error();
    echo "$w[a_name] - $w[a_type]<br>";
    if (file_exists("apic/$w[a_id].jpg")) echo "<img src='apic/$w[a_id].jpg'><br>";
    //unlink("apic/$w[a_id].jpg");
    $type=substr($w[a_type], 0, strlen($w[a_type])-1);
    //mysql_query("UPDATE eq_authors SET a_desc='', a_type2='', a_gkg='', a_gkg_id=-1, a_wiki='', a_type='$type' WHERE a_id=$w[a_id]");
    echo mysql_error();
  }
?>

<?
  include "../mysql.php";
  
  $q = "SELECT a_id, a_name FROM l_authors";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $sa = explode(' ', $w[a_name]);
    $name2 = $sa[count($sa)-1];
    if ($name2 != '') {
      //mysql_query("UPDATE l_authors SET a_name2='$name2' WHERE a_id='$w[a_id]'");
    }
  }
?>
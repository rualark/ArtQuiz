<?
  include "lib.php";
  
  $q = "SELECT tr_id, tr_name, tr_midname, tr_lang, tr_class, tr_nbook, t_name, COUNT(*) AS cnt 
    FROM tr_booktags 
    LEFT JOIN tr_books USING (tr_wid) 
    LEFT JOIN tr_authors USING (tr_id) 
    WHERE t_name = 'sci_philosophy' AND tr_lang='RU'
    GROUP BY tr_id 
    ORDER BY tr_name
  ";
  $r3 = mysql_query($q);
  echo mysql_error();
  $n3 = mysql_numrows($r3);
  for ($y=0; $y<$n3; $y++) {
    $w = mysql_fetch_array($r3);
    echo "$w[tr_name] - $w[cnt] - $w[tr_lang]<br>";
  }
  
?>
<?
  // Sync works
  include "../mysql.php";
  include "lib.php";
  include "style.php";
  
  start_time();
  
  function tr2rl_work($wt) {
    echo "Book name: $wt[b_name]<br>";
    echo "Author id: $wt[a_id]<br>";
    echo "Traum author id: $wt[tr_id]<br>";
    echo "Traum book id: $wt[tr_wid]<br>";
    echo "File type: $wt[b_ext]<br>";
    echo "Language: $wt[b_lang]<br>";
    echo "Year: $wt[b_year]<br>";
    echo "Rating: $wt[a_rating]<br>";
    echo "<p>";
    $q = "INSERT INTO rl_works (a_id,w_name,tr_wid,w_lang,tr_wtype,w_years,w_rating) VALUES ('$wt[a_id]', '$wt[b_name]', '$wt[tr_wid]','$wt[b_lang]','$wt[b_ext]','$wt[b_year]', '$wt[a_rating]')";
    echo $q;
    mysql_query($q);
    echo mysql_error();
  }

  $q = "SELECT tr_name, b_name, t_name, tr_authors.tr_id, tr_books.tr_wid, rl_authors.a_id, b_ext, b_lang, b_year, a_rating FROM tr_booktags 
    LEFT JOIN tr_books USING (tr_wid) 
    LEFT JOIN tr_authors USING (tr_id) 
    LEFT JOIN rl_authors USING (tr_id)
    WHERE a_id>=1253 AND t_name IN ('sci_philosophy', 'religion_rel', 'religion_esoterics', 'sci_psychology', 'sci_politics', 'nonf_publicism', 'religion', 'sci_culture', 'religion_self', 'sci_religion', 'nonf_criticism') AND b_ext = 'fb2'
    GROUP BY tr_wid
    ORDER BY tr_id
    ";
  $r2 = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  echo "$n2 books<br>";
  for ($x=0; $x<$n2; $x++) {
    $w2 = mysql_fetch_assoc($r2);
    echo "$w2[tr_name] - $w2[b_name] - $w2[t_name]<br>";
    //tr2rl_work($w2);
    //exit;
  }
  stop_time();
?>
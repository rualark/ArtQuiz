<?
  // Sync authors
  include "../mysql.php";
  include "lib.php";
  include "style.php";
  
  $q = "SELECT tr_name, t_name, COUNT(*) FROM tr_booktags 
    LEFT JOIN tr_books USING (tr_wid) 
    LEFT JOIN tr_authors USING (tr_id) 
    LEFT JOIN rl_authors USING (tr_id)
    WHERE t_name = 'sci_philosophy' AND a_id is NULL
    GROUP BY tr_id ORDER BY tr_name";
  $q = "SELECT * FROM rq_authors WHERE a_fil=1 AND rl_id=0";
  $r2 = mysql_query($q);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  for ($x=0; $x<$n2; $x++) {
    $w2 = mysql_fetch_assoc($r2);
    if (strpos($w2[a_name], ' ') !== false) {
      $sa = explode(' ', $w2[a_name]);
      $surname = $sa[count($sa)-1];
      $letter = mb_substr($w2[a_name], 0, 1);
      $cond = " AND tr_name LIKE '$surname, $letter%' ";
    } else {
      $surname = $w2[a_name];
      $letter = '';
      $cond = " AND tr_name LIKE '%$w2[a_name]%' ";
    }
    $q = "SELECT * FROM tr_authors LEFT JOIN rl_authors USING (tr_id) WHERE 1=1 $cond ORDER BY tr_nbook DESC LIMIT 1000";
    $q = "SELECT * FROM tr_booktags 
      LEFT JOIN tr_books USING (tr_wid) 
      LEFT JOIN tr_authors USING (tr_id) 
      LEFT JOIN rl_authors USING (tr_id)
      WHERE t_name = 'sci_philosophy' $cond
      GROUP BY tr_id ORDER BY tr_name";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    if ($n == 0) {
      $q = "SELECT * FROM tr_booktags 
        LEFT JOIN tr_books USING (tr_wid) 
        LEFT JOIN tr_authors USING (tr_id) 
        LEFT JOIN rl_authors USING (tr_id)
        WHERE t_name = 'sci_philosophy' AND tr_name LIKE '%$surname%'
        GROUP BY tr_id ORDER BY tr_name";
      //echo $q;
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
    }
    echo "<p><a target=_blank href='$url_main/rquotes/authors.php?rq_id=$w2[a_id]&act=search&a_name=$surname'>$w2[a_name]</a> ";
    if ($n > 0) {
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>Name";
      echo "<th>Lang";
      echo "<th>Class";
      echo "<th>Nbooks";
      echo "<th>Series";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a target=_blank href='$url_main/work/rlit/showtraum.php?rq_id=$w2[a_id]&act=showauthor&tr_id=$w[tr_id]'>";
        if ($w[a_id] != 0) echo "<font color=green>";
        echo preg_replace("/($surname)/iu", "<font color=orange>$1</font>", $w[tr_name])."</font></a>";
        if ($w[tr_midname] != '') echo " ($w[tr_midname])";
        echo "<td>$w[tr_lang]";
        echo "<td>$w[tr_class]";
        echo "<td>$w[tr_nbook]";
        echo "<td>$w[s_id]";
      }
      echo "</table>";
    }
  }
  stop_time();
?>
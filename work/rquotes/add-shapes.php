<?
  include "../mysql.php";
  include "lib.php";
  include "style.php";

  start_time();

  $r = mysql_query("SELECT * FROM rq_authors WHERE map_pos != 0 AND map_shape=0 ORDER BY a_year1");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<a target=_blank href='https://www.google.com/search?q=$w[map_name] материализм'>МАТ</a> ";
    echo "<a target=_blank href='https://www.google.com/search?q=$w[map_name] объективный идеализм'>ОИД</a> ";
    echo "<a target=_blank href='https://www.google.com/search?q=$w[map_name] субъективный идеализм'>СИД</a> ";
    //echo "<a target=_blank href='$url_main/rquotes/authors.php?a_id=$w[a_id]'>";
    echo "<a target=_blank href='$url_main/work/rfmap/build-rfmap.php?a_id=$w[a_id]'>";
    echo "$w[a_name]</a> ";
    $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w[a_id]' AND t_type>0 ORDER BY t_type DESC");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a title='$w2[l_type]' href='works.php?tag=$w2[t_name]'>";
      if ($w2[t_type] == 2) echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        //if ($w2[t_desc] == '') echo " <img title='No description' src=i/edit.png height=14> ";
      }
    }
    echo "<br>";
  }
  stop_time();
?>
<?
  include "../mysql.php";
  include "lib.php";
  include "style.php";
  
  secure_variable('w_id');
  secure_variable('act');
  secure_variable('fil');
  
  if ($act == 'ch-fil') {
    $q = "UPDATE rl_works SET w_fil=$fil WHERE w_id='$w_id'";
    echo $q;
    mysql_query($q);
    echo mysql_error();
    exit;
  }

  $r = mysql_query("SELECT a_name, w_name, w_fil, a_id, rl_works.w_id FROM rl_works 
  LEFT JOIN rl_authors USING (a_id) 
  LEFT JOIN rl_wtags ON (rl_wtags.w_id=rl_works.w_id AND rl_wtags.t_name IN ('religion_rel', 'religion_esoterics', 'sci_psychology', 'sci_politics', 'nonf_publicism', 'religion', 'sci_culture', 'religion_self', 'sci_religion', 'nonf_criticism')) 
  WHERE t_name IN ('religion_rel', 'religion_esoterics', 'sci_psychology', 'sci_politics', 'nonf_publicism', 'religion', 'sci_culture', 'religion_self', 'sci_religion', 'nonf_criticism')
  GROUP BY w_id"); // t_name is NULL
  echo mysql_error();
  $n = mysql_numrows($r);
  //echo "<table>";
  for ($i=0; $i<$n; $i++) {
    //echo "<tr>";
    $w = mysql_fetch_assoc($r);
    echo " <a target=_blank href='?w_id=$w[w_id]&act=ch-fil&fil=1'>";
    if ($w[w_fil] != 1) echo "<font color=orange>";
    echo "FIL1</font></a> ";
    echo " <a target=_blank href='?w_id=$w[w_id]&act=ch-fil&fil=0'><font color=orange>FIL0</font></a> ";
    echo "<a target=_blank href='$url_main/rlit/authors.php?a_id=$w[a_id]'><font color=green>$w[a_name]</font></a> ";
    echo "<a target=_blank href='$url_main/rlit/works.php?w_id=$w[w_id]'><font color=red>$w[w_name]</font></a> ";
    echo " ";
    $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='$url_main/rlit/works.php?tag=$w2[t_name]'>";
      if ($w2[t_name] == 'Философия') echo "<font color=black>";
      if ($w2[t_name] == 'sci_philosophy') echo "<font color=black>";
      echo "$w2[t_name]</a>";
    }
    echo "<br>";
  }
?>  


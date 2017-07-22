<? include "../url.php"; ?>
<?
  include "../analytics.php";
  if (isset($_GET['s'])) $s=$_GET['s'];
  echo "<center><a href=am.php>Genres</a> | <a href=amc.php>Composers</a> | <a href=ams.php>Search</a></center>";
?>
<HEADER><LINK href='css/main.css' rel='stylesheet' type='text/css'>
<title>ClassClass - classical music classification</title>
</HEADER>
<br><center><form method=get action=ams.php>
<input size=40 type=text name=s value='<?=$s; ?>'>
<input type=Submit value=Search>
</form>
</center>
<?
  include "../mysql.php";
  include "style.php";
  
  function show_mysql_error() {
    //echo "<font color=red>".mysql_error()."</font><br/>";
  }
  
  if ($s == "") exit;
  
  $r=mysql_query("SELECT * FROM cc_composers WHERE c_name2 LIKE \"%$s%\" ORDER BY c_name3");
  show_mysql_error();
  $n=mysql_numrows($r);
  echo "<b>Composers search for \"$s\":</b><br>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "<li>";
    echo "[$w[c_years]] <a href=am.php?c_id=$w[c_id]>$w[c_name3]</a> ($w[c_works] works)";
  }
  $r=mysql_query("SELECT * FROM cc_amg WHERE amg_name LIKE \"%$s%\" ORDER BY amg_name");
  show_mysql_error();
  $n=mysql_numrows($r);
  echo "<br><br><b>Genres search for \"$s\":</b><br>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "<li>";
    echo "<a href=am.php?amg_id=$w[amg_id]>$w[amg_name]</a>";
    //echo " ($w[amg_works] works)";
  }
  $r=mysql_query("SELECT * FROM cc_types WHERE t_name LIKE \"%$s%\" ORDER BY t_name");
  show_mysql_error();
  $n=mysql_numrows($r);
  echo "<br><br><b>Types search for \"$s\":</b><br>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "<li>";
    echo "<a href=am.php?t_id=$w[t_id]>$w[t_name]</a>";
    echo " ($w[t_works] works)";
  }
  //$r=mysql_query("SELECT * FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE MATCH (w_name) AGAINST (\"$s\") ORDER BY w_year LIMIT 100");
  $r=mysql_query("SELECT * FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE w_name LIKE \"%$s%\" ORDER BY w_year LIMIT 100");
  show_mysql_error();
  $n=mysql_numrows($r);
  echo "<br><br><b>Works search for \"$s\":</b><br>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "<li>";
    if ($w[w_year]>0) echo "$w[w_year] ";
    else echo "[".$w[c_years]."] ";
    echo "<a target=_blank href='http://www.google.ru/search?q=$w[w_name]";
    if (strlen($w[w_name]<30)) echo " $w[c_name3]";
    echo "'>$w[w_name]</a>";
    echo " (<a href=am.php?c_id=$w[c_id]>$w[c_name3]</a>)";
  }
  if ($n>99) echo "<br>Too many results for your query...";
  
?>
<?
  include "lib.php";
  include "style.php";
  $no_title = 1;
  include "menu.php";

  secure_variable("tag");
  secure_variable("w_id");
  secure_variable("p");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("mr");
  secure_variable("line");
  
  start_time();
  if ($dr>0) {
    mysql_query("UPDATE ep_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"works.php?tag=$tag&w_id=$w_id&p=$p&order=$order\");</script>"); 
  }
  
  if ($w_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM ep_works LEFT JOIN ep_authors USING (a_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    echo "<title>$w[a_name] - $w[w_name]";
    echo "</title>";
    if (file_exists("poems/$w[a_id]/$w[w_id].txt")) $text = file_get_contents("poems/$w[a_id]/$w[w_id].txt");
    echo "<a href=authors.php?a_id=$w[a_id]>$w[a_name]</a> - $w[w_name] ";
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$w[w_name]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$w[a_name] $w[w_name] analysis'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($w[w_url1] != '') echo " <a target=_blank href='$w[w_url1]'><img valign=middle height=$button_height src=i/allpoetry_small.jpg></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[a_name] $w[w_name]'><img valign=middle height=$button_height src=i/youtube.png></a> ";
    echo "<br>";
    if (($w[w_lang] != "eng") && ($w[w_lang] != "")) echo "Language: <b>$w[w_lang]</b><br>";
    if ($w[w_rating] > 30) echo "Work rating: <b>High</b><br>";
    elseif ($w[w_rating] > 0) echo "Work rating: <b>Medium</b><br>";
    else echo "Work rating: <b>Low</b><br>";
    echo "<br><pre><font size=+1>";
    echo "<hr>";
    // show
    $sa = explode("\n", $text);
    $c = count($sa);
    //echo $c;
    if ($c > $max_lines2) {
      $p_max = $c / $max_lines2;
      for ($x=0; $x < $p_max; $x++) {
        if ($x == $p) echo "<b>";
        else echo "<a href=works.php?w_id=$w_id&p=$x>";
        echo ($x+1)."</a></b> ";
      }
      echo "<br><hr>";
    }
    $m = $max_lines2;
    if ($m + $p*$max_lines2 > $c) $m = $c - $p*$max_lines2;
    //echo "<font color=darkgray>";
    if ($p*$max_lines2 > $w[w_en1]) echo "</font>";
    $color="black";
    $weight="normal";
    for ($i=0; $i<$m; $i++) {
      //echo "$line-$i-$p-$max_lines2<br>";
      if ((isset($line)) && ($i+$p*$max_lines2 == $line)) {
        $color="green";
        $weight="bold";
      }
      if ((isset($line)) && ($i+$p*$max_lines2 == $line+$max_lines)) {
        $color="black";
        $weight="normal";
      }
      //if ($w[w_en2]>0) if ($i+$p*$max_lines2 == $w[w_en2]) echo "<font color=darkgray>";
      //if ($i+$p*$max_lines2 == $w[w_en1]) echo "</font>";
      //echo $sa[$i+$p*$max_lines2];
      $sa2 = explode(" ", $sa[$i+$p*$max_lines2]);
      for ($x=0; $x<count($sa2); $x++) {
        if ($x>0) echo " ";
        echo "<a target=_blank href='http://www.multitran.ru/c/m.exe?CL=1&s=$sa2[$x]&l1=1'><font color=$color style='font-weight: $weight'>$sa2[$x]</font></a>";
      }
    }
    //echo "</b></font>";
    echo "<hr>";
    if ($w[w_url1] != "") echo "<a target=_blank href='$w[w_url1]'>Source</a><br>";
    stop_time();
    exit;
  }
  
  if (!isset($order)) $order="w_rating desc";
  
  if ($tag != '') {
    //load tag
    $r = mysql_query("SELECT * FROM ep_atags LEFT JOIN ep_tdesc USING (t_name) WHERE t_name='$tag' LIMIT 1");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Poets with tag <b>$wt[t_name]</b>:";
    if ($wt[t_wiki] == '') $wt[t_wiki] = $wt[t_name];
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$wt[t_wiki]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$wt[t_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($wt[rt_name] != '') echo " <a href='$url_main/pquiz/works.php?tag=$wt[rt_name]'>RUS</a> ";
    echo "<p>";
    if ($wt[t_desc] != "") echo str_replace("\r\n", "<p>", $wt[t_desc])."<p>";
    $r = mysql_query("SELECT * FROM ep_authors LEFT JOIN ep_atags USING (a_id) WHERE a_works>0 AND t_name='$tag' ORDER BY a_year1");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th><a href=authors.php?order=a_name>Name";
    echo "<th width=80><a href=authors.php?order=a_year1>Years";
    echo "<th><a href=authors.php?order=a_country>Country";
    echo "<th>Tags";
    echo "<th><a href='authors.php?order=a_works desc'>Works";
    echo "<th><a href='authors.php?order=a_rating'>Rank";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<a title='$w[l_type]' href=authors.php?a_id=$w[a_id]>";
      //if ($w[a_desc] != "") echo "<font color=green>";
      if (strpos($w[l_type], 'opposed') !== false) echo "<font color=red>";
      elseif ($w[l_type] != '') echo "<font color=#bbbbbb>";
      elseif ($w[map_pos]<1500) echo "<font color=green>";
      echo "$w[a_name]</font></a>";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w[rp_id]>0) echo " <a href=$url_main/pquiz/authors.php?a_id=$w[rp_id]><font color=red>R</font></a>";
      }
      //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2]>0) echo "$w[a_year2]";
      echo "<td>$w[a_country]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM ep_atags WHERE a_id='$w[a_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a title='$w2[l_type]' href='works.php?tag=$w2[t_name]'>";
        if (strpos($w2[l_type], 'opposed') !== false) echo "<font color=red>";
        elseif ($w2[l_type] != '') echo "<font color=#bbbbbb>";
        else echo "<font color=green>";
        echo "$w2[t_name]</font></a>";
      }
      echo "<td>$w[a_works]";
      echo "<td>$w[a_rating]";
    }
    echo "</table><br>";
    // show works
    $cond .= "AND t_name='$tag'";
    //echo "Works with tag <b>$wt[t_name]</b>:<p>";
    stop_time();
    exit;
  }
  if (isset($mr)) {
    $cond = " AND w_rating>='$mr' ";
  }
  $r = mysql_query("SELECT * FROM ep_works 
    LEFT JOIN ep_authors USING (a_id) 
    $more
    WHERE 1=1 $cond ORDER BY $order LIMIT 2000");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Author";
  echo "<th>Work";
  echo "<th>Lang";
  echo "<th><a href='works.php?order=w_rating desc'>Rating";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td><a href=authors.php?a_id=$w[a_id]>$w[a_name]";
    echo "<td><a href=works.php?w_id=$w[w_id]>$w[w_name]";
    echo "<td>";
    if ($w[w_lang] != 'eng') echo "<font color=red>$w[w_lang]";
    else if ($w[w_en1]>2) echo "$w[w_lang]...";
    else if ($w[w_en2]<$w[w_lines]) echo "$w[w_lang]...";
    else echo "$w[w_lang]";
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  echo "Showing only 2000 first poems";
  stop_time();
  
?>
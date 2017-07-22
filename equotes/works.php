<?
  include "lib.php";
  include "style.php";
  $no_title = 1;
  include "menu.php";

  secure_variable("tag");
  secure_variable("q_id");
  secure_variable("p");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("mr");
  secure_variable("line");
  
  start_time();
  if ($dr>0) {
    mysql_query("UPDATE eq_quotes SET w_rating=w_rating+'$dr' WHERE q_id='$q_id'");
    die ("<script language=\"javascript\">location.replace(\"works.php?tag=$tag&q_id=$q_id&p=$p&order=$order\");</script>"); 
  }
  
  if ($q_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM eq_quotes LEFT JOIN eq_authors USING (a_id) WHERE q_id='$q_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    echo "<title>$w[a_name] quote";
    echo "</title>";
    echo "<a href=authors.php?a_id=$w[a_id]>$w[a_name]</a> [$w[a_year1]-$w[a_year2]] <a href='authors.php?country=$w[a_country]'>$w[a_country]</a> ";
    echo " <a href=\"authors.php?type=$w[a_type]\">$w[a_type]</a>";
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$w[q_txt]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$w[q_txt]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($w[q_brainyquote] != "") echo "<a target=_blank href='https://www.brainyquote.com/quotes/quotes/$w[q_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[q_txt]'><img valign=middle height=$button_height src=i/youtube.png></a> ";
    if ($w[ep_id] > 0) echo " <a href='$url_main/epquiz/authors.php?a_id=$w[ep_id]'><img height=$button_height valign=middle border=0 src=i/pquiz4.png></a> ";
    if ($w[aq_id] > 0) echo " <a href='$url_main/aquiz/artist.php?a_id=$w[aq_id]'><img height=$button_height valign=middle border=0 src=i/aquiz.png></a> ";
    if ($w[cc_id] > 0) echo " <a href='$url_main/cquiz/am.php?c_id=$w[cc_id]'><img height=$button_height valign=middle border=0 src=i/cquiz_560.png></a> ";
    echo "<br>";
    if (($w[w_lang] != "eng") && ($w[w_lang] != "")) echo "Language: <b>$w[w_lang]</b><br>";
    echo "Quote rank: $w[q_rating]<br>";
    echo "<br><br>";
    if ($w[q_img] != 0) echo "<img src=qpic/$w[a_id]/$w[q_id].jpg>";
    else {
      echo "<hr><table><td width=500><font size=+2>$w[q_txt]</font></table>";
    }
    // Show tags
    $r2 = mysql_query("SELECT * FROM eq_qtags WHERE q_id='$w[q_id]' AND LEFT(t_name, 1)!='!' ");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    if ($n2>0) echo "<hr>";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      
      echo " <a title='$w2[l_type]' href=\"works.php?tag=$w2[t_name]\">";
      if (strpos($w2[l_type], 'opposed') !== false) echo "<font color=red>";
      elseif ($w2[l_type] != '') echo "<font color=#bbbbbb>";
      else echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
    }
    echo "<hr>";
    if ($w[q_brainyquote] != "") echo "<a target=_blank href='https://www.brainyquote.com/quotes/quotes/$w[q_brainyquote]'>Source</a><br>";
    stop_time();
    exit;
  }
  
  if (!isset($order)) $order="q_rating";
  
  if ($tag != '') {
    //load tag
    $r = mysql_query("SELECT * FROM eq_tags WHERE t_name='$tag'");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Quotes with tag <b>$wt[t_name]</b>:";
    if ($wt[t_wiki] == '') $wt[t_wiki] = $wt[t_name];
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$wt[t_wiki]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$wt[t_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($wt[t_brainyquote] != "") echo " <a target=_blank href='https://www.brainyquote.com/quotes/topics/$wt[t_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    echo "<p>";
    if ($wt[t_desc] != "") echo str_replace("\r\n", "<p>", $wt[t_desc])."<p>";
    $r = mysql_query("SELECT * FROM eq_qtags 
      LEFT JOIN eq_quotes USING (q_id) 
      LEFT JOIN eq_authors USING (a_id) 
      WHERE t_name='$tag' ORDER BY q_rating, a_rating
      LIMIT 1000");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Author";
    echo "<th>Quote";
    echo "<th>Rank";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<a href=authors.php?a_id=$w[a_id]>";
      echo "$w[a_name]</a>";
      echo "<td width=500><a href=works.php?q_id=$w[q_id]>$w[q_txt]</a>";
      if ($w[q_img] != 0) echo " <img src=i/painting.png height=18 valign=top> ";
      echo "<td>$w[q_rating]";
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
  $r = mysql_query("SELECT * FROM eq_quotes 
    LEFT JOIN eq_authors USING (a_id) 
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
    echo "<td><a href=works.php?q_id=$w[q_id]>$w[w_name]";
    echo "<td>";
    if ($w[w_lang] != 'eng') echo "<font color=red>$w[w_lang]";
    else if ($w[w_en1]>2) echo "$w[w_lang]...";
    else if ($w[w_en2]<$w[w_lines]) echo "$w[w_lang]...";
    else echo "$w[w_lang]";
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  echo "Showing only 2000 first quotes";
  stop_time();
  
?>
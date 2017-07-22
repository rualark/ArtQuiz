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
    mysql_query("UPDATE rq_quotes SET w_rating=w_rating+'$dr' WHERE q_id='$q_id'");
    die ("<script language=\"javascript\">location.replace(\"works.php?tag=$tag&q_id=$q_id&p=$p&order=$order\");</script>"); 
  }
  
  if ($q_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM rq_quotes LEFT JOIN rq_authors USING (a_id) WHERE q_id='$q_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    echo "<title>$w[a_name] - цитата";
    echo "</title>";
    echo "<a href=authors.php?a_id=$w[a_id]>$w[a_name]</a> [$w[a_year1]-$w[a_year2]] <a href='authors.php?country=$w[a_country]'>$w[a_country]</a> ";
    echo " <a href=\"authors.php?type=$w[a_type]\">$w[a_type]</a>";
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$w[q_txt]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$w[q_txt]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($w[q_citaty] != "") echo " <a target=_blank href='http://citaty.info$w[q_citaty]'><img valign=middle height=$button_height src=i/citaty.png></a> ";
    if ($w[q_brainyquote] != "") echo "<a target=_blank href='https://www.brainyquote.com/quotes/quotes/$w[q_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[q_txt]'><img valign=middle height=$button_height src=i/youtube.png></a> ";
    if ($w[ep_id] > 0) echo " <a href='$url_main/epquiz/authors.php?a_id=$w[ep_id]'><img height=$button_height valign=middle border=0 src=i/pquiz4.png></a> ";
    if ($w[aq_id] > 0) echo " <a href='$url_main/aquiz/artist.php?a_id=$w[aq_id]'><img height=$button_height valign=middle border=0 src=i/aquiz.png></a> ";
    if ($w[cc_id] > 0) echo " <a href='$url_main/cquiz/am.php?c_id=$w[cc_id]'><img height=$button_height valign=middle border=0 src=i/cquiz_560.png></a> ";
    echo "<br>";
    //if (($w[w_lang] != "eng") && ($w[w_lang] != "")) echo "Language: <b>$w[w_lang]</b><br>";
    echo "Ранг цитаты: $w[q_rating]<br>";
    echo "<br><br>";
    if ($w[q_img] != 0) echo "<img src=qpic/$w[a_id]/$w[q_id].jpg>";
    else {
      echo "<hr><table><td width=500><font size=+2><pre>$w[q_txt]</pre></font></table>";
    }
    // Show tags
    $r2 = mysql_query("SELECT * FROM rq_qtags WHERE q_id='$w[q_id]' AND LEFT(t_name, 1)!='!' ");
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
    if ($w[q_brainyquote] != "") echo "<a target=_blank href='https://www.brainyquote.com/quotes/quotes/$w[q_brainyquote]'>Источник</a><br>";
    stop_time();
    exit;
  }
  
  if (!isset($order)) $order="q_rating";
  
  if ($tag != '') {
    //load tag
    $r = mysql_query("SELECT * FROM rq_tags WHERE t_name='$tag'");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Авторы с меткой <b>$tag</b>:";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$tag'><img valign=top height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$tag'><img valign=top height=$button_height src=i/google.png></a> ";
    if ($wt[et_name] != '') echo " <a href='$url_main/equotes/works.php?tag=$wt[et_name]'>ENG</a> ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<form action=../work/rfmap/edit-rfmap.php>";
      echo "<input type=hidden name=act value=edit-tag>";
      echo "<input type=hidden name=tag value='$tag'>";
      echo "Map pos: <input name=map_pos> ";
      echo "<input type=checkbox name=ladder> Лестница ";
      echo "<input type=submit>";
      echo "</form>";
    }
    echo "<p>";
    if ($wt[t_desc] != "") echo "$wt[t_desc]<p>";
    $r = mysql_query("SELECT * FROM rq_authors LEFT JOIN rq_atags USING (a_id) WHERE a_quotes>0 AND t_name='$tag' ORDER BY t_type desc, a_year1");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Имя";
    echo "<th>Годы";
    echo "<th>Страна";
    echo "<th>Метки";
    echo "<th>Цитат";
    echo "<th>Рейтинг";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<a href=authors.php?a_id=$w[a_id]>";
      //if ($w[t_type] == 2) echo "<font color=green>";
      //if ($w[t_type] == 0) echo "<font color=#bbbbbb>";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w[map_pos] != 0) echo "<font color=red>";
      }
      echo "$w[a_name]";
      //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2]!=0) echo "$w[a_year2]";
      echo "<td>$w[a_country]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w[a_id]' AND t_type>0 ORDER BY t_type DESC");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a href='works.php?tag=$w2[t_name]'>";
        if ($w2[t_type] == 2) echo "<font color=green>";
        if ($w2[t_type] == 1) echo "";
        echo "$w2[t_name]</font></a>";
      }
      if ($w[a_type] != '') {
        if ($n2>0) echo " / $w[a_type]";
      }
      echo "<td>$w[a_quotes]";
      echo "<td>$w[a_rating]";
    }
    echo "</table><br>";
    // show quotes
    echo "Цитаты с меткой <b>$tag</b>:";
    if ($wt[t_wiki] == '') $wt[t_wiki] = $tag;
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$wt[t_wiki]'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$tag'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($wt[t_brainyquote] != "") echo " <a target=_blank href='https://www.brainyquote.com/quotes/topics/$wt[t_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    echo "<p>";
    if ($wt[t_desc] != "") echo str_replace("\r\n", "<p>", $wt[t_desc])."<p>";
    $r = mysql_query("SELECT * FROM rq_qtags 
      LEFT JOIN rq_quotes USING (q_id) 
      LEFT JOIN rq_authors USING (a_id) 
      WHERE t_name='$tag' ORDER BY q_rating, a_rating
      LIMIT 1000");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Автор";
    echo "<th>Цитата";
    echo "<th>Ранг";
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
  $r = mysql_query("SELECT * FROM rq_quotes 
    LEFT JOIN rq_authors USING (a_id) 
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
  echo "Показаны только первые 2000 цитат";
  stop_time();
  
?>
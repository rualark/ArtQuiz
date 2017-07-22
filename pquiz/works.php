<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  secure_variable("tag");
  secure_variable("t_id");
  secure_variable("w_id");
  secure_variable("p");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("mr");
  secure_variable("line");
  
  start_time();
  if ($dr>0) {
    mysql_query("UPDATE l_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"works.php?t_id=$t_id&w_id=$w_id&p=$p&order=$order\");</script>"); 
  }
  
  if ($w_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM l_works LEFT JOIN l_authors USING (a_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    echo "<a href=authors.php?a_id=$w[a_id]>$w[a_name]</a> - $w[w_name] ";
    if ($w[w_years] != "") echo "[$w[w_years]]";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$w[w_name]'><img valign=top height=18 src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$w[a_name] $w[w_name] анализ'><img valign=top height=18 src=i/google.png></a> ";
    echo " <a target=_blank href='http://www.100bestpoems.ru/item_info.php?id=$w[w_id]'><img valign=top height=16 src=i/100best.jpg></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[a_name] $w[w_name]'><img valign=top height=16 src=i/youtube.png></a> ";
    echo "<br>";
    if (($w[w_lang] != "Русский") && ($w[w_lang] != "")) echo "Язык оригинала: <b>$w[w_lang]</b><br>";
    if ($w[w_rating] > 999) echo "Известность произведения: <b>Высокая</b><br>";
    elseif ($w[w_rating] > 0) echo "Известность произведения: <b>Средняя</b><br>";
    else echo "Известность произведения: <b>Низкая</b><br>";
    $r2 = mysql_query("SELECT * FROM l_tags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>0) echo "Метки: ";
    echo mysql_error();
    for ($i=0; $i<$n2; $i++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($i>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
    }
    echo "<br><br><pre><font size=+1>";
    echo "<hr>";
    if ($max_year>0) if (($w[a_year2] == 0) || ($w[a_year2] > $max_year)) {
      die ("<font color=green>Тексты произведений данного автора недоступны для просмотра на данном сайте.<br><br>Авторское право распространяется на время жизни автора и спустя 70 лет после смерти автора. Подробно о вопросах авторского права, можно посмотреть и прочитать в выписках из Федерального закона РФ «Об авторском праве и смежных правах». </font>");
    }
    // show
    $sa = explode("\r", $w[w_text]);
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
    for ($i=0; $i<$m; $i++) {
      if ((isset($line)) && ($i+$p*$max_lines2 == $line)) echo "<b><font color=green>";
      if ((isset($line)) && ($i+$p*$max_lines2 == $line+$max_lines)) echo "</b></font>";
      echo $sa[$i+$p*$max_lines2];
    }
    echo "<hr>";
    if ($w[w_url1] != "") echo "<a href='$w[w_url1]'>Источник</a><br>";
    stop_time();
    exit;
  }
  
  if (!isset($order)) $order="w_rating desc";
  
  if ($tag != '') {
    //load tag
    $r = mysql_query("SELECT t_id FROM l_atags WHERE t_name='$tag' LIMIT 1");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    $t_id = $wt[t_id];
  }

  if ($t_id>0) {
    //load tag
    $r = mysql_query("SELECT * FROM l_atags LEFT JOIN l_tdesc USING (t_name) WHERE t_id='$t_id' LIMIT 1");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Поэты с меткой <b>$wt[t_name]</b>:";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$wt[t_name]'><img valign=top height=18 src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$wt[t_name]'><img valign=top height=18 src=i/google.png></a> ";
    if ($wt[et_name] != '') echo " <a href='$url_main/epquiz/works.php?tag=$wt[et_name]'>ENG</a> ";
    echo "<p>";
    if ($wt[t_desc] != "") echo "$wt[t_desc]<p>";
    $r = mysql_query("SELECT * FROM l_authors LEFT JOIN l_atags USING (a_id) WHERE a_works>0 AND t_id='$t_id' ORDER BY a_rating desc");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th><a href=authors.php?order=a_name>Имя";
    echo "<th><a href=authors.php?order=a_year1>Годы";
    echo "<th><a href=authors.php?order=a_country>Страна";
    echo "<th>Метки";
    echo "<th><a href='authors.php?order=a_works desc'>Работ";
    echo "<th><a href='authors.php?order=a_rating desc'>Рейтинг";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<a href=authors.php?a_id=$w[a_id]>";
      if ($w[a_desc] != "") echo "<font color=green>";
      echo "$w[a_name]";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w[ep_id]>0) echo " <a href=$url_main/epquiz/authors.php?a_id=$w[ep_id]><font color=red>E</font></a>";
      }
      //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2]>0) echo "$w[a_year2]";
      echo "<td>$w[a_country]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM l_atags WHERE a_id='$w[a_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
      }
      echo "<td>$w[a_works]";
      echo "<td>$w[a_rating]";
    }
    echo "</table><br>";
    // show works
    $cond .= "AND t_id=$t_id";
    $more = "LEFT JOIN l_tags ON (l_tags.w_id=l_works.w_id)";
    echo "Произведения с меткой <b>$wt[t_name]</b>:<p>";
  }
  if (isset($mr)) {
    $cond = " AND w_rating>='$mr' ";
  }
  $r = mysql_query("SELECT w_name, l_works.w_id, w_years, w_rating, a_id, a_name FROM l_works 
    LEFT JOIN l_authors USING (a_id) 
    $more
    WHERE 1=1 $cond ORDER BY $order LIMIT 2000");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Автор";
  echo "<th>Произведение";
  echo "<th><a href='works.php?order=w_years'>Год";
  echo "<th>Метки";
  echo "<th><a href='works.php?order=w_rating desc'>Рейтинг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td><a href=authors.php?a_id=$w[a_id]>$w[a_name]";
    echo "<td><a href=works.php?w_id=$w[w_id]>$w[w_name]";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=10&w_id=$w[w_id]'><font color=#aaddaa>+10</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=50&w_id=$w[w_id]'><font color=#aaddaa>+50</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=100&w_id=$w[w_id]'><font color=#aaddaa>+100</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=500&w_id=$w[w_id]'><font color=#aaddaa>+500</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=1000&w_id=$w[w_id]'><font color=#aaddaa>+1k</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=-10&w_id=$w[w_id]'><font color=#ddaaaa>-10</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=-50&w_id=$w[w_id]'><font color=#ddaaaa>-50</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=-100&w_id=$w[w_id]'><font color=#ddaaaa>-100</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=-500&w_id=$w[w_id]'><font color=#ddaaaa>-500</font></a> ";
      echo " <a href='works.php?t_id=$t_id&p=$p&order=$order&dr=-1000&w_id=$w[w_id]'><font color=#ddaaaa>-1k</font></a> ";
    }
    echo "<td>$w[w_years]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM l_tags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
    }
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  echo "Показано только 2000 первых стихов";
  stop_time();
  
?>
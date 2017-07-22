<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  secure_variable("act");
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
    mysql_query("UPDATE rl_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"works.php?t_id=$t_id&w_id=$w_id&p=$p&order=$order\");</script>"); 
  }
  
  if ($w_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top>";
    echo "<a href=authors.php?a_id=$w[a_id]>$w[a_name]</a> - $w[w_name] ";
    if ($w[w_years] != "") echo "[$w[w_years]]";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$w[w_name]'><img valign=top height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$w[a_name] $w[w_name] анализ'><img valign=top height=$button_height src=i/google.png></a> ";
    if ($w[bb_wid]>0) echo " <a target=_blank href='http://www.100bestbooks.ru/item_info.php?id=$w[bb_wid]'><img valign=top height=$button_height src=i/100bestbooks.png></a> ";
    if ($w[br_id]!='') echo " <a target=_blank href='https://briefly.ru/$w[br_id]'><img valign=top height=$button_height src=i/briefly.png></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[a_name] $w[w_name]'><img valign=top height=$button_height src=i/youtube.png></a> ";
    if ($w[t_len]>0) echo " <a target=_blank href='works/$w[a_id]/$w[w_id].txt'><img valign=top height=$button_height src=i/txt.png></a> ";
    if ($w[t_len2]>0) echo " <a target=_blank href='traum/$w[a_id]/$w[w_id].$w[tr_wtype]'><img valign=top height=$button_height src=i/$w[tr_wtype].png></a> ";
    echo "<br>";
    if (($w[a_country] != "RUS") && ($w[a_country] != "")) echo "Язык оригинала: <b>$w[a_country]</b><br>";
    if ($w[w_rating] > 999) echo "Известность произведения: <b>Высокая</b><br>";
    elseif ($w[w_rating] > 0) echo "Известность произведения: <b>Средняя</b><br>";
    else echo "Известность произведения: <b>Низкая</b><br>";
    $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>0) echo "Метки: ";
    echo mysql_error();
    for ($i=0; $i<$n2; $i++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($i>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
    }
    echo "<br>";
    $r2 = mysql_query("SELECT * FROM rl_wanno WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($i=0; $i<$n2; $i++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<hr><i><b>Аннотация.</b> $w2[w_anno]</i><br>";
    }
    echo "<br>";
    if ($act != 'brief') {
      echo "<b>Полный текст</b>. ";
      if ($w[b_len]>0) echo "<a href=works.php?w_id=$w_id&act=brief>Открыть краткое содержание</a>.<br>";
    }
    if ($act == 'brief') {
      echo "<b>Краткое содержание</b>. ";
      if ($w[t_len]+$w[t_len2]>0) echo "<a href=works.php?w_id=$w_id>Открыть полный текст</a>.<br>";
    }
    if (file_exists("wpic/$w[w_id].jpg")) echo "<td align=right valign=top><img height=200 src=wpic/$w[w_id].jpg></table>";
    echo "<hr>";
    if ($max_year>0) if (($w[a_year2] == 0) || ($w[a_year2] > $max_year)) {
      die ("<font color=green>Тексты произведений данного автора недоступны для просмотра на данном сайте.<br><br>Авторское право распространяется на время жизни автора и спустя 70 лет после смерти автора. Подробно о вопросах авторского права, можно посмотреть и прочитать в выписках из Федерального закона РФ «Об авторском праве и смежных правах». </font>");
    }
    // show
    if ($act == 'brief') {
      $st = file_get_contents("brief/$w[a_id]/$w[w_id].txt");
      echo "<table cellpadding=5><td bgcolor=#ffeeff><pre>$st</pre></table>";
    } elseif ($w[t_len]>0) { // file_exists("works/$w[a_id]/$w[w_id].txt")
      //$sa = file("works/$w[a_id]/$w[w_id].txt");
      $st = trim(strip_tags(file_get_contents("works/$w[a_id]/$w[w_id].txt")));
      $sa = explode("\n", $st);
      $c = count($sa); 
      echo "<table cellpadding=5><td bgcolor=#ffffee><pre>";
      if ($c > $max_lines2) {
        if ($line>0) $p = floor($line/$max_lines2);
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
      echo "</pre></table>";
    } elseif (file_exists("traum/$w[a_id]/$w[w_id].$w[tr_wtype]")) {
      $st = trim(file_get_contents("traum/$w[a_id]/$w[w_id].$w[tr_wtype]"));
      if (($w[t_enc2] != 'utf-8') && ($w[t_enc2] != '')) $st = iconv($w[t_enc2], "utf-8", $st);
      $st = substr($st, strpos($st, '<body>'));
      $pos1 = strpos($st, '</body>');
      if ($pos1 != false) $st = substr($st, 0, $pos1);
      $st = str_replace("<p>", "\n", $st);
      $st = str_replace("<v>", "\n", $st);
      $st = preg_replace('`<p (.*?)>`', "\n", $st);
      $st = str_replace("\n\n", "\n", $st);
      $st = strip_tags($st);
      $sa = explode("\n", $st);
      $c = count($sa);
      echo "<table cellpadding=5><td bgcolor=#eeffff><pre>";
      if ($c > $max_lines2) {
        if ($line>0) $p = floor($line/$max_lines2);
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
        echo $sa[$i+$p*$max_lines2]."\n";
      }
      //echo strip_tags($st);
      echo "</pre></table>";
    } else {
      echo "Текст данного произведения отсутствует в базе. Воспользуйте ссылкой выше для поиска в Google.";
      if ($w[b_len]>0) echo "<br>В базе есть <a href=works.php?w_id=$w_id&act=brief>краткое содержание</a> данного произведения.";
    }
    echo "<hr>";
    if ($w[w_url1] != "") echo "<a href='$w[w_url1]'>Источник</a><br>";
    stop_time();
    exit;
  }
  
  if (!isset($order)) $order="w_rating desc";

  if ($tag!='') {
    //load tag
    $r = mysql_query("SELECT * FROM rl_atags WHERE t_name='$tag' LIMIT 1");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Писатели с меткой <b>$wt[t_name]</b>:";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$wt[t_name]'><img valign=top height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$wt[t_name]'><img valign=top height=$button_height src=i/google.png></a> ";
    if ($wt[et_name] != '') echo " <a href='$url_main/epquiz/works.php?tag=$wt[et_name]'>ENG</a> ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<form action=../work/rlmap/edit-rlmap.php>";
      echo "<input type=hidden name=act value=edit-tag>";
      echo "<input type=hidden name=tag value='$tag'>";
      echo "Map pos: <input name=map_pos> ";
      echo "<input type=checkbox name=ladder> Лестница ";
      echo "<input type=submit>";
      echo "</form>";
    }
    echo "<p>";
    if ($wt[t_desc] != "") echo "$wt[t_desc]<p>";
    $r = mysql_query("SELECT * FROM rl_authors LEFT JOIN rl_atags USING (a_id) WHERE a_works>0 AND t_name='$tag' ORDER BY t_type desc, a_rating desc");
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
      //if ($w[t_type] == 2) echo "<font color=green>";
      //if ($w[t_type] == 0) echo "<font color=#bbbbbb>";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w[map_pos] != 0) echo "<font color=red>";
      }
      echo "$w[a_name]";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w[ea_id]>0) echo " <a href=$url_main/epquiz/authors.php?a_id=$w[ea_id]><font color=red>E</font></a>";
      }
      //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2]>0) echo "$w[a_year2]";
      echo "<td>$w[a_country]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM rl_atags WHERE a_id='$w[a_id]' AND t_type>0 ORDER BY t_type DESC");
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
      if (($w[a_prof] != 'Писатель') && ($w[a_prof] != '')) {
        if ($n2>0) echo " / ";
        echo "$w[a_prof]";
      }
      echo "<td>$w[a_works]";
      echo "<td>$w[a_rating]";
    }
    echo "</table><br>";
    // show works
    $cond .= "AND t_name='$tag'";
    $more = "LEFT JOIN rl_wtags ON (rl_wtags.w_id=rl_works.w_id)";
    echo "Произведения с меткой <b>$wt[t_name]</b>:<p>";
  }
  if (isset($mr)) {
    $cond = " AND w_rating>='$mr' ";
  }
  $r = mysql_query("SELECT rl_works.w_name, rl_works.w_id, w_years, w_rating, a_id, a_name FROM rl_works 
    LEFT JOIN rl_authors USING (a_id) 
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
    echo "<td>$w[w_years]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>";
      echo "$w2[t_name]</font></a>";
    }
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  echo "Показано только 2000 первых книг";
  stop_time();
  
?>
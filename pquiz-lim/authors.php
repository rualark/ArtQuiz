<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  secure_variable("a_id");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("w_id");
  secure_variable("act");
  secure_variable("atag");
  secure_variable("t_id");
  
  if ($dr != 0) {
    mysql_query("UPDATE l_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id&order=$order\");</script>"); 
  }
  
  if ($act == "tag") {
    if ($t_id == '') {
      $r4 = mysql_query("SELECT * FROM l_atags WHERE t_name = '$atag' LIMIT 1");
      $w4 = mysql_fetch_assoc($r4);
      $t_id = $w4[t_id];
      echo "Found id for tag: $t_id<br>";
      if ($t_id == 0) {
        $r5 = mysql_query("SELECT MAX(t_id) as mx FROM l_atags");
        $w5 = mysql_fetch_assoc($r5);
        $t_id = $w5[mx]+1;
        echo "Created new tag id: $t_id<br>";
      }
    } else {
      $r4 = mysql_query("SELECT * FROM l_atags WHERE t_id = '$t_id' LIMIT 1");
      $w4 = mysql_fetch_assoc($r4);
      $t_name = $w4[t_name];
      echo "Found name for tag: $t_name<br>";
      if (($t_name != '') && ($t_name != $atag)) {
        die("This tag has different name<br>");
      }
      $r4 = mysql_query("SELECT * FROM l_atags WHERE t_name = '$atag' LIMIT 1");
      $w4 = mysql_fetch_assoc($r4);
      $t_id2 = $w4[t_id];
      echo "Found id for tag: $t_id2<br>";
      if (($t_id2 != 0) && ($t_id2 != $t_id)) {
        die("This tag name has different id<br>");
      }
    }
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        echo "Adding tag $atag $t_id to $i<br>";
        mysql_query("INSERT INTO l_atags VALUES('$i', '$t_id', '$atag')");
        echo mysql_error();
      }
    }
    exit;
  }
  
  start_time();
  if ($a_id>0) {
    //load author
    $r = mysql_query("SELECT * FROM l_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top><b>$wa[a_name]</b> [$wa[a_year1]-$wa[a_year2]] <a href=authors.php?order=a_country>$wa[a_country]</a> ";
    $wikilink = "http://ru.wikipedia.org/w/index.php?search=$wa[a_name]";
    if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
    echo " <a target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$wa[a_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    echo " <a target=_blank href='http://www.100bestpoems.ru/name_info.php?id=$wa[a_id]'><img valign=middle height=$button_height src=i/100best.jpg></a> ";
    if ($wa[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$wa[a_er3ed]'><img valign=middle height=$button_height src=i/er3ed.jpg></a> ";
    show_integration($wa);
    if ($wa[map_pos] != 0) echo " <a href='$url_main/rpmap/index.php#a$wa[a_id]'><img height=$button_height valign=middle border=0 src=i/time.png></a> ";
    echo "<br><br>$wa[a_desc]";
    if ($wa[a_cite] != "") echo "<br><pre>$wa[a_cite]</pre>";
    $r2 = mysql_query("SELECT * FROM l_atags WHERE a_id='".$wa[a_id]."'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      else echo "<p>";
      echo " <a href=works.php?t_id=$w2[t_id]>$w2[t_name]</a>";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) 
      echo " <a title='Add new tag' onclick='r=prompt(\"Tag:\", \"\"); window.open(\"$url_main/pquiz/authors.php?act=tag&a$wa[a_id]=1&atag=\"+r); return false' href=# target=_blank><font color=black><img src=i/plus.png height=15></font></a> ";
    if (file_exists("apic/".$wa[a_id].".jpg")) echo "<td align=right valign=top><img height=200 src=apic/$wa[a_id].jpg></table>";
    echo "<br><br>";
    // show
    $order = "w_rating desc,w_name";
    $r = mysql_query("SELECT * FROM l_works WHERE a_id='$a_id' ORDER BY $order");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Произведение";
    echo "<th>Год";
    echo "<th>Метки";
    echo "<th>Рейтинг";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td><a href=works.php?w_id=$w[w_id]>$w[w_name]</a> ";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=10&w_id=$w[w_id]'><font color=#aaddaa>+10</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=50&w_id=$w[w_id]'><font color=#aaddaa>+50</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=100&w_id=$w[w_id]'><font color=#aaddaa>+100</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=500&w_id=$w[w_id]'><font color=#aaddaa>+500</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=1000&w_id=$w[w_id]'><font color=#aaddaa>+1k</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=-10&w_id=$w[w_id]'><font color=#ddaaaa>-10</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=-50&w_id=$w[w_id]'><font color=#ddaaaa>-50</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=-100&w_id=$w[w_id]'><font color=#ddaaaa>-100</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=-500&w_id=$w[w_id]'><font color=#ddaaaa>-500</font></a> ";
        echo " <a href='authors.php?a_id=$a_id&order=$order&dr=-1000&w_id=$w[w_id]'><font color=#ddaaaa>-1k</font></a> ";
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
    stop_time();
    exit;
  }
  
  $q = "SELECT COUNT(*) as cnt FROM l_authors WHERE a_works>0 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  $q = "SELECT COUNT(*) as cnt FROM l_works LEFT JOIN l_authors USING (a_id) WHERE 1=1 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r);
  echo "<p align=right>Всего $w[cnt] поэтов, $w2[cnt] стихотворений.<br>";
  
  if (!isset($order)) $order="a_rating desc, a_year1";
  
  $q = "SELECT * FROM l_authors WHERE a_works>0 ORDER BY $order";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<form action=authors.php method=get>";
  echo "<input type=hidden name=act value=tag>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href=authors.php?order=a_name>Имя";
  echo "<th><a href=authors.php?order=a_year1>Годы";
  echo "<th><a href='authors.php?order=a_country, a_year1'>Страна";
  echo "<th>Метки";
  echo "<th><a href='authors.php?order=a_works desc'>Работ";
  echo "<th><a href='authors.php?order=a_rating desc, a_year1'>Рейтинг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<input type=checkbox name=a$w[a_id]> ";
    }
    echo "<a href=authors.php?a_id=$w[a_id]>";
    if ($w[a_desc] != "") echo "<font color=green>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //if ($w[a_year1] == 0) echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
    }
    echo "$w[a_name]</font></a>";
    //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    if ($max_year>0) if (($w[a_year2] == 0) || ($w[a_year2] > $max_year)) echo " <img title='Тексты данного автора недоступны по лицензионным ограничениям' src=i/fire.png height=16>";
    echo "<td>$w[a_year1]-";
    if ($w[a_year2] != 0) echo $w[a_year2];
    echo "<td>$w[a_country]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM l_atags LEFT JOIN l_tdesc USING (t_name) WHERE a_id='$w[a_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='works.php?t_id=$w2[t_id]'>";
      if ($w2[t_desc] != "") echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
    }
    echo "<td>$w[a_works]";
    echo "<td>$w[a_rating]";
  }
  echo "</table>";
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    echo "<br>Добавить метку к выбранным: <input type=text name=atag> ";
    // , id: <input type=text name=t_id>
    echo "<input type=submit>";
  }
  echo "</form>";
  stop_time();
  echo "<br>Зеленым цветом выделены поэты и группы, имеющие описание";
?>
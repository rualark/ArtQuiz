<?
  include "lib.php";
  include "../auth.php";
  include "style.php";
  include "menu.php";

  secure_variable("a_id");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("w_id");
  secure_variable("w_id2");
  secure_variable("act");
  secure_variable("atag");
  secure_variable("t_type");
  
  if ($dr != 0) {
    mysql_query("UPDATE rl_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id&order=$order\");</script>"); 
  }
  
  if ($act == "movebr") {
    echo "Moving $w_id to $w_id2 ...<br>";
    $r = mysql_query("SELECT * FROM rl_works WHERE w_id='$w_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $r = mysql_query("SELECT * FROM rl_works WHERE w_id='$w_id2'");
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r);
    // Copy
    mysql_query("UPDATE rl_works SET br_id='$w[br_id]', b_len='$w[b_len]', b_aid='$w[b_aid]', b_aname='$w[b_aname]', b_up='$w[b_up]', b_down='$w[b_down]', w_rating='$dr' WHERE w_id='$w_id2'");
    echo mysql_error();
    mkdir("brief/$w2[a_id]");
    rename("brief/$w[a_id]/$w[w_id].txt", "brief/$w2[a_id]/$w2[w_id].txt");
    exit;
  }
  
  if ($act == "tag") {
    if ($t_type != "null") {
      $count=0;
      for ($i=0; $i<50000; $i++) {
        $a = "a$i";
        if (isset($_GET[$a])) {
          $a_id=$i;
          $count++;
          echo "Adding tag $atag to $i ($t_type)<br>";
          mysql_query("INSERT INTO rl_atags VALUES('$i', '$atag', '0', '$t_type', NOW())");
          echo mysql_error();
        }
      }
    }
    //if ($count < 2) die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id\");</script>"); 
    exit;
  }
  
  if ($act == "addtag") {
    if (($t_type != "null") && ($atag != "null")) {
      echo "Adding tag $atag to $a_id ($t_type)<br>";
      mysql_query("REPLACE INTO rl_atags VALUES('$a_id', '$atag', '0', '$t_type', NOW())");
      echo mysql_error();
    }
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id\");</script>"); 
    exit;
  }
  
  if ($act == "edittag") {
    if ($t_type != "null") {
      if ($t_type == -1) {
        echo "Deleting tag $atag at $a_id<br>";
        mysql_query("DELETE FROM rl_atags WHERE a_id='$a_id' AND t_name='$atag'");
        echo mysql_error();
      } else {
        echo "Changing tag $atag at $a_id to ($t_type)<br>";
        mysql_query("UPDATE rl_atags SET t_type='$t_type', t_time=NOW() WHERE a_id='$a_id' AND t_name='$atag'");
        echo mysql_error();
      }
    }
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id\");</script>"); 
  }
  
  start_time();
  if ($a_id>0) {
    //load author
    $r = mysql_query("SELECT * FROM rl_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top><b>$wa[a_name]</b> [$wa[a_year1]-$wa[a_year2]] <a href=authors.php?order=a_country>$wa[a_country]</a> ";
    $wikilink = "http://ru.wikipedia.org/w/index.php?search=$wa[a_name]";
    if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
    //echo "<script>function set_sel () { location = "aquiz.php"; }</script>";
    echo " <a onclick='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true' target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$wa[a_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($wa[bb_id]>0) echo " <a target=_blank href='http://www.100bestbooks.ru/name_info.php?id=$wa[bb_id]'><img valign=middle height=$button_height src=i/100bestbooks.png></a> ";
    if ($wa[a_briefly]!='') echo " <a target=_blank href='https://briefly.ru/$wa[a_briefly]'><img valign=top height=$button_height src=i/briefly.png></a> ";
    if ($wa[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$wa[a_er3ed]'><img valign=middle height=$button_height src=i/er3ed.jpg></a> ";
    show_integration($wa);
    if ($wa[map_pos] != 0) echo " <a target=_blank href='$url_main/rlmap/index.php#a$wa[a_id]'><img valign=middle height=$button_height src=i/time.png></a> ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) {
      $sa = explode(' ', $wa[a_name]);
      echo " <a title='Add works from traum' target=_blank href='../work/rlit/showtraum.php?act=showauthor&tr_id=$wa[tr_id]&a_name=".$sa[count($sa)-1]."'><img valign=middle style='-webkit-filter: hue-rotate(180deg); filter: hue-rotate(180deg);' height=25 src=i/plus.png></a> ";
    }
    echo "<br><br><div class=readmore><pre>".strip_tags($wa[a_desc])."</pre></div>";
    echo "<script src='js/jquery-1.9.1.min.js'></script>";
    echo "<script type='text/javascript' src='js/readmore2.js'></script>";
    if ($wa[a_cite] != "") echo "<br><pre>$wa[a_cite]</pre>";
    if (($wa[a_prof] != 'Писатель') && ($wa[a_prof] != '')) echo "$wa[a_prof] ";
    if ($wa[a_rating] != 0) echo "<br>Рейтинг: $wa[a_rating]";
    echo "<p>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) {
      echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
      echo "<form action=authors.php>";
      echo "<input type=hidden name=act value=addtag>";
      echo "<input type=hidden name=a_id value=$wa[a_id]>";
      echo "Добавить метку: <input id=sel1 name=atag list=bcomlist size=40> ";
      echo "типа <input name=t_type size=5 value=1> ";
      echo " <a target=_blank href='../work/rlmap/build-rlmap.php?a_id=$wa[a_id]'><img height=16 src=i/time.png></a> ";
      echo "<input type=submit><br> ";
      echo "<datalist id=bcomlist>";
      $q = "SELECT t_name FROM rl_atags GROUP BY t_name";
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        echo "<option value='$w2[t_name]'></option>";
      }
      echo "</datalist>";
      echo "</form>";
      echo "<script>document.getElementById(\"sel1\").focus();</script>";
      //echo " <a title='Add new tag' onclick='r=prompt(\"Tag:\", \"\"); t=prompt(\"Type:\", \"\"); location.replace(\"authors.php?act=addtag&a_id=$wa[a_id]&atag=\"+r+\"&t_type=\"+t); return false' href=# target=_blank><font color=black><img src=i/plus.png height=25></font></a> ";
    }
    $r2 = mysql_query("SELECT * FROM rl_atags WHERE a_id='".$wa[a_id]."' ORDER BY t_type DESC, t_name");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      //else echo "<p>";
      echo " <a href='works.php?tag=$w2[t_name]'>";
      if ($w2[t_type] == 2) echo "<font color=green>";
      if ($w2[t_type] == 1) echo "";
      if ($w2[t_type] == 0) echo "<font size=1 color=#bbbbbb>";
      echo "$w2[t_name]</font></a>";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) {
        echo " <a title='Edit tag status' onclick='t=prompt(\"Status (-1 delete, 0 normal, 1 main, 2 super):\", \"1\"); location.replace(\"authors.php?act=edittag&a_id=$wa[a_id]&atag=$w2[t_name]&t_type=\"+t); return false' href=#><img src=i/edit.png height=16 style='opacity: 0.2'></a>";
      }
    }
    if (file_exists("apic/".$wa[a_id].".jpg")) echo "<td align=right valign=top><img height=200 src=apic/$wa[a_id].jpg></table>";
    echo "<br><br>";
    // show
    $order = "w_rating desc,w_name";
    $r = mysql_query("SELECT * FROM rl_works WHERE a_id='$a_id' ORDER BY $order");
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
      echo "<td>";
      if ($w[b_len] > 0) {
        echo "<a href=works.php?w_id=$w[w_id]&act=brief><img valign=top height=16 src=i/brief.png></a> ";
        if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
          echo " <a target=_blank title='Move brief to other work id' onclick='r=prompt(\"New work id:\", \"\"); window.open(\"authors.php?act=movebr&w_id=$w[w_id]&w_id2=\"+r); return false' href=#><img style='-webkit-filter: hue-rotate(40deg); filter: hue-rotate(40deg); opacity: 0.2' height=16 src=i/right-red.png></a> ";
        }
      }
      echo "<a href=works.php?w_id=$w[w_id]>";
      if ($w[t_len]+$w[t_len2] == 0) echo "<font color=lightgray>";
      echo "$w[w_name]</a> ";
      echo "<td>$w[w_years]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a href='works.php?tag=$w2[t_name]'>$w2[t_name]</a>";
      }
      echo "<td>$w[w_rating]";
    }
    echo "</table>";
    stop_time();
    exit;
  }
  
  $q = "SELECT COUNT(*) as cnt FROM rl_authors WHERE a_art>0 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  $q = "SELECT COUNT(*) as cnt FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE a_art>0 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r);
  echo "<p align=right>Всего $w[cnt] авторов, $w2[cnt] книг.<br>";
  
  if (!isset($order)) $order="a_rating desc, a_year1";
  
  $q = "SELECT * FROM rl_authors WHERE a_art>0 $year_cond ORDER BY $order";
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
  echo "<th><a href='authors.php?order=a_prof'>Метки";
  echo "<th><a href='authors.php?order=a_works desc'>Работ";
  echo "<th><a href='authors.php?order=a_rating desc, a_year1'>Рейтинг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    if ($i_am_local) {
      echo "<input type=checkbox name=a$w[a_id]> ";
    }
    echo "<a href=authors.php?a_id=$w[a_id]>";
    //if ($w[a_desc] != "") echo "<font color=green>";
    if ($i_am_local) {
      if ($w[map_pos] != 0) echo "<font color=red>";
      //if ($w[a_year1] == 0) echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
    }
    echo "$w[a_name]</font></a>";
    if ($i_am_local) {
      echo " <a target=_blank href='../work/rlmap/build-rlmap.php?a_id=$w[a_id]'><img height=16 src=i/time.png></a>";
    }
   //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    //if ($max_year>0) if (($w[a_year2] == 0) || ($w[a_year2] > $max_year)) echo " <img title='Тексты данного автора недоступны по лицензионным ограничениям' src=i/fire.png height=16>";
    echo "<td>";
    if ($w[a_year1] != 0) {
      echo "$w[a_year1]-";
      if ($w[a_year2] != 0) echo $w[a_year2];
    }
    echo "<td>$w[a_country]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM rl_atags LEFT JOIN l_tdesc USING (t_name) WHERE a_id='$w[a_id]' AND t_type>0 ORDER BY t_type DESC");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    //$scif=0;
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href='works.php?tag=$w2[t_name]'>";
      if ($w2[t_type] == 2) echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
      //if (($w2[t_name] == 'Философия') || ($w2[t_name] == 'sci_philosophy')) $scif=1;
    }
    //if ($w[a_prof] == 'Философ') $scif=1;
    if (($w[a_prof] != 'Писатель') && ($w[a_prof] != '')) {
      if ($n2>0) echo " / ";
      echo "$w[a_prof]";
    }
    echo "<td>$w[a_works]";
    if ($i_am_local) {
      //if (($scif) && ($w[tr_id] == 0)) echo " *";
    }
    echo "<td>$w[a_rating]";
  }
  echo "</table>";
  if ($i_am_local) {
    echo "<br>Добавить метку к выбранным: <input type=text name=atag> ";
    // , id: <input type=text name=t_id>
    echo "<input type=submit>";
  }
  echo "</form>";
  stop_time();
  echo "<br>Зеленым цветом выделены поэты и группы, имеющие описание";
?>
<?
  include "lib.php";
  include "../auth.php";
  include "style.php";
  include "menu.php";

  secure_variable("t_type");
  secure_variable("a_name2");
  secure_variable("a_name");
  secure_variable("a_desc");
  secure_variable("q_name");
  secure_variable("a_id2");
  secure_variable("a_id3"); // Where to run back
  secure_variable("a_id");
  secure_variable("order");
  secure_variable("type");
  secure_variable("group");
  secure_variable("country");
  secure_variable("dr");
  secure_variable("w_id");
  secure_variable("act");
  secure_variable("atag");
  secure_variable("act");
  secure_variable("rank");
  secure_variable("t_type");
  secure_variable("y1");
  secure_variable("y2");
  //secure_variable("phil");
  
  start_time();
  
  if ($act == "addtag") {
    if (($t_type != "null") && ($atag != "null")) {
      echo "Adding tag $atag to $a_id ($t_type)<br>";
      mysql_query("REPLACE INTO rq_atags VALUES('$a_id', '$atag', '0', '$t_type', NOW())");
      echo mysql_error();
    }
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id\");</script>"); 
    exit;
  }
  
  if ($act == "edittag") {
    if ($t_type != "null") {
      if ($t_type == -1) {
        echo "Deleting tag $atag at $a_id<br>";
        mysql_query("DELETE FROM rq_atags WHERE a_id='$a_id' AND t_name='$atag'");
        echo mysql_error();
      } else {
        echo "Changing tag $atag at $a_id to ($t_type)<br>";
        mysql_query("UPDATE rq_atags SET t_type='$t_type', t_time=NOW() WHERE a_id='$a_id' AND t_name='$atag'");
        echo mysql_error();
      }
    }
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id\");</script>"); 
  }
  
  if ($act == 'search') {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
    echo "<b>Искать цитаты по:</b>";
    echo "<form method=get action=authors.php>";
    echo "<input type=hidden name=act value=search>";
    echo "<table cellpadding=4>";
    echo "<tr>";
    echo "<td>Имя автора:";
    echo "<td><input id=sel1 size=80 name=a_name value='$a_name'>";
    echo "<tr>";
    echo "<td>Описание автора:";
    echo "<td><input size=80 name=a_desc value='$a_desc'>";
    echo "<tr>";
    echo "<td>По тексту цитаты:";
    echo "<td><input size=80 name=q_name value='$q_name'>";
    echo "<tr>";
    echo "<td>";
    echo "<td><input type=submit>";
    echo "</table>";
    echo "</form>";
    echo "<hr>";
    if ($a_name != '') {
      if (strpos($a_name, '%') === false) $a_name2 = "%$a_name%";
      else $a_name2 = "$a_name";
      $cond .= "AND a_name LIKE '$a_name2' ";
    }
    if ($a_desc != '') {
      if (strpos($a_desc, '%') === false) $a_desc2 = "%$a_desc%";
      else $a_desc2 = "$a_desc";
      $cond .= "AND a_desc LIKE '$a_desc2' ";
    }
    if ($cond != '') {
      $q = "SELECT * FROM rq_authors WHERE 1=1 $cond ORDER BY a_rating LIMIT 1000";
      //echo $q;
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>Автор";
      echo "<th width=72>Годы";
      echo "<th>Страна";
      echo "<th>Профессия";
      echo "<th>Цитаты";
      echo "<th title='Более известные авторы имеют меньше ранг'>Ранг";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a target=_blank href=authors.php?a_id=$w[a_id]>";
        if ($w[a_desc] != "") echo "<font color=green>";
        echo preg_replace("/($a_name)/iu", "<font color=orange>$1</font>", $w[a_name])."</font></a>";
        echo "<td>";
        if (($w[a_year1] != 0) || ($w[a_year2] != 0)) echo "$w[a_year1]-";
        if ($w[a_year2] != 0) echo $w[a_year2];
        echo "<td>$w[a_country]";
        echo "<td><a target=_blank href=authors.php?type=$w[a_type]>$w[a_type]";
        echo "<td>$w[a_quotes]";
        echo "<td>$w[a_rating]";
      }
      echo "</table>";
    } elseif ($q_name != '') { 
      $r = mysql_query("SELECT * FROM rq_quotes LEFT JOIN rq_authors USING (a_id)
        WHERE MATCH(q_txt) AGAINST(\"$q_name\") LIMIT 100");
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
    }
    // Search rlit
    $cond = '';
    if ($a_name != '') {
      if (strpos($a_name, '%') === false) $a_name2 = "%$a_name%";
      else $a_name2 = "$a_name";
      $cond = "AND a_name LIKE '$a_name2' ";
    }
    if ($cond != '') {
      echo "<p><b>Search rlit:</b>";
      $a_name2 = str_replace('%', '', $a_name);
      $q = "SELECT * FROM rl_authors WHERE 1=1 $cond ORDER BY a_name DESC LIMIT 1000";
      //echo $q;
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>Имя";
      echo "<th>Годы";
      echo "<th>Страна";
      echo "<th>Работ";
      echo "<th>Рейтинг";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a href=$url_main/rlit/authors.php?act=showauthor&tr_id=$w[tr_id]>";
        echo preg_replace("/($a_name2)/iu", "<font color=orange>$1</font>", $w[a_name])."</font></a>";
        echo "<td>$w[a_year1]-$w[a_year2]";
        echo "<td>$w[a_country]";
        echo "<td>$w[a_works]";
        echo "<td>$w[a_rating]";
      }
      echo "</table>";
    }
    if (!$i_am_admin) exit;
    // Search traum
    if ($a_name != '') {
      if (strpos($a_name, '%') === false) $a_name2 = "%$a_name%";
      else $a_name2 = "$a_name";
      $cond = "AND tr_name LIKE '$a_name2' ";
    }
    if ($cond != '') {
      echo "<p><b>Search traum:</b>";
      $a_name2 = str_replace('%', '', $a_name);
      $q = "SELECT * FROM tr_authors LEFT JOIN rl_authors USING (tr_id) WHERE 1=1 $cond ORDER BY tr_nbook DESC LIMIT 1000";
      //echo $q;
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>Name";
      echo "<th>Lang";
      echo "<th>Class";
      echo "<th>Nbooks";
      echo "<th>Series";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a href=$url_main/work/rlit/showtraum.php?act=showauthor&tr_id=$w[tr_id]>";
        if ($w[a_id] != 0) echo "<font color=green>";
        echo preg_replace("/($a_name2)/iu", "<font color=orange>$1</font>", $w[tr_name])."</font></a>";
        if ($w[tr_midname] != '') echo " ($w[tr_midname])";
        echo "<td>$w[tr_lang]";
        echo "<td>$w[tr_class]";
        echo "<td>$w[tr_nbook]";
        echo "<td>$w[s_id]";
      }
      echo "</table>";
    }
    stop_time();
    exit;
  }
  
  if ($act == 'ch-rank') {
    if ($rank == 'null') die("Cancelled");
    mysql_query("UPDATE rq_authors SET a_rating='$rank' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $rank rank to $a_id";
    exit;
  }

  if ($act == 'ch-year') {
    if ($y1 == 'null') die("Cancelled");
    if ($y2 == 'null') die("Cancelled");
    mysql_query("UPDATE rq_authors SET a_year1='$y1', a_year2='$y2' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $y1 - $y2 years to $a_id";
    exit;
  }

  if ($dr != 0) {
    mysql_query("UPDATE rq_quotes SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id&order=$order\");</script>"); 
  }

  if ($act == "dellink") {
    mysql_query("DELETE FROM rq_alink WHERE a_id='$a_id' AND a_id2='$a_id2' AND l_type='$l_type'");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }

  if ($a_name2 != '') {
    if ($l_type == 'null') die("Canceled by user");
    $r = mysql_query("SELECT a_id FROM rq_authors WHERE a_name LIKE '%$a_name2%' ORDER BY a_rating");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    if ($a_name != '') { // Find source poet
      $r = mysql_query("SELECT a_id FROM rq_authors WHERE a_name LIKE '%$a_name%' ORDER BY a_rating");
      echo mysql_error();
      $wa2 = mysql_fetch_assoc($r);
      $a_id = $wa2[a_id];
    }
    if ($wa[a_id] == 0) die("<font color=red>Cannot find poet $a_name2</font>");
    if ($a_id == 0) die("<font color=red>Cannot find poet $a_name</font>");
    mysql_query("REPLACE INTO rq_alink VALUES('$a_id', '$wa[a_id]', '$l_type', NOW())");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = 'authors.php?a_id=$a_id3';</script>"); 
    //die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }
  
  if ($act == "tag") {
    if ($atag == '') die("No tag name specified!");
    if ($atag == 'null') die("No tag name specified!");
    $r4 = mysql_query("SELECT * FROM rq_atags WHERE t_name = '$atag' LIMIT 1");
    $n = mysql_numrows($r4);
    if ($n == 0) echo "<font color=red>This tag is new!</font><br>";
    //$r4 = mysql_query("SELECT * FROM rq_tdesc WHERE t_name = '$atag' LIMIT 1");
    //echo mysql_error();
    //$n = mysql_numrows($r4);
    //if ($n > 0) echo "Found description for tag $atag<br>";
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        echo "Adding tag $atag to $i<br>";
        mysql_query("INSERT INTO rq_atags VALUES('$i', '$atag', 0, '$t_type', NOW())");
        echo mysql_error();
      }
    }
    exit;
  }
  
  start_time();
  //require_once 'Text/LanguageDetect.php';
  //$l = new Text_LanguageDetect();
  //$l->getLanguages();
  //print_r($l);

  if ($a_id>0) {
    //load author
    $r = mysql_query("SELECT * FROM rq_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top><b>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<a title='Set country' onclick='r=prompt(\"New country:\", \"$wa[a_country]\"); window.open(\"$url_main/work/integration/integration.php?act=set-cnt&eid=rq&id=$wa[a_id]&cnt=\"+r); return false' href='javascript:void(0)' target=_blank>";
    }
    echo "$wa[a_name]</a></b> ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<a onclick='r=prompt(\"y1:\", \"\"); p=prompt(\"y2:\", \"\"); window.open(\"authors.php?act=ch-year&a_id=$wa[a_id]&y1=\"+r+\"&y2=\"+p); return false' href=# target=_blank>";
    }
    echo "[$wa[a_year1]-$wa[a_year2]]</a>";
    echo " <a href='authors.php?country=$wa[a_country]'>$wa[a_country]</a> ";
    $wikilink = "http://ru.wikipedia.org/w/index.php?search=$wa[a_name]";
    if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
    echo " <a onclick='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true' target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$wa[a_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    //echo "<a title='Произнести имя' target=_blank href=\"http://forvo.com/search/$wa[a_name]\"><img height=$button_height valign=middle border=0 src=i/speaker.png></a> ";
    if ($wa[a_citaty] != "") echo " <a target=_blank href='http://citaty.info/man/$wa[a_citaty]'><img valign=middle height=$button_height src=i/citaty.png></a> ";
    show_integration($wa);
    echo "<br>Ранг: ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<a <a onclick='r=prompt(\"Rank:\", \"\"); window.open(\"authors.php?act=ch-rank&a_id=$wa[a_id]&rank=\"+r); return false' href=# target=_blank>";
    }
    echo "$wa[a_rating]</a>";
    if (($wa[a_type] != '') && ($wa[a_type2] != '')) echo "<br><a href=\"authors.php?type=$wa[a_type]\">$wa[a_type]</a>, $wa[a_type2]";
    elseif ($wa[a_type2] != '') echo "<br>$wa[a_type2]";
    else echo "<br><a href=\"authors.php?type=$wa[a_type]\">$wa[a_type]</a>";
    //if ($wa[a_vote]>0) echo "<br>Votes <b>".round($wa[a_vote]*100)."%</b>: $wa[a_vup] up, $wa[a_vdown] down";
    //if ($wa[a_state]==0) echo "<br>This author description is in progress...";
    echo "<p>";
    echo "<p>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) {
      echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
      echo "<form action=authors.php>";
      echo "<input type=hidden name=act value=addtag>";
      echo "<input type=hidden name=a_id value=$wa[a_id]>";
      echo "Добавить метку: <input id=sel1 name=atag list=bcomlist size=40> ";
      echo "типа <input name=t_type size=5 value=1> ";
      echo " <a target=_blank href='../work/rfmap/build-rfmap.php?a_id=$wa[a_id]'><img height=16 src=i/time.png></a> ";
      echo "<input type=submit><br> ";
      echo "<datalist id=bcomlist>";
      $q = "SELECT t_name FROM rq_atags WHERE t_type>0 GROUP BY t_name";
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
    $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$wa[a_id]' AND LEFT(t_name, 1)!='!' ORDER BY t_type DESC, t_cnt DESC, t_name LIMIT 30");
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
    
    if ($n2 == 0) show_integration_tags($wa, 1);
    echo "<br><br><div class=readmore><pre>".str_replace("\r\n", "\r\n\r\n", $wa[a_desc])."</pre></div>";
    echo "<script src='js/jquery-1.9.1.min.js'></script>";
    echo "<script type='text/javascript' src='js/readmore2.js'></script>";
    /*
    $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$wa[a_id]' AND LEFT(t_name, 1)!='!' ORDER BY t_cnt DESC, t_name");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      else echo "<p>";
      echo " <a href='works.php?tag=$w2[t_name]'>";
      echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
    }
    */

    echo "<td align=right valign=top><img style='border-radius: 20px' height=200 src=$url_main/rquotes/apic/$wa[a_id].jpg onerror=\"this.style.display='none'\"></table>";
    echo "<br><br>";
    // show works
    $order = "w_rating desc,w_name";
    $r = mysql_query("SELECT * FROM rl_works WHERE a_id='$wa[rl_id]' AND w_fil=1 ORDER BY $order");
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
      echo "<td bgcolor=#ffeeff>";
      if ($w[b_len] > 0) {
        echo "<a target=_blank href='$url_main/rlit/works.php?w_id=$w[w_id]&act=brief'><img valign=top height=16 src=i/brief.png></a> ";
        if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
          //echo " <a target=_blank title='Move brief to other work id' onclick='r=prompt(\"New work id:\", \"\"); window.open(\"authors.php?act=movebr&w_id=$w[w_id]&w_id2=\"+r); return false' href=#><img style='-webkit-filter: hue-rotate(40deg); filter: hue-rotate(40deg); opacity: 0.2' height=16 src=i/right-red.png></a> ";
        }
      }
      echo "<a target=_blank href='$url_main/rlit/works.php?w_id=$w[w_id]'>";
      if ($w[t_len]+$w[t_len2] == 0) echo "<font color=lightgray>";
      echo "$w[w_name]</a> ";
      echo "<td bgcolor=#ffeeff>$w[w_years]";
      echo "<td bgcolor=#ffeeff>";
      $r2 = mysql_query("SELECT * FROM rl_wtags WHERE w_id='$w[w_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "<a href='$url_main/rlit/works.php?tag=$w2[t_name]'>$w2[t_name]</a>";
      }
      echo "<td bgcolor=#ffeeff>$w[w_rating]";
    }
    echo "</table>";
    echo "<p>";
    // show
    $order = "q_rating";
    $r = mysql_query("SELECT * FROM rq_quotes WHERE a_id='$a_id' ORDER BY $order");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Цитата";
    //echo "<th>Lang";
    echo "<th>Метки";
    echo "<th>Ранг";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td width=500><a href=works.php?q_id=$w[q_id]>$w[q_txt]</a> ";
      if ($w[q_img] != 0) echo "<img src=i/painting.png height=18 valign=top> ";
      echo "<td width=100>";
      $r2 = mysql_query("SELECT * FROM rq_qtags WHERE q_id='$w[q_id]' AND LEFT(t_name, 1) != '!'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo " <a href='works.php?tag=$w2[t_name]'>";
        echo "<font color=green>";
        echo "$w2[t_name]</font></a>";
      }
      echo "<td><center>$w[q_rating]";
    }
    echo "</table>";
    stop_time();
    exit;
  }
  
  echo "<table width=100%>";
  echo "<td><b>Фильтр:";
  echo "<td align=right><font color=gray>Всего 327 философов, 6135 цитат, 836 книг. <a href=authors.php?act=search>Поиск</a>";
  echo "</table>";
  
  if (!isset($order)) $order="a_rating, a_year1";
  
  if ($type != '') $cond .= " AND a_type='$type' ";
  if ($group != '') $cond .= " AND a_group='$group' ";
  if ($country != '') $cond .= " AND a_country='$country' ";
  //if ($phil == 1) $cond = " AND (a_type='Философ' OR rq_atags.t_name IS NOT NULL) ";
  
  $q = "SELECT * FROM rq_authors WHERE a_fil=1 $cond ORDER BY $order LIMIT 1000";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  //echo "<form action=authors.php method=get>";
  //echo "<input type=hidden name=act value=tag>";
  // Show filter
  $rt = mysql_query("SELECT * FROM rq_types WHERE a_type='$type'");
  echo mysql_error();
  $wt = mysql_fetch_assoc($rt);
  $q2 = "SELECT * FROM rq_types WHERE a_type != '' ORDER BY a_group, a_type";
  $r2 = mysql_query($q2);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  $g_num=0;
  echo "<table>";
  // Country
  $q2 = "SELECT * FROM rq_countries ORDER BY a_country";
  $r2 = mysql_query($q2);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  echo "<form action=authors.php method=get>";
  echo "<input type=hidden name=type value='$type'>";
  echo "<td><select style='";
  if ($country != '') echo "background-color: #bbffbb";
  else echo "opacity: 0.5";
  echo "' name=country onChange='this.form.submit();'>";
  echo "<option value='' style='color: #aaaaaa'>Страна</option>";
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_assoc($r2);
    echo "<option value='$w2[a_country]'";
    if ($country == $w2[a_country]) echo " selected";
    echo ">$w2[a_country]</option>";
  }
  echo "</select>";
  echo "</form>";
  echo "</table>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  $saved = "type=$type&group=$group&country=$country&";
  echo "<th><a href=authors.php?{$saved}order=a_name>Автор";
  echo "<th width=72><a href=authors.php?{$saved}order=a_year1>Годы";
  echo "<th><a href='authors.php?{$saved}order=a_country, a_year1'>Страна";
  echo "<th><a href='authors.php?{$saved}order=a_type'>Профессия";
  echo "<th><a href='authors.php?{$saved}order=a_quotes desc'>Цитаты";
  echo "<th><a title='Более известные авторы имеют меньший ранг' href='authors.php?{$saved}order=a_rating, a_year1'>Ранг";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //if ($w[rl_id] != 0) echo "* ";
      //echo "<input type=checkbox name=a$w[a_id]> ";
    }
    echo "<a href=authors.php?a_id=$w[a_id]>";
    if (($w[a_desc] != "") && (file_exists("apic/".$w[a_id].".jpg"))) echo "<font color=green>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //if ($w[a_year1] == 0) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=$button_height src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=15 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      if ($w[map_pos] != 0) echo "<font color=red>";
    }
    echo "$w[a_name]</font></a>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo " <a target=_blank href='../work/rfmap/build-rfmap.php?a_id=$w[a_id]'><img style='opacity: 0.3' height=16 src=i/time.png></a>";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //$wikilink = "http://ru.wikipedia.org/w/index.php?search=$w[a_name]";
      //if ($w[a_wiki] != "") $wikilink = $w[a_wiki];
      //echo " <a target=_blank href='$wikilink'><img style='opacity: 0.3' valign=middle height=14 src=i/wiki.png></a> ";
    }
    //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    echo "<td>";
    if (($w[a_year1] != 0) || ($w[a_year2] != 0)) echo "$w[a_year1]-";
    if ($w[a_year2] != 0) echo $w[a_year2];
    echo "<td>$w[a_country]";
    $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w[a_id]' AND t_type>0 AND LEFT(t_name, 1)!='!' ORDER BY t_type DESC, t_name LIMIT 30");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    echo "<td>";
    if ($w[a_type] != 'Философ') {
      echo "<a href='authors.php?type=$w[a_type]'>$w[a_type]</a> ";
      if ($n2>0) echo " / ";
    }
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo " <a href='works.php?tag=$w2[t_name]'>";
      if ($w2[t_type] == 2) echo "<font color=green>";
      if ($w2[t_type] == 1) echo "";
      if ($w2[t_type] == 0) echo "<font size=1 color=#bbbbbb>";
      echo "$w2[t_name]</font></a>";
    }
    echo "<td>$w[a_quotes]";
    echo "<td>$w[a_rating]";
  }
  echo "</table>";
  stop_time();
  echo "<br>Зеленым цветом выделены авторы с описанием";
?>
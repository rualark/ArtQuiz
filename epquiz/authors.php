<?
  include "lib.php";
  include "style.php";
  include "menu.php";

  secure_variable("l_type");
  secure_variable("a_name2");
  secure_variable("a_name");
  secure_variable("a_id2");
  secure_variable("a_id3"); // Where to run back
  secure_variable("a_id");
  secure_variable("order");
  secure_variable("dr");
  secure_variable("w_id");
  secure_variable("act");
  secure_variable("atag");
  
  if ($dr != 0) {
    mysql_query("UPDATE ep_works SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id&order=$order\");</script>"); 
  }

  if ($act == "dellink") {
    mysql_query("DELETE FROM ep_alink WHERE a_id='$a_id' AND a_id2='$a_id2' AND l_type='$l_type'");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }

  if ($a_name2 != '') {
    if ($l_type == 'null') die("Canceled by user");
    $r = mysql_query("SELECT a_id FROM ep_authors WHERE a_name LIKE '%$a_name2%' ORDER BY a_rating");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    if ($a_name != '') { // Find source poet
      $r = mysql_query("SELECT a_id FROM ep_authors WHERE a_name LIKE '%$a_name%' ORDER BY a_rating");
      echo mysql_error();
      $wa2 = mysql_fetch_assoc($r);
      $a_id = $wa2[a_id];
    }
    if ($wa[a_id] == 0) die("<font color=red>Cannot find poet $a_name2</font>");
    if ($a_id == 0) die("<font color=red>Cannot find poet $a_name</font>");
    mysql_query("REPLACE INTO ep_alink VALUES('$a_id', '$wa[a_id]', '$l_type', NOW())");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = 'authors.php?a_id=$a_id3';</script>"); 
    //die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }
  
  if ($act == "tag") {
    if ($atag == '') die("No tag name specified!");
    if ($atag == 'null') die("No tag name specified!");
    $r4 = mysql_query("SELECT * FROM ep_atags WHERE t_name = '$atag' LIMIT 1");
    $n = mysql_numrows($r4);
    if ($n == 0) echo "<font color=red>This tag is new!</font><br>";
    $r4 = mysql_query("SELECT * FROM ep_tdesc WHERE t_name = '$atag' LIMIT 1");
    $n = mysql_numrows($r4);
    if ($n > 0) echo "Found description for tag $atag<br>";
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        echo "Adding tag $atag to $i<br>";
        mysql_query("INSERT INTO ep_atags VALUES('$i', '$atag', '$l_type')");
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
    $r = mysql_query("SELECT * FROM ep_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top><b>$wa[a_name]</b> [$wa[a_year1]-$wa[a_year2]] <a href=authors.php?order=a_country>$wa[a_country]</a> ";
    $wikilink = "http://en.wikipedia.org/w/index.php?search=$wa[a_name]";
    if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
    echo " <a target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$wa[a_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    echo "<a title='Pronounce name' target=_blank href=\"http://forvo.com/search/$wa[a_name]\"><img height=$button_height valign=middle border=0 src=i/speaker.png></a> ";
    if ($wa[a_allpoetry] != "") echo " <a target=_blank href='http://allpoetry.com$wa[a_allpoetry]'><img valign=middle height=$button_height src=i/allpoetry_small.jpg></a> ";
    if ($wa[a_poemhunter] != "") echo " <a target=_blank href='http://www.poemhunter.com$wa[a_poemhunter]'><img valign=middle height=30 src=i/poemhunter.png></a> ";
    show_integration($wa);
    if ($wa[map_pos]!=0) echo " <a target=_blank href='$url_main/epmap/index.php#a$wa[a_id]'><img valign=top height=25 src=i/time.png></a> ";
    echo "<br>Ranked #$wa[a_rating] in the <a href=authors.php>top 380 poets</a>";
    if ($wa[a_vote]>0) echo "<br>Votes <b>".round($wa[a_vote]*100)."%</b>: $wa[a_vup] up, $wa[a_vdown] down";
    //if ($wa[a_state]==0) echo "<br>This author description is in progress...";
    echo "<br><br><div class=readmore><pre>".str_replace("\r\n", "\r\n\r\n", $wa[a_desc])."</pre></div>";
    echo "<script src='js/jquery-1.9.1.min.js'></script>";
    echo "<script type='text/javascript' src='js/readmore2.js'></script>";
    $r2 = mysql_query("SELECT * FROM ep_atags WHERE a_id='".$wa[a_id]."'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      else echo "<p>";
      echo " <a title='$w2[l_type]' href='works.php?tag=$w2[t_name]'>";
      if (strpos($w2[l_type], 'opposed') !== false) echo "<font color=red>";
      elseif ($w2[l_type] != '') echo "<font color=#bbbbbb>";
      else echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) 
      echo " <a title='Add new tag' onclick='r=prompt(\"Tag:\", \"\"); window.open(\"$url_main/epquiz/authors.php?act=tag&a$wa[a_id]=1&atag=\"+r); return false' href=# target=_blank><font color=black><img src=i/plus.png height=15></font></a> ";
    if (file_exists("apic/".$wa[a_id].".jpg")) echo "<td align=right valign=top><img style='border-radius: 20px' height=200 src=apic/$wa[a_id].jpg></table>";
    $r2 = mysql_query("SELECT ep_alink.a_id, a_id2, l_type, a_name, a_year1, a_year2, a_country FROM ep_alink 
      LEFT JOIN ep_authors ON (ep_authors.a_id=ep_alink.a_id2) 
      WHERE ep_alink.a_id='".$wa[a_id]."' ORDER BY a_year1");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    $r3 = mysql_query("SELECT ep_alink.a_id, a_id2, l_type, a_name, a_year1, a_year2, a_country FROM ep_alink 
      LEFT JOIN ep_authors ON (ep_authors.a_id=ep_alink.a_id) 
      WHERE ep_alink.a_id2='".$wa[a_id]."' ORDER BY a_year1");
    echo mysql_error();
    $n3 = mysql_numrows($r3);
    if (($n2+$n3)>0) {
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th width=75>Years";
      echo "<th>Country";
      echo "<th>Poet";
      echo "<th>Interaction";
    }
    for ($x=0; $x<$n3; $x++) {
      $w2 = mysql_fetch_assoc($r3);
      echo "<tr>";
      echo "<td>$w2[a_year1]-";
      if ($w2[a_year2] != 0) echo $w2[a_year2];
      echo "<td><center>$w2[a_country]";
      echo "<td><center><a href='authors.php?a_id=$w2[a_id]'>$w2[a_name]</a>";
      echo "<td>";
      $suffix = "";
      if (strpos($w2[l_type], 'influenced') !== false) echo "<b><font color=green>";
      if (strpos($w2[l_type], 'disliked') !== false) echo "<b><font color=red>";
      if (strpos($w2[l_type], 'friend') !== false) $suffix = "of";
      if (strpos($w2[l_type], 'married') !== false) $suffix = "to";
      if (strpos($w2[l_type], 'sister') !== false) $suffix = "of";
      if (strpos($w2[l_type], 'brother') !== false) $suffix = "of";
      echo "&rarr; $w2[l_type]</font></b> $suffix $wa[a_name]";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) 
        echo "<td><a href='authors.php?act=dellink&a_id=$w2[a_id]&a_id2=$w2[a_id2]&l_type=$w2[l_type]'><img src=i/cross.png height=15></a>";
    }
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<tr>";
      echo "<td>$w2[a_year1]-";
      if ($w2[a_year2] != 0) echo $w2[a_year2];
      echo "<td><center>$w2[a_country]";
      echo "<td><center><a href='authors.php?a_id=$w2[a_id2]'>$w2[a_name]</a>";
      echo "<td>";
      $suffix = "by";
      if (strpos($w2[l_type], 'influenced') !== false) echo "<b><font color=green>";
      if (strpos($w2[l_type], 'disliked') !== false) echo "<b><font color=red>";
      if (strpos($w2[l_type], 'friend') !== false) $suffix = "of";
      if (strpos($w2[l_type], 'married') !== false) $suffix = "to";
      if (strpos($w2[l_type], 'sister') !== false) $suffix = "of";
      if (strpos($w2[l_type], 'brother') !== false) $suffix = "of";
      echo "&larr; $w2[l_type] $suffix</font></b> $wa[a_name]";
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) 
        echo "<td><a href='authors.php?act=dellink&a_id=$w2[a_id]&a_id2=$w2[a_id2]&l_type=$w2[l_type]'><img src=i/cross.png height=15></a>";
    }
    if (($n2+$n3)>0) {
      echo "</table>";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9") !== false) {
      echo "<br><form action=authors.php method=get>";
      echo "<input type=hidden name=a_id value='$wa[a_id]'>";
      echo "<input type=hidden name=a_id3 value='$wa[a_id]'>";
      echo "Add link to: "; 
      echo "<input type=text size=40 name=a_name2 list=bcomlist> type ";
      echo "<input type=text size=10 name=l_type value='influenced' list=bcomlist2> ";
      echo "<datalist id=bcomlist>";
      $q = "SELECT a_name FROM ep_authors";
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        echo "<option value='$w2[a_name]'></option>";
      }
      echo "</datalist>";
      echo "<datalist id=bcomlist2>";
      echo "<option value='influenced'></option>";
      echo "<option value='early influenced'></option>";
      echo "<option value='disliked'></option>";
      echo "<option value='praised'></option>";
      echo "<option value='married'></option>";
      echo "<option value='friend'></option>";
      echo "</datalist>";
      echo " <input type=submit>";
      echo "</form>";
      // Link from
      echo "<br><form action=authors.php method=get>";
      echo "<input type=hidden name=a_name2 value='$wa[a_name]'>";
      echo "<input type=hidden name=a_id3 value='$wa[a_id]'>";
      echo "Add link from: ";
      echo "<input type=text size=40 name=a_name list=bcomlist> type ";
      echo "<input type=text size=10 name=l_type value='influenced' list=bcomlist2> ";
      echo " <input type=submit>";
      echo "</form>";
    }
    echo "<br><br>";
    // show
    $order = "w_rating desc,w_name";
    $r = mysql_query("SELECT * FROM ep_works WHERE a_id='$a_id' ORDER BY $order");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Work";
    echo "<th>Lang";
    //echo "<th>Tags";
    echo "<th>Rating";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td><a href=works.php?w_id=$w[w_id]>$w[w_name]</a> ";
      echo "<td><center>";
      if ($w[w_lang] != 'eng') echo "<font color=red>$w[w_lang]";
      else echo "$w[w_lang]";
      echo "<td><center>$w[w_rating]";
    }
    echo "</table>";
    stop_time();
    exit;
  }
  
  $q = "SELECT COUNT(*) as cnt FROM ep_authors WHERE a_works>0 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  $q = "SELECT COUNT(*) as cnt FROM ep_works LEFT JOIN ep_authors USING (a_id) WHERE 1=1 $year_cond ";
  $r = mysql_query($q);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r);
  echo "<p align=right>Total $w[cnt] poets, $w2[cnt] poems.<br>";
  
  if (!isset($order)) $order="a_rating, a_year1";
  
  $q = "SELECT * FROM ep_authors WHERE a_works>0 ORDER BY $order";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<form action=authors.php method=get>";
  echo "<input type=hidden name=act value=tag>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href=authors.php?order=a_name>Name";
  echo "<th width=72><a href=authors.php?order=a_year1>Years";
  echo "<th><a href='authors.php?order=a_country, a_year1'>Country";
  echo "<th>Tags";
  echo "<th><a href='authors.php?order=a_works desc'>Works";
  echo "<th><a title='Lower rank shows better known poets' href='authors.php?order=a_rating, a_year1'>Rank";
  echo "<th><a title='Maximum rating of a poem' href='authors.php?order=a_maxr desc, a_year1'>MaxR";
  echo "<th><a title='Percent of positive votes' href='authors.php?order=a_vote desc'>Votes";
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
      //if ($w[a_year1] == 0) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=$button_height src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=$button_height src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
    }
    echo "$w[a_name]</font></a>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      $wikilink = "http://en.wikipedia.org/w/index.php?search=$w[a_name]";
      if ($w[a_wiki] != "") $wikilink = $w[a_wiki];
      echo " <a target=_blank href='$wikilink'><img style='opacity: 0.3' valign=middle height=14 src=i/wiki.png></a> ";
    }
    //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    echo "<td>$w[a_year1]-";
    if ($w[a_year2] != 0) echo $w[a_year2];
    echo "<td>$w[a_country]";
    echo "<td>";
    $r2 = mysql_query("SELECT * FROM ep_atags LEFT JOIN ep_tdesc USING (t_name) WHERE a_id='$w[a_id]'");
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
      if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
        if ($w2[t_desc] == '') echo " <img title='No description' src=i/edit.png height=14> ";
      }
    }
    echo "<td>$w[a_works]";
    echo "<td>$w[a_rating]";
    echo "<td>$w[a_maxr]";
    echo "<td title='$w[a_vup] up, $w[a_vdown] down'>";
    if ($w[a_vote]>0) echo round($w[a_vote]*100)."%";
  }
  echo "</table>";
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    echo "<br>Add tag: "; // <input type=text name=atag>";
    echo "<input id=sel1 type=text size=40 name=atag list=bcomlist> type ";
    echo "<input type=text size=20 name=l_type list=bcomlist2> ";
    echo "<datalist id=bcomlist>";
    $q = "SELECT t_name FROM ep_atags GROUP BY t_name";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[t_name]'></option>";
    }
    echo "</datalist>";
    echo "</datalist>";
    echo "<datalist id=bcomlist2>";
    echo "<option value='opposed'></option>";
    echo "<option value='influenced poet'></option>";
    echo "<option value='influenced by poet'></option>";
    echo "</datalist>";
    echo " <input type=submit>";
  }
  echo "</form>";
  stop_time();
  echo "<br>Green color shows poets and tags with description";
?>
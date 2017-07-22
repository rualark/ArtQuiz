<?
  include "lib.php";
  include "../auth.php";
  include "style.php";
  include "menu.php";

  secure_variable("l_type");
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
  
  start_time();
  
  if ($act == 'search') {
    echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
    echo "<b>Search quote database by:</b>";
    echo "<form method=get action=authors.php>";
    echo "<input type=hidden name=act value=search>";
    echo "<table cellpadding=4>";
    echo "<tr>";
    echo "<td>Author name:";
    echo "<td><input id=sel1 size=80 name=a_name value='$a_name'>";
    echo "<tr>";
    echo "<td>Author description:";
    echo "<td><input size=80 name=a_desc value='$a_desc'>";
    echo "<tr>";
    echo "<td>Quote name:";
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
      $q = "SELECT * FROM eq_authors WHERE 1=1 $cond ORDER BY a_rating LIMIT 1000";
      //echo $q;
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>Name";
      echo "<th width=72>Years";
      echo "<th>Country";
      echo "<th>Profession";
      echo "<th>Quotes";
      echo "<th title='Lower rank shows better known authors'>Rank";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a target=_blank href=authors.php?a_id=$w[a_id]>";
        if ($w[a_desc] != "") echo "<font color=green>";
        echo preg_replace("/($a_name)/i", "<font color=orange>$1</font>", $w[a_name])."</font></a>";
        echo "<td>";
        if (($w[a_year1] != 0) || ($w[a_year2] != 0)) echo "$w[a_year1]-";
        if ($w[a_year2] != 0) echo $w[a_year2];
        echo "<td>$w[a_country]";
        echo "<td><a target=_blank href=authors.php?type=$w[a_type]>$w[a_type]";
        echo "<td>$w[a_quotes]";
        echo "<td>$w[a_rating]";
      }
      echo "</table>";
      stop_time();
    } elseif ($q_name != '') { 
      $r = mysql_query("SELECT * FROM eq_quotes LEFT JOIN eq_authors USING (a_id)
        WHERE MATCH(q_txt) AGAINST(\"$q_name\") LIMIT 100");
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
    }
    exit;
  }
  
  if ($act == 'ch-rank') {
    if ($rank == 'null') die("Cancelled");
    mysql_query("UPDATE eq_authors SET a_rating='$rank' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Loaded $rank rank to $a_id";
    exit;
  }

  if ($dr != 0) {
    mysql_query("UPDATE eq_quotes SET w_rating=w_rating+'$dr' WHERE w_id='$w_id'");
    die ("<script language=\"javascript\">location.replace(\"authors.php?a_id=$a_id&order=$order\");</script>"); 
  }

  if ($act == "dellink") {
    mysql_query("DELETE FROM eq_alink WHERE a_id='$a_id' AND a_id2='$a_id2' AND l_type='$l_type'");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }

  if ($a_name2 != '') {
    if ($l_type == 'null') die("Canceled by user");
    $r = mysql_query("SELECT a_id FROM eq_authors WHERE a_name LIKE '%$a_name2%' ORDER BY a_rating");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    if ($a_name != '') { // Find source poet
      $r = mysql_query("SELECT a_id FROM eq_authors WHERE a_name LIKE '%$a_name%' ORDER BY a_rating");
      echo mysql_error();
      $wa2 = mysql_fetch_assoc($r);
      $a_id = $wa2[a_id];
    }
    if ($wa[a_id] == 0) die("<font color=red>Cannot find poet $a_name2</font>");
    if ($a_id == 0) die("<font color=red>Cannot find poet $a_name</font>");
    mysql_query("REPLACE INTO eq_alink VALUES('$a_id', '$wa[a_id]', '$l_type', NOW())");
    echo mysql_error();
    die ("<script language=\"javascript\">location.href = 'authors.php?a_id=$a_id3';</script>"); 
    //die ("<script language=\"javascript\">location.href = document.referrer;</script>"); 
    exit;
  }
  
  if ($act == "tag") {
    if ($atag == '') die("No tag name specified!");
    if ($atag == 'null') die("No tag name specified!");
    $r4 = mysql_query("SELECT * FROM eq_atags WHERE t_name = '$atag' LIMIT 1");
    $n = mysql_numrows($r4);
    if ($n == 0) echo "<font color=red>This tag is new!</font><br>";
    $r4 = mysql_query("SELECT * FROM eq_tdesc WHERE t_name = '$atag' LIMIT 1");
    $n = mysql_numrows($r4);
    if ($n > 0) echo "Found description for tag $atag<br>";
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        echo "Adding tag $atag to $i<br>";
        mysql_query("INSERT INTO eq_atags VALUES('$i', '$atag', '$l_type')");
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
    $r = mysql_query("SELECT * FROM eq_authors WHERE a_id='$a_id'");
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "<table width=100%><tr><td valign=top><b>$wa[a_name]</b> [$wa[a_year1]-$wa[a_year2]] <a href='authors.php?country=$wa[a_country]'>$wa[a_country]</a> ";
    $wikilink = "http://en.wikipedia.org/w/index.php?search=$wa[a_name]";
    if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
    echo " <a target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.com/search?q=$wa[a_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    echo "<a title='Pronounce name' target=_blank href=\"http://forvo.com/search/$wa[a_name]\"><img height=$button_height valign=middle border=0 src=i/speaker.png></a> ";
    if ($wa[a_brainyquote] != "") echo " <a target=_blank href='https://www.brainyquote.com/quotes/authors/$wa[a_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    show_integration($wa);
    echo "<br>Rank: ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<a <a onclick='r=prompt(\"Rank:\", \"\"); window.open(\"authors.php?act=ch-rank&a_id=$wa[a_id]&rank=\"+r); return false' href=# target=_blank>";
    }
    echo "$wa[a_rating]</a>";
    if (($wa[a_type] != '') && ($wa[a_type2] != '')) echo "<br><a href=\"authors.php?type=$wa[a_type]\">$wa[a_type]</a>, $wa[a_type2]";
    elseif ($wa[a_type2] != '') echo "<br>$wa[a_type2]";
    else echo "<br><a href=\"authors.php?type=$wa[a_type]\">$wa[a_type]</a>";
    //if ($wa[a_vote]>0) echo "<br>Votes <b>".round($wa[a_vote]*100)."%</b>: $wa[a_vup] up, $wa[a_vdown] down";
    //if ($wa[a_state]==0) echo "<br>This author description is in progress...";
    echo "<br>";
    show_integration_tags($wa, 1);
    echo "<br><br><div class=readmore><pre>".str_replace("\r\n", "\r\n\r\n", $wa[a_desc])."</pre></div>";
    echo "<script src='js/jquery-1.9.1.min.js'></script>";
    echo "<script type='text/javascript' src='js/readmore2.js'></script>";
    $r2 = mysql_query("SELECT * FROM eq_atags WHERE a_id='$wa[a_id]' AND LEFT(t_name, 1)!='!' ORDER BY t_cnt DESC, t_name");
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

    if (file_exists("apic/".$wa[a_id].".jpg")) echo "<td align=right valign=top><img style='border-radius: 20px' height=200 src=apic/$wa[a_id].jpg></table>";
    echo "<br><br>";
    // show
    $order = "q_rating";
    $r = mysql_query("SELECT * FROM eq_quotes WHERE a_id='$a_id' ORDER BY $order");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Quote";
    //echo "<th>Lang";
    echo "<th>Tags";
    echo "<th>Rank";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td width=500><a href=works.php?q_id=$w[q_id]>$w[q_txt]</a> ";
      if ($w[q_img] != 0) echo "<img src=i/painting.png height=18 valign=top> ";
      echo "<td width=100>";
      $r2 = mysql_query("SELECT * FROM eq_qtags WHERE q_id='$w[q_id]' AND LEFT(t_name, 1) != '!'");
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
  
  $q = "SELECT COUNT(*) as cnt FROM eq_authors";
  $r = mysql_query($q);
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  $q = "SELECT COUNT(*) as cnt FROM eq_quotes";
  $r = mysql_query($q);
  echo mysql_error();
  $w2 = mysql_fetch_assoc($r);
  echo "<table width=100%>";
  echo "<td><b>Filter:";
  echo "<td align=right><font color=gray>Total $w[cnt] authors, $w2[cnt] quotes. <a href=authors.php?act=search>Search</a>";
  echo "</table>";
  
  if (!isset($order)) $order="a_rating, a_year1";
  
  if ($type != '') $cond .= " AND a_type='$type' ";
  if ($group != '') $cond .= " AND a_group='$group' ";
  if ($country != '') $cond .= " AND a_country='$country' ";
  
  $q = "SELECT * FROM eq_authors WHERE 1=1 $cond ORDER BY $order LIMIT 1000";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  //echo "<form action=authors.php method=get>";
  //echo "<input type=hidden name=act value=tag>";
  // Show filter
  $rt = mysql_query("SELECT * FROM eq_types WHERE a_type='$type'");
  echo mysql_error();
  $wt = mysql_fetch_assoc($rt);
  $q2 = "SELECT * FROM eq_types WHERE a_type != '' ORDER BY a_group, a_type";
  $r2 = mysql_query($q2);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  $g_num=0;
  echo "<table>";
  for ($i=0; $i<$n2; $i++) {
    $w2 = mysql_fetch_assoc($r2);
    if ($old_group != $w2[a_group]) {
      if ($g_num>0) echo "</select></form></td>";
      //if ($g_num == 3) echo "<tr>";
      $g_num++;
      //echo "<td align=right><a href=authors.php?group=$w2[a_group]>$w2[a_group]</a>:";
      echo "<form action=authors.php method=get>";
      echo "<input type=hidden name=country value='$country'>";
      echo "<td><select style='";
      if ($wt[a_group] == $w2[a_group]) echo "background-color: #bbffbb";
      else echo "opacity: 0.5";
      echo "' name=type onChange='this.form.submit();'>";
      echo "<option value='' style='color: #aaaaaa'>".strtoupper($w2[a_group])."</option>";
      $old_group = $w2[a_group];
    }
    echo "<option value='$w2[a_type]'";
    if ($type == $w2[a_type]) echo " selected";
    echo ">$w2[a_type]</option>";
  }
  echo "</select>";
  echo "</form></td>";
  // Country
  $q2 = "SELECT * FROM eq_countries ORDER BY a_country";
  $r2 = mysql_query($q2);
  echo mysql_error();
  $n2 = mysql_numrows($r2);
  echo "<form action=authors.php method=get>";
  echo "<input type=hidden name=type value='$type'>";
  echo "<td><select style='";
  if ($country != '') echo "background-color: #bbffbb";
  else echo "opacity: 0.5";
  echo "' name=country onChange='this.form.submit();'>";
  echo "<option value='' style='color: #aaaaaa'>COUNTRY</option>";
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
  echo "<th><a href=authors.php?{$saved}order=a_name>Name";
  echo "<th width=72><a href=authors.php?{$saved}order=a_year1>Years";
  echo "<th><a href='authors.php?{$saved}order=a_country, a_year1'>Country";
  echo "<th><a href='authors.php?{$saved}order=a_type'>Profession";
  echo "<th><a href='authors.php?{$saved}order=a_quotes desc'>Quotes";
  echo "<th><a title='Lower rank shows better known authors' href='authors.php?{$saved}order=a_rating, a_year1'>Rank";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      if ($w[rl_id] != 0) echo "* ";
      //echo "<input type=checkbox name=a$w[a_id]> ";
    }
    echo "<a href=authors.php?a_id=$w[a_id]>";
    if (($w[a_desc] != "") && (file_exists("apic/".$w[a_id].".jpg"))) echo "<font color=green>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //if ($w[a_year1] == 0) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=$button_height src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.com/search?q=$w[a_name]'><img valign=middle height=15 src=i/google.png></a> <a href=authors.php?a_id=$w[a_id]><font color=red>";
    }
    echo "$w[a_name]</font></a>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //$wikilink = "http://en.wikipedia.org/w/index.php?search=$w[a_name]";
      //if ($w[a_wiki] != "") $wikilink = $w[a_wiki];
      //echo " <a target=_blank href='$wikilink'><img style='opacity: 0.3' valign=middle height=14 src=i/wiki.png></a> ";
    }
    //if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    echo "<td>";
    if (($w[a_year1] != 0) || ($w[a_year2] != 0)) echo "$w[a_year1]-";
    if ($w[a_year2] != 0) echo $w[a_year2];
    echo "<td>$w[a_country]";
    echo "<td><a href=authors.php?type=$w[a_type]>$w[a_type]";
    echo "<td>$w[a_quotes]";
    echo "<td>$w[a_rating]";
  }
  echo "</table>";
  stop_time();
  echo "<br>Green color shows authors with description";
?>
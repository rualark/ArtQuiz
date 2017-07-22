<? include "../url.php"; ?>
<?
  if (isset($_GET['amg_id'])) $amg_id=$_GET['amg_id'];
  if (isset($_GET['c_id'])) $c_id=$_GET['c_id'];
  if (isset($_GET['t_id'])) $t_id=$_GET['t_id'];
  if (isset($_GET['sort'])) $sort=$_GET['sort'];
  $perc_min = 3;
  $perc_max = 5;

  include "../analytics.php";
  include "../mysql.php";
  include "style.php";
  include "cclib.php";
  include "../cquiz/qlib.php";
  
  function show_mysql_error() {
    echo "<font color=red>".mysql_error()."</font><br/>";
  }
  
  echo "<title>ClassClass - classical music classification</title>";
  echo "<center><a href=am.php>Genres</a> | <a href=amc.php>Composers</a> | <a href=ams.php>Search</a></center>";
  $cond_c = "";
  if ($c_id != "") $cond_c = "AND c_id='$c_id'";
  
  if (isset($t_id) || isset($amg_id)) {
    $r3 = mysql_query("SELECT COUNT(*) as count FROM cc_works WHERE t_id='$t_id' $cond_c");
    show_mysql_error();
    $w3=mysql_fetch_array($r3);
    $cond = "";
    if ($t_id>0) {
      $cond = " AND t_id=$t_id";
      $cond2 = " AND t_id=$t_id";
    }
    if ($amg_id>0) {
      $cond = " AND cc_works.amg_id=$amg_id";
      $cond2 = " AND amg_id=$amg_id";
    }
    $r2 = mysql_query("SELECT * FROM cc_types LEFT JOIN cc_amg USING (amg_id) WHERE 1=1 $cond2");
    show_mysql_error();
    $w2=mysql_fetch_array($r2);
    echo "<center><h2>$w2[amg_name] ";
    if ($t_id>0) echo "| $w2[t_name]";
    if ($c_id != "") {
      $r = mysql_query("SELECT c_name3,c_years,count(*) as cnt FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE c_id='$c_id'");
      $w = mysql_fetch_array($r);
      echo " of $w[c_name3] [$w[c_years]]";
    }
    echo "</h2>";
    echo make_perc($w2[t_perc], 20, 0);
    //if ($t_id != "") show_perc($t_id, $cond_c, $w3[count]);
    echo "</center>";
    echo "<table cellpadding=10 border=0><tr><td valign=top>";
    //echo "<b>Works</b>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th><a href=am.php?t_id=$t_id&c_id=$c_id&sort=cc_works.amg_id>Group</a></th>";
    echo "<th><a href=am.php?t_id=$t_id&c_id=$c_id&sort=w_year>Year</th>";
    echo "<th><a href=am.php?t_id=$t_id&c_id=$c_id&sort=w_name>Work</th>";
    echo "<th><a href=am.php?t_id=$t_id&c_id=$c_id&sort=c_name3>Composer</th>";
    echo "</tr>";
    if (!isset($sort)) $sort = "w_year";
    $q = "SELECT * FROM cc_works LEFT JOIN cc_composers USING (c_id) LEFT JOIN cc_amg ON (cc_works.amg_id=cc_amg.amg_id) WHERE 1=1 $cond $cond_c ORDER BY $sort";
    //echo $q;
    $r = mysql_query($q);
    show_mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      echo "<tr>";
      echo "<td>";
      //if ($w2[amg_id] != $w[amg_id]) echo "<font color=red>";
      echo "$w[amg_name]</font></td>";
      if ($w[w_year]>0) echo "<td>$w[w_year]</td>";
      else echo "<td>[".$w[c_years]."]</td>";
      echo "<td><a target=_blank href='http://www.google.ru/search?q=".
        str_replace("'", "", $w[w_name]);
      if (strlen($w[w_name]<30)) echo " $w[c_name3]";
      echo "'>$w[w_name]</a></td>";
      echo "<td><a href=am.php?c_id=$w[c_id]>";
      echo "<font color=".composer_color($w[c_country]).">";
      echo "$w[c_name3]</font></a></td>";
      //echo "$w[w_name] (<a target=_blank href='http://www.allmusic.com/artist/$w[c_amid]/compositions'>$w[c_name3]</a>)";
      echo "</tr>";
    }
    echo "</table></td><td valign=top>";
    if ($c_id == "") {
      echo "<b>Composers ordered by works count:<ul>";
      $r5 = mysql_query("SELECT c_country,c_works,c_name3,c_years,c_id,c_amid,COUNT(w_id) as cnt FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE 1=1 $cond GROUP BY c_id ORDER BY cnt desc");
      show_mysql_error();
      $n5 = mysql_numrows($r5);
      for ($i=0; $i<$n5; $i++) {
        $w5=mysql_fetch_array($r5);
        echo "<li>";
        echo "[".$w5[c_years]."] <a href=am.php?c_id=$w5[c_id]>";
        echo "<font color=".composer_color($w5[c_country]).">";
        echo "$w5[c_name3]</font></a> ($w5[cnt] of $w5[c_works] works)";
      }
    } else {
      echo "<a href=am.php?t_id=$t_id&amg_id=$amg_id>Show all composers for this genre</a>";
    }
    echo "</table>";
    exit;
  }
  
  echo "<table><tr><td>";
  echo "<center><b>Music genres";
  if ($c_id != "") {
    $r = mysql_query("SELECT c_desc,c_group,c_caid,c_amid,c_country,c_name3,c_years,count(*) as cnt FROM cc_works LEFT JOIN cc_composers USING (c_id) WHERE c_id='$c_id'");
    echo mysql_error();
    $w = mysql_fetch_array($r);
    if ($w[c_name] == "") {
      $r = mysql_query("SELECT * FROM cc_composers WHERE c_id='$c_id'");
      $w = mysql_fetch_array($r);
    }
    echo " for $w[c_name3] ";
    echo "<a target=_blank href=\"http://en.wikipedia.org/w/index.php?search=$w[c_name3]\"><img height=20 border=0 src=i/wikipedia.jpg></a> ";
    echo "<a target=_blank href=http://youtube.com/results?search_query=$w[c_name3]\"><img height=20 border=0 src=i/youtube.png></a> ";
    echo "<a target=_blank href='http://www.google.ru/search?q=$w[c_name3]'><img height=20 border=0 src=i/google.png></a> ";
    echo "<a target=_blank href='http://www.google.ru/search?q=mfiles $w[c_name3]'><img height=20 border=0 src=i/mf.png></a> ";
    echo "<a target=_blank href='http://www.google.ru/search?q=site:imslp.org $w[c_name3]'><img height=20 border=0 src=i/imslp150.jpg></a> ";
    echo "<a target=_blank href=\"http://www.allmusic.com/artist/$w[c_amid]\"><img height=20 border=0 src=i/allmusic.png></a> ";
    echo "<a target=_blank href=\"http://www.classicalarchives.com/composer/$w[c_caid].html\"><img height=20 border=0 src=i/classicalarchives.jpg></a> ";
    echo "$w[c_country] [$w[c_years]] ($w[cnt] works)";
    echo "</b><br>";
    if (strlen($w[c_group])>1) echo "<b>Group:</b> $w[c_group]<br>";
    if (strlen($w[c_desc])>1) echo "<b>Short description:</b> $w[c_desc]<br>";
    echo "</center>";
    if (is_file("cpic/$w[c_id].jpg")) echo "<img width=200 src=cpic/$w[c_id].jpg align=right>";
  } else {
    echo "</h2></center>";
  }
  
  // Show tracks
  if ($cond_c != "") {
    $us[u_id] = $u_id;
    if ($u_id>0) {
      show_played_composer($c_id);
      echo " Played blocks map: <br><img src='$url_main/cquiz/png-cblocks.php?u_id=$u_id&c_id=$c_id'>";
    }
    echo "<br>";
    $q = "SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id) LEFT JOIN cc_tgroups ON (cc_tgroups.tg_id=cc_ctracks.tg_id) WHERE t_bad=0 $cond_c";
    $r = mysql_query($q);
    show_mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      $p1 = strpos($w[t_folder], "/");
      $fld = substr($w[t_folder], $p1+1);
      $fld .= "/";
      if ($p1 == 0) $fld = "";
      $fname = $w[t_name];
      $fname = str_replace(".mp3", "", $fname);
      if ($w[tg_id]>0) echo "<img title='$w[tg_name]' height=15 src=$url_main/cquiz/images/tg$w[tg_id].png> ";
      echo "<a href='$url_main/cquiz/ptracks.php?t_id=$w[t_id]'>$fld$fname</a> (".gmdate('H:i:s', $w[t_len]).")<br>\n";
    }
  }
  
  if ($cond_c == "") {
    if ($sort == "") $sort = "cc_types.amg_id,t_works DESC";
    $q = "SELECT *,cc_types.g_name as gname FROM cc_works LEFT JOIN cc_types USING (t_id) LEFT JOIN cc_amg ON (cc_types.amg_id=cc_amg.amg_id) WHERE t_id>0 GROUP BY t_id ORDER BY $sort";
  } else {
    if ($sort == "") $sort = "cc_works.amg_id,t_works DESC";
    $q = "SELECT *,cc_types.g_name as gname,count(w_id) as cnt FROM cc_works LEFT JOIN cc_types USING (t_id) LEFT OUTER JOIN cc_amg ON (cc_works.amg_id=cc_amg.amg_id) WHERE 1=1 $cond_c GROUP BY t_id ORDER BY $sort";
  }
  //echo $q;
  $r = mysql_query($q);
  show_mysql_error();
  $n = mysql_numrows($r);
  $amg_id = -1;
  //echo "<ul><ul>";
  echo "<center><table border=1>";
  echo "<tr>";
  echo "<th>Genre</a></th>";
  echo "<th>Works</th>";
  if ($cond_c == "") echo "<th>Composers</th>";
  echo "<th>Stats</th>";
  echo "</tr>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $wa[$i] = $w;
    /*
    $r2 = mysql_query("SELECT COUNT(*) as count FROM cc_works WHERE t_id='$w[t_id]' $cond_c");
    show_mysql_error();
    $w2=mysql_fetch_array($r2);
    $r4 = mysql_query("SELECT * FROM cc_genres WHERE g_name like \"$w[t_uid]\"");
    show_mysql_error();
    $n4 = mysql_numrows($r4);
    $w4 = mysql_fetch_array($r4);
    if ($w4[g_name] != "") $r6 = mysql_query("UPDATE cc_types SET g_name='$w4[g_name]' WHERE t_uid='$w[t_uid]'");
    $r5 = mysql_query("SELECT c_id,COUNT(c_id) as count FROM cc_works WHERE t_id='$w[t_id]' GROUP BY c_id");
    show_mysql_error();
    $n5 = mysql_numrows($r5);
    if ($n4>0) {
      $w4=mysql_fetch_array($r4);
    }
    */
    if ($amg_id != $w[amg_id]) {
      echo "<tr>";
      if ($cond_c != "") {
        $r3 = mysql_query("SELECT COUNT(*) as count FROM cc_works WHERE amg_id='$w[amg_id]' $cond_c");
        show_mysql_error();
        $w3=mysql_fetch_array($r3);
      }
      echo "<td><a href='am.php?amg_id=$w[amg_id]";
      if ($c_id>0) echo "&c_id=$c_id";
      echo "'>";
      if ($w[amg_name] == "") echo "[No group]";
      echo "$w[amg_name]";
      $cnt = $w[amg_works];
      if ($cond_c != "") $cnt = $w3[count];
      echo "</a></td>";
      echo "<td>$cnt</td>";
      $amg_id = $w[amg_id];
    }
    if ($w[t_id]>0) {
      echo "<tr>";
      echo "<td>&#160;&#160;&#160;&#160;&#160;&#160;-> <a href='am.php?t_id=$w[t_id]";
      if ($c_id>0) echo "&c_id=$c_id";
      echo "'>";
      if ($w[gname] != "") echo "<font color=green>";
      echo "$w[t_uid]";
      echo "</font>";
      $cnt = $w[t_works];
      if ($w[cnt]>0) $cnt = $w[cnt];
      echo "</a>";
      echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$w[t_name]' border=0><img height=16 border=0 src=i/wikipedia.jpg></a>";
      echo "</td>";
      echo "<td>$cnt</td>";
      if ($c_id == "") echo "<td>$w[t_composers]</td>";
      //echo " <font color=gray>$w[t_amid]</font>";
      echo "<td><font color=gray>";
      echo make_perc($w[t_perc], $perc_max, $perc_min);
      echo "</font></td>";
      //show_perc($w[t_id], $cond_c, $w2[count]);
    }
  }
  echo "</table><br>These genres present an alternative tree, different from the Timeline, Graph and Tree pages of ClassClass project. <br>Green color indicates that the genre is linked to ClassClass genre. <br>Blue means that no direct linking is possible (this is usually due to either that the genre is rare, or that it is very general).";
  echo "<td>";
  show_player_i($wa);
?>
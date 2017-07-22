<?
  include "lib.php";
  $auth_necessary=1;
  include "../auth.php";

  include "style.php";
  include "menu.php";
  
  start_time();
  
  secure_variable("act");
  secure_variable("mar");
  secure_variable("mqr");
  secure_variable("an");
  secure_variable("qn");
  secure_variable("i_id");
  secure_variable("a_id");
  secure_variable("a_name");
  secure_variable("name");
  secure_variable("order");
  
  if ($act == 'new') {
    $r = mysql_query("INSERT INTO eq_isles (i_name, i_created, u_id, i_aa, i_ana, i_ap, i_at, i_ac) VALUES ('My island', NOW(), '$ua[u_id]', '-', '|', '-', '|', '-')");
    echo mysql_error();
    $i_id = mysql_insert_id();
    if ($i_id>0) die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
    exit;
  }

  if ($act == 'del') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    if ($wi[i_games]>0) die ("<font color=red>Cannot delete this island, because some games have already been played on it.</font>");
    $r = mysql_query("DELETE FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php\");</script>"); 
    exit;
  }

  if ($act == 'ef') {
    if ($name != '') {
      $r = mysql_query("UPDATE eq_isles SET i_name='$name' WHERE i_id=$i_id");
      echo mysql_error();
    }
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }

  if ($act == 'preset') {
    $r = mysql_query("UPDATE eq_isles SET i_ap='-' WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }

  if ($act == 'creset') {
    $r = mysql_query("UPDATE eq_isles SET i_ac='-' WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }

  if ($act == 'areset') {
    $r = mysql_query("UPDATE eq_isles SET i_aa='-', i_ana='|' WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }

  if ($act == 'treset') {
    $r = mysql_query("UPDATE eq_isles SET i_at='|' WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }

  if ($act == 'ec2') {
    $r = mysql_query("SELECT * FROM eq_countries");
    echo mysql_error();
    $n = mysql_numrows($r);
    $ac = "-";
    foreach ($_POST as $key => $val) $_POST[str_replace("_", " ", $key)] = $val;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if (isset($_POST[$w[a_country]])) $ac .= "$w[a_country]-";
    }
    //echo $ac;
    $r = mysql_query("UPDATE eq_isles SET i_ac='$ac' WHERE i_id=$i_id");
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if ($act == 'ec') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    echo "<form method=post action=qi.php>";
    echo "<input type=hidden name=act value=ec2>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<h3>Edit island '$wi[i_name]' filter (country):</h3>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>";
    echo "<th>Country";
    echo "<th>Authors";
    $r = mysql_query("SELECT * FROM eq_countries ORDER BY a_country");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr><td>";
      echo "<input type=checkbox name='$w[a_country]'";
      if ($wi[bc][$w[a_country]]) echo "checked";
      echo ">";
      echo "<td><a target=_blank href=\"authors.php?country=$w[a_country]\">$w[a_country]";
      echo "<td>$w[a_cnt]";
    }
    echo "</table>";
    echo "<p><input type=submit>";
    stop_time();
    exit;
  }

  if ($act == 'et2') {
    $r = mysql_query("SELECT * FROM eq_tags");
    echo mysql_error();
    $n = mysql_numrows($r);
    $at = "|";
    //foreach ($_POST as $key => $val) echo "$key<br>";
    foreach ($_POST as $key => $val) $_POST[str_replace("_", " ", $key)] = $val;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if (isset($_POST[$w[t_name]])) $at .= "$w[t_name]|";
    }
    //echo $at;
    $at = mysql_real_escape_string($at);
    $r = mysql_query("UPDATE eq_isles SET i_at='$at' WHERE i_id=$i_id");
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if ($act == 'et') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    echo "<form method=post action=qi.php>";
    echo "<input type=hidden name=act value=et2>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<h3>Edit island '$wi[i_name]' filter (tags):</h3>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>";
    echo "<th>Tag";
    echo "<th>Quotes";
    $r = mysql_query("SELECT * FROM eq_tags ORDER BY t_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr><td>";
      echo "<input type=checkbox name=\"$w[t_name]\"";
      if ($wi[bt][$w[t_name]]) echo "checked";
      echo ">";
      echo "<td><a target=_blank href=\"works.php?tag=$w[t_name]\">$w[t_name]";
      if ($w[t_rating]<10) echo " <img title='Popular' src=i/brainyquote.png height=15>";
      echo "<td>$w[q_cnt]";
    }
    echo "</table>";
    echo "<p><input type=submit>";
    stop_time();
    exit;
  }

  if ($act == 'ep2') {
    $r = mysql_query("SELECT * FROM eq_types");
    echo mysql_error();
    $n = mysql_numrows($r);
    $at = "-";
    //foreach ($_POST as $key => $val) echo "$key<br>";
    foreach ($_POST as $key => $val) $_POST[str_replace("_", " ", $key)] = $val;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if (isset($_POST[$w[a_type]])) $at .= "$w[a_type]-";
    }
    //echo $at;
    $at = mysql_real_escape_string($at);
    $r = mysql_query("UPDATE eq_isles SET i_ap='$at' WHERE i_id=$i_id");
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if ($act == 'ep') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    echo "<form method=post action=qi.php>";
    echo "<input type=hidden name=act value=ep2>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<h3>Edit island '$wi[i_name]' filter (profession):</h3>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>";
    echo "<th>Profession";
    echo "<th>Authors";
    $r = mysql_query("SELECT * FROM eq_types WHERE a_type != '' ORDER BY a_group, a_type");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if ($w[a_group] != $old_group) {
        $old_group = $w[a_group];
        echo "<tr><td bgcolor=#ffffbb colspan=3><b><center>$w[a_group]";
      }
      echo "<tr><td>";
      echo "<input type=checkbox name=\"$w[a_type]\"";
      if ($wi[bp][$w[a_type]]) echo "checked";
      echo ">";
      echo "<td><a target=_blank href=\"authors.php?type=$w[a_type]\">$w[a_type]";
      //if ($w[t_rating]<10) echo " <img title='Popular' src=i/brainyquote.png height=15>";
      echo "<td>$w[a_cnt]";
    }
    echo "</table>";
    echo "<p><input type=submit>";
    stop_time();
    exit;
  }

  if ($act == 'ea2') {
    $at = "-";
    $an = "|";
    for ($i=0; $i<30000; $i++) {
      if (isset($_POST["a$i"])) {
        $at .= "$i-";
        $r = mysql_query("SELECT a_name FROM eq_authors WHERE a_id=$i");
        echo mysql_error();
        $w = mysql_fetch_assoc($r);
        $an .= "$w[a_name]|";
      }
    }
    //echo $at;
    //echo $an;
    $at = mysql_real_escape_string($at);
    $r = mysql_query("UPDATE eq_isles SET i_aa='$at', i_ana=\"$an\" WHERE i_id=$i_id");
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if ($act == 'ea') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    // Conditions
    if ($wi[nc]>0) {
      for ($x=1; $x<$wi[nc]+1; $x++) {
        if ($x>1) $acond .= ",";
        $acond .= '"'.$wi[ac][$x].'"';
      }
      $cond .= "AND a_country IN ($acond) ";
    }
    if ($wi[np]>0) {
      for ($x=1; $x<$wi[np]+1; $x++) {
        if ($x>1) $pcond .= ",";
        $pcond .= '"'.$wi[ap][$x].'"';
      }
      $cond .= "AND a_type IN ($pcond) ";
    }
    $q = "SELECT * FROM eq_authors WHERE 1=1 $cond ORDER BY a_rating LIMIT 1000";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<form method=post action=qi.php>";
    echo "<input type=hidden name=act value=ea2>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<h3>Edit island '$wi[i_name]' filter (authors):</h3>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    $saved = "type=$type&group=$group&country=$country&";
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
      echo "<input type=checkbox name=a$w[a_id]";
      if ($wi[ba][$w[a_id]]) echo " checked";
      echo "> ";
      echo "<a target=_blank href=authors.php?a_id=$w[a_id]>";
      if ($w[a_desc] != "") echo "<font color=green>";
      echo "$w[a_name]</font></a>";
      echo "<td>";
      if (($w[a_year1] > 0) || ($w[a_year2] > 0)) echo "$w[a_year1]-";
      if ($w[a_year2] != 0) echo $w[a_year2];
      echo "<td>$w[a_country]";
      echo "<td><a target=_blank href=authors.php?type=$w[a_type]>$w[a_type]";
      echo "<td>$w[a_quotes]";
      echo "<td>$w[a_rating]";
    }
    echo "</table>";
    echo "<p><input type=submit>";
    echo "<p>Authors are filtered by country and profession filters of the island";
    stop_time();
    exit;
  }

  if ($act == 'aadd') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    if (strpos($a_name, "%") === false) $search = "%$a_name%";
    else $search = "$a_name";
    $q = "SELECT * FROM eq_authors WHERE a_name LIKE '$search' ORDER BY a_rating LIMIT 1000";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<form method=get action=qi.php>";
    echo "<h3>Search and add author to island '$wi[i_name]': ";
    echo "<input type=hidden name=act value=aadd>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<input name=a_name value=\"$a_name\"> ";
    echo "<input type=submit>";
    echo "</form>";
    echo "</h3><table border=1 cellpadding=3 style='border-collapse: collapse;'>";
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
      echo "<a href=\"qi.php?act=aadd2&i_id=$i_id&a_id=$w[a_id]&a_name=$w[a_name]\"><img src=i/plus.png height=15></a> ";
      echo "<a target=_blank href=authors.php?a_id=$w[a_id]>";
      if ($w[a_desc] != "") echo "<font color=green>";
      echo preg_replace("/($a_name)/i", "<font color=orange>$1</font>", $w[a_name])."</font></a>";
      echo "<td>";
      if (($w[a_year1] > 0) || ($w[a_year2] > 0)) echo "$w[a_year1]-";
      if ($w[a_year2] != 0) echo $w[a_year2];
      echo "<td>$w[a_country]";
      echo "<td><a target=_blank href=authors.php?type=$w[a_type]>$w[a_type]";
      echo "<td>$w[a_quotes]";
      echo "<td>$w[a_rating]";
    }
    echo "</table>";
    stop_time();
    exit;
  }
  
  if ($act == 'aadd2') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    if (strpos($wi[i_aa], "-$a_id-") === false) {
      $wi[i_aa] .= "$a_id-";
      $wi[i_ana] .= "$a_name|";
    }
    $r = mysql_query("UPDATE eq_isles SET i_aa='$wi[i_aa]', i_ana=\"$wi[i_ana]\" WHERE i_id=$i_id");
    echo mysql_error();
    //exit;
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if ($act == 'adel') {
    $r = mysql_query("SELECT * FROM eq_isles WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    //echo "$wi[i_aa] $wi[i_ana]<br>";
    $wi[i_aa] = str_replace("-$a_id-", "-", $wi[i_aa]);
    $wi[i_ana] = str_replace("|$a_name|", "|", $wi[i_ana]);
    //echo "$wi[i_aa] $wi[i_ana]<br>";
    //exit;
    $r = mysql_query("UPDATE eq_isles SET i_aa='$wi[i_aa]', i_ana=\"$wi[i_ana]\" WHERE i_id=$i_id");
    echo mysql_error();
    die ("<script language=\"javascript\">location.replace(\"qi.php?i_id=$i_id&act=edit\");</script>"); 
  }
  
  if (($act == 'edit') && ($i_id>0)) {
    $r = mysql_query("SELECT * FROM eq_isles LEFT JOIN cc_users USING (u_id) WHERE i_id=$i_id");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    load_isle();
    echo "<h3>Edit island '$wi[i_name]':</h3>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<td>";
    echo "Name:";
    echo "<td>";
    echo "<form method=get action=qi.php>";
    echo "<input type=hidden name=act value=ef>";
    echo "<input type=hidden name=i_id value=$wi[i_id]>";
    echo "<input ";
    if (!$wi[editable]) echo "disabled ";
    echo "name=name value='$wi[i_name]' size=50> ";
    if ($wi[editable]) echo "<input type=submit>";
    echo "</form>";
    // Show countries
    echo "<tr>";
    echo "<td>";
    if ($wi[editable]) echo "<a href=qi.php?act=ec&i_id=$wi[i_id]>";
    echo "Countries";
    if ($wi[na] > 0) $col = "#ffbbbb";
    echo "<td bgcolor=$col>";
    if ($wi[nc] == 0) echo "All";
    for ($x=1; $x<$wi[nc]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=\"authors.php?country={$wi[ac][$x]}\">{$wi[ac][$x]}</font></a>";
    }
    if ($wi[editable]) echo "<td title='Clear filter' valign=top><a onclick='return confirm(\"Do you really want to clear country filter from this island?\")' href=qi.php?act=creset&i_id=$wi[i_id]><img src=i/clear.png height=15></a>";
    //if ($wi[editable]) echo "<td><a href=qi.php?act=ec&i_id=$wi[i_id]><img src=i/edit.png height=15></a>";
    // Show professions
    echo "<tr>";
    echo "<td>";
    if ($wi[editable]) echo "<a href=qi.php?act=ep&i_id=$wi[i_id]>";
    echo "Professions";
    echo "<td bgcolor=$col>";
    if ($wi[np] == 0) echo "All";
    for ($x=1; $x<$wi[np]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=\"authors.php?type={$wi[ap][$x]}\">{$wi[ap][$x]}</font></a>";
    }
    if ($wi[editable]) echo "<td title='Clear filter' valign=top><a onclick='return confirm(\"Do you really want to clear professions filter from this island?\")' href=qi.php?act=preset&i_id=$wi[i_id]><img src=i/clear.png height=15></a>";
    //if ($wi[editable]) echo "<td><a href=qi.php?act=ep&i_id=$wi[i_id]><img src=i/edit.png height=15></a>";
    // Show authors
    echo "<tr>";
    echo "<td>";
    if ($wi[editable]) echo "<a href=qi.php?act=ea&i_id=$wi[i_id]>";
    echo "Authors</a> ";
    if ($wi[editable]) echo "<a title='Add author' target=_blank onclick='r=prompt(\"Search author by name:\", \"\"); window.open(\"qi.php?act=aadd&i_id=$wi[i_id]&a_name=\"+r, \"_self\"); return false' href=#><img src=i/plus.png height=15></a>";
    echo "<td>";
    if ($wi[na] == 0) echo "All";
    for ($x=1; $x<$wi[na]+1; $x++) {
      if ($x>1) echo "<br>";
      echo " <a href=authors.php?a_id={$wi[aa][$x]}>{$wi[an][$x]}</font></a>";
      echo " <a onclick='return confirm(\"Do you really want to delete author {$wi[an][$x]} from this island?\")' href=\"qi.php?act=adel&i_id=$wi[i_id]&a_id={$wi[aa][$x]}&a_name={$wi[an][$x]}\"><img src=i/cross.png height=15></a>";
    }
    if ($wi[editable]) echo "<td title='Clear filter' valign=top><a onclick='return confirm(\"Do you really want to clear authors filter from this island?\")' href=qi.php?act=areset&i_id=$wi[i_id]><img src=i/clear.png height=15></a>";
    //if ($wi[editable]) echo "<td><a href=qi.php?act=ea&i_id=$wi[i_id]><img src=i/edit.png height=15></a>";
    // Show tag
    echo "<tr>";
    echo "<td>";
    if ($wi[editable]) echo "<a href=qi.php?act=et&i_id=$wi[i_id]>";
    echo "Tags";
    echo "<td>";
    if ($wi[nt] == 0) echo "All";
    for ($x=1; $x<$wi[nt]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=\"works.php?tag={$wi[at][$x]}\">{$wi[at][$x]}</font></a>";
    }
    if ($wi[editable]) echo "<td title='Clear filter' valign=top><a onclick='return confirm(\"Do you really want to clear tags filter from this island?\")' href=qi.php?act=treset&i_id=$wi[i_id]><img src=i/clear.png height=15></a>";
    //if ($wi[editable]) echo "<td><a href=qi.php?act=et&i_id=$wi[i_id]><img src=i/edit.png height=15></a>";
    echo "<tr><td>";
    echo "<b>Difficulty";
    echo "<td>";
    // Conditions
    if ($wi[na]>0) {
      for ($x=1; $x<$wi[na]+1; $x++) {
        if ($x>1) $acond .= ",";
        $acond .= '"'.$wi[aa][$x].'"';
      }
      $cond .= "AND eq_authors.a_id IN ($acond) ";
    } else {
      if ($wi[nc]>0) {
        for ($x=1; $x<$wi[nc]+1; $x++) {
          if ($x>1) $ccond .= ",";
          $ccond .= '"'.$wi[ac][$x].'"';
        }
        $cond .= "AND a_country IN ($ccond) ";
      }
      if ($wi[np]>0) {
        for ($x=1; $x<$wi[np]+1; $x++) {
          if ($x>1) $pcond .= ",";
          $pcond .= '"'.$wi[ap][$x].'"';
        }
        $cond .= "AND a_type IN ($pcond) ";
      }
    }
    if ($wi[nt]>0) {
      for ($x=1; $x<$wi[nt]+1; $x++) {
        if ($x>1) $tcond .= ",";
        $tcond .= '"'.$wi[at][$x].'"';
      }
      $cond .= "AND t_name IN ($tcond) ";
    }
    $q = "SELECT a_rating, COUNT(DISTINCT(eq_authors.a_id)) as acnt FROM eq_authors 
      LEFT JOIN eq_atags USING (a_id)
      WHERE 1=1 $cond GROUP BY a_rating";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    //stop_time();
    echo "How many authors to play:";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'><tr>";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $acnt += $w[acnt];
      echo "<td";
      if ($mar == $w[a_rating]) echo " bgcolor=#ffee99";
      echo "><a href=qi.php?act=edit&i_id=$i_id&mar=$w[a_rating]&an=$acnt>$acnt";
    }
    if ($acnt>0) {
      mysql_query("UPDATE eq_isles SET i_anum='$acnt' WHERE i_id='$i_id'");
      echo mysql_error();
    }
    echo "</table>";
    // Min r
    $q = "SELECT MAX(a_minr) as minr FROM eq_authors LEFT JOIN eq_atags USING (a_id) WHERE 1=1 $cond";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $w9 = mysql_fetch_assoc($r);
    //echo "Detected minr: $w9[minr]<br>";
    // Quotes
    if (strlen($wi[i_at])>1) {
      $q = "SELECT q_rating, COUNT(*) as qcnt FROM 
        (SELECT q_rating, q_id FROM eq_quotes 
        LEFT JOIN eq_qtags USING (q_id) 
        LEFT JOIN eq_authors ON (eq_authors.a_id=eq_quotes.a_id) 
        WHERE a_rating<='$mar' $cond 
        GROUP BY q_id) q
        GROUP BY q_rating";
    } else {
      $q = "SELECT q_rating, COUNT(*) as qcnt FROM eq_quotes 
        LEFT JOIN eq_authors ON (eq_authors.a_id=eq_quotes.a_id) 
        WHERE a_rating<='$mar' $cond GROUP BY q_rating";
    }
    //stop_time();
    //echo "$q<br>";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    if ($mar > 0) echo "How many quotes to play from these authors:";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'><tr>";
    $x=0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      /*
      $r2 = mysql_query("SELECT COUNT(DISTINCT eq_quotes.a_id) as acnt FROM eq_quotes 
        LEFT JOIN eq_authors ON (eq_authors.a_id=eq_quotes.a_id) 
        WHERE a_rating<='$mar' AND q_rating<='$w[q_rating]' $cond");
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      */
      $qcnt += $w[qcnt];
      if ((($qcnt<10) || ($w[q_rating] < $w9[minr])) && ($i < $n-1)) continue;
      if (($x % 16) == 0) echo "<tr>";
      echo "<td";
      if ($mqr == $w[q_rating]) echo " bgcolor=#ffee99";
      echo "><center><a style='display:block; width:100%' href=qquiz.php?act=reset&i_id=$i_id&mar=$mar&mqr=$w[q_rating]&an=$an&qn=$qcnt>$qcnt";
      $x++;
    }
    //stop_time();
    // Total quotes
    if (strlen($wi[i_at])>1) {
      $q = "SELECT COUNT(DISTINCT q_id) as qcnt FROM eq_quotes 
        LEFT JOIN eq_qtags USING (q_id) 
        LEFT JOIN eq_authors ON (eq_authors.a_id=eq_quotes.a_id) 
        WHERE 1=1 $cond";
    } else {
      $q = "SELECT COUNT(*) as qcnt FROM eq_quotes 
        LEFT JOIN eq_authors ON (eq_authors.a_id=eq_quotes.a_id) 
        WHERE 1=1 $cond";
    }
    //echo "$q<br>";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    //stop_time();
    // Update quote stats
    mysql_query("UPDATE eq_isles SET i_qnum='$w[qcnt]' WHERE i_id='$i_id'");
    echo mysql_error();
    echo "</table>";
    echo "<tr><td>";
    echo "Played: ";
    echo "<td>";
    echo "$wi[i_games]";
    echo "<tr><td>";
    echo "Created: ";
    echo "<td>";
    echo "$wi[i_created] by $wi[u_name]";
    echo "</table>";
    echo "<p>If authors are selected, then country and profession filters are not used for quote selection";
    stop_time();
    exit;
  }
  
  echo "<p><a href=qi.php?act=new>Create new quotes island</a>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Creator";
  echo "<th><a href='qi.php?order=i_name'>Island";
  echo "<th><a href='qi.php?order=i_anum desc'>Authors";
  echo "<th><a href='qi.php?order=i_qnum desc'>Quotes";
  echo "<th><a href='qi.php?order=i_games desc'>Played";
  echo "<th>";
  if ($order == '') $order = "i_games desc";
  $r = mysql_query("SELECT * FROM eq_isles LEFT JOIN cc_users USING (u_id) ORDER BY $order");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wi = mysql_fetch_assoc($r);
    load_isle();
    echo "<tr>";
    echo "<td>$wi[u_name]";
    echo "<td>";
    /*
    // Show authors
    echo "Authors: ";
    if ($wi[na] == 0) echo "All";
    for ($x=1; $x<$wi[na]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=authors.php?a_id={$wi[aa][$x]}>{$wi[an][$x]}</font></a>";
    }
    // Show countries
    echo "<br>Countries: ";
    if ($wi[nc] == 0) echo "All";
    for ($x=1; $x<$wi[nc]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=authors.php?country={$wi[ac][$x]}>{$wi[ac][$x]}</font></a>";
    }
    // Show professions
    echo "<br>Professions: ";
    if ($wi[np] == 0) echo "All";
    for ($x=1; $x<$wi[np]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=authors.php?type={$wi[ap][$x]}>{$wi[ap][$x]}</font></a>";
    }
    // Show tag
    echo "<br>Tags: ";
    if ($wi[nt] == 0) echo "All";
    for ($x=1; $x<$wi[nt]+1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=\"works.php?tag={$wi[at][$x]}\">{$wi[at][$x]}</font></a>";
    }
    */
    echo "<a href=qi.php?act=edit&i_id=$wi[i_id]>$wi[i_name]</a>";
    echo "<td><center>$wi[i_anum]";
    echo "<td><center>$wi[i_qnum]";
    echo "<td><center>$wi[i_games]";
    echo "<td>";
    //echo "<a href=qi.php?act=edit&i_id=$wi[i_id]><img src=i/edit.png height=15></a>";
    if ($wi[editable]) echo " <a onclick='return confirm(\"Do you really want to delete island $wi[i_name]?\")' href=qi.php?act=del&i_id=$wi[i_id]><img src=i/cross.png height=15></a>";
    
  }
  echo "</table>";
  stop_time();
?>
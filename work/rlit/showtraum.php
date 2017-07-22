<?
  // This is traum mapper
  include "../mysql.php";
  include "style.php";
  include "lib.php";
  
  $activated = 1;

  secure_variable('act');
  secure_variable('confirm');
  secure_variable('tr_id');
  secure_variable('a_id');
  secure_variable('tr_wid');
  secure_variable('a_name');
  secure_variable('b_name');
  secure_variable('w_id');
  secure_variable('rq_id');
  
  function show_footer() {
    echo "<hr>";
    echo "<p>After adding authors you will need to:";
    echo "<li>Sync with Google knowledge graph (load-gkg.php)";
    echo "<p>After adding works you will need to:";
    echo "<li> Create copy-traum2.bat (copy-traum2.php)";
    echo "<li> Run copy-traum2.bat at traum library";
    echo "<li> Copy extracted files into traum folder of both work and main folders";
    echo "<li> Load files into database (finish-traum.php)";
    echo "<li> Update encodings and ratings (count-stat.php)";
    exit;
  }
  start_time();
  
  if ($act == 'work') {
    $q = "SELECT * FROM tr_bookanno LEFT JOIN tr_books USING (tr_wid) 
      LEFT JOIN tr_authors USING (tr_id) 
      WHERE tr_wid=$tr_wid";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if ($i == 0) {
        echo "Author: $w[tr_name]<br>";
        echo "Book: $w[b_name]<br>";
      }
      echo "<p><i>$w[b_anno]</i>";
    }
    exit;
  }

  if ($act == 'linkauthor') {
    $q = "SELECT * FROM tr_authors WHERE tr_id=$tr_id";
    $r = mysql_query($q);
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    $q = "SELECT * FROM rl_authors WHERE a_id=$a_id";
    $r = mysql_query($q);
    echo mysql_error();
    $wa = mysql_fetch_assoc($r);
    echo "Name: $wt[tr_name]<br>";
    echo "Traum id: $tr_id<br>";
    echo "Main db id: $a_id ($wa[a_name])<br>";
    echo "<p>";
    if (isset($confirm)) {
      $q = "UPDATE rl_authors SET tr_id='$tr_id' WHERE a_id='$a_id'";
      echo $q;
      if ($activated) mysql_query($q);
      echo mysql_error();
    } else {
      echo "Looks good? <a href=showtraum.php?confirm=1&act=linkauthor&confirm=1&tr_id=$tr_id&a_id=$a_id>Confirm</a>";
    }
    exit;
  }
  
  if ($act == 'addauthor') {
    $q = "SELECT * FROM tr_authors WHERE tr_id=$tr_id";
    $r = mysql_query($q);
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // Build name
    $name = $wt[tr_name];
    $name3 = $wt[tr_name].' '.$wt[tr_midname];
    $surname = $wt[tr_name];
    if (strpos($wt[tr_name], ',') !== false) $surname = substr($wt[tr_name], 0, strpos($wt[tr_name], ','));
    if (strpos($wt[tr_name], ', ') !== false) {
      $name = substr($wt[tr_name], strpos($wt[tr_name], ', ')+2).' '.
      $surname;
      $name3 = substr($wt[tr_name], strpos($wt[tr_name], ', ')+2).' '.$wt[tr_midname].' '.
      $surname;
    }
    $name2 = $surname;
    // Search duplicates
    $q = "SELECT * FROM rl_authors WHERE a_name LIKE '% $surname'";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    if ($n>0) $name2 = mb_substr($name, 0, 1).' '.$surname;
    echo "Name: $name<br>";
    echo "Short name: $name2<br>";
    echo "Full name: $name3<br>";
    echo "Traum id: $tr_id<br>";
    echo "Language: $wt[tr_lang]<br>";
    echo "<p>";
    if (isset($confirm)) {
      $q = "INSERT INTO rl_authors (a_name,a_name2,a_name3,tr_id,a_lang,rq_id) VALUES ('$name', '$name2', '$name3','$tr_id','$wt[tr_lang]','$rq_id')";
      echo $q;
      if ($activated) mysql_query($q);
      echo mysql_error();
    } else {
      echo "Looks good? <a href=showtraum.php?confirm=1&act=addauthor&confirm=1&tr_id=$tr_id>Confirm</a>";
    }
    exit;
  }
  
  if ($act == 'addwork') {
    $q = "SELECT * FROM tr_books LEFT JOIN tr_authors USING (tr_id) LEFT JOIN rl_authors USING (tr_id) WHERE tr_id='$tr_id' AND tr_wid='$tr_wid'";
    $r = mysql_query($q);
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // Check
    $q = "SELECT * FROM rl_works WHERE a_id='$wt[a_id]' AND w_name='$wt[b_name]'";
    $r = mysql_query($q);
    echo mysql_error();
    $wt2 = mysql_fetch_assoc($r);
    if ($wt2[tr_wid] == $tr_wid) die("<font color=red>This work already in database: $wt[b_name]</font>");
    if (($w_id)+1 == 1) $w_id='';
    echo "Book name: $wt[b_name]<br>";
    echo "Author id: $wt[a_id]<br>";
    echo "Traum author id: $tr_id<br>";
    echo "Traum book id: $tr_wid<br>";
    echo "File type: $wt[b_ext]<br>";
    echo "Language: $wt[b_lang]<br>";
    echo "Year: $wt[b_year]<br>";
    echo "Existing work id: $w_id<br>";
    echo "<p>";
    if (isset($confirm)) {
      if ($w_id != '') {
        $q = "UPDATE rl_works SET tr_wid='$tr_wid', tr_wtype='$wt[b_ext]' WHERE w_id='$w_id'";
        echo "$q<br>";
        if ($activated) mysql_query($q);
        echo mysql_error();
        $q = "UPDATE rl_works SET w_lang='$wt[b_lang]' WHERE w_id='$w_id' AND w_lang=''";
        echo "$q<br>";
        if ($activated) mysql_query($q);
        echo mysql_error();
        $q = "UPDATE rl_works SET w_years='$wt[b_year]' WHERE w_id='$w_id' AND w_years=''";
        echo "$q<br>";
        if ($activated) mysql_query($q);
        echo mysql_error();
      } else {
        $q = "INSERT INTO rl_works (a_id,w_name,tr_wid,w_lang,tr_wtype,w_years) VALUES ('$wt[a_id]', '$wt[b_name]', '$tr_wid','$wt[b_lang]','$wt[b_ext]','$wt[b_year]')";
        echo $q;
        if ($activated) mysql_query($q);
        echo mysql_error();
      }
    } else {
      echo "Looks good? <a href=showtraum.php?confirm=1&act=addwork&confirm=1&tr_id=$tr_id&tr_wid=$tr_wid&w_id=$w_id>Confirm</a>";
    }
    exit;
  }
  
  if (($act == 'showauthor') && ($tr_id != 0)) {
    $q = "SELECT * FROM tr_authors LEFT JOIN rl_authors USING (tr_id) WHERE tr_id=$tr_id";
    $r = mysql_query($q);
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    echo "<h3>";
    echo "<a href=showtraum.php>&lt;&lt;</a> ";
    echo "$wt[tr_name] ($wt[tr_lang]) [$wt[tr_class]] ";
    echo "<a href='http://en.wikipedia.org/w/index.php?search=$wt[tr_name]' target=_blank><img src=i/wiki.png height=16></a> ";
    echo "<a href='https://www.google.com/search?q=$wt[tr_name]' target=_blank><img src=i/google.png height=16></a> ";
    echo "</h3>";
    if ($wt[a_id] == 0) {
      echo "<p><font color=red>This author is not linked to main database yet.</font> <a target=_blank title='Add this author to main database' href='showtraum.php?confirm=1&act=addauthor&tr_id=$wt[tr_id]&rq_id=$rq_id' onclick='return confirm(\"Really want to create this author in main database?\");'><img src=i/plus.png height=16></a>";
      echo " <a target=_blank title='Link to existing author in main database' onclick='r=prompt(\"Existing author id:\", \"\"); window.open(\"showtraum.php?confirm=1&act=linkauthor&tr_id=$wt[tr_id]&a_id=\"+r); return false' href=#><img style='-webkit-filter: hue-rotate(180deg); filter: hue-rotate(180deg);' height=16 src=i/plus.png></a> ";
      echo "<br>";
    } else {
      echo "<p><font color=green>This author is already linked to main database (<a href=../../rlit/authors.php?a_id=$wt[a_id] target=_blank>$wt[a_name]</a>).</font><br>";
    }
    // Show similar
    $surname = $wt[tr_name];
    if (strpos($wt[tr_name], ',') !== false) $surname = substr($wt[tr_name], 0, strpos($wt[tr_name], ','));
    echo "<b>Authors in main database similar to '$surname':</b><br>";
    $q = "SELECT * FROM rl_authors WHERE a_name LIKE '%$surname%'";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    if ($n == 0) echo "Not found<br>";
    else {
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th><a href=authors.php?order=a_name>Имя";
      echo "<th><a href=authors.php?order=a_year1>Годы";
      echo "<th><a href='authors.php?order=a_country, a_year1'>Страна";
      echo "<th><a href='authors.php?order=a_prof'>Профессия";
      echo "<th><a href='authors.php?order=a_works desc'>Работ";
      echo "<th><a href='authors.php?order=a_rating desc, a_year1'>Рейтинг";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>";
        echo "<a href=showtraum.php?confirm=1&act=linkauthor&tr_id=$wt[tr_id]&a_id=$w[a_id] target=_blank><img src=i/plus.png height=16></a> ";
        echo "<a target=_blank href=../../rlit/authors.php?a_id=$w[a_id]>";
        if ($w[a_desc] != "") echo "<font color=green>";
        echo "$w[a_name]</font></a>";
        echo "<td>";
        if ($w[a_year1] != 0) {
          echo "$w[a_year1]-";
          if ($w[a_year2] != 0) echo $w[a_year2];
        }
        echo "<td>$w[a_country]";
        echo "<td>$w[a_prof]";
        echo "<td>$w[a_works]";
        echo "<td>$w[a_rating]";
      }
      echo "</table>";
    }
    // Show current works
    if ($wt[a_id] > 0) {
      echo "<p><b>Current works in main database:</b><br>";
      $r = mysql_query("SELECT * FROM rl_works WHERE a_id='$wt[a_id]' ORDER BY w_rating desc");
      echo mysql_error();
      $n = mysql_numrows($r);
      echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
      echo "<tr>";
      echo "<th>ID";
      echo "<th>Произведение";
      echo "<th>Год";
      echo "<th>Метки";
      echo "<th>Рейтинг";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_assoc($r);
        echo "<tr>";
        echo "<td>$w[w_id]";
        echo "<td>";
        if ($w[tr_wid]>0) echo "<a href='../../rlit/works.php?w_id=$w[w_id]'><img src=i/link.png height=16></a> ";
        if ($w[b_len] > 0) echo "<a href=../../rlit/works.php?w_id=$w[w_id]&act=brief><img valign=top height=16 src=i/brief.png></a> ";
        echo "<a href=../../rlit/works.php?w_id=$w[w_id]>";
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
          echo "<a href='../../rlit/works.php?tag=$w2[t_name]'>$w2[t_name]</a>";
        }
        echo "<td>$w[w_rating]";
      }
      echo "</table>";
    }
    echo "<p><b>Works in Traum database";
    //echo " (<font color=red>not all links are shown</font>);
    echo ":</b><br>";
    $r = mysql_query("SELECT *, tr_books.tr_wid as tr_wid FROM tr_books 
      LEFT JOIN rl_works ON (tr_books.tr_wid=rl_works.tr_wid) WHERE tr_id='$wt[tr_id]' ORDER BY b_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Произведение";
    echo "<th>Язык";
    echo "<th>Год";
    echo "<th>Метки";
    echo "<th>Перевод";
    echo "<th>Формат";
    echo "<th>Size (Kb)";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      if ($w[w_id]>0) echo "<a href='../../rlit/works.php?w_id=$w[w_id]'><img src=i/link.png height=16></a> ";
      if (($w[b_ext] != 'fb2') && ($w[b_ext] != 'txt')) echo "<b><font color=red>";
      if ($wt[a_id] != 0) echo " <a target=_blank title='Add this work to main database' onclick='r=prompt(\"Existing work id:\", \"\"); window.open(\"showtraum.php?confirm=1&act=addwork&tr_id=$wt[tr_id]&tr_wid=$w[tr_wid]&w_id=\"+r); return false' href=#><img src=i/plus.png height=16></a> ";
      echo "<a href='?act=work&tr_wid=$w[tr_wid]'>$w[b_name]";
      echo "<td>$w[b_lang]";
      echo "<td>$w[b_year]";
      echo "<td>";
      $r2 = mysql_query("SELECT * FROM tr_booktags WHERE tr_wid='$w[tr_wid]' ORDER BY t_name");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        echo "$w2[t_name]";
      }
      echo "<td>$w[b_transl]";
      echo "<td>";
      if (($w[b_ext] != 'fb2') && ($w[b_ext] != 'txt')) echo "<b><font color=red>";
      echo "$w[b_ext]";
      echo "<td>".round($w[b_size]/1000);
    }
    echo "</table>";
    stop_time();
    show_footer();
  }
  
  echo "<b>Search Traum database by:</b>";
  echo "<form method=get action=showtraum.php>";
  echo "<input type=hidden name=act value=search>";
  echo "<table cellpadding=4>";
  echo "<tr>";
  echo "<td>Author name:";
  echo "<td><input size=80 name=a_name value='$a_name'>";
  echo "<tr>";
  echo "<td>Book name:";
  echo "<td><input size=80 name=b_name value='$b_name'>";
  echo "<tr>";
  echo "<td>";
  echo "<td><input type=submit>";
  echo "</table>";
  echo "</form>";
  echo "<hr>";
  if ($a_name != '') {
    if (strpos($a_name, '%') === false) $a_name2 = "%$a_name%";
    else $a_name2 = "$a_name";
    $cond .= "AND tr_name LIKE '$a_name2' ";
  }
  if ($cond != '') {
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
      echo "<a href=showtraum.php?act=showauthor&tr_id=$w[tr_id]>";
      if ($w[a_id] != 0) echo "<font color=green>";
      echo preg_replace("/($a_name2)/iu", "<font color=orange>$1</font>", $w[tr_name])."</font></a>";
      if ($w[tr_midname] != '') echo " ($w[tr_midname])";
      echo "<td>$w[tr_lang]";
      echo "<td>$w[tr_class]";
      echo "<td>$w[tr_nbook]";
      echo "<td>$w[s_id]";
    }
    echo "</table>";
    stop_time();
  } elseif ($b_name != '') { 
    $r = mysql_query("SELECT *, rl_authors.a_id as a_id FROM tr_books 
      LEFT JOIN tr_authors USING (tr_id)
      LEFT JOIN rl_authors USING (tr_id)
      LEFT JOIN rl_works ON (tr_books.tr_wid=rl_works.tr_wid)
      WHERE b_name LIKE '%$b_name%' ORDER BY b_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>Author";
    echo "<th>Nbooks";
    echo "<th>Book";
    echo "<th>Language";
    echo "<th>Format";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<a href=showtraum.php?act=showauthor&tr_id=$w[tr_id]>";
      if ($w[a_id]>0) echo "<font color=green>";
      echo "$w[tr_name]</font></a>";
      if ($w[tr_midname] != '') echo " ($w[tr_midname])";
      echo "<td>$w[tr_nbook]";
      echo "<td>";
      if ($w[w_id]>0) echo "<a href='../../rlit/works.php?w_id=$w[w_id]'><img src=i/link.png height=16></a> ";
      echo preg_replace("/($b_name)/iu", "<font color=orange>$1</font>", $w[b_name])."</font></a>";
      echo "<td>$w[b_lang]";
      echo "<td>";
      if (($w[b_ext] != 'fb2') && ($w[b_ext] != 'txt')) echo "<b><font color=red>";
      echo "$w[b_ext]";
    }
    echo "</table><br>";
    //echo "<font color=red>Not all links are shown</font>";
    stop_time();
  }
  show_footer();
?>

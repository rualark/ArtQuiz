<?
  include "../mysql.php";
  include "lib.php";
  include "style.php";

  start_time();

  $s = $_POST[s];

  if ($s != '') {
    // load names
    $r = mysql_query("SELECT * FROM ep_authors ORDER BY a_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $wa = mysql_fetch_assoc($r);
      $name = $wa[a_name];
      $sa = explode(" ", $name);
      //$name = "$sa[0] $sa[1]";
      $aname[$wa[a_id]] = trim($name);
      $awiki[$wa[a_id]] = $wa[a_wiki_id];
    }
    $sf1 = 'class="image"';
    $sf2 = 'disambiguation page';
    $sf3 = ' - Search results - Wikipedia';
    $sf4 = '<link rel="canonical" href="';
    $sf5 = '<h2><span class="mw-headline" id="Notes">';
    $sf6 = 'src="//upload.wikimedia.org/wikipedia/';
    $sf7 = '<h2><span class="mw-headline" id="References">';
    $sf8 = '<h2><span class="mw-headline" id="Sources">';
    $sf9 = '<h2><span class="mw-headline" id="External links">';
    $sf10 = '<h2><span class="mw-headline" id="Citations">';
    // Search influences
    $st = file_get_contents($s);
    $pos = 100000000;
    $pos1 = strpos($st, $sf5);
    //echo "1-".$pos1;
    if ($pos1 > 0) $pos = min($pos, $pos1);
    $pos2 = strpos($st, $sf7);
    //echo "2-".$pos2;
    if ($pos2 > 0) $pos = min($pos, $pos2);
    $pos3 = strpos($st, $sf8);
    //echo "3-".$pos3;
    if ($pos3 > 0) $pos = min($pos, $pos3);
    $pos4 = strpos($st, $sf9);
    //echo "4-".$pos4;
    if ($pos4 > 0) $pos = min($pos, $pos4);
    if ($pos === false) echo "!!!";
    $st2 = substr($st, 0, $pos);
    //file_put_contents("wiki/$wa[a_id].txt", $st2);
    $found = array();
    echo "<form action=$url_main/epquiz/authors.php method=get>";
    echo "<input type=hidden name=act value=tag>";
    foreach ($awiki as $a_id => $value) {
      $sa = explode("$value\"", $st2);
      $p = strlen($sa[0]);
      $st3 = substr($st, max(0, $p-400), 800);
      $p2 = strpos($st3, 'influenc');
      if (count($sa)>1) {
        $found[$a_id] = 1;
        $st3 = str_replace("'", "`", strip_tags($st3));
        echo "<input type=checkbox name=a$a_id> ";
        echo "<a onclick='r=prompt(\"Tag:\", \"\"); window.open(\"$url_main/epquiz/authors.php?act=tag&a$a_id=1&atag=\"+r); return false' href=# target=_blank><font color=black>tag</font></a> ";
        echo "<a title='$st3' target=_blank href='$url_main/epquiz/authors.php?a_id=$a_id'>";
        if ($p2 !== false) echo "<font color=green>";
        echo "$aname[$a_id]</font></s></font></a> ".(count($sa)-1)." ";
        $r2 = mysql_query("SELECT * FROM ep_atags LEFT JOIN ep_tdesc USING (t_name) WHERE a_id='$a_id'");
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
        echo "<br>";
      }
    }
    echo "<br>Add tag: "; // <input type=text name=atag>";
    echo "<input type=text size=40 name=atag list=bcomlist> type ";
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
    echo "</form>";
  }
  
  echo "<hr>";
  echo "<form method=post>";
  echo "Find authors in this wiki url:<br>";
  echo "<input type=text size=100 name=s value='$s'> ";
  echo "<input type=submit>";
  echo "</form>";
  
  echo "<hr>";
  stop_time();
?>
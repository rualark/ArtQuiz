<? include "../url.php"; ?>
<?
  include "../analytics.php";
  if (isset($_GET['s'])) $s=$_GET['s'];
?>
<HEADER><LINK href='css/main.css' rel='stylesheet' type='text/css'></HEADER>
<form method=get action=search.php>
<input size=20 type=text name=s value='<?=$s; ?>'>
<input type=Submit value=Search>
</form>

<?
  $mode = "mysql";
  
  if ($s == "") exit;
  $s = strtolower($s);

  if ($mode == "mysql") {
    require("mysql.php");
    if ($mysql_err != "") {
      $mode = "file";
      echo "<br>";
    }
  }
  if ($mode == "mysql") {
    $r=mysql_query("SELECT * FROM cc_genres WHERE g_name LIKE \"%$s%\" ORDER BY g_name");
    echo mysql_error();
    $n=mysql_numrows($r);
    echo "<b>Direct search results for \"$s\":</b><br>";
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      echo "<li>";
      if ($w[g_start] == 0) {
        echo "<a target=_blank href='http://en.wikipedia.org/w/index.php?search=".$w[g_name]."'><b><font color=gray>".$w[g_name]."</font></b></a>";
      } else {
        echo "<a href=desc/".str_replace(' ', '_', $w[g_name]).".php><b>".$w[g_name]."</a></b>";
      }
    }
    $r=mysql_query("SELECT * FROM cc_genres WHERE g_search LIKE \"%$s%\" ORDER BY g_name");
    echo mysql_error();
    $n=mysql_numrows($r);
    echo "<br><br><b>Full text search:</b><br>";
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      if (strpos($w[g_name], $s) !== false) continue;
      echo "<li>";
      if ($w[g_start] == 0) {
        echo "<a target=_blank href='http://en.wikipedia.org/w/index.php?search=".$w[g_name]."'><b><font color=gray>".$w[g_name]."</font></b></a>";
      } else {
        echo "<a href=desc/".str_replace(' ', '_', $w[g_name]).".php><b>".$w[g_name]."</a></b>";
      }
    }
    $r=mysql_query("SELECT * FROM cc_tracks LEFT JOIN cc_genres USING (g_name) WHERE f_name LIKE \"%$s%\" ORDER BY g_name");
    echo mysql_error();
    $n=mysql_numrows($r);
    echo "<br><br><b>Music tracks search:</b><br>";
    for ($i=0; $i<$n; $i++) {
      $w=mysql_fetch_array($r);
      if ($w[g_name] == $found) continue;
      echo "<li>";
      $found = $w[g_name];
      if ($w[g_start] == 0) {
        echo "<a target=_blank href='http://en.wikipedia.org/w/index.php?search=".$w[g_name]."'><b><font color=gray>".$w[g_name]."</font></b></a>";
      } else {
        echo "<a href=desc/".str_replace(' ', '_', $w[g_name]).".php><b>".$w[g_name]."</a></b>";
      }
    }
  } 
  if ($mode != "mysql") {
    $fa = file("genres3.txt");
    $fa2 = file("music.txt");
    $cfa = count($fa);
    $cfa2 = count($fa);

    echo "<b>Direct search results for \"$s\":</b><br>";
    for ($i=1; $i<$cfa; $i++) {
      $st = $fa[$i];
      $st2 = strtolower($st);
      $sa = explode("\t", $st);
      $sa2 = explode("\t", $st2);
      $gname_l[$i] = $sa2[2];
      $gsa[$i] = $sa;
      //echo "/".$sa[2]."/<br>";
      if ((strpos($st2, $s) !== false) && (strpos($sa2[2], $s) !== false)) {
        echo "<li>";
        if ($sa[3] == 0) {
          echo "<a target=_blank href=".$sa[16]."><b><font color=gray>".$sa[2]."</font></b></a>";
        } else {
          echo "<a href=desc/".str_replace(' ', '_', $sa[2]).".php><b>".$sa[2]."</a></b>";
        }
      }
    }

    echo "<br><br><b>Full text search:</b><br>";
    for ($i=1; $i<$cfa; $i++) {
      $st = $fa[$i];
      $st2 = strtolower($st);
      $sa = explode("\t", $st);
      $sa2 = explode("\t", $st2);
      //echo "/".$sa[2]."/<br>";
      if ((strpos($st2, $s) !== false) && (strpos($sa2[2], $s) === false)) {
        echo "<li>";
        if ($sa[3] == 0) {
          echo "<a target=_blank href=".$sa[16]."><font color=gray>".$sa[2]."</font></a>";
        } else {
          echo "<a href=desc/".str_replace(' ', '_', $sa[2]).".php>".$sa[2]."</a>";
        }
      }
    }

    echo "<br><br><b>Music tracks search:</b><br>";
    $found="";
    for ($i=0; $i<$cfa2; $i++) {
      $st = $fa2[$i];
      $st2 = strtolower($st);
      $sa = explode("\t", $st);
      $sa2 = explode("\t", $st2);
      //echo "/".$sa[2]."/<br>";
      //echo "Search ".$sa[1]."<br>";
      if ((strpos($sa2[1], $s) !== false) && ($sa2[0] != $found)) {
        $key = array_search($sa2[0], $gname_l);
        //echo "Found $key <br>";
        if ($key === false) {
          //echo "<font color=red>Error searching ".$sa2[0]."</font><br>";
          continue;
        }
        $found = $sa2[0];
        echo "<li>";
        if ($gsa[$key][3] == 0) {
          echo "<a target=_blank href=".$gsa[$key][16]."><font color=gray>".$gsa[$key][2]."</font></a>";
        } else {
          echo "<a href=desc/".str_replace(' ', '_', $gsa[$key][2]).".php>".$gsa[$key][2]."</a>";
        }
      }
    }
  }
?>
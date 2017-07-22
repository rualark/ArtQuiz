<?

  include "../qlib.php";

  function show_mysql_error() {
    //echo "<font color=red>".mysql_error()."</font><br/>";
  }
  
  function make_id($st) {
    $st2 = trim($st);
    //$st2 = str_replace(" ", "", $st2);
    //$st2 = str_replace("\t", "", $st2);
    //$st2 = str_replace("\x0B", "", $st2);
    //$st2 = str_replace("\0", "", $st2);
    $st2 = iconv("UTF-8", "cp1251//TRANSLIT", $st2);
    $st2 = str_replace("'", "", $st2);
    $st2 = str_replace("\"", "", $st2);
    return $st2;
  }
  
  function myfile($name) {
    $bn = basename($name);
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    //$ln = str_replace(".", "-", $ln);
    $ln = "cache/".$ln;
    if (file_exists($ln)) return file($ln);
    //usleep(100000);
    file_put_contents($ln, file_get_contents($name));
    return file($ln);
  }
  
  // Load composers amg id that did not work with search
  $fa3 = file("bad-comp.txt");
  for ($i=0; $i<count($fa3); $i++) {
    $st = $fa3[$i];
    $sa = explode("\t", $st);
    $bcomp[$i] = $sa[0];
    $bcomp_amid[$i] = trim($sa[1]);
  }
  // Load composers without caid
  $q = "SELECT * from cc_composers WHERE c_caid=''";
  $r = mysql_query($q);
  $n = mysql_numrows($r);
  echo mysql_error();
  $sf1 = "/composer/";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $qst = str_replace(" ", "%20", $w[c_name]);
    $fa = myfile("http://www.classicalarchives.com/search?q=$qst&x=12&y=7");
    for ($x=0; $x<count($fa); $x++) {
      $st = $fa[$x];
      $pos1 = strpos($st, $sf1);
      if ($pos1 !== false) {
        $caid = substr($st, $pos1+10);
        $caid = substr($caid, 0, strpos($caid, "."));
        echo "$w[c_name] <a href=http://www.classicalarchives.com/composer/$caid.html>$caid</a><br>";
        mysql_query("UPDATE cc_composers SET c_caid='$caid' WHERE c_id='$w[c_id]'");
        echo mysql_error();
        break;
      }
      //echo $fa[$x];
    }
    //break;
  }
  exit;
  $fa = myfile("http://www.classicalarchives.com/composers/");
  $cfa = count($fa);
  $sf1 = "class=\"item\">";
  $sf2 = "167 Notable Composers";
  $sf3 = "href=\"/composer/";
  //$r = mysql_query("TRUNCATE cc_composers");
  //$r = mysql_query("TRUNCATE cc_amg");
  //$r = mysql_query("TRUNCATE cc_types");
  //$r = mysql_query("TRUNCATE cc_works");
  //$r = mysql_query("TRUNCATE cc_clinks");
  show_mysql_error();
  for ($i=0; $i<$cfa; $i++) {
    $st = $fa[$i];
    $st = str_replace("<em>", "", $st);
    $st = str_replace("</em>", "", $st);
    //echo $st;
    if (strpos($st, $sf1) !== false) {
      $st2 = substr($st, strpos($st, $sf1)+strlen($sf1), strlen($st));
      $st2 = substr($st2, 0, strpos($st2, "<"));
      $st3 = substr($st, strpos($st, $sf3)+strlen($sf3), strlen($st));
      $c_caid = substr($st3, 0, strpos($st3, ".html\""));
      $first_par = strpos($st2, "(");
      if ($st2[$first_par+1] != strtolower($st2[$first_par+1])) {
        $start = $first_par+1;
      } else {
        $start = 0;
      }
      $c_name = substr($st2, 0, strpos($st2, "(", $start)-1);
      $c_years = substr($st2, strpos($st2, "(", $start)+1, strlen($st2));
      $c_name = str_replace("'", "", $c_name);
      $c_name2 = $c_name;
      if (strpos($c_name, ",")>0) $c_name2 = substr($c_name, strpos($c_name, ",")+2, strlen($c_name))." ".substr($c_name, 0, strpos($c_name, ","));
      $c_years = substr($c_years, 0, strpos($c_years, ")"));
      $c_start = $c_years;
      $c_stop = "";
      if ($c_start[0] == d) {
        $c_stop = $c_start;
        $c_start = "";
      }
      while ((!is_numeric($c_start[0])) && (strlen($c_start)>1)) $c_start = substr($c_start, 1, strlen($c_start));
      if (strpos($c_years, "-") !== false) {
        $c_start = substr($c_start, 0, strpos($c_start, "-"));
        $c_stop = substr($c_years, strpos($c_years, "-")+1, strlen($c_years));
      }
      while ((!is_numeric($c_stop[0])) && (strlen($c_stop)>1)) $c_stop = substr($c_stop, 1, strlen($c_stop));
      if (strpos($c_start, "th c.")>0) {
        $c_start = str_replace("th c.", "00", $c_start);
        $c_start -= 100;
      }
      if (strpos($c_stop, "th c.")>0) {
        $c_stop = str_replace("th c.", "00", $c_stop);
        $c_stop -= 100;
      }
      $c_country = "";
      if (strpos($st2, ";") !== false) {
        $c_country = substr($st2, strpos($st2, ";")+2, strlen($st2));
      }
      $fa2 = myfile("http://www.allmusic.com/search/all/".str_replace(" ", "%20", $c_name2));
      $cfa2 = count($fa2);
      $sf10 = "href=\"/artist/";
      $sf11 = "class=\"thumbnail sm artist\"";
      $c_amid = "";
      for ($x=0; $x<$cfa2; $x++) {
        $st4 = $fa2[$x];
        //echo $st4;
        if (strpos($st4, $sf11) !== false) {
          $st4 = $fa2[$x+1];
          //echo "*$st4*";
          $c_amid = substr($st4, strpos($st4, $sf10)+strlen($sf10), strlen($st4));
          $c_amid = substr($c_amid, 0, strpos($c_amid, "\""));
          //echo "/$c_amid/<br>";
          break;
        }
      }
      $key = array_search($c_name, $bcomp);
      if ($key !== false) {
        $bcomp_used[$key] = 1;
        $c_amid = $bcomp_amid[$key];
        echo "Bad comp used $c_name/$c_amid<br>";
      }
      $r = mysql_query("INSERT INTO cc_composers VALUES('','$c_name','$c_start','$c_stop','$c_country','$c_caid','$c_years','$c_amid','$c_name2','','')");
      if ($c_amid == "") continue;
      $c_id = mysql_insert_id();
      show_mysql_error();
      // Read compositions
      $path = "http://www.allmusic.com/artist/".$c_amid."/compositions";
      //echo "$path<br>";
      $fa2 = myfile($path);
      $cfa2 = count($fa2);
      $sf20 = "href=\"http://www.allmusic.com/composition/";
      $sf21 = "td class=\"genre third_link\"";
      $sf22 = "td class=\"work_type\"";
      $sf23 = "href=\"http://www.allmusic.com/subgenre/";
      $sf24 = "td class=\"year\"";
      $sf25 = "span itemprop=\"name\">";
      $t_id = 0;
      $amg_id = 0;
      $c_name3 = "";
      for ($x=0; $x<$cfa2; $x++) {
        $st4 = $fa2[$x];
        //if ($c_name == "Piazzolla, Astor") echo $st4;
        //echo $st4;
        if (strpos($st4, $sf20) !== false) {
          $st5 = substr($st4, strpos($st4, $sf20)+strlen($sf20), strlen($st4));
          $w_name = substr($st5, strpos($st5, ">")+1, strlen($st5));
          $w_name = substr($w_name, 0, strpos($w_name, "<"));
          $w_amid = substr($st5, 0, strpos($st5, "\""));
        }
        if (strpos($st4, $sf21) !== false) {
          $st5 = $fa2[$x+1];
          $st5 = substr($st5, strpos($st5, $sf23)+strlen($sf23), strlen($st5));
          $amg_name = substr($st5, strpos($st5, ">")+1, strlen($st5));
          $amg_name = substr($amg_name, 0, strpos($amg_name, "<"));
          $amg_amid = substr($st5, 0, strpos($st5, "\""));
          $amg_id = 0;
          if ($amg_name != "") {
            $amg_name = str_replace(" Music", "", $amg_name);
            $r = mysql_query("INSERT INTO cc_amg VALUES('',\"$amg_name\",'$amg_amid','','')");
            show_mysql_error();
            $r = mysql_query("SELECT * FROM cc_amg WHERE amg_amid = '$amg_amid'");
            $w=mysql_fetch_array($r);
            $amg_id = $w[amg_id];
          }
        }
        if (strpos($st4, $sf22) !== false) {
          $st5 = $fa2[$x+1];
          $st5 = substr($st5, 0, strpos($st5, "<"));
          $t_name = trim($st5);
          $t_id = 0;
          if ($t_name != "") {
            $t_uid = make_id($t_name);
            $r = mysql_query("INSERT INTO cc_types VALUES('',\"$t_name\",'$amg_id','','$t_uid','','','')");
            show_mysql_error();
            $t_id = mysql_insert_id();
            $r = mysql_query("SELECT * FROM cc_types WHERE t_name = \"$t_name\"");
            show_mysql_error();
            $w=mysql_fetch_array($r);
            $t_id = $w[t_id];
          }
        }
        if (strpos($st4, $sf24) !== false) {
          $st5 = $fa2[$x+1];
          $st5 = substr($st5, 0, strpos($st5, "<"));
          $w_year = trim($st5);
          $w_year = str_replace("?", "0", $w_year);
          echo "$w_amid/$w_name/$amg_name/$amg_amid/$t_name/$w_year/<br>";
          $r = mysql_query("INSERT INTO cc_works VALUES('',\"$w_name\",'$amg_id','$c_id',0,'$t_id','$w_amid','$w_year')");
          show_mysql_error();
          // Write composers name3
          $r = mysql_query("UPDATE cc_composers SET c_name3='$c_name3' WHERE c_id=$c_id");
          show_mysql_error();
        }
        if (strpos($st4, $sf25) !== false) {
          $st5 = substr($st4, strpos($st4, $sf25)+strlen($sf25), strlen($st4));
          $c_name3 = substr($st5, 0, strpos($st5, "<"));
          //echo "CNAME: $st4/$st5/$c_name3<br>";
          $c_name3 = str_replace("'", "", $c_name3);
        }
      }
      // Read clinks
      $path = "http://www.allmusic.com/artist/".$c_amid."/related";
      //echo "$path<br>";
      $fa2 = myfile($path);
      $cfa2 = count($fa2);
      $sf30 = "<h2>similar</h2>";
      $sf31 = "<h2>influenced by</h2>";
      $sf32 = "<h2>followers</h2>";
      $sf33 = "class=\"secondary_link\"";
      $sf34 = "href=\"http://www.allmusic.com/artist/";
      $relation = 0;
      for ($x=0; $x<$cfa2; $x++) {
        $st4 = $fa2[$x];
        if (strpos($st4, $sf30) !== false) {
          $relation = 1;
        }
        if (strpos($st4, $sf31) !== false) {
          $relation = 2;
        }
        if (strpos($st4, $sf32) !== false) {
          $relation = 3;
        }
        if (strpos($st4, $sf33) !== false) {
          $st5 = $fa2[$x+1];
          $st5 = substr($st5, strpos($st5, $sf34)+strlen($sf34), strlen($st5));
          $c_amid2 = substr($st5, 0, strpos($st5, "\""));
          echo "CLink: $c_amid/$c_amid2/$relation/<br>";
          $r = mysql_query("INSERT INTO cc_clinks VALUES('','$c_id',0,'$c_amid2','$relation')");
          show_mysql_error();
        }
      }
      echo "$st2/$c_name/$c_name2/$c_name3/$c_caid/$c_years/$c_start/$c_stop/$c_country/$c_amid/<br>";
    }
    //if ($c_id>2) break;
    if (strpos($st, $sf2) !== false) break;
  }
  // Delete composers, that were not found
  $r = mysql_query("DELETE FROM cc_composers WHERE c_name3=''");
  show_mysql_error();
  // Delete works, that belong to non-existent composers
  $r = mysql_query("SELECT * FROM cc_works LEFT JOIN cc_composers USING (c_id)");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    if ($w[c_name] == "") {
      echo "Bad work $w[c_id] $w[w_name]<br>";
      $r2 = mysql_query("DELETE FROM cc_works WHERE w_id='$w[w_id]'");
      show_mysql_error();
    }
  }
  // Set c_id2
  $r = mysql_query("SELECT * FROM cc_clinks LEFT JOIN cc_composers ON (cc_clinks.c_amid2=cc_composers.c_amid)");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    //$r = mysql_query("SELECT * FROM cc_composers WHERE c_amid = '$c_amid2'");
    //show_mysql_error();
    //$w=mysql_fetch_array($r);
    //$c_id2 = $w[c_id];
    $r2 = mysql_query("UPDATE cc_clinks SET c_id2='$w[c_id]' WHERE cl_id='$w[cl_id]'");
    show_mysql_error();
  }
  // Count stats
  $r = mysql_query("SELECT amg_id,count(*) as count FROM cc_works GROUP BY amg_id");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_amg SET amg_works='$w[count]' WHERE amg_id='$w[amg_id]'");
    show_mysql_error();
  }
  $r = mysql_query("SELECT c_id,count(*) as count FROM cc_works GROUP BY c_id");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_composers SET c_works='$w[count]' WHERE c_id='$w[c_id]'");
    show_mysql_error();
  }
  $r = mysql_query("SELECT t_id,count(*) as count FROM cc_works GROUP BY t_id");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_types SET t_works='$w[count]' WHERE t_id='$w[t_id]'");
    show_mysql_error();
    // Count perc
    $r7 = mysql_query("SELECT *,count(*) as cnt FROM cc_works LEFT JOIN cc_amg USING (amg_id) WHERE t_id='$w[t_id]' GROUP BY amg_id ORDER BY cnt DESC,amg_name");
    show_mysql_error();
    $n7 = mysql_numrows($r7);
    $st = "";
    for ($x=0; $x<$n7; $x++) {
      $w7 = mysql_fetch_array($r7);
      if ($w7[amg_name] != "") $st .= "\n$w7[amg_name] [".(round($w7[cnt]/$w[count]*100))."%]";
      if ($x==0) {
        $r8 = mysql_query("UPDATE cc_types SET amg_id='$w7[amg_id]' WHERE t_id='$w[t_id]'");
        show_mysql_error();
      }
    }
    $r8 = mysql_query("UPDATE cc_types SET t_perc=\"$st\" WHERE t_id='$w[t_id]'");
  }
  $r = mysql_query("SELECT t_id,count(distinct(c_id)) as count FROM cc_works LEFT JOIN cc_composers USING (c_id) GROUP BY t_id");
  show_mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $r2 = mysql_query("UPDATE cc_types SET t_composers='$w[count]' WHERE t_id='$w[t_id]'");
    show_mysql_error();
  }
  // Make links
  $fa = file("glinks.txt");
  $c = 0;
  for ($i=0; $i<count($fa); $i++) {
    $sa = explode("\t", trim($fa[$i]));
    $ga = explode(",", $sa[1]);
    for ($x=0; $x<count($ga); $x++) {
      $r = mysql_query("UPDATE cc_types SET g_name='$sa[0]' WHERE t_uid like '$ga[$x]'");
    }
  }
  $q = "SELECT * FROM cc_works LEFT JOIN cc_types USING (t_id) LEFT JOIN cc_amg ON (cc_types.amg_id=cc_amg.amg_id) WHERE t_id>0 GROUP BY t_id ORDER BY cc_types.amg_id,t_works DESC";
  $r = mysql_query($q);
  show_mysql_error();
  $n = mysql_numrows($r);
  $amg_id = -1;
  echo "<ul><ul>";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $r4 = mysql_query("SELECT * FROM cc_genres WHERE g_name like \"$w[t_uid]\"");
    show_mysql_error();
    $n4 = mysql_numrows($r4);
    $w4 = mysql_fetch_array($r4);
    if ($w4[g_name] != "") {
      $r6 = mysql_query("UPDATE cc_types SET g_name='$w4[g_name]' WHERE t_uid='$w[t_uid]'");
      show_mysql_error();
    }
  }
?>
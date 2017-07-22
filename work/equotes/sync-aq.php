<?
  // Sync with epquiz
  include "../mysql.php";
  
  $a_id = $_GET[a_id];
  $a_name = $_GET[a_name];
  $b_name = $_GET[b_name];
  
  if ($a_name != '') {
    $r = mysql_query("SELECT * FROM eq_authors WHERE a_name='$a_name'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    if ($w[a_name] == $a_name) {
      $r = mysql_query("UPDATE eq_authors SET aq_id=$a_id WHERE a_name='$a_name'");
      echo mysql_error();
      $r = mysql_query("UPDATE aq_artists SET eq_id=$w[a_id] WHERE a_id='$a_id'");
      echo mysql_error();
      echo "Set $a_name to $a_id";
    } else die("<font color=red>Not found $a_name</font>");
    exit;
  }
  
  if ($b_name != '') {
    $r = mysql_query("UPDATE aq_artists SET a_name='$b_name' WHERE a_id='$a_id'");
    echo mysql_error();
    echo "Renamed $a_id to $b_name";
    exit;
  }
  
  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  /*
  // load names
  $r = mysql_query("SELECT * FROM eq_authors");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $wa = mysql_fetch_assoc($r);
    $name = $wa[a_name];
    //$sa = explode(" ", $name);
    //$name = "$sa[0] $sa[1]";
    $aname[$wa[a_id]] = trim($name);
    $arating[$wa[a_id]] = $wa[a_rating];
    $atype[$wa[a_id]] = $wa[a_type];
  }

  $q = "SELECT * FROM aq_artists ORDER BY a_rating DESC";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $last_lev = 0;
    if ($w[eq_id] > 0) $a_id = $w[eq_id];
    else {
      $a_id = find_closest($w[a_name], $aname);
      if ($last_lev>1) echo "<b>";
    }
    if (($last_lev==0)) {
      //echo "$w[a_rating] - $w[a_name] - $aname[$a_id] - $atype[$a_id] - $arating[$a_id]</b><br>";
    }
    //continue;
    //if (($last_lev==0) && ($atype[$a_id] != 'Poet')) echo "<font color=red>";
    echo "$w[a_rating] - <a target=_blank href='https://www.brainyquote.com/search_results.html?q=$w[a_name]'>$w[a_name]</a> - $aname[$a_id] - $atype[$a_id] - <a onclick='r=prompt(\"eq name:\", \"\"); window.open(\"sync-aq.php?a_id=$w[a_id]&a_name=\"+r); return false' href=# target=_blank>$arating[$a_id]</a></b></font>";
    if ($last_lev>1) {
      echo " <a target=_blank href='sync-aq.php?a_id=$w[a_id]&a_name=$aname[$a_id]'>Apply</a>";
      echo " <a target=_blank href='sync-aq.php?a_id=$w[a_id]&b_name=$aname[$a_id]'>Rename</a>";
    } else {
      $r2 = mysql_query("UPDATE eq_authors SET aq_id=$w[a_id] WHERE a_id='$a_id'");
      echo mysql_error();
      $r2 = mysql_query("UPDATE aq_artists SET eq_id='$a_id' WHERE a_id='$w[a_id]'");
      echo mysql_error();
    }
    echo "<br>";
  }
  */
  
  /*
  $q = "SELECT * FROM eq_authors WHERE aq_id>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q2 = "SELECT * FROM aq_artists WHERE a_id='$w[aq_id]'";
    $r2 = mysql_query($q2);
    $w2 = mysql_fetch_array($r2);
    if ((!file_exists("apic/".$w[a_id].".jpg")) && (file_exists("paintings/".$w2[a_id]."/photo.jpg"))) {
      copy("paintings/".$w2[a_id]."/photo.jpg", "apic2/".$w[a_id].".jpg");
    }
    if (($w[a_desc] == '') && ($w2[a_bio_en] != '')) {
      mysql_query("UPDATE eq_authors SET a_desc=\"$w2[a_bio_en]\" WHERE a_id='$w[a_id]'");
      echo "Copied desc for $w[a_name]<br>";
    }
    if (($w[a_year1] == 0) && ($w2[a_start] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year1=\"$w2[a_start]\" WHERE a_id='$w[a_id]'");
      echo "Copied year1 for $w[a_name]<br>";
    }
    if (($w[a_year2] == 0) && ($w2[a_stop] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year2=\"$w2[a_stop]\" WHERE a_id='$w[a_id]'");
      echo "Copied year2 for $w[a_name]<br>";
    }
  }

  $q = "SELECT * FROM eq_authors LEFT JOIN cc_composers ON (cc_composers.c_id=eq_authors.cc_id) WHERE t_count>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q2 = "SELECT * FROM cc_composers WHERE c_id='$w[cc_id]'";
    $r2 = mysql_query($q2);
    $w2 = mysql_fetch_array($r2);
    //echo "apic/".$w[a_id].".jpg - cpic/".$w2[c_id].".jpg<br>";
    if ((!file_exists("apic/".$w[a_id].".jpg")) && (file_exists("cpic/".$w2[c_id].".jpg"))) {
      copy("cpic/".$w2[c_id].".jpg", "apic2/".$w[a_id].".jpg");
    }
    if (($w[a_desc] == '') && ($w2[c_desc] != '')) {
      mysql_query("UPDATE eq_authors SET a_desc=\"$w2[c_desc]\" WHERE a_id='$w[a_id]'");
      echo "Copied desc for $w[a_name]<br>";
    }
    if (($w[a_year1] == 0) && ($w2[c_start] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year1=\"$w2[c_start]\" WHERE a_id='$w[a_id]'");
      echo "Copied year1 for $w[a_name]<br>";
    }
    if (($w[a_year2] == 0) && ($w2[c_stop] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year2=\"$w2[c_stop]\" WHERE a_id='$w[a_id]'");
      echo "Copied year2 for $w[a_name]<br>";
    }
  }

  $q = "SELECT * FROM eq_authors WHERE ep_id>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q2 = "SELECT * FROM ep_authors WHERE a_id='$w[ep_id]'";
    $r2 = mysql_query($q2);
    $w2 = mysql_fetch_array($r2);
    //echo "apic/".$w[a_id].".jpg - cpic/".$w2[c_id].".jpg<br>";
    if ((!file_exists("apic/".$w[a_id].".jpg")) && (file_exists("apic3/".$w2[a_id].".jpg"))) {
      copy("apic3/".$w2[a_id].".jpg", "apic2/".$w[a_id].".jpg");
    }
    if (($w[a_desc] == '') && ($w2[a_desc] != '')) {
      mysql_query("UPDATE eq_authors SET a_desc='$w2[a_desc]' WHERE a_id='$w[a_id]'");
      echo "Copied desc for $w[a_name]<br>";
    }
    if (($w[a_year1] == 0) && ($w2[a_year1] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year1=\"$w2[a_year1]\" WHERE a_id='$w[a_id]'");
      echo "Copied year1 for $w[a_name]<br>";
    }
    if (($w[a_year2] == 0) && ($w2[a_year2] != 0)) {
      mysql_query("UPDATE eq_authors SET a_year2=\"$w2[a_year2]\" WHERE a_id='$w[a_id]'");
      echo "Copied year2 for $w[a_name]<br>";
    }
  }
  */
?>
<?
  // This is works loader
  include "../mysql.php";
  include "style.php";

  $mr_levels = array(
  6349 => 30, 4776 => 60, 3784 => 100, 2775 => 150, 2239 => 200, 1788 => 250, 1515 => 300, 1077 => 400, 864 => 500, 535 => 700, 160 => 1000, 16 => 1500, 1 => 2000);
  $mr_levels_b = array(
  6349 => 30, 4776 => 60, 3784 => 100, 2775 => 150, 2239 => 200, 1788 => 250, 1515 => 300, 1077 => 400, 864 => 500, 535 => 700, 160 => 1000, 16 => 1150, 1 => 1187, -10000 => 1797);

  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    //print_r($return);
    curl_close($ch);
    return $return;
  }

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = $name;
    $ln = str_replace("http://", "", $ln);
    $ln = str_replace("https://", "", $ln);
    $ln = str_replace("%20", " ", $ln);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file_get_contents($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return $data;
    else return 1;
  }

  echo "Full text: ";
  // count mr
  $r = mysql_query("SELECT w_rating FROM rl_works WHERE t_len>0 OR t_len2>0 
    ORDER BY w_rating desc");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if (in_array($i, $mr_levels)) {
      echo "$w[w_rating] => $i, ";
    }
    if ($w[w_rating] == 0) {
      //echo "1 => $i, ";
      break;
    }
  }
  echo "-10000 => $n";
  echo "<br>";
  
  echo "Brief: ";
  // count mr
  $r = mysql_query("SELECT w_rating FROM rl_works 
    LEFT JOIN rl_authors USING (a_id) 
    WHERE b_len>0 AND a_art=1
    ORDER BY w_rating desc");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    if (in_array($i, $mr_levels)) {
      echo "$w[w_rating] => $i, ";
    }
    if ($w[w_rating] == 0) {
      //echo "1 => $i, ";
      break;
    }
  }
  echo "-10000 => $n";
  echo "<br>";
  
  // Find duplicates
  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id)"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q = "SELECT COUNT(*) AS cnt FROM rl_works WHERE w_name='$w[w_name]' AND a_id='$w[a_id]'"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w2 = mysql_fetch_array($r2);
    if ($w2[cnt] > 1) echo "Found duplicate <a target=_blank href='../../rlit/authors.php?a_id=$w[a_id]'>$w[a_name]</a> - $w[w_id] - $w[w_name]<br>";
  }

  // Count works
  // Update a_art
  $q = "SELECT * FROM rl_authors"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q = "SELECT COUNT(*) as cnt FROM rl_works WHERE a_id=$w[a_id]"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w2 = mysql_fetch_array($r2);
    $q = "SELECT COUNT(*) as cnt FROM rl_works WHERE a_id=$w[a_id] and (t_len>0 or b_len>0 or t_len2>0)"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w3 = mysql_fetch_array($r2);
    $q = "SELECT MAX(w_rating) as rat FROM rl_works WHERE a_id=$w[a_id] and (t_len>0 or b_len>0 or t_len2>0)"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    mysql_query("UPDATE rl_authors SET a_works='$w2[cnt]', a_works2='$w3[cnt]', a_maxr='$w4[rat]' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // Update a_art poetry
    $q = "SELECT COUNT(*) as cnt FROM rl_atags 
      WHERE a_id=$w[a_id] and t_name IN ('Поэзия') AND t_type=2"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    if ($w4[cnt]>0) {
      //echo "Found non-fiction $w[a_id]<br>";
      mysql_query("UPDATE rl_authors SET a_art=1 WHERE a_id='$w[a_id]'");
    }
    // Update a_art
    $q = "SELECT COUNT(*) as cnt FROM rl_atags 
      WHERE a_id=$w[a_id] and t_name IN ('Бизнес', 'Здоровье','Нехудожественная литература','Наука') AND t_type=2"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    if ($w4[cnt]>0) {
      //echo "Found non-fiction $w[a_id]<br>";
      mysql_query("UPDATE rl_authors SET a_art=0 WHERE a_id='$w[a_id]'");
    }
    // Check if poets have poetry tag
    if (strpos($w[a_prof], 'Поэт') !== false) {
      $q = "SELECT COUNT(*) as cnt FROM rl_atags 
        WHERE a_id=$w[a_id] and t_name = 'Поэзия' AND t_type>0"; 
      $r2 = mysql_query($q);
      echo mysql_error();
      $w4 = mysql_fetch_array($r2);
      if ($w4[cnt] == 0) echo "Not found poetry tag for <a target=_blank href='../../rlit/authors.php?a_id=$w[a_id]'>$w[a_name]</a><br>";
      //else echo "Found poetry tag for $w[a_name]<br>";
    }
    // Create name2
    $sa = explode(' ', $w[a_name]);
    $surname = $sa[count($sa)-1];
    $q = "SELECT COUNT(*) as cnt FROM rl_authors WHERE a_name LIKE '% $surname' AND a_art>0"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    $name2 = $surname;
    if ($w4[cnt] > 1) {
      $name2 = mb_substr($w[a_name], 0, 1)." $surname";
    }
    //mysql_query("UPDATE rl_authors SET a_name2='$name2' WHERE a_id='$w[a_id]'");
    echo mysql_error();
    // Create ename2
    $sa = explode(' ', $w[a_ename]);
    $surname = $sa[count($sa)-1];
    $q = "SELECT COUNT(*) as cnt FROM rl_authors WHERE a_ename LIKE '% $surname' AND a_art>0"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    $name2 = $surname;
    if ($w4[cnt] > 1) {
      $name2 = mb_substr($w[a_ename], 0, 1)." $surname";
    }
    //mysql_query("UPDATE rl_authors SET a_ename2='$name2' WHERE a_id='$w[a_id]' AND a_ename2=''");
    echo mysql_error();
    // Update map_shape
    $q = "SELECT COUNT(*) as cnt FROM rl_atags 
      WHERE a_id=$w[a_id] and t_name = 'Поэзия' AND t_type>1"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    if ($w4[cnt] != 0) mysql_query("UPDATE rl_authors SET map_shape=1 WHERE a_id=$w[a_id]");
    $q = "SELECT COUNT(*) as cnt FROM rl_atags 
      WHERE a_id=$w[a_id] and t_name = 'Драматургия' AND t_type>1"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $w4 = mysql_fetch_array($r2);
    if ($w4[cnt] != 0) mysql_query("UPDATE rl_authors SET map_shape=2 WHERE a_id=$w[a_id]");
  }
  
  // Copy tags and annotations
  $q = "SELECT * FROM rl_works LEFT JOIN rl_authors USING (a_id) WHERE tr_wid>0"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $q = "SELECT * FROM tr_booktags WHERE tr_wid='$w[tr_wid]'"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      mysql_query("REPLACE INTO rl_wtags VALUES('$w[w_id]', '$w2[t_name]', 0, 1)");
      echo mysql_error();
      mysql_query("REPLACE INTO rl_atags VALUES('$w[a_id]', '$w2[t_name]', 0, 0, NOW())");
      echo mysql_error();
    }
    // Warning! Bookanno do not have primary key!
    $q = "SELECT * FROM rl_wanno WHERE w_id='$w[w_id]'"; 
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2 == 0) {
      $q = "SELECT * FROM tr_bookanno WHERE tr_wid='$w[tr_wid]'"; 
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_array($r2);
        $w2[b_anno] = mysql_real_escape_string($w2[b_anno]);
        mysql_query("INSERT INTO rl_wanno VALUES('$w[w_id]', '$w2[b_anno]')");
        echo mysql_error();
      }
    }
  }

  // Get encodings
  $q = "SELECT * FROM rl_works WHERE t_len2>0"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $st = file_get_contents("traum/$w[a_id]/$w[w_id].$w[tr_wtype]");
    if (preg_match('` encoding="(.*?)"`', $st, $m) > 0) {
      $m[1] = strtolower($m[1]);
      echo "Encoding: $w[a_id] - <a target=_blank href='/artquiz/rlit/works.php?w_id=$w[w_id]'>$w[w_id]</a> - $m[1]<br>";
      mysql_query("UPDATE rl_works SET t_enc2='$m[1]' WHERE w_id='$w[w_id]'");
      echo mysql_error();
    } else echo "Not found encoding for $w[a_id] - <a target=_blank href='/artquiz/rlit/works.php?w_id=$w[w_id]'>$w[w_id]</a> - $w[tr_wtype]<br>";
  }
  
?>
Update rating from w_size for those authors who did not get imported rating: 
UPDATE rl_authors SET a_rating=w_size/10000*2 WHERE a_rating<200; 
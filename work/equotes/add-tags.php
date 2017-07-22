<?
  include "../mysql.php";
  // Add tag
  $n3 = 0;
  $t_name = "!Philosophy";
  $q = "SELECT eq_authors.a_id, eq_authors.a_name FROM eq_authors WHERE a_fil>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/equotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM eq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')");
    echo "INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n3')");
  
  exit;

  /*
  $n3 = 0;
  $t_name = "!With music";
  $q = "SELECT * FROM eq_authors LEFT JOIN cc_composers ON (cc_composers.c_id=eq_authors.cc_id) WHERE t_count>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/equotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM eq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')");
    echo "INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n3')");

  $n3 = 0;
  $t_name = "!With paintings";
  $q = "SELECT eq_authors.a_id FROM eq_authors LEFT JOIN aq_artists ON (aq_artists.a_id=eq_authors.aq_id) WHERE p_num>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/equotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM eq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')");
    echo "INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n3')");
  
  $n3 = 0;
  $t_name = "!With poems";
  $q = "SELECT eq_authors.a_id, eq_authors.a_name FROM eq_authors LEFT JOIN ep_authors ON (ep_authors.a_id=eq_authors.ep_id) WHERE a_works>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/equotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM eq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO eq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')");
    echo "INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '$n2')<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n3')");
  
  $n3 = 0;
  $t_name = "!With photo";
  $q = "SELECT a_id, q_id FROM eq_quotes WHERE q_img=1 ORDER BY a_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w[q_id]')");
    echo mysql_error();
    $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '1')");
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n')");
  */
  
  $n3 = 0;
  $lens = array(0 => 20, 20 => 40, 40 => 80, 80 => 120, 120 => 200, 200 => 400);
  foreach ($lens as $x1 => $x2) {
    $t_name = "!Length $x1-$x2";
    $q = "SELECT a_id, q_id FROM eq_quotes WHERE LENGTH(q_txt)>=$x1 AND LENGTH(q_txt)<$x2";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $r3 = mysql_query("INSERT INTO eq_qtags VALUES('$t_name', '$w[q_id]')");
      echo mysql_error();
      $r3 = mysql_query("INSERT INTO eq_atags VALUES('$w[a_id]', '$t_name', '1')");
      echo mysql_error();
    }
    $r3 = mysql_query("INSERT INTO eq_tags VALUES('$t_name', '', 10, '$n')");
  }
?>

UPDATE eq_authors LEFT JOIN cc_composers ON (cc_composers.c_id=eq_authors.cc_id) SET a_type='Composer (with music)' WHERE t_count>0;
UPDATE eq_authors SET a_type='Poet (with poems)' WHERE ep_id>0;
UPDATE eq_authors SET a_type='Composer (with music)' WHERE cc_id>0;
UPDATE eq_authors SET a_type='Artist (with paintings)' WHERE aq_id>0;

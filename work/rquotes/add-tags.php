<?
  include "../mysql.php";
  // Add tag

  
  $n3 = 0;
  $t_name = "!Философия";
  $q = "SELECT rq_authors.a_id, rq_authors.a_name FROM rq_authors WHERE a_fil>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM rq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())");
    echo "INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n3')");

  $n3 = 0;
  $t_name = "!С музыкой";
  $q = "SELECT * FROM rq_authors LEFT JOIN cc_composers ON (cc_composers.c_id=rq_authors.cc_id) WHERE t_count>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM rq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())");
    echo "INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())<br>";
    echo mysql_error();
    $r3 = mysql_query("UPDATE rq_authors SET a_type='Композитор (с музыкой)', a_group='Искусство' WHERE a_id='$w[a_id]'");
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n3')");

  $n3 = 0;
  $t_name = "!С картинами";
  $q = "SELECT rq_authors.a_id FROM rq_authors LEFT JOIN aq_artists ON (aq_artists.a_id=rq_authors.aq_id) WHERE p_num>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM rq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())");
    echo "INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())<br>";
    echo mysql_error();
    $r3 = mysql_query("UPDATE rq_authors SET a_type='Художник (с картинами)', a_group='Искусство' WHERE a_id='$w[a_id]'");
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n3')");
  
  $n3 = 0;
  $t_name = "!Со стихами";
  $q = "SELECT rq_authors.a_id, rq_authors.a_name FROM rq_authors LEFT JOIN l_authors ON (l_authors.a_id=rq_authors.rp_id) WHERE a_works>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM rq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())");
    echo "INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n3')");
  
  $n3 = 0;
  $t_name = "!С книгами";
  $q = "SELECT rq_authors.a_id, rq_authors.a_name FROM rq_authors LEFT JOIN rl_authors ON (rl_authors.a_id=rq_authors.rl_id) WHERE a_works>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $n3 = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "<a target=_blank href=/artquiz/rquotes/authors.php?a_id=$w[a_id]>$w[a_name]</a><br>";
    $q2 = "SELECT q_id FROM rq_quotes WHERE a_id='$w[a_id]'";
    $r2 = mysql_query($q2);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_array($r2);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')");
      echo "INSERT INTO rq_qtags VALUES('$t_name', '$w2[q_id]')<br>";
      echo mysql_error();
    }
    $n3 += $n2;
    $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())");
    echo "INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '$n2', 0, NOW())<br>";
    echo mysql_error();
  }
  $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n3')");
  
  /*
  $n3 = 0;
  $lens = array(0 => 20, 20 => 40, 40 => 80, 80 => 120, 120 => 200, 200 => 400);
  foreach ($lens as $x1 => $x2) {
    $t_name = "!Length $x1-$x2";
    $q = "SELECT a_id, q_id FROM rq_quotes WHERE LENGTH(q_txt)>=$x1 AND LENGTH(q_txt)<$x2";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $r3 = mysql_query("INSERT INTO rq_qtags VALUES('$t_name', '$w[q_id]')");
      echo mysql_error();
      $r3 = mysql_query("INSERT INTO rq_atags VALUES('$w[a_id]', '$t_name', '1')");
      echo mysql_error();
    }
    $r3 = mysql_query("INSERT INTO rq_tags VALUES('$t_name', '', 10, '$n')");
  }
  */
?>
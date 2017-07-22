<?
  include "qlib.php";
  include "style.php";
  include "menu.php";
  
  // Remove logs without users
  $r = mysql_query("SELECT * FROM cc_qlog LEFT JOIN cc_users USING (u_id) WHERE u_name is NULL");
  $n = mysql_numrows($r);
  echo "Detected $n logs without users<br>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    print_r($w);
    $r2 = mysql_query("DELETE FROM cc_qlog WHERE l_id=$w[l_id]");
    echo mysql_error();
  }
  

  // Create ur
  $r = mysql_query("SELECT * FROM cc_users LEFT JOIN cc_ur USING (u_id) WHERE r_r1 is NULL");
  $n = mysql_numrows($r);
  echo "Detected $n users without ur<br>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    new_ur($w[u_id]);
  }
  
  // Clear ratings
  $r = mysql_query("UPDATE cc_ur SET 
    r_r1=0,
    r_right=0,
    r_total=0,
    r_rightp=0,
    r_avsec=0,
    r_avcent=0,
    r_avcent2=0
    ");
  
  // Update qlog ratings
  $k1 = pow($k_secp2, $k_secp)-1;
  echo "k1 = $k1 <br>";
  $q = "UPDATE cc_qlog SET l_r1 = (
    $k_r*(1+c_count/10)*(1+cc_qlog.u_oneblock*$k_oneblock)*
    ((1+cc_qlog.u_allcomp*($k_allcomp*cc_qlog.u_level))*l_ok+(1+cc_qlog.u_allcomp*$k_allcompp)*
    (1-l_ok-l_wrong2)/$k_rightp)/(pow(l_sec+$k_secp2, $k_secp)-$k1))
  ";
  //echo "$q<br>";
  $r = mysql_query($q);
  echo mysql_error();

  // Count ur
  $q = "SELECT *,sum(l_r1) as r1,
    sum(l_ok) as correct,count(l_id) as cnt,avg(l_sec) as sec,
    (count(l_id)-sum(l_wrong2)) as rightp,sum(abs(l_cent)) as acent,sum(l_cent) as cent 
    FROM cc_users LEFT JOIN cc_qlog USING (u_id)
    GROUP BY u_id,cc_qlog.u_level";
  //echo "$q<br>";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    //$r_r1 = $w[correct]/$w[cnt]/(pow($w[sec]+$k_secp2, $k_secp)-pow(k_secp2, k_secp)+1);
    $cnt = $w[cnt];
    $wrong = $w[cnt]-$w[correct];
    if ($cnt == 0) $cnt = 1;
    if ($wrong == 0) $wrong = 1;
    $r_r1 = $w[r1]/$cnt;
    echo "$w[u_id] $w[u_level] tot $w[cnt] cor $w[correct] $w[sec] $w[wrong2] $w[acent] $w[cent] $r_r1<br>";
    $r2 = mysql_query("UPDATE cc_ur SET r_right='$w[correct]',r_total='$w[cnt]',
      r_rightp='$w[rightp]',r_avsec='$w[sec]',r_avcent='".($w[cent]/$wrong)."',
      r_avcent2='".($w[acent]/$wrong)."',
      r_r1='$r_r1'
      WHERE u_id=$w[u_id] AND r_level=$w[u_level]");
  }
  
?>
SELECT c_name3, count( * ) AS cnt
FROM cc_qblocks
LEFT JOIN cc_composers
USING ( c_id ) 
GROUP BY cc_qblocks.c_id
ORDER BY cnt
LIMIT 0 , 30
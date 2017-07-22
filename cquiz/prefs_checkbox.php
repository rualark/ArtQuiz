<?
  include "qlib.php";
  include "auth.php";

  secure_variable("id");
  secure_variable("value");

  start_time();
  
  if ($us[t_id] != 0) exit;

  $id0 = $id[0];
  $id1 = substr($id, 1);
  
  // Track groups
  if ($id0 == "t") {
    if ($us[u_ga] == "") $us[u_ga]=new_ga();
    $us[u_ga][$id1] = $value>0?'X':'o';
    save_user();
  }
  // Composers
  if ($id0 == "c") {
    if ($us[u_ca] == "") $us[u_ca]=new_ca();
    if ($id1 != "") $us[u_ca][$id1] = $value>0?'X':'o';
    $cnum = substr_count($us[u_ca], 'X');
    save_user();
    // Show stat
    $r = mysql_query2("SELECT r1_avg, i_anum, cc_ur.r_total, i_cst2, HEX(i_cab) as cab FROM cc_isles 
      LEFT JOIN cc_ur ON (cc_ur.u_id=$us[u_id] AND r_level=$us[u_level] AND cc_isles.i_cab=cc_ur.r_cab) 
      WHERE i_cab=x'$us[u_cab]'");
    echo mysql_report_error();
    $w = mysql_fetch_array($r);
    if ($w[i_cst2]!="") {
      echo "<table><td bgcolor=#ffff77>You played <b>".($w[r_total]+0)."/".($w[i_anum]+0)."</b> games on <a href=rating.php?cab=$w[cab]>$w[i_cst2]</a></table>";
    } else {
      echo "<table><td bgcolor=#ffffff>Selected composers: $cnum</table>";
    }
    // Find next islands
    $ca= &$us[u_ca];
    $q = "SELECT ca_id, cc_ur.r_total, i_anum FROM cc_inext 
      LEFT JOIN cc_ur ON (r_level=$us[u_level] AND cc_ur.u_id=$us[u_id] AND cc_inext.i_cab2=cc_ur.r_cab) 
      WHERE i_cab=x'$us[u_cab]'";
    $r = mysql_query2($q);
    //echo $q;
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      echo ";$w[ca_id]:$w[r_total]:$w[i_anum]:";
    }
    /*
    $q = "SELECT HEX(i_cab) as cab, cc_ur.r_total, i_anum FROM cc_isles
      LEFT JOIN cc_ur ON (r_level=$us[u_level] AND cc_ur.u_id=$us[u_id] AND cc_isles.i_cab=cc_ur.r_cab) 
      WHERE i_cnum='$cnum2'";
    $r = mysql_query2($q);
    //echo $q;
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $ca2 = unpack_ca($w[cab]);
      $added=0;
      $fail=0;
      for ($x=0; $x<strlen($ca2); $x++) {
        if ($ca[$x] == 'X') {
          if ($ca2[$x] == 'X') {
            //echo "REDDD $w[r_total] $added $ca $ca2<br>";
            continue;
          }
          if ($ca2[$x] == 'o') {
            $fail=1;
            break;
          }
        }
        if ($ca[$x] != 'X') {
          if ($ca2[$x] != 'X') continue;
          if ($ca2[$x] == 'X') {
            //if ($x == 139) echo "$ca $ca2";
            $added++;
            if ($added>1) {
              $fail = 1;
              break;
            }
            $added_ca_id = $x;
          }
        }
      }
      if ($fail ==0) echo ";$added_ca_id:$w[r_total]:$w[i_anum]:";
    }
    */
  }
  stop_time("", 0);
?>

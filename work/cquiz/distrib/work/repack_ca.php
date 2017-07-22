<?
  include "../qlib.php";
  
  $tables = array("cc_isles", "cc_clears", "cc_klog", "cc_qlog", "cc_ur", "cc_users", "cc_users");
  $fields = array("i_cab"   , "c_cab",     "k_cab",   "u_cab",   "r_cab", "u_cab",    "u_cab2");
  
  $q = "SELECT *,hex(i_cab) as myfield FROM cc_isles";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($x=0; $x<$n; $x++) {
    $w = mysql_fetch_assoc($r);
    if ($w[myfield] == '') continue;
    echo "$w[l_id] $w[i_cst] $w[myfield] ";
    $ca = unpack_ca($w[myfield]);
    $cab = pack_ca2($ca);
    $ca2 = unpack_ca2($cab);
    //echo "$ca<br>$ca2<br>";
    //echo " $cab<br>";
    if (strlen($w[myfield]) < 19*2) {
      echo "<font color=green>Old isle $w[myfield]<br></font>";
      continue;
    }
    for ($i=0; $i<count($tables); $i++) {
      $table = $tables[$i];
      $field = $fields[$i];
      echo "$table<br>";
      $q2 = "UPDATE $table SET $field = x'$cab' WHERE $field = x'".$w[myfield]."'";
      echo "$q2<br>";
      //$r2 = mysql_query($q2);
      //echo "<font color=red>".mysql_error()."</font>";
    }
  }
?>
<?
  require "../qlib.php";
  $r = mysql_query("SELECT *,hex(u_cab) as cab,hex(u_cab2) as cab2 FROM cc_users ORDER BY u_id");
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "$w[u_name] $w[u_id]<br>";
    echo $w[cab]."<br>";
    echo $w[u_ca]."<br>";
    echo pack_ca($w[u_ca]);
    echo "<br>";
    echo unpack_ca($w[cab]);
    echo "<br>";
    echo $w[cab2]."<br>";
    echo $w[u_ca2]."<br>";
    echo pack_ca($w[u_ca2]);
    echo "<br>";
    echo unpack_ca($w[cab2]);
    $cab2 = pack_ca($w[u_ca2]);
    $cab = pack_ca($w[u_ca]);
    echo "<br>";
    echo strlen($cab2)."<br>";
    //$r2=mysql_query("UPDATE cc_users SET u_cab2 = x'$cab2' WHERE u_id=$w[u_id]");
    echo mysql_error();
    //$r2=mysql_query("UPDATE cc_users SET u_cab = x'$cab' WHERE u_id=$w[u_id]");
    echo mysql_error();
  }
?>
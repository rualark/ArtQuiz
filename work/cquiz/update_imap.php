<?
  include "../qlib.php";
  include "../auth.php";

  $ccount = get_ccount();
  for ($i=0; $i<=$ccount; $i++) {
    $cq .= ",ca$i BIT NOT NULL";
    $ck .= ",KEY ca$i(ca$i)";
  }
  mysql_query("DROP TABLE IF EXISTS cc_imap");
  $q = "CREATE TABLE cc_imap (
    i_cab BLOB NOT NULL
    $cq $ck
  )";
  echo $q;
  mysql_query("$q");
  echo mysql_error();
?>

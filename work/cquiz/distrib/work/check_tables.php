<?
  include "mysql.php";
  
  # CheckSqlTables()
  # Checks all tables in a database. Returns true if
  # everything went successfully; returns false and fills
  # out $msg if it did not.
  function CheckSqlTables(&$msg, $fast = true) {
    $msg = "";
    $rs_tables = mysql_query("SHOW TABLES");
    if (!$rs_tables || mysql_num_rows($rs_tables) <= 0) {
    $msg = "Could not iterate database tables\n";
    return false;
    }

    $bOk = true;
    $checktype = "";
    if ($fast)
    $checktype = "FAST";
    while (list($tname) = mysql_fetch_row($rs_tables)) {
    $rs_status = mysql_query("CHECK TABLE `$tname` $checktype");
    if (!$rs_status || mysql_num_rows($rs_status) <= 0) {
    $msg .= "Could not get status for table $tname\n";
    $bOk = false;
    continue;
    }
    # Seek to last row
    mysql_data_seek($rs_status, mysql_num_rows($rs_status)-1);
    $row_status = mysql_fetch_assoc($rs_status);
    if ($row_status['Msg_type'] != "status") {
    $msg .= "Table {$row_status['Table']}: ";
    $msg .= "{$row_status['Msg_type']} = {$row_status['Msg_text']}\n";
    $bOk = false;
    }
    }
    return $bOk;
  }
  
  CheckSqlTables($msg, FALSE);
  echo $msg;
?>
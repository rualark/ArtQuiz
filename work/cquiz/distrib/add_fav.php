<?
  include "qlib.php";
  include "auth.php";
  
  secure_variable_post("t_id");
  secure_variable_post("b_id");
  secure_variable_post("c_id");
  secure_variable_post("value");
  secure_variable_post("group");
  
  if ($value === "off") {
    $r = mysql_query2("INSERT INTO cc_fav VALUES('$us[u_id]', '$t_id', '$b_id', '$c_id', NOW(), '', '')
    ON DUPLICATE KEY UPDATE 
      b_id='$b_id', f_time=NOW(), f_deleted=0
    ");
    echo mysql_report_error();
  } elseif ($value === "on") {
    $q = "UPDATE cc_fav SET f_deleted=1 WHERE u_id='$us[u_id]' AND t_id='$t_id'";
    $r = mysql_query2($q);
    //echo $q;
    echo mysql_report_error();
  } elseif ($value === "group") {
    $r = mysql_query2("UPDATE cc_fav SET f_group='$group' WHERE u_id='$us[u_id]' AND t_id='$t_id'");
    echo mysql_report_error();
  }
?>

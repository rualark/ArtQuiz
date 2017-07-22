<?
  include "mysql.php";
  include "url.php";
  include "lib.php";
  include "style.php";
  
  foreach ($analytics_projects as $key => $project_name) {
    mysql_query("UPDATE hits SET h_project='$project_name' WHERE h_script LIKE '%$project_name/%' AND h_project=''");
    echo mysql_error();
    mysql_query("UPDATE hits_b SET h_project='$project_name' WHERE h_script LIKE '%$project_name/%' AND h_project=''");
    echo mysql_error();
  }
?>

<?
  include "../qlib.php";
  start_time();
  $fa = file("offline.txt");
  for ($i=0; $i<count($fa)/4; $i++) {
    $time = trim($fa[$i*4]);
    $u_id = trim($fa[$i*4+1]);
    $cab = trim($fa[$i*4+2]);
    $q = trim($fa[$i*4+3]);
    if ($q == "") continue;
    mysql_query($q);
    echo "$q<br>";
    echo mysql_error();
    load_user($u_id);
    update_ratings($u_id, $cab);
    update_isles($cab, 1, "'".$time."'");
  }
  stop_time();
  rename("offline.txt", "offline-".date("Y-m-d-H-i-s").".txt");
?>

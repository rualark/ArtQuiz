<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  load_comps();
  
  foreach ($comp as $key => $val) {
    echo $val["c_name3"]."<br>";
  }
?>
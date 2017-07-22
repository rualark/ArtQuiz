<?
  include "qlib.php";  

  secure_variable("l_id");
  secure_variable("v_type");
  
  if ($l_id == 0) exit;
  
  echo vote_compart($l_id, $v_type);
?>
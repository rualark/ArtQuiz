<? 
  include "mysql.php";
  include "qlib.php";
  
  header("Content-Type: text/xml"); 
  echo "<?xml version='1.0' encoding='UTF-8'?>";

  secure_variable("u_id");
  secure_variable("t_id");
  
  if (isset($u_id)) {
    $da = explode("-", $u_id);
    $u_id = $da[0];
  }
  /*
  $b_id = $da[1];
  $oneblock = $da[2];
  $t_len = $da[3];
  */

  if (isset($u_id)) {
    load_user($u_id);
    $t_id = $us[t_id];
    $b_id = $us[b_id];
    $oneblock = $us[u_oneblock];
  }
  load_track($t_id);
  
  $t_len = $ts[t_len];
  
  if (($oneblock) && ($play_symlinks)) $b_id=1;
  
  function show_block2($t_id, $b_id) {
    GLOBAL $block_path, $oneblock, $play_symlinks, $u_id, $us;
    echo "<track>";
    echo "<location>".block_url($t_id, $b_id, $play_symlinks*$u_id)."?$us[u_start]</location>";
    echo "<title>";
    if ($oneblock) echo "Excerpt";
    else echo "Minute $b_id";
    echo "</title>";
    echo "</track>";
  }
  
  echo "<playlist version='1' xmlns='http://xspf.org/ns/0/'>";

  echo "<trackList>";
  if ($oneblock) {
    show_block2($t_id, $b_id);
  } else {
    for ($i=1; $i<=ceil($t_len/$block_len); $i++) show_block2($t_id, $i);
  }
  echo "</trackList>";
  echo "</playlist>";
?>
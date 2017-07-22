<?
  include "qlib.php";
  
  secure_variable("u_id");
  secure_variable("c_id");

  function create_colors($im) {
    GLOBAL $pastel, $solid, $white, $black, $red, $orange, $brown, $green, $blue, $gray,
      $lightgray;
    $white = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im, 0, 0, 0);
    $red = imagecolorallocate($im, 200, 0, 0);
    $brown = imagecolorallocate($im, 110, 60, 0);
    $orange = imagecolorallocate($im, 255, 120, 0);
    $blue = imagecolorallocate($im, 0, 0, 200);
    $green = imagecolorallocate($im, 0, 150, 0);
    $gray = imagecolorallocate($im, 190, 190, 190);
    $lightgray = imagecolorallocate($im, 235, 235, 235);
  }
  
  header("Content-Type: image/png");
  imagepng($im, "maps/en.png");  

  $table = "cc_bstat2";
  if ($u_id>0) {
    $cond = "AND cc_bstat.u_id='$u_id'";
    $table = "cc_bstat";
  }
  $q = "SELECT cc_qblocks.t_id, b_lid, t_total, t_wrong
    FROM cc_qblocks 
    LEFT JOIN $table ON (cc_qblocks.b_lid=$table.b_id AND cc_qblocks.t_id = $table.t_id $cond)
    WHERE cc_qblocks.c_id='$c_id'
    ORDER BY t_id,b_lid
  "; //     GROUP BY cc_qblocks.t_id, cc_qblocks.b_id 
  //echo $q;
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  $height=15;
  $font = 'fonts/ARICYR.TTF';
  $font2 = 'fonts/ARICYRB.TTF';
  $im = imagecreatetruecolor($n+2+70, $height+2);
  create_colors($im);
  imagefill($im, 0, 0, $white);
  $color11 = imagecolorallocatealpha($im, 80, 155, 80, 0);
  $color21 = imagecolorallocatealpha($im, 200, 255, 200, 0);
  $color12 = imagecolorallocatealpha($im, 0, 0, 0, 0);
  $color21 = imagecolorallocatealpha($im, 255, 255, 255, 0);
  for ($i=0; $i<11; $i++) $col[$i] = imagecolorallocatealpha($im, 25.5*$i, 200-20*$i, 0, 0);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    if ($old_t_id != $w[t_id]) $tn++;
    $old_t_id = $w[t_id];
    $color = $color21;
    if ($w[t_total]>0) {
      $color = $col[round(($w[t_wrong])/$w[t_total]*10)];
      $bl ++;
    }
    imageline($im, $i+1, $height-2-min($height-2, $w[t_total]), $i+1, $height , $color);
  }
  imagefttext($im, 11, 0, $n+10, 14, $black, $font2, round($bl/$n*100)."%");
  imagerectangle($im, 0, 0, $n+1, $height+1, $black);
  imagepng($im);  
  imagedestroy($im);
?>

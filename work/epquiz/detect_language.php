<?

  $line_count = 10;
  require_once 'Text/LanguageDetect.php';
  $l = new Text_LanguageDetect();
  include "style.php";
  include "mysql.php";

  function lang_cache($a_id, $w_id) {
    GLOBAL $line_count, $line_count2, $l, $c;
    $fa = file("../../epquiz/poems/$a_id/$w_id.txt");
    $line_count2 = $line_count;
    if (count($fa)<20) $line_count2 = max(1, count($fa)/2);
    $c = count($fa);
    if ($fa === false) {
      mysql_query("DELETE FROM ep_works WHERE w_id='$w_id'");
      echo mysql_error();
    }
    if (file_exists("lang/$a_id/$w_id.txt")) {
      return file("lang/$a_id/$w_id.txt");
    }
    $lang = array();
    for ($z=0; $z<$c-$line_count2; $z++) {
      $text = '';
      for ($x=0; $x<$line_count2; $x++) $text.=$fa[$z+$x];
      //echo "$z. $text<br>";
      $result = $l->detect($text, 4);
      reset($result);
      $lang[$z] = substr(key($result), 0, 3);
    }
    // Save
    if (!file_exists("lang/$a_id")) mkdir("lang/$a_id");
    $fh = fopen("lang/$a_id/$w_id.txt", "w");
    foreach ($lang as $st) fputs($fh, "$st\r\n");
    fclose($fh);
    return $lang;
  }
  
  $r = mysql_query("SELECT w_id, a_id FROM ep_works ORDER BY w_id");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=1 style='border-collapse: collapse;'>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $w_id = $w[w_id];
    /*
    $st = file_get_contents("../../epquiz/poems/66/$i.txt");
    $result = $l->detect($st, 4);
    reset($result);
    echo "<a href=../../epquiz/works.php?w_id=$i>";
    echo substr(key($result), 0, 2)." ";
    echo "</a>";
    */
    $lang = lang_cache($w[a_id], $w_id);
    for ($z=0; $z<$c-$line_count2; $z++) {
      $lang[$z] = substr($lang[$z], 0, 3);
      if ($lang[$z] == "pid") $lang[$z] = "eng";
    }
    // Smooth
    if ($c-$line_count2 > 2) {
      if ($lang[1] == $lang[2]) {
        $lang[0] = $lang[1];
      }
      if ($lang[$c-$line_count2-2] == $lang[$c-$line_count2-3]) {
        $lang[$c-$line_count2-1] = $lang[$c-$line_count2-2];
      }
      for ($z=1; $z<$c-1; $z++) if ($lang[$z-1] == $lang[$z+1]) {
        $lang[$z] = $lang[$z-1];
      }
    }
    if ($c-$line_count2 > 3) {
      if ($lang[2] == $lang[3]) {
        $lang[0] = $lang[2];
        $lang[1] = $lang[2];
      }
      if ($lang[$c-$line_count2-3] == $lang[$c-$line_count2-4]) {
        $lang[$c-$line_count2-1] = $lang[$c-$line_count2-3];
        $lang[$c-$line_count2-2] = $lang[$c-$line_count2-3];
      }
      for ($z=2; $z<$c-3; $z++) 
        if (($lang[$z-1] == $lang[$z+2]) && ($lang[$z-2] == $lang[$z-1]) && ($lang[$z-1] == $lang[$z+3])) {
          //if ($lang[$z] != $lang[$z-1]) echo "!";
          //if ($lang[$z] != $lang[$z-1]) echo "?";
          $lang[$z] = $lang[$z-1];
          $lang[$z+1] = $lang[$z-1];
        }
    }
    // Find edges
    $limit1 = 0;
    for ($z=0; $z<$c-$line_count2; $z++) {
      if ($lang[$z] == 'eng') break;
      $limit1 = $z;
    }
    for ($z=$c-$line_count2-1; $z>=0; $z--) {
      $limit2 = $z+1;
      if ($lang[$z] == 'eng') break;
    }
    $limit1 += round($line_count2/2);
    $limit2 += round($line_count2/2);
    if ($limit1 < 7) $limit1 = 0;
    if ($limit2 > $c-8) $limit2 = $c;
    $lcount = 0;
    $lstat = array();
    //echo "$w_id. ";
    for ($z=0; $z<$c-$line_count2; $z++) {
      if ($lang[$z] != 'eng') {
        $lcount++;
      }
      $lstat[$lang[$z]] ++;
    }
    arsort($lstat);
    reset($lstat);
    $mylang = key($lstat);
    if ($lcount > ($c-$line_count2)*2/3) {
      //echo " <font color=GREEN><b>$mylang</b></font>";
    } else $mylang = "eng";
    if ($lcount > 0) {
      echo "<tr>";
      echo "<td>";
      echo "<a target=_blank href=../../epquiz/works.php?w_id=$w_id>";
      echo "$w_id";
      for ($z=0; $z<$c-$line_count2; $z++) {
        if ($lang[$z] != 'eng') {
          if ($mylang != 'eng') echo "<td bgcolor=#ff0000 title='$lang[$z]'>";
          elseif (($limit1 == 0) && ($limit2 == $c)) echo "<td bgcolor=#ffffaa title='$lang[$z]'>";
          else echo "<td bgcolor=#ff8888 title='$lang[$z]'>";
        } else {
          echo "<td bgcolor=#aaff88 title='$lang[$z]'>";
        }
      }
    }
    //mysql_query("UPDATE ep_works SET w_lang='$mylang', w_en1='$limit1', w_en2='$limit2' WHERE w_id='$w_id'");
    echo mysql_error();
    //echo "<br>";
  }
  echo "</table>";
  //echo $result->getMessage();
?>
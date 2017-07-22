<?
  include "lib.php";

  include "style.php";
  include "menu.php";
  
  $mtime = microtime(TRUE);
  start_time();
  
  secure_variable("act");
  
  echo "<center>";
  echo "<br>Выберите уровень сложности (количество самых известных полных текстов):<br><br>";
  echo "<font size=+3>";
  $x = 0;
  $hc = round(count($mr_levels)*0.5);
  foreach ($mr_levels as $rat => $works) {
    if ($x>0) {
      if ($x == $hc) echo "<br>";
      else echo " | ";
    }
    $x++;
    echo " <a href=pquiz.php?act=reset&mr=$rat&nc=$mtime&mode=&i_id=>$works</a>";
  }
  echo "</font><br><br>";
  echo "<hr>";
  echo "<br>Выберите уровень сложности (количество самых известных кратких содержаний):<br><br><br>";
  echo "<font size=+3>";
  $x = 0;
  $hc = round(count($mr_levels_b)*0.5);
  foreach ($mr_levels_b as $rat => $works) {
    if ($x>0) {
      if ($x == $hc) echo "<br>";
      else echo " | ";
    }
    $x++;
    echo " <a href=pquiz.php?act=reset&mr=$rat&mode=brief&nc=$mtime&i_id=><font color=#ee88bb>$works</font></a> ";
  }
  echo "</font><br><br><hr>";

  //stop_time();
?>
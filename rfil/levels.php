<?
  $mr_levels_f = array(
  574 => 30, 443 => 60, 196 => 100, 154 => 150, 99 => 200, 92 => 250, 79 => 300, 57 => 400, 37 => 500, 18 => 700, -10000 => 836);

  include "lib.php";
  $auth_necessary=0;
  include "../auth.php";

  include "style.php";
  include "menu.php";
  
  start_time();
  
  secure_variable("act");
  
  echo "<center>";
  echo "Выберите уровень сложности (цитаты философов):<br><br><br><br>";
  echo "<font size=+3>";
  echo "<a href='$url_main/rquotes/qquiz.php?act=reset&i_id=22&mar=5028&mqr=5028&an=30&qn=158'>Легкий</a> - ";
  echo "<a href='$url_main/rquotes/qquiz.php?act=reset&i_id=22&mar=5047&mqr=5048&an=45&qn=330'>Средний</a> - ";
  echo "<a href='$url_main/rquotes/qquiz.php?act=reset&i_id=22&mar=5077&mqr=5078&an=100&qn=1328'>Нормальный</a> - ";
  echo "<a href='$url_main/rquotes/qquiz.php?act=reset&i_id=22&mar=5091&mqr=5091&an=176&qn=3142'>Сложный</a> - ";
  echo "<a href='$url_main/rquotes/qquiz.php?act=reset&i_id=22&mar=5101&mqr=5126&an=327&qn=6135'>Безумный</a> ";
  echo "</font>";
  echo "<br><br><br><br>Вы также можете выбирать или создавать настраиваемые уровни сложности (Острова) <a href=$url_main/rquotes/qi.php>здесь</a>.";
  echo "<hr>";

  echo "<br>Выберите уровень сложности (количество самых известных философских книг):<br><br><br>";
  echo "<font size=+3>";
  $x = 0;
  $hc = round(count($mr_levels_f)*0.5);
  foreach ($mr_levels_f as $rat => $works) {
    if ($x>0) {
      if ($x == $hc) echo "<br>";
      else echo " | ";
    }
    $x++;
    echo " <a href=pquiz-fil.php?act=reset&mr=$rat&mode=&nc=$mtime&i_id=><font color=gray>$works</font></a> ";
  }
  echo "</font><br><br>";
  echo "Вы также можете выбирать или создавать настраиваемые уровни сложности (Острова) <a href=pi-fil.php>здесь</a>.";
  echo "<hr>";
  
  //stop_time();
?>
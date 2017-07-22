<?
  include "lib.php";
  $auth_necessary=0;
  include "../auth.php";

  include "style.php";
  include "menu.php";
  
  $col = array ("#845373", "#468966", "#846f4b", "#4a678c", "#644374", "gray", "#777777");
  $colb = array("#f2d6e4", "#e0f2e9", "#f7eede", "#e1ebf9", "#ddd6f8", "#eeeeee", "white");

  start_time();
  
  secure_variable("act");
  
  echo "<center>";
  echo "Выберите уровень сложности:<br><br><br><br>";
  echo "<table cellpadding=10>";
  echo "<tr>";
  echo "<td>";
  echo "<font size=+3><b>";
  echo "Все авторы:";
  echo "<td>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=4780&mqr=4821&an=45&qn=100>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=4780&mqr=5047&an=45&qn=1025>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=5002&mqr=5062&an=204&qn=3005>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=5067&mqr=5075&an=1019&qn=7257>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=5147&mqr=6880&an=7806&qn=55851>Безумный</a> ";

  $ci=5;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Философы:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=22&mar=4868&mqr=5031&an=10&qn=100>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=22&mar=4996&mqr=5036&an=20&qn=202>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=22&mar=5028&mqr=5047&an=30&qn=301>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=22&mar=5054&mqr=5075&an=50&qn=1014>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=22&mar=5101&mqr=5126&an=327&qn=6135>Безумный</a> ";

  $ci=1;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Художники:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=6&mar=5059&mqr=5069&an=11&qn=109>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=6&mar=5079&mqr=5083&an=20&qn=209>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=6&mar=5086&mqr=5090&an=30&qn=324>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=6&mar=5093&mqr=5099&an=58&qn=624>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=6&mar=5102&mqr=5103&an=128&qn=774>Безумный</a> ";

  $ci=2;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Поэты:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=8&mar=4909&mqr=5035&an=10&qn=103>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=8&mar=4971&mqr=5047&an=20&qn=201>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=8&mar=5045&mqr=5062&an=50&qn=503>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=8&mar=5069&mqr=5075&an=100&qn=1001>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=8&mar=5106&mqr=5174&an=788&qn=10853>Безумный</a> ";

  $ci=3;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Писатели:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=9&mar=4799&mqr=5017&an=10&qn=100>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=9&mar=4893&mqr=5039&an=20&qn=203>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=9&mar=5007&mqr=5055&an=51&qn=507>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=9&mar=5042&mqr=5070&an=105&qn=1117>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=9&mar=5120&mqr=6453&an=1473&qn=12624>Безумный</a> ";

  $ci=0;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Композиторы:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+2>";
  echo "<a href=qquiz.php?act=reset&i_id=7&mar=5072&mqr=5096&an=10&qn=104>Легкий</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=7&mar=5080&mqr=5101&an=21&qn=176>Средний</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=7&mar=5085&mqr=5101&an=30&qn=243>Норм</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=7&mar=5093&mqr=5103&an=50&qn=310>Сложный</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=7&mar=5100&mqr=5103&an=87&qn=377>Безумный</a> ";

  echo "</table>";
  echo "<br><br><br><br>Вы также можете выбирать или создавать настраиваемые уровни сложности (Острова) <a href=qi.php>здесь</a>.";
  echo "<hr></center>";
  
  //stop_time();
?>
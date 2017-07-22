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
  echo "Please select your difficulty level:<br><br><br><br>";
  echo "<table cellpadding=10>";
  echo "<tr>";
  echo "<td>";
  echo "<font size=+3><b>";
  echo "All authors:";
  echo "<td>";
  echo "<font size=+3>";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=3&mqr=102&an=45&qn=99>Easy</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=3&mqr=123&an=45&qn=1036>Normal</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=4&mqr=111&an=283&qn=3112>Hard</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=101&mqr=108&an=4439&qn=34150>Harder</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=1&mar=117&mqr=1913&an=24961&qn=527443>Insane</a> ";

  $ci=5;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Philosophers:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+3>";
  echo "<a href=qquiz.php?act=reset&i_id=33&mar=3&mqr=109&an=11&qn=101>Easy</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=33&mar=4&mqr=105&an=55&qn=279>Normal</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=33&mar=11&mqr=110&an=67&qn=674>Hard</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=33&mar=101&mqr=111&an=127&qn=1380>Harder</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=33&mar=115&mqr=908&an=178&qn=7529>Insane</a> ";

  $ci=1;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Artists:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+3>";
  echo "<a href=qquiz.php?act=reset&i_id=18&mar=11&mqr=110&an=10&qn=100>Easy</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=18&mar=101&mqr=104&an=89&qn=338>Normal</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=18&mar=102&mqr=104&an=165&qn=631>Hard</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=18&mar=103&mqr=105&an=248&qn=1148>Harder</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=18&mar=117&mqr=813&an=500&qn=7763>Insane</a> ";

  $ci=2;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Poets:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+3>";
  echo "<a href=qquiz.php?act=reset&i_id=23&mar=3&mqr=110&an=10&qn=101>Easy</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=23&mar=4&mqr=110&an=30&qn=301>Normal</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=23&mar=11&mqr=110&an=53&qn=531>Hard</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=23&mar=101&mqr=109&an=119&qn=1070>Harder</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=23&mar=116&mqr=1111&an=251&qn=9141>Insane</a> ";

  $ci=0;
  echo "<tr>";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font color='$col[$ci]' size=+3><b>";
  echo "Composers:";
  echo "<td bgcolor=$colb[$ci]>";
  echo "<font size=+3>";
  echo "<a href=qquiz.php?act=reset&i_id=19&mar=101&mqr=104&an=32&qn=122>Easy</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=19&mar=102&mqr=105&an=52&qn=243>Normal</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=19&mar=103&mqr=108&an=76&qn=511>Hard</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=19&mar=104&mqr=116&an=93&qn=1018>Harder</a> - ";
  echo "<a href=qquiz.php?act=reset&i_id=19&mar=117&mqr=317&an=179&qn=1963>Insane</a> ";

  echo "</table>";
  echo "<br><br><br><br>You can also select or create custom difficulty levels (isles) <a href=qi.php>here</a>.";
  echo "<hr></center>";
  
  //stop_time();
?>
<?
  include "lib.php";

  session_start();
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } else {
    $_SESSION['count']++;
  }

  include "style.php";

  $mtime = microtime(TRUE);
  $max_letters = 800;
  $max_authors = 5;
  $prize_cor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200, 250, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 5000, 10000, 20000, 50000, 100000, 200000, 500000, 1000000);

  //secure_variable("w_id");
  //secure_variable("a_id");
  //secure_variable("l");
  //secure_variable("total");
  //secure_variable("correct");
  
  $mr = $_SESSION[mr];
  $i_id = $_SESSION[i_id];
  $w_id = $_SESSION[w_id];
  //$a_id = $_SESSION[a_id];
  $l = $_SESSION[l];
  $total = $_SESSION[total];
  $correct = $_SESSION[correct];
  $state = $_SESSION[state];
  $wa = $_SESSION[wa];
  $ay = $_SESSION[ay];
  $logged = $_SESSION[logged];
  $p_hist = $_SESSION[p_hist];
  
  secure_variable("mr");
  secure_variable("i_id");
  secure_variable("a_id");
  secure_variable("act");
  
  if ($mr == 0) $mr = array_search(60, $mr_levels);
  
  if ($i_id>0) {
    $r = mysql_query("SELECT * FROM l_isles WHERE i_id='$i_id'");
    echo mysql_error();
    $wi = mysql_fetch_assoc($r);
    $i_mr = explode("|", $wi[i_mr]);
    $q_num = 0;
    foreach ($i_mr as $key => $val) {
      $i_mr2 = explode("+", $val);
      if ($i_mr2[0] == $mr) {
        for ($x=1; $x<count($i_mr2); $x++) $q_num += $i_mr2[$x];
      }
    }
    $i_cond = str_replace("-", ",", substr($wi[i_aids], 1, -1));
    $i_name = str_replace("|", ", ", substr($wi[i_anames], 1, -1));
  } else {
    $q_num = $mr_levels[$mr];
  }
  
  $max_hist = round($q_num*0.5);
  if ($max_hist == 0) $max_hist = 20;
  if ($max_hist > 100) $max_hist = 100;

  function save_session() {
    $_SESSION[mr] = $GLOBALS[mr];
    $_SESSION[i_id] = $GLOBALS[i_id];
    $_SESSION[w_id] = $GLOBALS[w_id];
    //$_SESSION[a_id] = $GLOBALS[a_id];
    $_SESSION[l] = $GLOBALS[l];
    $_SESSION[total] = $GLOBALS[total];
    $_SESSION[correct] = $GLOBALS[correct];
    $_SESSION[mr] = $GLOBALS[mr];
    $_SESSION[state] = $GLOBALS[state];
    $_SESSION[wa] = $GLOBALS[wa];
    $_SESSION[ay] = $GLOBALS[ay];
    $_SESSION[logged] = $GLOBALS[logged];
    $_SESSION[p_hist] = $GLOBALS[p_hist];
  }
  
  if (!isset($correct)) $correct = 0;
  if (!isset($total)) $total = 0;
  
  if ($act == "reset") {
    $w_id=0;
    $a_id=0;
    $l = 0;
    $total = 0;
    $correct = 0;
    $state = 0;
    //save_session();
  }
  
  if ($a_id>0) {
    // load question
    $r = mysql_query("SELECT * FROM l_works LEFT JOIN l_authors USING (a_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $ww2 = mysql_fetch_assoc($r);
    // Count total
    if ($state == 1) {
      $total++;
      if ($ww2[a_id] == $a_id) {
        $correct++;
        $this_correct = 1;
      }
    }
    // show prize
    if (($correct == $total) && (in_array($total, $prize_cor))) {
      echo "";
    }
  }

  // Share
  secure_variable("share");
  if (isset($share)) {
    $sharea = explode(":", gzuncompress(base64_decode($share)));
    $correct=$sharea[0];
    $q_num=$sharea[1];
    //print_r($sharea);
    //exit;
  }
  include "menu.php";
  if (isset($share)) {
    //exit;
    die ("<script language=\"javascript\">location.replace(\"pquiz.php\");</script>"); 
    //die("<script>setTimeout(function(){location.href='pquiz.php'} , 1000);</script>");
  }
  start_time();
  echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
  echo "<table><tr><td valign=top>";
  // Show level
  echo "<form action=pquiz.php method=get>";
  echo "<input type=hidden name=act value=reset>";
  echo "Уровень сложности: ";
  if ($i_id>0) {
    echo "<b>$i_name</b> ($q_num стихов) <a href=pquiz.php?act=reset&mr=0&i_id=0>Сбросить</a>";
  } else {
    echo "<select name=mr onChange='this.form.submit();'>";
    foreach ($mr_levels as $rat => $works) {
      echo "<option value=$rat";
      if ($mr == $rat) echo " selected";
      echo ">".$works." самых известных стихов</option>";
    }
    echo "</select>";
  }
  // Show correct
  if ($total>0) {
    // Show total
    if ($correct < $total) {
      $total = 0;
      $correct = 0;
    }
    // Правильно: <b>".round($correct/$total*100)."%</b> <a href=pquiz.php?act=reset>Сбросить</a>";
  }
  echo " Правильных ответов подряд: <b><font size=+2>$total</font></b>";
  if ($a_id>0) {
    if (($correct == $total) && (in_array($total, $prize_cor))) {
      // show prize
      echo "<p><table width=100% cellpadding=10><tr><td bgcolor=#ffffaa><center>";
      echo "<font size=+2>Вы отлично разбираетесь в стихах!<br>";
      echo "Вы отгадали <b>$correct</b> поэтов подряд из <b>$q_num</b> самых известных стихов. Играйте дальше и наберите еще больше правильных ответов подряд!<br>";
      echo "Вы можете рассказать о победе в социальных сетях:<br><br>";
      //$server_url = "http://".$_SERVER[HTTP_HOST].dirname($_SERVER[REQUEST_URI]);
      $server_url = "$url_share/pquiz";
      $share_url = "$server_url/pquiz.php?share=".base64_encode(gzcompress("$correct:$q_num"));
      echo "
        <script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
        <script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
        <div class='ya-share2' 
        data-services='vkontakte,facebook,odnoklassniki,gplus' 
        data-counter='' 
        data-description='Попробуйте отгадать $correct поэтов подряд из $q_num стихов как я!' 
        data-title='Я отлично разбираюсь в стихах!' 
        data-url='$share_url'
        data-image='$server_url/i/pquiz4.png'></div>
      ";
      echo "</table>";
    }
    echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
      $(document).keydown(function (event) {
        if (event.keyCode == 189) {
          window.location.href = 'pquiz.php?nc=$mtime';
        }
      });  
    });  
    </script>";
    // Show old text
    $ta2 = explode("\n", $ww2[w_text]);
    $color = "#ffe5e5";
    echo "<p><table width=100% cellpadding=10><tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=pquiz.php?nc=$mtime&mr=$mr>";
    echo "<div style='height:100%;width:100%'>";
    echo "<br><font size=+3>Следующий вопрос<br><br>";
    echo "</table>";
    if ($ww2[a_id] == 0) exit;
    show_quote($ww2, 'r');
  
    if ($ww2[a_id] == $a_id) $color="#e5ffe5";
    echo "<table cellpadding=10><tr><td bgcolor=$color>";
    echo "<pre>";
    if ($l>0) echo "...\n";
    $letters = 0;
    for ($i=0; $i<$max_lines; $i++) {
      $letters += strlen($ta2[$l+$i]);
      echo $ta2[$l+$i]."";
      if ($letters > $max_letters) break;
    }
    if ($l+$max_lines < count($ta2)) echo "...\n";
    echo "</pre>";
    if ($ww2[a_id] == $a_id) echo "<font color=green><b>Правильно!</b></font><br>";
    else echo "<font color=red><b>Неправильно!</b></font><br>";
    echo "<a target=_blank href='authors.php?a_id=$ww2[a_id]'>$ww2[a_name]</a> ";
    $wikilink = "http://ru.wikipedia.org/w/index.php?search=$ww2[a_name]";
    if ($ww2[a_wiki] != "") $wikilink = $ww2[a_wiki];
    echo " <a target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    if ($ww2[a_year1] != 0) {
      echo " [$ww2[a_year1]-";
      if ($ww2[a_year2] != 0) echo "$ww2[a_year2]";
      echo "] ";
    }
    if ($ww2[a_country] != "") echo " $ww2[a_country] ";
    $r2 = mysql_query("SELECT * FROM l_atags WHERE a_id='".$ww2[a_id]."'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "<a href=works.php?t_id=$w2[t_id]><font color=gray>$w2[t_name]</font></a>";
    }
    echo "<br>";
    if ($ww2[a_desc] != "") echo "$ww2[a_desc]<br>";

    echo "<br><a target=_blank href='works.php?w_id=$ww2[w_id]'>$ww2[w_name]</a>";
    echo " <a target=_blank href='https://www.google.ru/search?q=$ww2[a_name] $ww2[w_name] анализ'><img valign=middle height=$button_height src=i/google.png></a> ";
    echo "<br><br>";
    // Show info
    if ($ww2[w_years] != "") echo "Написано: <b>$ww2[w_years]</b><br>";
    if (($ww2[w_lang] != "Русский") && ($ww2[w_lang] != "")) echo "Язык оригинала: <b>$ww2[w_lang]</b><br>";
    if ($ww2[w_rating] > 999) echo "Известность произведения: <b>Высокая</b><br>";
    elseif ($ww2[w_rating] > 0) echo "Известность произведения: <b>Средняя</b><br>";
    else echo "Известность произведения: <b>Низкая</b><br>";
    $r2 = mysql_query("SELECT * FROM l_tags WHERE w_id='$ww2[w_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    if ($n2>0) echo "Метки: ";
    echo mysql_error();
    for ($i=0; $i<$n2; $i++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($i>0) echo ", ";
      echo "<a target=_blank href='works.php?t_id=$w2[t_id]'>$w2[t_name]</a>";
    }
    if (file_exists("apic/".$ww2[a_id].".jpg")) echo "<td align=right valign=top><img height=200 src=apic/$ww2[a_id].jpg>";
    echo "</table>";
    stop_time();
    $state = 0;
    //$a_id = 0;
    if (($logged == 0) && ($w_id>0)) {
      mysql_query("INSERT INTO l_log 
        VALUES('', '$a_id', '$w_id', NOW(), '$this_correct', '".get_ip()."', '".session_id()."', '$total', '$mr', '$l', '$i_id')");
      echo mysql_error();
      if ($i_id>0) {
        mysql_query("UPDATE l_isles SET i_games=i_games+1 WHERE i_id='$i_id'");
        echo mysql_error();
      }
      // Record block history
      if ($p_hist != "") {
        $ha = explode(",", $p_hist);
        $to_del = count($ha) - $max_hist;
        if ($to_del > 0) for ($x=0; $x<$to_del; $x++) unset($ha[$x]);
        $p_hist = implode(",", $ha);
        $p_hist .= ",";
      }
      $p_hist .= $w_id;
    }
    $logged = 1;
    save_session();
    //echo "$p_hist:$max_hist";
    if (count($ha)>0) echo "В вашей истории сохранено ".count($ha)." стихов.";
    exit;
  }
  echo "</form>";
  $logged = 0;

  if ($p_hist != "") {
    $ha = explode(",", $p_hist);
  }
  if (($state == 0) || ($w_id == 0)) {
    if ($p_hist != "") $cond2 .= " AND (w_id NOT IN ($p_hist)) ";
    if ($i_id>0) {
      $cond2 = "";
      $cond3 .= " AND (a_id IN ($i_cond)) ";
      $q = "SELECT * FROM l_authors WHERE 1=1 $cond3 $year_cond ORDER BY RAND() LIMIT 1";
      $r = mysql_query($q);
      echo mysql_error();
      $wa2 = mysql_fetch_assoc($r);
      $cond4 .= " AND a_id='$wa2[a_id]' ";
    }
  
    $q = "SELECT * FROM l_works LEFT JOIN l_authors USING (a_id) WHERE a_maxr>='$mr' AND w_rating>='$mr' $cond2 $cond4 $year_cond ORDER BY RAND() LIMIT 1";
    $r = mysql_query($q);
    echo mysql_error();
    $ww = mysql_fetch_assoc($r);
      
    if ($i_id>0) {
      $q = "SELECT * FROM l_authors WHERE a_works>0 $year_cond $cond3 ORDER BY a_year1";
    } else {
      $q = "SELECT * FROM l_authors WHERE a_works>0 AND a_id != $ww[a_id] AND a_maxr>='$mr' $year_cond $cond3 
        ORDER BY RAND() LIMIT $max_authors";
    }
    $r2 = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r2);
    $ay = array();
    $wa = array();
    for ($i=0; $i<$n; $i++) {
      $wa[$i] = mysql_fetch_assoc($r2);
      $ay[$i] = $wa[$i][a_year1];
      if ($wa[$i][a_id] == $ww[a_id]) $cor_ind = $i;
      // Select random work
      $r3 = mysql_query("SELECT w_id FROM l_works WHERE a_id='".$wa[$i][a_id]."' AND w_id != $ww[w_id] ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $w3 = mysql_fetch_assoc($r3);
      $wa[$i][w_id] = $w3[w_id];
    }
    if ($i_id == 0) {
      $cor_ind = mt_rand(0, $max_authors-1);
      $wa[$cor_ind][a_name] = $ww[a_name];
      $wa[$cor_ind][a_id] = $ww[a_id];
      $wa[$cor_ind][w_id] = $ww[w_id];
      $wa[$cor_ind][a_desc] = $ww[a_desc];
      $wa[$cor_ind][a_year1] = $ww[a_year1];
      $wa[$cor_ind][a_year2] = $ww[a_year2];
      $wa[$cor_ind][a_country] = $ww[a_country];
      $ay[$cor_ind] = $ww[a_year1];
      asort($ay);
    }
    
    $w_id = $ww[w_id];
  } else {
    $r = mysql_query("SELECT * FROM l_works LEFT JOIN l_authors USING (a_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $ww = mysql_fetch_assoc($r);
  }
  
  $ta = explode("\n", $ww[w_text]);
  $line_count = count($ta);
  $letter_count = strlen($ww[w_text]);
  
  //echo "$ww[w_id] $line_count $letter_count";

  if ($state == 0) {
    $line1 = mt_rand(0, max(0, $line_count-$max_lines-2));
    if (trim($ta[$line1]) == "") $line1++;
    if (trim($ta[$line1]) == "") $line1++;
    if (trim($ta[$line1]) == "") $line1++;
    if (trim($ta[$line1]) == "") $line1++;
    //echo "Selected $line1<br>";
    $search = 5;
    if ($line1 > 20) $search = 10;
    if ($line1 < $search) $line1 = 0;
    else if (trim($ta[$line1]) != "") {
      for ($x=1; $x<$search; $x++) {
        //echo "Try $x<br>";
        if (trim($ta[$line1-$x]) == "") {
          //echo "Success $x<br>";
          $line1 -= $x-1;
          break;
        }
      }
    }
    //echo "Corrected $line1<br>";
    $l = $line1;
  } else {
    $line1 = $l;
  } 
  
  echo "<br><pre onmousedown='return false;' onselectstart='return false;' style='-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;'><font size=+2>";
  if ($line1>0) echo "...\n";
  $letters = 0;
  for ($i=0; $i<$max_lines; $i++) {
    $letters += strlen($ta[$line1+$i]);
    echo $ta[$line1+$i]."";
    if ($letters > $max_letters) break;
  }
  if ($line1+$max_lines < $line_count) echo "...\n";
  echo "</font></pre>";
  
  
  echo "<p><b>Угадайте автора текста:</b><br>";
  //for ($i=0; $i<$max_authors; $i++) {
  echo "<form action=pquiz.php method=get>";
  echo "<input type=hidden name=nc value=$mtime>";
  echo "<table cellpadding=4>";
  $first = 1;
  foreach ($ay as $i => $val) {
    //if ($i == $cor_ind) echo "<b>";
    echo "\n<tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=pquiz.php?a_id=".$wa[$i][a_id]."&nc=$mtime&mr=$mr>";
    echo "<div style='display:inline-block; height:100%;width:100%'>";
    echo "<input ";
    if ($first == 1) echo "id=sel1 ";
    echo "style='vertical-align: center; width: 18px; height: 18px;' tabindex=1 type=radio name=a_id value=".$wa[$i][a_id].">";
    echo " <font size=+3>".$wa[$i][a_name]."</font>";
    if ($wa[$i][a_year1]!=0) {
      echo " [".$wa[$i][a_year1];
      if ($wa[$i][a_year2]!=0) echo " - ".$wa[$i][a_year2];
      echo "]";
    }
    if ($wa[$i][a_country] != "") echo " ".$wa[$i][a_country]." ";
    //echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=".$wa[$i][a_name]."'><img valign=top height=18 src=i/wiki.png></a> ";
    $r2 = mysql_query("SELECT * FROM l_atags WHERE a_id='".$wa[$i][a_id]."'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    if ($n2 > 0) echo "<br><font color=gray>";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      echo "$w2[t_name]";
    }
    if ($wa[$i][a_desc] != "") echo "<br><font color=black>".$wa[$i][a_desc]."";
    echo "</div></a>";
    echo "<td bgcolor=#eeeeee valign=top>";
    echo "<a href=pquiz.php?a_id=".$wa[$i][a_id]."&nc=$mtime&mr=$mr>";
    echo "<div style='height:100%;width:100%'>";
    if (file_exists("apic/".$wa[$i][a_id].".jpg")) echo "<img align=right width=120 src=apic/".$wa[$i][a_id].".jpg>";
    $first = 0;
    //if ($wa[$i][a_tags] != "") echo " <font color=gray>".$wa[$i][a_tags]."</font>";
    echo "<td><a href='works.php?w_id=".$wa[$i][w_id]."' target=_blank><img height=22 src=i/help.png></a>";
  }
  echo "</table>";
  echo "<input type=submit style='position: absolute; left: -9999px; width: 1px; height: 1px;'>";
  echo "</form>";
  echo "<td valign=top>";
  foreach ($ay as $i => $val) {
    //if (file_exists("apic/".$wa[$i][a_id].".jpg")) echo "<a target=_blank href=authors.php?a_id=".$wa[$i][a_id]." title='".$wa[$i][a_name]."'><img height=150 src=apic/".$wa[$i][a_id].".jpg><br>";
  }
  /*
  echo "<li>";
  if ($mr != 1500) echo "<a href=pquiz.php?mr=1500>";
  echo "<b>30 самых известных произведений</b></a><br>";
  echo "<li>";
  if ($mr != 850) echo "<a href=pquiz.php?mr=850>";
  echo "<b>60 самых известных произведений</b></a><br>";
  echo "<li>";
  if ($mr != 550) echo "<a href=pquiz.php?mr=550>";
  echo "<b>120 самых известных произведений</b></a><br>";
  //echo "<li>";
  //if ($mr != 435) echo "<a href=pquiz.php?mr=435>";
  //echo "<b>200 самых известных произведений</b></a><br>";
  echo "<li>";
  if ($mr != 0) echo "<a href=pquiz.php?mr=0>";
  echo "<b>240 самых известных произведений</b></a><br>";
  echo "<li>";
  if ($mr != -1000) echo "<a href=pquiz.php?mr=-1000>";
  echo "<b>570 самых известных произведений</b></a><br>";
  echo "<li>";
  if ($mr != -2000) echo "<a href=pquiz.php?mr=-2000>";
  echo "<b>Все 10 820 произведений</b></a><br>";
  */
  echo "</table>";
  echo "<hr><font color=gray>";
  echo "<br>Использованы материалы сайтов <a target=_blank href=http://www.100bestpoems.ru/>http://www.100bestpoems.ru</a> <a target=_blank href=http://er3ed.qrz.ru>http://er3ed.qrz.ru</a>";
  stop_time();
  $state = 1;
  save_session();
  //echo "$w_id $line1 ";
  if (count($ha)>0) echo "В вашей истории сохранено ".count($ha)." стихов.";
?>
<br><script>window.scroll(0, 100);</script>
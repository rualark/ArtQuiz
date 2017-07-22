<?
  include "../rlit/lib.php";

  include "style.php";
  include "menu.php";
  start_time();
  
  secure_variable("act");
  secure_variable("order");

  if ($act == "create") {
    $aids = "-";
    $anames = "|";
    // Construct isle
    for ($i=0; $i<50000; $i++) {
      $a = "a$i";
      if (isset($_GET[$a])) {
        $q = "SELECT a_name2 FROM rl_authors WHERE a_id=$i";
        $r = mysql_query($q);
        echo mysql_error();
        $w = mysql_fetch_assoc($r);
        echo "Adding author $i $w[a_name]<br>";
        $aida[] = $i;
        $aids .= "$i-";
        $anames .= "$w[a_name2]|";
      }
    }
    // Count works (text)
    $cond = str_replace("-", ",", substr($aids, 1, strlen($aids)-2));
    $q = "SELECT * FROM rl_works WHERE a_id IN ($cond) AND w_fil=1 AND (t_len>0 OR t_len2>0) ORDER BY w_rating DESC";
    echo "$q<br>";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $need_cut = 0;
    $old_r = 0;
    $cur_mr = 0;
    $last_i = 0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $acnt[$w[a_id]]++;
      if ($i+1 == $mr_levels_i[$cur_mr]) {
        echo "Found $i works<br>";
        $need_cut = 1;
      }
      if ($need_cut > 0) {
        if ($old_r != $w[w_rating]) {
          //print_r($acnt);
          //echo " $i cut $old_r<br>";
          $need_cut = 0;
          $cur_mr++;
          $i_mr .= "$old_r+";
          foreach ($aida as $key => $val) $i_mr .= "$acnt[$val]+";
          $i_mr = substr($i_mr, 0, -1)."|";
          $last_i = $i;
        } else {
          //echo "$i cannot cut $old_r<br>";
        }
      }
      $old_r = $w[w_rating];
    }
    if ($last_i < $i) {
      $i_mr .= "$old_r+";
      foreach ($aida as $key => $val) $i_mr .= "$acnt[$val]+";
      $i_mr = substr($i_mr, 0, -1)."|";
    }
    /*
    // Count works (brief)
    $cond = str_replace("-", ",", substr($aids, 1, strlen($aids)-2));
    $q = "SELECT * FROM rl_works WHERE a_id IN ($cond) AND w_fil=1 AND b_len>0 ORDER BY w_rating DESC";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $need_cut = 0;
    $old_r = 0;
    $cur_mr = 0;
    $acnt = array();
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $acnt[$w[a_id]]++;
      if ($i+1 == $mr_levels_i[$cur_mr]) {
        echo "Found $i works<br>";
        $need_cut = 1;
      }
      if ($need_cut > 0) {
        if ($old_r != $w[w_rating]) {
          //print_r($acnt);
          //echo " $i cut $old_r<br>";
          $need_cut = 0;
          $cur_mr++;
          $i_mr2 .= "$old_r+";
          foreach ($aida as $key => $val) $i_mr2 .= "$acnt[$val]+";
          $i_mr2 = substr($i_mr2, 0, -1)."|";
        } else {
          //echo "$i cannot cut $old_r<br>";
        }
      }
      $old_r = $w[w_rating];
    }
    if ($need_cut > 0) {
      $i_mr2 .= "$old_r+";
      foreach ($aida as $key => $val) $i_mr2 .= "$acnt[$val]+";
      $i_mr2 = substr($i_mr2, 0, -1)."|";
    }
    */
    // Save isle
    $i_mr = substr($i_mr, 0, -1);
    //$i_mr2 = substr($i_mr2, 0, -1);
    $q = "INSERT INTO rf_isles VALUES('', '$aids', '$i_mr', NOW(), '$anames', 0)";
    echo $q;
    mysql_query($q);
    echo mysql_error();
    stop_time();
    exit;
    die ("<script language=\"javascript\">location.replace(\"pi-fil.php\");</script>"); 
  }
  
  if ($act == "new") {
    echo "<b>Выберите философов для создания острова:</b>";
    if (!isset($order)) $order="a_rating desc, a_year1";
    $q = "SELECT * FROM rl_authors WHERE a_fil=1 AND a_works2>0 ORDER BY $order";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<form action=pi-fil.php method=get>";
    echo "<input type=hidden name=act value=create>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href=pi-fil.php?act=new&order=a_name>Имя";
  echo "<th><a href=pi-fil.php?act=new&order=a_year1>Годы";
  echo "<th><a href='pi-fil.php?act=new&order=a_country, a_year1'>Страна";
  echo "<th>Метки";
  echo "<th><a href='pi-fil.php?act=new&order=a_works desc'>Работ";
  echo "<th><a href='pi-fil.php?act=new&order=a_rating desc, a_year1'>Рейтинг";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      echo "<tr>";
      echo "<td>";
      echo "<input type=checkbox name=a$w[a_id]> ";
      echo "<a href=authors.php?a_id=$w[a_id]>";
      if ($w[a_desc] != "") echo "<font color=green>";
      echo "$w[a_name]</font></a>";
      if ($max_year>0) if (($w[a_year2] == 0) || ($w[a_year2] > $max_year)) echo " <img title='Тексты данного автора недоступны по лицензионным ограничениям' src=i/fire.png height=16>";
      echo "<td>$w[a_year1]-";
      if ($w[a_year2] != 0) echo $w[a_year2];
      echo "<td>$w[a_country]";
      echo "<td>";
      if ($w[a_prof] != 'Философ') echo "$w[a_prof]";
      // Show rq tags
      $r2 = mysql_query("SELECT * FROM rq_atags WHERE a_id='$w[rq_id]' AND t_type>0 AND LEFT(t_name, 1)!='!' ORDER BY t_type DESC, t_name LIMIT 30");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        //else echo "<br>";
        echo " <a target=_blank href='$url_main/rfil/works.php?tag=$w2[t_name]'>";
        if ($w2[t_type] == 2) echo "<font color=green>";
        if ($w2[t_type] == 1) echo "";
        if ($w2[t_type] == 0) echo "<font size=1 color=#bbbbbb>";
        echo "$w2[t_name]</font>";
        echo "</a>";
      }
      echo "<td>$w[a_works]";
      echo "<td>$w[a_rating]";
    }
    echo "</table>";
    echo "<br>";
    echo "<input type=submit value='Создать остров из выбранных философов'>";
    stop_time();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    exit;
  }
  
  echo "<p><a href=pi-fil.php?act=new>Создать новый остров философов</a>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href='pi-fil.php?order=i_created DESC'>Создан";
  echo "<th>Философы";
  echo "<th>Книг";
  echo "<th><a href='pi-fil.php?order=i_games DESC'>Игр";
  if ($order == '') $order='i_games DESC';
  $r = mysql_query("SELECT * FROM rf_isles ORDER BY $order");
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td><center>".substr($w[i_created], 0, strpos($w[i_created], ' '));
    echo "<td>";
    $ai = explode("-", $w[i_aids]);
    $an = explode("|", $w[i_anames]);
    $n2 = count($ai);
    for ($x=1; $x<$n2-1; $x++) {
      if ($x>1) echo ", ";
      echo " <a href=authors.php?a_id=$ai[$x]><font color=$color[$x]>$an[$x]</font></a>";
    }
    echo "<td><center>";
    $am = explode("|", $w[i_mr]);
    $n3 = count($am);
    for ($x=0; $x<$n3; $x++) {
      //if ($x>0) echo " ";
      $amm = explode("+", $am[$x]);
      $n4 = count($amm);
      $st = "";
      $good = 1;
      for ($y=1; $y<$n4; $y++) {
        $st .= "<font color=$color[$y]>$amm[$y]</font>+";
        if ($amm[$y] == 0) $good = 0;
      }
      if ($good == 1) {
        $st = substr($st, 0, -1);
        echo "<a href='pquiz-fil.php?act=reset&i_id=$w[i_id]&mr=$amm[0]&mode='>$st</a><br>";
      }
      echo "</a> ";
    }
    echo "<td><center>$w[i_games]";
  }
  echo "</table>";
  echo "<p>Для того, чтобы создать новый остров, кликните 'Создать новый остров', поставьте галочки напротив философов, которые будут на нем и внизу списка нажмите кнопку 'Создать новый остров'";
  echo "<p>Для того, чтобы играть на существующем острове, нажмите на одну из разноцветных ссылок в столбцах 'Книг'";
  stop_time();
?>

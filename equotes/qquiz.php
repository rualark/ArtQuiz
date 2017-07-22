<?
  include "lib.php";
  include "plib.php";
  start_time();
  include "../auth.php";

  session_start();

  include "style.php";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>";

  $mtime = microtime(TRUE);
  $max_authors = 5;
  $max_lines = 30; // For poems
  $max_desc = 300;
  $prize_cor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200, 250, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 5000, 10000, 20000, 50000, 100000, 200000, 500000, 1000000);

  $mar = $_SESSION[eq_mar];
  $mqr = $_SESSION[eq_mqr];
  $an = $_SESSION[eq_an];
  $qn = $_SESSION[eq_qn];
  $i_id = $_SESSION[eq_i_id];
  $q_id = $_SESSION[eq_q_id];
  //$a_id = $_SESSION[a_id];
  $total = $_SESSION[eq_total];
  $correct = $_SESSION[eq_correct];
  $state = $_SESSION[eq_state];
  $wa = $_SESSION[eq_wa];
  $logged = $_SESSION[eq_logged];
  $q_hist = $_SESSION[eq_q_hist];
  
  secure_variable("mar");
  secure_variable("mqr");
  secure_variable("an");
  secure_variable("qn");
  secure_variable("i_id");
  secure_variable("a_id");
  secure_variable("act");
  
  if ($mar == 0) {
    $mar = 3;
    $mqr = 2000;
    $i_id = 1;
    $an = 45;
    $qn = 230;
  }
  
  if ($act == "reset") {
    $q_id=0;
    $a_id=0;
    $total = 0;
    $correct = 0;
    $state = 0;
  }
  
  $r = mysql_query("SELECT * FROM eq_isles LEFT JOIN cc_users USING (u_id) WHERE i_id='$i_id'");
  echo mysql_error();
  $wi = mysql_fetch_assoc($r);
  //load_isle();
  // Conditions
  if (strlen($wi[i_aa])>1) {
    $acond = str_replace("-", ',', substr($wi[i_aa], 1, -1));
    $cond .= "AND a_id IN ($acond) ";
  } else {
    if (strlen($wi[i_ac])>1) {
      $ccond = '"'.str_replace("-", '","', substr($wi[i_ac], 1, -1)).'"';
      $cond .= "AND a_country IN ($ccond) ";
    }
    if (strlen($wi[i_ap])>1) {
      $pcond = '"'.str_replace("-", '","', substr($wi[i_ap], 1, -1)).'"';
      $cond .= "AND a_type IN ($pcond) ";
    }
  }
  if (strlen($wi[i_at])>1) {
    $tcond = '"'.str_replace("|", '","', substr($wi[i_at], 1, -1)).'"';
    $cond .= "AND t_name IN ($tcond) ";
    $cond2 .= "AND t_name IN ($tcond) ";
    $join .= "LEFT JOIN eq_qtags USING (q_id) ";
  }
  //echo $cond;
  
  $max_hist = round($qn*0.5);
  if ($max_hist == 0) $max_hist = 20;
  if ($max_hist > 100) $max_hist = 100;

  function save_session() {
    $_SESSION[eq_mar] = $GLOBALS[mar];
    $_SESSION[eq_mqr] = $GLOBALS[mqr];
    $_SESSION[eq_an] = $GLOBALS[an];
    $_SESSION[eq_qn] = $GLOBALS[qn];
    $_SESSION[eq_i_id] = $GLOBALS[i_id];
    $_SESSION[eq_q_id] = $GLOBALS[q_id];
    //$_SESSION[a_id] = $GLOBALS[a_id];
    $_SESSION[eq_l] = $GLOBALS[l];
    $_SESSION[eq_total] = $GLOBALS[total];
    $_SESSION[eq_correct] = $GLOBALS[correct];
    $_SESSION[eq_mr] = $GLOBALS[mr];
    $_SESSION[eq_state] = $GLOBALS[state];
    $_SESSION[eq_wa] = $GLOBALS[wa];
    $_SESSION[eq_logged] = $GLOBALS[logged];
    $_SESSION[eq_q_hist] = $GLOBALS[q_hist];
  }
  
  if (!isset($correct)) $correct = 0;
  if (!isset($total)) $total = 0;
  
  if ($a_id>0) {
    // load question
    $r = mysql_query("SELECT * FROM eq_quotes LEFT JOIN eq_authors USING (a_id) WHERE q_id='$q_id'");
    echo mysql_error();
    $wq2 = mysql_fetch_assoc($r);
    // Count total
    if ($state == 1) {
      $total++;
      if ($wq2[a_id] == $a_id) {
        $correct++;
        $this_correct = 1;
      }
    }
  }

  include "menu.php";
  if (isset($share)) {
    die ("<script language=\"javascript\">location.replace(\"qquiz.php\");</script>"); 
    //die("<script>setTimeout(function(){location.href='qquiz.php'} , 1000);</script>");
  }
  echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
  echo "<table><tr><td valign=top>";
  // Show level
  echo "Difficulty: ";
  echo "<b>$wi[i_name]</b> ($an authors, $qn quotes).";
  //if ($i_am_admin) echo " <a title='Add this level to levels list' href='qi.php?act=addlevel&i_id=$wi[i_id]&an=$an&qn=$qn&mar=$mar&mqr=$mqr'><img src=i/plus.png height=16></a>";
  // Show correct
  if ($total>0) {
    // Show total
    if ($correct < $total) {
      $total = 0;
      $correct = 0;
    }
  }
  echo " Correct answers in a row: <b><font size=+2>$total</font></b>";
  if ($a_id>0) {
    echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
      $(document).keydown(function (event) {
        if (event.keyCode == 189) {
          window.location.href = 'qquiz.php?nc=$mtime';
        }
      });  
    });  
    </script>";
    // Show old text
    $color = "#ffd5d5";
    if ($wq2[a_id] == $a_id) $color="#d5ffd5";
    echo "<p><table cellpadding=10><tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=qquiz.php?nc=$mtime&mar=$mar&mqr=$mqr&i_id=$i_id&an=$an&qn=$qn>";
    echo "<div style='height:100%;width:100%'>";
    echo "<br><font size=+3>Next question<br><br>";
    echo "</table>";
    if ($wq2[a_id] == 0) exit;
    echo "<table cellpadding=10><tr><td bgcolor=$color>";
    if ($wq2[q_img] != 0) echo "<a target=_blank href='works.php?q_id=$wq2[q_id]'><img src=qpic/$wq2[a_id]/$wq2[q_id].jpg></a><hr>";
    else {
      echo "<table><td width=700><a target=_blank href='works.php?q_id=$wq2[q_id]'><font size=+2>$wq2[q_txt]</font></table><hr>";
    }
    // Show tags
    $r2 = mysql_query("SELECT * FROM eq_qtags WHERE q_id='$wq2[q_id]'");
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    echo mysql_error();
    if ($n2>0) echo "Tags: ";
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      if ($x>0) echo ", ";
      
      echo " <a title='$w2[l_type]' target=_blank href=\"works.php?tag=$w2[t_name]\">";
      if (strpos($w2[l_type], 'opposed') !== false) echo "<font color=red>";
      elseif ($w2[l_type] != '') echo "<font color=#bbbbbb>";
      else echo "<font color=green>";
      echo "$w2[t_name]</font></a>";
    }
    echo "<br><a target=_blank href='https://www.google.com/search?q=$wq2[q_txt]'><img valign=middle height=$button_height src=i/google.png></a> ";
    if ($wq2[q_brainyquote] != "") echo "<a target=_blank href='https://www.brainyquote.com/quotes/quotes/$wq2[q_brainyquote]'><img valign=middle height=$button_height src=i/brainyquote.png></a> ";
    show_integration($wq2);
    if ($n2>0) echo "<hr>";
    if ($wq2[a_id] == $a_id) echo "<font color=green><b>Correct!</b></font>";
    else echo "<font color=red><b>Wrong!</b></font> ";
    echo "<br>";
    echo "<a target=_blank href='authors.php?a_id=$wq2[a_id]'>$wq2[a_name]</a> ";
    $wikilink = "http://en.wikipedia.org/w/index.php?search=$wq2[a_name]";
    if ($wq2[a_wiki] != "") $wikilink = $wq2[a_wiki];
    echo " <a target=_blank href='$wikilink'><img valign=middle height=$button_height src=i/wiki.png></a> ";
    if ($wq2[a_year1] != 0) {
      echo " [$wq2[a_year1]-";
      if ($wq2[a_year2] != 0) echo "$wq2[a_year2]";
      echo "] ";
    }
    if ($wq2[a_country] != "") echo " <a target=_blank href='authors.php?country=$wq2[a_country]'>$wq2[a_country]</a> ";
    if (($wq2[a_type] != '') && ($wq2[a_type2] != '')) echo " <a href=\"authors.php?type=$wq2[a_type]\">$wq2[a_type]</a>, $wq2[a_type2]";
    elseif ($wq2[a_type2] != '') echo " $wq2[a_type2]";
    else echo " <a href=\"authors.php?type=$wq2[a_type]\">$wq2[a_type]</a>";
    echo "<br>";
    show_integration_tags($wq2, 1);
    if ($wq2[a_desc] != "") echo "<div class=readmore><pre>".str_replace("\r\n", "\r\n\r\n", $wq2[a_desc])."</pre></div>";
    echo "<script type='text/javascript' src='js/readmore2.js'></script>";

    //echo "<br>";
    // Show info
    //echo "Author rank: $wq2[a_rating]<br>";
    //echo "Quote rank: $wq2[q_rating]<br>";
    
    if (file_exists("apic/".$wq2[a_id].".jpg")) echo "<td align=right valign=top><img height=200 src=apic/$wq2[a_id].jpg>";
    // Show poem, painting, music
    if ($wq2[ep_id]>0) {
      echo "<tr><td bgcolor=#eeeeee>";
      $r3 = mysql_query("SELECT w_id, w_name FROM ep_works WHERE a_id='$wq2[ep_id]' ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $w3 = mysql_fetch_assoc($r3);
      if ($w3[w_id]>0) {
        echo "<a target=_blank href=$url_main/epquiz/works.php?w_id=$w3[w_id]>$w3[w_name]</a><br>";
        $fa = file("$url_epoems/$wq2[ep_id]/$w3[w_id].txt");
        $n3 = count($fa);
        for ($i=0; $i<$n3; $i++) {
          if ($i > $max_lines) {
            echo "<a target=_blank href=$url_main/epquiz/works.php?w_id=$w3[w_id]>...</a><br>";
            break;
          }
          echo "$fa[$i]<br>";
        }
      }
    } elseif ($wq2[aq_id]>0) {
      echo "<tr><td bgcolor=#eeeeee>";
      $r3 = mysql_query("SELECT p_id, p_name FROM aq_paintings WHERE a_id='$wq2[aq_id]' ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $w3 = mysql_fetch_assoc($r3);
      if ($w3[p_id]>0) {
        echo "<a target=_blank href=$url_main/aquiz/painting.php?a_id=$wq2[aq_id]&p_id=$w3[p_id]>";
        show_painting($wq2[aq_id], $w3[p_id], 650, 650);
        echo "</a>";
      }
    } elseif ($wq2[cc_id]>0) {
      echo "<tr><td bgcolor=#eeeeee>";
      $r3 = mysql_query("SELECT * FROM cc_ctracks WHERE c_id='$wq2[cc_id]' AND t_bad=0 ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $ts = mysql_fetch_assoc($r3);
      if ($ts[t_id]>0) {
        echo "<a target=_blank href=$url_main/cquiz/ptracks.php?c_id=$wq2[cc_id]&t_id=$ts[t_id]>";
        $fld = $ts[t_folder2]."/";
        if ($ts[t_folder2] == "") $fld = "";
        if ($ts[t_comment] != "") echo "<br><b><font style='BACKGROUND-COLOR: #dddddd'>".stripslashes($ts[t_comment])."</font></b>";
        echo "".str_replace("/", " / ", "$fld".$ts[t_name]);
        echo "</a>";
        show_player($ts[t_id], 0, 0, 0, 1, 1);
      }
    }
    
    echo "</table>";
    stop_time();
    $state = 0;
    //$a_id = 0;
    if (($logged == 0) && ($q_id>0)) {
      mysql_query("INSERT INTO eq_log 
        VALUES('', '$a_id', '$wq2[a_id]', '$q_id', NOW(), '$this_correct', '".get_ip()."', '".session_id()."', '$total', '$i_id', '$mar', '$mqr', '$an', '$qn', '$ua[u_id]')");
      echo mysql_error();
      if ($i_id>0) {
        mysql_query("UPDATE eq_isles SET i_games=i_games+1 WHERE i_id='$i_id'");
        echo mysql_error();
      }
      // Record block history
      if ($q_hist != "") {
        $ha = explode(",", $q_hist);
        $to_del = count($ha) - $max_hist;
        if ($to_del > 0) for ($x=0; $x<$to_del; $x++) unset($ha[$x]);
        $q_hist = implode(",", $ha);
        $q_hist .= ",";
      }
      $q_hist .= $q_id;
    }
    $logged = 1;
    save_session();
    //echo "$q_hist:$max_hist";
    if (count($ha)>0) echo "Your history has ".count($ha)." quotes.";
    exit;
  }
  echo "</form>";
  $logged = 0;

  if ($q_hist != "") {
    $ha = explode(",", $q_hist);
  }
  if (($state == 0) || ($q_id == 0)) {
    if ($q_hist != "") $cond2 .= " AND (q_id NOT IN ($q_hist)) ";
    if (strlen($wi[i_at])>1) {
      $q = "SELECT * FROM (SELECT eq_authors.* FROM eq_atags 
        STRAIGHT_JOIN eq_authors ON (eq_atags.a_id=eq_authors.a_id) 
        WHERE a_rating<='$mar' $cond 
        GROUP BY eq_authors.a_id 
        ORDER BY RAND() 
        LIMIT 5) a ORDER BY a_year1";
    } else {
      $q = "SELECT * FROM (SELECT * FROM eq_authors 
        WHERE a_rating<='$mar' $cond 
        ORDER BY RAND() 
        LIMIT 5) a ORDER BY a_year1";
    }
    //echo " <font size=1 color=white>$q</font><br>";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $cor_ind = rand(0, $n-1);
    $wa = array();
    for ($i=0; $i<$n; $i++) {
      $wa[$i] = mysql_fetch_assoc($r);
      if (strlen($wa[$i][a_desc])>$max_desc) $wa[$i][a_desc] = substr($wa[$i][a_desc], 0, $max_desc)."...";
      // Select random work
      $r3 = mysql_query("SELECT q_id FROM eq_quotes WHERE a_id='".$wa[$i][a_id]."' ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $w3 = mysql_fetch_assoc($r3);
      $wa[$i][q_id] = $w3[q_id];
      //echo "<br>".$wa[$i][a_year1]." - ".$wa[$i][a_name]." - ".$wa[$i][a_id]." - $w3[q_id]";
    }
    //stop_time();
  
    $q = "SELECT * FROM eq_quotes $join WHERE q_rating<='$mqr' AND a_id='".$wa[$cor_ind][a_id]."' AND q_id != '".$wa[$cor_ind][q_id]."' $cond2 ORDER BY RAND() LIMIT 1";
    $r = mysql_query($q);
    echo mysql_error();
    $wq = mysql_fetch_assoc($r);
    // Reselect without q_hist and tip if cannot find
    if ($wq[q_id] == 0) {
      $q = "SELECT * FROM eq_quotes $join WHERE q_rating<='$mqr' AND a_id='".$wa[$cor_ind][a_id]."' ORDER BY RAND() LIMIT 1";
      $r = mysql_query($q);
      echo mysql_error();
      $wq = mysql_fetch_assoc($r);
      $reselected = 1;
    }
    //stop_time();
    //echo "<br>$wq[a_id] - $wq[q_id]";
      
    $q_id = $wq[q_id];
  } else {
    $r = mysql_query("SELECT * FROM eq_quotes WHERE q_id='$q_id'");
    echo mysql_error();
    $wq = mysql_fetch_assoc($r);
  }
  
  echo "<table><td width=700><p onmousedown='return false;' onselectstart='return false;' style='-webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;'><font size=+2>";
  $sa = explode(' ', $wa[$cor_ind][a_name]);
  for ($x=0; $x<count($sa); $x++) $wq[q_txt] = str_replace($sa[$x], '***', $wq[q_txt]);
  $sa = explode(" ", $wq[q_txt]);
  for ($x=0; $x<count($sa); $x++) {
    if ($x>0) echo " ";
    echo "<a target=_blank href='http://www.multitran.ru/c/m.exe?CL=1&s=$sa[$x]&l1=1'><font color=black style='font-weight: normal'>$sa[$x]</font></a>";
  }
  echo "</font></p></table>";
  
  echo "<p><b>Guess quote author:</b><br>";
  //for ($i=0; $i<$max_authors; $i++) {
  echo "<form action=qquiz.php method=get>";
  echo "<input type=hidden name=nc value=$mtime>";
  echo "<table cellpadding=4>";
  $first = 1;
  foreach ($wa as $i => $val) {
    //if ($i == $cor_ind) echo "<b>";
    echo "\n<tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=qquiz.php?a_id=".$wa[$i][a_id]."&nc=$mtime>";
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
    if ($wa[$i][a_country] != "") echo " ".$wa[$i][a_country];
    if ($wa[$i][a_type] != '') echo " ".$wa[$i][a_type];
    if ($wa[$i][a_type2] != '') echo ", ".$wa[$i][a_type2];
    echo "<br>";
    show_integration_tags($wa[$i]);
    if ($wa[$i][a_desc] != "") echo "<font color=black>".$wa[$i][a_desc]."";
    echo "</div></a>";
    echo "<td bgcolor=#eeeeee valign=top>";
    echo "<a href=qquiz.php?a_id=".$wa[$i][a_id]."&nc=$mtime>";
    echo "<div style='height:100%;width:100%'>";
    if (file_exists("apic/".$wa[$i][a_id].".jpg")) echo "<img align=right width=120 src=apic/".$wa[$i][a_id].".jpg>";
    $first = 0;
    //if ($wa[$i][a_tags] != "") echo " <font color=gray>".$wa[$i][a_tags]."</font>";
    if ($reselected == 0) echo "<td><a href='works.php?q_id=".$wa[$i][q_id]."' target=_blank><img height=22 src=i/help.png></a>";
    else echo "<td><a href='authors.php?a_id=".$wa[$i][a_id]."' target=_blank><img height=22 src=i/help.png></a>";
  }
  echo "</table>";
  echo "<input type=submit style='position: absolute; left: -9999px; width: 1px; height: 1px;'>";
  echo "</form>";
  echo "<td valign=top>";
  echo "</table>";
  echo "<hr><font color=gray>";
  stop_time();
  $state = 1;
  save_session();
  //echo "$q_id $line1 ";
  if (count($ha)>0) echo "Your history has ".count($ha)." quotes.";
?>
<br><script>window.scroll(0, 100);</script>
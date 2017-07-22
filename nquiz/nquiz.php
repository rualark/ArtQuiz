<?
  $img_width = 280;

  include "lib.php";
  include "plib.php";

  session_start();
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } else {
    $_SESSION['count']++;
  }

  include "style.php";

  $mtime = microtime(TRUE);
  $max_authors = 5;
  $prize_cor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200, 250, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 5000, 10000, 20000, 50000, 100000, 200000, 500000, 1000000);

  //secure_variable("w_id");
  //secure_variable("a_id");
  //secure_variable("l");
  //secure_variable("total");
  //secure_variable("correct");
  
  $mr = $_SESSION[n_mr];
  $w_id = $_SESSION[n_w_id];
  $l = $_SESSION[n_l];
  $total = $_SESSION[n_total];
  $correct = $_SESSION[n_correct];
  $state = $_SESSION[n_state];
  $wa = $_SESSION[n_wa];
  $ay = $_SESSION[n_ay];
  $logged = $_SESSION[n_logged];
  $p_hist = $_SESSION[n_hist];
  
  secure_variable("mr");
  secure_variable("c_id");
  secure_variable("act");
  
  if ($mr == 0) $mr = array_search(30, $mr_levels);
  
  $max_hist = round($mr_levels[$mr]*0.5);
  if ($max_hist == 0) $max_hist = 5;
  if ($max_hist > 100) $max_hist = 100;

  function save_session() {
    $_SESSION[n_mr] = $GLOBALS[mr];
    $_SESSION[n_w_id] = $GLOBALS[w_id];
    //$_SESSION[c_id] = $GLOBALS[c_id];
    $_SESSION[n_l] = $GLOBALS[l];
    $_SESSION[n_total] = $GLOBALS[total];
    $_SESSION[n_correct] = $GLOBALS[correct];
    $_SESSION[n_mr] = $GLOBALS[mr];
    $_SESSION[n_state] = $GLOBALS[state];
    $_SESSION[n_wa] = $GLOBALS[wa];
    $_SESSION[n_ay] = $GLOBALS[ay];
    $_SESSION[n_logged] = $GLOBALS[logged];
    $_SESSION[n_hist] = $GLOBALS[p_hist];
  }
  
  if (!isset($correct)) $correct = 0;
  if (!isset($total)) $total = 0;
  
  if ($act == "reset") {
    $w_id=0;
    $c_id=0;
    $l = 0;
    $total = 0;
    $correct = 0;
    $state = 0;
    //save_session();
  }
  
  if ($c_id>0) {
    // load question
    $r = mysql_query("SELECT * FROM nq_pdf LEFT JOIN cc_composers USING (c_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $ww2 = mysql_fetch_assoc($r);
    // Count total
    if ($state == 1) {
      $total++;
      if ($ww2[c_id] == $c_id) {
        $correct++;
        $this_correct = 1;
      }
    }
  }

  // Share
  secure_variable("share");
  if (isset($share)) {
    $sharea = explode(":", gzuncompress(base64_decode($share)));
    $correct=$sharea[0];
    $mr_levels[$mr]=$sharea[1];
  }
  include "menu.php";
  
  if (isset($share)) {
    die ("<script language=\"javascript\">location.replace(\"nquiz.php\");</script>"); 
  }
  
  start_time();
  //echo "<body onload='document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;'>";
  echo "<table><tr><td valign=top>";
  // Show level
  echo "<form action=nquiz.php method=get>";
  echo "<input type=hidden name=act value=reset>";
  echo "Difficulty level: ";
  echo "<select name=mr onChange='this.form.submit();'>";
  foreach ($mr_levels as $rat => $works) {
    echo "<option value=$rat";
    if ($mr == $rat) echo " selected";
    echo ">".$works." well-known compositions</option>";
  }
  echo "</select>";
  // Show correct
  if ($total>0) {
    // Show total
    if ($correct < $total) {
      $total = 0;
      $correct = 0;
    }
  }
  echo " Sequential correct answers: <b><font size=+2>$total</font></b>";
  if ($c_id>0) {
    if (($correct == $total) && (in_array($total, $prize_cor))) {
      // show prize
      echo "<p><table width=100% cellpadding=10><tr><td bgcolor=#ffffaa><center>";
      echo "<font size=+2>You are really good at scores!<br>";
      echo "You guessed <b>$correct</b> composers in a row of <b>$mr_levels[$mr]</b> well-known compositions. Continue playing and get more correct answers in a row!<br>";
      echo "Share your victory:<br><br>";
      $server_url = "$url_share/nquiz";
      $share_url = "$server_url/nquiz.php?share=".base64_encode(gzcompress("$correct:$mr_levels[$mr]"));
      echo "
        <script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
        <script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
        <div class='ya-share2' 
        data-services='facebook,gplus,vkontakte,odnoklassniki' 
        data-counter='' 
        data-description='Try to guess $correct composers in a row of $mr_levels[$mr] compositions and beat me!' 
        data-title='I am really good at scores!' 
        data-url='$share_url'
        data-image='$server_url/i/nquiz_560.png'></div>
      ";
      echo "</table>";
    }
    echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
      $(document).keydown(function (event) {
        if (event.keyCode == 189) {
          window.location.href = 'nquiz.php?nc=$mtime';
        }
      });  
    });  
    </script>";
    $color = "#ffe5e5";
    if ($ww2[c_id] == $c_id) $color="#e5ffe5";
    echo "<p><table cellpadding=10><tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=nquiz.php?nc=$mtime>";
    echo "<div style='height:100%;width:100%'>";
    echo "<br><font size=+3>Next question<br><br>";
    echo "</table>";
    if ($ww2[c_id] == 0) exit;
    echo "<table cellpadding=10><tr><td bgcolor=$color>";
    echo "<table><tr><td colspan=3>";

    if ($ww2[c_id] == $c_id) echo "<font color=green><b>Correct!</b></font><br>";
    else echo "<font color=red><b>Incorrect!</b></font><br>";
    echo "<a target=_blank href='$url_main/cquiz/am.php?c_id=$ww2[c_id]'>$ww2[c_name]</a> ";
    echo " <b>[".$ww2[c_years]."] ";
    echo " $ww2[c_country]</b> $ww2[p_name] ";
    if ($ww2[c_desc] != "") echo "$ww2[c_desc]<br>";

    echo "<br><a target=_blank href='works.php?w_id=$ww2[w_id]'>$ww2[w_name]</a> (<a target=_blank href='works.php?w_id=$ww2[w_id]&p=$l'>страница $l</a>) ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$ww2[c_name] $ww2[w_name]'><img valign=middle height=$button_height src=i/google.png></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$ww2[c_name3] $ww2[w_name]'><img valign=top height=$button_height src=i/youtube.png></a> ";
    echo "<br><br>";
    // Show info
    if ($ww2[w_type] != "") echo "Instruments: <b>$ww2[w_type]</b><br>";
    if ($ww2[w_rating] > 5000) echo "Work fame: <b>High</b><br>";
    elseif ($ww2[w_rating] > 2000) echo "Work fame: <b>Medium</b><br>";
    else echo "Work fame: <b>Low</b><br>";
    echo "<tr><td>";
    if (file_exists("cpic/".$ww2[c_id].".jpg")) echo "<img height=200 src=cpic/$ww2[c_id].jpg>";
    // Show painting
    $t_id = $ww2[t_id];
    echo "<td><center>";
    if ($t_id>0) {
      $q = "SELECT * FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE t_id='$t_id' AND v_up>(v_down*2.5) ORDER BY RAND() LIMIT 1";
      $r = mysql_query($q);
      //echo $q;
      echo mysql_error();
      $n = mysql_numrows($r);
      if ($n>0) {
        $w2=mysql_fetch_array($r);
        $img_url = "$url_art_preview/$w2[a_id]/".str_pad($w2[p_id], 4, '0', STR_PAD_LEFT).".jpg";
        echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
        echo "<a target=_blank href=$url_main/compart/ca-slide.php?l_id=".($w2[l_id]-1).">";
        echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=$img_url></a><br><a target=_blank href=artist.php?a_id=$w2[a_id]>$w2[a_name2]</a> ".strtoupper(substr($w2[a_nation], 0, 3))."-".(substr($w2[a_years], 0, 4))."<br>".$w2[a_genre];
        echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
        if ($w2[v_up]>0) echo " <font color=green><b>$w2[v_up]</b></font> <img border=0 height=15 src=images/up-g.png> ";
        if ($w2[v_down]>0) echo " <img border=0 height=15 src=images/down-g.png> <font color=red><b>$w2[v_down]</b></font> ";
        echo "</div></center>";
      }  
    }
    // Show player
    echo "<td>";
    if ($ww2[t_id]>0) {
      $r = mysql_query("SElECT * FROM cc_ctracks WHERE t_id='$ww2[t_id]'");
      $ts = mysql_fetch_assoc($r);
    }
    // load jpeg dimensions
    $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_{$l}.jpg'");
    echo mysql_error();
    $wj = mysql_fetch_assoc($r);
    // load next jpeg dimensions
    $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_".($l+1).".jpg'");
    echo mysql_error();
    $nnj = mysql_numrows($r);
    $wnj = mysql_fetch_assoc($r);
    if ($nnj == 0) $wnj[t_time] = $ts[t_len];
    if ($ww2[t_id]>0) {
      $time2 = 0;
      if ($wnj[t_time]-$wj[t_time] > 0) $time2 = $wnj[t_time];
      show_player($ts, $w_id, $l, 1, $wj[t_time], "false", $time2);
    }
    
    echo "</table>";
    echo "<p><center>";
    $hei = round($wj[p_height]*$jpeg_width/$wj[p_width]);
    $margin1 = round($hei * $ww2[w_margin1]/100);
    $margin2 = round($hei * $ww2[w_margin2]/100);
    $margin3 = $hei-$margin2;
    //$hei = $hei - $margin1 - $margin2;
    $wid = $jpeg_width;
    //echo "$jpeg_width $wj[p_height] $wj[p_width] $hei $wid<br>";
    echo "<div style='position: relative; width: {$wid}px; height: {$hei}px; overflow: hidden'>";
    echo "<a target=_blank href='works.php?w_id=$ww2[w_id]'><img border=0 src='$jpeg_path/{$w_id}_{$l}.jpg' width=$jpeg_width></a>";
    echo "<img src=i/black.png height=$margin1 width=$wid style='opacity: 0.3; position: absolute; top: 0px; left: 0px;'>";
    echo "<img src=i/black.png height=$margin2 width=$wid style='opacity: 0.3; position: absolute; top: {$margin3}px; left: 0px;'>";
    if ($wnj[t_time]-$wj[t_time] > 0) echo "<img id='nquiz_progressbar' src=i/black.png height=$hei width=0 style='opacity: 0.1; position: absolute; top: 0px; left: 0px;'>";
    //echo "<img style='margin: -{$margin1}px 0 0 0' src='$jpeg_path/{$ww[w_id]}_{$l}.jpg' width=$jpeg_width>";
    echo "</div></center>";
    echo "</table>";
    stop_time();
    $state = 0;
    if (($logged == 0) && ($w_id>0)) {
      mysql_query("INSERT INTO nq_log 
        VALUES('', '$c_id', '$w_id', NOW(), '$this_correct', '".get_ip()."', '".session_id()."', '$total', '$mr', '$l')");
      echo mysql_error();
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
    if (count($ha)>0) echo " ".count($ha)." compositions in your history.";
    exit;
  }
  echo "</form>";
  $logged = 0;

  if ($p_hist != "") {
    $ha = explode(",", $p_hist);
  }
  if (($state == 0) || ($w_id == 0)) {
    if ($p_hist != "") $cond2 .= " AND (w_id NOT IN ($p_hist)) ";
  
    $r = mysql_query("SELECT * FROM nq_pdf LEFT JOIN cc_composers USING (c_id) WHERE c_id>0 AND w_rating>='$mr' AND w_page2>0 $cond2 ORDER BY RAND() LIMIT 1");
    echo mysql_error();
    $ww = mysql_fetch_assoc($r);
    
    $r2 = mysql_query("SELECT * FROM cc_composers WHERE c_id != $ww[c_id] AND c_maxr>='$mr' ORDER BY RAND() LIMIT $max_authors");
    echo mysql_error();
    for ($i=0; $i<$max_authors; $i++) {
      $wa[$i] = mysql_fetch_assoc($r2);
      $ay[$i] = $wa[$i][c_start];
    }
    $cor_ind = 0;
    // mt_rand(0, $max_authors-1);
    $wa[$cor_ind] = $ww;
    //$wa[$cor_ind][c_name] = $ww[c_name];
    //$wa[$cor_ind][c_id] = $ww[c_id];
    //$wa[$cor_ind][c_desc] = $ww[c_desc];
    //$wa[$cor_ind][c_start] = $ww[c_start];
    //$wa[$cor_ind][p_name] = $ww[p_name];
    //$wa[$cor_ind][c_stop] = $ww[c_stop];
    //$wa[$cor_ind][c_country] = $ww[c_country];
    $ay[$cor_ind] = $ww[c_start];
    
    asort($ay);
    $w_id = $ww[w_id];
    $qpage = mt_rand($ww[w_qpage], min($ww[w_page1]+5, $ww[w_page2]));
    $l = $qpage;
  } else {
    $r = mysql_query("SELECT * FROM nq_pdf LEFT JOIN cc_composers USING (c_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $ww = mysql_fetch_assoc($r);
    $qpage = $l;
  }

  // load jpeg dimensions
  $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_{$l}.jpg'");
  echo mysql_error();
  $wj = mysql_fetch_assoc($r);
  
  echo "<center>";
  $hei = round($wj[p_height]*$jpeg_width/$wj[p_width]);
  $margin1 = round($hei * $ww[w_margin1]/100);
  $margin2 = round($hei * $ww[w_margin2]/100);
  $hei = $hei - $margin1 - $margin2;
  $wid = $jpeg_width;
  echo "<div style='width: {$wid}px; height: {$hei}px; overflow: hidden'>";
  echo "<img style='margin: -{$margin1}px 0 0 0' src='$jpeg_path/{$ww[w_id]}_{$l}.jpg' width=$jpeg_width>";
  echo "</div></center>";
  //echo "$ww[w_id]";
  
  echo "<p><b>Guess composer:</b> (page $l, $ww[w_type])<br>";
  echo "<form action=nquiz.php method=get>";
  echo "<input type=hidden name=nc value=$mtime>";
  echo "<table cellpadding=4>";
  $first = 1;
  foreach ($ay as $i => $val) {
    echo "\n<tr><td bgcolor=#eeeeee valign=top>";
    echo "<a href=nquiz.php?c_id=".$wa[$i][c_id]."&nc=$mtime>";
    echo "<div style='display:inline-block; height:100%;width:100%'>";
    echo "<input ";
    if ($first == 1) echo "id=sel1 ";
    echo "style='vertical-align: center; width: 18px; height: 18px;' tabindex=1 type=radio name=a_id value=".$wa[$i][c_id].">";
    echo " <font size=+3>".$wa[$i][c_name]."</font>";
    echo " [".$wa[$i][c_years]."] ";
    if ($wa[$i][c_country] != "") echo " ".$wa[$i][c_country]." ";
    echo $wa[$i][p_name]. " ";
    //echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=".$wa[$i][c_name]."'><img valign=top height=18 src=i/wiki.png></a> ";
    $desc = substr($wa[$i][c_desc], 0, 400);
    if (strlen($wa[$i][c_desc])>400) $desc .= "...";
    if ($wa[$i][c_desc] != "") echo "<br><font color=black>".$desc."";
    echo "</div></a>";
    echo "<td bgcolor=#eeeeee valign=top>";
    echo "<a href=nquiz.php?c_id=".$wa[$i][c_id]."&nc=$mtime>";
    echo "<div style='height:100%;width:100%'>";
    if (file_exists("cpic/".$wa[$i][c_id].".jpg")) echo "<img align=right width=120 src=cpic/".$wa[$i][c_id].".jpg>";
    $first = 0;
    //if ($wa[$i][a_tags] != "") echo " <font color=gray>".$wa[$i][a_tags]."</font>";
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
  //echo "$w_id $qpage ";
  if (count($ha)>0) echo " ".count($ha)." compositions in your history.";
  //print_r($p_hist);
?>
<br><script>window.scroll(0, 140);</script>
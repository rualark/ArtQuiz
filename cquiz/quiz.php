<?
  ignore_user_abort(true);
  $img_width = 900;
  
  include "qlib.php";
  include "auth.php";
  include "style.php";
  echo "<body onload='startClock(); document.getElementById(\"sel1\").focus(); document.getElementById(\"sel1\").checked = true;' onunload='stopClock();'>";
  $no_title = 1;

  function create_links($t_id, $b_id) {
    GLOBAL $us, $abs_path, $ln_path, $ts, $block_len, $link;
    if (!file_exists("ln/$us[u_id]")) mkdir("ln/$us[u_id]");
    if ($us[u_oneblock]) {
      $link = block_url2($t_id, 1, 1);
      if (is_file($abs_path.$link)) unlink($abs_path.$link);
      symlink2($abs_path.$ln_path.block_url2($t_id, $b_id), $abs_path.$link);
      symlink($abs_path.$ln_path.block_url2($t_id, $b_id), $abs_path.$link);
      //echo "Link $abs_path$ln_path".block_url2($t_id, $b_id)." $abs_path$link<br>";
    } else {
      $max_blocks = floor($ts[t_len]/$block_len)+1;
      for ($i=1; $i<=$max_blocks; $i++) {
        $link = block_url2($t_id, $i, 1);
        //echo block_url($t_id, $i)." $link<br>";
        if (is_file($abs_path.$link)) unlink($abs_path.$link);
        symlink2($abs_path.$ln_path.block_url2($t_id, $i), $abs_path.$link);
        symlink($abs_path.$ln_path.block_url2($t_id, $i), $abs_path.$link);
        //echo "Link $abs_path$ln_path".block_url2($t_id, $i)." $abs_path$link<br>";
      }
    }
  }
  
  secure_variable("c_id");
  secure_variable("bblock");
  secure_variable("t_id");
  secure_variable("b_id");
  secure_variable("b_comment");
  secure_variable("su_id"); // Follow user
  secure_variable("nc"); // no cache
  secure_variable("rc"); // repeat count

  // Load followed user
  $ua = $us;
  if ($su_id>0) {
    load_user($su_id);
    echo "<script>ga('send', 'event', 'CQ-Follow', '$ua[u_name]', '$us[u_name]');</script>";
  }
  
  start_time();
  if ($bblock == 2) {
    if (!isset($t_id)) $t_id = $us[t_id];
    if (!isset($b_id)) $b_id = $us[b_id];
    $r=mysql_query2("INSERT INTO cc_bblocks VALUES('$b_id','$t_id','','$us[u_id]',NOW(),0,'$b_comment')");
    echo "<font color=red>Broken track reported!</font><br>";
    exit;
  }

  if ($bblock == 1) {
    echo "Please comment, what is bad with this particular track (for example, wrong composer or no sound or noise or anything else). Also, write which block is bad if you can:<br>";
    echo "<form action=quiz.php method=get>";
    echo "<input type=hidden name=bblock value=2>";
    if (isset($t_id)) echo "<input type=hidden name=t_id value='$t_id'>";
    if (isset($b_id)) echo "<input type=hidden name=b_id value='$b_id'>";
    echo "<input id=sel1 type=text size=80 name=b_comment list=bcomlist><br>";
    echo "<datalist id=bcomlist>";
    echo "<option value='Wrong track name: '></option>";
    echo "<option value='Wrong composer: '></option>";
    echo "<option value='Wrong track group (genre): '></option>";
    echo "<option value='Wrong tags: '></option>";
    echo "<option value='Duplicate track'></option>";
    echo "<option value='Too noisy track'></option>";
    echo "<option value='Too quiet track'></option>";
    echo "<option value='No/little music in track'></option>";
    echo "<option value='Too noisy BLOCK'></option>";
    echo "<option value='Too quiet BLOCK'></option>";
    echo "<option value='No sound in BLOCK'></option>";
    echo "<option value='No/little music in BLOCK'></option>";
    echo "</datalist>";
    echo "<input type=submit> ";
    echo "</form>";
    echo "<script>document.getElementById(\"sel1\").focus();</script>";
    exit;
  }

  include "menu.php";
  
  echo "<b id=hl>".$level_name[$us[u_level]]." ".($us[r_total]+1).".";
  if (!isset($c_id)) {
    if ($su_id>0) echo " You are following user $us[u_name]:";
    else echo "  Please listen to the piece of music and guess the composer:";
  }
  echo "</b>";
  echo "<table border=0><tr><td bgcolor=black>
    <table cellpadding=10 border=0 cellspacing=1>";
  echo "<tr>";
  echo "<td bgcolor=white align=left valign=top>";
  $ncust = substr_count($us[u_ca], "X");
  if (($su_id==0) && ($us[u_level] == $level_cust) && ($ncust < 2)) 
    die("You have to select at least two composers to use Custom mode!");
  if (isset($c_id)) {
    $t_id = $us[t_id];
    $current_tid = $us[t_id];
    $b_id = $us[b_id];
    $rbid=mysql_query2("SELECT b_id FROM cc_qblocks WHERE b_lid='$b_id' AND t_id='$t_id'");
    echo mysql_report_error();
    $wbid=mysql_fetch_assoc($rbid);
    $start = $us[u_start];
    if ($t_id == 0) {
      $repeated=1;
      //if ($su_id==0) die("This question is finished. Please go to the <a id=sel1 href=quiz.php?nc=".microtime(TRUE).">next question</a>.");
      $rs=mysql_query2("SELECT * FROM cc_qlog WHERE u_id=$us[u_id] ORDER BY l_id DESC LIMIT 1");
      echo mysql_report_error();
      $wsl=mysql_fetch_assoc($rs);
      $c_id=$wsl[c_id2];
      $t_id=$wsl[t_id];
    }
    if ($su_id != 0) {
      // Load log
      $t_id = $us[t_id2];
      $rs=mysql_query2("SELECT * FROM cc_qlog WHERE u_id=$su_id ORDER BY l_id DESC LIMIT 1");
      echo mysql_report_error();
      $wsl=mysql_fetch_assoc($rs);
      $c_id=$wsl[c_id2];
      // Write follow log
      mysql_query2("INSERT IGNORE INTO cc_follow VALUES('$wsl[l_id]', '$su_id')");
      echo mysql_report_error();
    }
    load_track($t_id);
    if ($su_id != 0) {
      if ($us[u_wbid] == '') $c_id=$ts[c_id];
    }
    // Remove links (better not do to save current game)
    if ($su_id==0) if ($play_symlinks>0) if (file_exists("ln/$us[u_id]")) {
      $max_blocks = floor($ts[t_len]/$block_len)+1;
      for ($i=1; $i<=$max_blocks+2; $i++) {
        $link = block_url2($t_id, $i, 1);
        //if (is_file($abs_path.$link)) unlink($abs_path.$link);
      }
      //rmdir("ln/$us[u_id]");
    }
    $ca1 = load_composer($c_id);
    $ca2 = load_composer($ts[c_id]);
    $cent = $ca1[c_start] - $ca2[c_start];
    //echo "You selected: ";
    echo " <a href=# onclick='myPlaylist.select(".($b_id-1)."); $(\"#jquery_jplayer_1\").jPlayer(\"play\"); return false; '><img src=images/play_g.gif height=16></a> ";
    echo "You answered: <a target=_blank href=".comp_link($c_id).">";
    if ($c_id != $ts[c_id]) echo "<font color=red>";
    echo "$ca1[c_name]</font></a> [$ca1[c_years]] $ca1[c_country] ($ca1[p_name])<br>";
    if (($c_id != $ts[c_id]) && ($us[u_train] == 0)) {
      echo "Correct answer: <a target=_blank href=am.php?u_id=$us[u_id]&c_id=$ca2[c_id]>$ca2[c_name]</a> [$ca2[c_years]] $ca2[c_country] ($ca2[p_name])<br>";
    }
    if ($su_id==0) {
      echo "\n<table cellpadding=5 width=100%><tr><td bgcolor=#eeeeee>";
      echo "<a id=sel1 href=quiz.php?nc=".microtime(TRUE)."#hl>";
      echo "<div style='height:100%; width:100%'>";
    }
    if ($ca2[cpic_url] != "") echo "<img width=170 title='$ca2[c_name]' hspace=2 vspace=2 align=right src='$ca2[cpic_url]'>";
    if ($c_id == $ts[c_id]) {
      // This string for mp3 playback
      $cor_st = "c$ca2[c_id]";
      // This string for google tts
      //$cor_st2 = "Correct. ".str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", "$ca2[c_name3]. $ts[t_title]. $ts[t_album]"));
      echo "<title>CQuiz - Guess the composer (quiz) Answer Correct</title>";
      echo "<font color=green size=6><b>Correct!</b></font>";
      echo "<br>";
      $ok=1;
    } else {
      $cor_st = "w$ca2[c_id]";
      //$cor_st2 = "Wrong. ".str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", "$ca2[c_name3]. $ts[t_title]. $ts[t_album]"));
      echo "<title>CQuiz - Guess the composer (quiz) Answer Wrong</title>";
      echo "<font color=red size=5><b>Wrong ";
      $wrong2 = 0;
      if (($ca1[p_name] != $ca2[p_name]) && ($us[u_train] == 0)) {
        echo " period. ";
        $wrong2 = 1;
      }
      if ((abs($cent)>70) && ($us[u_train] == 0)) echo "($cent years difference) ";
      echo "</b></font>";
      echo "<br>";
      $ok=0;
      //if (($us[u_id] == 27) && (mt_rand(0, 100)<10)) $cor_st = "Fikgnaa";
    }
    if ($us[u_speechvol] == 1) {
      $path = "voice/correct-30.mp3";
      if ($cor_st[0] == 'w') $path = "voice/wrong-25.mp3";
      play_file("play_correct", $path);
    } elseif ($us[u_speechvol] > 1) {
      text2speech("play_correct", $cor_st);
      //google_tts("play_correct", $cor_st2);
    }
    if ($su_id==0) {
      if (($repeated == 0) && ($us[u_wbid] == '')) $r1 = log_game($b_id, time()-$start, $c_id, $ok, $wrong2, $cent);
      echo "<img style='opacity: .5' valign=middle border=0 height=50 src=images/next-question.png>";
      //echo "<a id=sel1 href=quiz.php?nc=".microtime(TRUE)."#hl><img border=0 height=60 src=images/next-question.png></a>";
      //if ($uname == "rualark") echo " <img src='images/gp_back.png' align=center height=20>";
    }
    if ($us[u_wbid] != '') {
      $wbida = explode(',', $us[u_wbid]);
    }
    if ($c_id != $ts[c_id]) {
      if ($us[u_train] == 1) {
        if ($su_id>0) {
          echo "<script>location = 'quiz.php?su_id=$su_id'</script>";
          exit;
        } else {
          if ($us[u_wbid] != '') $us[u_wbid] .= ',';
          $us[u_wbid] .= $wbid[b_id];
          $us[t_id] = 0;
          save_user();
          echo "<script>location = 'quiz.php'</script>";
          exit;
        }
      } else {
        $us[u_wbid] = '';
      }
    } else {
      if ($su_id==0) {
        $us[t_id] = 0;
        $us[u_ca2] = "";
        $us[u_wbid] = '';
        save_user();
      }
      if ($us[u_train] == 1) {
        // Load last log
        $q = "SELECT * FROM cc_qlog WHERE u_id=$us[u_id] ORDER BY l_time DESC LIMIT 1";
        $r = mysql_query2($q);
        echo mysql_report_error();
        $la = mysql_fetch_assoc($r);
        load_track($la[t_id]);
        $t_id = $la[t_id];
        $b_id = $la[b_id];
        $ca3 = load_composer($la[c_id2]);
      }
    }
    $fld = "$ts[t_folder2]/";
    if ($ts[t_folder2] == "") $fld = "";
    echo "<br>";
    if ($ts[t_comment] != "") echo "<br><b><font style='BACKGROUND-COLOR: #dddddd'>".stripslashes($ts[t_comment])."</font></b>";
    echo "<br>";
    show_tg($ts[tg_id], $ts[tg_name], $ts[tg_comment], 0);
    echo " <b title=\"".meta_conv($ts[t_meta3])."\">";
    echo "<font color=black>".str_replace("/", " / ", "$fld".$ts[t_name]);
    if ($ts[t_rating]>0) echo " <img title='Rating of popularity' height=16 src=images/rating$ts[t_rating].png>";
    echo "<br>";
    echo meta_conv($ts[t_meta2]);
    echo "</b><br>";
    if ($su_id==0) {
      echo "</div>";
      echo "</a>";
      echo "</td></tr>";
      echo "</table>";
    }
    if (!$i_am_admin2) {
      if (($us[r_total]<200) && ($c_id != $ts[c_id]) && (($us[u_level] == 1) || ($us[u_level] == 5)) && ($us[r_right]/$us[r_total] < 0.66)) {
        echo "<table style='vertical-align: middle; display:inline-block' cellpadding=6><td align=center bgcolor=#ffdddd>";
        echo "<a href='isles.php?u_id=&sort=i_level,%20r1_max%20desc,%20i_anum%20desc'><font size=+1 color=#770000>";
        echo "This level seems difficult for you.<br>Try easier islands HERE.</table>";
        echo "<br><br>";
      }
      elseif (($us[r_total]>10) && ($us[r_total]<400) && ($c_id == $ts[c_id]) && ($us[r_right]/$us[r_total] > 0.85)) {
        echo "<table style='vertical-align: middle; display:inline-block' cellpadding=6><td align=center bgcolor=#ddffdd>";
        echo "<a href='isles.php?u_id=&sort=i_level,%20r1_max%20desc,%20i_anum%20desc'><font size=+1 color=#007700>";
        echo "This level seems easy for you.<br>Increase difficulty in preferences or try islands HERE.</table>";
        echo "<br><br>";
      }
    }
    if (($su_id==0) && ($repeated == 0)) echo "<iframe height=130 width=500 scrolling=auto src='quiz-delayed.php?l_id=$la[l_id]'></iframe>";
    echo "<br><br>";
    if ($c_id != $ts[c_id]) {
      show_tracks($c_id, $ts[tg_id], "<a target=_blank href=".comp_link($c_id)."><font color=red>$ca1[c_name4]</font></a> also has tracks in this group: ");
      echo "<br>";
    } elseif ($us[u_train] == 1) {
      //echo "$la[l_ok]-$la[c_id2]-$ts[tg_id]<br>";
      if ($la[l_ok] == 0) {
        show_tracks($la[c_id2], $ts[tg_id], "<a target=_blank href=".comp_link($la[c_id2])."><font color=red>$ca3[c_name4]</font></a> also has tracks in this group: ");
        echo "<br>";
      }
    }
    $oneblock = 0;
    if ($us[u_level] == $level_cust) {
      show_forum($us[cab], 5, 500, 0);
    }
  } else {
    // Check train
    if ($us[u_wbid] != '') {
      $wbida = explode(',', $us[u_wbid]);
      $rtrain=mysql_query2("SELECT * FROM cc_qblocks LEFT JOIN cc_ctracks USING (t_id)
        WHERE b_id='$wbida[0]'");
      echo mysql_report_error();
      $wtrain=mysql_fetch_assoc($rtrain);
    }
    echo "<title>CQuiz - Guess the composer (quiz) Question</title>";
    if (($su_id>0) && ($us[t_id] == 0)) {
      echo "<p><img align=center height=30 src=images/process_animation.gif> User is not currently playing. <a href='quiz.php?su_id=$su_id&nc=".microtime(TRUE)."&c_id=1'>Click to show last answer.</a> Trying to connect...";
      die ("<script language=JavaScript>setTimeout('rfl()', 2000); function rfl() { location = 'quiz.php?su_id=$su_id&nc=".microtime(TRUE)."'; } </script>");
    }
    if ($us[u_speechvol] > 1) text2speech("play_correct", $us[r_total]+1);
    //echo "t_id $us[t_id]";
    // Wait for followed user
    if ($us[t_id] != 0) {
      $t_id = $us[t_id];
      load_track($t_id);
      $b_id = $us[b_id];
      $start = $us[u_start];
      if ($su_id==0) echo "<font color=red>Unfinished question detected. Please answer the question to continue.</font><br>";
      // Create links again
      if ($play_symlinks>0) {
        create_links($t_id, $b_id);
      }
    } else {
      // Select track
      //if ($debug>0) stop_time();
      $b_id = choose_block_new();
      //echo "$b_id b-id<br>";
      //if ($debug>0) stop_time();
      load_track($t_id);
      echo "<script>ga('send', 'event', 'CQ-Question', '$us[u_name]', '$us[u_level]');</script>";
      if (($t_id == 0) || ($b_id == 0)) {
        die("There was a problem selecting track for your question. 
          The problem has been logged. 
          Please refresh the page.<br><br>
          If refreshing does not help, please try changing the options in your preferences.
          Thank you for your patience!");
      }
      //echo "Selected block $b_id<br>";
      $start = time();
      // Create links
      if ($play_symlinks>0) {
        create_links($t_id, $b_id);
      }
    }
    if ($us[u_wbid] != '') {
      echo "<font color=red><b>Wrong. Please try to guess this composer again</font></b> or <a href=quiz.php?c_id=$ts[c_id]>skip question</a><br>";
    }
    //echo "wbid $us[u_wbid] ut-$us[t_id] ut2-$us[t_id2] t-$t_id<br>";
    echo "<form id=qform action=quiz.php method=get>";
    //echo "<input type=hidden name=t_id value=$ts[t_id]>";
    //echo "<input type=hidden name=b_id value=$b_id>";
    echo "<input type=hidden name=ac value=$start>";
    show_composers($su_id);
    if (($us[u_level] == ($level_cust+1)) && ($us[u_trating] == 3)) {
      show_styles($su_id);
    }
    echo "</form>";
    if ($t_id > 0) {
      $oneblock = $us[u_oneblock];
      $us[t_id] = $t_id;
      $us[b_id] = $b_id;
      $us[u_start] = $start;
      if ($su_id==0) save_user();
    }
    //echo "<script type='text/javascript'>var timerStart = ".($us[u_start]*1000).";</script>";
    echo "<script type='text/javascript'>var timerStart = Date.now();</script>";
    // Reload if no file
    if (($play_symlinks>0) && (!is_file($abs_path.$link)) && ($rc < 3)) 
      die ("<script language='javascript'>location.replace('?nc=$nc&rc=".($rc+1)."');</script>"); 
?>
    <SCRIPT>
 var tick;
 function stopClock() {
   clearTimeout(tick);
 }
 function startClock() {
   var pass = Math.round((Date.now()-timerStart)/1000+1);
   var color;
   color = '#aaffaa';
   if (pass>5)  color = '#bbff99';
   if (pass>10) color = '#ccff88';
   if (pass>15) color = '#ddff77';
   if (pass>20) color = '#e5ff77';
   if (pass>25) color = '#eeff55';
   if (pass>30) color = '#ffff00';
   if (pass>40) color = '#ffee00';
   if (pass>50) color = '#ffdd00';
   if (pass>60) color = '#ffcc00';
   if (pass>70) color = '#ffbb00';
   if (pass>80) color = '#ffaa00';
   if (pass>90) color = '#ff9900';
   if (pass>100) color = '#ff8800';
   if (pass>110) color = '#ff7700';
   if (pass>120) color = '#ff6600';
   if (pass>130) color = '#ff5500';
   if (pass>140) color = '#ff4400';
   if (pass>150) color = '#ff3300';
   if (pass>160) color = '#ff2200';
   if (pass>170) color = '#ff1100';
   if (pass>180) color = '#ff0000';
   if ((pass>7) && (pass<60)) {
     var x =  $('#jquery_jplayer_1').data('jPlayer').status.currentTime;
     if (x==0) document.getElementById('nosound').innerHTML = '<table style="vertical-align: middle; display:inline-block" cellpadding=10><td><center><a href="javascript:location.reload(true)"><font color=gray>Try reloading this page<br> if you cannot<br> hear music.</table>';
     else document.getElementById('nosound').innerHTML = '';
   }
<?
   $k1 = pow($k_secp2, $k_secp)-1;
   //echo "rating = Math.round($k_r*(1+2*$k_cncust)*(1+$us[u_oneblock]*$k_oneblock)*(1+$us[u_allcomp]*($k_allcomp*$us[u_level]))/(Math.pow(pass+$k_secp2, $k_secp)-$k1));";
?>
   document.getElementById('clock').innerHTML = '<table style="vertical-align: middle; display:inline-block" cellpadding=10><td align=center bgcolor=' + color + '><font size=+1>&nbsp;&nbsp;Seconds passed: <b>' + pass + '&nbsp;&nbsp;</b></table>';
   tick=setTimeout("startClock()",1000);
}
</SCRIPT>


<?
    if ($us[u_level] == $level_cust) {
      show_forum($us[cab], 5, 300, -1);
    }
    if (($us[u_allcomp] == 1) && ($us[u_level] >= $level_cust)) {
      // Create ca
      $ca = unpack_ca($us[cab]);
      $cnum=0;
      for ($i=0; $i<strlen($ca); $i++) if ($ca[$i] == "X") {
        if ($cas != "" ) $cas .= ",";
        $cas .= $i;
        $cnum++;
      }
      if (($cnum > 2) && ($cnum < 21)) {
        echo "<br>";
        echo "<iframe height=600 width=500 scrolling=auto src='quiz-find-forums.php?limit=5&size=300&editbox=-1&cas=$cas'></iframe>";
      }
    }
    if (($us[u_allcomp] == 0) && (count($ca_selected)>2)) {
      $cas = implode(",", $ca_selected);
      echo "<iframe height=600 width=500 scrolling=auto src='quiz-find-forums.php?limit=5&size=300&editbox=-1&cas=$cas'></iframe>";
      //find_forums(5, 300, -1);
    }
  }
  $wbc = count($wbida);
  if ((isset($c_id)) && ($wbc>0)) {
    echo "Other attempts:<br>";
    if ($wbc>1) for ($i=$wbc-1; $i>=1; $i--) {
      $rtrain=mysql_query2("SELECT * FROM cc_qblocks LEFT JOIN cc_ctracks USING (t_id)
        WHERE b_id='$wbida[$i]'");
      echo mysql_report_error();
      $wtrain=mysql_fetch_assoc($rtrain);
      echo "<a target=_blank href='ptracks.php?t_id=$wtrain[t_id]&b_id=$wtrain[b_lid]'>Track</a><br>";
    }
    echo "<a target=_blank href='ptracks.php?t_id=$current_tid&b_id=$us[b_id]'>Track</a><br>";
  }
  echo "<td bgcolor=white align=left valign=top>";
  $b_id2 = $b_id;
  if (($us[u_oneblock]) && ($play_symlinks>0)) $b_id2 = 1;
  if (isset($c_id)) {
    show_fav_button($t_id, $b_id, $ts[c_id]);
  }
  //echo isset($c_id)?$b_id:($us[u_oneblock]?1:$b_id)."-$b_id<br>";
  show_player($t_id, $b_id2, isset($c_id) ? 0 : $us[u_oneblock], 
    isset($c_id) ? 0 : $play_symlinks, isset($c_id) ? 0 : 1, isset($c_id)?$b_id:($us[u_oneblock]?1:$b_id));
    // #584a61
  //echo "<div align=center><a target=_blank href=".block_url($t_id, $b_id2, isset($c_id) ? 0 : $play_symlinks)."?$us[u_start]><font color=white style='background-color: #3a2a45'>Alternative link</font></a></div>";
  echo "<table width=100% cellpadding=3 border=0 cellspacing=0 align=center><td bgcolor=#3a2a45><center>&nbsp;";
  if (isset($c_id)) {
    echo "<a target=_blank href='".full_url()."?$us[u_start]'>";
  } else {
    echo "<a target=_blank href=".block_url($t_id, $b_id2, isset($c_id) ? 0 : $play_symlinks)."?$us[u_start]>";
  }
  echo "<font size=1 style='font-family:Verdana, Arial, sans-serif; font-weight : normal;' color=#8c7b9b>Alternative link to MP3&nbsp;</table>";
  // For load testing
  if (isset($c_id)) {
    //echo "<img height=30 style='opacity:0.2' src='".full_url()."?$us[u_start]'>";
  } else {
    //echo "<img height=30 style='opacity:0.2' src=".block_url($t_id, $b_id2, isset($c_id) ? 0 : $play_symlinks)."?$us[u_start]>";
  }
  if (isset($c_id)) {
    echo "<br><center><a onclick='return confirm(\"Please confirm, that you want to report this track as broken. Report will be sent to site administration. You should only report tracks as broken if you do not hear any sound or if the sound is garbled. PLEASE NOTE THAT TO PROTECT PLAYERS FROM CHEATING, YOU WILL HAVE TO ANSWER THIS QUESTION ANYWAY. Please select any answer after reporting broken track. Thank you for your patience!\");' target=_blank href=quiz.php?ac=$start&bblock=1";
    if (isset($c_id)) echo "&c_id=$c_id&t_id=$t_id&b_id=$b_id";
    echo "><font color=red>Report broken track</font></a>";
  }
  echo "<br>";
  if (!isset($c_id)) {
    echo "<center><span id=clock></span>";
    echo "<br><span id=nosound></span>";
    /*
    $q6 = "SELECT count(*) as cnt,avg(l_ok) as cor FROM cc_qlog WHERE u_id='$us[u_id]' AND t_id=$t_id AND b_id=$b_id AND l_time > '$tracks_start'";
    $r6 = mysql_query2($q6);
    echo mysql_report_error($q6);
    $w6 = mysql_fetch_assoc($r6);
    if ($w6[cnt]==0) echo "<br><br><center><img title='You hear this minute for the first time in the game!' src=images/new.gif>";
    */
  }
  //if (!isset($c_id)) echo "<br><br><font color=gray>Please reload this page<br> if you cannot<br> hear music.</font>";
  echo "</table>";
  echo "</table>";

  // Show quote
  if ($c_id != 0) {
    show_quote($ts, 'e', !isset($c_id), '100%', '#ffeeff', '#bbbbbb', '<b>Random quote by this composer:</b><br><br>');
    if ($ru_accept) show_quote($ts, 'r', !isset($c_id), '100%', '#ffeeff', '#bbbbbb', '<b>Случайная цитата этого композитора:</b><br><br>');
  }

  // Show picture
  $q = "SELECT * FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE t_id='$t_id' AND v_up>(v_down*2.5) ORDER BY RAND() LIMIT 1";
  $r = mysql_query2($q);
  //echo $q;
  echo mysql_report_error();
  $n = mysql_numrows($r);
  if ($n>0) {
    $w2=mysql_fetch_array($r);
    $img_url = "$url_art/$w2[a_id]/".str_pad($w2[p_id], 4, '0', STR_PAD_LEFT).".jpg";
    echo "<p><center>";
    echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    //echo "<a target=_blank href=$url_main/compart/ca-slide.php?only_pos=on&l_id=".($w2[l_id]-1).">";
    echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=$img_url></a><br><a target=_blank href=artist.php?a_id=$w2[a_id]>$w2[a_name2]</a> ".strtoupper(substr($w2[a_nation], 0, 3))."-".(substr($w2[a_years], 0, 4))."<br>".$w2[a_genre];
    //echo " <a target=_blank href=$img_url><img height=14 src=i/zoom_in.png></a> ";
    echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
    if ($w2[v_up]>0) echo " <font color=green><b>$w2[v_up]</b></font> <img border=0 height=15 src=images/up-g.png> ";
    if ($w2[v_down]>0) echo " <img border=0 height=15 src=images/down-g.png> <font color=red><b>$w2[v_down]</b></font> ";
    echo "</div></center>";
  }  
  if (!isset($c_id)) { 
  }
  
  if ((!isset($c_id)) && ($wbida[0] == 0)) { 
    echo "<table border=0 width=100%><tr><td bgcolor=black>
    <table cellpadding=10 border=0 cellspacing=1 width=100%>";
    echo "<tr>";
    echo "<td bgcolor=#dddddd align=left valign=top>";
    echo "<b>Previous track:<br><br>";
    $rs=mysql_query2("SELECT * FROM cc_qlog WHERE u_id=$us[u_id] ORDER BY l_id DESC LIMIT 1");
    echo mysql_report_error();
    $wsl2=mysql_fetch_assoc($rs);
    $ca3 = load_composer($wsl2[c_id]);
    load_track($wsl2[t_id]);
    $fld = "$ts[t_folder2]/";
    if ($ts[t_folder2] == "") $fld = "";
    echo "<a target=_blank href=am.php?c_id=$ca3[c_id]>";
    if ($wsl2[l_ok]>0) echo "<font color=green>";
    else echo "<font color=red>";
    echo "$ca3[c_name3]</a></b>";
    if ($ts[t_comment] != "") echo "<br><b><font style='BACKGROUND-COLOR: #dddddd'>".stripslashes($ts[t_comment])."</font></b>";
    echo "<br>";
    show_tg($ts[tg_id], $ts[tg_name], $ts[tg_comment]);
    echo "<a target=_blank href=ptracks.php?t_id=$ts[t_id]>";
    echo " <b title=\"".meta_conv($ts[t_meta3])."\">";
    echo "<font color=black>".str_replace("/", " / ", "$fld".$ts[t_name]);
    echo "</a>";
    if ($ts[t_rating]>0) echo " <img title='Rating of popularity' height=16 src=images/rating$ts[t_rating].png>";
    echo "<br>";
    echo meta_conv($ts[t_meta2]);
    echo "</b><br>";
    echo "</table>";
    echo "</table>";
  }
  if ($su_id>0) echo "<br><iframe height=50 width=500 scrolling=auto src='quiz-wait.php?state=$c_id&su_id=$su_id&u_last=$us[u_last]'></iframe>";
  echo "<br>If you start a new question, answer it before leaving the site to save your rating.";
  include "footer.php";
  stop_time();
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  echo "<script>window.scroll(0, 100);</script>";
?>
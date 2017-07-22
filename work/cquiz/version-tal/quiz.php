<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  echo "<body onload='document.getElementById(\"sel\").focus();'>";
  include "menu.php";

  secure_variable("c_id");
  secure_variable("bblock");
  secure_variable("t_id");
  secure_variable("b_id");

  if (isset($bblock)) {
    if (!isset($t_id)) $t_id = $us[t_id];
    if (!isset($b_id)) $b_id = $us[b_id];
    $r=mysql_query("INSERT INTO cc_bblocks VALUES('$b_id','$t_id','','$us[u_id]',NOW())");
    echo "<font color=red>Broken track reported!</font><br>";
  }
  echo "<b>".$level_name[$us[u_level]]." ".($us[r_total]+1).". Please listen to the piece of music and guess the composer:</b><br>";
  echo "<table border=0><tr><td bgcolor=black>
    <table cellpadding=10 border=0 cellspacing=1>";
  echo "<tr>";
  echo "<td bgcolor=white align=left valign=top>";
  $ncust = substr_count($us[u_ca], "X");
  if (($us[u_level] == $level_cust) && ($ncust < 2)) 
    die("You have to select at least two composers to use Custom mode!");
  if (isset($c_id)) {
    $t_id = $us[t_id];
    $b_id = $us[b_id];
    $start = $us[u_start];
    if ($t_id == 0) die("This question is finished. Please go to the <a href=quiz.php>next question</a>.");
    load_track($t_id);
    // Remove links
    if ($play_symlinks>0) if (file_exists("ln/$us[u_id]")) {
      $max_blocks = floor($ts[t_len]/$block_len)+1;
      for ($i=1; $i<=$max_blocks+2; $i++) {
        $link = block_url($t_id, $i, 1);
        //echo block_url($t_id, $i)." $link<br>";
        if (is_link($link)) unlink($link);
      }
      rmdir("ln/$us[u_id]");
    }
    $ca1 = load_composer($c_id);
    $ca2 = load_composer($ts[c_id]);
    $cent = $ca1[c_start] - $ca2[c_start];
    echo "You selected: <a target=_blank href=".comp_link($ca2[c_id]).">$ca1[c_name]</a> [$ca1[c_years]] $ca1[c_country] ($ca1[p_name])<br>";
    if ($c_id == $ts[c_id]) {
      echo "<font color=green size=6><b>Correct!</b></font><br>";
      $ok=1;
    } else {
      echo "<font color=red size=5><b>Incorrect. ";
      if (abs($cent)>70) echo "$cent years difference. ";
      $wrong2 = 0;
      if ($ca1[p_name] != $ca2[p_name]) {
        echo "Wrong period. ";
        $wrong2 = 1;
      }
      echo "</b></font><br>";
      echo "Right answer: <a target=_blank href=../classclass/am.php?c_id=$ca2[c_id]>$ca2[c_name]</a> [$ca2[c_years]] $ca2[c_country] ($ca2[p_name])<br>";
      $ok=0;
    }
    echo "<br>Track name: $ts[t_name]<br>";
    log_game($b_id, time()-$start, $c_id, $ok, $wrong2, $cent);
    $q5 = "SELECT count(*) as cnt,avg(l_ok) as cor FROM cc_qlog WHERE u_id='$us[u_id]' AND t_id=$t_id AND l_time > '$tracks_start'";
    //echo $q5;
    $r5 = mysql_query($q5);
    echo mysql_error();
    $w5 = mysql_fetch_assoc($r5);
    echo "You hear this track: <a href=ptracks.php?t_id=$t_id>$w5[cnt] times</a> (".round($w5[cor]*100)."% correct)<br>";
    echo "Track duration: ".date('i:s', $ts[t_len])."<br>";
    if ($us[u_oneblock] == 1) echo "Minute selected for quiz: $b_id<br>";
    echo "Time to answer: ".date('i:s', time()-$start)."<br>";
    echo "<br>";
    echo str_replace("\n", "<br>", iconv("cp1251", "UTF-8//TRANSLIT", $ts[t_meta]));
    echo "<br>";
    $oneblock = 0;
    echo "<a id=sel href=quiz.php>Go to next question >>>>>>></a><br><br>";
    show_user_stat();
  } else {
    if ($us[t_id] != 0) {
      $t_id = $us[t_id];
      load_track($t_id);
      $b_id = $us[b_id];
      $start = $us[u_start];
      echo "<font color=red>Unfinished question detected. Please answer the question to continue.</font>";
    } else {
      // Select track
      /*
      $t_id = choose_track();
      load_track($t_id);
      $b_id = choose_block();
      */
      $b_id = choose_block_new();
      load_track($t_id);
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
        if (!file_exists("ln/$us[u_id]")) mkdir("ln/$us[u_id]");
        if ($us[u_oneblock]) {
          $link = block_url($t_id, 1, 1);
          if (is_link($link)) unlink($link);
          symlink("../../".block_url($t_id, $b_id), $link);
          if (!is_link($link)) symlink("../../".block_url($t_id, $b_id), $link);
          if (!is_link($link)) symlink("../../".block_url($t_id, $b_id), $link);
        } else {
          $max_blocks = floor($ts[t_len]/$block_len)+1;
          for ($i=1; $i<=$max_blocks; $i++) {
            $link = block_url($t_id, $i, 1);
            //echo block_url($t_id, $i)." $link<br>";
            if (is_link($link)) unlink($link);
            symlink("../../".block_url($t_id, $i), $link);
            if (!is_link($link)) symlink("../../".block_url($t_id, $i), $link);
            if (!is_link($link)) symlink("../../".block_url($t_id, $i), $link);
          }
        }
      }
    }
    echo "<form action=quiz.php method=get>";
    //echo "<input type=hidden name=t_id value=$ts[t_id]>";
    //echo "<input type=hidden name=b_id value=$b_id>";
    echo "<input type=hidden name=ac value=$start>";
    show_composers();
    echo "<p><input type=submit>";
    echo "</form>";
    if ($t_id > 0) {
      $oneblock = $us[u_oneblock];
      $us[t_id] = $t_id;
      $us[b_id] = $b_id;
      $us[u_start] = $start;
      save_user();
    }
  }
  
  echo "<td bgcolor=white align=left valign=top>";
  show_player($t_id, $b_id, isset($c_id) ? 0 : $us[u_oneblock], 
    isset($c_id) ? 0 : $play_symlinks, isset($c_id) ? 0 : 1);
  /*
  $xmlurl = "qlist.php?u_id=$us[u_id]-$us[u_start]";
  if (isset($c_id)) $xmlurl = "qlist.php?t_id=$t_id";
  echo "<div><object type='application/x-shockwave-flash' data='dewplayer/dewplayer-playlist-cover.swf' width='240' height='220' id='dewplayer' name='dewplayer'>";
  echo "<param name='wmode' value='transparent' />";
  echo "<param name='movie' value='dewplayer/dewplayer-playlist-cover.swf' />";
  echo "<param name='flashvars' value='";
  //if (!isset($c_id)) echo "autoplay=1&";
  //echo "randomplay=1&";
  echo "showtime=1&autoreplay=true&javascript=on&";
  echo "xml=$xmlurl' />";
  echo "</object></div>";
  */
  //echo "<button valign=center onclick=\"go(2);\"><img style='vertical-align: middle' border=0 src=images/play.gif></button>";
  $b_id2 = $b_id;
  if ($us[u_oneblock]) $b_id2 = 1;
  echo "<a target=_blank href=".block_url($t_id, $b_id2, isset($c_id) ? 0 : $play_symlinks)."?$us[u_start]>Alternative link</a><br>";
  echo "<br><a href=quiz.php?ac=$start&bblock=1";
  if (isset($c_id)) echo "&c_id=$c_id&t_id=$t_id&b_id=$b_id";
  echo "><font color=red>Report broken track</font></a>";
  //echo "<a href=\"$xmlurl\">Qlist</a>";
  echo "</table>";
  echo "</table>";
  //echo "$ts[c_name]";
 
  echo "<br>Please pay attention, that if you started<br>the new question and exited it without answering,<br>the system will wait until you answer <br>and if it even takes several days, it will <br>count this much time as your answer time.";
?>
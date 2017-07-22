<?
  include "mysql.php";
  
  $block_len = 60; // in seconds
  $dewpath = "dewplayer";
  $block_path = "blocks";
  $symlink_path = "ln";
  $comp_hint = 5;
  $level_name = array(1=>"Easy", 2=>"Normal", 3=>"Hard", 4=>"Insane", 5=>"Custom");
  $level_name2 = array(1=>"Easy (15 greatest composers)", 2=>"Normal (50 known composers)", 3=>"Hard (100 composers)", 4=>"Insane (150 composers)", 5=>"Custom (You select composers)");
  $level_cust = 5;
  $max_ptracks = 100;
  $tracks_start = "2013-05-14 20:00:00";
  $current_t_count = 5116;
  $current_t_len = 427;
  $current_b_count = 28220;
  $current_c_count = 150;
  
  // Rating
  $k_allcomp = 0.8;
  $k_allcompp = 0.3;
  $k_oneblock = 0.25;
  $k_rightp = 5;
  $k_secp = 0.1;
  $k_secp2 = 10;
  $k_r = 1000;
  $rating_min_total = 10; // minimum answers to show in rating table
  $rating_min_total2 = 1; // for particular composer
  $rating_max_count = 100;
  $last_games = 100;
  $last_games2 = 100;
  
  // Play mode
  $play_symlinks = 1;
  $select_style = 1;
  
  //if ((date("H") < 8) || (date("H") >21)) die("Sorry, this site works from 8:00 to 22:00 MSD only due to limitations of free hosting. Please come back later. You can donate so that I will be able to have a better hosting, if you need site up at night.");

  function show_block($t_id, $b_id, $oneblock, $symlink) {
    GLOBAL $block_path, $us;
		echo "{title:'";
    if ($oneblock) echo "Excerpt";
    else echo "Minute $b_id";
    echo "',";
	  echo "mp3:'";
    echo block_url($t_id, $b_id, $symlink)."?$us[u_start]";
    echo "'";
		echo "},";
  }

  function show_player($t_id, $b_id, $oneblock, $symlink, $autoplay) {
    GLOBAL $ts, $block_len;
?>
<link href="jplayer/css/jPlayer.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="jplayer/skin/pink.flag/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="jplayer/js/jquery.jplayer.min.js"></script>
<?
  echo "<script type='text/javascript' src='jplayer/js/jplayer.playlist.";
  if ($autoplay>0) echo "autoplay.";
  echo "min.js'></script>";
  //echo "<script type='text/javascript' src='jplayer/js/jquery.jplayer.inspector.js'></script>";
?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
<?
  if ($oneblock) {
    show_block($t_id, 1, $oneblock, $symlink);
  } else {
    for ($i=1; $i<=ceil($ts[t_len]/$block_len); $i++) show_block($t_id, $i, $oneblock, $symlink);
  }
?>
	], {
		//swfPath: "http://www.jplayer.org/latest/js/Jplayer.swf",
    swfPath: "jplayer/js",
		supplied: "mp3",
		wmode: "window",
    autoPlay: true,
    loop: true,
<?
    //echo "errorAlerts: true,";
    //echo "warningAlerts: true,";
    //echo "canplay: function() { $('#jquery_jplayer_1').jPlayer('play'); },";
?>
		smoothPlayBar: true,
		keyEnabled: false
	});
<?
	//echo "$('#jplayer_inspector_1').jPlayerInspector({jPlayer:$('#jquery_jplayer_1')});";
  //echo "$('#jquery_jplayer_1').jPlayer('play');";
?>
});
//]]>
</script>
<div id="container">

	<header>
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>

						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-current-time"></div>
					<div class="jp-duration"></div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
  </div>
<?
    //echo "	<div id='jplayer_inspector_1'></div>";
  }
  
  function secure_variable($st) {
    GLOBAL ${$st};
    if (isset($_GET[$st])) ${$st} = mysql_real_escape_string($_GET[$st]);
  }

  function secure_variable_post($st) {
    GLOBAL ${$st};
    if (isset($_POST[$st])) ${$st} = mysql_real_escape_string($_POST[$st]);
  }

  function comp_link($c_id) {
    return "../classclass/am.php?c_id=$c_id";
  }
  
  function block_url($t_id, $b_id, $symlink=0) {
    GLOBAL $block_path, $symlink_path, $us;
    if ($symlink) return "$symlink_path/$us[u_id]/".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
    else return "$block_path/$t_id/".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
  }
  
  function new_user($pass, $email, $level=1) {
    GLOBAL $uname;
    $ta = new_ta();
    $ca = new_ca();
    $r = mysql_query("INSERT INTO cc_users VALUES('','$uname','$pass',$level,1,0,0,0,
      \"$ta\",\"$ta\",'','','','',NOW(),'$ca','','$email')");
    echo mysql_error();
    $u_id = mysql_insert_id();
    $us[u_id] = $u_id;
    new_ur($u_id);
    load_user();
    update_tal();
    save_user();
  }
  
  function new_ur($u_id) {
    GLOBAL $level_cust;
    for ($i=1; $i<=$level_cust; $i++) {
      mysql_query("REPLACE INTO cc_ur VALUES('$u_id',$i,0,0,0,0,0,0,0)");
    }
  }
  
  function get_ccount() {
    GLOBAL $ccount;
    if ($ccount == 0) {
      $r = mysql_query("SELECT COUNT(*) as cnt FROM cc_composers WHERE c_folder != '' ORDER BY ca_id");
      echo mysql_error();
      $w = mysql_fetch_array($r);
      $ccount = $w[cnt];
    }
    return $ccount;
  }
  
  function new_ca() {
    // X - enabled
    // o - disabled
    $ca = "";
    $ccount = get_ccount();
    for ($i=0; $i<$ccount; $i++) {
      $ca .= "o";
    }
    return $ca;
  }
  
  function assign_ca() {
    $r = mysql_query("SELECT * FROM cc_composers WHERE c_folder != '' ORDER BY c_id");
    echo mysql_error();
    $ccount = mysql_numrows($r);
    for ($i=0; $i<$ccount; $i++) {
      $w = mysql_fetch_assoc($r);
      mysql_query("UPDATE cc_composers SET ca_id=".($i+1)." WHERE c_id=$w[c_id]");
      echo mysql_error();
    }
  }
  
  function new_ta() {
    // X - enabled
    // S - enabled and selected for training (mistakes)
    // d - disabled in training (>70% right)
    // o - disabled in training and main modes (>90% right)
    // l - disabled in current level (also custom)
    $ta = "";
    $tcount = get_tcount();
    for ($i=0; $i<$tcount; $i++) {
      $ta .= "X";
    }
    return $ta;
  }
  
  function save_user() {
    GLOBAL $us;
    $r = mysql_query("REPLACE INTO cc_users VALUES(
      '$us[u_id]','$us[u_name]','$us[u_pass]','$us[u_level]','$us[u_oneblock]',
      '$us[u_onetrack]','$us[u_allcomp]','$us[u_alpha]','$us[u_train]',
      '$us[u_ta]','$us[u_tal]',
      '$us[t_id]','$us[b_id]','$us[u_start]',NOW(),'$us[u_ca]','$us[u_ca2]',
      '$us[u_email]')");
    echo mysql_error();
    $r = mysql_query("UPDATE cc_ur SET 
      r_right = '$us[r_right]',
      r_total = '$us[r_total]',
      r_rightp = '$us[r_rightp]',
      r_avsec = '$us[r_avsec]',
      r_avcent = '$us[r_avcent]',
      r_avcent2 = '$us[r_avcent2]',
      r_r1 = '$us[r_r1]'
      WHERE u_id='$us[u_id]' AND r_level='$us[r_level]'");
    echo mysql_error();
  }
  
  function load_user($u_id=0) {
    GLOBAL $uname, $us;
    $cond = "u_name='$uname'";
    if ($u_id>0) $cond = "cc_users.u_id='$u_id'";
    $r = mysql_query("SELECT * FROM cc_users 
      LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
      WHERE $cond");
    echo mysql_error();
    $us = mysql_fetch_array($r);
    // Check tracks
    $tcount=get_tcount();
    if ($tcount != strlen($us[u_ta])) {
      //echo "Tracks changed: $tcount not ".strlen($us[u_ta]);
      $us[u_ta] = new_ta();
      update_tal();
      save_user();
    }
  }
  
  function load_track($t_id) {
    GLOBAL $ts;
    $r = mysql_query("SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id) WHERE t_id='$t_id'");
    echo mysql_error();
    $ts = mysql_fetch_assoc($r);
  }
  
  function load_composer($c_id) {
    $r = mysql_query("SELECT * FROM cc_composers WHERE c_id='$c_id'");
    echo mysql_error();
    return mysql_fetch_assoc($r);
  }
  
  function update_tal() {
    GLOBAL $us, $level_cust;
    $us[u_tal] = $us[u_ta];
    $r = mysql_query("SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id)");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      if ($us[u_level] == $level_cust) {
        if ($us[u_ca][$w[ca_id]] != "X") {
          //echo "Disabling tal for $w[t_id]<br>";
          $us[u_tal][$w[t_id]-1] = "l";
        }
      } else {
        if ($w[c_rating] > $us[u_level]) {
          //echo "Disabling tal for $w[t_id]<br>";
          $us[u_tal][$w[t_id]-1] = "l";
          //echo "TAL: $us[u_tal]<br>";
        }
      }
    }
  }
  
  function rnd($x1, $x2) {
    return ($x2-$x1)*(mt_rand()/mt_getrandmax())+$x1;
  }
  
  function choose_track() {
    GLOBAL $us;
    $tcount = get_tcount();
    // Count available tracks
    $n1 = substr_count($us[u_tal], "S");
    $n2 = substr_count($us[u_tal], "X");
    $n = $n1;
    if ($us[u_train] == 0) $n += $n2;
    // Make random
    $x = round(rnd(1, $n));
    if ($x<1) $x = 1;
    //echo $x;
    // Create t_id
    $pos = 0;
    for ($i=0; $i<$tcount; $i++) {
      if ($us[u_tal][$i] == "S") $pos++;
      if (($us[u_train] == 0) && ($us[u_tal][$i] == "X")) $pos++;
      if ($pos == $x) {
        $t_id = $i+1;
        break;
      }
    }
    return $t_id;
  }

  function choose_block() {
    GLOBAL $us, $ts, $block_len;
    $max = floor($ts[t_len]/$block_len);
    //echo "Max: $max<br>";
    $b_id = round(rnd(1, $max));
    if ($b_id<1) $b_id = 1;
    return $b_id;
  }
  
  function write_log($st) {
    $fh = fopen("cquiz.log", "a");
    fputs($fh, $st."\n");
    fclose($fh);
  }
  
  function choose_block_new() {
    GLOBAL $us, $ts, $t_id, $level_cust;
    // Choose composer
    $cond = "c_rating <= '$us[u_level]'";
    if ($us[u_level] == $level_cust) {
      $c = strlen($us[u_ca]);
      $cond = "ca_id in (";
      $first = 1;
      for ($x=0; $x<$c; $x++) if ($us[u_ca][$x] == "X") {
        if ($first) {
          $first = 0;
        } else {
          $cond .= ",";
        }
        $cond .= "$x";
      }
      $cond .= ")";
    }
    $q = "SELECT count(*) as cnt FROM cc_composers WHERE $cond";
    //echo $q."<br>";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $c_count = $w[cnt];
    //echo "C_count: $c_count ";
    for ($i=0; $i<5; $i++) {
      $r_n = rand(0, $c_count-1);
      $r2 = mysql_query("SELECT * FROM cc_composers WHERE $cond LIMIT $r_n,1");
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      $c_id = $w2[c_id];
      // Check if need rechoose
      $freq = round(70-$w2[c_len]*7/360);
      $r_n2 = rand(1, 100);
      if ($r_n2 < $freq) {
        //echo "Rechoosing $freq $w2[c_id] $w2[c_name3] $w2[c_len] ... ";
      } else break;
    }
    //echo "$w2[c_name3] ";
    for ($i=0; $i<5; $i++) {
      if ($us[u_oneblock]) {
        // Choose block
        $cond2 = "c_id = '$c_id'";
        $r = mysql_query("SELECT count(*) as cnt FROM cc_qblocks WHERE $cond2");
        echo mysql_error();
        $w = mysql_fetch_assoc($r);
        $b_count = $w[cnt];
        //echo "B_count: $b_count ";
        $r_n = rand(0, $b_count-1);
        $r2 = mysql_query("SELECT * FROM cc_qblocks WHERE $cond2 LIMIT $r_n,1");
        echo mysql_error();
        $w2 = mysql_fetch_assoc($r2);
        $t_id = $w2[t_id];
        $b_id = $w2[b_lid];
      } else {
        // Choose track
        $cond2 = "c_id = '$c_id'";
        $r = mysql_query("SELECT count(*) as cnt FROM cc_ctracks WHERE $cond2");
        echo mysql_error();
        $w = mysql_fetch_assoc($r);
        $t_count = $w[cnt];
        //echo "B_count: $b_count ";
        $r_n = rand(0, $t_count-1);
        $r2 = mysql_query("SELECT * FROM cc_ctracks WHERE $cond2 LIMIT $r_n,1");
        echo mysql_error();
        $w2 = mysql_fetch_assoc($r2);
        $t_id = $w2[t_id];
        $b_id = 1;
      }
      $link = block_url($t_id, $b_id, 0);
      if ($b_id == 0) {
        write_log(date("Y-m-d H:i:s")." $u_id $b_id $t_id $c_id $b_count $c_count");
      } elseif (!file_exists($link)) {
        write_log(date("Y-m-d H:i:s")." $u_id $b_id $t_id $c_id $b_count $c_count");
      } else break;
    }
    return $b_id;
  }
  
  function get_tcount() {
    GLOBAL $tcount;
    if ($tcount == 0) {
      $r = mysql_query("SELECT COUNT(*) as cnt FROM cc_ctracks");
      echo mysql_error();
      $w = mysql_fetch_array($r);
      $tcount = $w[cnt];
    }
    return $tcount;
  }
  
  function show_composers() {
    GLOBAL $us, $ts, $level_cust, $comp_hint, $select_style;
    // Create randoms
    /*
    $ccount = get_ccount();
    if ($us[u_allcomp] == 0) {
      $rc[0] = $ts[ca_id];
      for ($i=1; $i<$comp_hint+1; $i++) {
        for ($x=0; $x<100; $x++) {
          $rc[$i] = round(rnd(1, $ccount));
          $passed = 1;
          for ($y=0; $y<$i; $y++) {
            if ($rc[$y] == $rc[$i]) $passed=0;
          }
          if ($passed) break;
        }
      }
      echo "<pre>"; print_r($rc); echo "</pre>";
    }
    */
    if ($us[u_alpha]) {
      $order = "c_name";
    } else {
      $order = "p_id,c_start,c_name";
    }
    if ($us[u_level] != $level_cust) 
      $cond = "AND c_rating <= $us[u_level]";
    $limit = "";
    /*
    if (!$us[u_allcomp]) {
      $order = "RAND()";
      $limit = "LIMIT $comp_hint";
    }
    */
    // Make randoms
    if ($us[u_allcomp] == 0) {
      if ($us[u_ca2] == "") {
        $q = "SELECT * FROM cc_composers LEFT JOIN cc_periods USING (p_name) WHERE c_folder != '' $cond ORDER BY RAND() LIMIT $comp_hint";
        $r = mysql_query($q);
        echo mysql_error();
        $n = mysql_numrows($r);
        $us[u_ca2] = new_ca();
        $us[u_ca2][$ts[ca_id]] = "X";
        for ($i=1; $i<$n+1; $i++) {
          $w = mysql_fetch_array($r);
          //$rc[$i] = $w[ca_id];
          $us[u_ca2][$w[ca_id]] = "X";
          //echo "Set $w[ca_id]<br>";
        }
        save_user();
      }
    }
    // Main task
    $q = "SELECT * FROM cc_composers LEFT JOIN cc_periods USING (p_name) WHERE c_folder != '' $cond ORDER BY $order $limit";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    $p_name = "";
    if ($select_style == 0) echo "<select id=sel name=c_id size=20 style='width: 400px'>";
    $cnum=0;
    $first = 1;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      if ($us[u_level] == $level_cust) {
        if ($us[u_ca][$w[ca_id]] != "X") continue;
      } elseif ($us[u_ca2] != "") {
        if ($us[u_ca2][$w[ca_id]] != "X") continue;
      }
      if ((!$us[u_alpha]) && ($p_name != $w[p_name])) {
        if ($select_style == 0) echo "<option class=a disabled>--- $w[p_name]</option>";
        if ($select_style == 1) echo "<p><font color=green>$w[p_name]</font> <br>";
        $p_name = $w[p_name];
      }
      if ($select_style == 0) echo "<option value=$w[c_id]>$w[c_name] [$w[c_years]] $w[c_country]</option>";
      if ($select_style == 1) {
        echo "<p><label><input ";
        if ($first>0) echo "id=sel ";
        echo "style='vertical-align: bottom; width: 18px; height: 18px;' tabindex=1 type=radio name=c_id value=$w[c_id]><b>$w[c_name] [$w[c_years]] $w[c_country]</b></label>";
        $first = 0;
      }
      $cnum++;
    }
    if ($cnum==0) {
      if ($select_style == 0) echo "<option value=0>No composers selected!</option>";
      if ($select_style == 1) echo "No composers selected!";
    }
    echo "</select>";
  }

  function show_user_level_stat($us) {
    // THIS FUNCTION IS OLD AND NOT USED
    GLOBAL $level_name;
    echo "Level: ".$level_name[$us[r_level]]."<br>";
    echo "Total questions answered: $us[r_total]<br>";
    if (($us[r_total]) > 0) {
      echo "Correct composers: $us[r_right] (".round($us[r_right]/($us[r_total])*100, 1)."%)<br>";
      echo "Correct periods: $us[r_rightp] (".round($us[r_rightp]/($us[r_total])*100, 2)."%)<br>";
      //echo "Wrong composers: ".($us[r_total]-$us[r_right])." (".round($us[u_wrong]/($us[r_total])*100, 1)."%)<br>";
    }
    echo "Average think time: ".round($us[r_avsec], 2)." seconds<br>";
    echo "Average absolute years error: ".round($us[r_avcent2], 1)." years<br>";
    //echo "Average years error: ".round($us[r_avcent], 1)." years<br>";
    echo "<br>";
  }
  
  function show_user_logs($su_id=0) {
    GLOBAL $us, $level_name, $last_games, $last_games2, $filter_t_id, $tracks_start;
    $ua = $us;
    if ($su_id>0) {
      $r = mysql_query("SELECT * FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_error();
      $ua = mysql_fetch_array($r);
    }
    echo "<p align=left>";
    if ($su_id == -1) {
      echo "<b>Last games for all users:</b>";
    }
    else echo "<b>Last games for user $ua[u_name]:</b><br>";
    //echo "<table border=1 cellpadding=3>";
    echo "<table border=1 cellpadding=3>";
    echo "<tr>";
    if ($su_id == -1) echo "<th>User</th>";
    echo "<th>Date</th>";
    echo "<th>Level</th>";
    if ($filter_t_id == 0) echo "<th>Composer</th>";
    else echo "<th>Selected composer</th>";
    echo "<th>Correct</th>";
    echo "<th>Correct period</th>";
    echo "<th>Seconds</th>";
    //echo "<th>Guess</th>";
    echo "<th>One minute</th>";
    echo "<th>All composers</th>";
    echo "<th>Rating</th>";
    echo "</tr>";
    $cond = "WHERE cc_qlog.u_id = $ua[u_id]";
    if ($su_id == -1) $cond="";
    if ($filter_t_id>0) $cond .= " AND cc_qlog.t_id=$filter_t_id AND cc_qlog.l_time > '$tracks_start' ";
    $limit = "LIMIT $last_games";
    if ($su_id == -1) $limit = "LIMIT $last_games2";
    $q = "SELECT *,
      cc_qlog.u_allcomp as allcomp,
      cc_qlog.u_oneblock as oneblock,
      cc_qlog.u_level as level,
      c2.c_name as cn2,
      c2.c_id as ci2
      FROM cc_qlog 
      LEFT JOIN cc_composers as c1 ON (c1.c_id=cc_qlog.c_id) 
      LEFT JOIN cc_composers as c2 ON (c2.c_id=cc_qlog.c_id2) 
      LEFT JOIN cc_users ON (cc_users.u_id=cc_qlog.u_id)
      $cond
      ORDER BY l_time DESC,l_id DESC $limit";
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      //print_r($w);
      echo "<tr>";
      if ($su_id == -1) echo "<td><a href=stats.php?su_id=$w[u_id]>$w[u_name]</td>";
      echo "<td><center>$w[l_time]</td>";
      echo "<td><center>".$level_name[$w[level]]."</td>";
      if ($filter_t_id == 0) echo "<td><center><a href=".comp_link($w[c_id]).">$w[c_name]</td>";
      else {
        echo "<td><center><a href=".comp_link($w[ci2]).">";
        if (!$w[l_ok]) echo "<font color=brown>";
        echo "$w[cn2]</td>";
      }
      echo "<td><center>";
      if ($w[l_ok]) echo "<img src=images/check.png>";
      echo "<td><center>";
      if (!$w[l_wrong2]) echo "<img src=images/check.png>";
      echo "<td><center>$w[l_sec]</td>";
      echo "<td><center>";
      if ($w[oneblock]) echo "<img src=images/check.png>";
      echo "<td><center>";
      if ($w[allcomp]) echo "<img src=images/check.png>";
      echo "<td><center>";
      echo round($w[l_r1]);
    }
    echo "</table>";
  }
  
  function show_user_stat($su_id=0) {
    GLOBAL $us, $level_name;
    $ua = $us;
    if ($su_id>0) {
      $r = mysql_query("SELECT * FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_error();
      $ua = mysql_fetch_array($r);
    }
    echo "<b>Statistics for user $ua[u_name]:</b><br>";
    $r = mysql_query("SELECT * FROM cc_ur WHERE u_id='$ua[u_id]' ORDER BY r_level");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $wa[$i] = mysql_fetch_assoc($r);
    }
    echo "<table border=1 cellpadding=3>";
    echo "<tr>";
    echo "<th>Level";
    for ($i=0; $i<$n; $i++) {
      echo "<th>";
      echo "<a href=graph.php?u_id=$ua[u_id]&level=".$wa[$i][r_level].">";
      if ($wa[$i][r_level] == $ua[u_level]) echo "<font color=red>";
      echo $level_name[$wa[$i][r_level]];
    }
    echo "<tr>";
    echo "<th>Total questions answered";
    for ($i=0; $i<$n; $i++) echo "<td><center>".$wa[$i][r_total];
    echo "<tr>";
    echo "<th>Rating";
    for ($i=0; $i<$n; $i++) echo "<td><center>".round($wa[$i][r_r1]);
    echo "<tr>";
    echo "<th>Correct composers";
    for ($i=0; $i<$n; $i++) {
      echo "<td>";
      if ($wa[$i][r_total]>0) echo "<center>".round($wa[$i][r_right]/($wa[$i][r_total]+0.0000000001)*100, 1)."%";
    }
    echo "<tr>";
    echo "<th>Correct periods";
    for ($i=0; $i<$n; $i++) {
      echo "<td>";
      if ($wa[$i][r_total]>0) echo "<center>".round($wa[$i][r_rightp]/($wa[$i][r_total]+0.00000000001)*100, 1)."%";
    }
    echo "<tr>";
    echo "<th>Average think time (seconds)";
    for ($i=0; $i<$n; $i++) {
      echo "<td>";
      if ($wa[$i][r_total]>0) echo "<center>".round($wa[$i][r_avsec], 2);
    }
    echo "<tr>";
    echo "<th>Average absolute years error";
    for ($i=0; $i<$n; $i++) {
      echo "<td>";
      if ($wa[$i][r_total]>0) echo "<center>".round($wa[$i][r_avcent2], 1);
    }
    echo "<tr>";
    /*
    echo "<th>Average years error";
    for ($i=0; $i<$n; $i++) {
      echo "<td>";
      if ($wa[$i][r_total]>0) echo "<center>".round($wa[$i][r_avcent], 2);
    }
    */
    echo "</table><br>";
  }
  
  function log_game($b_id, $sec, $c_id2, $ok, $wrong2, $cent) {
    GLOBAL $us, $ts, $k_oneblock, $k_rightp, $k_allcomp, $k_allcompp, $k_secp, $k_secp2, $k_r, $level_cust;
    if ($ts[t_id] == $us[t_id]) {
      if ($us[u_level] == $level_cust) $ncust = substr_count($us[u_ca], "X");
      else $ncust=0;
      $allcomp = $us[u_allcomp];
      if ($us[u_level] == $level_cust) $allcomp=0;
      // Rating
      $k1 = pow($k_secp2, $k_secp)-1;
      $r_rd1 = (1+$us[u_oneblock]*$k_oneblock)*
        ((1+$allcomp*($k_allcomp*$us[u_level]))*$ok+(1+$allcomp*($k_allcompp))*(1-$ok-$wrong2)/$k_rightp)/
        (pow($sec+$k_secp2, $k_secp)-$k1)*$k_r*(1+$ncust/10);
      //echo "(1+$us[u_oneblock]*$k_oneblock)*(1+$allcomp*($k_allcomp+$us[u_level]))*($ok+(1-$ok-$wrong2)/$k_rightp)/(pow($sec+$k_secp2, $k_secp)-$k1) ";
      //echo pow(11, 0.1);
      //echo " $k1 $r_rd1<br>";
      $us[r_r1] = ($us[r_r1]*$us[r_total] + $r_rd1)/($us[r_total]+1);
      $q = "INSERT INTO cc_qlog VALUES('','$us[u_id]',NOW(),'$sec',$us[u_oneblock],
        $allcomp,$us[u_level],$ts[c_id],$ts[t_id],'$b_id','$ok','$wrong2','$c_id2','$cent','$r_rd1','$ncust')";
      mysql_query($q);
      echo mysql_error();
      // Update stat
      $us[r_avsec] = ($us[r_avsec]*($us[r_total]) + $sec)/($us[r_total]+1);
      if ($ok == 0) {
        $us[r_avcent2] = ($us[r_avcent2]*($us[r_total]-$us[r_right]) + abs($cent))/($us[r_total]-$us[r_right]+1);
        $us[r_avcent] = ($us[r_avcent]*($us[r_total]-$us[r_right]) + $cent)/($us[r_total]-$us[r_right]+1);
      }
      
      if ($ok) {
        $us[r_right]++;
      }
      $us[r_total]++;
      if (!$wrong2) $us[r_rightp]++;
    }
    $us[t_id] = 0;
    $us[b_id] = 0;
    $us[u_ca2] = "";
    save_user();
  }
  
  function count_stats() {
    GLOBAL $current_u_count, $current_l_count, $current_l_last, $current_u_last;
    if ($current_u_count>0) return;
    $q = "SELECT count(*) as cnt FROM cc_users";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $current_u_count = $w[cnt];
    
    $q = "SELECT count(*) as cnt FROM cc_qlog";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $current_l_count = $w[cnt];

    $q = "SELECT MAX(l_id) as mx FROM cc_qlog"; 
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $x = $w[mx];

    $q = "SELECT * FROM cc_qlog LEFT JOIN cc_users USING (u_id) WHERE l_id = $x";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $current_l_last = $w[l_time];
    $current_u_last = $w[u_name];
  }
  
  function show_help() {
    GLOBAL $current_t_count, $current_c_count, $current_t_len, $current_u_count,
      $current_l_count, $current_l_last, $current_u_last, $current_b_count;
    count_stats();
    echo "<p><b>Total number of tracks</b>: $current_t_count";
    echo "<p><b>Total number of composers</b>: $current_c_count";
    echo "<p><b>Total length of tracks</b>: $current_t_len hours ($current_b_count 1-minute blocks)";
    echo "<p><b>Total users</b>: $current_u_count";
    echo "<p><b>Total answers by users</b>: $current_l_count (last $current_l_last by $current_u_last)";
    echo "<p align=center><b>Help</b>";
    echo "<p>CQuiz is a comprehensive \"guess the composer\" quiz. First thing you need to
      do is <a href=reg.php>register</a>. You can play in one of the 
      common modes (Easy, Normal, Hard, Insane) or choose any composers that you want for the quiz. 
      For example, you can choose only Bach and Handel and try to guess. After each of your questions 
      system will show you correct answer and information about the piece, that was played.";
    echo "<p>Easy mode includes 15 greatest composers, Normal mode adds 35 known composers
      and so on. You can change your mode from the Preferences tab.";
    echo "<p>Ratings are separate for modes (Easy, Normal...)
      Ratings are counted based on percent of correct answers, percent of wrong answers 
      within periods (when you choose Bach, when correct answer is Handel, who is also from 
      Baroque period), thinking time and your preferences. For example, if you set 
      \"play only 1-minute intervals\", this will increase your rating, but will also increase
      difficulty.";
    echo "<p>When playing you can use mouse or keyboard only: arrows and Enter key.";
  }
?>
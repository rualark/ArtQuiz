<?
  header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
  header("Pragma: no-cache"); // HTTP 1.0.
  header("Expires: 0"); // Proxies.
  error_reporting(E_ERROR);
  include "../url.php";
  include "../mysql.php";
  
  //if ($_SERVER['PHP_AUTH_USER'] == "rualark") $debug=1;
  
  $cache_enabled = 0;
  $min_tg_hist = 5; // Minimum number of minutes for composers to fix tg_id (except for t_len leader)
  $max_forum_cnum = 5; // Maximum number of composers on an island to count for composer forum messages number
  $cache_limit = 800000; // Maximum cache size in bytes
  $bhist_max = 20; // Maximum number of blocks history per u_id/c_id
  $r_round = 0; // Number of numbers after dot (precision)
  $i_success = 0.8; // Percentage of rating to island king rating
  $i_level_color = array(0 => "white", 1 => "#ddffdd", 2 => "#ffffaa", 3 => "#ffddaa", 4 => "#ffcccc", 5 => "#ffb5b5", 6 => "#ff9999");
  $admin_unames = array("rualark", "Rualark", "morpheus", "Morpheus", "YVArkh", "faraon");
  $block_len = 60; // in seconds
  $dewpath = "dewplayer";
  // Linux
  if ($os == "linux") {
    $ln_path = "../../";
    $symlink_path = "ln";
    $fsep = "/";
  } elseif ($os == "win") {
    $abs_path = "c:\\Web\\site\\cquiz\\";
    $ln_path = "";
    $symlink_path = "ln";
    $fsep = "\\";
  }
  $comp_hint = 5;
  $trating_name = array(0=>"All tracks", 1=>"50 most known tracks", 2=>"100 most known tracks", 3=>"200 most known tracks", 4=>"300 most known tracks", 5=>"500 most known tracks");
  $level_name = array(1=>"Easy", 2=>"Normal", 3=>"Hard", 4=>"Insane", 5=>"Isles", 6=>"Custom");
  $level_name2 = array(1=>"Easy (15 greatest composers)", 2=>"Normal (50 known composers)", 3=>"Hard (100 composers)", 4=>"Insane (200 composers)", 5=>"Isles (You select composers)", 6=>"Custom (fully customizable)");
  $level_cust = 5;
  $max_ptracks = 100;
  $tracks_start = "2013-05-14 20:00:00";
  $bb_states = array(0=>"Open", 1=>"Closed");
  $clear_days = 3; // Number of days you have to fix your cleared answers
  $min_answers_after_clear = 31; // Number of answers you have to answer to stop cleared questions from restoring
  
  // Slope const
  $ok_slope_min = 1;
  $ok_slope_max = 30;
  $slope_min_ans = 25;
  $r1_slope_min = 1;
  $r1_slope_max = 200;
  
  // Rating
  $k_allcomp = 0.5; // Coefficient for level rating increase
  $k_allcompp = 0.2;
  $k_oneblock = 0.1;
  $k_rightp = 7;
  $k_close = 7;
  $k_secp = 0.1;
  $k_secp2 = 100;
  $k_cent = 0.4;
  $k_cent2 = 100;
  $k_cncust = 0.2; // impact of cnum on rating was 0.1
  $k_r = 1000;
  $clear_min_hours = 24; // Minimum number of hours between each clear
  $i_since_hours = 24; // If island created less than this number of hours, show NEW
  $u_since_hours = 12; // If user created less than this number of hours, show NEW
  $i_last_hours = 24; // If any answer was on island less than this number of hours, show
  $rating_max_count = 100; // Maximum users to show in rating
  $isles_max_count = 500; // Maximum isles to show
  $isles_max_comps = 10; // Maximum number of composers to show
  $rating_min_total = 80; // minimum answers to show in rating table
  $rating_min_isle = 10; // minimum answers to show in rating table for island
  $rating_min_total2 = 1; // for particular composer
  $isle_king_min = array(30, 40, 60, 80); // minimum number of answers to become king and have a crown
  $isle_king_img = array("images/medal3.png", "images/medal2.png", "images/medal1.png", "images/crown.png");
  $isle_palace_min = array(2, 5); // minimum number of users to have a palace
  $last_games = 150; // for log of one user
  $last_games2 = 150; // for log of all users
  $last_games3 = 2000; // for active islands log
  $last_games4 = 100; // for act log
  
  // King rank
  $kr_sql = "IF(i_unum=1, 0.5, 1) * IF(u_id2, 0, 1) * SQRT(i_anum * i_unum) * LEAST(1, (cc_isles.r_total-$isle_king_min[0]) / ($isle_king_min[3]-$isle_king_min[0]))";
  
  $na_pow = array(1, 2, 4, 8, 16, 32, 64, 128);
  
  // Play mode
  $play_symlinks = 0;
  //$select_style = 1;
  
  $tts_active = 1; // Text to speech
  
  include "offline.php";
  
  //if ((date("H") < 8) || (date("H") >21)) die("Sorry, this site works from 8:00 to 22:00 MSD only due to limitations of free hosting. Please come back later. You can donate so that I will be able to have a better hosting, if you need site up at night.");
  
  require "lib.php";
  require "plib.php";

  function forum_parse_text($st, $cab) {
    GLOBAL $isle_csta;
    create_isle_cst(unpack_ca($cab));
    foreach ($isle_csta as $key => $val) {
      $st = preg_replace("/\b$key\b/i", mysql_real_escape_string($val), $st);
    }
    return $st;
  }
  
  function update_forum($id=0) {
    GLOBAL $na_pow, $max_forum_cnum;
    if ($id>0) $cond = "WHERE f_id='$id'";
    $q = "SELECT *, hex(i_cab) as cab FROM cc_forum $cond";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $f_text2 = mysql_real_escape_string(forum_parse_text(stripslashes($w[f_text]), $w[cab]));
      $q = "UPDATE cc_forum SET f_text2='$f_text2' WHERE f_id='$w[f_id]'";
      //echo $q;
      mysql_query2($q);
      echo mysql_report_error();
    }
    if ($id == 0) {
      // Update f_count for isles
      mysql_query2("UPDATE cc_isles
        LEFT JOIN (
        SELECT i_cab, COUNT(f_id) AS cnt FROM cc_forum
        WHERE f_deleted=0
        GROUP BY i_cab
        ) f USING (i_cab)
        SET f_count=f.cnt;
      ");
      echo mysql_report_error();
      // Update f_count for composers
      mysql_query2("UPDATE cc_composers 
        SET f_count=(
        SELECT COUNT(DISTINCT i_cab) AS cnt FROM cc_forum 
          LEFT JOIN cc_isles USING (i_cab)
          WHERE SUBSTRING(HEX(i_cab), -1-FLOOR(ca_id/4), 1) & POW(2, (ca_id%4)) > 0 AND f_deleted=0 AND i_cnum<=$max_forum_cnum
        )
      ");
      echo mysql_report_error();
    }
  }
  
  function mail_forum($f_id, $cab) {
    GLOBAL $us, $level_cust, $is;
    load_isle($cab);
    // Load forum comment
    $q = "SELECT f_text FROM cc_forum WHERE f_id='$f_id'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $fa = mysql_fetch_array($r);
    // Load forum users
    $q = "SELECT u_email FROM cc_forum LEFT JOIN cc_users ON (cc_forum.fu_id=cc_users.u_id AND cc_users.u_subscribe=1) 
      WHERE i_cab=x'$cab' AND fu_id!='$us[u_id]' GROUP BY fu_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    //$bcc = "rualark@gmail.com, rualark@yandex.ru, rualark@mail.ru ";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $bcc .= $w[u_email].", ";
    }
    // Send to creator
    if ($is[nu_id] != $us[u_id]) {
      $q = "SELECT u_email, u_subscribe FROM cc_users WHERE u_id='$is[nu_id]'";
      $r = mysql_query2($q);
      echo mysql_report_error();
      $ca = mysql_fetch_array($r);
      if ($ca[u_subscribe]>0) $bcc .= $ca[u_email].", ";
    }
    // Send to king
    if ($is[u_id] != $us[u_id]) {
      $q = "SELECT u_email, u_subscribe FROM cc_users WHERE u_id='$is[u_id]'";
      $r = mysql_query2($q);
      echo mysql_report_error();
      $ka = mysql_fetch_array($r);
      if ($ka[u_subscribe]>0) $bcc .= $ka[u_email].", ";
    }
    $i_cst2 = $is[i_cst2];
    if (($is[i_cnum] > 5) && ($is[i_name] != "")) $i_cst2 = "[$is[i_name], $is[i_cnum] composers]";
    $to      = 'ComposerQuiz@gmail.com';
    $subject = "$us[u_name] commented on \"$i_cst2\" island in CQuiz";
    $message = "$us[u_name] commented on \"$i_cst2\" island in CQuiz, where you are creator, king or comment author:\r\n\r\n".stripslashes(substr($fa[f_text], 0, 500));
    if (strlen($fa[f_text]>500)) $message .= "...";
    $message .= "\r\n\r\nTo view full reply, visit: \r\n".$_SERVER["HTTP_HOST"].dirname($_SERVER["REQUEST_URI"])."/rating.php?level=$level_cust&cab=$cab".
      "\r\n\r\nYou can unsubscribe from emails in preferences.";
    $headers = "From: ComposerQuiz@gmail.com\r\n" .
      "Reply-To: ComposerQuiz@gmail.com\r\n" .
      "Bcc: $bcc\r\n" .
      "X-Mailer: PHP/" . phpversion();
    //write_log("log/mail.log", "to: $to sub: $subject mess: $message headers: $headers");
    return mail($to, $subject, $message, $headers);
  }
  
  function load_comps() {
    GLOBAL $comp;
    if (is_array($comp)) return;
    // Load composers
    $q = "SELECT * FROM cc_composers WHERE ca_id != 0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $comp[$w[ca_id]] = $w;
    }
  }
  
  function load_isle($cab) {
    GLOBAL $is;
    $q = "SELECT * FROM cc_isles WHERE i_cab = x'$cab'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $is = mysql_fetch_assoc($r);
  }
  
  function create_isle_cst($ca) {
    GLOBAL $isle_cst, $isle_cst2, $isle_cst3, $isle_csta, $isle_cnum, $comp, $isles_max_comps, $url_main;
    //load_comps();
    $ccount = get_ccount();
    $isle_cst = "";
    $isle_cst2 = "";
    $isle_cst3 = "";
    $isle_cnum = 0;
    // Build condition for select
    $c = strlen($ca);
    $ca_cond = "ca_id in (";
    $first = 1;
    for ($x=0; $x<$c; $x++) if ($ca[$x] == "X") {
      if ($first) {
        $first = 0;
      } else {
        $ca_cond .= ",";
      }
      $ca_cond .= "$x";
    }
    $ca_cond .= ")";
    // SELECT composers and build string
    $q = "SELECT c_id, c_name3, c_name4, c_group, p_name, p_id, t_count, c_country, c_years, c_len FROM cc_composers WHERE $ca_cond";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $isle_cnum=$n;
    $first = 1; 
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      if ($w[c_name4] == "") echo "No c_name4 for c_id ".$w[c_id]."<br>";
      if ($first != 1) $isle_cst .= ", ";
      $isle_cst .= $w[c_name4];
      if ($first != 1) $isle_cst3 .= ", ";
      $cst3 = "<a title='$w[p_name]\n$w[c_name3]\n$w[c_country] $w[c_years], $w[t_count] tracks, ".round($w[c_len]/60)." min";
      if (strlen($w[c_group])>1) $cst3 .= "\n$w[c_group]";
      //$cst3 .= "\n$w[c_desc]";
      $cst3 .= "' href='".comp_link($w[c_id])."'>".$w[c_name4]."</a>";
      $id = preg_replace('/[^ A-Za-z0-9\-]/', "", iconv("UTF-8", "cp1251//TRANSLIT", $w[c_name4]));
      $isle_csta[$id] = "<a title='$w[p_name] $w[c_country] $w[c_years]' href='$url_main/cquiz/am.php?c_id=$w[c_id]'><font color=#666666>$w[c_name4]</font></a>";
      $isle_cst3 .= $cst3;
      if ($i <= $isles_max_comps) {
        if ($first == 0) $isle_cst2 .= ", ";
        $isle_cst2 .= $w[c_name4];
        $first = 0;
      } else {
        if ($first == 0) $isle_cst2 .= "...";
        $first = 2;
      }
    }
    /*
    for ($x=1; $x<=$ccount; $x++) {
      $w = $comp[$x];
      if ($ca[$x] == "X") {
        if ($comp[$x][c_name4] == "") echo "No c_name4 for c_id ".$comp[$x][c_id]."<br>";
        if ($first != 1) $isle_cst .= ", ";
        $isle_cst .= $comp[$x][c_name4];
        if ($first != 1) $isle_cst3 .= ", ";
        $isle_cst3 .= "<a title='$w[p_name]\n$w[c_name3]\n$w[c_country] $w[c_years], $w[t_count] tracks, ".round($w[c_len]/60)." min";
        if (strlen($w[c_group])>1) $isle_cst3 .= "\n$w[c_group]";
        $isle_cst3 .= "\n$w[c_desc]";
        $isle_cst3 .= "' href='".comp_link($comp[$x][c_id])."'>".$comp[$x][c_name4]."</a>";
        if ($isle_cnum <= $isles_max_comps) {
          if ($first == 0) $isle_cst2 .= ", ";
          $isle_cst2 .= $comp[$x][c_name4];
          $first = 0;
        } else {
          if ($first == 0) $isle_cst2 .= "...";
          $first = 2;
        }
        $isle_cnum ++;
      }
    }
    */
  }
  
  function comp_link($c_id) {
    GLOBAL $us, $url_main;
    return "$url_main/cquiz/am.php?u_id=$us[u_id]&c_id=$c_id";
  }
  
  // This returns web path
  function block_url($t_id, $b_id, $symlink=0) {
    GLOBAL $url_blocks, $symlink_path, $us, $fsep;
    if ($symlink) return "$symlink_path/$us[u_id]/".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
    else return "$url_blocks/$t_id/".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
  }
  
  // This returns web path to full links
  function full_url() {
    GLOBAL $symlink_path, $us, $fsep, $ts;
    return "tracks/$ts[t_folder]/$ts[t_fname]";
    //return "http://cquiz.breqwas.net/$ts[t_folder]/$ts[t_fname]";
  }
  
  // This returns internal path
  function block_url2($t_id, $b_id, $symlink=0) {
    GLOBAL $url_blocks, $symlink_path, $us, $fsep;
    if ($symlink) return "$symlink_path$fsep$us[u_id]$fsep".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
    else return "$url_blocks$fsep$t_id$fsep".str_pad($b_id, 3, '0', STR_PAD_LEFT).".mp3";
  }
  
  function new_ur($u_id) {
    GLOBAL $level_cust;
    for ($i=1; $i<=$level_cust; $i++) {
      mysql_query2("REPLACE INTO cc_ur VALUES('$u_id',$i,0,0,0,0,0,0,0,0,0,0,0,0,0)");
    }
  }
  
  function get_ccount() {
    GLOBAL $ccount;
    if ($ccount == 0) {
      $r = mysql_query2("SELECT MAX(ca_id) as cnt FROM cc_composers");
      echo mysql_report_error();
      $w = mysql_fetch_array($r);
      $ccount = $w[cnt];
    }
    return $ccount;
  }
  
  function get_gcount() {
    GLOBAL $gcount;
    if ($gcount == 0) {
      $r = mysql_query2("SELECT MAX(tg_id) as cnt FROM cc_tgroups");
      echo mysql_report_error();
      $w = mysql_fetch_array($r);
      $gcount = $w[cnt];
    }
    return $gcount;
  }
  
  function new_ga($sign="o") {
    $gcount = get_gcount();
    $ga = "o";
    for ($i=0; $i<=$gcount; $i++) {
      $ga[$i] = $sign;
    }
    return $ga;
  }
  
  function new_ca() {
    // X - enabled
    // o - disabled
    $ca = "";
    $ccount = get_ccount();
    for ($i=0; $i<=$ccount; $i++) {
      $ca .= "o";
    }
    return $ca;
  }
  
  function new_user($pass, $email, $source, $level=1) {
    GLOBAL $uname;
    $q = "INSERT INTO cc_users VALUES('','$uname',PASSWORD('$pass'),$level,0,1,0,0,1,'','','','','',
      NOW(),'','','$email','$source',NOW(), '', 50, 0, 1, 
      0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
    $r = mysql_query2($q);
    if (mysql_errno()>0) {
      echo "<font color=red><b>Error occured during creating a new user. Mail has been sent to administrator. Please try to register later. Thank you for your patience</b></font><br>";
      echo mysql_report_error();
      die("<br>");
    }
    $u_id = mysql_insert_id();
    $us[u_id] = $u_id;
    new_ur($u_id);
    load_user();
    //update_tal();
    save_user();
  }
  
  function save_user() {
    GLOBAL $us, $level_cust, $debug;
    $us[u_cab] = pack_ca($us[u_ca]);
    $us[u_cab2] = pack_ca($us[u_ca2]);
    $us[u_gab] = pack_ca($us[u_ga]);
    //echo "$us[u_cab] $us[u_ca]<br>";
    $r = mysql_query2("REPLACE INTO cc_users VALUES(
      '$us[u_id]','$us[u_name]','$us[u_pass]','$us[u_level]','$us[u_trating]','$us[u_oneblock]',
      '$us[u_allcomp]','$us[u_alpha]',
      '$us[u_select_style]',
      '$us[t_id]','$us[t_id2]','$us[tg_class]','$us[b_id]','$us[u_start]',NOW(),x'$us[u_cab]',x'$us[u_cab2]',
      '$us[u_email]','$us[u_source]','$us[u_since]','$us[u_cpu]','$us[u_speechvol]',x'$us[u_gab]','$us[u_subscribe]',
      '$us[u_kr]','$us[u_kcnt]','$us[u_icr]','$us[u_acnt]','$us[u_rent]','$us[u_palms]','$us[u_hc1]','$us[u_hc2]','$us[u_fires]','$us[u_medal1]',
      '$us[u_medal2]','$us[u_medal3]','$us[u_medal4]','$us[u_voted]','$us[u_posted]','$us[u_fup]','$us[u_fdown]','$us[u_clears]','$us[u_total]',
      '$us[u_total2]','$us[u_total3]')");
    echo mysql_report_error();
  }
  
  function update_ur() {
    // This function was previously a part of save_user and now is not used
    GLOBAL $us, $level_cust, $debug;
    // Assign to cab/gab real active array
    $cab = "";
    if ($us[u_level_old] >= $level_cust) $cab = $us[cab];
    $gab = "";
    if ($us[u_level_old] > $level_cust) $gab = $us[gab];
    if ($us[r_total]>0) {
      $q = "REPLACE INTO cc_ur VALUES( 
        '$us[u_id]', '$us[u_level_old]', '$us[r_right]', '$us[r_total]', '$us[r_rightp]',
        '$us[r_avsec]', '$us[r_avcent]', '$us[r_avcent2]', '$us[r_r1]', 
        '$us[r_allcomp]', '$us[r_oneblock]', x'$cab',0,0,0,0)";
      //echo $q;
      $r2 = mysql_query2($q);
    }
    //if ($debug>0) stop_time();
    if (($us[l_id] > 0) && ($cab != "")) {
      update_isles($cab, 1, $us[l_id]);
    }
    echo mysql_report_error();
  }
  
  function load_system() {
    GLOBAL $cc_system;
    $r = mysql_query2("SELECT * FROM cc_system");
    echo mysql_report_error();
    $cc_system = mysql_fetch_assoc($r);
  }
  
  function update_system($key, $val) {
    GLOBAL $cc_system;
    $r = mysql_query2("UPDATE cc_system SET $key='$val'");
    echo mysql_report_error();
    write_log("log/cquiz-system.log", date("Y-m-d H:i:s")." ".get_ip()." ".$_SERVER['PHP_SELF']." Update system $key $val");
  }
  
  function load_user($u_id=0) {
    GLOBAL $uname, $us, $level_cust;
    $cond = "u_name='$uname'";
    if ($u_id>0) $cond = "cc_users.u_id='$u_id'";
    $r = mysql_query2("SELECT u_level,hex(u_cab) as cab,hex(u_cab2) as cab2,hex(u_gab) as gab FROM cc_users 
      WHERE $cond");
    echo mysql_report_error();
    $us = mysql_fetch_array($r);
    // Read again with correct cab
    $cab = "";
    if ($us[u_level] >= $level_cust) $cab = $us[cab];
    $gab = "";
    if ($us[u_level] > $level_cust) $gab = $us[gab];
    $r = mysql_query2("SELECT *,cc_users.u_id as u_id,hex(u_cab) as cab,hex(u_cab2) as cab2,hex(u_gab) as gab,cc_users.t_id as t_id FROM cc_users 
      LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level AND cc_ur.r_cab=x'$cab') 
      WHERE $cond");
    echo mysql_report_error();
    $us = mysql_fetch_assoc($r);
    //if ($us[u_id] == 27) print_r($us);
    $us[u_ca] = unpack_ca($us[cab]);
    $us[u_ca2] = unpack_ca($us[cab2]);
    $us[u_ga] = unpack_ca($us[gab]);
    // Check tracks
    $tcount=get_tcount();
    // Save level
    $us[u_level_old] = $us[u_level];
  }
  
  function load_track($t_id) {
    GLOBAL $ts;
    $r = mysql_query2("SELECT * FROM cc_ctracks LEFT JOIN cc_composers USING (c_id) 
      LEFT JOIN cc_tgroups ON (cc_ctracks.tg_id=cc_tgroups.tg_id) 
      WHERE t_id='$t_id'");
    echo mysql_report_error();
    $ts = mysql_fetch_assoc($r);
  }
  
  function load_composer($c_id) {
    $r = mysql_query2("SELECT * FROM cc_composers WHERE c_id='$c_id'");
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $w[cpic_url] = "$url_cpic/$w[c_id].jpg";
    //echo $w[cpic_url];
    if (!file_exists($w[cpic_url])) $w[cpic_url]="";
    return $w;
  }
  
  function pack_ca_old($ca) {
    GLOBAL $na_pow;
    $num = 0;
    $cab = "";
    for ($x=0; $x<strlen($ca); $x++) {
      $cn = floor($x / 4);
      $ln = $x % 4;
      if ($ln == 0) {
        if ($cn>0) {
          $cab .= dechex($num);
        }
        $num = 0;
      }
      if ($ca[$x] == "X") $num += $na_pow[$ln];
    }
    if ($cn>0) {
      $cab .= dechex($num);
      if (($cn%2) == 0) $cab .= "0";
    }
    return $cab;
  }
  
  function pack_ca($ca) {
    GLOBAL $na_pow;
    $num = 0;
    $cab = "";
    for ($x=0; $x<strlen($ca); $x++) {
      $cn = floor($x / 4);
      $ln = $x % 4;
      if ($ln == 0) {
        if ($cn>0) {
          $cab = dechex($num).$cab;
        }
        $num = 0;
      }
      if ($ca[$x] == "X") $num += $na_pow[$ln];
    }
    if ($cn>0) {
      $cab = dechex($num).$cab;
    }
    // Trim zeros
    $cab = ltrim($cab, "0");
    if ((strlen($cab)%2) != 0) $cab = "0".$cab;
    return $cab;
  }
  
  function unpack_ca_old($cab) {
    GLOBAL $na_pow;
    $num = 0;
    for ($x=0; $x<strlen($cab); $x++) {
      if ($cab[$x] == "0") $ca .= "oooo";
      if ($cab[$x] == "1") $ca .= "Xooo";
      if ($cab[$x] == "2") $ca .= "oXoo";
      if ($cab[$x] == "3") $ca .= "XXoo";
      if ($cab[$x] == "4") $ca .= "ooXo";
      if ($cab[$x] == "5") $ca .= "XoXo";
      if ($cab[$x] == "6") $ca .= "oXXo";
      if ($cab[$x] == "7") $ca .= "XXXo";
      if ($cab[$x] == "8") $ca .= "oooX";
      if ($cab[$x] == "9") $ca .= "XooX";
      if ($cab[$x] == "A") $ca .= "oXoX";
      if ($cab[$x] == "B") $ca .= "XXoX";
      if ($cab[$x] == "C") $ca .= "ooXX";
      if ($cab[$x] == "D") $ca .= "XoXX";
      if ($cab[$x] == "E") $ca .= "oXXX";
      if ($cab[$x] == "F") $ca .= "XXXX";
    }
    return $ca;
  }
  
  function unpack_ca($cab) {
    GLOBAL $na_pow;
    $num = 0;
    $ca = "";
    for ($x=0; $x<strlen($cab); $x++) {
      if ($cab[$x] == "0") $ca = "oooo".$ca;
      elseif ($cab[$x] == "1") $ca = "Xooo".$ca;
      elseif ($cab[$x] == "2") $ca = "oXoo".$ca;
      elseif ($cab[$x] == "3") $ca = "XXoo".$ca;
      elseif ($cab[$x] == "4") $ca = "ooXo".$ca;
      elseif ($cab[$x] == "5") $ca = "XoXo".$ca;
      elseif ($cab[$x] == "6") $ca = "oXXo".$ca;
      elseif ($cab[$x] == "7") $ca = "XXXo".$ca;
      elseif ($cab[$x] == "8") $ca = "oooX".$ca;
      elseif ($cab[$x] == "9") $ca = "XooX".$ca;
      elseif ($cab[$x] == "A") $ca = "oXoX".$ca;
      elseif ($cab[$x] == "B") $ca = "XXoX".$ca;
      elseif ($cab[$x] == "C") $ca = "ooXX".$ca;
      elseif ($cab[$x] == "D") $ca = "XoXX".$ca;
      elseif ($cab[$x] == "E") $ca = "oXXX".$ca;
      elseif ($cab[$x] == "F") $ca = "XXXX".$ca;
    }
    return $ca;
  }
  
  function choose_block_new() {
    GLOBAL $us, $ts, $t_id, $level_cust, $debug, $ga_cond, $bhist_max, $min_tg_hist;
    // Choose composer
    $cond = "c_rating <= '$us[u_level]' AND t_count != 0";
    if ($us[u_level] == $level_cust) {
      $cond = get_ca_cond();
    }
    if ($us[u_level] == $level_cust+1) {
      $cross = count(count_caga_cross());
      if ($cross<2) die ("<font color=red><b>$cross of selected composers have works with selected instruments and popularity. You have to go to Preferences and select more composers or more instruments or lower popularity before you can start to play.</font></b><br>");
      $cond = get_caga_cond();
    }
    // Get tg history
    if ($us[u_level] == $level_cust) {
      $q = "SELECT * FROM cc_tghist WHERE u_id='$us[u_id]' AND u_level='$us[u_level]' AND u_cab=x'$us[cab]'";
      $r2 = mysql_query2($q);
      echo mysql_report_error();
      //$wtgh = mysql_fetch_assoc($r2);
      $tg_hist = $wtgh[tg_hist];
      $tgha = explode(",", $tg_hist);
      if ($wtgh[tg_class]>0) foreach ($tgha as $key => $val) if ($val == $wtgh[tg_class]) $tg_count++;
      if ($debug>0) if ($wtgh[tg_class]>0) echo "Detected tg_count $tg_count<br>";
    }
    $q = "SELECT count(*) as cnt FROM cc_composers WHERE $cond";
    //echo $q."<br>";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $c_count = $w[cnt];
    for ($i=0; $i<5; $i++) {
      $r_n = mt_rand(0, $c_count-1);
      $q = "SELECT * FROM cc_composers WHERE $cond LIMIT $r_n,1";
      $r2 = mysql_query2($q);
      //echo $q."<br>";
      echo mysql_report_error();
      $w2 = mysql_fetch_assoc($r2);
      $c_id = $w2[c_id];
      // Check tg_class
      if ($wtgh[tg_class]>0) if (rand(0, 100)>3+$tg_count) {
        $q_tgc = "SELECT t_len FROM cc_ctg WHERE c_id='$c_id' AND tg_class='$wtgh[tg_class]'";
        $r_tgc = mysql_query2($q_tgc);
        echo mysql_report_error();
        $w_tgc = mysql_fetch_assoc($r_tgc);
        if ($w_tgc[t_len]==0) {
          if (rand(0, 100)>20) {
            if ($debug>0) echo "Rechoosing composer for tg_class...<br>";
            continue;
          } else {
            $wtgh[tg_class] = 0;
            if ($debug>0) echo "Cleared tg_class with wrong composer<br>";
          }
        }
      } else {
        $wtgh[tg_class] = 0;
        if ($debug>0) echo "Cleared tg_class with random composer<br>";
      }
      // Check if need rechoose
      $freq = round(40-$w2[c_len]*4/360);
      $r_n2 = mt_rand(1, 100);
      if ($r_n2 < $freq) {
        //if ($debug>0) echo "Rechoosing $freq $w2[c_id] $w2[c_name4] $w2[c_len] ... ";
      } else break;
    }
    //if ($debug>0) stop_time("cs");
    // Get blocks history
    $q = "SELECT * FROM cc_bhist WHERE u_id='$us[u_id]' AND c_id='$c_id'";
    $r2 = mysql_query2($q);
    echo mysql_report_error();
    $wh = mysql_fetch_assoc($r2);
    $b_hist = $wh[b_hist];
    $ha = explode(",", $b_hist);
    $allok=0;
    $c_bcount = $w2[c_bcount];
    for ($i=0; $i<5; $i++) {
      if ($us[u_oneblock]) {
        // Choose block
        $cond2 = "cc_qblocks.c_id = '$c_id'";
        if ($us[u_level] == $level_cust+1) {
          $cond2 .= " AND $ga_cond";
          if ($us[u_trating]>0) $cond2 .= " AND t_rating>0 AND t_rating<=$us[u_trating] ";
          $join = "LEFT JOIN cc_ctracks USING (t_id)";
        } else {
          // Check if can apply tg history
          if (($wtgh[tg_class]>0) && (rand(0, 100)>3+$tg_count)) {
            if ($w_tgc[t_len]>0) {
              $q_tg = "SELECT * FROM cc_tgroups WHERE tg_class=$wtgh[tg_class]";
              $r_tg = mysql_query2($q_tg);
              echo mysql_report_error();
              $n_tg = mysql_numrows($r_tg);
              $first = 1;
              $cond3 = "";
              for ($x=0; $x<$n_tg; $x++) {
                $w_tg = mysql_fetch_array($r_tg);
                if ($first == 0) $cond3 .= ",";
                $cond3 .= $w_tg[tg_id];
                $first = 0;
              }
              if ($cond3 != "") {
                $cond2 .= " AND (tg_id IN ($cond3)) ";
                $join = "LEFT JOIN cc_ctracks USING (t_id)";
              }
              if ($debug>0) echo "Using previous tg<br>";
            }
          }
          // Check if can apply block history
          if (($wh[b_hist] != "") && ($c_bcount-$bhist_max>5)) $cond2 .= " AND (b_id NOT IN ($b_hist)) ";
          //echo "<font color=#cccccc>DD</font> ";
        }
        // Get blocks count
        $q = "SELECT count(*) as cnt FROM cc_qblocks $join WHERE $cond2";
        $r = mysql_query2($q);
        echo mysql_report_error();
        $w = mysql_fetch_assoc($r);
        $b_count = $w[cnt];
        $r_n = mt_rand(0, $b_count-1);
        // Select block
        $q = "SELECT * FROM cc_qblocks $join WHERE $cond2 LIMIT $r_n,1";
        $r2 = mysql_query2($q);
        echo mysql_report_error();
        $w2 = mysql_fetch_assoc($r2);
        $t_id = $w2[t_id];
        $b_id = $w2[b_lid];
        write_log("log/bhist.log", date("Y-m-d H:i:s")." u$us[u_id] t$t_id b$w2[b_id] bl$w2[b_lid] $q");
        //if ($debug>0) stop_time("bb");
        // Get track
        $q = "SELECT t_bad, tg_id, tg_class FROM cc_ctracks 
          LEFT JOIN cc_tgroups USING (tg_id)
          WHERE t_id='$t_id'";
        $r2 = mysql_query2($q);
        echo mysql_report_error();
        $w3 = mysql_fetch_assoc($r2);
      } else {
        // Choose track
        $cond2 = "c_id = '$c_id'";
        $r = mysql_query2("SELECT count(*) as cnt FROM cc_ctracks WHERE $cond2");
        echo mysql_report_error();
        $w = mysql_fetch_assoc($r);
        $t_count = $w[cnt];
        $r_n = mt_rand(0, $t_count-1);
        $r2 = mysql_query2("SELECT * FROM cc_ctracks WHERE $cond2 LIMIT $r_n,1");
        echo mysql_report_error();
        $w3 = mysql_fetch_assoc($r2);
        $t_id = $w3[t_id];
        $b_id = 1;
      }
      //if ($debug>0) stop_time("bb2");
      $link = block_url($t_id, $b_id, 0);
      if ($w3[t_bad]>0) continue;
      if (($i < 2) && ($t_id == $us[t_id2])) {
        echo "Chose the same track. Trying to rechoose...<br>";
      } elseif ($b_id == 0) {
        // Selected b_id=0
        write_log("log/cquiz.log", date("Y-m-d H:i:s")." u$us[u_id] b$b_id t$t_id c$c_id bc$b_count cc$c_count");
      } elseif (!file_exists($link)) {
        // Selected block without real file
        write_log("log/cquiz.log", date("Y-m-d H:i:s")." u$us[u_id] b$b_id t$t_id c$c_id bc$b_count cc$c_count");
      } elseif (filesize($link) < 400000) {
        // Selected too short block
        write_log("log/cquiz.log", date("Y-m-d H:i:s")." u$us[u_id] b$b_id t$t_id c$c_id bc$b_count cc$c_count");
      } else {
        $allok=1;
        break;
      }
    }
    $ts = $w3;
    //if ($debug>0) stop_time("bb3");
    // Record block history
    if (($us[u_oneblock]) && ($allok>0)) {
      $b_hist = $wh[b_hist];
      if ($b_hist != "") {
        $ha = explode(",", $b_hist);
        if (count($ha)>=20) unset($ha[0]);
        $b_hist = implode(",", $ha);
        $b_hist .= ",";
      }
      $b_hist .= $w2[b_id];
      mysql_query2("INSERT INTO cc_bhist VALUES ('$us[u_id]', '$c_id', '$b_hist')
        ON DUPLICATE KEY UPDATE 
        b_hist='$b_hist'");
      //echo "Changed b_hist from '$wh[b_hist]' to '$b_hist'<br>";
      echo mysql_report_error();
    }
    // Check if can record tg_id
    if ($us[u_level] != $level_cust+1) {
      $wtgh[tg_class] = 0;
      // Get tg_class
      //echo "Got tg_id $ts[tg_id]<br>";
      //echo "Got tg_class $ts[tg_class]<br>";
      // Get composers
      $q = "SELECT * FROM cc_ctg 
        LEFT JOIN cc_composers USING (c_id)
        WHERE tg_class='$ts[tg_class]' AND $cond ORDER BY t_len DESC";
      $r = mysql_query2($q);
      echo mysql_report_error();
      $n = mysql_numrows($r);
      //echo "Found $n composers<br>";
      $w = mysql_fetch_array($r);
      $t_len = 0;
      for ($i=1; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        $t_len += $w[t_len];
        //echo "Got t_len $w[t_len] for c_id $w[c_id]<br>";
      }
      //echo "Total t_len $t_len<br>";
      if ($t_len > $min_tg_hist) {
        $wtgh[tg_class] = $ts[tg_class];
        if ($debug>0) echo "Recording current tg_class.<br>";
      }
    }
    // Record tg history
    if ($us[u_level] != $level_cust+1) {
      $tg_hist = $wtgh[tg_hist];
      //if ($wtgh[tg_class]>0) {
      if ($tg_hist != "") {
        $tgha = explode(",", $tg_hist);
        if (count($tgha)>=80) unset($tgha[0]);
        $tg_hist = implode(",", $tgha);
        $tg_hist .= ",";
      }
      $tg_hist .= $ts[tg_class];
      //}
      mysql_query2("INSERT INTO cc_tghist VALUES ('$us[u_id]', '$us[u_level]', x'$us[cab]', '$tg_hist', '$wtgh[tg_class]')
        ON DUPLICATE KEY UPDATE 
        tg_hist='$tg_hist', tg_class='$wtgh[tg_class]'");
      //echo "Changed tg_hist from '$wtgh[tg_hist]' to '$tg_hist'<br>";
      echo mysql_report_error();
    }
    return $b_id;
  }
  
  function get_ca_cond($ca="") {
    GLOBAL $ca_cond, $us;
    //if ($ca_cond != "") return $ca_cond;
    if ($ca == "") $ca = &$us[u_ca];
    $c = strlen($ca);
    $ca_cond = "ca_id in (";
    $first = 1;
    for ($x=0; $x<$c; $x++) if ($ca[$x] == "X") {
      if ($first) {
        $first = 0;
      } else {
        $ca_cond .= ",";
      }
      $ca_cond .= "$x";
    }
    $ca_cond .= ")";
    return $ca_cond;
  }
  
  function get_caga_cond() {
    GLOBAL $caga_cond;
    if ($caga_cond != "") return $caga_cond;
    $cross = count_caga_cross();
    //print_r($cross);
    $caga_cond = "ca_id in (";
    $first = 1;
    for ($x=0; $x<count($cross); $x++) {
      if ($first) {
        $first = 0;
      } else {
        $caga_cond .= ",";
      }
      $caga_cond .= $cross[$x][ca_id];
    }
    $caga_cond .= ")";
    return $caga_cond;
  }
  
  function count_caga_cross() {
    // Returns array of composers (of selected composers in ca) who have works in selected ga
    GLOBAL $us, $ts, $t_id, $level_cust, $debug, $ga_cond;
    // Create ca condition
    $c = strlen($us[u_ca]);
    $ca_cond = "ca_id in (";
    $first = 1;
    for ($x=0; $x<$c; $x++) if ($us[u_ca][$x] == "X") {
      if ($first) {
        $first = 0;
      } else {
        $ca_cond .= ",";
      }
      $ca_cond .= "$x";
    }
    $ca_cond .= ")";
    if ($first>0) return 0;
    // Create ga condition
    $c = strlen($us[u_ga]);
    $ga_cond = "tg_id in (";
    $first = 1;
    for ($x=0; $x<$c; $x++) if ($us[u_ga][$x] == "X") {
      if ($first) {
        $first = 0;
      } else {
        $ga_cond .= ",";
      }
      $ga_cond .= "$x";
    }
    $ga_cond .= ")";
    if ($first>0) return array();
    if ($us[u_trating]>0) {
      $tr_cond = " AND t_rating<=$us[u_trating] AND t_rating>0 ";
    }
    // Check
    $q = "SELECT 
      distinct cc_ctracks.c_id,ca_id
      FROM cc_ctracks
      LEFT JOIN cc_tgroups USING (tg_id)
      LEFT JOIN cc_composers ON (cc_ctracks.c_id=cc_composers.c_id)
      WHERE t_bad=0 AND $ca_cond AND $ga_cond $tr_cond
    ";
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $wa[$i] = mysql_fetch_assoc($r);
    }
    return $wa;
  }
  
  function get_tcount() {
    GLOBAL $tcount;
    if ($tcount == 0) {
      $r = mysql_query2("SELECT COUNT(*) as cnt FROM cc_ctracks");
      echo mysql_report_error();
      $w = mysql_fetch_array($r);
      $tcount = $w[cnt];
    }
    return $tcount;
  }
  
  function show_styles($su_id=0) {
    // su_id shows that following user if >0
    GLOBAL $us, $ts;
    echo "<b>Guess style:</b><br>";
    $styles_num = 5;
    $q = "SELECT DISTINCT(t_comment), COUNT(*) 
      FROM cc_ctracks 
      WHERE t_comment<>'' AND t_rating<4 AND t_rating>0 
      GROUP BY t_comment
      ORDER BY RAND() LIMIT $styles_num
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $found = 0;
    for ($i=1; $i<$n+1; $i++) {
      $w = mysql_fetch_array($r);
      $sa[] = $w[t_comment];
      if ($w[t_comment] == $ts[t_comment]) $found++;
    }
    if ($found == 0) {
      $inserted = array($ts[t_comment]);
      array_splice($sa, rand(0, $styles_num-1), 1, $inserted);
    }
    foreach ($sa as $key => $val) {
      echo $val."<br>";
    }
  }
  
  function show_composers($su_id=0) {
    // su_id shows that following user if >0
    GLOBAL $us, $ua, $ts, $level_cust, $comp_hint, $uname, $debug, $ca_selected, $url_cpic, $url_main;
    // Create randoms
    $order = "cc_composers.p_id,c_start,c_name";
    $rnd_end = "ORDER BY RAND() LIMIT $comp_hint";
    //if ($debug>0) stop_time();
    if ($us[u_level] < $level_cust) {
      $cond = "AND c_rating <= $us[u_level]";
      $cond_ia .= "c_rating <= $us[u_level]";
    }
    // Make randoms
    if ($us[u_level] == $level_cust+1) {
      $cond_ia = get_caga_cond();
      $cond = "AND $cond_ia";
    } else if ($us[u_level] == $level_cust) {
      $c = strlen($us[u_ca]);
      $cond_ia = get_ca_cond();
      $cond = "AND $cond_ia";
    }
    if ($us[u_allcomp] == 0) {
      // Check if user has already run random selection for this question
      if ($us[u_ca2] == "") {
        $q = "SELECT ca_id FROM cc_composers WHERE ca_id != $ts[ca_id] AND c_folder != '' $cond $rnd_end";
        $r = mysql_query2($q);
        echo mysql_report_error();
        $n = mysql_numrows($r);
        $us[u_ca2] = new_ca();
        $us[u_ca2][$ts[ca_id]] = "X";
        $hn = 0;
        for ($i=1; $i<$n+1; $i++) {
          $w = mysql_fetch_array($r);
          $us[u_ca2][$w[ca_id]] = "X";
        }
        save_user();
      }
      // Build condition in array based on u_ca2
      $c = strlen($us[u_ca2]);
      $cond_ia = "ca_id in (";
      $first = 1;
      for ($x=0; $x<$c; $x++) if ($us[u_ca2][$x] == "X") {
        if ($first) {
          $first = 0;
        } else {
          $cond_ia .= ",";
        }
        $cond_ia .= "$x";
        $ca_selected[] = $x;
      }
      $cond_ia .= ")";
    }
    //if ($debug>0) stop_time();
    // Build tg_count
    $q = "SELECT tg_list FROM cc_composers WHERE c_folder != '' AND $cond_ia ORDER BY $order";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $tga = explode(",", $w[tg_list]);
      foreach ($tga as $key => $val) {
        $tg_count[$val]++;
      }
    }
    // Main task
    $q = "SELECT * FROM cc_composers WHERE c_folder != '' AND $cond_ia ORDER BY $order";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $p_name = "";
    //$us[u_select_style] = 2;
    if ($us[u_select_style] < 2) echo "<table cellpadding=2><tr><td valign=top>";
    if ($us[u_select_style] == 1) echo "<table cellspacing=5 cellpadding=8>";
    if ($us[u_select_style] == 0) echo "<select id=sel1 name=c_id size=20 style='width: 400px'>";
    $cnum=0;
    $first = 1;
    $width1 = 100;
    $width2 = 170;
    $cpic_num=8;
    if ($us[u_select_style] == 1) $cpic_num=20;
    $fsize = "size=+2";
    if ($n<10) $fsize="size=+3";
    //elseif ($n<50) $fsize="size=+2";
    //elseif ($n<100) $fsize="size=+1";
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      if ($p_name != $w[p_name]) {
        if ($us[u_select_style] == 0) echo "<option class=a disabled>--- $w[p_name]</option>";
        if ($us[u_select_style] == 1) echo "<tr><td><font color=green>$w[p_name]</font>";
        if ($us[u_select_style] == 2) {
          if ($first == 0) {
            if ($cell == 1) echo "<td width=$width1><td width=$width2>";
            echo "</table>";
          }
          echo "<p><font color=green>$w[p_name]</font> <br><table border=0 cellpadding=2>";
        }
        $cell=0;
        $p_name = $w[p_name];
      }
      if ($su_id == 0) $link = "href=quiz.php?c_id=$w[c_id]&nc=".microtime(TRUE).">";
      else $link = "><font color=black>";
      $cpic = "<a target=_blank href=$url_main/cquiz/am.php?u_id=$us[u_id]&c_id=$w[c_id]><img align=left title='$w[c_name]' border=0 width=$width1 src=$url_cpic/$w[c_id].jpg></font></a>";
      if ($us[u_select_style] == 0) echo "<option value=$w[c_id]>$w[c_name] [$w[c_years]] $w[c_country]</option>";
      if ($us[u_select_style] == 1) {
        echo "<tr><td bgcolor=#eeeeee valign=top>";
        echo "<a title='$w[t_count] tracks, ".round($w[c_len]/60)." min";
        if (strlen($w[c_group])>1) echo "\n$w[c_group]";
        echo "\n$w[c_desc]' $link";
        echo "<div style='height:100%;width:100%'>";
        //if ($uname == "rualark") if ($cnum<7) echo "<img align=bottom src='images/gp_$cnum.png' height=20> ";
        echo "<input "; // <label>
        echo "id=sel".($cnum+1)." ";
        echo "style='vertical-align: center; width: 18px; height: 18px;' tabindex=1 type=radio name=c_id value=$w[c_id]>";
        echo "<font $fsize>$w[c_name]</font> [$w[c_years]] $w[c_country]</font> ";
        if ($i>5) echo " <a target=_blank href=$url_main/cquiz/am.php?c_id=$w[c_id]><img height=16 src=images/help.png></a> ";
        show_tga($w[tg_list], 100, $tg_count);
        if ($ua[u_name] != "Morpheus") {
          if ($n<4) $dlen = 600;
          elseif ($n<6) $dlen = 300;
          else $dlen = 100;
          $desc = $w[c_desc];
          if (strlen($w[c_desc])>$dlen) $desc = substr($w[c_desc], 0, $dlen)."...";
          if ($n<12) echo "<br><font color=black>$desc";
        }
        echo "</div></a>";
      }
      if ($us[u_select_style] == 2) {
        $cell++;
        if ($cell % 2 == 1) echo "<tr>";
        echo "<td valign=middle><center>";
        echo "$cpic";
        echo "<td valign=middle width=$width2><center>";
        echo "<a title='$w[t_count] tracks, ".round($w[c_len]/60)." min\n";
        if (strlen($w[c_group])>1) echo "\n$w[c_group]";
        echo "' id=sel".($cnum+1)." ";
        echo "$link$w[c_name]<br>[$w[c_years]]<br>$w[c_country]</font></a>";
      }
      $first = 0;
      if ($cnum < $cpic_num) $cpics .= "$cpic<br>";
      $cnum++;
    }
    if ($cnum==0) {
      if ($us[u_select_style] == 0) echo "<option value=0>No composers selected!</option>";
      else echo "No composers selected!";
    }
    if ($us[u_select_style] == 0) echo "</select>";
    if ($us[u_select_style] == 2) echo "</table>";
    else {
      if ($su_id == 0) echo "<input type=submit style='position: absolute; left: -9999px; width: 1px; height: 1px;'>";
      echo "</table><td valign=top>$cpics</table>";
    }
  }

  function show_user_klogs($su_id=0, $cab="") {
    GLOBAL $us, $level_name, $last_games, $last_games2, $filter_t_id, $tracks_start, $is, $isles_max_comps, $level_cust;
    $ua = $us;
    $filter = $_GET[filter];
    if ($su_id>0) {
      $r = mysql_query2("SELECT * FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    echo "<p align=left>";
    echo "<form action='".$_SERVER['PHP_SELF']."' method=get>";
    if ($cab != "") {
      load_isle($cab);
      echo "<b>News of the <a href=rating.php?level=$level_cust&cab=$cab>island</a> ($is[i_cst2]):";
      $cond .= " AND cc_klog.k_cab=x'$cab' ";
    } else {
      echo "<b>Islands News:";
    }
    echo " <input type=hidden name=u_id value='$u_id'>";
    echo "<input type=hidden name=cab value='$cab'>";
    echo "<select name=filter onChange='this.form.submit();'>";
    echo "<option value=0";
    if ($filter == 0) echo " selected";
    echo ">King news</option>";
    echo "<option value=1";
    $cond2 = "cc_klog.u_id!=0";
    if ($filter == 1) {
      echo " selected";
      $cond .= " AND k_reason=3 AND i_cst2!='' ";
      $cond2 = "1=1";
    }
    echo ">New islands</option>";
    echo "<option value=2";
    if ($filter == 2) echo " selected";
    echo ">All the detailed news</option>";
    echo "</select>";
    echo " <input type=submit>";
    echo "</form>";
    echo "</b><ul>";
    $limit = "LIMIT $last_games2";
    $q = "SELECT *,
      hex(cc_klog.k_cab) as cab,
      cc_klog.u_id as uid,
      cc_klog.u_id2 as uid2,
      cc_klog.nu_id as nuid,
      cc_klog.r_total as rtotal,
      cc_klog.r_r1 as rr1,
      u1.u_name as u_n,
      u2.u_name as u_n2,
      u3.u_name as ou_n,
      u4.u_name as ou_n2,
      u5.u_name as cu_n,
      u6.u_name as nu_n
      FROM cc_klog 
      LEFT JOIN cc_users as u1 ON (u1.u_id=cc_klog.u_id) 
      LEFT JOIN cc_users as u2 ON (u2.u_id=cc_klog.u_id2) 
      LEFT JOIN cc_users as u3 ON (u3.u_id=cc_klog.ou_id) 
      LEFT JOIN cc_users as u4 ON (u4.u_id=cc_klog.ou_id2) 
      LEFT JOIN cc_users as u5 ON (u5.u_id=cc_klog.cu_id) 
      LEFT JOIN cc_users as u6 ON (u6.u_id=cc_klog.nu_id) 
      LEFT JOIN cc_isles ON (cc_isles.i_cab=cc_klog.k_cab) 
      WHERE $cond2 $cond
      ORDER BY k_time DESC,l_id DESC $limit";
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      // Check filter
      $skip = 0;
      switch ($filter) {
        case 0:
          if ($w[k_reason] == 3) $skip = 1;
          if ($w[k_reason] == 4) $skip = 1;
          if ($w[k_reason] == 5) $skip = 1;
          if ($w[k_reason] == 100) $skip = 1;
          if ($w[i_cst2] == "") $skip = 1;
          break;
        case 1:
          $skip = 1;
          if ($w[k_reason] == 3) $skip = 0;
          if ($w[i_cst2] == "") $skip = 1;
          break;
      }
      if ($skip>0) continue;
      echo "<li> <a href=logs.php?cab=$w[cab]><font color=gray>[$w[k_time]]</font></a> ";
      $i_cst2 = $w[i_cst2];
      if ($w[i_cst2] == "") $i_cst2="*deleted*";
      if ($cab != "") $i_cst2 = "island ";
      if (($w[i_cnum] > 5) && ($w[i_name] != "")) $i_cst2 = "[$w[i_name], $w[i_cnum] composers]";
      $isl = "<a href=rating.php?level=$level_cust&cab=$w[cab]>$i_cst2</a>";
      $crown = show_crown($w[rtotal], $w[uid2], $w[k_unum]);
      $font1="";
      $font2="";
      $font3="";
      if ($w[uid] == $us[u_id]) $font1 = "<font color=green><b>";
      if ($w[ou_id] == $us[u_id]) $font2 = "<font color=red><b>";
      if (($w[uid] == $us[u_id]) || ($w[uid2] == $us[u_id])) $font3 = "<font color=red><b>";
      $u1 = "<a title='Ans: $w[rtotal]\nRating: $w[rr1]' href=stats.php?su_id=$w[uid]>$w[u_n]</a>";
      $ou1 = "<a title='Ans: $w[or_total]\nRating: $w[or_r1]' href=stats.php?su_id=$w[ou_id]>$w[ou_n]</a>";
      switch ($w[k_reason]) {
        case 1: // Changed id
          echo "$u1$font1 becomes king</font></b> $crown of $isl";
          if ($w[ou_id] != 0) echo "$font2 instead of</font></b> $ou1";
          if ($w[uid2] != 0) echo " with conflict";
          break;
        case 2: // Changed id2
          if ($w[uid2] == 0) {
            echo "$u1$font1 $crown has no conflicts on</font></b> $isl";
          } else {
            echo "<a href=stats.php?su_id=$w[uid2]>$w[u_n2]</a>$font3 conflicts with king</font></b> $crown ";
            echo "$u1 of $isl";
          }
          break;
        case 3: // New
          echo "<a href=stats.php?su_id=$w[nuid]>$w[nu_n]</a> created $isl";
          break;
        case 4:
        case 5:
        case 6: // Crowns
          echo "$u1$font1 king gets award</font></b> $crown on $isl";
          break;
        case 100: // Clear
          echo "<a href=stats.php?su_id=$w[cuid]>$w[cu_n]</a> cleared his stats on $isl";
      }
      //print_r($w);
    }
  }

  function show_tga($tg_list, $max_count=1000, $tg_count) {
    GLOBAL $tga;
    if (!is_array($tga)) load_tga();
    $tga2 = explode(',', $tg_list);
    $tgc = count($tga2);
    if ($tgc<$max_count) {
      for ($y=0; $y<$tgc; $y++) {
        if ($tga2[$y]>0) {
          echo "<img height=12 ";
          if ($tg_count[$tga2[$y]]>1) echo " style='opacity: .4' "; 
          elseif ($tg_count[$tga2[$y]]==1)  echo " border=1 ";
          echo "title=\"".$tga[$tga2[$y]][tg_name]."\" src=images/tg$tga2[$y].png> ";
        }
      }
    }
  }
  
  function load_tga() {
    GLOBAL $tga;
    if (count($tga)>1) return;
    $q = "SELECT * FROM cc_tgroups";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $tga[$w[tg_id]] = $w;
    }
    //print_r($tga);
  }
  
  function show_user_logs($su_id=0, $cab="", $limit=0) {
    GLOBAL $tga, $us, $level_name, $last_games4, $filter_t_id, $tracks_start, $is, $isles_max_comps, $level_cust, $i_level_color, 
      $i_since_hours, $slope_min_ans, $u_since_hours;
    $ua = $us;
    load_tga();
    if ($su_id>0) {
      $r = mysql_query2("SELECT *,cc_users.u_id as u_id FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    $where = "Last active levels and islands";
    if ($cab != "") {
      load_isle($cab);
      $where = "Last games on <a href=rating.php?level=5&cab=$cab>$is[i_cst2]</a>";
    }

    if ($su_id == -1) echo "<b>$where:</b><br>";
    else echo "<br>Last games for <b>$ua[u_name]</b>:<br>";
    echo "<center>";
    echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
    echo "<tr>";
    if ($su_id == -1) echo "<th>User</th>";
    echo "<th width=150>Date</th>";
    echo "<th width=580>Level / Island</th>";
    echo "<th width=30>Games</th>";
    echo "<th width=40>Correct</th>";
    echo "</tr>";
    $cond = "AND cc_act.u_id = $ua[u_id]";
    if ($su_id == -1) $cond="";
    if ($cab != "") $cond .= " AND cc_act.u_cab = x'$cab' ";
    $limit = "LIMIT $limit";
    if ($su_id == -1) $limit = "LIMIT $last_games4";
    // Delete this:
    // DAYOFWEEK(a_time2) as dow,
    // AND a_total>2
    $q = "SELECT u_name, i_name, i_cnum, i_cst2, f_count, a_total, a_time2, a_right, cc_act.u_level as u_level, cc_act.u_id as u_id, i_level, a_right_b,
      hex(cc_act.u_cab) as cab,
      hex(cc_act.u_gab) as gab,
      UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(i_since) as i_sp,
      UNIX_TIMESTAMP(a_time2)-UNIX_TIMESTAMP(u_since) as u_sp
      FROM cc_act 
      LEFT JOIN cc_users ON (cc_users.u_id=cc_act.u_id)
      LEFT JOIN cc_isles ON (cc_act.u_cab=cc_isles.i_cab)
      WHERE 1=1 $cond
      ORDER BY a_time2 DESC $limit";
    //echo $q;
    // LEFT JOIN cc_ur ON (cc_act.u_id=cc_ur.u_id AND cc_act.u_cab=cc_ur.r_cab AND cc_act.u_level=cc_ur.r_level)
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $id = 0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $bgcolor="white";
      if ($w[i_level]>0) $bgcolor = $i_level_color[$w[i_level]];
      echo "<tr>";
      if ($su_id == -1) {
        echo "<td bgcolor=white><a href=stats.php?su_id=$w[u_id]>";
        if ($w[u_id] == $us[u_id]) echo "<font color=brown>";
        echo "$w[u_name]</a>";
        if ($w[u_sp] < (3600*$u_since_hours)) echo " <img align=right hspace=3 title='Joined less than $u_since_hours hours before playing this game.' height=10 src=images/new.gif>";
      }
      echo "<td bgcolor=white><center>";
      //if ($w[dow] == 1) echo "<font color=red><b>";
      echo "$w[a_time2]";
      $isle_link = "";
      $myname = "<font color=green>".$level_name[$w[u_level]]."</font>";
      if ($w[cab] != "") {
        if ($w[i_cst2] != "") {
          $myname = $w[i_cst2];
          $isle_link = "&cab=$w[cab]";
          if (($w[i_cnum] > 5) && ($w[i_name] != "")) $myname = "[$w[i_name]]";
        } else {
          $w[u_ca] = unpack_ca($w[cab]);
          $cnt = substr_count($w[u_ca], "X");
          $myname = "<font color=green>".$level_name[$w[u_level]]."</font></a> ($cnt composers) ";
        }
      }
      echo "<td bgcolor=$bgcolor>";
      echo "<a href='prefs.php?ilevel=$w[u_level]&cab=$w[cab]&gab=$w[gab]'><img align=top border=0 title='Click to move to this level/island' src=images/play.gif></a> ";
      echo " <a href=rating.php?level=".($w[u_level]>$level_cust?$level_cust:$w[u_level])."$isle_link>";
      echo "$myname</a> ";
      if ($w[gab] != "") {
        $ga = unpack_ca($w[gab]);
        $found=0;
        for ($x=1; $x<strlen($ga); $x++) {
          if ($ga[$x] == "X") {
            echo "<img title='".($tga[$x][tg_name])."' height=15 src=images/tg$x.png> ";
            $found++;
          }
          if ($found>5) {
            echo " ... ";
            break;
          }
        }
      }
      if ($w[f_count]>0) echo " <img align=right hspace=3 title='Has comments' height=16 border=0 align=top src=images/edit.png> ";
      if (($w[u_level]==$level_cust) && ($w[i_sp] < $i_since_hours*60*60)) echo " <img title='Created less than $i_since_hours hours ago.' height=10 src=images/new.gif>";
      echo "<td bgcolor=white><center><a href='plogs.php?level=$w[u_level]&cab=$w[cab]&u_id=$w[u_id]&f_time=$w[a_time2]&a_count=$w[a_total]'>";
      echo "$w[a_total]</a>";
      echo "<td bgcolor=white><a href=graph.php?level=$w[u_level]&cab=$w[cab]&u_id=$w[u_id]&gab=$w[gab]>";
      echo round($w[a_right]/$w[a_total]*100)." %</a> ";
      if ($w[a_total]>$slope_min_ans) echo show_slope_ok($w[a_right_b]);
    }
    echo "</table></table>";
  }

  function show_user_logs_old($su_id=0, $cab="") {
    GLOBAL $tga, $us, $level_name, $last_games3, $filter_t_id, $tracks_start, $is, $isles_max_comps, $level_cust;
    $ua = $us;
    load_tga();
    if ($su_id>0) {
      $r = mysql_query2("SELECT *,cc_users.u_id as u_id FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    $where = "where";
    if ($cab != "") {
      load_isle($cab);
      $where = "on <a href=rating.php?level=5&cab=$cab>$is[i_cst2]</a>";
    }

    echo "<b>Who played $where lately:</b><br>";
    echo "<center><table border=1 cellpadding=3>";
    echo "<tr>";
    echo "<th>User</th>";
    echo "<th>Date</th>";
    echo "<th width=650>Level / Island</th>";
    echo "<th>Games</th>";
    echo "<th>Correct</th>";
    echo "</tr>";
    $cond = "AND cc_qlog.u_id = $ua[u_id]";
    if ($su_id == -1) $cond="";
    if ($cab != "") $cond .= " AND cc_qlog.u_cab = x'$cab' ";
    $limit = "LIMIT $last_games3";
    if ($su_id == -1) $limit = "LIMIT $last_games3";
    $q = "SELECT u_name, l_time, i_cst2, l_cleared, l_ok, i_name, i_cnum,
      hex(cc_qlog.u_cab) as cab,
      hex(cc_qlog.u_gab) as gab,
      cc_qlog.u_allcomp as allcomp,
      cc_qlog.u_oneblock as oneblock,
      cc_qlog.u_level as level,
      cc_qlog.u_id as u_id,
      cc_qlog.b_id as bid,
      cc_qlog.t_id as t_id
      FROM cc_qlog 
      LEFT JOIN cc_users ON (cc_users.u_id=cc_qlog.u_id)
      LEFT JOIN cc_isles ON (cc_qlog.u_cab=cc_isles.i_cab)
      WHERE 1=1 $cond
      ORDER BY l_time DESC $limit";
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $id = 0;
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      //print_r($w);
      if (($old_level[$w[u_id]] != $w[level]) || ($old_cab[$w[u_id]] !== $w[cab]) || ($old_gab[$w[u_id]] !== $w[gab])) {
        // Add new row to stack
        $st = "";
        $st .= "<tr>";
        if ($su_id == -1) {
          $st .= "<td><a href=stats.php?su_id=$w[u_id]>";
          if ($w[u_id] == $us[u_id]) $st .= "<font color=brown>";
          $st .= "$w[u_name]</td>";
        }
        $st .= "<td><center>$w[l_time]</td>";
        $isle_link = "";
        $myname = "<font color=green>".$level_name[$w[level]]."</font>";
        if ($w[cab] != "") {
          if ($w[i_cst2] != "") {
            //load_isle($w[cab]);
            $myname = $w[i_cst2];
            $isle_link = "&cab=$w[cab]";
            if (($w[i_cnum] > 5) && ($w[i_name] != "")) $myname = "[$w[i_name]]";
          } else {
            $w[u_ca] = unpack_ca($w[cab]);
            $cnt = substr_count($w[u_ca], "X");
            $myname = "<font color=green>".$level_name[$w[level]]."</font></a> ($cnt composers) ";
          }
        }
        $st .= "<td><a href=rating.php?level=$w[level]$isle_link>$myname</a> ";
        if ($w[gab] != "") {
          $ga = unpack_ca($w[gab]);
          for ($x=1; $x<strlen($ga); $x++) {
            if ($ga[$x] == "X") $st .= "<img title='".($tga[$x][tg_name])."' height=15 src=images/tg$x.png> ";
          }
        }
        $st .= " <a href=prefs.php?ilevel=$w[level]&cab=$w[cab]&gab=$w[gab]><img align=top border=0 title='Click to move to this level/island' src=images/play.gif></a> ";
        $st .= "<td><a href='plogs.php?level=$w[level]&cab=$w[cab]&u_id=$w[u_id]&f_time=$w[l_time]&a_count=";
        // Create new row
        $ss_id[$w[u_id]] = $id;
        $ss_st[$ss_id[$w[u_id]]] = $st;
        $ss_count[$ss_id[$w[u_id]]] = 0;
        $ss_cor[$ss_id[$w[u_id]]] = 0;
        // Save level/cab
        $old_level[$w[u_id]] = $w[level];
        $old_cab[$w[u_id]] = $w[cab];
        $old_gab[$w[u_id]] = $w[gab];
        $id ++;
      } else {
        //echo $old_cab[$w[u_id]] . " is same as " . $w[cab] . "<br>";
      }
      // Add count to stack
      $ss_count[$ss_id[$w[u_id]]] ++;
      $ss_cor[$ss_id[$w[u_id]]] += $w[l_ok];
      $ss_cleared[$ss_id[$w[u_id]]] += $w[l_cleared];
    }
    // Show stack
    for ($i=0; $i<$id; $i++) {
      echo $ss_st[$i].$ss_count[$i]."'>".$ss_count[$i]."</a>";
      if ($ss_cleared[$i] > 0) echo " <img title='Cleared $ss_cleared[$i] of answers' src=images/recyclebin.png align=bottom height=18>";
      echo "</td>";
      echo "<td>";
      echo round($ss_cor[$i]/$ss_count[$i]*100)."%</a>";
    }
    echo "</table>";
  }

  function show_user_plogs($su_id=0, $cab="", $level=-1, $f_time="", $a_count=0) {
    GLOBAL $us, $level_name, $last_games, $last_games2, $filter_t_id, $tracks_start, $is, $isles_max_comps, $level_cust;
    $ua = $us;
    if ($su_id>0) {
      $q = "SELECT *,cc_users.u_id as u_id FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'";
      $r = mysql_query2($q);
      //echo $q;
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    echo "<p align=left>";
    if ($su_id == -1) {
      echo "<b>Last games for all users";
    }
    else echo "<b>Last games for user $ua[u_name]";
    if (($cab != "") && ($level != $level_cust+1)) {
      load_isle($cab);
      echo " on the <a title='$is[i_cst2]' href=rating.php?level=$level_cust&cab=$cab>island</a> ($is[i_cst2])";
    }
    if (($cab != "") && ($level == $level_cust+1)) {
      load_isle($cab);
      echo " on the <a title='$is[i_cst2]' href=rating.php?level=$level&cab=$cab>free island</a> ($is[i_cst2])";
    }
    echo ":</b><br>";
    if (($su_id>0) && ($filter_t_id == 0)) {
      echo "<div align=right id='jp_current_track_title' class='jp_current_track_title'>Currently playing problem track: no track</div>";
    }
    echo "<table><td valign=top>";
    echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
    echo "<tr>";
    if ($su_id == -1) echo "<th>User</th>";
    echo "<th>Date</th>";
    echo "<th>Level</th>";
    if ($filter_t_id == 0) echo "<th>Composer</th>";
    else echo "<th>Block<th>Selected composer";
    echo "<th>Correct</th>";
    echo "<th>Period</th>";
    echo "<th>Sec</th>";
    //echo "<th>Guess</th>";
    if ($filter_t_id==0) echo "<th title='Popularity of track'>Popularity</th>";
    echo "<th title='Play only 1-minute interval for each question'>1M</th>";
    echo "<th title='Show all composers'>AC</th>";
    echo "<th>Rating</th>";
    echo "</tr>";
    $cond = "AND cc_qlog.u_id = $ua[u_id]";
    $index = "u_id";
    // If user was not active for a long time, then use u_id index, because his games are far inside the table
    if ($cab != "") {
      $cond .= " AND cc_qlog.u_cab = x'$cab' ";
      $index = "ulcg";
    }
    //if ((strtotime("now")-strtotime("$ua[u_last]"))/60/60/24 > 10) $index="u_id"; 
    if ($su_id == -1) {
      $cond="";
      $index="l_time";
    }
    if ($filter_t_id>0) {
      $cond .= " AND cc_qlog.t_id=$filter_t_id AND cc_qlog.l_time > '$tracks_start' ";
      $index="ut";
    }
    if ($level > -1) $cond .= " AND cc_qlog.u_level = '$level' ";
    $limit = "LIMIT $last_games";
    if ($su_id == -1) $limit = "LIMIT $last_games2";
    $q = "SELECT l_time, u_name, tg_name, i_cst2, cc_ctracks.tg_id, l_ok, l_sec, 
      l_cleared, l_wrong2, l_r1, l_cent, cc_qlog.u_trating, t_rating,
      t_folder, t_name,
      hex(cc_qlog.u_cab) as cab,
      cc_qlog.u_allcomp as allcomp,
      cc_qlog.u_oneblock as oneblock,
      cc_qlog.u_level as level,
      c1.c_name4 as cn1,
      c1.c_id as ci1,
      c2.c_name4 as cn2,
      c2.c_id as ci2,
      cc_qlog.u_id as u_id,
      cc_qlog.b_id as bid,
      cc_qlog.t_id as t_id
      FROM cc_qlog USE INDEX ($index)
      LEFT JOIN cc_composers as c1 ON (c1.c_id=cc_qlog.c_id) 
      LEFT JOIN cc_composers as c2 ON (c2.c_id=cc_qlog.c_id2) 
      LEFT JOIN cc_users ON (cc_users.u_id=cc_qlog.u_id)
      LEFT JOIN cc_isles ON (cc_qlog.u_cab=cc_isles.i_cab)
      LEFT JOIN cc_ctracks ON (cc_ctracks.t_id=cc_qlog.t_id)
      LEFT JOIN cc_tgroups ON (cc_tgroups.tg_id=cc_ctracks.tg_id)
      WHERE 1=1 $cond
      ORDER BY l_time DESC $limit"; // 
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    $a_count2=0; // Counter for highlighted answers
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      if ($w[l_ok] == 0) $wa[] = $w;
      // Detect first log
      $bgcolor="";
      if ($a_count2>0) {
        $a_count2++;
        if ($a_count2>$a_count) $a_count2 = 0;
        else $bgcolor="bgcolor=lightgray";
      }
      if ($f_time != "") {
        if ($f_time == $w[l_time]) {
          $a_count2++;
          $bgcolor="bgcolor=lightgray";
        }
      }
      //print_r($w);
      echo "<tr>";
      if ($su_id == -1) echo "<td bgcolor=white><a href=stats.php?su_id=$w[u_id]>$w[u_name]";
      echo "<td bgcolor=white><center>$w[l_time]";
      $is="";
      $isle_link = "";
      if ($w[cab] != "") {
        //load_isle($w[cab]);
        $isle_link = "&cab=$w[cab]";
      }
      echo "<td bgcolor=white title='$w[i_cst2]'><center><a href=rating.php?level=$w[level]$isle_link>".$level_name[$w[level]]."</td>";
      if ($filter_t_id == 0) {
        echo "<td bgcolor=white><center>";
        if ($w[tg_id]>0) echo "<img align=left hspace=3 title='$w[tg_name]' height=15 src=images/tg$w[tg_id].png> ";
        //echo "<a title='$w[tg_comment]\n$w[tg_tracks] tracks, $w[tg_hours] hours, $w[tg_cnum] composers";
        //echo "' href='tgroups.php?tg_id=$w[tg_id]'>";
        echo "<a href=ptracks.php?t_id=$w[t_id]&b_id=$w[bid]>";
        //echo "<a ";
        //if ($w[ci1] != $w[ci2]) echo "title='Answered $w[cn2] ($w[l_cent] years difference)' ";
        //echo "href=".comp_link($w[ci1]).">";
        echo "$w[cn1]";
      } else {
        echo "<td bgcolor=white><center>$w[bid]";
        echo "<td bgcolor=white><center><a href=ptracks.php?t_id=$w[t_id]&b_id=$w[bid]>";
        //echo "<a href=".comp_link($w[ci2]).">";
        if (!$w[l_ok]) echo "<font color=brown>";
        echo "$w[cn2]";
      }
      /*
      echo " <a href=ptracks.php?t_id=$w[t_id]&b_id=$w[bid]>";
      echo "<img align=right hspace=3 valign=center border=0 title='Click to play the track' src=images/play_g.gif></a>";
      */
      echo "<td bgcolor=white><center>";
      $sum_ok += $w[l_ok];
      $b_total[$w[bid]] ++;
      $b_ok[$w[bid]] += $w[l_ok];
      $max_b = max($w[bid], $max_b);
      if ($w[l_ok]) echo "<img src=images/check.png>";
      else echo "<img src=images/cross.png>";
      echo "<td bgcolor=white><center>";
      if (!$w[l_wrong2]) echo "<img src=images/check.png>";
      else echo "<img src=images/cross.png>";
      echo "<td bgcolor=white><center>$w[l_sec]";
      if ($filter_t_id==0) {
        echo "<td bgcolor=white><center>";
        //if (($w[u_trating]>0) && ($w[level]>$level_cust)) 
        //else echo "-";
        echo "<img height=16 src=images/rating$w[t_rating].png>";
      }
      echo "<td bgcolor=white><center>";
      if ($w[oneblock]) echo "1";
      else echo "<img title='Showing full track in question' height=8 src=images/infinite.png>";
      echo "<td bgcolor=white><center>";
      if ($w[allcomp]) echo "<img title='Selecting from all composers' height=16 src=images/allcomp.png>";
      else echo "<img title='Selecting from limited number of composers' height=16 src=images/onecomp.png>";
      echo "<td bgcolor=white><center>";
      echo round($w[l_r1]);
      if ($w[l_cleared] > 0) echo " <img title='This game was cleared' src=images/recyclebin.png height=18>";
    }
    echo "</table>";
    echo "</table>";
    echo "<td valign=top>";
    if (($su_id>0) && ($filter_t_id == 0)) {
      show_player_i($wa, "false");
    }
    echo "</table>";
    /*
    if (($filter_t_id>0) && ($max_b>0)) {
      // Show block map
      //echo "Average ".round($sum_ok/$n*100)."% correct in this table.";
      echo "<br><b>Block map:</b>";
      echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
      echo "<tr>";
      echo "<th>Block";
      for ($i=1; $i<=$max_b; $i++) {
        echo "<th><center>$i";
      }
      echo "<th>Total";
      echo "<tr>";
      echo "<td bgcolor=white><b>Heard";
      for ($i=1; $i<=$max_b; $i++) {
        $c = $b_ok[$i]/$b_total[$i];
        $bgcolor=make_color(
          255-255*$c, 
          255*$c, 
          0
        );
        if ($b_total[$i]==0) $bgcolor="white";
        echo "<td title='".round($c*100)."%' bgcolor=$bgcolor><center><a href=# onclick='myPlaylist.select(".($i-1)."); $(\"#jquery_jplayer_1\").jPlayer(\"play\"); return false; '><font color=black>".$b_total[$i];
      }
      $c = $sum_ok/$n;
      $bgcolor=make_color(
        255-255*$c, 
        255*$c, 
        0
      );
      echo "<td title='".round($c*100)."%' bgcolor=$bgcolor><center><b>$n";
      echo "</table></table>";
    }
    */
    if ($su_id>-1) echo "<br>$ua[u_name] consumed ".gmdate('H:i:s', round($ua[u_cpu]/1000))." CPU time<br>";
    show_legend();
    echo "<br>Highlighted dates show games that you selected";
  }
  
  function show_user_stat($su_id=0) {
    GLOBAL $us, $level_name, $level_cust, $is, $isles_max_comps, $debug, $i_am_admin;
    $ua = $us;
    if ($su_id>0) {
      $r = mysql_query2("SELECT *,cc_users.u_id as u_id, hex(u_cab) as cab FROM cc_users 
        LEFT JOIN cc_ur ON (cc_ur.u_id=cc_users.u_id AND cc_ur.r_level=cc_users.u_level) 
        WHERE cc_users.u_id='$su_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    echo "<b>Statistics for user ";
    if ($i_am_admin==1) echo "<a href='mailto:$ua[u_email]'>";
    echo "$ua[u_name]</a> (registered since $ua[u_since]):</b><br>";
    $r = mysql_query2("SELECT *,
      sum(r_total) as r_total, 
      sum(r_right) as r_right, 
      sum(r_rightp) as r_rightp, 
      sum(r_avsec*r_total)/sum(r_total) as r_avsec, 
      sum(r_avcent*r_total)/sum(r_total) as r_avcent, 
      sum(r_avcent2*r_total)/sum(r_total) as r_avcent2, 
      sum(r_r1*r_total)/sum(r_total) as r_r1, 
      sum(r_oneblock) as r_oneblock, 
      sum(r_allcomp) as r_allcomp
      FROM cc_ur WHERE u_id='$ua[u_id]' GROUP BY r_level ORDER BY r_level");
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $wa[$i] = mysql_fetch_assoc($r);
      //if ($debug) print_r($wa[$i]);
    }
    if ($ua[cab] != "") {
      $r = mysql_query2("SELECT *, hex(r_cab) as cab
        FROM cc_ur WHERE u_id='$ua[u_id]' AND r_level=$level_cust AND r_cab=x'$ua[cab]'");
      echo mysql_report_error();
      $n2 = mysql_numrows($r);
      $wa[$n] = mysql_fetch_assoc($r);
    }
    echo "<table border=0><tr><td bgcolor=black><table cellpadding=4 border=0 cellspacing=1>";
    echo "<tr>";
    echo "<th>Level";
    for ($i=0; $i<count($wa); $i++) {
      echo "<th>";
      if ($i == $n) {
        load_isle($wa[$i][cab]);
        echo "<a title='$is[i_cst2]' href=rating.php?level=".$wa[$i][r_level]."&cab=".$wa[$i][cab].">";
        if ($wa[$i][r_level] == $ua[u_level]) echo "<font color=brown>";
        echo "Isle";
      } else {
        echo "<a href=graph.php?u_id=$ua[u_id]&level=".$wa[$i][r_level];
        if ($wa[$i][r_level] == $level_cust) echo "&cab=".$ua[cab];
        echo ">";
        if ($wa[$i][r_level] == $ua[u_level]) echo "<font color=brown>";
        echo $level_name[$wa[$i][r_level]];
      }
    }
    $color1 = "#aaaaaa";
    echo "<tr>";
    echo "<th>Total answers";
    for ($i=0; $i<count($wa); $i++) echo "<td bgcolor=white><center>".$wa[$i][r_total];
    echo "<tr>";
    echo "<th>Rating";
    for ($i=0; $i<count($wa); $i++) echo "<td bgcolor=white><center>".round($wa[$i][r_r1]);
    echo "<tr>";
    echo "<th>Correct composer";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) {
        echo "<center>".round($wa[$i][r_right]/($wa[$i][r_total]+0.0000000001)*100, 0)."%";
        if ($wa[$i][r_level]<$level_cust-1) echo " ".show_slope_ok($wa[$i][r_right_b]);
      }
    }
    echo "<tr>";
    echo "<th>Correct period";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) echo "<font color=$color1><center>".round($wa[$i][r_rightp]/($wa[$i][r_total]+0.00000000001)*100, 0)."%";
    }
    echo "<tr>";
    echo "<th>Think time (ATT)";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) echo "<font color=$color1><center>".round($wa[$i][r_avsec], 0);
    }
    echo "<tr>";
    echo "<th>Absolute years error (AAYE)";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) echo "<font color=$color1><center>".round($wa[$i][r_avcent2], 0);
    }
    echo "<tr>";
    echo "<th>1-minute blocks (1M)";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) echo "<font color=$color1><center>".round($wa[$i][r_oneblock]/($wa[$i][r_total]+0.00000000001)*100, 1)."%";
    }
    echo "<tr>";
    echo "<th>All composers (AC)";
    for ($i=0; $i<count($wa); $i++) {
      echo "<td bgcolor=white>";
      if ($wa[$i][r_total]>0) echo "<font color=$color1><center>".round($wa[$i][r_allcomp]/($wa[$i][r_total]+0.00000000001)*100, 1)."%";
    }
    echo "<tr>";
    echo "</table></table><br>";
  }
  
  function show_legend() {
    echo "<p><b>Legend:</b>";
    echo "<br>Correct - percent of answers, where user selected composer correctly";
    echo "<br>Period - percent of answers, where user selected period correctly";
    echo "<br>ATT - average think time in seconds";
    echo "<br>AAYE - average absolute years error (in years). This is calculated by averaging the absolute value of difference between the birth time of correct composer and selected composer. Averaging is done only for wrong answers";
    echo "<br>AC - choosing from all composers";
    echo "<br>1M - choosing from one-minute block";
    echo "<br>CN - number of composers on the island";
    echo "<br>UN - number of users on the island";
    echo "<br>King - a player is elected to be a king on the island when he has the highest rating and has answered correctly enough questions.";
    echo "<br>King R, My R, AVG R - ratings of the king, of you and average rating on the island";
  }
  
  function log_game($b_id, $sec, $c_id2, $ok, $wrong2, $cent) {
    GLOBAL $us, $ts, $k_oneblock, $k_rightp, $k_allcomp, $k_allcompp, $k_secp, $k_cncust,
      $k_secp2, $k_r, $level_cust, $k_cent, $k_cent2, $k_close, $debug, $la, $is;
    // Check if there is no t_id hack
    if ($ts[t_id] == $us[t_id]) {
      // Load island
      $is[i_cnum] = 0;
      // record previous track
      $us[t_id2] = $us[t_id];
      $ncust=0;
      if ($us[u_level] >= $level_cust) $ncust = substr_count($us[u_ca], "X");
      // count real number of composers
      $ncust2 = $ncust;
      if ($us[u_allcomp] == 0) $ncust2 = min($ncust, 6);
      $allcomp = $us[u_allcomp];
      if ($us[u_level] == $level_cust) $allcomp=0;
      // Rating
      $k1 = pow($k_secp2, $k_secp)-1;
      $k2 = pow($k_cent2, $k_cent)-1;
      $r_rd1 = (1+$us[u_oneblock]*$k_oneblock)*
        ((1+$allcomp*($k_allcomp*$us[u_level]))*$ok + 
          (1+$allcomp*($k_allcompp))*(1-$ok-$wrong2)/$k_rightp + 
          (1-$ok) / (pow(abs($cent)+$k_cent2, $k_cent)-$k2)/$k_close)/
        (pow($sec+$k_secp2, $k_secp)-$k1)*$k_r*(1+sqrt($ncust2)*$k_cncust);
      $cab = "";
      if ($us[u_level] >= $level_cust) $cab = $us[cab];
      $gab = "";
      if ($us[u_level] > $level_cust) $gab = $us[gab];
      // get current time
      $r = mysql_query2("SELECT NOW() as nw");
      $w = mysql_fetch_assoc($r);
      // build query
      $q = "INSERT INTO cc_qlog VALUES('','$us[u_id]','$w[nw]','$sec',$us[u_oneblock],$us[u_allcomp],$us[u_level],$us[u_trating],$ts[c_id],$ts[t_id],'$b_id','$ok','$wrong2','$c_id2','$cent','$r_rd1','$ncust2','".get_ip()."',x'$cab',x'$gab',0,0,'".($us[r_total]+1)."','$ncust');";
      write_log("offline.txt", $w[nw]);
      write_log("offline.txt", $us[u_id]);
      write_log("offline.txt", $cab);
      write_log("offline.txt", $q);
      $r = mysql_query2($q);
      $la[l_id] = mysql_insert_id();
      echo mysql_report_error();
      //if ($debug>0) stop_time();
    }
    $us[t_id] = 0;
    $us[u_total3]++;
    //$us[b_id] = 0;
    $us[u_ca2] = "";
    save_user();
    //if ($debug>0) stop_time();
    return round($r_rd1);
  }
  
  function process_log($l_id) {
    GLOBAL $k_oneblock, $k_rightp, $k_allcomp, $k_allcompp, $k_secp, $k_cncust,
      $k_secp2, $k_r, $level_cust, $k_cent, $k_cent2, $k_close, $debug, $la;
    $q = "SELECT *, hex(u_cab) as cab, hex(u_gab) as gab FROM cc_qlog WHERE l_id=$l_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $la = mysql_fetch_assoc($r);
    load_track($la[t_id]);
    // Check if log has been processed or does not exist
    if ($la[l_id] != $l_id) die("This game log $l_id does not exist.");
    if ($la[l_processed] == 1) die("This game $l_id has already been processed.");
    // Set log to processed state. Prevent double processing
    $q = "UPDATE cc_qlog SET l_processed=1 WHERE l_id=$l_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    // Load local variables
    $sec = $la[l_sec];
    $ok = $la[l_ok];
    $cent = $la[l_cent];
    $wrong2 = $la[l_wrong2];
    $r_rd1 = $la[l_r1];
    $cab = $la[cab];
    $gab = $la[gab];
    // Update user ratings
    if ($ok == 0) $update_avcent="
      r_avcent=(r_avcent*(r_total-r_right)+$cent)/(r_total-r_right+1), 
      r_avcent2=(r_avcent2*(r_total-r_right)+ABS($cent))/(r_total-r_right+1), 
    ";
    $q="INSERT INTO cc_ur VALUES($la[u_id], $la[u_level], $ok, 1, ".($wrong2?0:1).", 
      $sec, $cent, ABS($cent), $r_rd1, $la[u_allcomp], $la[u_oneblock], x'$cab', $ok, 0, $r_rd1, 0)
      ON DUPLICATE KEY UPDATE 
      r_avsec=(r_avsec*r_total+$sec)/(r_total+1), 
      $update_avcent
      r_r1=(r_r1*r_total+$r_rd1)/(r_total+1),
      r_total=r_total+1, 
      r_right=r_right+$ok, 
      r_oneblock=r_oneblock+$la[u_oneblock],
      r_allcomp=r_allcomp+$la[u_allcomp],
      r_rightp=r_rightp+".($wrong2?0:1).",
      r_right_xy=r_right_xy+$ok*r_total,
      r_r1_xy=r_r1_xy+$r_rd1*r_total,
      r_right_b=((r_total*r_right_xy)-(r_total*(r_total+1)/2*r_right))/((r_total*r_total*(r_total+1)*(2*r_total+1)/6)-(r_total*(r_total+1)*r_total*(r_total+1)/4))*100*r_total,
      r_r1_b=((r_total*r_r1_xy)-(r_total*(r_total+1)/2*r_r1*r_total))/((r_total*r_total*(r_total+1)*(2*r_total+1)/6)-(r_total*(r_total+1)*r_total*(r_total+1)/4))*100*r_total
    ";
    mysql_query2($q);
    echo mysql_report_error();
    // Get new parameters for act
    $q="SELECT * FROM cc_ur WHERE u_id='$la[u_id]' AND r_level='$la[u_level]' AND r_cab=x'$cab'";
    $r=mysql_query2($q);
    echo mysql_report_error();
    $ura=mysql_fetch_assoc($r);
    // Update cstat
    mysql_query2("INSERT INTO cc_cstat VALUES($la[c_id], $la[u_id], 1, $ok, ".($wrong2?0:1).", $sec, $cent, ABS($cent))
      ON DUPLICATE KEY UPDATE 
      c_sec=c_sec+$sec, c_cent=c_cent+$cent, c_cent2=c_cent2+ABS($cent),
      c_total=c_total+1, c_right=c_right+$ok, c_rightp=c_rightp+".($wrong2?0:1)."
    ");
    echo mysql_report_error();
    // Update timesheet
    $sec2 = $sec>600?600:$sec;
    mysql_query2("INSERT INTO cc_timesheet VALUES($la[u_id], DATE('$la[l_time]'), 1, '$ok', '$sec2')
      ON DUPLICATE KEY UPDATE 
      t_total=t_total+1,
      t_sec=t_sec+$sec,
      t_correct=t_correct+$ok
    ");
    echo mysql_report_error();
    // Update tstat
    mysql_query2("INSERT INTO cc_tstat VALUES($la[u_id], $la[t_id], $la[c_id], 1, ".($ok?0:1).", '$wrong2', $sec, $cent, ABS($cent))
      ON DUPLICATE KEY UPDATE 
      t_avsec=(t_avsec*t_total+$sec)/(t_total+1),
      t_avcent=(t_avcent*t_total+$cent)/(t_total+1),
      t_avcent2=(t_avcent2*t_total+ABS($cent))/(t_total+1),
      t_wrong=t_wrong+".($ok?0:1).",
      t_wrong2=t_wrong2+$wrong2,
      t_total=t_total+1
    ");
    echo mysql_report_error();
    // Update all-user tstat
    mysql_query2("INSERT INTO cc_tstat2 VALUES($la[t_id], $la[c_id], 1, ".($ok?0:1).", '$wrong2', $sec, $cent, ABS($cent))
      ON DUPLICATE KEY UPDATE 
      t_avsec=(t_avsec*t_total+$sec)/(t_total+1),
      t_avcent=(t_avcent*t_total+$cent)/(t_total+1),
      t_avcent2=(t_avcent2*t_total+ABS($cent))/(t_total+1),
      t_wrong=t_wrong+".($ok?0:1).",
      t_wrong2=t_wrong2+$wrong2,
      t_total=t_total+1
    ");
    echo mysql_report_error();
    // Update bstat
    mysql_query2("INSERT INTO cc_bstat VALUES($la[u_id], $la[t_id], $la[b_id], $la[c_id], 1, ".($ok?0:1).", '$wrong2', $sec, $cent, ABS($cent))
      ON DUPLICATE KEY UPDATE 
      t_avsec=(t_avsec*t_total+$sec)/(t_total+1),
      t_avcent=(t_avcent*t_total+$cent)/(t_total+1),
      t_avcent2=(t_avcent2*t_total+ABS($cent))/(t_total+1),
      t_wrong=t_wrong+".($ok?0:1).",
      t_wrong2=t_wrong2+$wrong2,
      t_total=t_total+1
    ");
    echo mysql_report_error();
    // Update all-user bstat
    mysql_query2("INSERT INTO cc_bstat2 VALUES($la[t_id], $la[b_id], $la[c_id], 1, ".($ok?0:1).", '$wrong2', $sec, $cent, ABS($cent))
      ON DUPLICATE KEY UPDATE 
      t_avsec=(t_avsec*t_total+$sec)/(t_total+1),
      t_avcent=(t_avcent*t_total+$cent)/(t_total+1),
      t_avcent2=(t_avcent2*t_total+ABS($cent))/(t_total+1),
      t_wrong=t_wrong+".($ok?0:1).",
      t_wrong2=t_wrong2+$wrong2,
      t_total=t_total+1
    ");
    echo mysql_report_error();
    // Update cc_act
    $r2 = mysql_query2("INSERT INTO cc_act VALUES('$la[l_time]', '$la[l_time]', $la[u_id], $la[u_level], x'$cab', x'$gab', 1, $ok, $sec, 0)
      ON DUPLICATE KEY UPDATE
      a_total=a_total+1, a_right=a_right+$ok, a_sec=a_sec+$sec, a_time2='$la[l_time]', a_right_b='$ura[r_right_b]'
    ");
    echo mysql_report_error();
    // Update isles
    if ($cab != "") {
      update_isles($cab, 1, $l_id);
    }
    // Update ustat
    if ($la[u_level] == $level_cust) {
      $q = "UPDATE cc_users SET u_total=u_total+1 WHERE u_id=$la[u_id]";
      $r = mysql_query2($q);
      echo mysql_report_error();
    }
  }
  
  function start_time() {
    GLOBAL $starttime, $starttime2;
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    if ($starttime2 == 0) $starttime2 = $mtime;
    $starttime = $mtime; 
  }

  function stop_time($st="", $show=1) {
    GLOBAL $starttime, $starttime2, $us, $view_child;
    // Show run time
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    $endtime = $mtime;
    $totaltime = round($endtime - $starttime, 3);
    $totaltime2 = round($endtime - $starttime2, 3);
    $dif = round(($endtime - $starttime)*1000);
    if ($show>0) {
      echo "<p>The script ran ".$totaltime." seconds ";
      if ($totaltime2>$totaltime) echo "($totaltime2 total) ";
      echo "$st. "; 
    }
    // Write to user
    if ($_SERVER['PHP_AUTH_USER'] != "") {
      $q = "UPDATE cc_users SET u_cpu = u_cpu + '$dif' WHERE u_name='{$_SERVER['PHP_AUTH_USER']}'";
      //echo $q;
      mysql_query2($q);
      echo mysql_report_error();
    }
    // Write to views
    $q = "INSERT INTO cc_views VALUES(NOW(), '$us[u_id]', '".get_ip()."', '$_SERVER[HTTP_HOST]', '$_SERVER[SCRIPT_NAME]', '$_SERVER[QUERY_STRING]', '$dif', '$view_child')";
    //echo $q;
    mysql_query2($q);
    echo mysql_report_error();
    // Set all subsequent views to child
    $view_child=1;
    // Restart timer
    start_time();
  }
  
  function count_stats() {
    GLOBAL $current_u_count, $current_l_count, $current_l_last, $current_u_last, $current_i_count,
      $current_cr_count, $current_t_count, $current_t_len, $current_b_count, $current_c_count, $current_forum_count, $current_up_count, $current_down_count;
    GLOBAL $isle_king_min;
    if ($current_u_count>0) return;
    $q = "SELECT count(*) as cnt FROM cc_users";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_u_count = $w[cnt];
    
    $current_t_count = 5116;
    $current_t_len = 427;
    $current_b_count = 28220;
    $current_c_count = 150;

    $q = "SELECT SUM(t_count) as t_count, SUM(c_len)/60/60 as t_len, SUM(if(ca_id<>0,1,0)) as c_count FROM cc_composers";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_t_count = $w[t_count];
    $current_t_len = round($w[t_len]);
    $current_c_count = $w[c_count];

    $q = "SELECT count(*) as cnt FROM cc_qlog";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_l_count = $w[cnt];

    $q = "SELECT MAX(l_time) as mx FROM cc_qlog"; 
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $x = $w[mx];

    $q = "SELECT * FROM cc_qlog LEFT JOIN cc_users USING (u_id) WHERE l_time = '$x'";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_l_last = $w[l_time];
    $current_u_last = $w[u_name];

    $q = "SELECT count(*) as cnt FROM cc_isles";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_i_count = $w[cnt];

    $q = "SELECT count(*) as cnt FROM cc_isles 
      WHERE r_total>$isle_king_min[0] AND r_total<=$isle_king_min[1] AND u_id2=0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_cr_count[0] = $w[cnt];

    $q = "SELECT count(*) as cnt FROM cc_isles 
      WHERE r_total>$isle_king_min[1] AND r_total<=$isle_king_min[2] AND u_id2=0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_cr_count[1] = $w[cnt];

    $q = "SELECT count(*) as cnt FROM cc_isles 
      WHERE r_total>$isle_king_min[2] AND r_total<=$isle_king_min[3] AND u_id2=0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_cr_count[2] = $w[cnt];

    $q = "SELECT count(*) as cnt FROM cc_isles 
      WHERE r_total>$isle_king_min[3] AND u_id2=0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_cr_count[3] = $w[cnt];

    $q = "SELECT count(*) as cnt FROM cc_isles 
      WHERE u_id2>0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_cr_count[4] = $w[cnt];

    $q = "SELECT count(*) as cnt, sum(f_up) as up, sum(f_down) as down FROM cc_forum WHERE f_deleted=0";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $current_forum_count = $w[cnt];
    $current_up_count = $w[up];
    $current_down_count = $w[down];
  }
  
  function show_help() {
    GLOBAL $current_t_count, $current_c_count, $current_t_len, $current_u_count,
      $current_l_count, $current_l_last, $current_u_last, $current_b_count, $current_i_count,
      $current_cr_count, $current_forum_count, $current_up_count, $current_down_count, $isle_king_min;
    GLOBAL $isle_king_min;
    count_stats();
    echo "<table><tr><td width=300 valign=top>";
    echo "<p><b>Total number of tracks</b>: ".number_format($current_t_count, 0, '.', ' ');
    echo "<p><b>Total number of composers</b>: $current_c_count";
    echo "<p><b>Total length of tracks</b>: $current_t_len hours"; // ($current_b_count 1-minute blocks)
    echo "<p><b>Total users</b>: ".number_format($current_u_count, 0, '.', ' ');
    echo "<p><b>Total islands</b>: $current_i_count, <b>kings</b>: ";
    echo (array_sum($current_cr_count));
    echo " ( ";
    echo show_crown($isle_king_min[0]+1);
    echo " $current_cr_count[0], ";
    echo show_crown($isle_king_min[1]+1);
    echo " $current_cr_count[1], ";
    echo show_crown($isle_king_min[2]+1);
    echo " $current_cr_count[2], ";
    echo show_crown($isle_king_min[3]+1);
    echo " $current_cr_count[3], ";
    echo show_crown($isle_king_min[1]+1, 1);
    echo " $current_cr_count[4])<br>";
    echo "<p><b>Total answers by users</b>: ".number_format($current_l_count, 0, '.', ' ')." (last $current_l_last by $current_u_last)";
    echo "<p><b>Total comments</b>: $current_forum_count, votes: ";
    echo "<font color=green><b>$current_up_count</b></font> ";
    echo "<img border=0 height=15 src=images/up.png> ";
    echo "<img valign=bottom border=0 height=15 src=images/down.png> ";
    echo " <font color=red><b>$current_down_count</b></font>";
    echo "<td valign=top>";
    echo "<b>Last comments:</b>";
    show_forum("", 5, 600);
    echo "<a href=forum.php>Show all comments</a>";
    echo "</table>";
    echo "<p align=center><b>Help</b>";
    echo "<p>Watch video on YouTube about CQuiz: in <a target=_blank href='http://www.youtube.com/watch?v=ZVCKmIfRkL0'>English</a> or in <a target=_blank href='http://www.youtube.com/watch?v=54LvBlLe6nw'>Russian</a>.";
    echo "<p>CQuiz is a comprehensive \"guess the composer\" quiz. First thing you need to
      do is <a href=reg.php>register</a>. You can play in one of the 
      common modes (Easy, Normal, Hard, Insane) or choose any composers that you want for the quiz (Isles mode). 
      For example, you can choose only Bach and Handel and try to guess. After each question
      system shows you correct answer and information about the piece, that was played.";
    echo "<p>Easy mode includes 15 greatest composers, Normal mode adds 35 known composers
      and so on. You can change your mode from the Preferences tab.";
    echo "<p>Some composer islands were categorized in difficulty levels, try to play from easier to more difficult islands <a href=isles.php?u_id=&sort=i_level,%20r1_max%20desc,%20i_anum%20desc>here</a>.";
    echo "<p>Ratings are separate for modes (Easy, Normal...)
      Ratings are counted based on percent of correct answers, percent of wrong answers 
      within periods (when you choose Bach, when correct answer is Handel, who is also from 
      Baroque period), difference of birth years of correct and selected composers, thinking time and your preferences. For example, if you set 
      \"play only 1-minute intervals\", this will increase your rating, but will also increase
      difficulty.";
    echo "<p>Also you can pre-listen <a href=isnap.php?t_rating=1&order=c_start>50</a>, <a href=isnap.php?t_rating=2&order=c_start>100</a>, <a href=isnap.php?t_rating=3&order=c_start>200</a>";
    //echo ", <a href=isnap.php?t_rating=4>300</a> and <a href=isnap.php?t_rating=5>All</a>";
    echo " most known tracks.";
    echo "<p>When playing you can use mouse or keyboard only: arrows and Enter key.
      Also, you can use keyboard shortcuts: 
      <br>z - play (works after answer or in problem track), x - stop,
      <br>v - previous minute, b - next minute,
      <br>1-7 - select answer number 1-7, 
      <br>8 - rewind, 9 - forward, 
      <br>- (dash) - go to next question.";
    echo "<p>King of the island is a player having maximum rating and more than $isle_king_min[0] answers. King receives bonus to his rank, which grows with the number of players and answers on the island. 
      <br>If someone gets more correct answers than the King (and his rating is not less than 66% of a King rating), while King has less than $isle_king_min[3] answers, King stops receiveing bonus until he gets $isle_king_min[3] answers (a conflict or revolution).";
    echo "<p>King rank grows with number of islands, awards, number of questions and users on islands, where user is king.";
    echo "<p>On android best way to play is to use chrome with these two settings enabled: <a target=_blank href='chrome://flags/#disable-touch-adjustment'>disable-touch-adjustment</a>, <a target=_blank href='chrome://flags/#disable-gesture-requirement-for-media-playback'>disable-gesture-requirement-for-media-playback</a>";
  }
  
  function show_slope_ok($slope) {
    GLOBAL $ok_slope_min, $ok_slope_max;
    return show_slope($slope, "%", $ok_slope_min, $ok_slope_max);
  }
  
  function show_slope_r1($slope) {
    GLOBAL $r1_slope_min, $r1_slope_max;
    return show_slope($slope, "", $r1_slope_min, $r1_slope_max);
  }
  
  function show_slope($slope, $percent="", $min, $max) {
    $minopa = 0.1;
    $slope2=abs($slope);
    if ($slope2<$min) $opa="$minopa";
    elseif ($slope2>$max) $opa="1";
    else $opa = round($minopa+($slope2-$min)/($max-$min)*(1-$minopa), 1);
    if ($slope>=1) return "<img style='opacity: $opa' title='Slope is ".round($slope)."$percent' align=bottom height=13 src=images/up-arrow.png>"; 
    elseif ($slope<=-1) return "<img style='opacity: $opa' title='Slope is ".round($slope)."$percent' align=bottom height=13 src=images/down-arrow.png>";
    else return "<img style='opacity: .3' title='No particular slope' align=bottom height=10 src=images/right-arrow-g.png>";
  }
  
  function update_qlog_ratings($u_id=0) {
    GLOBAL $k_oneblock, $k_rightp, $k_allcomp, $k_allcompp, $k_secp, $level_cust,
      $k_secp2, $k_r, $k_cent, $k_cent2, $k_close, $k_cncust;
    // Update qlog ratings
    $k1 = pow($k_secp2, $k_secp)-1;
    $k2 = pow($k_cent2, $k_cent)-1;
    echo "k1 = $k1 <br>";
    echo "k2 = $k2 <br>";
    $cond = "";
    if ($u_id>0) $cond = "WHERE u_id = $u_id";
    //((1+IF(cc_qlog.u_level>=$level_cust, GREATEST(0, cc_qlog.u_allcomp*$k_allcomp2*sqrt(cc_qlog.i_cnum)-sqrt(6)), cc_qlog.u_allcomp*($k_allcomp*cc_qlog.u_level)))*l_ok +
    $q = "UPDATE cc_qlog SET l_r1 = (
      $k_r*(1+SQRT(c_count)*$k_cncust)*
      (1+u_oneblock*$k_oneblock)*
      ((1+IF(u_level>=$level_cust, 0, u_allcomp)*($k_allcomp*u_level))*l_ok +
        (1+IF(u_level>=$level_cust, 0, u_allcomp)*$k_allcompp) * (1-l_ok-l_wrong2)/$k_rightp + 
        (1-l_ok) / (pow(abs(l_cent)+$k_cent2, $k_cent)-$k2)/$k_close)/
      (pow(l_sec+$k_secp2, $k_secp)-$k1))
      $cond
    ";
    //echo "$q<br>";
    $r = mysql_query2($q);
    echo mysql_report_error();
  }
  
  function update_ratings($u_id=0, $cab="") {
    // Count ur
    $cond = "";
    if ($u_id>0) {
      $cond = "WHERE cc_users.u_id = $u_id ";
      if ($cab != "") $cond .= " AND cc_qlog.u_cab = x'$cab'";
    } else {
      mysql_query2("LOCK TABLES cc_ur WRITE, cc_users READ, cc_qlog READ, cc_composers READ");
      echo mysql_report_error();
    }
    if ($cond == "") $cond = "WHERE ";
    else $cond .= " AND ";
    $cond .= "l_cleared=0";
    $q = "SELECT *,hex(cc_qlog.u_cab) as cab,
      sum(l_r1) as r1,
      sum(l_ok) as correct,
      count(l_id) as cnt,
      avg(l_sec) as sec,
      sum(cc_qlog.u_allcomp) as ac,
      sum(cc_qlog.u_oneblock) as ob,
      (count(l_id)-sum(l_wrong2)) as rightp,
      sum(abs(l_cent)) as acent,
      sum(l_cent) as cent 
      FROM cc_users LEFT JOIN cc_qlog USING (u_id)
      $cond
      GROUP BY u_id,cc_qlog.u_level,cc_qlog.u_cab";
    //echo "$q<br>";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $cnt = $w[cnt];
      $wrong = $w[cnt]-$w[correct];
      if ($cnt == 0) $cnt = 1;
      if ($wrong == 0) $wrong = 1;
      $r_r1 = $w[r1]/$cnt;
      //echo "$w[u_id] $w[u_level] tot $w[cnt] cor $w[correct] $w[sec] $w[wrong2] $w[acent] $w[cent] $r_r1 $w[cab]<br>";
      if ($w[u_level]>0) {
        $q2 = "REPLACE INTO cc_ur VALUES( 
          '$w[u_id]', '$w[u_level]', '$w[correct]', '$w[cnt]', '$w[rightp]',
          '$w[sec]', '".($w[cent]/$wrong)."', '".($w[acent]/$wrong)."', '$r_r1', 
          '$w[ac]', '$w[ob]', x'$w[cab]',0,0,0,0)";
        //echo "$q2<br>";
        $r2 = mysql_query2($q2);
        //echo "Affected ".mysql_affected_rows()." rows.<br>";
      }
      echo mysql_report_error();
      //if ($w[cab] == "40000020000000000000000000000000000000000000000000") break;
    }
    if ($u_id == 0) {
      mysql_query2("UNLOCK TABLES");
      echo mysql_report_error();
      mysql_query2("OPTIMIZE TABLE cc_ur");
      echo mysql_report_error();
    }
    //if ($w[cab] == "40000020000000000000000000000000000000000000000000") exit;
  }
  
  function update_lid() {
    mysql_query2("LOCK TABLES cc_ur READ, cc_qlog WRITE");
    echo mysql_report_error();
    $r = mysql_query2("SELECT *,hex(u_cab) as cab, hex(u_gab) as gab FROM cc_qlog GROUP BY u_id, u_level, u_cab, u_gab");
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      mysql_query2("SET @curRow:=0");
      echo mysql_report_error();
      mysql_query2("UPDATE cc_qlog SET l_lid=(@curRow := @curRow+1) 
        WHERE u_id='$w[u_id]' AND u_level='$w[u_level]' AND u_cab=x'$w[cab]' AND u_gab=x'$w[gab]' AND l_cleared=0
        ORDER BY l_time,l_id
      ");
      echo mysql_report_error();
    }
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
  }
  
  function update_slope() {
    mysql_query2("LOCK TABLES cc_ur WRITE, cc_act WRITE, cc_qlog READ");
    echo mysql_report_error();
    mysql_query2("UPDATE cc_ur 
      LEFT JOIN (
      SELECT u_id, u_level, u_cab, u_gab, 
      COUNT(*) AS cnt, 
      SUM(l_ok*l_lid) AS right_xy, SUM(l_ok) AS right_sum,
      SUM(l_r1*l_lid) AS r1_xy, SUM(l_r1) AS r1_sum
      FROM cc_qlog 
      WHERE l_cleared=0
      GROUP BY u_id, u_level, u_cab
      ) l ON (cc_ur.u_id=l.u_id AND cc_ur.r_level=l.u_level AND cc_ur.r_cab=l.u_cab)
      SET 
      r_right_xy=right_xy, r_right_b=((cnt*right_xy)-(cnt*(cnt+1)/2*right_sum))/((cnt*cnt*(cnt+1)*(2*cnt+1)/6)-(cnt*(cnt+1)*cnt*(cnt+1)/4))*100*cnt,
      r_r1_xy=r1_xy, r_r1_b=((cnt*r1_xy)-(cnt*(cnt+1)/2*r1_sum))/((cnt*cnt*(cnt+1)*(2*cnt+1)/6)-(cnt*(cnt+1)*cnt*(cnt+1)/4))*cnt;
    ");
    echo mysql_report_error();
    mysql_query2("UPDATE cc_act
      LEFT JOIN cc_ur ON (cc_act.u_id=cc_ur.u_id AND cc_act.u_cab=cc_ur.r_cab AND cc_act.u_level=cc_ur.r_level)
      SET a_right_b=r_right_b
    ");
    echo mysql_report_error();
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
  }
  
  function update_cstat() {
    GLOBAL $tracks_start;
    mysql_query2("LOCK TABLES cc_cstat WRITE, cc_qlog READ");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_cstat");
    echo mysql_report_error();
    mysql_query2("INSERT INTO cc_cstat
      SELECT c_id, u_id, COUNT(l_ok) AS c_total, SUM(l_ok) AS c_right, SUM(IF(l_wrong2=1, 0, 1)) AS c_rightp, 
      SUM(l_sec) AS c_sec, SUM(l_cent) AS c_cent, SUM(ABS(l_cent)) AS c_cent2 
      FROM cc_qlog 
      WHERE cc_qlog.l_time > '$tracks_start'
      GROUP BY u_id,c_id
    ");
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_cstat");
    echo mysql_report_error();
  }
  
  function microtime_float() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
  }
  
  function p1($id) {
    GLOBAL $profile_t, $profile_n, $profile_start;
    if ($profile_start[$id]>0) echo "NESTED PROFILE DETECTED";
    $profile_start[$id] = microtime_float();
    $profile_n[$id] ++;
  }
  
  function p2($id) {
    GLOBAL $profile_t, $profile_n, $profile_start;
    $profile_t[$id] += microtime_float() - $profile_start[$id];
    $profile_start[$id] = 0;
  }
  
  function show_prof() {
    GLOBAL $profile_t, $profile_n, $profile_start;
    echo "Profiling results:<br>";
    foreach ($profile_t as $key => $val) {
      if ($profile_start[$key]>0) echo "<font color=red>THIS PROFILE NOT CLOSED</font> ";
      echo "$key => $val (".$profile_n[$key]." calls)<br>";
    }
    $profile_t = array();
    $profile_n = array();
  }
  
  function update_tghist() {
    mysql_query2("LOCK TABLES cc_ur READ, cc_qlog READ, cc_ctracks READ, cc_tgroups READ, cc_tghist WRITE");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_tghist");
    echo mysql_report_error();
    $r = mysql_query2("SELECT u_id, r_level, HEX(r_cab) as cab FROM cc_ur");
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $r2 = mysql_query2("SELECT l_id, t_id, tg_id, tg_class FROM cc_qlog
        LEFT JOIN cc_ctracks USING (t_id)
        LEFT JOIN cc_tgroups USING (tg_id)
        WHERE u_id='$w[u_id]' AND u_level='$w[r_level]' AND u_cab=x'$w[cab]'
        ORDER BY l_id DESC
        LIMIT 80
      ");
      echo mysql_report_error();
      $n2 = mysql_numrows($r2);
      $tg_hist = "";
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) $tg_hist = "," . $tg_hist;
        $tg_hist = $w2[tg_class] . $tg_hist;
      }
      $r2 = mysql_query2("INSERT INTO cc_tghist VALUES('$w[u_id]', '$w[r_level]', x'$w[cab]', '$tg_hist', 0)");
      echo mysql_report_error();
      //if ($i>50) break;
    }
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
  }
  
  function update_act($level=0, $cab="") {
    mysql_query2("LOCK TABLES cc_act WRITE, cc_qlog READ");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_act");
    echo mysql_report_error();
    if ($level>0) $cond .= " AND cc_qlog.u_level='$level' ";
    if ($cab!="") $cond .= " AND cc_qlog.u_cab=x'$cab' ";
    $q = "INSERT INTO cc_act
      SELECT MIN(l_time) AS a_time1, MAX(l_time) AS a_time2, u_id, cc_qlog.u_level, cc_qlog.u_cab, cc_qlog.u_gab, 
      COUNT(l_ok) AS a_total, SUM(l_ok) AS a_right, SUM(l_sec) AS a_sec, 0
      FROM cc_qlog
      WHERE l_cleared=0 $cond
      GROUP BY u_id, u_level, u_cab, u_gab
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_act");
    echo mysql_report_error();
  }
  
  function create_inext($cab, $anum, $cnum) {
    $ca = unpack_ca($cab);
    $len = strlen($ca);
    for ($x=0; $x<$len; $x++) {
      if ($ca[$x] == 'X') {
        $cab2 = pack_ca(substr_replace($ca, 'o', $x, 1));
        $q2 = "INSERT INTO cc_inext VALUES(x'$cab2', '$x', '$cnum', '$anum', x'$cab')";
        //echo $q2."<br>";
        mysql_query2($q2);
        echo mysql_report_error();
      }
    }
  }
  
  function update_inext($cab, $anum) {
    $q2 = "UPDATE cc_inext SET i_anum=$anum WHERE i_cab2=x'$cab'";
    //echo $q2."<br>";
    mysql_query2($q2);
    echo mysql_report_error();
  }

  function update_isles($i_cab="", $log=0, $l_id=0) {
    GLOBAL $level_cust, $rating_min_total, $isle_king_min, $isle_cst, $isle_cst2, $isle_cnum, $level_cust,
      $us, $is, $debug;
    if ($i_cab == "") {
      echo "<font color=red>Updating of multiple isles disabled because this can erase isle level and description</font>";
      exit;
      mysql_query2("LOCK TABLES cc_isles WRITE, cc_ur READ, cc_users READ, cc_qlog READ, cc_composers READ");
      echo mysql_report_error();
      mysql_query2("DELETE FROM cc_isles");
      echo mysql_report_error();
    } else {
      load_isle($i_cab);
    }
    $cond = "AND cc_ur.r_cab <> x''";
    if ($i_cab != "") $cond = "AND cc_ur.r_cab = x'$i_cab'";
    $q = "SELECT u_id,
      COUNT(u_id) as unum, 
      SUM(r_total) as anum, 
      AVG(r_r1) as r1_avg, 
      hex(r_cab) as cab
      FROM cc_ur
      WHERE r_level=5 $cond
      GROUP BY r_cab
    ";
    //echo $q;
    //stop_time();
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    // If no isle found, delete its stats
    if ($n == 0) {
      $q3 = "DELETE FROM cc_isles WHERE i_cab=x'$i_cab'";
      $r3= mysql_query2($q3);
    }
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $ca = unpack_ca($w[cab]);
      //echo "Updating $w[cab]<br>";
      // Load current isle
      //load_isle($w[cab]);
      // Load king
      //if ($debug>0) stop_time();
      $q2 = "SELECT * FROM cc_ur 
        WHERE r_level=$level_cust AND r_cab=x'$w[cab]' AND r_total>$isle_king_min[0] AND r_right>0 
        ORDER BY r_r1 DESC LIMIT 1";
      $r2= mysql_query2($q2);
      //if ($debug>0) echo $q2;
      echo mysql_report_error();
      $n2 = mysql_numrows($r2);
      $w2 = mysql_fetch_assoc($r2);
      if ($debug>0) {
        //echo "<br>King of $w[cab]: ";
        //print_r($w2);
      }
      //if ($debug>0) stop_time();
      // Load spammer
      $r1h = $w2[r_r1]/1.5;
      $q4 = "SELECT * FROM cc_ur 
        WHERE r_level=$level_cust AND r_cab=x'$w[cab]' AND r_right>'$w2[r_right]' 
        AND r_total>'$w2[r_total]' AND r_r1>$r1h
        ORDER BY r_right DESC LIMIT 1";
      //echo "$q4<br>";
      $r4 = mysql_query2($q4);
      //if ($debug>0) echo $q4;
      echo mysql_report_error();
      $n4 = mysql_numrows($r4);
      $w4 = mysql_fetch_assoc($r4);
      if ($debug>0) {
        //echo "<br>Spammer of $w[cab]: ";
        //print_r($w4);
      }
      $u_id2 = 0;
      if (($w2[r_total] <= $isle_king_min[3]) && ($w2[u_id]>0)) $u_id2 = $w4[u_id];
      // Load last time
      $q3 = "SELECT min(l_time) as since, max(l_time) as last FROM cc_qlog USE INDEX (lc)
        WHERE u_level=$level_cust AND u_cab=x'$w[cab]'";
      $r3= mysql_query2($q3);
      //if ($debug>0) echo $q3;
      echo mysql_report_error();
      $w3 = mysql_fetch_assoc($r3);
      // Load creator
      $q6 = "SELECT * FROM cc_qlog USE INDEX (lc) WHERE u_level=$level_cust AND u_cab=x'$w[cab]' ORDER BY l_time LIMIT 1";
      $r6= mysql_query2($q6);
      //if ($debug>0) echo $q6;
      echo mysql_report_error();
      $w6 = mysql_fetch_assoc($r6);
      // Create name
      //if ($debug>0) stop_time();
      create_isle_cst($ca);
      $q3 = "REPLACE INTO cc_isles 
        VALUES(x'$w[cab]', '$w2[u_id]', '$w[r1_avg]', '$w2[r_r1]', '$w2[r_total]',
        '$w[anum]', '$isle_cst', '$isle_cst2', '$isle_cnum', '$w[unum]', '$w3[since]', '$w3[last]', 
        '$u_id2', '$w6[u_id]', '$is[i_level]', '$is[i_name]', '$is[f_count]')";
      //echo "$q3<br>";
      $r3= mysql_query2($q3);
      //if ($debug>0) stop_time();
      echo mysql_report_error();
      if ($log > 0) {
        // Check if need log
        $need_log=0;
        $nu_id=0;
        if ($w[anum] == 1) {
          $need_log=3;
          $nu_id = $us[u_id];
          create_inext($w[cab], 1, $isle_cnum-1);
        } else {
          update_inext($w[cab], $w[anum]);
        }
        if (($w2[r_total] == $isle_king_min[1]+1) && ($is[r_total] == $isle_king_min[1])) $need_log=4;
        if (($w2[r_total] == $isle_king_min[2]+1) && ($is[r_total] == $isle_king_min[2])) $need_log=5;
        if (($w2[r_total] == $isle_king_min[3]+1) && ($is[r_total] == $isle_king_min[3])) $need_log=6;
        if (($is[u_id2] - $u_id2) != 0) $need_log=2;
        if (($is[u_id] - $w2[u_id]) != 0) $need_log=1;
        // Log
        if ($need_log > 0) {
          $q5 = "INSERT INTO cc_klog
            VALUES('', x'$w[cab]', NOW(), '$l_id', '$w2[u_id]', '$is[u_id]', '$u_id2', '$is[u_id2]',
            '$w2[r_total]', '$is[r_total]', '$w2[r_r1]', '$is[r1_max]', '$nu_id', 0, '$need_log', '$w[unum]')";
          $r5 = mysql_query2($q5);
          echo mysql_report_error();
          update_ustat(($w2[u_id]+0).", ".($u_id2+0).", ".($is[u_id]+0).", ".($is[u_id2]+0).", ".($nu_id+0));
        }
      }
      echo mysql_report_error();
    }
    if ($i_cab == "") {
      mysql_query2("UNLOCK TABLES");
      echo mysql_report_error();
      mysql_query2("OPTIMIZE TABLE cc_isles");
      echo mysql_report_error();
    }
  }
  
  function show_crown($total, $u_id2=0, $unum=0) {
    GLOBAL $isle_king_img, $isle_king_min, $isle_palace_min;
    $st = "";
    if ($u_id2>0) {
      $st .= "<img border=0 title='There is a conflict between two kings on the island. To resolve the conflict, either king has to answer $isle_king_min[3] questions and have greater rating.' align=top height=18 src=images/fire.png> ";
    } else for ($i=count($isle_king_min)-1; $i>=0; $i--) {
      if ($total > $isle_king_min[$i]) {
        $nextaw = "\nNext award after ".$isle_king_min[$i+1];
        if ($i == count($isle_king_min)-1) $nextaw="";
        $st .= "<img border=0 title='King has more than $isle_king_min[$i] answers on this island ($total)$nextaw' align=top height=18 src=$isle_king_img[$i]> ";
        break;
      }
    }
    if ($unum == 1) $st .= " <img border=0 title='King is alone on this island (no competition)' align=top height=18 src=images/palm.png>";
    elseif ($unum > $isle_palace_min[1]) $st .= " <img border=0 title='More than $isle_palace_min[1] players on this island ($unum)' align=top height=18 src=images/palace.png>";
    elseif ($unum > $isle_palace_min[0]) $st .= " <img border=0 title='More than $isle_palace_min[0] players on this island ($unum)' align=bottom height=14 src=images/hut.png>";
    return $st;
  }
  
  function show_user_king($u_id=0) {
    GLOBAL $us, $isle_king_min, $level_cust, $kr_sql, $isle_palace_min;
    if ($u_id == 0) {
      $u_id = $us[u_id];
      $ua = $us;
    } else {
      $r = mysql_query2("SELECT * FROM cc_users WHERE u_id='$u_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    //if ($ua[u_kcnt] == 0) {
      //echo "$ua[u_name] is not a king of any island. ";
    //} else {
    echo "<b>$ua[u_name]</b> is a king of <a href=isles.php?ku_id=$ua[u_id]>".($ua[u_kcnt]+0)."</a> islands: ";
    for ($z=count($isle_king_min)-1; $z>=0; $z--) {
      $cnt = $ua["u_medal".($z+1)];
      if ($cnt>0) echo "<a href=isles.php?ku_id=$ua[u_id]&k_cond=".($z+2).">".show_crown($isle_king_min[$z]+1)."</a> $cnt, ";
    }
    if ($ua[u_fires]>0) echo "<a href=isles.php?ku_id=$ua[u_id]&k_cond=1>".show_crown($isle_king_min[0]+1, 1)."</a> $ua[u_fires], ";
    if ($ua[u_palms]>0) echo "<a href=isles.php?ku_id=$ua[u_id]&k_cond=6>".show_crown(0, 0, 1)."</a> ".round($ua[u_palms]/$ua[u_kcnt]*100, 0)."%, ";
    if ($ua[u_hc1]>0) echo "<a href=isles.php?ku_id=$ua[u_id]&k_cond=7>".show_crown(0, 0, $isle_palace_min[0]+1)."</a> $ua[u_hc1], ";
    if ($ua[u_hc2]>0) echo "<a href=isles.php?ku_id=$ua[u_id]&k_cond=8>".show_crown(0, 0, $isle_palace_min[1]+1)."</a> $ua[u_hc2]. ";
    echo "<br>";
    echo "King rank: <b>".round($ua[u_kr])."</b> (<b>".($ua[u_rent]+0)."</b> renters, <b>".($ua[u_acnt]+0)."</b> answers by renters). ";
    echo "Created <b>".($ua[u_icr]+0)."</b> islands. ";
    echo "Cleared <b>".($ua[u_clears]+0)."</b> answers.<br>";
    echo "Posted <b>".($ua[u_posted]+0)."</b> comments, <b>".($ua[u_voted]+0)."</b> votes. Received votes: <font color=green><b>".($ua[u_fup]+0)."</b></font> ";
    echo "<img border=0 height=15 src=images/up.png> ";
    echo "<img valign=bottom border=0 height=15 src=images/down.png> ";
    echo " <font color=red><b>".($ua[u_fdown]+0)."</b></font>";
    echo "<br>";
  }
  
  function show_user_king_old($u_id=0) {
    GLOBAL $us, $isle_king_min, $level_cust, $kr_sql;
    if ($u_id == 0) {
      $u_id = $us[u_id];
      $ua = $us;
    } else {
      $r = mysql_query2("SELECT * FROM cc_users WHERE u_id='$u_id'");
      echo mysql_report_error();
      $ua = mysql_fetch_array($r);
    }
    $q = "SELECT *,hex(i_cab) as cab FROM cc_isles LEFT JOIN cc_users USING (u_id) WHERE u_id = $u_id";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_assoc($r);
      $wa[$i] = $w;
      for ($z=count($isle_king_min)-1; $z>=0; $z--) {
        if ($w[r_total] > $isle_king_min[$z]) {
          if ($w[u_id2] > 0) {
            $crowns[4][] = $i;
          } else {
            $crowns[$z][] = $i;
          }
          break;
        }
      }
    }
    if ($n == 0) {
      echo "$ua[u_name] is not a king of any island. ";
    } else {
      echo "$ua[u_name] is a king of <b>$n</b> islands: ";
      if ($n > 12) {
        $cr = $crowns[count($isle_king_min)];
        for ($x=0; $x<count($cr); $x++) {
          echo "<a href=rating.php?level=$level_cust&cab=".$wa[$cr[$x]][cab].">";
          echo show_crown($wa[$cr[$x]][r_total], $wa[$cr[$x]][u_id2]);
          echo "</a> ";
        }
        if (count($cr)>0) echo ", ";
        for ($z=count($isle_king_min)-1; $z>=0; $z--) {
          $cr = $crowns[$z];
          if ($z < count($isle_king_min)-1) echo ", ";
          echo show_crown($isle_king_min[$z]+1);
          echo " ".count($cr);
        }
      } else {
        for ($z=count($isle_king_min); $z>=0; $z--) {
          $cr = $crowns[$z];
          for ($x=0; $x<count($cr); $x++) {
            echo "<a href=rating.php?level=$level_cust&cab=".$wa[$cr[$x]][cab].">";
            echo show_crown($wa[$cr[$x]][r_total], $wa[$cr[$x]][u_id2]);
            echo "</a>";
          }
        }
      }
      echo "<br>";
      $q2 = "SELECT SUM($kr_sql) as kr
        FROM cc_isles
        WHERE u_id = $u_id";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
      $w2 = mysql_fetch_assoc($r2);
      echo "King rank: <b>".round($w2[kr])."</b><br>";
    }
    $q3 = "SELECT count(*) as cnt FROM cc_isles
      WHERE nu_id = $u_id";
    $r3 = mysql_query2($q3);
    echo mysql_report_error();
    $w3 = mysql_fetch_assoc($r3);
    echo "$ua[u_name] created <b>$w3[cnt]</b> islands.<br>";
    // Count created comments and votes
    $q = "SELECT count(*) as cnt, sum(f_up) as up, sum(f_down) as down FROM cc_forum WHERE fu_id='$u_id' AND f_deleted=0";
    $r = mysql_query2($q);
    $w = mysql_fetch_assoc($r);
    $q2 = "SELECT count(*) as cnt FROM cc_fvotes WHERE u_id='$u_id'";
    $r2 = mysql_query2($q2);
    $w2 = mysql_fetch_assoc($r2);
    echo "$ua[u_name] posted <b>$w[cnt]</b> comments, <b>$w2[cnt]</b> votes. Received votes: <font color=green><b>".($w[up]+0)."</b></font> ";
    echo "<img border=0 height=15 src=images/up.png> ";
    echo "<img valign=bottom border=0 height=15 src=images/down.png> ";
    echo " <font color=red><b>".($w[down]+0)."</b></font>";
    echo "<br>";
  }
  
  function show_played_composer($c_id, $u_id=-1) {
    GLOBAL $us, $tracks_start;
    if ($u_id==-1) $u_id=$us[u_id];
    $table2 = "cc_tstat2";
    if ($u_id>0) {
      $cond = "AND u_id='$u_id' ";
      $table2 = "cc_tstat";
    }
    $q = "SELECT t_count, SUM(c_total) as c_total FROM cc_composers
      LEFT JOIN cc_cstat USING (c_id)
      WHERE cc_composers.c_id='$c_id' $cond";
    $r=mysql_query2($q);
    echo mysql_report_error();
    $w = mysql_fetch_assoc($r);
    $q2 = "SELECT COUNT(*) as cnt FROM $table2 WHERE c_id='$c_id' $cond";
    //echo $q2;
    $r2=mysql_query2($q2);
    echo mysql_report_error();
    $w2 = mysql_fetch_assoc($r2);
    echo "Played <b>$w2[cnt] of $w[t_count]</b> tracks for this composer (total $w[c_total] answers).";
  }
  
  function update_tgroups($with_clear=0) {
    // Clear
    if ($with_clear) {
      $q2 = "UPDATE cc_tgroups SET tg_tracks=0, tg_cnum=0, tg_hours=0";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
    }
    $q = "SELECT *,
      count(t_id) as cnt,
      count(distinct c_id) as ccnt,
      sum(t_len) as tlen
      FROM cc_ctracks
      LEFT JOIN cc_tgroups USING (tg_id)
      WHERE t_bad=0
      GROUP BY tg_id
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $q2 = "UPDATE cc_tgroups SET tg_tracks='$w[cnt]', tg_cnum='$w[ccnt]', tg_hours='".round($w[tlen]/60/60, 1)."' WHERE tg_id='$w[tg_id]'";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
    }
    // UPDATE ctg
    mysql_query2("DELETE FROM cc_ctg");
    echo mysql_report_error();
    $q = "INSERT INTO cc_ctg 
      SELECT cc_ctracks.c_id, tg_class, SUM(t_len)/60 FROM cc_ctracks
      LEFT JOIN cc_tgroups USING (tg_id)
      LEFT JOIN cc_composers ON (cc_ctracks.c_id=cc_composers.c_id)
      WHERE tg_class>0 AND t_bad=0
      GROUP BY c_id,tg_class
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
  }
  
  function update_fcount($with_clear=0) {
    // Clear
    if ($with_clear) {
      $q2 = "UPDATE cc_tgroups SET tg_tracks=0, tg_cnum=0, tg_hours=0";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
    }
    $q = "SELECT *,
      count(t_id) as cnt,
      count(distinct c_id) as ccnt,
      sum(t_len) as tlen
      FROM cc_ctracks
      LEFT JOIN cc_tgroups USING (tg_id)
      WHERE t_bad=0
      GROUP BY tg_id
    ";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $q2 = "UPDATE cc_tgroups SET tg_tracks='$w[cnt]', tg_cnum='$w[ccnt]', tg_hours='".round($w[tlen]/60/60, 1)."' WHERE tg_id='$w[tg_id]'";
      $r2 = mysql_query2($q2);
      echo mysql_report_error();
    }
  }
  
  function find_forums($limit=0, $size=500, $editbox=1) {
    GLOBAL $ca_selected, $na_pow;
    //stop_time();
    //print_r($ca_selected);
    $cnt = count($ca_selected);
    $q = "SELECT HEX(i_cab) as cab, i_cnum FROM cc_isles WHERE f_count>0 and i_cnum<=$cnt";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $cab = &$w[cab];
      $found=0;
      foreach ($ca_selected as $key => $ca_id) {
        $pos = strlen($cab)-1-floor($ca_id / 4);
        $h = $cab[$pos];
        $h1 = $na_pow[$ca_id % 4];
        if ((hexdec($h) & $h1) > 0) {
          //echo "<br>Detected match for $ca_id comparing $h to $h1 at $pos on $cab ";
          $found++;
        }
      }
      if (($found>1) && ($w[i_cnum] == $found) && ($found < $cnt)) {
        //echo "$cab<br>";
        show_forum($cab, $limit, $size, $editbox, "", 0, 1);
        $ffound++;
      }
    }
    if ($ffound == 0) echo "Nothing found<br>";
    //stop_time();
  }
  
  function show_forum($cab="", $limit=0, $size=500, $editbox=1, $cname="", $u_id=0, $multicab=0) {
    GLOBAL $level_cust, $us, $is, $level, $isles_max_comps, $i_am_admin;
    if ($cab != "") {
      $cond .= "AND cc_forum.i_cab = x'$cab'";
    }
    if ($limit>0) $lim="LIMIT $limit";
    if ($cname != "") $cond .= " AND i_cst REGEXP '\[\[:<:\]\]$cname\[\[:>:\]\]'";
    if ($u_id>0) $cond .= " AND cc_forum.fu_id = '$u_id' ";
    $q = "SELECT cc_forum.f_id, i_cst2, i_name, u_name, fu_id, f_time, u_ip, f_edited, f_up, f_down, f_text2, i_cnum,
      hex(cc_forum.i_cab) as cab, cc_forum.f_id as f_id, v_type
      FROM cc_forum
      LEFT JOIN cc_isles USING (i_cab)
      LEFT JOIN cc_users ON (cc_users.u_id=cc_forum.fu_id)
      LEFT JOIN cc_fvotes ON (cc_fvotes.f_id=cc_forum.f_id AND cc_fvotes.u_id='$us[u_id]')
      WHERE f_deleted=0 $cond
      ORDER BY cc_forum.f_id DESC
      $lim
    ";
    //echo $q;
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    if ($n>0) {
      echo "<center>";
      echo "<table border=0><tr><td bgcolor=lightgray>"; // #2574d0
      echo "<table border=0 cellspacing=1 cellpadding=5>";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        echo "<tr>";
        echo "<td bgcolor=white width=100 valign=top title='IP: $w[u_ip]";
        if ($w[f_edited] != 0) echo "\nLast edited $w[f_edited]";
        echo "'>";
        if ($editbox>-1) echo "<a href=stats.php?su_id=$w[fu_id]>";
        else echo "<b>";
        echo "$w[u_name]</a></b>";
        echo "<br>";
        echo "<i>$w[f_time]</i>";
        // Show votes
        if ($editbox>-1) {
          echo "<br>";
          if ($w[f_up]>0) echo "<font color=green><b>$w[f_up]</b></font> ";
          $img = "up-g.png";
          if ($w[v_type]==1) $img="up.png";
          if ($us[u_id] != $w[fu_id]) echo "<a title='Vote up' href=rating.php?action=vote&f_id=$w[f_id]&cab=$w[cab]&level=$level_cust&vote=1>";
          echo "<img border=0 height=15 src=images/$img></a> ";
          $img = "down-g.png";
          if ($w[v_type]==-1) $img="down.png";
          if ($us[u_id] != $w[fu_id]) echo "<a title='Vote down' href=rating.php?action=vote&f_id=$w[f_id]&cab=$w[cab]&level=$level_cust&vote=-1>";
          echo "<img valign=bottom height=15 src=images/$img></a> ";
          if ($w[f_down]>0) echo "<font color=red><b>$w[f_down]</b></font> ";
        }
        echo "<td bgcolor=white width=$size valign=top>";
        $par = "<p style='text-indent: 20px; margin-top: 0em; margin-bottom: 0em'>";
        echo "$par".stripslashes(str_replace("\n", "$par", trim($w[f_text2])))." ";
        $cst = "($w[i_cst2])";
        if (($w[i_cnum] > 5) && ($w[i_name] != "")) $cst = "[$w[i_name]]";
        if (($cab == "") || ($multicab == 1)) echo " <a href=rating.php?level=$level_cust&cab=$w[cab]>$cst</a> ";
        // Show edit tools
        if ($editbox>-1) {
          if ((($us[u_id] == $w[fu_id]) && ($editbox>-1)) || ($i_am_admin)) {
            echo " <a title='Remove this post' onclick='return confirm(\"Do you really want to delete this forum post?\");' href='rating.php?fu_id=$w[fu_id]&cab=$w[cab]&level=$level_cust&f_id=$w[f_id]&action=removeforum' onclick='return confirm(\"Do you really want to remote this post?\");'><img border=0 height=14 src=images/cross.png></a> ";
          }
          if (($us[u_id] == $w[fu_id]) && ($editbox>-1)) {
            echo " <a title='Edit this post' href='rating.php?cab=$w[cab]&level=$level_cust&f_id=$w[f_id]&action=editforum'><img border=0 height=16 src=images/edit.png></a> ";
          }
        }
        if ($us[u_name] == "Rualark") {
          //echo " <a href='mailer.php?act=send-forum&f_id=$w[f_id]&cab=$w[cab]'>Mail</a>";
        }
      }
      echo "</table></table></center>";
    }
    if ($cab != "") {
      if ($editbox == 1) {
        echo "<form action=rating.php>";
        echo "<input type=hidden name=level value='$level_cust'>";
        echo "<input type=hidden name=cab value='$cab'>";
        echo "<p align=center style='vertical-align: top;'><b style='vertical-align: top;'>Add your comment to this <a style='vertical-align: top;' href='rating.php?cab=$cab&level=$level_cust'>island</a></b>: ";
        echo "<textarea rows=8 cols=80 name=f_text></textarea> ";
        echo "<input style='vertical-align: top;' type=submit>";
        echo "</form>";
      } elseif ($editbox == 0) {
        echo "<center><a style='vertical-align: top;' href='rating.php?cab=$cab&level=$level_cust'>Add your comment to this island</a></center>";
      }
    }
  }
  
  function show_tg($tg_id, $tg_name, $tg_comment, $link=1) {
    //if ($tg_id>0) 
    if ($link == 1) echo "<a href='tgroups.php?tg_id=$tg_id'>";
    echo "<img border=0 title='$tg_name ";
    //if ($tg_comment != "") 
    echo "($tg_comment)";
    echo "' height=15 src=images/tg$tg_id.png>";
    if ($link == 1) echo "</a> ";
  }
  
  function update_ustat($u_ids) {
    GLOBAL $isle_king_min, $isle_palace_min, $kr_sql, $level_cust;
    if ($u_ids != "") {
      $cond = " AND u_id IN ($u_ids) ";
      $cond3 = " AND nu_id IN ($u_ids) ";
    }
    $q = "UPDATE cc_users
      LEFT JOIN (SELECT COUNT(*) AS kc, SUM(i_anum-r_total) AS acnt, SUM(i_unum-1) AS unum, SUM(IF(i_unum=1, 1, 0)) AS palms, SUM(r_total) as total,
      SUM(IF(i_unum>$isle_palace_min[0], IF(i_unum<=5, 1, 0), 0)) AS hc1, 
      SUM(IF(i_unum>$isle_palace_min[1], 1, 0)) AS hc2, 
      SUM(IF(r_total>$isle_king_min[3], 1, 0)) AS medal4,
      SUM(IF(r_total>$isle_king_min[2], IF(r_total<=$isle_king_min[3], 1, 0), 0)) AS medal3,
      SUM(IF(r_total>$isle_king_min[1], IF(r_total<=$isle_king_min[2], 1, 0), 0)) AS medal2,
      SUM(IF(r_total>$isle_king_min[0], IF(r_total<=$isle_king_min[1], 1, 0), 0)) AS medal1,
      SUM($kr_sql) as kr,
      u_id FROM cc_isles
      WHERE u_id2=0 $cond GROUP BY u_id) i USING (u_id)
      SET u_kcnt=kc, u_acnt=acnt, u_rent=unum, u_palms=palms, u_hc1=hc1, u_hc2=hc2, u_medal1=medal1, u_medal2=medal2, 
      u_medal3=medal3, u_medal4=medal4, u_kr=kr, u_total2=total
      WHERE 1=1 $cond";
    mysql_query2($q);
    //echo $q;
    echo mysql_report_error(); //  USE INDEX (u_id2)
    mysql_query2("UPDATE cc_users
      LEFT JOIN (SELECT COUNT(*) AS fires,
      u_id FROM cc_isles 
      WHERE u_id2!=0 $cond GROUP BY u_id) i USING (u_id)
      SET u_fires=fires
      WHERE 1=1 $cond"); // USE INDEX (u_id)
    echo mysql_report_error();
    mysql_query2("UPDATE cc_users
      LEFT JOIN (SELECT COUNT(*) AS icr, nu_id FROM cc_isles 
      WHERE 1=1 $cond3 GROUP BY nu_id) i ON (i.nu_id=cc_users.u_id)
      SET u_icr=icr
      WHERE 1=1 $cond"); // USE INDEX (nu_id)
    echo mysql_report_error();
    mysql_query2("UPDATE cc_users
      LEFT JOIN (SELECT COUNT(*) AS clr,
      u_id FROM cc_qlog WHERE l_cleared=1 $cond GROUP BY u_id) i USING (u_id)
      SET u_clears=clr
      WHERE 1=1 $cond");
    echo mysql_report_error();
    if ($u_ids == "") {
      mysql_query2("UPDATE cc_users
        LEFT JOIN (SELECT SUM(r_total) AS total,
        u_id FROM cc_ur 
        WHERE r_level=$level_cust GROUP BY u_id) i USING (u_id)
        SET u_total=total"); // USE INDEX (u_id)
      echo mysql_report_error();
    }
  }
 
  function update_tstat() {
    GLOBAL $tracks_start;
    mysql_query2("LOCK TABLES cc_tstat WRITE, cc_tstat2 WRITE, cc_bstat WRITE, cc_bstat2 WRITE, cc_ctracks READ, cc_qlog READ");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_tstat");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_tstat2");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_bstat");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_bstat2");
    echo mysql_report_error();
    // Update tstat
    mysql_query2("INSERT INTO cc_tstat
      SELECT u_id, cc_qlog.t_id, cc_qlog.c_id,
      COUNT(l_id) AS t_total,
      (COUNT(l_id)-SUM(l_ok)) AS t_wrong,
      SUM(l_wrong2) AS t_wrong2,
      AVG(l_sec) AS t_avsec,
      AVG(l_cent) AS t_avcent,
      AVG(ABS(l_cent)) AS t_avcent2
      FROM cc_qlog 
      LEFT JOIN cc_ctracks USING (t_id)
      WHERE l_time>'2013-05-14 20:00:00' AND t_bad=0
      GROUP BY cc_qlog.t_id, cc_qlog.u_id
    ");
    echo mysql_report_error();
    // Update all-user tstat
    mysql_query2("INSERT INTO cc_tstat2
      SELECT cc_qlog.t_id, cc_qlog.c_id,
      COUNT(l_id) AS t_total,
      (COUNT(l_id)-SUM(l_ok)) AS t_wrong,
      SUM(l_wrong2) AS t_wrong2,
      AVG(l_sec) AS t_avsec,
      AVG(l_cent) AS t_avcent,
      AVG(ABS(l_cent)) AS t_avcent2
      FROM cc_qlog 
      LEFT JOIN cc_ctracks USING (t_id)
      WHERE l_time>'2013-05-14 20:00:00' AND t_bad=0
      GROUP BY cc_qlog.t_id
    ");
    echo mysql_report_error();
    // Update bstat
    mysql_query2("INSERT INTO cc_bstat
      SELECT u_id, t_id, b_id, c_id,
      COUNT(l_id) AS t_total,
      (COUNT(l_id)-SUM(l_ok)) AS t_wrong,
      SUM(l_wrong2) AS t_wrong2,
      AVG(l_sec) AS t_avsec,
      AVG(l_cent) AS t_avcent,
      AVG(ABS(l_cent)) AS t_avcent2
      FROM cc_qlog 
      WHERE l_time>'2013-05-14 20:00:00'
      GROUP BY cc_qlog.t_id, cc_qlog.b_id, cc_qlog.u_id
    ");
    echo mysql_report_error();
    // Update all-user bstat
    mysql_query2("INSERT INTO cc_bstat2
      SELECT t_id, b_id, c_id,
      COUNT(l_id) AS t_total,
      (COUNT(l_id)-SUM(l_ok)) AS t_wrong,
      SUM(l_wrong2) AS t_wrong2,
      AVG(l_sec) AS t_avsec,
      AVG(l_cent) AS t_avcent,
      AVG(ABS(l_cent)) AS t_avcent2
      FROM cc_qlog 
      WHERE l_time>'2013-05-14 20:00:00'
      GROUP BY cc_qlog.t_id, cc_qlog.b_id
    ");
    echo mysql_report_error();
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_tstat");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_tstat2");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_bstat");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_bstat2");
    echo mysql_report_error();
  }
  
  function update_timesheet() {
    mysql_query2("LOCK TABLES cc_timesheet WRITE, cc_qlog READ");
    echo mysql_report_error();
    mysql_query2("DELETE FROM cc_timesheet");
    echo mysql_report_error();
    mysql_query2("INSERT INTO cc_timesheet
      SELECT u_id, DATE(l_time), COUNT(*), SUM(l_ok), SUM(IF(l_sec>600, 600, l_sec))
      FROM cc_qlog
      GROUP BY u_id, DATE(l_time)
    ");
    echo mysql_report_error();
    mysql_query2("UNLOCK TABLES");
    echo mysql_report_error();
    mysql_query2("OPTIMIZE TABLE cc_timesheet");
    echo mysql_report_error();
  }
 
  function comp_color($w) {
    $lim = 0.5;
    $cco = max(0, ($w[c_right]/$w[c_total]-$lim)/(1-$lim));
    //$cco = pow(max($w[c_right]/$w[c_total], 0.3)*2-1, 2);
    $cco2 = (0.25 - min(abs($w[c_right]/$w[c_total]-0.75), 0.25))*1;
    $cco3 = (min(abs($w[c_right]/$w[c_total]-0.75), 0.25))*0.5;
    $green = 255-min($w[c_total]/$w[c_len]*60, 1)*255*(1-$cco);
    if (($w[c_right]/$w[c_total] > 0.8) && ($w[c_total]/$w[c_len]*60 > 0.6)) $green -= (min($w[c_total]/$w[c_len]*60, 1) - 0.6)*($w[c_right]/$w[c_total] - 0.8)*800;
    $bgcolor=make_color(
      255-min($w[c_total]/$w[c_len]*60, 1)*255*($cco), 
      $green, 
      255-min($w[c_total]/$w[c_len]*60, 1)*255
    );
    return $bgcolor;
  }
  
  function track_color($w, $lim=0) {
    //echo "$w[t_total] $w[t_wrong] $w[t_len] ";
    if ($w[t_total] == 0) $w[t_total] = 0.00001;
    $len = max(3, $w[t_len]/60);
    $cco = max(0, (($w[t_total]-$w[t_wrong])/$w[t_total]-$lim)/(1-$lim));
    $cco2 = (0.25 - min(abs(($w[t_total]-$w[t_wrong])/$w[t_total]-0.75), 0.25))*1;
    $cco3 = (min(abs(($w[t_total]-$w[t_wrong])/$w[t_total]-0.75), 0.25))*0.5;
    $green = 255-min($w[t_total]/$len, 1)*255*(1-$cco);
    if (((($w[t_total]-$w[t_wrong])/$w[t_total]) > 0.8) && ($w[t_total]/$len > 0.6)) $green -= (min($w[t_total]/$len, 1) - 0.6)*(($w[t_total]-$w[t_wrong])/$w[t_total] - 0.8)*800;
    $bgcolor=make_color(
      255-min($w[t_total]/$len, 1)*255*($cco), 
      $green, 
      255-min($w[t_total]/$len, 1)*255
    );
    return $bgcolor;
  }
  
  function show_tracks($c_id, $tg_id, $text) {
    GLOBAL $us;
    $cond = "AND cc_tstat.u_id='$us[u_id]'";
    $table = "cc_tstat";
    $q = "SELECT * FROM cc_ctracks 
      LEFT JOIN $table ON ($table.t_id=cc_ctracks.t_id $cond)
      WHERE cc_ctracks.c_id='$c_id' AND tg_id='$tg_id' LIMIT 30";
    $r = mysql_query2($q);
    echo mysql_report_error();
    $n = mysql_numrows($r);
    if ($n>0) {
      echo "$text<br>";
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        show_track($w);
        echo "<br>";
      }
    }
  }
  
  function show_track($w) {
    $bgcolor=track_color($w, 0.3);
    $fld = "$w[t_folder2]/";
    if ($w[t_folder2] == "") $fld = "";
    $fname = $w[t_name];
    if ($w[tg_id]>0) echo "<img title='$w[tg_name]' height=15 src=images/tg$w[tg_id].png> ";
    $weight="normal";
    $size="";
    $color="black";
    if ($w[t_rating] > 0) {
      $weight="bold";
      if ($w[t_rating] == 1) $size="size=+2";
      if ($w[t_rating] == 2) $size="size=+1";
      //if ($w[t_rating] == 4) $color="#333333";
      //if ($w[t_rating] == 5) $color="#666666";
    }
    $b_id=rand(1, $w[b_max]);
    echo "<a href='ptracks.php?t_id=$w[t_id]&b_id=$b_id&u_id=$u_id'><font style='BACKGROUND-COLOR: $bgcolor; color: $color; font-weight: $weight; ' $size color=black>$fld$fname</font></a> <span style='vertical-align: center'>(".round($w[t_len]/60, 0)."m)</span>";
    if ($i_am_admin) if ($w[t_comment] != "") echo " <img title=\"".stripslashes($w[t_comment])."\" src=images/edit.png height=17>";
  }
 
  function vote_compart($l_id, $v_type) { 
    GLOBAL $ua;
    $v_id = mysql_real_escape_string($_COOKIE["vote_$l_id"]);
    if ($v_id==0) {
      // normal vote submission code goes here
      mysql_query("INSERT INTO ca_votes VALUES('', '$l_id', '".get_ip()."', '$_SERVER[HTTP_USER_AGENT]', NOW(), '$v_type', '$ua[u_id]')");
      $v_id=mysql_insert_id();
      echo mysql_error();
      if ($v_type == 1) {
        mysql_query("UPDATE ca_log SET v_up=v_up+1 WHERE l_id='$l_id'");
      } else {
        mysql_query("UPDATE ca_log SET v_down=v_down+1 WHERE l_id='$l_id'");
      }
      echo mysql_error();
      // then we set a cookie
      setcookie("vote_$l_id", "$v_id", time()+3600*24*7);
    } else {
      // cookie already exists, user has already voted on this machine
      // Get vote type
      $q = "SELECT * FROM ca_votes WHERE v_id='$v_id'";
      $r = mysql_query($q);
      echo mysql_error();
      $wv = mysql_fetch_assoc($r);
      if ($wv[v_type] != 0) {
        // Delete vote
        mysql_query("DELETE FROM ca_votes WHERE v_id='$v_id'");
        echo mysql_error();
        // Update counters
        if ($wv[v_type] == 1) {
          mysql_query("UPDATE ca_log SET v_up=v_up-1 WHERE l_id=$l_id");
        } else {
          mysql_query("UPDATE ca_log SET v_down=v_down-1 WHERE l_id=$l_id");
        }
        echo mysql_error();
      }
      setcookie("vote_$l_id", null);
    }
    $q = "SELECT * FROM ca_log WHERE l_id=$l_id";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    
    //print_r($_COOKIE);
    if ($v_type == 1) {
      return $w[v_up];
    } else {
      return $w[v_down];
    }
  }
  
  function get_ip() {
    if (isset($_SERVER["HTTP_X_REMOTE_ADDR"])) return $_SERVER["HTTP_X_REMOTE_ADDR"];
    return $_SERVER[REMOTE_ADDR];
  }
  
  function show_painting($a_id, $p_id, $width, $height, $width2=0, $height2=0) {
    GLOBAL $adb, $url_art;
    $img_url = "$url_art/$a_id/".str_pad($p_id, 4, '0', STR_PAD_LEFT).".jpg";
    if ($width2 == 0) {
      $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$a_id' AND p_id='$p_id'");
      echo mysql_error();
      $w = mysql_fetch_assoc($r);
      $width2 = $w[p_width];
      $height2 = $w[p_height];
    }
    if ($height2 > 0) $coef = $width2/$height2;
    else $coef = 1;
    if ($coef > $width/$height) $wi = "width=$width";
    else $he = "height=$height";
    echo "<img $wi $he align=top src=$img_url>";
    return $img_url;
  }
  
// TODO
// - i_id
// $min_answers_after_clear
?>
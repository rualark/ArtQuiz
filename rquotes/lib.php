<?
  include "../mysql.php";
  include "../url.php";
  
  $max_lines = 14; // for question
  $max_lines2 = 1000; // for viewing
  $button_height = 50;
  
  $mr_levels = array(
  160 => 30, 120 => 60, 88 => 100, 64 => 150, 49 => 200, 40 => 250, 33 => 300, 25 => 400, 20 => 500, 14 => 700, 10 => 1000, 8 => 1150, 1 => 8300,
  0 => 38000);
  $mr_levels_i = array(10, 20, 50, 100, 200, 500);
  $color = array("black", "red", "green", "blue", "#8800aa", "#666666", "brown", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666");
  
function mb_trim( $string ) 
{ 
    $string = preg_replace( "/(^\s+)|(\s+$)/us", "", $string ); 
    
    return $string; 
} 

function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
function str2url($str) {
    // переводим в транслит
    $str = rus2translit($str);
    // в нижний регистр
    $str = strtolower($str);
    // заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
    // удаляем начальные и конечные '-'
    $str = trim($str, "-");
    return $str;
}

  function get_ip() {
    if (isset($_SERVER["HTTP_X_REMOTE_ADDR"])) return $_SERVER["HTTP_X_REMOTE_ADDR"];
    return $_SERVER[REMOTE_ADDR];
  }
  
  function secure_variable($st) {
    GLOBAL ${$st};
    if (isset($_GET[$st])) ${$st} = mysql_real_escape_string($_GET[$st]);
    elseif (isset($_POST[$st])) ${$st} = mysql_real_escape_string($_POST[$st]);
  }

  function secure_variable_post($st) {
    GLOBAL ${$st};
    if (isset($_POST[$st])) ${$st} = mysql_real_escape_string($_POST[$st]);
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
      echo "<p>The script ran ".$totaltime." seconds";
      if ($totaltime2>$totaltime) echo " ($totaltime2 total) ";
      if ($st != "") echo " $st";
      echo ". "; 
    }
    // Set all subsequent views to child
    $view_child=1;
    // Restart timer
    start_time();
  }

  function load_isle() {
    GLOBAL $wi, $ua, $i_am_admin;
    $wi[aa] = explode("-", $wi[i_aa]);
    $wi[ap] = explode("-", $wi[i_ap]);
    $wi[ac] = explode("-", $wi[i_ac]);
    $wi[at] = explode("|", $wi[i_at]);
    $wi[an] = explode("|", $wi[i_ana]);
    $wi[na] = max(0, count($wi[aa])-2);
    $wi[np] = max(0, count($wi[ap])-2);
    $wi[nc] = max(0, count($wi[ac])-2);
    $wi[nt] = max(0, count($wi[at])-2);
    $wi[nn] = max(0, count($wi[an])-2);
    for ($x=1; $x<$wi[na]+1; $x++) {
      $wi[ba][$wi[aa][$x]] = 1;
    }
    for ($x=1; $x<$wi[nc]+1; $x++) {
      $wi[bc][$wi[ac][$x]] = 1;
    }
    for ($x=1; $x<$wi[nt]+1; $x++) {
      $wi[bt][$wi[at][$x]] = 1;
    }
    for ($x=1; $x<$wi[np]+1; $x++) {
      $wi[bp][$wi[ap][$x]] = 1;
    }
    if (($ua[u_id] == $wi[u_id]) || ($i_am_admin)) $wi[editable] = 1;
  }
  
  function show_painting($a_id, $p_id, $width, $height) {
    GLOBAL $url_art;
    $img_url = "$url_art/$a_id/".str_pad($p_id, 4, '0', STR_PAD_LEFT).".jpg";
    $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$a_id' AND p_id='$p_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    //echo "$w[p_width]/$w[p_height] > $width/$height<br>";
    if ($w[p_height] > 0) $coef = $w[p_width]/$w[p_height];
    else $coef = 1;
    if ($coef > $width/$height) $wi = "width=$width";
    else $he = "height=$height";
    echo "<img $wi $he align=top src=$img_url>";
    return $img_url;
  }
  
  function show_integration_tags($w, $show_links=0) {
    GLOBAL $url_main;
    if ($w[ep_id] > 0) {
      $r2 = mysql_query("SELECT * FROM ep_atags WHERE a_id='$w[ep_id]'");
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      echo mysql_error();
      if ($n2 > 0) echo "<br><font color=gray>";
      for ($x=0; $x<$n2; $x++) {
        $w2 = mysql_fetch_assoc($r2);
        if ($x>0) echo ", ";
        //echo "<a href='works.php?tag=$w2[t_name]'>";
        if ($show_links) echo "<a target=_blank href='$url_main/epquiz/works.php?tag=$w2[t_name]'>";
        if (strpos($w2[l_type], 'opposed') !== false) echo "<font color=red>";
        elseif ($w2[l_type] != '') echo "<font color=#bbbbbb>";
        else echo "<font color=green>";
        echo "$w2[t_name]</font>";
        if ($show_links) echo "</a>";
      }
      echo "<br>";
    }
    if ($w[aq_id]>0) {
      $r2 = mysql_query("SELECT * FROM aq_artists WHERE a_id='$w[aq_id]'");
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      $ta = explode(",", $w2[a_genre]);
      for ($x=0; $x<count($ta); $x++) {
        if ($x>0) echo ", ";
        $ta[$x] = trim($ta[$x]);
        if ($show_links) echo "<a target=_blank href='$url_main/aquiz/artists.php?tag=$ta[$x]'>";
        echo "$ta[$x]";
        if ($show_links) echo "</a>";
      }
      echo "<br>";
    }
    if ($w[cc_id]>0) {
      $r2 = mysql_query("SELECT * FROM cc_composers WHERE c_id='$w[cc_id]'");
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      echo "$w2[p_name]";
      if (strlen($w2[c_group])>1) echo ", $w2[c_group]";
      echo "<br>";
    }
  }

?>
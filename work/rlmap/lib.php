<?
  if ($cache_enabled>0) {
    $memo = new Memcache;
    $memo->connect('localhost', 11211);
  }

  function start_time2() {
    GLOBAL $starttime, $starttime2;
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    if ($starttime2 == 0) $starttime2 = $mtime;
    $starttime = $mtime; 
  }

  function stop_time2($st="", $show=1) {
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
    // Set all subsequent views to child
    $view_child=1;
    // Restart timer
    start_time2();
  }
  
  function start_cache($suffix) {
    GLOBAL $memo, $us, $cache_enabled;
    start_time();
    if ($cache_enabled==0) return;
    $ref=$_SERVER[REQUEST_URI]."/$suffix";
    $st = $memo->get($ref);
    if ($st !== false) {
      echo $st;
      stop_time("memcached");
      exit;
    }
    /* Else we memorize the output with ob_start. */
    ob_start();  
  }
  
  function stop_cache($suffix) {
    GLOBAL $memo, $us, $cache_enabled, $cache_limit;
    if ($cache_enabled>0) {
      $ref=$_SERVER[REQUEST_URI]."/$suffix";
      if (ob_get_length() < $cache_limit) {
        stop_time("caching");
        $st = ob_get_flush(); 
        $memo->set($ref, $st, MEMCACHE_COMPRESSED, 3600*24); // Duration in seconds
      }
    }
    stop_time();
  }

  function flush_cache() {
    GLOBAL $memo, $cache_enabled;
    if ($cache_enabled>0) $memo->flush();
  }
  
  function is_mobile() {
    GLOBAL $us;
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|Android|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) return 1;
    //if ($us[u_name] == "Rualark") echo $_SERVER['HTTP_USER_AGENT'];
    return 0;
  }
  
  function myexec($path, $fh) {
    //$output = shell_exec( $path );
    exec( $path, $ra, $rv );
    //_exec($path);
    //pclose(popen($path, "r"));
    for ($x=0; $x<count($ra); $x++) $output .= $ra[$x]."<br>";
    $path = iconv("cp866", "windows-1251", $path);
    $output = iconv("cp866", "windows-1251", $output);
    echo $path."<br>";
    fwrite($fh, $path."\n");
    if ($rv != 0) echo "<font color=red>";
    else echo "<font color=green>";
    echo "<b>";
    echo "Output: <br>". $output."<br>";
    echo "</font></b>";
    fwrite($fh, $output."\n");
  }

  function symlink2($target, $link) {
    exec("del \"$link\"");
    exec("mklink \"$link\" \"$target\"");
  }
  
  function make_color($r, $g=-1, $b=-1)
  {
    if (is_array($r) && sizeof($r) == 3)
        list($r, $g, $b) = $r;

    $r = intval($r); 
    $g = intval($g);
    $b = intval($b);

    $r = dechex($r<0?0:($r>255?255:$r));
    $g = dechex($g<0?0:($g>255?255:$g));
    $b = dechex($b<0?0:($b>255?255:$b));

    $color = (strlen($r) < 2?'0':'').$r;
    $color .= (strlen($g) < 2?'0':'').$g;
    $color .= (strlen($b) < 2?'0':'').$b;
    return '#'.$color;
  }

  function secure_variable($st) {
    GLOBAL ${$st};
    if (isset($_GET[$st])) ${$st} = mysql_real_escape_string($_GET[$st]);
  }

  function secure_variable_post($st) {
    GLOBAL ${$st};
    if (isset($_POST[$st])) ${$st} = mysql_real_escape_string($_POST[$st]);
  }

  function rnd($x1, $x2) {
    return ($x2-$x1)*(mt_rand()/mt_getrandmax())+$x1;
  }
  
  function write_log($path, $st) {
    $fh = fopen($path, "a");
    fputs($fh, $st."\n");
    fclose($fh);
  }

  function protect_session() {
    GLOBAL $session_tag;
    secure_variable("session_tag");
    if (!isset($session_tag)) {
      //write_log("log/cquiz-session.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." Attempt to start session blocked: ".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
      die("<a href=?session_tag=".microtime(true).">Start new session</a>");
    }
    
    if ((microtime(true)-$session_tag)>30) {
      write_log("log/cquiz-session.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." Tried to use timed out session: ".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
      die("This session is timed out. You need to <a href=?>start new session</a>");
    }
    write_log("log/cquiz-session.log", date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." Started session: ".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
  }

  function has_cyr($st) {
    return !preg_match('/[]/', $st);
  }

  function meta_conv($meta) {
    //echo has_cyr($meta)?1:0;
    //echo "А-я";
    return str_replace("?", "", mb_convert_encoding(mb_convert_encoding($meta, "CP1252", "UTF-8"), "UTF-8", "CP1251"));
    //return $meta;
  }
  
  function make_country_color($st) {
    GLOBAL $countrycolor;
    $color = "gray";
    if ($countrycolor == 0) return $color;
    if (strpos($st, "USA") !== FALSE) $color="black";
    if (strpos($st, "CAN") !== FALSE) $color="black";
    if (strpos($st, "ITA") !== FALSE) $color="red";
    if (strpos($st, "FRA") !== FALSE) $color="blue";
    if (strpos($st, "FLM") !== FALSE) $color="blue";
    if (strpos($st, "ENG") !== FALSE) $color="green";
    if (strpos($st, "BRI") !== FALSE) $color="green";
    if (strpos($st, "IRL") !== FALSE) $color="green";
    if (strpos($st, "DNK") !== FALSE) $color="darkbrown";
    if (strpos($st, "DEU") !== FALSE) $color="brown";
    if (strpos($st, "AUT") !== FALSE) $color="brown";
    if (strpos($st, "ESP") !== FALSE) $color="orange";
    if (strpos($st, "EST") !== FALSE) $color="yellow";
    if (strpos($st, "HUN") !== FALSE) $color="yellow";
    if (strpos($st, "CHE") !== FALSE) $color="yellow";
    if (strpos($st, "CZE") !== FALSE) $color="yellow";
    if (strpos($st, "POL") !== FALSE) $color="yellow";
    if (strpos($st, "BOH") !== FALSE) $color="yellow";
    if (strpos($st, "ARM") !== FALSE) $color="yellow";
    if (strpos($st, "FIN") !== FALSE) $color="lightblue";
    if (strpos($st, "NOR") !== FALSE) $color="lightblue";
    if (strpos($st, "ARG") !== FALSE) $color="lightgreen";
    if (strpos($st, "BRA") !== FALSE) $color="lightgreen";
    if (strpos($st, "RUS") !== FALSE) $color="pink";
    return $color;
  }

  function make_country_bgcolor($st) {
    GLOBAL $countrycolor;
    $color = "white";
    if ($countrycolor == 0) return $color;
    if (strpos($st, "EST") !== FALSE) $color="#333333";
    if (strpos($st, "HUN") !== FALSE) $color="#333333";
    if (strpos($st, "CHE") !== FALSE) $color="#333333";
    if (strpos($st, "CZE") !== FALSE) $color="#333333";
    if (strpos($st, "POL") !== FALSE) $color="#333333";
    if (strpos($st, "BOH") !== FALSE) $color="#333333";
    if (strpos($st, "ARM") !== FALSE) $color="#333333";
    if (strpos($st, "FIN") !== FALSE) $color="#333333";
    if (strpos($st, "NOR") !== FALSE) $color="#333333";
    if (strpos($st, "ARG") !== FALSE) $color="#333333";
    if (strpos($st, "BRA") !== FALSE) $color="#333333";
    if (strpos($st, "RUS") !== FALSE) $color="#333333";
    return $color;
  }
  
  /**
   * linear regression function
   * @param $x array x-coords
   * @param $y array y-coords
   * @returns array() m=>slope, b=>intercept
   */
  function linear_slope($y) {
    // calculate number points
    $n = count($y);
    // calculate sums
    $y_sum = array_sum($y);
    $x_sum = $n*($n+1)/2;
    $xx_sum = $n*($n+1)*(2*$n+1)/6;
    for ($i = 0; $i < $n; $i++) $xy_sum += ($i+1)*$y[$i];
    // calculate slope
    return (($n * $xy_sum) - ($x_sum * $y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));
  }
  
  function shn0 ($st) {
    if ($st>0) return $st;
    return "";
  }
  
  function sh0 ($st) {
    return ($st+0);
  }
  
  function mysql_query2($current_query) {
    GLOBAL $mysql_last_query;
    $mysql_last_query = $current_query;
    return mysql_query($current_query);
  }
  
  function mysql_report_error() {
    GLOBAL $us, $mysql_last_query;
    $st = mysql_error();
    if (mysql_errno()>0) {
      $e = new Exception();
      $url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
      $err_st = date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." $us[u_name] $us[u_email]\n$url\n\n$st\n$mysql_last_query \n".$e->getTraceAsString();
      // \nGET variables: ".print_r($_GET, true)."
      write_log("log/errors.log", $err_st);
      // Mail
      $to      = 'ComposerQuiz@gmail.com';
      $subject = "Mysql error at CQuiz site ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['PHP_SELF']." $us[u_name]";
      mail($to, $subject, $err_st);
      //debug_print_backtrace();
    }
    if ($st != "") $st = "<font color=red><b>Error was detected and reported to site administrator. Error is usually fixed in 3-6 days. Sorry for inconvenience.</b></font> $st";
    return $st;
  }
  
  function shutdown_function() {
?>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-56489282-1'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<meta name="google-translate-customization" content="2c16862c6818cb4f-40aa3c18304bc320-gd3960cc9cb59f247-18"></meta>
<?
  }
?>
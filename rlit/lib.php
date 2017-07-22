<?
  include "../mysql.php";
  include "../url.php";
  include "config.php";
  
  $max_lines = 30; // for question
  $max_lines2 = 1000; // for viewing
  $max_letters = 2000;
  $button_height = 40;
  $max_desc = 200; // Maximum description length for quiz window
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) $i_am_local = 1;
  
  $mr_levels = array(
  6385 => 30, 4843 => 60, 3938 => 100, 2876 => 150, 2451 => 200, 2033 => 250, 1747 => 300, 1290 => 400, 993 => 500, 664 => 700, 474 => 1000, 34 => 1500, 2 => 2000, -10000 => 2404);
  
  $mr_levels_b = array(
  6325 => 30, 4650 => 60, 3738 => 100, 2646 => 150, 2034 => 200, 1651 => 250, 1349 => 300, 885 => 400, 582 => 500, 178 => 700, 24 => 1000, 4 => 1500, -10000 => 2060);
  
  $mr_levels_f = array(
  574 => 30, 443 => 60, 196 => 100, 154 => 150, 99 => 200, 92 => 250, 79 => 300, 57 => 400, 37 => 500, 18 => 700, -10000 => 836);

  $mr_levels_i = array(10, 20, 50, 100, 200, 500);
  $color = array("black", "red", "green", "blue", "#8800aa", "violet", "brown", "orange", "magenta", "#ffaaaa", "#00bbbb", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666", "#666666");
  
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

?>
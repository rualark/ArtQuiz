<?
  include "mysql.php";
  
  function myfile($name) {
    $bn = basename($name);
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    //$ln = str_replace(".", "-", $ln);
    $ln = "cache/".$ln.".htm";
    if (file_exists($ln)) return file($ln);
    //usleep(100000);
    file_put_contents($ln, file_get_contents($name));
    return file($ln);
  }

  $q = "SELECT * FROM cc_composers LEFT JOIN cc_periods USING (p_name)";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $p_name = "";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    echo "$w[c_name4] ";
    $sa = explode(" ", $w[c_name3]);
    $surname = $sa[count($sa)-1];
    $fa = myfile("http://www.merriam-webster.com/dictionary/$surname");
    $sf2 = "onclick=\"return au('";
    for ($x=0; $x<count($fa); $x++) {
      $st = $fa[$x];
      if (strpos($st, $sf2) !== false) {
        echo "--- ";
        $aid = substr($st, strpos($st, $sf2)+strlen($sf2), strlen($st));
        $aid = substr($aid, 0, strpos($aid, "'"));
        echo "$aid";
        break;
      }
    }
    echo "<br>";
    if ($i>20) break;
  }
?>
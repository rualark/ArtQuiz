<?
  include "mysql.php";

  function myfile($name, $path="cache", $fname="", $load=1) {
    $bn = basename($name);
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "../../classclass/$path/".$ln;
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return;
    }
    //usleep(100000);
    file_put_contents($ln, file_get_contents($name));
    if ($load>0) return file($ln);
  }
  
  $q = "SELECT * FROM cc_composers WHERE c_years='' ORDER BY c_id";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  $sf1 = "src=\"/images/cpic";
  $sf2 = "src=\"/images/artists_cma";
  $sf3 = "<span class=\"person_details\">(";
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    $qst = str_replace(" ", "%20", $w[c_name]);
    echo "<a href=http://en.wikipedia.org/w/index.php?search=$qst>$w[c_name]</a><br>";
    $fa = myfile("http://www.classicalarchives.com/composer/$w[c_caid].html");
    for ($x=0; $x<count($fa); $x++) {
      $st = $fa[$x];
      if (strpos($st, $sf1) !== false) {
        $st2 = substr($st, strpos($st, $sf1)+5, strlen($st));
        $st2 = substr($st2, 0, strpos($st2, "\""));
        $url = "http://www.classicalarchives.com$st2";
        echo "<img src=$url><br>";
        myfile($url, "cpic", "$w[c_id].jpg", 0);
        break;
      }
      if (strpos($st, $sf2) !== false) {
        $st2 = substr($st, strpos($st, $sf2)+5, strlen($st));
        $st2 = substr($st2, 0, strpos($st2, "\""));
        $url = "http://www.classicalarchives.com$st2";
        echo "<img src=$url><br>";
        myfile($url, "cpic", "$w[c_id].jpg", 0);
        break;
      }
      $pos3 = strpos($st, $sf3);
      if ($pos3 !== false) {
        $st2 = substr($st, $pos3+strlen($sf3));
        $years = substr($st2, 0, strpos($st2, ")"));
        $country = substr($st2, strpos($st2, ";")+2);
        $country = substr($country, 0, strpos($country, "<"));
        $start = substr($years, 0, strpos($years, "-"));
        $stop = substr($years, strpos($years, "-")+1);
        echo "$w[c_name] $years $start/$stop $country<br>";
        $q = "UPDATE cc_composers SET 
          c_years = '$years',
          c_start = '$start',
          c_stop = '$stop',
          c_country = '$country'
        WHERE c_id='$w[c_id]'";
        echo "$q<br>";
        mysql_query($q);
        echo mysql_error();
      }
    }
    //if ($i>10) break;
  }
  
  // Check classicalarchives
  $q = "SELECT * FROM cc_composers WHERE c_id>305 and c_caid>0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w=mysql_fetch_array($r);
    echo "$w[c_id] $w[c_name] <a href=http://www.classicalarchives.com/composer/$w[c_caid].html>$w[c_caid]</a><br>";
  }
?>
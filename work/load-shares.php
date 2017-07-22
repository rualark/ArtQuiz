<?
  include "mysql.php";
  include "url.php";
  include "style.php";
  
  $mr_levels = array(
  1500 => 30, 1000 => 60, 785 => 100, 564 => 150, 510 => 200, 465 => 250, 415 => 300, 257 => 400, 142 => 500, 37 => 700, -774 => 1000);
  $prize_cor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200, 250, 300, 400, 500, 600, 700, 800, 900, 1000);
  
  function show_table($q) {
    //GLOBAL $par_name;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<p><table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    $i = 0;
    while($row = mysql_fetch_assoc($r)) {
        if ($i == 0) {
          $i++;
          echo "<tr>";
          foreach ($row as $key => $value) {
            //$pname = $par_name[$key];
            //if ($pname == '') 
            $pname = $key;
            echo "<th>" . $pname . "</th>";
          }
          echo "</tr>";
        }
        echo "<tr>";
        foreach ($row as $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";  
  }
  
  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    //print_r($return);
    curl_close($ch);
    return $return;
  }

  $date = date("Y-m-d H:i:s");
  
  $quiz_shares = array('pquiz/pquiz.php', 'pquiz-lim/pquiz.php', 'rlit/pquiz.php', 'epquiz/pquiz.php');
  
  mysql_query("DELETE FROM shares");
  echo mysql_error();
  foreach ($shares_array as $title => $val) {
    $url = $val[0];
    $url2 = "https://graph.facebook.com/$url_share$url?access_token=756707864497611|24ae522c09a3ad09818e4613cf96afb6";
    $st = file_get_contents2($url2);
    $ju = json_decode($st);
    $sc = $ju->{share}->{share_count};
    /*
    $url2 = "https://graph.facebook.com/$url_share$url/?access_token=756707864497611|24ae522c09a3ad09818e4613cf96afb6";
    $st2 = file_get_contents2($url2);
    $ju = json_decode($st2);
    $sc += $ju->{share}->{share_count};
    */
    echo "$url2 - $sc<br>";
    $project = str_replace('/', '', $url);
    mysql_query("INSERT INTO shares VALUES('$date', '$url_share', '$title', '$project', '', '', '', '', '$sc', '$st')");
    echo mysql_error();
    //break;
    usleep(1000000);
    if (strpos($st, 'error') !== false) die("<p>Error detected: $st");
  }
  foreach ($quiz_shares as $key => $url) {
    foreach ($prize_cor as $key2 => $prize) {
      foreach ($mr_levels as $key3 => $qnum) {
        $share = base64_encode(gzcompress("$prize:$qnum"));
        $url2 = "https://graph.facebook.com/$url_share/$url%3Fshare=$share?access_token=756707864497611|24ae522c09a3ad09818e4613cf96afb6";
        $st = file_get_contents2($url2);
        $ju = json_decode($st);
        //echo "<pre>";
        //echo $st;
        $sc = $ju->{share}->{share_count};
        echo "$url2 - $sc<br>";
        $project = substr($url, 0, strpos($url, '/'));
        $url3 = substr($url, strpos($url, '/')+1);
        mysql_query("INSERT INTO shares VALUES('$date', '$url_share', '', '$project', '$url3', '$share', '$qnum', '$prize', '$sc', '$st')");
        echo mysql_error();
        //exit;
        usleep(1000000);
        if (strpos($st, 'error') !== false) die("<p>Error detected: $st");
      }
    }
  }
  
  show_table("SELECT s_project, SUM(s_count) AS cnt FROM shares WHERE s_time='$date' GROUP BY s_project");
?>

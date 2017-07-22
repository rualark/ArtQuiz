<?
  include "mysql.php";
  include "url.php";
  include "lib.php";
  include "style.php";
  
  secure_variable('act');
  secure_variable('d');
  secure_variable('p');
  secure_variable('ctype');
  
  $hits_table = 'hits_b';
  
  $mr_levels = array(
  1500 => 30, 1000 => 60, 785 => 100, 564 => 150, 510 => 200, 465 => 250, 415 => 300, 257 => 400, 142 => 500, 37 => 700, -774 => 1000);
  $prize_cor = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 150, 200, 250, 300, 400, 500, 600, 700, 800, 900, 1000);
  
  $curvet = 'function';
  
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

  function show_share($title) {
    GLOBAL $shares_array, $url_share;
    echo "<tr><td><a target=_blank href='$url_share".$shares_array[$title][0]."'>$title<td>";
    show_share_link($title);
  }
  
  function draw_chart($id, $wx, $wy, $wp, $days) {
    GLOBAL $analytics_projects, $ctype, $curvet, $hits_table;
    echo "<script type='text/javascript'>";
    echo "google.setOnLoadCallback(drawChart$id);";
    echo "function drawChart$id() {";
    echo "var data = new google.visualization.DataTable();";
    echo "data.addColumn('string', 'Day');\n";
    foreach ($analytics_projects as $key => $project_name) {
      $pa[] = $project_name;
      echo "data.addColumn('number', '$project_name');\n";
      echo "data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});\n";
    }
    $n3 = count($pa);
    // Get data
    echo "data.addRows([";
    $q = "SELECT h_project, DATE(h_time) as hdate, COUNT(*) as hcnt, COUNT(DISTINCT h_ip) as ucnt
      FROM $hits_table
      WHERE h_time >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
      GROUP BY h_project, DATE(h_time)
    ";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $da[$w[hdate]][$w[h_project]] = $w[hcnt];
      $da2[$w[hdate]][$w[h_project]] = $w[ucnt];
      $das[$w[hdate]] += $w[hcnt];
      $da2s[$w[hdate]] += $w[ucnt];
    }  
    foreach ($da as $key => $val) {
      echo "['$key',";
      for ($x=0; $x<$n3; $x++) {
        $v = $val[$pa[$x]];
        if ($v == 0) echo "null,"; 
        else echo $v.",";
        echo "'<b>$key</b> $pa[$x]<br>$v of $das[$key] pageviews<br>".$da2[$key][$pa[$x]]." of $da2s[$key] users<br><a href=?act=log&d=$key&p=$pa[$x]>Show details</a>',";
      }
      echo "],\n";
    }
    echo "]);";
    echo "var options$ids = {";
    echo "title: 'Pageviews by project',";
    echo "legend: {position: 'right', textStyle: {color: 'Black', fontSize: 12}},";
    //echo "legend: {position: 'none'},";
    echo "curveType: '$curvet',";
    echo "lineWidth: 3,";
    echo "chartArea: {'width': '$wp', 'height': '70%', left: '5%'},";
    echo "vAxis: { minValue: 0, title: 'Pageviews', viewWindowMode: 'explicit', viewWindow:{ min: 0 },";
    if ($ctype == 'LineChart') echo "logScale: true";
    echo " },";
    echo "hAxis: { title: 'Day' },";
    echo "tooltip: { isHtml: true, trigger: 'selection' },";
    if ($ctype == 'ColumnChart') echo "isStacked: true,";
    echo "pointSize: 5,";
    echo "backgroundColor: '#FAFAFA',";
    echo "intervals: { 'style':'area', 'fillOpacity': 0.2 },";
    echo "};";
    
    echo "var chart$id = new google.visualization.$ctype(document.getElementById('chart$id'));";
    echo "chart$id.draw(data, options$ids);";
    echo "}";
    echo "</script>";
    echo "<div id=chart$id style='display: inline-block; width: {$wx}px; height: {$wy}px;'></div>";
  }
  
  function draw_chart2($id, $wx, $wy, $wp, $days) {
    GLOBAL $log_projects, $ctype, $curvet;
    echo "<script type='text/javascript'>";
    echo "google.setOnLoadCallback(drawChart$id);";
    echo "function drawChart$id() {";
    echo "var data = new google.visualization.DataTable();";
    echo "data.addColumn('string', 'Day');\n";
    foreach ($log_projects as $project_name => $val) {
      $pa[] = $project_name;
      echo "data.addColumn('number', '$project_name');\n";
      echo "data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});\n";
    }
    $n3 = count($pa);
    // Get data
    echo "data.addRows([";
    foreach ($log_projects as $project_name => $pd) {
      if ($days > 300) {
        $q = "SELECT DATE_FORMAT($pd[1], '%Y-%m') AS ldate, COUNT(*) as lcnt, COUNT(DISTINCT $pd[2]) as ucnt
          FROM $pd[0]
          WHERE $pd[1] >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
          GROUP BY YEAR($pd[1]), MONTH($pd[1])
        ";
      } else {
        $q = "SELECT DATE($pd[1]) AS ldate, COUNT(*) as lcnt, COUNT(DISTINCT $pd[2]) as ucnt
          FROM $pd[0]
          WHERE $pd[1] >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
          GROUP BY DATE($pd[1])
        ";
      }
      //echo "\n$q\n";
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        $da[$w[ldate]][$project_name] = $w[lcnt];
        $da2[$w[ldate]][$project_name] = $w[ucnt];
        $das[$w[ldate]] += $w[lcnt];
        $da2s[$w[ldate]] += $w[ucnt];
      }  
    }
    ksort($da);
    foreach ($da as $key => $val) {
      echo "['$key',";
      for ($x=0; $x<$n3; $x++) {
        $v = $val[$pa[$x]];
        if ($v == 0) echo "null,"; 
        else echo $v.",";
        echo "'<b>$key</b> $pa[$x]<br>$v of $das[$key] games<br>".$da2[$key][$pa[$x]]." of $da2s[$key] users<br><a href=?act=log2&d=$key&p=$pa[$x]>Show details</a>',";
      }
      echo "],\n";
    }
    echo "]);";
    echo "var options$ids = {";
    echo "title: 'Games by project',";
    echo "legend: {position: 'right', textStyle: {color: 'Black', fontSize: 12}},";
    //echo "legend: {position: 'none'},";
    echo "curveType: '$curvet',";
    echo "lineWidth: 3,";
    echo "chartArea: {'width': '$wp', 'height': '70%', left: '5%'},";
    echo "vAxis: { minValue: 0, title: 'Games', viewWindowMode: 'explicit', viewWindow:{ min: 0 },";
    if ($ctype == 'LineChart') echo "logScale: true";
    echo " },";
    if ($days>300) echo "hAxis: { title: 'Month' },";
    else echo "hAxis: { title: 'Day' },";
    if ($ctype == 'ColumnChart') echo "isStacked: true,";
    echo "tooltip: { isHtml: true, trigger: 'selection' },";
    echo "pointSize: 5,";
    echo "backgroundColor: '#FAFAFA',";
    echo "intervals: { 'style':'area', 'fillOpacity': 0.2 },";
    echo "};";
    
    echo "var chart$id = new google.visualization.$ctype(document.getElementById('chart$id'));";
    echo "chart$id.draw(data, options$ids);";
    echo "}";
    echo "</script>";
    echo "<div id=chart$id style='display: inline-block; width: {$wx}px; height: {$wy}px;'></div>";
  }
  
  function draw_chart3($id, $wx, $wy, $wp, $days) {
    GLOBAL $analytics_projects, $ctype, $curvet, $hits_table;
    echo "<script type='text/javascript'>";
    echo "google.setOnLoadCallback(drawChart$id);";
    echo "function drawChart$id() {";
    echo "var data = new google.visualization.DataTable();";
    echo "data.addColumn('string', 'Day');\n";
    foreach ($analytics_projects as $key => $project_name) {
      $pa[] = $project_name;
      echo "data.addColumn('number', '$project_name');\n";
      echo "data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});\n";
    }
    $n3 = count($pa);
    // Get data
    echo "data.addRows([";
    $q = "SELECT h_project, DATE(h_time) as hdate, COUNT(*) as hcnt, COUNT(DISTINCT h_ip) as ucnt
      FROM $hits_table
      WHERE h_time >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
      GROUP BY h_project, DATE(h_time)
    ";
    //echo $q;
    $r = mysql_query($q);
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($i=0; $i<$n; $i++) {
      $w = mysql_fetch_array($r);
      $da[$w[hdate]][$w[h_project]] = $w[hcnt];
      $da2[$w[hdate]][$w[h_project]] = $w[ucnt];
      $das[$w[hdate]] += $w[hcnt];
      $da2s[$w[hdate]] += $w[ucnt];
    }  
    foreach ($da2 as $key => $val) {
      echo "['$key',";
      for ($x=0; $x<$n3; $x++) {
        $v = $val[$pa[$x]];
        if ($v == 0) echo "null,"; 
        else echo $v.",";
        echo "'<b>$key</b> $pa[$x]<br>$v of $das[$key] users<br>".$da[$key][$pa[$x]]." of $da2s[$key] pageviews<br><a href=?act=log&d=$key&p=$pa[$x]>Show details</a>',";
      }
      echo "],\n";
    }
    echo "]);";
    echo "var options$ids = {";
    echo "title: 'Users by project',";
    echo "legend: {position: 'right', textStyle: {color: 'Black', fontSize: 12}},";
    //echo "legend: {position: 'none'},";
    echo "curveType: '$curvet',";
    echo "lineWidth: 3,";
    echo "chartArea: {'width': '$wp', 'height': '70%', left: '5%'},";
    echo "vAxis: { minValue: 0, title: 'Users', viewWindowMode: 'explicit', viewWindow:{ min: 0 },";
    if ($ctype == 'LineChart') echo "logScale: true";
    echo " },";
    echo "hAxis: { title: 'Day' },";
    echo "tooltip: { isHtml: true, trigger: 'selection' },";
    echo "pointSize: 5,";
    if ($ctype == 'ColumnChart') echo "isStacked: true,";
    echo "backgroundColor: '#FAFAFA',";
    echo "intervals: { 'style':'area', 'fillOpacity': 0.2 },";
    echo "};";
    
    echo "var chart$id = new google.visualization.$ctype(document.getElementById('chart$id'));";
    echo "chart$id.draw(data, options$ids);";
    echo "}";
    echo "</script>";
    echo "<div id=chart$id style='display: inline-block; width: {$wx}px; height: {$wy}px;'></div>";
  }
  
  function draw_chart4($id, $wx, $wy, $wp, $days) {
    GLOBAL $log_projects, $ctype, $curvet;
    echo "<script type='text/javascript'>";
    echo "google.setOnLoadCallback(drawChart$id);";
    echo "function drawChart$id() {";
    echo "var data = new google.visualization.DataTable();";
    echo "data.addColumn('string', 'Day');\n";
    foreach ($log_projects as $project_name => $val) {
      $pa[] = $project_name;
      echo "data.addColumn('number', '$project_name');\n";
      echo "data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});\n";
    }
    $n3 = count($pa);
    // Get data
    echo "data.addRows([";
    foreach ($log_projects as $project_name => $pd) {
      if ($days > 300) {
        $q = "SELECT DATE_FORMAT($pd[1], '%Y-%m') AS ldate, COUNT(*) as lcnt, COUNT(DISTINCT $pd[2]) as ucnt
          FROM $pd[0]
          WHERE $pd[1] >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
          GROUP BY YEAR($pd[1]), MONTH($pd[1])
        ";
      } else {
        $q = "SELECT DATE($pd[1]) AS ldate, COUNT(*) as lcnt, COUNT(DISTINCT $pd[2]) as ucnt
          FROM $pd[0]
          WHERE $pd[1] >= DATE_ADD(CURDATE(), INTERVAL -$days DAY)
          GROUP BY DATE($pd[1])
        ";
      }
      //echo "\n$q\n";
      $r = mysql_query($q);
      echo mysql_error();
      $n = mysql_numrows($r);
      for ($i=0; $i<$n; $i++) {
        $w = mysql_fetch_array($r);
        $da[$w[ldate]][$project_name] = $w[lcnt];
        $da2[$w[ldate]][$project_name] = $w[ucnt];
        $das[$w[ldate]] += $w[lcnt];
        $da2s[$w[ldate]] += $w[ucnt];
      }  
    }
    ksort($da2);
    foreach ($da2 as $key => $val) {
      echo "['$key',";
      for ($x=0; $x<$n3; $x++) {
        $v = $val[$pa[$x]];
        if ($v == 0) echo "null,"; 
        else echo $v.",";
        echo "'<b>$key</b> $pa[$x]<br>$v of $da2s[$key] users<br>".$da[$key][$pa[$x]]." of $das[$key] games<br><a href=?act=log2&d=$key&p=$pa[$x]>Show details</a>',";
      }
      echo "],\n";
    }
    echo "]);";
    echo "var options$ids = {";
    echo "title: 'Played users by project',";
    echo "legend: {position: 'right', textStyle: {color: 'Black', fontSize: 12}},";
    //echo "legend: {position: 'none'},";
    echo "curveType: '$curvet',";
    echo "lineWidth: 3,";
    echo "chartArea: {'width': '$wp', 'height': '70%', left: '5%'},";
    echo "vAxis: { minValue: 0, title: 'Users', viewWindowMode: 'explicit', viewWindow:{ min: 0 },";
    if ($ctype == 'LineChart') echo "logScale: true";
    echo " },";
    if ($days>300) echo "hAxis: { title: 'Month' },";
    else echo "hAxis: { title: 'Day' },";
    if ($ctype == 'ColumnChart') echo "isStacked: true,";
    echo "tooltip: { isHtml: true, trigger: 'selection' },";
    echo "pointSize: 5,";
    echo "backgroundColor: '#FAFAFA',";
    echo "intervals: { 'style':'area', 'fillOpacity': 0.2 },";
    echo "};";
    
    echo "var chart$id = new google.visualization.$ctype(document.getElementById('chart$id'));";
    echo "chart$id.draw(data, options$ids);";
    echo "}";
    echo "</script>";
    echo "<div id=chart$id style='display: inline-block; width: {$wx}px; height: {$wy}px;'></div>";
  }
  
  start_time();

  if ($act == 'log') {
    echo "<h3>Logs for $p from $d</h3>";
    show_table("SELECT h_time, h_ip, h_script, LEFT(h_params, 1000) FROM $hits_table WHERE DATE(h_time) = '$d' AND h_project='$p'");
    stop_time();
    exit;
  }

  if ($act == 'log2') {
    echo "<h3>Games for $p from $d</h3>";
    $pa = $log_projects[$p];
    if (strlen($d) < 8) {
      show_table("SELECT * FROM $pa[0] WHERE DATE_FORMAT($pa[1], '%Y-%m') = '$d'");
    } else {
      show_table("SELECT * FROM $pa[0] WHERE DATE($pa[1]) = '$d'");
    }
    stop_time();
    exit;
  }

  echo '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
  echo '<script type="text/javascript">';
  echo 'google.load("visualization", "1", {packages:["corechart"]});';
  echo '</script>';
  
  $date = date("Y-m-d H:i:s");
  
  echo "<center><h2>ArtQuiz Portal social shares</h2>";
  echo "<table>";
  foreach ($shares_array as $title => $val) {
    show_share($title);
  }
  echo "<tr><td><a target=_blank href='http://alch.strangled.net/cquiz'>Old cquiz</a><td>";
  share_link("http://alch.strangled.net/cquiz", "Old cquiz", "Old cquiz", "");
  share_link("http://alch.strangled.net/cquiz/", "Old cquiz", "Old cquiz", "", 'facebook,vkontakte');
  
  echo "<tr><td><a target=_blank href='http://theclassicalcomposers.com'>Simple cquiz</a><td>";
  share_link("http://theclassicalcomposers.com", "Simple cquiz", "Simple cquiz", "");
  share_link("http://theclassicalcomposers.com/", "Simple cquiz", "Simple cquiz", "", 'facebook,vkontakte');
  
  echo "</table>";
  
  echo "<h2>Links to wikipedia</h2>";
  echo "<table><tr><td>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:Graphical_timeline_of_painters_with_styles.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=https://en.wikipedia.org/wiki/List_of_painters_by_name>Artists map</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:Composers_timeline.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=https://en.wikipedia.org/wiki/List_of_classical_music_composers_by_era>Composers map</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:Timeline_of_philosophers_with_schools.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Philosophers map</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:Poets_timeline.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Poets map</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D1%84%D0%B8%D0%BB%D0%BE%D1%81%D0%BE%D1%84%D0%BE%D0%B2.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Карта философов</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D0%B5%D0%BB%D0%B5%D0%B9.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Карта писателей</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D0%B5%D0%BB%D0%B5%D0%B9_(%D0%BF%D0%BE%D0%B4%D1%80%D0%BE%D0%B1%D0%BD%D0%B0%D1%8F).png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Карта писателей (подробная)</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:Literature_timeline.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Literature map</a>";
  echo "<br>";
  echo "<a target=_blank href='https://commons.wikimedia.org/wiki/File:%D0%9A%D0%B0%D1%80%D1%82%D0%B0_%D0%BF%D0%BE%D1%8D%D1%82%D0%BE%D0%B2.png'><img valign=top src=i/painting.png height=18></a>";
  echo " <a target=_blank href=>Карта поэтов</a>";
  echo "<br>";
  echo "<a target=_blank href='https://ru.pinterest.com/alexeyarkhipenk/art-timelines/'>Pinterest: Art timelines</a>";
  echo "<br>";
  echo "<a target=_blank href='https://ru.pinterest.com/alexeyarkhipenk/%D1%85%D1%80%D0%BE%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5-%D0%BA%D0%B0%D1%80%D1%82%D1%8B/'>Pinterest: Хронологические карты</a>";
  echo "<br>";
  
  echo "</table>";

  //echo "<h2>Total facebook social shares</h2>";
  //show_table("SELECT s_time, s_title, s_project, SUM(s_count) FROM shares GROUP BY s_project");
  
  if (!isset($ctype)) $ctype = 'LineChart';
  echo "<p>| <a href=?ctype=LineChart>Logarithmic lines</a> | ";
  echo "<a href=?ctype=ColumnChart>Stacked columns</a> | ";
  echo "<p>";
  draw_chart(1, 1500, 600, "85%", 120);
  echo "<p>";
  stop_time();
  draw_chart3(3, 1500, 600, "85%", 120);
  echo "<p>";
  stop_time();
  draw_chart2(2, 1500, 500, "85%", 120);
  echo "<p>";
  stop_time();
  draw_chart4(4, 1500, 500, "85%", 120);
  echo "<p>";
  stop_time();
  draw_chart2(5, 1500, 500, "85%", 12000);
  echo "<p>";
  stop_time();
  draw_chart4(6, 1500, 500, "85%", 12000);

  echo "<p><a target=_blank href='https://analytics.google.com/analytics/web/?hl=en#report/visitors-overview/a56489282w89949645p93507874/%3F_u.sampleOption%3Dmoreprecision%26_u.sampleSize%3D500000%26_u.dateOption%3Dlast30days/'>Google Analytics pageview statistics</a>";
  echo "<p><a href='$url_main/cquiz/admin.php'>Last registered users</a>";
  stop_time();
?>

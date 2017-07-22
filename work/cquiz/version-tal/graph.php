<?
  include "mysql.php";
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("u_id");
  secure_variable("level");
  
  if (isset($u_id)) load_user($u_id);
  $u_id = $us[u_id];
  if (!isset($level)) $level = $us[u_level];
  
  echo "<script type=text/javascript src=https://www.google.com/jsapi></script>";
  echo "<script type=text/javascript>";
  echo "google.load('visualization', '1', {packages:['corechart']});";
  echo "google.setOnLoadCallback(drawChart);";
  echo "function drawChart() {";
  echo "var data1 = google.visualization.arrayToDataTable([";
  echo "['Date', 'Correct period (%)', 'Correct (%)', 'Rating'],";
  
  $q = "
    SELECT * FROM cc_qlog
    WHERE u_id=$u_id AND u_level=$level
    ORDER BY l_time,l_id
  ";
  $r = mysql_query($q);
  $n = mysql_numrows($r);
  if ($n<5) die ("]);}</script>Not enough answers to build graph. Please answer more questions.");
  $r1 = 0;
  $cor = 0;
  $corp = 0;
  $sec = 0;
  $avcent = 0;
  $data2 = "";
  $wrong_n = 0;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $r1 = ($r1*$i + $w[l_r1])/($i+1);
    $cor = ($cor*$i + $w[l_ok])/($i+1);
    if ($w[l_ok] == 0) {
      $avcent = ($avcent*$wrong_n + abs($w[l_cent]))/($wrong_n+1);
      $wrong_n ++;
    }
    $corp = ($corp*$i + 1-$w[l_wrong2])/($i+1);
    if ($w[l_sec]<3600) $sec = ($sec*$i + $w[l_sec])/($i+1);
    $date = substr($w[l_time], strpos($w[l_time], "-")+1, 100);
    $date = substr($date, 0, strpos($date, " "));
    if ($w[l_sec] < 300) $sec2 = $w[l_sec];;
    if ($i > 0) {
      echo "['$date', $corp, $cor, $r1]\n";
      $data2 .= "['$date', $sec2, $avcent]\n";
      if ($i < $n-1) {
        echo ",";
        $data2 .= ",";
      }
    }
  }
  echo "]);";

  echo "var data2 = google.visualization.arrayToDataTable([";
  echo "['Date', 'Think time (sec)', 'Absolute years mistake'],";
  echo $data2;
  echo "]);";

  echo "var options1 = {
    vAxes: {0: {format: '#'}, 1: {format: '#%'}}, 
    series: {
      0:{ type: 'line', targetAxisIndex: 1 },
      1: { type: 'line', targetAxisIndex: 1},
      2: { type: 'line', targetAxisIndex: 0}
    },
    title: '$us[u_name] graphs for level ".$level_name[$level]."'};";
  echo "var options2 = {
    vAxes: {0: {format: '#'}, 1: {format: '#'}}, 
    series: {
      0:{ type: 'line', targetAxisIndex: 0 },
      1: { type: 'line', targetAxisIndex: 1},
    },
    title: ''};";

  echo "var chart1 = new google.visualization.LineChart(document.getElementById('chart_div1'));";
  echo "chart1.draw(data1, options1); ";
  echo "var chart2 = new google.visualization.LineChart(document.getElementById('chart_div2'));";
  echo "chart2.draw(data2, options2); }";
  echo "</script>";
  echo "<div id=chart_div1 style='width: 900px; height: 450px;'></div>";
  echo "<div id=chart_div2 style='width: 900px; height: 450px;'></div>";
?>
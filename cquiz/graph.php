<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  secure_variable("u_id");
  secure_variable("level");
  secure_variable("cab");
  secure_variable("gab");

  start_time();
  
  if (isset($u_id)) load_user($u_id);
  $u_id = $us[u_id];
  if (!isset($level)) $level = $us[u_level];
  
  echo "<script type=text/javascript src=https://www.google.com/jsapi></script>";
  echo "<script type=text/javascript>";
  echo "google.load('visualization', '1', {packages:['corechart']});";
  echo "google.setOnLoadCallback(drawChart);";
  echo "function drawChart() {";
  echo "var data1 = google.visualization.arrayToDataTable([";
  echo "['Date', {type: 'string', role: 'annotation'}, 'Correct (%)', 'Correct period MA (%)', 'Correct MA (%)', 'Rating', 'Rating MA'],";
  //{type: 'string', role: 'annotation'}
  //{'type': 'string', 'role': 'style'}
  
  $cond = "";
  $title = "level ".$level_name[$level];
  if ($cab!="") {
    load_isle($cab);
    $title = "island $is[i_cst2]";
    if (($is[i_cnum] > 5) && ($is[i_name] != "")) $title = "island [$is[i_name], $is[i_cnum] composers]";
    $cond .= "AND u_cab = x'$cab'";
  }
  if ($gab!="") {
    $title .= " (free)";
    $cond .= "AND u_gab = x'$gab'";
  }
  $q = "
    SELECT l_ok, l_wrong2, l_cent, l_sec, l_r1, l_time, cc_qlog.c_id as c_id, tg_id, c_name4, c_id2 FROM cc_qlog
    LEFT JOIN cc_ctracks USING (t_id)
    LEFT JOIN cc_composers ON (cc_qlog.c_id=cc_composers.c_id)
    WHERE u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    ORDER BY l_time,l_id
  ";
  $r = mysql_query2($q);
  echo mysql_report_error();
  $n = mysql_numrows($r);
  if ($n<6) die ("]);}</script>Not enough answers to build graph. Please answer more questions.");
  $r1 = 0;
  $cor = 0;
  $corp = 0;
  $sec = 0;
  $avcent = 0;
  $data2 = "";
  $wrong_n = 0;
  $atotal = $n;
  $mav_rad = min(round($n/4), 200); // moving average radius
  $ma_rad = min(round($n/4), 200); // second moving average radius
  $mav_size[-1] = $mav_rad; // moving average starting size
  $ma_size[-1] = $ma_rad; // moving average starting size
  $x_sum = $n*($n+1)/2;
  $xx_sum = $n*($n+1)*(2*$n+1)/6;
  for ($i=0; $i<$n; $i++) {
    $wa[$i] = mysql_fetch_assoc($r);
    if ($wa[$i][l_sec]>300) $wa[$i][l_sec] = $wa[$i-1][l_sec];
  }
  // Initialize mav
  for ($i=0; $i<$mav_rad; $i++) {
    $mav_cor[-1] += $wa[$i][l_ok]*100;
    $mav_corp[-1] += (1-$wa[$i][l_wrong2])*100;
    $mav_r1[-1] += $wa[$i][l_r1];
    //$mav_avcent[-1] += abs($wa[$i][l_cent]);
    $mav_sec[-1] += $wa[$i][l_sec];
  }
  $mav_cor[-1] /= $mav_rad;
  $mav_corp[-1] /= $mav_rad;
  $mav_r1[-1] /= $mav_rad;
  //$mav_avcent[-1] /= $mav_rad;
  $mav_sec[-1] /= $mav_rad;
  if ($debug) stop_time();
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    // Count slopes
    $ok_y_sum += $w[l_ok];
    $ok_xy_sum += ($i+1)*$w[l_ok];
    // Count moving average
    if ($i<$mav_rad+1) {
      $mav_size[$i] = $mav_rad + $i + 1;
      $mav_r1[$i] = ($mav_r1[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_r1])/$mav_size[$i];
      $mav_cor[$i] = ($mav_cor[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_ok]*100)/$mav_size[$i];
      $mav_corp[$i] = ($mav_corp[$i-1]*$mav_size[$i-1] + (1-$wa[$i+$mav_rad][l_wrong2])*100)/$mav_size[$i];
      //$mav_avcent[$i] = ($mav_avcent[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_cent])/$mav_size[$i];
      $mav_sec[$i] = ($mav_sec[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_sec])/$mav_size[$i];
    } elseif ($i+$mav_rad>=$n) {
      $mav_size[$i] = $mav_rad + ($n-$i);
      $mav_r1[$i] = ($mav_r1[$i-1]*$mav_size[$i-1] - $wa[$i-$mav_rad-1][l_r1])/$mav_size[$i];
      $mav_cor[$i] = ($mav_cor[$i-1]*$mav_size[$i-1] - $wa[$i-$mav_rad-1][l_ok]*100)/$mav_size[$i];
      $mav_corp[$i] = ($mav_corp[$i-1]*$mav_size[$i-1] - (1-$wa[$i-$mav_rad-1][l_wrong2])*100)/$mav_size[$i];
      //$mav_avcent[$i] = ($mav_avcent[$i-1]*$mav_size[$i-1] - $wa[$i-$mav_rad-1][l_cent])/$mav_size[$i];
      $mav_sec[$i] = ($mav_sec[$i-1]*$mav_size[$i-1] - $wa[$i-$mav_rad-1][l_sec])/$mav_size[$i];
    } else {
      $mav_size[$i] = $mav_rad*2 + 1;
      $mav_r1[$i] = ($mav_r1[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_r1] - $wa[$i-$mav_rad-1][l_r1])/$mav_size[$i];
      $mav_cor[$i] = ($mav_cor[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_ok]*100 - $wa[$i-$mav_rad-1][l_ok]*100)/$mav_size[$i];
      $mav_corp[$i] = ($mav_corp[$i-1]*$mav_size[$i-1] + (1-$wa[$i+$mav_rad][l_wrong2])*100 - (1-$wa[$i-$mav_rad-1][l_wrong2])*100)/$mav_size[$i];
      //$mav_avcent[$i] = ($mav_avcent[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_cent] - $wa[$i-$mav_rad-1][l_cent])/$mav_size[$i];
      $mav_sec[$i] = ($mav_sec[$i-1]*$mav_size[$i-1] + $wa[$i+$mav_rad][l_sec] - $wa[$i-$mav_rad-1][l_sec])/$mav_size[$i];
    }
  }
  // Initialize ma
  for ($i=0; $i<$ma_rad; $i++) {
    $ma_cor[-1] += $mav_cor[$i];
    $ma_corp[-1] += $mav_corp[$i];
    $ma_r1[-1] += $mav_r1[$i];
    //$ma_avcent[-1] += $mav_avcent[$i];
    $ma_sec[-1] += $mav_sec[$i];
  }
  $ma_cor[-1] /= $ma_rad;
  $ma_corp[-1] /= $ma_rad;
  $ma_r1[-1] /= $ma_rad;
  //$ma_avcent[-1] /= $ma_rad;
  $ma_sec[-1] /= $ma_rad;
  $emph = 1;
  for ($i=0; $i<$n; $i++) {
    $w = &$wa[$i];
    // Count moving average2
    if ($i<$ma_rad+1) {
      $ma_size[$i] = $ma_rad + $i + 1;
      $ma_r1[$i] = ($ma_r1[$i-1]*$ma_size[$i-1] + $mav_r1[$i+$ma_rad])/$ma_size[$i];
      $ma_cor[$i] = ($ma_cor[$i-1]*$ma_size[$i-1] + $mav_cor[$i+$ma_rad])/$ma_size[$i];
      $ma_corp[$i] = ($ma_corp[$i-1]*$ma_size[$i-1] + $mav_corp[$i+$ma_rad])/$ma_size[$i];
      //$ma_avcent[$i] = ($ma_avcent[$i-1]*$ma_size[$i-1] + $mav_avcent[$i+$ma_rad])/$ma_size[$i];
      $ma_sec[$i] = ($ma_sec[$i-1]*$ma_size[$i-1] + $mav_sec[$i+$ma_rad])/$ma_size[$i];
    } elseif ($i+$ma_rad>=$n) {
      $ma_size[$i] = $ma_rad + ($n-$i);
      $ma_r1[$i] = ($ma_r1[$i-1]*$ma_size[$i-1] - $mav_r1[$i-$ma_rad-1])/$ma_size[$i];
      $ma_cor[$i] = ($ma_cor[$i-1]*$ma_size[$i-1] - $mav_cor[$i-$ma_rad-1])/$ma_size[$i];
      $ma_corp[$i] = ($ma_corp[$i-1]*$ma_size[$i-1] - $mav_corp[$i-$ma_rad-1])/$ma_size[$i];
      //$ma_avcent[$i] = ($ma_avcent[$i-1]*$ma_size[$i-1] - $mav_avcent[$i-$ma_rad-1])/$ma_size[$i];
      $ma_sec[$i] = ($ma_sec[$i-1]*$ma_size[$i-1] - $mav_sec[$i-$ma_rad-1])/$ma_size[$i];
    } else {
      $ma_size[$i] = $ma_rad*2 + 1;
      $ma_r1[$i] = ($ma_r1[$i-1]*$ma_size[$i-1] + $mav_r1[$i+$ma_rad] - $mav_r1[$i-$ma_rad-1])/$ma_size[$i];
      $ma_cor[$i] = ($ma_cor[$i-1]*$ma_size[$i-1] + $mav_cor[$i+$ma_rad] - $mav_cor[$i-$ma_rad-1])/$ma_size[$i];
      $ma_corp[$i] = ($ma_corp[$i-1]*$ma_size[$i-1] + $mav_corp[$i+$ma_rad] - $mav_corp[$i-$ma_rad-1])/$ma_size[$i];
      //$ma_avcent[$i] = ($ma_avcent[$i-1]*$ma_size[$i-1] + $mav_avcent[$i+$ma_rad] - $mav_avcent[$i-$ma_rad-1])/$ma_size[$i];
      $ma_sec[$i] = ($ma_sec[$i-1]*$ma_size[$i-1] + $mav_sec[$i+$ma_rad] - $mav_sec[$i-$ma_rad-1])/$ma_size[$i];
    }
    $r1 = ($r1*$i + $w[l_r1])/($i+1);
    $cor = ($cor*$i + $w[l_ok]*100)/($i+1);
    if ($w[l_ok] == 0) {
      $avcent = ($avcent*$wrong_n + abs($w[l_cent]))/($wrong_n+1);
      $wrong_n ++;
    }
    //echo "\n$i; $w[l_ok]; $mav_size1; $mav_size2; ".round($mav_cor, 1)."; ".$wa[$i-$mav_rad-1][l_ok]."; ".$wa[$i+$mav_rad][l_ok]."; ".($i-$mav_rad-1)."; ".($i+$mav_rad)."";
    //echo "\n$i; $w[l_wrong2]; $mav_size1; $mav_size2; ".round($mav_corp, 1)."; ".$wa[$i-$mav_rad-1][l_wrong2]."; ".$wa[$i+$mav_rad][l_wrong2]."; ".($i-$mav_rad-1)."; ".($i+$mav_rad)."";
    //echo "\n$i; $w[l_sec]; $mav_size1; $mav_size2; ".round($mav_sec, 1)."; ".$wa[$i-$mav_rad-1][l_ok]."; ".$wa[$i+$mav_rad][l_ok]."; ".($i-$mav_rad-1)."; ".($i+$mav_rad)."";
    //$mav_size1 = $mav_size2;
    $corp = ($corp*$i + (1-$w[l_wrong2])*100)/($i+1);
    if ($w[l_sec]<3600) $sec = ($sec*$i + $w[l_sec])/($i+1);
    $catt[$w[c_id]] += $w[l_sec];
    $cnum[$w[c_id]] ++;
    $date = $w[l_time];
    if ($i < 5) {
      $show_cor="null";
      $show_r1="null";
    } else {
      $show_cor=round($cor, 2);
      $show_r1=round($r1, 2);
    }
    $ymd_new = substr($wa[$i+1][l_time], 0, strpos($date, " "));
    $style="null";
    if (($ymd != $ymd_new) && ($i>1) && ($i<$n-1)) {
      $emph = ($emph==1)?2:1;
      $style = "'`'";
      //$style = "'point { size: 7; shape-type: star'";
    }
    $ymd=$ymd_new;
    echo "\n['$date',$style,$show_cor,".round($ma_corp[$i], 2).",".round($ma_cor[$i], 2).",$show_r1,".round($ma_r1[$i], 2)."]";
    $data2 .= "\n['$date',".round($ma_sec[$i], 2).", ".round($avcent, 2)."]";
    if ($i < $n-1) {
      echo ",";
      $data2 .= ",";
    }
    // Count tgroups stat
    $tg_anum[$w[tg_id]]++;
    $tg_comp_anum[$w[c_id]][$w[tg_id]]++;
    if ($w[l_ok]>0) {
      $tg_correct[$w[tg_id]]++;
      $tg_comp_correct[$w[c_id]][$w[tg_id]]++;
    }
    $comp_name[$w[c_id]] = $w[c_name4];
    if ($w[c_id2] != $w[c_id]) $cwc[$w[c_id]][$w[c_id2]] ++;
  }
  // Count slopes
  $ok_slope = (($n * $ok_xy_sum) - ($x_sum * $ok_y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));
  if (count($comp_name)>20) unset($comp_name);
  echo "]);";

  echo "var data2 = google.visualization.arrayToDataTable([";
  echo "['Date', 'Think time MA (sec)', 'Absolute years mistake'],";
  echo $data2;
  echo "]);";
  
  if ($debug) stop_time();
  /*
  // Count id2
  $q = "SELECT c_id2, count(*) as cnt, avg(l_ok)*100 as aok 
    FROM cc_qlog WHERE u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    GROUP BY c_id2";
  $r = mysql_query2($q);
  //echo $q;
  if ($debug) stop_time();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $cok2[$w[c_id2]] = $w[aok];
    // How many times user selected c_id2 wrong
    $wcnt2[$w[c_id2]] = round($w[cnt]*(1-$w[aok]/100));
  }

  $q = "SELECT *, count(*) as cnt, avg(l_ok)*100 as aok 
    FROM cc_qlog 
    LEFT JOIN cc_composers USING (c_id)
    WHERE u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    GROUP BY c_id";
  $r = mysql_query2($q);
  if ($debug) echo $q;
  if ($debug) stop_time();
  $n = mysql_numrows($r);
  $first = 1;
  $n2 = $n;
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $cok[$w[c_id]] += $w[aok];
    // How many times c_id was playing and user selected not c_id
    $wcnt[$w[c_id]] = round($w[cnt]*(1-$w[aok]/100));
    $wa[$i] = $w;
    $comp_name[$w[c_id]] = $w[c_name4];
  }

  // Count most wrong
  $q = "SELECT c_name4, cc_qlog.c_id, c_id2, count(c_id2) as cnt 
    FROM cc_qlog 
    LEFT JOIN cc_composers ON (cc_composers.c_id = cc_qlog.c_id2)
    WHERE cc_qlog.c_id != c_id2 AND u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    GROUP BY cc_qlog.c_id, c_id2
    ORDER BY cnt DESC";
  $r = mysql_query2($q);
  if ($debug) stop_time();
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Count how many times user selected c_id2 when it was c_id really out of times when c_id was playing and user was wrong
    // Put it into array, where c_id is key
    $cnc[$w[c_id]] += 1;
    if ($cnc[$w[c_id]] < 3) {
      if ($cname[$w[c_id]] != "") $cname[$w[c_id]] .= ", ";
      $cname[$w[c_id]] .= "$w[c_name4] (".round($w[cnt]/$wcnt[$w[c_id]]*100)."% - $w[cnt] of ".$wcnt[$w[c_id]].")";
    }
  }

  // Count most wrong2
  $q = "SELECT c_name4, cc_qlog.c_id, c_id2, count(cc_qlog.c_id) as cnt 
    FROM cc_qlog 
    LEFT JOIN cc_composers ON (cc_composers.c_id = cc_qlog.c_id)
    WHERE cc_qlog.c_id != c_id2 AND u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    GROUP BY c_id2, cc_qlog.c_id
    ORDER BY cnt DESC";
  $r = mysql_query2($q);
  if ($debug) stop_time();
  echo mysql_report_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    // Count how many times it was c_id when user selected c_id2 out of times when user selected c_id2 wrong
    // Put it into array, where c_id2 is key
    $cnc2[$w[c_id2]] += 1;
    if ($cnc2[$w[c_id2]] < 4) {
      if ($cname2[$w[c_id2]] != "") $cname2[$w[c_id2]] .= ", ";
      $cname2[$w[c_id2]] .= "$w[c_name4] (".round($w[cnt]/$wcnt2[$w[c_id2]]*100)."% - $w[cnt] of ".$wcnt2[$w[c_id2]].")";
    }
  }

  // Count id
  $q = "SELECT *, count(*) as cnt, avg(l_ok)*100 as aok 
    FROM cc_qlog 
    LEFT JOIN cc_composers USING (c_id)
    WHERE u_id=$u_id AND u_level=$level AND l_cleared=0 $cond
    GROUP BY c_id";
  $r = mysql_query2($q);
  if ($debug) stop_time();
  $n = mysql_numrows($r);
  $first = 1;
  echo "var data3 = new google.visualization.DataTable();\n";
  echo "data3.addColumn('string', 'Composer');\n";
  echo "data3.addColumn('number', 'Correct (when this composer is correct answer)');\n";
  echo "data3.addColumn('number', 'Correct guess (when chose this composer)');\n";
  echo "data3.addColumn('string', 'Period');\n";
  echo "data3.addColumn('number', 'Questions');\n";
  echo "data3.addColumn({type: 'string', role: 'tooltip'});\n";
  //echo "var data3 = google.visualization.arrayToDataTable([\n";
  //echo "['Composer', 'Correct', 'Correct guess', 'Period', 'Questions', 'Tip'],";
  echo "data3.addRows([";
  for ($i=0; $i<$n2; $i++) {
    $w = $wa[$i];
    $cid = $w[c_id];
    if ($first == 0) echo ", ";
    $first = 0;
    echo "['$w[c_name4]', $cok[$cid], $cok2[$cid], '$w[p_name]', ".
      " $w[cnt], '<b>Selected wrong</b>: $cname[$cid]<br><b>Selected when</b>: $cname2[$cid]<br><br>ATT: ".round($catt[$cid]/($cnum[$cid]+0.0000001))." sec']\n";
  }
  echo "]);";
  */
  if ($n<110) $points = ", pointShape: 'circle', pointSize: 1";
  echo "var options1 = {
    vAxes: {0: {format: '#'}, 1: {format: '#\\'%\\''}}, 
    series: {
      0:{ type: 'line', targetAxisIndex: 1, color: '#dd3300', lineWidth: 1 $points },
      1: { type: 'line', targetAxisIndex: 1, color: '#ff9900', lineWidth: 3, lineDashStyle: [2, 3]},
      2: { type: 'line', targetAxisIndex: 1, color: '#ffaaaa', lineWidth: 3, lineDashStyle: [2, 3] },
      3: { type: 'line', targetAxisIndex: 0, color: '#009900', lineWidth: 1 $points},
      4: { type: 'line', targetAxisIndex: 0, color: '#99dd99', lineWidth: 3, lineDashStyle: [2, 3]}
    },
    annotations: { style: 'line' },
    chartArea: {left: 70, top: 60, width: 770, height: 380},
    title: '$us[u_name] graphs for $title ($n questions)'};";
  echo "var options2 = {
    vAxes: {0: {format: '#'}, 1: {format: '#'}}, 
    series: {
      0:{ type: 'line', targetAxisIndex: 0, lineWidth: 3, lineDashStyle: [2, 3] },
      1: { type: 'line', targetAxisIndex: 1},
    },
    chartArea: {left: 70, top: 30, width: 770, height: 410},
    title: ''};";
  /*
  $min_ok = min($cok);
  $max_ok = max($cok);
  $min_ok2 = min($cok2);
  $max_ok2 = max($cok2);
  $frame = 0.01;
  $hmax = $max_ok + ($max_ok-$min_ok)*$frame;
  $hmin = $min_ok - ($max_ok-$min_ok)*$frame;
  $vmax = $max_ok2 + ($max_ok2-$min_ok2)*$frame;
  $vmin = $min_ok2 - ($max_ok2-$min_ok2)*$frame;
  echo "var options3 = {\n";
  echo "title: '$us[u_name] correct correlation for $title',\n";
  echo "hAxis: {title: 'Correct (when this composer is correct answer)', maxValue: $hmax, minValue: $hmin, format: '#\\'%\\''},\n";
  echo "vAxis: {title: 'Correct guess (when chose this composer)', maxValue: $vmax, minValue: $vmin, format: '#\\'%\\''},\n";
  echo "bubble: {textStyle: {fontSize: 11}},\n";
  echo "sizeAxis: {minSize: 10, maxSize: 50},\n";
  echo "chartArea: {left: 70, top: 30, width: 690, height: 500},\n";
  echo "};\n";
  */
?>
var formatter = new google.visualization.NumberFormat({
    fractionDigits: 0,
    suffix: '%'
});
var formatter2 = new google.visualization.NumberFormat({
    fractionDigits: 0,
});
formatter.format(data1, 2);
formatter.format(data1, 3);
formatter.format(data1, 4);
formatter2.format(data1, 5);
formatter2.format(data1, 6);
formatter2.format(data2, 1);
formatter2.format(data2, 2);

<?
  //formatter.format(data3, 1);
  //formatter.format(data3, 2);

  /*
  echo "function c3selectHandler() {\n";
  echo "var selectedItem = chart3.getSelection()[0];\n";
  echo "if (selectedItem) {\n";
  echo "var comp = data3.getValue(selectedItem.row, 0);\n";
  echo "var topping = data3.getValue(selectedItem.row, 5);\n";
  echo  "overlib(topping, CAPTION,'<b>Statistics of wrong answers for ' + comp,CGCOLOR,'#ffffee',FGCOLOR,'#eeeeff',
    TEXTPADDING,8,CAPTIONPADDING,4,TEXTFONTCLASS,'oltxt',CAPTIONFONTCLASS,'olcap',WRAP,BASE,2,HAUTO);";
  echo "}\n";
  echo "}\n";
  */
  echo "var chart1 = new google.visualization.LineChart(document.getElementById('chart_div1'));";
  echo "chart1.draw(data1, options1); ";
  echo "var chart2 = new google.visualization.LineChart(document.getElementById('chart_div2'));";
  echo "chart2.draw(data2, options2); }";
  //echo "var chart3 = new google.visualization.BubbleChart(document.getElementById('chart_div3'));";
  //echo "google.visualization.events.addListener(chart3, 'select', c3selectHandler);\n";
  //echo "chart3.draw(data3, options3); }";
  echo "</script>";
  echo "<div id=chart_div1 style='width: 900px; height: 450px;'></div>";
  echo "<br>";
  echo "<div id=chart_div2 style='width: 900px; height: 450px;'></div>";
  //echo "<br>";
  //echo "<div id=chart_div3 style='width: 900px; height: 600px;'></div>";
  //echo "<a href='javascript:void(0);' onclick=\"overlib('', TIMEOUT, 1); return false;\">Close popup</a><br>";
  //echo "Size of the bubble shows number of questions asked<br>";
  
  // Show track groups stats
  load_tga();
  echo "<br><table border=1>";
  echo "<tr>";
  echo "<th>Group";
  echo "<th>Correct";
  echo "<th>Answers";
  //echo "<th>Group name";
  foreach ($comp_name as $c_id => $c_name) echo "<th><a href='".comp_link($c_id)."'>$c_name";
  foreach ($tg_anum as $tg_id => $anum) $tg_c[$tg_id] = $tg_correct[$tg_id]/$anum;
  arsort($tg_c);
  foreach ($tg_c as $tg_id => $c) {
    $anum = $tg_anum[$tg_id];
    echo "<tr>";
    $bgcolor=make_color(
      255-255*$c, 
      255*$c, 
      0
    );
    echo "<td align=center title='".$tga[$tg_id][tg_name]."'>";
    if ($cab != "") echo "<a href='isnap.php?ilevel=$level&cab=$cab&tg_id=$tg_id&order=c_start'>";
    else echo "<a href=tgroups.php?tg_id=$tg_id>";
    echo "<img border=0 height=14 src=images/tg$tg_id.png>";
    echo "<td align=center bgcolor=$bgcolor>".round($c*100)."%";
    echo "<td align=center>$anum";
    //echo "<td align=left>".$tga[$tg_id][tg_name];
    foreach ($comp_name as $c_id => $c_name) {
      $anum2 = $tg_comp_anum[$c_id][$tg_id];
      $correct2 = $tg_comp_correct[$c_id][$tg_id];
      $c2 =  $correct2 / $anum2;
      $bgcolor=make_color(
        min(255, 255-255*$c2), 
        255*$c2, 
        0
      );
      if ($anum2 > 0) echo "<td title='$anum2 answers, $correct2 correct' align=center bgcolor=$bgcolor>".round($c2*100)."%";
      else echo "<td align=center>-";
    }
  }
  echo "<tr>";
  echo "<th>Correct";
  echo "<th>".round($cor)."% ";
  $ok_slope2 = round($ok_slope*100*$n, 0);
  if ($n>$slope_min_ans) echo show_slope_ok($ok_slope*100*$n);
  //if ($ok_slope>0) echo "<img title='Slope is $ok_slope2%' align=top height=15 src=images/up-arrow.png>"; 
  //else echo "<img title='Slope is $ok_slope2%' align=top height=15 src=images/down-arrow.png>";
  echo "<th>";
  foreach ($comp_name as $c_id => $c_name) {
    $c_anum[$c_id] = array_sum($tg_comp_anum[$c_id]);
    $c_cor[$c_id] = array_sum($tg_comp_correct[$c_id]);
    echo "<th>".round($c_cor[$c_id]/$c_anum[$c_id]*100)."%";
  }
  echo "<tr>";
  echo "<th>Answered";
  echo "<td>";
  echo "<td><center>$atotal";
  foreach ($comp_name as $c_id => $c_name) {
    echo "<td><center>".$c_anum[$c_id];
  }
  echo "<tr>";
  echo "<th valign=top>Wrong<br>answers";
  echo "<td>";
  echo "<td>";
  foreach ($comp_name as $c_id => $c_name) {
    arsort($cwc[$c_id]);
    $i=0;
    echo "<td valign=top><center>";
    foreach ($cwc[$c_id] as $c_id2 => $cnt2) {
      echo "<a title='$cnt2 answers' href=am.php?c_id=$c_id2><font color=red>".$comp_name[$c_id2]."</a><br>";
      $i++;
      if ($i>2) break;
    }
  }
  echo "</table>";
  //for ($i=0; $i<$n; $i++) echo $wa[$i][l_ok]."<br>";

  stop_time();
?>
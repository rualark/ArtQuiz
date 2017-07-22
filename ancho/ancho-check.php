<?
  $ch1 = array('I'   => array('ht' => 0, 'type' => ''),
               'ii'  => array('ht' => 2, 'type' => 'm'),
               'iii' => array('ht' => 4, 'type' => 'm'),
               'IV'  => array('ht' => 5, 'type' => ''),
               'V'   => array('ht' => 7, 'type' => ''),
               'vi'  => array('ht' => 9, 'type' => 'm'),
               'bVII'  => array('ht' => 10, 'type' => ''),
               'viio'  => array('ht' => 11, 'type' => 'o'),
  );
  $ch2 = array('i'   => array('ht' => 0, 'type' => 'm'),
               'iio'  => array('ht' => 2, 'type' => 'o'),
               //'V/V' => array('ht' => 2, 'type' => ''),
               'III' => array('ht' => 3, 'type' => ''),
               'iv'  => array('ht' => 5, 'type' => 'm'),
               'v'   => array('ht' => 7, 'type' => 'm'),
               'V'   => array('ht' => 7, 'type' => ''),
               'VI'  => array('ht' => 8, 'type' => ''),
               'VII'  => array('ht' => 10, 'type' => ''),
               'viio'  => array('ht' => 11, 'type' => 'o'),
  );
  $cmap = array(''  => array(1, 0, 0, 0, 1, 0, 0, 1),
                'm' => array(1, 0, 0, 1, 0, 0, 0, 1),
                'o' => array(1, 0, 0, 1, 0, 0, 1)
  );
  $cseq = array(
    'V-I' => array(descr => 'authentic', rat => 2),
    'V-ii' => array(descr => '', rat => 1),
    'V-iio' => array(descr => '', rat => 1),
    'V-III' => array(descr => '', rat => 1),
    'III-viio' => array(descr => '', rat => 1),
    'V-iv' => array(descr => '', rat => 1),
    'V-v' => array(descr => '', rat => 1),
    'VII-viio' => array(descr => '', rat => 1),
    'bVII-iii' => array(descr => '', rat => 1),
    'ii-viio' => array(descr => '', rat => 1),
    'VI-v' => array(descr => '', rat => 1),
    'I-viio' => array(descr => '', rat => 2),
    'IV-V' => array(descr => '', rat => 2),
    'V-VII' => array(descr => '', rat => 1),
    'VI-viio' => array(descr => '', rat => 2),
    'III-V' => array(descr => '', rat => 1),
    'IV-vi' => array(descr => '', rat => 2),
    'V-viio' => array(descr => '', rat => 1),
    'VI-iio' => array(descr => '', rat => 2),
    'IV-I' => array(descr => 'plagal', rat => 2),
    'I-vi' => array(descr => 'turnaround', rat => 2),
    'VII-V' => array(descr => 'rock', rat => 1),
    'V-VI' => array(descr => 'deceptive', rat => 2),
    'VI-V' => array(descr => '', rat => 2),
    'V-IV' => array(descr => 'turnaround, blues', rat => 2),
    'V-i' => array(descr => 'authentic', rat => 2),
    'V-vi' => array(descr => 'authentic', rat => 2),
    '-1' => array(descr => 'approach', rat => 2),
    '1' => array(descr => 'approach', rat => 2),
    '1m' => array(descr => 'approach', rat => 2),
    'iv-i' => array(descr => 'plagal', rat => 2),
    'iii-viio' => array(descr => '', rat => 1),
    'ii-bVII' => array(descr => 'backdoor', rat => 2),
    'ii-I' => array(descr => 'plagal', rat => 2),
    'vi-V' => array(descr => 'andalusian', rat => 2),
    'iii-ii' => array(descr => '', rat => 2),
    'm-1m' => array(descr => 'approach', rat => 2),
    'm1m' => array(descr => 'approach', rat => 2),
    'i-viio' => array(descr => '', rat => 2),
    'iii-IV' => array(descr => '', rat => 2),
    'iv-V' => array(descr => '', rat => 2),
    'vi-viio' => array(descr => '', rat => 2),
    'ii-V' => array(descr => 'circle', rat => 2),
    'vi-ii' => array(descr => 'circle', rat => 2),
    'iv-viio' => array(descr => '', rat => 2),
    'v-V' => array(descr => '', rat => 1),
    'i-V' => array(descr => '', rat => 2),
    'ii-iii' => array(descr => '', rat => 1),
    'ii-IV' => array(descr => '', rat => 1),
    'v-viio' => array(descr => '', rat => 1),
    'iii-bVII' => array(descr => '', rat => 1),
    'viio-V' => array(descr => '', rat => 2),
    'iio-viio' => array(descr => '', rat => 2),
    'viio-VI' => array(descr => '', rat => 2),
    'viio-I' => array(descr => '', rat => 2),
    'viio-i' => array(descr => '', rat => 2),
    'viio-IV' => array(descr => '', rat => 1),
    'iio-V' => array(descr => '', rat => 2),
    'iio-VI' => array(descr => '', rat => 1),
    'viio-iio' => array(descr => '', rat => 1),
    'viio-v' => array(descr => '', rat => 1),
    'viio-iio' => array(descr => '', rat => 1),
    'viio-vi' => array(descr => '', rat => 1),
    'viio-VII' => array(descr => '', rat => 1),
    'viio-ii' => array(descr => '', rat => 1),
    'viio-iii' => array(descr => '', rat => 2),
    'viio-iv' => array(descr => '', rat => 1),
    'viio-III' => array(descr => '', rat => 1),
  );
  
  foreach ($ch1 as $cname => $arr) {
    foreach ($cmap[$arr[type]] as $i => $cbit) {
      $ch1[$cname][map][($i+$arr[ht])%12] = $cbit;
    }
  }
  
  foreach ($ch1 as $cname => $arr) {
    foreach ($ch1 as $cname2 => $arr2) {
      // Check if same chord
      if ($cname == $cname2) continue;
      $pt = &$cmatrix[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      $pt2 = &$crat[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      if ($pt != '') $pt .= ', ';
      $pt .= "$cname-$cname2";
      $arr3 = $cseq["$cname-$cname2"];
      if (is_array($arr3)) {
        if ($arr3[descr] != '') $pt .= " ($arr3[descr])";
        $pt2 = $arr3[rat];
      }
    }
  }
  
  foreach ($ch2 as $cname => $arr) {
    foreach ($ch2 as $cname2 => $arr2) {
      // Check if same chord
      if ($cname == $cname2) continue;
      $pt = &$cmatrix[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      $pt2 = &$crat[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      if ($pt != '') $pt .= ', ';
      $pt .= "<b>$cname-$cname2</b>";
      $arr3 = $cseq["$cname-$cname2"];
      if (is_array($arr3)) {
        if ($arr3[descr] != '') $pt .= " ($arr3[descr])";
        $pt2 = $arr3[rat];
      }
    }
  }
  
  foreach ($ch1 as $cname => $arr) {
    foreach ($ch2 as $cname2 => $arr2) {
      // Check if same chord
      if ($cname == $cname2) continue;
      $pt = &$cmatrix[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      $pt2 = &$crat[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      if ($pt2 == 0) {
        if ($pt != '') $pt .= ', ';
        $pt .= "<font color=red>$cname-$cname2</font>";
        $arr3 = $cseq["$cname-$cname2"];
        if (is_array($arr3)) {
          if ($arr3[descr] != '') $pt .= " ($arr3[descr])";
          $pt2 = $arr3[rat];
        }
      }
    }
  }
  
  foreach ($ch2 as $cname => $arr) {
    foreach ($ch1 as $cname2 => $arr2) {
      // Check if same chord
      if ($cname == $cname2) continue;
      $pt = &$cmatrix[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      $pt2 = &$crat[$arr[type]][($arr2[ht]-$arr[ht]+17)%12-5][$arr2[type]];
      if ($pt2 == 0) {
        if ($pt != '') $pt .= ', ';
        $pt .= "<font color=red>$cname-$cname2</font>";
        $arr3 = $cseq["$cname-$cname2"];
        if (is_array($arr3)) {
          if ($arr3[descr] != '') $pt .= " ($arr3[descr])";
          $pt2 = $arr3[rat];
        }
      }
    }
  }
  
  foreach ($cmatrix as $type => $arr) {
    echo "$type<br>";
    echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th>HT";
    echo "<th>Major";
    echo "<th>Minor";
    echo "<th>Dim";
    $col1 = '#ffffaa';
    $col2 = '#bbffbb';
    for ($i=-5; $i<=6; $i++) {
      $arr2 = $arr[$i];
      echo "<tr>";
      echo "<td><center>$i";
      $col = "pink";
      if (($type == '') && ($i == 0)) $col = 'white';
      if ($crat[$type][$i][''] == 1) $col = $col1;
      if ($crat[$type][$i][''] == 2) $col = $col2;
      echo "<td bgcolor=$col>".$arr2[''];
      $arr3 = $cseq["$type$i"];
      if (is_array($arr3)) echo " ($arr3[descr])";
      $col = "pink";
      if (($type == 'm') && ($i == 0)) $col = 'white';
      if ($crat[$type][$i]['m'] == 1) $col = $col1;
      if ($crat[$type][$i]['m'] == 2) $col = $col2;
      echo "<td bgcolor=$col>".$arr2['m'];
      $arr3 = $cseq["$type{$i}m"];
      if (is_array($arr3)) echo " ($arr3[descr])";
      $col = "pink";
      if (($type == 'o') && ($i == 0)) $col = 'white';
      if ($crat[$type][$i]['o'] == 1) $col = $col1;
      if ($crat[$type][$i]['o'] == 2) $col = $col2;
      echo "<td bgcolor=$col>".$arr2['o'];
      $arr3 = $cseq["$type{$i}o"];
      if (is_array($arr3)) echo " ($arr3[descr])";
   }
    echo "</table>";
  }
  
  echo "<pre>";
  //print_r($crat);
  
?>
<?
  $cent_step = 100; // step for density calculation

  function y($y) {
    GLOBAL $astart, $cent_step;
    $y = round($y);
    $cent = floor($y/$cent_step);
    return 5+round(($astart[$cent]+($y/$cent_step-$cent)*($astart[$cent+1]-$astart[$cent])));
  }

  // Count density
  $q = "SELECT a_year1, a_year2 FROM rq_authors WHERE a_rating<100";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $year1 = $w[a_year1];
    $year2 = $w[a_year2];
    if ($year2 == 0) $year2 = 2016;
    $acnt[floor(($year2+$year1)/2/$cent_step)]++;
  }
  $pos = 5;
  $acnt[-1000/$cent_step] = 0.4;
  $acnt[-900/$cent_step] = 0.7;
  $acnt[-800/$cent_step] = 0.7;
  $acnt[-700/$cent_step] = 0.7;
  $acnt[-600/$cent_step] = 1;
  $acnt[-500/$cent_step] = 1;
  $acnt[-400/$cent_step] = 1;
  $acnt[-300/$cent_step] = 1;
  $acnt[-200/$cent_step] = 1;
  $acnt[-100/$cent_step] = 1;
  $acnt[0/$cent_step] = 1;
  $acnt[100/$cent_step] = 1;
  $acnt[200/$cent_step] = 1;
  $acnt[300/$cent_step] = 1;
  $acnt[400/$cent_step] = 1;
  $acnt[500/$cent_step] = 1;
  $acnt[600/$cent_step] = 1;
  $acnt[700/$cent_step] = 0.2;
  $acnt[800/$cent_step] = 0.2;
  $acnt[900/$cent_step] = 0.2;
  $acnt[1000/$cent_step] = 0.5;
  $acnt[1100/$cent_step] = 0.5;
  $acnt[1200/$cent_step] = 0.5;
  $acnt[1300/$cent_step] = 0.5;
  $acnt[1400/$cent_step] = 1;
  $acnt[1500/$cent_step] = 1;
  $acnt[1600/$cent_step] = 1;
  $acnt[1700/$cent_step] = 10;
  //$acnt[-40100/$cent_step] = 1;
  //$acnt[1700/$cent_step] = 10;
  //$acnt[1400/$cent_step] = 18;
  //$acnt[1300/$cent_step] = 5;
  //$acnt[1500/$cent_step] = 16;
  //$acnt[1600/$cent_step] = 17;
  $acnt[1800/$cent_step] = 15;
  $acnt[1900/$cent_step] = 15;
  $acnt[2000/$cent_step] = 15;
  for ($i=-40100/$cent_step; $i<3000/$cent_step; $i++) {
    $astart[$i] = $pos;
    $pos += round($acnt[$i]*14);
  }
  ksort($acnt);
  //print_r($acnt);
?>
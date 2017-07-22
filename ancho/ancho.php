<? 
error_reporting(E_ERROR);
include "analytics.php"; 
include "../style.php"; 
$mpath="../";
$nomotto=1;
include "../menu.php";
?>
<hr>
<?
   $mtime = microtime();
   $mtime = explode(" ",$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $starttime = $mtime; 
$REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
if (isset($_GET['submit'])) $submit=$_GET['submit'];
if (isset($_GET['admh'])) $admh=$_GET['admh'];
if (isset($_GET['adup'])) $adup=$_GET['adup'];
if (isset($_GET['cp'])) $cp=$_GET['cp'];
if (isset($_GET['ci'])) $ci=$_GET['ci'];
if (isset($_GET['tit'])) $tit=$_GET['tit'];
if (isset($_GET['skey'])) $skey=$_GET['skey'];
if (isset($_GET['cf'])) $cf=$_GET['cf'];
if (isset($_GET['cfs'])) $cfs=$_GET['cfs'];
if (isset($_GET['adim'])) $adim=$_GET['adim'];
if (isset($_GET['showall'])) $showall=$_GET['showall'];
//error_reporting(E_ALL);

$wind_mid1 = 4;
$wind_mid2 = 4;
$wind_min1 = 5;
$wind_min2 = 5;

$main_key_force = 1.5;
$dom_key_force = 1.35;

require("amlib.php");
//require("mysql.php");

function get_key_from_cp($cp, &$posk) {
  global $adup, $main_key, $dom_key, $adim, $empty_na, $wind_mid1, $wind_mid2, $wind_min1, $wind_min2, $showall, $main_key_force, $dom_key_force;

  $cp=escape_cp($cp);
  if ($debug) echo "<b>Analysing:</b> $cp<br>";
  $cp2=convert_names(strtoupper($cp));
  //echo $cp2;
  $st="";
  if (isset($adim)) $st="adim=on&";
  if (isset($adup)) $st="adup=on&";
  echo " <a target=_blank href='chplay.php?";
  echo $st."cp=".urlencode($cp2)."'><img height=16 border=0 src=images/listen.jpg> Listen in MIDI</a>";
  $ca2=remove_adup(explode(" ", $cp2), isset($adup));
  $ca3=remove_adup(explode(" ", $cp2), 0);
  $na=$empty_na;
  $posk=array();
  $mmode=0;
  $eroot=0;
  for ($i=0; $i<count($ca2); $i++) {
    if ($ca2[$i]=="") {
      echo "<font color=brown><b>Error in position $i</b></font><br>";
      break;
    }
    $na1=make_na_from_chordname($ca2[$i], $pkey[$i], $pct[$i]);
    // Calculate local data
    get_key($na1, $possk2[$i]);
    // Calculate historical data
    $na2=na_or($na, $na1);
    $kn2=get_key($na2, $ka2);
    $cna[$i]=$na1;
    $pnew[$i]=na_new($na, $na1);
    if ($kn2<1) {
      if ($debug) echo "N$i ";
      $eroot=$i;
      $mmode=0;
      $newpos[$i]=1;
      $na2=$na1;
      $kn2=get_key($na2, $ka2);
      for ($x=0; $x<$i; $x++) if (!isset($posk[$x])) $posk[$x]=13;
    }
    if ($kn2==1) { 
      if ($debug) echo "<b>F$i/".get_notename($ka2[0])."</b> ";
      if ($debug) echo $i."/".get_notename($ka[0])." ";
      $minor_key=$ka2[0]-3;
      check_note_range($minor_key);
      if (!$mmode) for ($x=0; $x<=$i; $x++) if (!isset($posk[$x])) {
        // Check if there is minor tonic chord in our part
        if ($pkey[$x]==$minor_key && ($pct[$x]['m'])) $mmode=1;
      }
      $key=$ka2[0];
      $key2=$key;
      for ($x=$i; $x>=0; $x--) {
        //if (isset($posk[$x]) && ($posk[$x]!=$key)) break;
        if (isset($posk[$x]) && (ktomajor($posk[$x], $pmmode[$x])!=$key)) break;
        if ((!isset($posk[$x])) || (ktomajor($posk[$x], $pmmode[$x])==$key)) {
          // Set tonic for our part
          if ($debug) 
            if (isset($posk[$x])) echo $posk[$x]."+".$pmmode[$x]."=".$key;
          if ($mmode>0) {
            $pmmode[$x]=1;
            $key2=$minor_key;
          }
          if ($debug) echo "S$x/".get_notename($key2);
          if ($debug) if ($mmode) echo "m";
          if ($debug) echo " ";
          $posk[$x]=$key2;
          $peroot[$x]=$eroot;
          $peup[$x]=$i;
        }
      }
    }
    $possk[$i]=$ka2;
    $kn=$kn2;
    $ka=$ka2;
    $na=$na2;
  }

  // Prepare visual array
  $ca=remove_adup(explode(" ", $cp), isset($adup));
  for ($i=0; $i<count($ca); $i++) $ca[$i]=str_replace("|", "", $ca[$i]);
  //print_r($posk);
  // Delete all keys that were not detected
  for ($x=0; $x<count($ca); $x++) if (!isset($posk[$x])) $posk[$x]=13;

  // Calculate minor stats
  $cfreq=$na_empty;
  $mfreq=$na_empty;
  $ffreq=$na_empty;
  for ($i=0; $i<count($ca3); $i++) {
    $cna3[$i]=make_na_from_chordname($ca3[$i], $pkey3[$i], $pct3[$i]);
  	$key=$pkey3[$i];
    if (($pct3[$i]['m']>0) || ($pct3[$i]['dor']>0)) {
	  $key+=3;
	  check_note_range($key);
	  $mfreq[$key]++;
	}
    $cfreq[$key]++;
  }
  //print_r($mfreq);

  // Calculate main key
  $na=$empty_na;
  for ($i=0; $i<count($ca); $i++) {
    ka_add($na, $possk2[$i]);
  }
  arsort($na);
  $i=0;
  foreach ($na as $key => $val) {
    if ($i==0) $main_key=$key;
    if ($i==1) $second_key=$key;
    $keyv[$i]=$val;
    $i++;
  }
  //if ($keyv[0]==$keyv[1]) $main_key_amb=1;

  // Calculate main key based on key_amb
  $lna=$empty_na;
  for ($i=0; $i<count($ca3); $i++) {
    $mul=1;
	if ($i<6) $mul=1.5;
	if ($i>count($ca)-6) $mul=1.5;
	if ($i==0) $mul=3;
	if ($pct3[$i]['dim'] || $pct3[$i]['aug'] || $pct3[$i]['b9']) $mul=0.5;
    $lna=na_add($lna, $cna3[$i], $mul);
  }
  $kna_cor=$empty_na;
  for ($i=0; $i<12; $i++) $kna_cor[$i]+=$cfreq[$i];
  for ($i=0; $i<12; $i++) $kna_cor[$i]+=$na[$i]/2;
  //print_r($cna3);
  get_key_amb($lna, $main_nak, $main_nav, $main_kna, $kna_cor);
  get_key_amb($lna, $main_nak2, $main_nav2, $main_kna2);
  //print_r($lna);
  $main_key=$main_nak[0];
  if ($main_nav[0]==$main_nav[1]) $main_key_amb=1;
  
  $dom_key=$main_key+7;
  check_note_range($dom_key);
  $main_key_na=make_key_na($main_key);
  $dom_key_na=make_key_na($main_key);
  //echo "/$main_key/";
  //echo get_notenames($main_key_na);

  // Analyse detected keys
  // Detect first chords ambiguity
  $found=0;
  for ($i=0; $i<count($ca); $i++) {
    if ($posk[$i]!=13) break;
    $ka=$possk[$i];
    if (array_search($main_key, $ka)===false) break;
    $last_ka=$ka;
    $found=1;
    if ($i>count($ca)-1) break;
  }
  if ($found && (!$main_key_amb)) {
    $last_i=$i;
    for ($i=0; $i<$last_i; $i++) {
      $posk[$i]=$main_key;
      $minor_key=$posk[$i]-3;
      check_note_range($minor_key);
      if ($cfreq[$minor_key]>0) if ($mfreq[$minor_key]/$cfreq[$minor_key]>0.5) {
        $posk[$i]=$minor_key;
        $pmmode[$i]=1;
      }
      $pke[$i]=1;
    }
  }
  
  // Detect last chords ambiguity
  $found=0;
  if (!$main_key_amb && ($posk[count($ca)-1]==13) && (!(array_search($main_key, $possk[count($ca)-1])===false))) 
   for ($i=count($ca)-1; $i>0; $i--) {
    $ka=$possk[$i];
    if ($posk[$i]!=13) break;
    if (array_search($main_key, $ka)===false) break;
    $posk[$i]=$main_key;
    $pke[$i]=2;
    $minor_key=$posk[$i]-3;
    check_note_range($minor_key);
    if ($cfreq[$minor_key]>0) if ($mfreq[$minor_key]/$cfreq[$minor_key]>0.5) {
      $posk[$i]=$minor_key;
      $pmmode[$i]=1;
    }
  }
  
  // Try to find key of middle chords
  for ($i=0; $i<count($ca); $i++) {
    $p1=$i-$wind_mid1;
    $p2=$i+$wind_mid2;
    if ($p1<0) $p1=0;
    if ($p2>count($ca)-1) $p2=count($ca)-1;
    $lna=$empty_na;
    for ($x=$p1; $x<=$p2; $x++) {
      $mul=$x-$i+$wind_mid1+1;
      if ($x>=$i) $mul=$i+$wind_mid2-$x+1;
      if (ktomajor($pkey[$x], $pct[$x]['m'])==$main_key) $mul=$mul*$main_key_force;
      if (ktomajor($pkey[$x], $pct[$x]['m'])==$dom_key) $mul=$mul*$dom_key_force;
      //echo "<br>$ca[$i]/$ca[$x]/$mul";
      //$mul=sqrt($mul);
      $lna=na_add($lna, $cna[$x], $mul);
    }
    $nsum=array_sum($lna);
    //$lna=na_add($lna, $main_key_na, $main_key_force*$nsum);
    //$lna=na_add($lna, $dom_key_na, $dom_key_force*$nsum);
	$pnas[$i]=$lna;
    get_key_amb($lna, $nak, $nav, $pkna[$i]);
    $pnak[$i]=$nak;
    $pnav[$i]=$nav;
    if ($posk[$i]==13) {
      $posk[$i]=$nak[0];
      $pke[$i]=3;
      if ($nav[0]==$nav[1]) {
        if (($posk[$i-1]==$nak[1]) || ($posk[$i+1]==$nak[1])) {
          $posk[$i]=$nak[1];
          $pke[$i]=4;
        }
      }
      $pmmode[$i]=0;
      $minor_key=$posk[$i]-3;
      check_note_range($minor_key);
      if ($cfreq[$minor_key]>0) if ($mfreq[$minor_key]/$cfreq[$minor_key]>0.5) {
        $posk[$i]=$minor_key;
        $pmmode[$i]=1;
      }
    }
  }

  // Find single keys and garbage
  for ($i=1; $i<count($ca)-1; $i++) {
    // Count pairs
    $co1=($posk[$i-1] != $posk[$i]) || ($pmmode[$i-1] != $pmmode[$i]);
    $co2=($posk[$i+1] != $posk[$i]) || ($pmmode[$i+1] != $pmmode[$i]);
    $co3=($posk[$i-1] != $posk[$i+1]) || ($pmmode[$i-1] != $pmmode[$i+1]);
    $co4=($posk[$i-1] != $posk[$i+2]) || ($pmmode[$i-1] != $pmmode[$i+2]);
    $co5=($posk[$i+2] != $posk[$i+1]) || ($pmmode[$i+2] != $pmmode[$i+1]);
    // Find single litter
    if ((!$co3) && ($co1)) {
      $posk[$i]=$posk[$i-1];
      $pke[$i]=5;
      $pmmode[$i]=$pmmode[$i-1];
    }
    // Find double litter
    if (($i<count($ca)-2) && $co1 && $co5 && (!$co4)) {
      $posk[$i]=$posk[$i-1];
      $pke[$i]=8;
      $pmmode[$i]=$pmmode[$i-1];
      $posk[$i+1]=$posk[$i-1];
      $pke[$i+1]=8;
      $pmmode[$i+1]=$pmmode[$i-1];
    }
    // Find three different keys
    if ($co1 && $co2 && $co3) {
      $posk[$i]=$pnak[$i][0];
      $pke[$i]=6;
      if ($pnav[$i][0]==$pnav[$i][1]) {
        if (($posk[$i-1]==$pnak[$i][1]) || ($posk[$i+1]==$pnak[$i][1])) {
          $posk[$i]=$pnak[$i][1];
          $pke[$i]=7;
        }
      }
      $pmmode[$i]=0;
      $minor_key=$posk[$i]-3;
      check_note_range($minor_key);
      if ($cfreq[$minor_key]>0) if ($mfreq[$minor_key]/$cfreq[$minor_key]>0.5) {
        $posk[$i]=$minor_key;
        $pmmode[$i]=1;
      }
    }
  }

  // Set final minor modes
  for ($i=0; $i<count($ca); $i++) {
    $p1=$i-$wind_min1;
    $p2=$i+$wind_min2;
    if ($p1<0) $p1=0;
    if ($p2>count($ca)-1) $p2=count($ca)-1;
    $mcount=0;
    $tcount=0;
    if ($pmmode[$i]>0) {
      $mkey=$posk[$i];
      $key=$mkey+3;
    } else {
      $key=$posk[$i];
      $mkey=$key-3;
    }
    check_note_range($key);
    check_note_range($mkey);
    $pos=0;
    for ($x=$p1; $x<=$p2; $x++) {
      //$mul=$x-$p1+1;
      //if ($x>$i) $mul=$p2-$x+1;
      $mul=$x-$i+$wind_min1+1;
      if ($x>$i) $mul=$i+$wind_min2-$x+1;
      //$mul=sqrt($mul);
      $pmmul[$i][$pos]=$mul;
      $pmloc[$i][$pos]=$x;
      if (($pkey[$x]==$key) || ($pkey[$x]==$mkey)) {
        $tcount+=$mul;
        $pmtype[$i][$pos]=2;
      }
      if (($pkey[$x]==$mkey) && ($pct[$x]['m'])) {
        $mcount+=$mul;
        $pmtype[$i][$pos]=1;
      }
      $pos++;
    }
    $pmpos[$i]=0;
    if ($tcount>0) $pmpos[$i]=$mcount/$tcount;
    if ($pmpos[$i]>0.5) {
      $posk[$i]=$mkey;
      $pmmode[$i]=1;
    } else {
      $posk[$i]=$key;
      $pmmode[$i]=0;
    }
  }

  // Delete minor garbage
  for ($i=1; $i<count($ca)-1; $i++) {
    // Count pairs
    $co1=($pmmode[$i-1] != $pmmode[$i]);
    $co2=($pmmode[$i+1] != $pmmode[$i]);
    $co3=($pmmode[$i-1] != $pmmode[$i+1]);
    $co4=($pmmode[$i-1] != $pmmode[$i+2]);
    $co5=($pmmode[$i+2] != $pmmode[$i+1]);
    $co11=ktomajor($posk[$i-1], $pmmode[$i-1]) != ktomajor($posk[$i], $pmmode[$i]);
    $co21=ktomajor($posk[$i+1], $pmmode[$i+1]) != ktomajor($posk[$i], $pmmode[$i]);
    $co31=ktomajor($posk[$i-1], $pmmode[$i-1]) != ktomajor($posk[$i+1], $pmmode[$i+1]);
    $co41=ktomajor($posk[$i-1], $pmmode[$i-1]) != ktomajor($posk[$i+2], $pmmode[$i+2]);
    $co51=ktomajor($posk[$i-1], $pmmode[$i-1]) != ktomajor($posk[$i+2], $pmmode[$i+2]);
    // Find single litter
    if ((!$co11) && (!$co31) && (!$co3) && $co1) {
      if ($pmmode[$i-1]>0) {
        $posk[$i]=ktominor($posk[$i], $pmmode[$i]);
      } else {
        $posk[$i]=ktomajor($posk[$i], $pmmode[$i]);
      }
      $pmmode[$i]=$pmmode[$i-1];
      $pke[$i]=9;
    }
    if (($i<count($ca)-2) && (!$co11) && (!$co51) && (!$co1) && $co1 && $co5 && (!$co4)) {
      if ($pmmode[$i-1]>0) {
        $posk[$i]=ktominor($posk[$i], $pmmode[$i]);
        $posk[$i+1]=ktominor($posk[$i+1], $pmmode[$i+1]);
      } else {
        $posk[$i]=ktomajor($posk[$i], $pmmode[$i]);
        $posk[$i+1]=ktomajor($posk[$ii+1], $pmmode[$i+1]);
      }
      $pmmode[$i]=$pmmode[$i-1];
      $pmmode[$i+1]=$pmmode[$i-1];
      $pke[$i]=10;
      $pke[$i+1]=10;
    }
  }

  // Make NA for all keys
  for ($i=0; $i<count($ca); $i++) {
    $key=$posk[$i];
    if ($pmmode[$i]>0) $key+=3;
    check_note_range($key);
    $pkey_na[$i]=make_key_na($key);
  }

  // Make fixed keys stats
  $kfreq=$empty_na;
  for ($i=0; $i<count($ca); $i++) {
    $key=$posk[$i];
	if ($pmmode[$i]) $key+=3;
	check_note_range($key);
    $kfreq[$key]++;
  }
  
  // SHOW
  // Show main key
  echo " <b>Main key: ";
  $fcf=$cfreq[$main_key];
  if ($fcf==0) $fcf=1;
  if ($mfreq[$main_key]/$fcf>0.5) echo get_notename(ktominor($main_key), 1)."m";
    else echo get_notename($main_key, 1);
  echo "</b> (confidence ".round($main_nav[0]*1000, 0)."/".round($main_nav[1]*1000, 0).",";
  echo " minority ".round($mfreq[$main_key]/$fcf*100, 0)."%)";

  $align="center";
  $newline="<td bgcolor=black></td>";
  //echo "/$cp/";
  //print_r($ca);
  echo "<p><table border=1>";
  echo "<tr><td><b>Degree:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><b><font color=green>";
    if ($posk[$i]<13) echo get_dname($pkey[$i]-$posk[$i], $pct[$i], $pmmode[$i])."</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "<tr><td><b>Source:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td  align=$align";
    if ((($posk[$i]!=$posk[$i-1] || $pmmode[$i]!=$pmmode[$i-1])) && ($i>0)) echo " bgcolor=pink";
	  else echo " bgcolor=lightgray";
    echo " title='Listen from here'";
    echo ">";
	$st="";
	for ($x=$i; $x<count($ca); $x++) $st.=$ca[$x]." ";
	echo "<a target=_blank href='chplay.php?cp=".urlencode($st)."'>";
	echo "<b>".$ca[$i]."</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "<tr><td><b>Key:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align onMouseOver=\"return overlib('";
    if ($pke[$i]==0) echo " Detected by exact match from position ".($peroot[$i]+1)." to position ".($peup[$i]+1);
    if ($pke[$i]==1) echo " Starting ambiguity -> main key";
    if ($pke[$i]==2) echo " Ending ambiguity -> main key";
    if ($pke[$i]==3) echo " First SLocal key chosen";
    if ($pke[$i]==4) echo " Two first SLocal keys ambiguous, chosen based on neighbours";
    if ($pke[$i]==5) echo " Deleted single key here";
    if ($pke[$i]==6) echo " Replaced garbage with first SLocal key";
    if ($pke[$i]==7) echo " Replaced garbage with second SLocal key based on neighbours";
    if ($pke[$i]==8) echo " Deleted double key here";
    if ($pke[$i]==9) echo " Deleted single mode here";
    if ($pke[$i]==10) echo " Deleted double mode here";
    echo "', WRAP);\" onMouseOut='nd();'";
    echo ">";
    if (!($pke[$i]>0)) echo "<font color=green><b>";
    echo get_notename($posk[$i], 1);
    if ($pmmode[$i]>0) echo "m";
    echo "</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
if (isset($showall)) {
  echo "<tr><td><b>Guesses:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><font color=gray>".get_notenames_ka($possk[$i])."</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  //for ($i=0; $i<count($ca); $i++) echo "<td align=$align><font color=gray>".str_replace(get_notename($posk[$i]), "<font color=green><b>".get_notename($posk[$i])."</b></font>", get_notenames_ka($possk[$i]))."</td>";
  echo "<tr><td><b>Local:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><font color=gray>".get_notenames_ka($possk2[$i])."</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "<tr><td><b>SLocal:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "\r\n<td align=$align ";
	echo "onMouseOver=\"return overlib('<nobr><b>";
	$max=max($pnas[$i]);
	for ($x=0; $x<12; $x++) {
	  echo "<font color=".make_color($pnas[$i][$x], $max, 1).">";
    echo get_notename($x, 1);
	  echo " ";
	}
	echo "</b><font color=gray>(notes)<br><b>";
	$max=max($pkna[$i]);
	for ($x=0; $x<12; $x++) {
	  echo "<font color=#".make_color($pkna[$i][$x], $max, 0).">".get_notename($x, 1)." ";
	}
	echo "</b> <font color=gray>(keys) ";
	//for ($x=0; $x<12; $x++) echo "<tr><td><font size=small>".get_notename($x)."<td>".$pnas[$i][$x];
	echo "', FGCOLOR, '#e3e3FF', CAPTION, '";
	echo "Confidence ".round($pnav[$i][0]*1000, 0)."/".round($pnav[$i][1]*1000, 0)." ";
	echo "', WRAP);\" onMouseOut='nd();'";
	echo "><font color=gray>".get_notename($pnak[$i][0], 1).",".get_notename($pnak[$i][1], 1)."</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "<tr><td><b>Minority:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align ";
  	echo "onMouseOver=\"return overlib('<nobr>";
    for ($x=0; $x<count($pmmul[$i]); $x++) {
      if ($pmtype[$i][$x]==1) echo "<font color=green><b>";
      else if ($pmtype[$i][$x]==2) echo "<font color=red><b>";
      if ($pmloc[$i][$x]==$i) echo "<u>";
      //else echo "<font color=black>";
      echo $ca[$pmloc[$i][$x]];
      echo " ".$pmmul[$i][$x];
      echo "</u></b></font>";
      echo "<br>";
    }
  	echo "', FGCOLOR, '#e3e3FF', CAPTION, '";
	  echo "Minority";
	  echo "', WRAP);\" onMouseOut='nd();'";
    echo ">";
    $mnr=round($pmpos[$i]*100, 0);
    if ($mnr<=50) echo "<font color=gray>";
    if ($mnr>50) echo "<b>";
    echo  $mnr."%</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
}
  //for ($i=0; $i<count($ca); $i++) echo "<td align=$align><font color=gray>".str_replace(get_notename($posk[$i]), "<font color=green><b>".get_notename($posk[$i])."</b></font>", get_notenames_ka($possk2[$i]))."</td>";
  echo "<tr><td><b>Move:</b></td>";
  for ($i=0; $i<count($ca)-1; $i++) {
    echo "<td align=$align";
    $mv=count_key_move($pkey[$i], $pkey[$i+1]);
    if ($mv==2.5) echo " bgcolor=lightgreen";
    if ($mv==3 || $mv==-3) echo " bgcolor=pink";
    if ($mv==0.5 || $mv==-0.5) echo " bgcolor=orange";
    if ($mv==-2.5) echo " bgcolor=lightblue";
    if ($mv==0) echo " bgcolor=yellow";
    echo ">";
    if ($mv>0) echo "+";
    echo "$mv";
    echo "</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
if (isset($showall)) {
  echo "<tr><td><b>KMove:</b></td>";
  for ($i=0; $i<count($ca)-1; $i++) {
    if (($posk[$i]!=$posk[$i+1] || $pmmode[$i]!=$pmmode[$i+1]) && $posk[$i]!=13 && $posk[$i+1]!=13) {
      echo "<td align=$align";
      $mv=count_key_move($posk[$i], $posk[$i+1]);
      if ($mv==2.5) echo " bgcolor=lightgreen";
      if ($mv==3 || $mv==-3) echo " bgcolor=pink";
      if ($mv==0.5 || $mv==-0.5) echo " bgcolor=orange";
      if ($mv==-2.5) echo " bgcolor=lightblue";
      if ($mv==0) echo " bgcolor=yellow";
      echo "><b>";
      if ($mv>0) echo "+";
      echo "$mv";
      echo "</td>";
    } else {
      echo "<td><font color=white>-";
    }
    if ($pct[$i]['newline']) echo "$newline";
  }
}
  echo "<tr><td><b>Common:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><font color=gray>";
    $st=get_notenames($cna[$i], $pkey[$i], $posk[$i], $pmmode[$i], $cna[$i+1]);
    //$sa=explode(",", get_notenames(na_and($cna[$i], $cna[$i+1])));
    //for ($x=0; $x<count($sa); $x++) $st=str_replace($sa[$x], "<font color=blue><b>".$sa[$x]."</font></b>", $st);
    echo "$st</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
if (isset($showall)) {
if (isset($debug)) {
  echo "<tr><td><b>New:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><font color=gray>";
    $st=get_notenames($pnew[$i], $pkey[$i]);
    $sa=explode(",", get_notenames(na_and($cna[$i], $cna[$i+1])));
    for ($x=0; $x<12; $x++) if ($main_key_na[$x]<$pnew[$i][$x]) {
      $nname=get_notename($x);
      $st=str_replace($nname, "<font color=brown><b>".$nname."</font></b>", $st);
    }
    echo "$st</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
}
  echo "<tr><td><b>Diss:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    $lna=na_new($pkey_na[$i], $cna[$i]);
    $st="";
    for ($x=$pkey[$i]; $x<$pkey[$i]+12; $x++) if ($lna[$x%12]>0) $st.=get_mname(($x%12)-$posk[$i]);
    echo "<td align=$align title='$st'><font color=brown><b>";
    $st=get_notenames(na_new($pkey_na[$i], $cna[$i]), $pkey[$i]);
    echo "$st</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "<tr><td><b>MDiss:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    $lna=na_new($main_key_na, $cna[$i]);
    $st="";
    for ($x=$pkey[$i]; $x<$pkey[$i]+12; $x++) if ($lna[$x%12]>0) $st.=get_mname(($x%12)-$main_key);
    echo "<td align=$align title='$st'><font color=brown><b>";
	//print_r($main_key_na);
    $st=get_notenames(na_new($main_key_na, $cna[$i]), $pkey[$i]);
    echo "$st</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
if (isset($debug)) {
  echo "<tr><td><b>DissDegr:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td align=$align><font color=brown><b>";
    $lna=na_new($pkey_na[$i], $cna[$i]);
    $st="";
    for ($x=0; $x<12; $x++) if ($lna[$x]>0) $st.=get_mname($x-$posk[$i]);
    echo "$st</td>";
    if ($pct[$i]['newline']) echo "$newline";
  }
}
}
  echo "<tr><td><b>N:</b></td>";
  for ($i=0; $i<count($ca); $i++) {
    echo "<td bgcolor=black align=$align><font color=lightgray>".($i+1);
    if ($pct[$i]['newline']) echo "$newline";
  }
  echo "</table>";
  
  // Show key statistics
  echo "<p><b>Statistics of detected keys:</b>";
  echo "<table border=1><tr>";
  echo "<th bgcolor=lightblue>Key</th>";
  echo "<th bgcolor=lightblue>Confidence</th>";
  echo "<th bgcolor=lightblue>Guesses</th>";
  echo "<th bgcolor=lightblue>Fixed key</th>";
  echo "<th bgcolor=lightblue>Chords</th>";
  echo "<th bgcolor=lightblue>Minority</th>";
  echo "</tr>";
  for ($i=0; $i<12; $i++) {
    if ($main_nav[$i]==0) break;
	$key=$main_nak[$i];
    echo "<tr><td><center><b>".get_notename($key, 1);
    if ($mfreq[$key]>0) echo " (".get_notename(ktominor($key), 1)."m)";
    echo "</td>";
	echo "<td onMouseOver=\"return overlib('<nobr>Uncorrected: ".round($main_nav2[$i]*1000, 0)."', WRAP);\" onMouseOut='nd();'>";
	echo "<center>".round($main_nav[$i]*1000, 0)."</td>";
	echo "<td><center>".$na[$key]." (".round($na[$key]*100/count($ca), 0)."%)</td>";
	echo "<td><center>".($kfreq[$key]+0)." (".round($kfreq[$key]*100/count($ca))."%)</td>";
	echo "<td><center>".($cfreq[$key]+0)." (".round($cfreq[$key]*100/count($ca3), 0)."%)</td>";
    $fcf=$cfreq[$key];
    if ($fcf==0) $fcf=1;
	echo "<td><center>".($mfreq[$key]+0)." (".round($mfreq[$key]*100/$fcf, 0)."%)</td>";
    if ($i==0) echo "<td>Main key</td>";
    if ($i==1) echo "<td>Second possible key</td>";
  }
  echo "</table>";
  if ($main_key_amb) echo "<p><font color=brown><b>Main key ambiguity detected!</b></font>";
  echo "<hr>";
  return $posk;
}

// Parse file if any
if (isset($cf)) {
  $fa=file($cf);
  $started=0;
  $cp="";
  for ($i=0; $i<count($fa); $i++) {
    if ($started>0) {
      if (strpos($fa[$i], "PRE>")>0) break;
      if (strlen(str_replace(" ", "", $fa[$i]))>2) $cp.=strip_tags($fa[$i]);
    }
    if (!(strpos($fa[$i], "Key") === FALSE)) {
      $started=1;
      $skey=substr($fa[$i], 4, 100);
    }
    if (!(strpos($fa[$i], "<TITLE>") === FALSE)) $tit=str_replace("<TITLE>", "", str_replace("</TITLE>", "", $fa[$i]));
  }
  //$cp=escape_cp($cp);
}

// Parse cfs if any
if (isset($cfs)) {
  $fa=explode("\n", $cfs);
  echo "hello";
  echo count($fa);
  $started=0;
  $cp="";
  for ($i=0; $i<count($fa); $i++) {
    if ($started>0) {
      if (strpos($fa[$i], "PRE>")>0) break;
      if (strlen(str_replace(" ", "", $fa[$i]))>2) $cp.=strip_tags($fa[$i])."\r\n";
    }
    if (!(strpos($fa[$i], "Key") === FALSE)) {
      $started=1;
      $skey=substr($fa[$i], 4, 100);
    }
    if (!(strpos($fa[$i], "<TITLE>") === FALSE)) $tit=str_replace("<TITLE>", "", str_replace("</TITLE>", "", $fa[$i]));
  }
  //$cp=escape_cp($cp);
}
$tit=stripslashes($tit);

// Parse mysql history
/*
if (isset($ci)) {
  $r=mysql_query("SELECT * FROM am_hist WHERE id=".mysql_real_escape_string($ci));
  $w=mysql_fetch_array($r);
  if ($admh || ($w[host]==$REMOTE_ADDR)) {
    $cp=$w[cp];
    if ($w[tit]!="") $tit=$w[tit];
    if ($w[adim]>0) $adim="on";;
    $skey=$w[skey];
    if ($w[showall]>0) $showall="on";
    if ($w[adup]>0) $adup="on";
  }
}

// Get history
$r=mysql_query("SELECT * FROM am_hist WHERE host='$REMOTE_ADDR' ORDER BY id DESC LIMIT 1");
$w=mysql_fetch_array($r);
if (!isset($submit)) {
  if ($w[adim]>0) $adim=1;
  if ($w[showall]>0) $showall=1;
  if ($w[adup]>0) $adup=1;
}

if (isset($cp) && ($cp!="")) {
  //if (!isset($ci)) 
    //mysql_query("INSERT INTO am_hist(host,cp,adim,showall,tit,skey,adup) VALUES('$REMOTE_ADDR', '".addslashes($cp)."', '".isset($adim)."', '".isset($showall)."', '".addslashes($tit)."', '$skey', '".isset($adup)."')");
  //echo mysql_error();
}
*/

echo "<TITLE>";
if (isset($tit) && ($tit!="")) echo "$tit - ";
echo "Automatic Chord Sequence Analyser System</TITLE>";
echo "<SCRIPT TYPE='text/javascript' SRC='overlibmws/overlibmws.js'></SCRIPT>";
echo "<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>";
echo "<H2>Automatic Chord Sequence Analyser System";
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="rualark@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Rualark">
<input type="hidden" name="item_number" value="Ancho">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<?
echo "</H2><form method=get>";
if (isset($tit) && $tit!="") echo "<b>Title</b>: $tit <a target=_blank href=\"http://youtube.com/results?search_query=$tit\"><img border=0 src=images/youtube.jpg></a> <a target=_blank href=\"/files/find.php?search=$tit\"><img border=0 src=images/search.jpg></a><br>";
if (isset($skey) && $skey!="") echo "<b>Stated key</b>: $skey<br>";
echo "<b>Chord sequence:</b> (use spaces or newlines to separate chords)";
echo "<br><textarea rows=10 cols=150 name=cp size=150>$cp</textarea>";
echo "<br><table><td><input name=submit type=submit> ";
echo "<td>| <a href=ancho.php>Clear</a> | ";
echo "<input type=hidden name=tit value=\"$tit\"><input type=hidden name=skey value='$skey'>";
echo "<td onMouseOver=\"return overlib('Warning! Analysing these chords may decrease the accuracy of the result.', WRAP);\" onMouseOut='nd();'><input type=checkbox name=adim ";
if (isset($adim)) echo "checked";
echo "> Analyse dim/aug chords";
echo "<td onMouseOver=\"return overlib('Removing duplicate chords makes results more readable, but may also make analysis less accurate.', WRAP);\" onMouseOut='nd();'><input type=checkbox name=adup ";
if (isset($adup)) echo "checked";
echo "> Remove duplicate chords";
echo "<td onMouseOver=\"return overlib('This shows additional rows with keys guessed by different algoritms, dissonances with main key and local keys.', WRAP);\" onMouseOut='nd();'> <input type=checkbox name=showall ";
if (isset($showall)) echo "checked";
echo "> Show additional data";
//echo "<b>Chord progression:</b> <input name=cp value='$cp' size=150> <input type=submit>";
echo "<td>| <a href=ralphpatt/Song.html>Jazz standards library</a> | ";
//echo "<td><a href=ahist.php>History</a> | ";
echo "<td><a href='ancho.php?cp=C+C7+Cmaj7+C-+Cm+Cm7+Co+Cdim+Chdim+Caug+C%2B+C%2B7+C7b9&adim=on'>Examples</a> | ";
echo "</table></form><p>";

if (!isset($cp) || $cp=="") {
} else {
  get_key_from_cp($cp, $ka);
  echo "<font color=gray>";
  echo "<p><b>Key</b> - shows the  key detected for the position. Algoritm tries to detect minor keys based on occurence of minor tonic keys in the part.";
  echo "<p><b>Pink chord background</b> - shows chords, that do not interact with the previous line and form new key";
  echo "<p><b>Degree</b> - shows the degree of chord over the detected key";
  echo "<p><b>Guesses</b> - shows the possible keys in the position, taking previous chords into account. Guesses are always major. If there is more then one possibility, algorithm will not show it in the Key row. Those selected for ultimate keys are green";
  echo "<p><b>Local</b> - shows all possible keys for the chord, without taking previous chords into account.";
  echo "<p><b>SLocal</b> - shows most probable keys for the position, considering several chords before and after it";
  echo "<p><b>Minority</b> - probability of the current key being minor (calculated based on surrounding chords statistic)";
  echo "<p><b>Move</b> - shows how many whole tones the key jumps to the next chord:";
  echo "<table border=1>";
  echo "<tr><td bgcolor=yellow>0</td><td>Same base key. e.g. C -> Cm</td>";
  echo "<tr><td bgcolor=orange>+0.5 or -0.5</td><td>Chromatic movement. e.g. C -> C#dim </td>";
  echo "<tr><td bgcolor=white>+1,5 or +2 or -1,5 or -2</td><td>Mediant movement. e.g. Em -> Ab </td>";
  echo "<tr><td bgcolor=lightgreen>+2.5</td><td>Classic resolving V -> I. e.g. G -> C</td>";
  echo "<tr><td bgcolor=lightblue>-2.5</td><td>Rock resolving IV -> I. e.g. F -> C</td>";
  echo "<tr><td bgcolor=pink>+3</td><td>Tritone movement. e.g. H -> F</td>";
  echo "</table>";
  echo "1, 1.5 and 2 jumps are not colored";
  echo "<p><b>KMove</b> - shows how many whole tones the key jumps to the next key";
  echo "<p><b>Common</b> - shows notes of the current chord, highlighting notes, that are common with the next chord";
  //echo "<p><b>New</b> - shows notes, that appeared new to the previous chord (or number of chords in the same key). Those, which dissonate with Main key are shown in brown";
  echo "<p><b>MDiss</b> - shows notes of the current chord, which dissonate with diatonic of the Main key";
  echo "<p><b>Diss</b> - shows notes of the current chord, which dissonate with diatonic of the current key";
  //echo "<p><b>DissDegr</b> - ";
  echo "<p>Mouse over the table to see additional information";
}
  echo "<hr>";
  echo "<font color=gray>";
  echo "<p>The algorithm knows Bb and H notes. <u>B is interpreted as H, not Bb!</u>";
  echo "<p>Example: F-7 Bb-7 Eb7 Abmaj7 Dbmaj7 D-7 G7 Cmaj7 C-7 F-7 Bb7 Ebmaj7 Abmaj7 A-7 D7 Gmaj7 A-7 D7 Gmaj7 F#-7 H7 Emaj7 F-7 Bb-7 Eb7 Abmaj7 Dbmaj7 Db-6 C-7 Hdim Bb-7 Eb7 Abmaj7";
  echo "<p>You can use following chords: m (minor), - (dorian), 7 (sept), maj7 (major 7), dim (diminished), m7b5 (half diminished), aug or + (augmented), b9 (contains b9)";
  echo "<p>If you want to use sixth notes, use chord inversions instead. e.g. Am7 instead of C6, or Hm7b5 instead of D-6";

echo "<p><font color=black>2011 Copyright by Alexey Arkhipenko. Please feel free to write me feedback: rualark at google mail (gmail.com)</font>";
   $mtime = microtime();
   $mtime = explode(" ",$mtime);
   $mtime = $mtime[1] + $mtime[0];
   $endtime = $mtime;
   $totaltime = round($endtime - $starttime, 2);
   echo "<p>The script ran ".$totaltime." seconds"; 
   include "footer.php";
?>

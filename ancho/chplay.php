<?
header('Content-type: audio/midi');
error_reporting(0);
//error_reporting(E_ALL);

if (isset($_GET['adim'])) $adim=$_GET['adim'];
if (isset($_GET['adup'])) $adup=$_GET['adup'];
if (isset($_GET['cp'])) $cp=$_GET['cp'];

require "amlib.php";

function make_midtxt($cp) {
  global $adup;
  $st="";
  $ca2=remove_adup(explode(" ", $cp), isset($adup));
  $step=1500;
  $start=500;
  $ch=13;
  $bnote=60;
  $vel=110;
  //echo count($ca2);
  for ($i=0; $i<count($ca2); $i++) {
    $na=make_na_from_chordname($ca2[$i], $pkey[$i], $pct[$i]);
	//print_r($na);
	//echo "<br>";
    for ($x=0; $x<12; $x++) if ($na[$x]>0) $st.=($step*$i+$start)." On ch=$ch n=".($x+$bnote)." v=$vel\r\n";
    for ($x=0; $x<12; $x++) if ($na[$x]>0) $st.=($step*($i+1)+$start)." Off ch=$ch n=".($x+$bnote)." v=$vel\r\n";
  }
  $st.=(($i+1)*$step+$start)." Pb ch=13 v=8192\r\n";
  $st.=(($i+1)*$step+$start)." Par ch=13 c=64 v=0\r\n";
  $st.=(($i+1)*$step+$start)." Par ch=13 c=7 v=100\r\n";
  $st.=(($i+1)*$step+$start)." Par ch=13 c=6 v=0\r\n";
  $st.=(($i+1)*$step+$start)." Meta TrkEnd\r\n";
  $st.="TrkEnd";
  return $st;
}

if (isset($_GET['player'])){
	$player = $_GET['player'];
	$autostart = isset($_GET['autostart']);
	$loop = isset($_GET['loop']);
	$visible = isset($_GET['visible']);
}else{
	$player = 'default';
	$autostart = true;
	$loop = false;
	$visible = true;
}

$txt = 'MFile 1 5 480
MTrk
0 SeqSpec 00 00 41
0 Meta Text "Seq-1"
0 SMPTE 96 0 10 0 0
0 TimeSig 4/4 24 8
0 Tempo 500000
0 Meta TrkEnd
TrkEnd
MTrk
0 Meta Text "Piano"
0 Par ch=13 c=6 v=0
0 Par ch=13 c=7 v=100
0 Par ch=13 c=64 v=0
0 Pb ch=13 v=8192
0 PrCh ch=13 p=1
';

$txt2='480 On ch=13 n=55 v=87
960 On ch=13 n=74 v=85
960 On ch=13 n=70 v=97
1059 Off ch=13 n=74 v=53
1063 Off ch=13 n=70 v=78
1440 On ch=13 n=70 v=95
1440 On ch=13 n=74 v=85
1920 On ch=13 n=51 v=101
1934 Off ch=13 n=55 v=60
1999 Off ch=13 n=70 v=36
2002 Off ch=13 n=74 v=44
2400 On ch=13 n=70 v=95
2400 On ch=13 n=73 v=99
2505 Off ch=13 n=73 v=73
2508 Off ch=13 n=70 v=64
2880 On ch=13 n=70 v=103
2880 On ch=13 n=73 v=103
3360 On ch=13 n=55 v=99
3362 Off ch=13 n=51 v=85
3453 Off ch=13 n=73 v=56
3466 Off ch=13 n=70 v=57
3840 On ch=13 n=70 v=97
3840 On ch=13 n=74 v=90
3951 Off ch=13 n=70 v=72
3960 Off ch=13 n=74 v=57
4320 On ch=13 n=70 v=105
4320 On ch=13 n=74 v=92
4800 On ch=13 n=51 v=107
4810 Off ch=13 n=55 v=58
4920 Off ch=13 n=74 v=33
4932 Off ch=13 n=70 v=41
5280 On ch=13 n=70 v=111
5280 On ch=13 n=73 v=95
5383 Off ch=13 n=73 v=58
5392 Off ch=13 n=70 v=70
5760 On ch=13 n=73 v=92
5760 On ch=13 n=70 v=103
6178 Off ch=13 n=73 v=67
6178 Off ch=13 n=70 v=66
6192 Off ch=13 n=51 v=81
6240 On ch=13 n=55 v=82
6240 On ch=13 n=70 v=111
6240 On ch=13 n=74 v=103
6412 Off ch=13 n=70 v=87
6425 Off ch=13 n=74 v=65
6475 Off ch=13 n=55 v=59
6720 Pb ch=13 v=8192
6720 Par ch=13 c=64 v=0
6720 Par ch=13 c=7 v=100
6720 Par ch=13 c=6 v=0
6720 Meta TrkEnd
TrkEnd';

$players = array(
	'default'=>'Default',
	'quicktime'=>'Quicktime',
	'crescendo'=>'Crescendo',
	'bgsound'=>'IE Win BgSound',
	'windowsmedia'=>'Windows Media',
	'beatnik'=>'Beatnik',
	'mp3_flash'=>'MP3 Flash Player',
	'ogg_html5'=>'OGG HTML5 Player'
);
$settings = array(
	'autostart'=>'Autostart',
	'loop'=>'Loop',
	'visible'=>'Visible'
);

	require('./classes/midi.class.php');
	
	$txt.=make_midtxt($cp);
//	$txt.=$txt2;

//echo "<pre>".$txt."\r";

	$midi = new Midi();
	$midi->importTxt($txt);
	echo $midi->getMid();
?>
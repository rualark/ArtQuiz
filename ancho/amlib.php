<?

$mkey_b = array       (1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0);

$nnames = array ("C", "C#", "D", "D#", "E", "F", "F#", "G", "G#", "A", "A#", "H");
$knames = array ("C", "Db", "D", "Eb", "E", "F", "Gb", "G", "Ab", "A", "Bb", "H");
$dnames_maj = array ("I", "bII", "II", "bIII", "III", "IV", "#IV", "V", "bVI", "VI", "VIIb", "VII");
$dnames_min = array ("I", "I#", "II", "III", "III#", "IV", "IV#", "V", "VI", "VIIb", "VII", "VII#");
$mnames_maj = array ("1", "b2", "2", "+2", "3", "4", "+4", "5", "b6", "6", "b7", "7");
$mnames_min = array ("1", "b2", "2", "3", "b4", "4", "+4", "5", "6", "b7", "7", "+7");

$diatonic_na = array  (1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1);
$major_na = array (1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0 ,0);
$dim_na = array   (1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0 ,0);
$hdim_na = array  (1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1 ,0);
$aug_na = array   (1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0 ,0);
$min_na = array   (1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0 ,0);
$empty_na = array (0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ,0);

$global_b=0;
//$debug=1;

function ktomajor($key, $minor=1) {
  if ($minor>0) {
    $key=$key+3;
    check_note_range($key);
  }
  return $key;
}

function ktominor($key, $minor=0) {
  if (!($minor>0)) {
    $key=$key-3;
    check_note_range($key);
  }
  return $key;
}

function check_note_range(&$n) {
  $n= $n % 12;
  if ($n<0) $n+=12;
  return $n;
}

function sort_kna($kna, &$nak, &$nav) {
  arsort($kna);
  $i=0;
  $nsum2=array_sum($kna);
  if ($nsum2>0) foreach ($kna as $key => $val) {
    $nak[$i]=$key;
    $nav[$i]=$val/$nsum2;
    if ($debug>0) echo get_notename($key)."/$val ";
    $i++;
  }
}

function get_key_amb($na, &$nak, &$nav, &$kna, $kna_cor=0) {
  global $empty_na, $diatonic_na, $debug, $main_key, $dom_key;
  if ($debug>0) for ($i=0; $i<12; $i++) echo get_notename($i)."/".$na[$i]." ";
  if ($debug>0) echo "<br>";
  //print_r($na);
  $kna=$empty_na;
  if ($debug) print_r($na);
  if ($debug) echo get_notenames($na)."<br>";
  $nsum=array_sum($na);
  for ($i=0; $i<12; $i++) {
    for ($x=0; $x<12; $x++) {
      $kna[$i]+=$na[($x+$i)%12]*$diatonic_na[$x];
    }
    if ($kna_cor!=0) $kna[$i]+=$kna_cor[$i];
  }
  //if ($kna_cor!=0) print_r($kna);
  sort_kna($kna, $nak, $nav);
  $num_i=count($nak);
  // Correct ambigous result
  if (($main_key!=13) && ($nav[0]==$nav[1])) {
    //print_r($kna);
    $amb_i=0;
    while (($nav[0]==$nav[$amb_i]) && ($amb_i<$num_i)) $amb_i++;
    // Find tonic and upgrade it
    if ($amb_i>0) {
      $found=0;
	    for ($i=0; $i<=$amb_i; $i++) if ($main_key==$nak[$i]) {
        $found=1;
        $kna[$i]+=1;
      }
      if (!$found) for ($i=0; $i<=$amb_i; $i++) if ($dom_key==$nak[$i]) {
        $found=1;
        $kna[$i]+=1;
      }
      if ($found) {
        //print_r($kna);
        sort_kna($kna, $nak, $nav);
      }
    }
  }
  if ($debug>0) echo "<br>";
}

function get_key($na, &$ka) {
  global $diatonic_na, $debug;
  $ka=array();
  if ($debug) print_r($na);
  if ($debug) echo get_notenames($na)."<br>";
  $kn=0;
  for ($i=0; $i<12; $i++) {
    $found=1;
    if ($debug) echo "$i: ";
    for ($p=0; $p<12; $p++) {
      if ($debug) echo "$p/".$na[($p+$i)%12]." ";
      if ($diatonic_na[$p]<$na[($p+$i) % 12]) {
        $found=0;
        break;
      }
    }
    if ($debug) echo "<br>";
    if ($found) {
      if ($debug) echo "Found $i<br>";
      $kn++;
      $ka[]=$i;
    }
  }
  return $kn;
}

function make_key_na($key) {
  global $diatonic_na;
  for ($i=0; $i<12; $i++) $na[($i+$key)%12]=$diatonic_na[$i];
  return $na;
}

function get_notename($nn, $b=0) {
  global $nnames, $global_b;
  return convert_b($nnames[$nn], $b);
}

function get_notenames_ka($ka) {
  global $nnames, $global_b;
  $st="";
  for ($i=0; $i<count($ka); $i++) {
    if ($i>0) $st.=",";
    $st.=$nnames[$ka[$i]];
  }
  return convert_b($st, 1);
}

function get_key_b($key, $minor=0) {
  global $mkey_b;
  if ($minor) $key+=3;
  check_note_range($key);
  //echo $mkey_b[$key]." ";
  return $mkey_b[$key];
}

function get_notenames($na, $start=0, $key=13, $minor=0, $color_na=0) {
  global $nnames, $global_b;
  if ($key==13) {
    $key_b=$global_b;
  } else {
    $key_b=get_key_b($key, $minor);
    //echo "key_b $key_b ";
  }
  $st="";
  for ($i=0; $i<12; $i++) {
    $p=($i+$start)%12;
    if ($na[$p]>0) {
      if (strlen($st)>0) $st.=",";
      if ($color_na>0) if ($color_na[$p]==1) $st.="<font color=blue><b>";
      $st.=$nnames[$p];
      if ($color_na>0) if ($color_na[$p]==1) $st.="</b></font>";
    }
  }
  return convert_b($st, $key_b);
}

function get_chord_type($cn) {
  global $global_b;
  $cn=strtolower($cn);
  $cn=" ".substr($cn, 1, 100);
  //echo "/$cn/";
  if (strpos($cn, "bb")>0) {
    $ct['b']=1;
  } else if (strpos($cn, "b9")>0) {
    $ct['b9']=1;
  } else {
    if (strpos($cn, "b")>0) $ct['b']=1;
  }

  if (strpos($cn, "|")>0) $ct['newline']=1;
  if (strpos($cn, "+")>0) $ct['aug']=1;
  if (strpos($cn, "-")>0) $ct['dor']=1;
  if (strpos($cn, "maj")>0) {
    $ct['maj']=1;
  } else {
    if (strpos($cn, "7")>0) $ct['7']=1;
    if (strpos($cn, "m")>0 && !(strpos($cn, "dim")>0)) $ct['m']=1;
  }
  if (strpos($cn, "m7b5")>0) {
    $ct['hdim']=1;
  } else {
    if (strpos($cn, "o")>0) $ct['dim']=1;
  }
  if ($ct['b']) $global_b=1;
  return $ct;
}

function make_na_from_chordname($cn, &$key, &$ct) {
  global $global_b, $major_na, $dim_na, $aug_na, $min_na, $nnames, $debug, $hdim_na;
  $cn=strtoupper($cn);
  $ct=get_chord_type($cn);

  if ($debug>0) print_r($ct);
  // Get root
  $key=array_search($cn[0], $nnames);
  //if ($key === FALSE) echo "<font color=red><b>Wrong chord $cn. If you try B - use Bb or H please!</b></font><br>";
  if ($cn[1] == 'B') $key--;
  if ($cn[1] == '#') $key++;

  // Check level 1
  $na1=$major_na;
  if ($ct['m'] || $ct['dor']) $na1=$min_na;
  if ($ct['dim']) $na1=$dim_na;
  if ($ct['hdim']) $na1=$hdim_na;
  if ($ct['aug']) $na1=$aug_na;
  check_note_range($key);
  if ($debug) echo "Key: $key<br>";

  // Apply level 1
  for ($i=0; $i<12; $i++) {
    $na[($i+$key)%12]=$na1[$i];
    if ($debug) echo (($i+$key)%12)."=".$na1[$i]."/$i<br>";
  }

  // Apply level 2
  if ($ct['7']) $na[(10+$key)%12]=1;
  if ($ct['maj']) $na[(11+$key)%12]=1;

  // Apply modifications
  if ($ct['b9']) $na[($key+1)%12]=1;

  //if ($cn=="F#-7") echo get_notenames($na); 
  return $na;
}

function convert_names($st) {
  global $global_b;

  if (strpos($st, "BB")>0) $global_b=1;
  $st=str_replace("BB", "HB", $st);
  $st=str_replace(" B", " H", $st);
  return $st;
}

function convert_b($st, $b=2) {
  global $global_b;
  if ($b==0) return $st;
  if ((!$global_b) && ($b==2)) return $st;
  $st=str_replace("C#", "Db", $st);
  $st=str_replace("D#", "Eb", $st);
  $st=str_replace("F#", "Gb", $st);
  $st=str_replace("G#", "Ab", $st);
  $st=str_replace("A#", "Bb", $st);
  return $st;
}

function na_or($na1, $na2) {
  global $empty_na;
  $na=$empty_na;
  for ($i=0; $i<12; $i++) {
    $na[$i]=($na1[$i] || $na2[$i])+0;
  }
  return $na;
}

function na_add($na1, $na2, $mul=1) {
  global $empty_na;
  $na=$empty_na;
  for ($i=0; $i<12; $i++) {
    $na[$i]=($na1[$i] + $na2[$i]*$mul)+0;
  }
  return $na;
}

function na_and($na1, $na2) {
  global $empty_na;
  $na=$empty_na;
  for ($i=0; $i<12; $i++) {
    $na[$i]=($na1[$i] && $na2[$i])+0;
  }
  return $na;
}

function na_new($na1, $na2) {
  global $empty_na;
  $na=$empty_na;
  for ($i=0; $i<12; $i++) {
    if (($na2[$i]==1) && ($na1[$i]==0)) $na[$i]=1;
  }
  return $na;
}

function ka_add(&$na, $ka, $mul=1) {
  for ($i=0; $i<count($ka); $i++) {
    $na[$ka[$i]]=$na[$ka[$i]]+$mul;
  }
}

function count_key_move($key1, $key2) {
  $mv=($key2-$key1)/2;
  if ($mv>3) $mv-=6;
  if ($mv<-3) $mv+=6;
  return $mv;
}

function escape_cp($cp) {
  $cp=str_replace("m7-5", "m7b5", $cp);
  //$cp=str_replace("m7b5", "hdim", $cp);
  $cp=str_replace("7-9", "7b9", $cp);
  $cp=str_replace("aug", "+", $cp);

  $cp=str_replace("hdim", "hddd", $cp);
  $cp=str_replace("dim", "o", $cp);
  $cp=str_replace("hddd", "hdim", $cp);

  $cp=str_replace("\t", " ", $cp);
  $cp=str_replace("|", " ", $cp);
  $cp=str_replace(",", " ", $cp);
  $cp=str_replace(";", " ", $cp);
  $cp=str_replace("[", "", $cp);
  $cp=str_replace("]", "", $cp);
  $cp=str_replace(":", "", $cp);
  $cp=str_replace("/", "", $cp);
  $cp=str_replace(".", " ", $cp);
  $cp=str_replace("_", " ", $cp);
  $cp=str_replace(" maj", "maj", $cp);
  $cp=str_replace("maj7", "maj", $cp);
  $cp=str_replace("Pickup", "", $cp);
  $cp=str_replace("\r", "| ", $cp);
  $cp=str_replace("\n", "| ", $cp);
  $cp=str_replace("1 ", " ", $cp);
  $cp=str_replace("2 ", " ", $cp);
  for ($i=0; $i<30; $i++) $cp=str_replace("  ", " ", $cp);
  while ($cp[0]==" " && strlen($cp)>1) $cp=substr($cp, 1, strlen($cp));
  while ($cp[strlen($cp)-1]==" " && strlen($cp)>1) $cp=substr($cp, 0, strlen($cp)-1);
  $cp=str_replace(" |", "|", $cp);
  $cp=str_replace("||", "|", $cp);
  return $cp;
}

function remove_adup($ar, $adup=1) {
  global $adim;
  $ar2=array();
  for ($i=0; $i<count($ar); $i++) {
    make_na_from_chordname($ar[$i], $key, $ct);
    if ((!$adup) || (strtolower(str_replace("|", "", $ar[$i]))!=strtolower(str_replace("|", "", $ar[$i+1])))) {
       if ( (isset($adim)) || ((!isset($ct['dim'])) && (!isset($ct['aug']))) ) {
         $st=$ar[$i];
		 $st[0]=strtoupper($st[0]);
         $ar2[]=$st;
       } else {
         if (strpos($ar[$i], "|")>0) {
           if (strpos($ar2[count($ar2)-1], "|")===FALSE) $ar2[count($ar2)-1].="|";
         }
       }
    }
  }
  return $ar2;
}

function get_dname($n, $ct=0, $mmode=0) {
  global $dnames_min, $dnames_maj;
  if ($n<0) $n+=12;
  $dnames=$dnames_maj;
  //if ($mmode) $dnames=$dnames_min;

  $st=$dnames[$n];
  if ($ct['m'] || $ct['dor']) $st.="m";
  if ($ct['aug']) $st.="+";
  if ($ct['dim']) $st.="o";
  return $st;
}

function get_mname($n, $mmode=0) {
  global $mnames_min, $mnames_maj;
  if ($n<0) $n+=12;
  $mnames=$mnames_maj;
  if ($mmode) $mnames=$mnames_min;
  $st=$mnames[$n];
  return $st;
}

function make_color($x, $max=100, $pattern=0) {
  //if ($x>0) $x+=$max/2;
  //$max+=$max/2;
  if ($x==0) return "e3e3FF";
  $rc=str_pad(dechex(round($x*254/$max, 0)), 2, '0', STR_PAD_LEFT);
  $rc2=str_pad(dechex(round(($max-$x)*254/$max, 0)), 2, '0', STR_PAD_LEFT);
  if ($pattern==0) return $rc."0000";
  if ($pattern==1) return "00".$rc."00";
  if ($pattern==2) return "0000".$rc;
  if ($pattern==3) return $rc.$rc2."00";
}

?>

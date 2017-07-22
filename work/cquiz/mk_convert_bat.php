<?
  $abspath = "N:\\Web\\site\\cquiz";
  $relpath = "../";
  $path1 = "music"; // Source folder
  $path2 = "music2"; // Folder for converted
  $path3 = "blocks2"; // Folder for converted and split
  $path4 = "CQuizLite";
  $path5 = "CQuizLite2";
  $bit = "128";
  $len = "1.0";
  
  include "mysql.php";
  include "cclib.php";
  include "../qlib.php";
  
  function check_tag($ma, $id, $st, $fname) {
	  if ($ma[$id] != "") {
	    //if (strpos($ma[$id], $st) === FALSE) echo "<font color=blue>Nogg <b>$st</b> in <b>$ma[$id]</b> for $fname</font><br>";
		}
  }
  
  function parse_md($md) {
    $sf1 = "album_artist";
    $sf2 = "album artist";
    $sf3 = "artist";
    $sf4 = "composer";
    for ($i=0; $i<count($md); $i++) {
      $st = $md[$i];
      if (strpos($st, $sf1)>0) {
        $ma[$sf1] = $st;
      } elseif (strpos($st, $sf2)>0) {
        $ma[$sf2] = $st;
      } elseif (strpos($st, $sf3)>0) {
        $ma[$sf3] = $st;
      } elseif (strpos($st, $sf4)>0) {
        $ma[$sf4] = $st;
      }
    }
    return $ma;
  }
  
  function myexec($path) {
    //$output = shell_exec( $path );
    exec( $path, $ra, $rv );
    for ($x=0; $x<count($ra); $x++) $output .= $ra[$x]." ";
    echo $path."<br>";
    echo "Error: $rv<br>";
    if ($rv != 0) echo "<font color=red>";
    else echo "<font color=green>";
    echo "<b>";
    echo "Output: ". $output."<br>";
    echo "</font></b>";
  }
  
  function TimeToSec($hms) {
    $t = explode(':', $hms);
    return $t[0] * 60 * 60 + $t[1]*60 + $t[2];
  }

  // Read tables
  $r = mysql_query("SELECT MAX(t_id) as t_id FROM cc_ctracks");
  echo mysql_error();
  $n = mysql_numrows($r);
  $wt = mysql_fetch_assoc($r);
  $r = mysql_query("SELECT MAX(b_id) as b_id FROM cc_qblocks");
  echo mysql_error();
  $n = mysql_numrows($r);
  $wb = mysql_fetch_assoc($r);

  $fh = fopen("mp3-info.bat", "w"); // info gathering
  $fh2 = fopen("convert12.bat", "w"); // convert to 128kbps
  $fh3 = fopen("split2.bat", "w"); // split to CQuizLite
  $fh4 = fopen("rename.bat", "w");
  $fh5 = fopen("split3.bat", "w"); // split to CQuiz
  $fh6 = fopen("rar.bat", "w");
  //$abspath2 = str_replace("\\", "/", $abspath);
  $fl=getSongList($relpath.$path1);
  $fl2=getSongList($relpath.$path2);
  $fl3=getSongList($relpath.$path3);
  if (is_array($fl)) sort($fl);
  if (is_array($fl2)) sort($fl2);
  if (is_array($fl3)) sort($fl3);

  fputs($fh3, "cd \"C:/Program Files (x86)/mp3splt/\"\n");
  fputs($fh5, "cd \"C:/Program Files (x86)/mp3splt/\"\n");
  fputs($fh3, "c:\n");
  fputs($fh5, "c:\n");

  // Create rar
  $r = mysql_query("SELECT * FROM cc_composers WHERE c_folder != '' ORDER BY c_id");
  echo mysql_error();
  $ccount = mysql_numrows($r);
  fputs($fh6, "mkdir ../$path5\n");
  for ($i=1; $i<$level_cust; $i++) {
    fputs($fh6, "mkdir \"../$path5/$i ".$level_name[$i]."\"\n");
  }
  for ($i=0; $i<$ccount; $i++) {
    $w = mysql_fetch_assoc($r);
    fputs($fh6, "cd \"$abspath\\$path4\\".
      $w[c_rating]." ".$level_name[$w[c_rating]].
      "\"\n"
      );
    fputs($fh6, "Rar.exe a \"../../$path5/".
      $w[c_rating]." ".$level_name[$w[c_rating]]."/".
      $w[c_folder].
      "\" \"".
      $w[c_folder].
      "\" >>rar.log\n");
    // Check if folder exists
    if (!is_dir("$relpath$path1/$w[c_folder]")) {
      if ($w[t_count] == 0) {
        echo "<font color=red>Not found folder for new composer: $w[c_folder]</font><br>";
      }
    }
  }
  
  // Create mp3-info.bat
  echo "Detected ".count($fl)." files in $path1<br>";
  echo "Detected ".count($fl2)." files in $path2<br>";
  echo "Detected ".count($fl3)." files in $path3<br>";
  //print_r($fl3);
  fputs($fh, "date /t >mp3info.txt\n");
  $b_id = $wb[b_id];
  $t_id = $wt[t_id];
  for ($i=0; $i<count($fl); $i++) {
    if (strpos(strtolower($fl[$i]), ".mp3")>0) {
      $p = str_replace("'", "", $fl[$i]);
      //echo $fl2[$i]."<br>";
      $fld = explode("/", $p);
      if ($p != $fl[$i]) {
        fputs($fh4, "rename \"".str_replace("/", "\\", $fl[$i])."\" \"".$fld[count($fld)-1]."\"\n");
      }
      $p = substr($fl[$i], strpos($fl[$i], "/")+1, strlen($fl[$i]));
      $p2 = substr($p, strpos($p, "/")+1, strlen($p));
      //echo $path2."<br>";
      $key2 = 1;
      if (is_array($fl2)) $key2 = array_search($relpath.$path2."/".$p2, $fl2);
      if ($key2 === false) {
        echo "<font color=red>$relpath$path2/$p2 Not found in $path2</font><br>";
      }
      $key3 = 1;
      if (is_array($fl3)) $key3 = array_search($path3."/".$p, $fl3);
      if ($key3 === false) {
        //echo "<font color=green>Not found $p in $path3</font><br>";
      }
      fputs($fh, "ffmpeg -i \"".$fl[$i]."\" 2>>mp3info.txt\n");
      //fputs($fh, "ffmpeg -b $bit -i \"".$fl[$i]."\" \"$out\"\n");
    }
  }
  $fa = file("mp3info.txt");
  
  $sf1 = "nput #0, mp3, from '";
  $sf2 = "bitrate: ";
  $sf3 = " Metadata:";
  $sf4 = " Duration:";
  
  //$r = mysql_query("TRUNCATE cc_ctracks");
  //$r = mysql_query("TRUNCATE cc_qblocks");
  // Create convert.bat
  $md_state = 0;
  for ($i=0; $i<count($fa); $i++) {
    $st = $fa[$i];
    if (strpos($st, "No such file")>0) {
      echo "<font color=red>Error $st</font><br>";
    }
    if (strpos($st, "Invalid data found")>0) {
      echo "<font color=red>Error $st</font><br>";
    }
    if (strpos($st, $sf1)>0) {
      $path = substr($st, strpos($st, $sf1)+strlen($sf1), strlen($st));
      $path = substr($path, 0, strpos($path, "'"));
      //$path = substr(str_replace("/".$path1."/", "/".$path3."/", "/".$path), 1, strlen($path)+10);
      $path = str_replace("/", "\\", $path);
    }
    if (strpos($st, $sf2)>0) {
      $md_state = 0;
      $br = substr($st, strpos($st, $sf2  )+strlen($sf2), strlen($st));
      $br = substr($br, 0, strpos($br, " kb"));
      $dur = substr($st, strpos($st, $sf4  )+strlen($sf4)+1, strlen($st));
      $dur = substr($dur, 0, strpos($dur, "."));
      $path_d = substr($path, strpos($path, "\\")+1, strlen($path));
      $path_d = substr($path_d, strpos($path_d, "\\"), strlen($path_d));
      $in = $path;
      $out = "..\\".$path2.$path_d;
      $out2 = "..\\".$path3.$path_d;
      $out_s = str_replace("\\", "/", $out);
      $out2_s = str_replace("\\", "/", $out2);
      $fld = explode("\\", $out);
      $fname = $fld[count($fld)-1];
      $folder="";
      $folder3="";
      for ($x=1; $x<count($fld)-1; $x++) {
        $folder .= "\\".$fld[$x];
        if ($x>1) $folder3 .= "/".$fld[$x];
      }
      $folder3 = substr($folder3, 1, strlen($folder3));
      $fld2 = explode("\\", $out2);
      $folder2="";
      $mkdir_st = ""; // string with md commands
      for ($x=1; $x<count($fld)-1; $x++) {
        $folder2 .= "\\".$fld[$x];
        $mkdir_st .= "md \"".$fld2[0].$folder2."\"\n";
      }
      $key2 = false;
      $r = mysql_query("SELECT * FROM cc_composers WHERE c_folder like '$fld[2]'");
      echo mysql_error();
      $n = mysql_numrows($r);
      if ($n != 1) echo "<font color=red>Not found folder $fld[2]</font><br>";
      $w = mysql_fetch_array($r);
      $md = str_replace("\"", "'", $md);
      // Parse md
      $ma = parse_md($mdd);
      //print_r($ma);
      check_tag($ma, "composer", $fld[2], $fname);
      check_tag($ma, "artist", $fld[2], $fname);
      //check_tag($ma, "album_artist", $fld[2], $fname);
      //check_tag($ma, "album artist", $fld[2], $fname);
      if (($ma["composer"] == "") && ($ma["artist"] == "")) {
        //if (strpos($fname, $fld[2]) === FALSE) echo "<font color=blue>Nogg <b>$fld[2]</b> in fname for $fname</font><br>";
      }
      $sec = TimeToSec($dur);
      $t_id ++;
      
      // This part is for adding metadata to existing tracks
      /*
      // Check number of rows
      $q4 = "SELECT * FROM cc_ctracks WHERE t_name='$fname' AND t_folder='$folder3'";
      $r4 = mysql_query($q4);
      echo "<font color=red>".mysql_error()."</font>";
      $n4 = mysql_numrows($r4);
      $cond = "AND t_folder='$folder3'";
      if ($n4 != 1) {
        echo "<font color=red>Affected $n4 rows: $q4</font><br>";
        // Disable folder condition
        $cond = "";
      }
      // Update metadata
      $q4 = "UPDATE cc_ctracks SET t_meta=\"$md\" WHERE t_name='$fname' $cond";
      $r4 = mysql_query($q4);
      echo "<font color=red>".mysql_error()."</font>";
      // End of part
      */
      
      $q = "INSERT INTO cc_ctracks VALUES('$t_id','$fname','$w[c_id]','','$br','$sec',\"$md\",'','','','','$folder3',0,0,0,'','$fname','$folder3',0)";
      //echo "$q<br>";
      //$r2 = mysql_query($q);
      echo "<font color=red>".mysql_error()."</font>";
      $t_id2 = mysql_insert_id();
      //if ($t_id != $t_id2) echo "Wrong t_id $t_id $t_id2<br>";
      $b_count = floor($sec / $len / 60)+1;
      $b_count2 = $b_count - 1;
      if ($b_count == 1) $b_count2 = 1;
      // Insert blocks
      for ($x=1; $x<=$b_count2; $x++) {
        $b_id ++;
        $q = "INSERT INTO cc_qblocks VALUES('$b_id','$x','$t_id','$w[c_id]','$w[c_rating]')";
        //echo "$q<br>";
        //$r3 = mysql_query($q);
        echo "<font color=red>".mysql_error()."</font>";
      }
      echo "<font color=red>".mysql_error()."</font>";
      //if (is_array($fl2)) $key2 = array_search($out_s, $fl2);
      if ($key2 === false) {
        fputs($fh5, "mp3splt -n -t $len -f \"$abspath\\$path2$path_d\" -d \"$abspath\\$path3\\$t_id\" -o \"@n3\" >>split.log\n");
        // Check if iconv works correctly !!!!!!!!!!!!!
        fputs($fh3, "mp3splt -t $len -f \"$abspath\\$path2$path_d\" -d \"$abspath\\$path3\\".
          $w[c_rating]." ".$level_name[$w[c_rating]]."\\".
          str_replace("/", "\\", $folder3).
          "\" -o \"@f_@n3\" -g \"r%%[@o,@b=#b #a,@a=".
          str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", $w[c_name3])).
          "\" >>split.log\n");
        // Remove last segment
        if ($b_count>1) fputs($fh3, "del \"$abspath\\$path3\\".
          $w[c_rating]." ".$level_name[$w[c_rating]]."\\".
          str_replace("/", "\\", $folder3)."\\".str_ireplace(".mp3", "", $fld[count($fld)-1]).
          "_".str_pad($b_count, 3, '0', STR_PAD_LEFT).".mp3\" >>split.log\n");
      } else {
        //echo "Found ".$fl2[$key2]."<br>";
      }
      $key3 = false;
      if (is_array($fl3)) $key3 = array_search($out2_s, $fl3);
      // Check if file is duplicated in path2
      $not_found_in_path2 = 0;
      if (!is_file($out_s)) {
        echo "<font color=red>Not converted ";
        $not_found_in_path2 = 1;
      }
      if ($not_found_in_path2 == 1) {
        fputs($fh2, $mkdir_st);
        if ($br<129) {
          fputs($fh2, "copy \"".$in."\" \"$out\" 2>>convert.log\n");
          echo "<b>";
        } else {
          fputs($fh2, "ffmpeg -n -b $bit -i \"".$in."\" \"$out\" 2>>convert.log\n");
        }
      }
      //echo "<li>$out_s $out2_s *$path* *$out* $out2* - /$br/".(TimeToSec($dur))."/ $md</b><br>";
      echo "$path</b></font><br>";
      //$tag = id3_get_tag($path);
	  $mdd = array();
    }
    if ($md_state == 1) {
      $md .= $st;
	  $mdd[] = $st;
    }
    if (strpos($st, $sf3)>0) {
      $md = "";
      $md_state = 1;
    }
  }

  fclose($fh);
  fclose($fh2);
  fclose($fh3);
  fclose($fh4);
  fclose($fh5);
  fclose($fh6);
?>
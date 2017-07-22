<?
  include "mysql.php";
  include "cclib.php";
  include "../qlib.php";

  $good_tags = array("album", "title");
  $bad_tags =  array("genre", "track", "artist", "album_artist", "album artist", "date", "composer", "disc", "encoder", "encoded_by", "DISCID", "TLEN");

  function clean($string) {
    //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // Removes special chars.
  }
  function parse_md($md) {
    GLOBAL $mia;
    $sf1 = "album_artist";
    $sf2 = "album artist";
    $sf3 = "artist";
    $sf4 = "composer";
    for ($i=0; $i<count($md); $i++) {
      $st = $md[$i];
      $st2 = trim($st);
      $tag = trim(substr($st2, 0, strpos($st2, ":")-1));
      $data = trim(substr($st2, strpos($st2, ":")+1));
      if ($tag != "") $ma[$tag] = $data;
      //echo "$tag<br>";
      $mia[$tag]++;
      /*
      if (strpos($st, $sf1)>0) {
        $ma[$sf1] = $st;
      } elseif (strpos($st, $sf2)>0) {
        $ma[$sf2] = $st;
      } elseif (strpos($st, $sf3)>0) {
        $ma[$sf3] = $st;
      } elseif (strpos($st, $sf4)>0) {
        $ma[$sf4] = $st;
      }
      */
    }
    return $ma;
  }
  
  
  $q = "SELECT * FROM cc_ctracks";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<pre>";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $ma = parse_md(explode("\n", $w[t_meta]));
    $meta2 = "";
    //$st1 = clean(str_replace("mp3", "", $w[t_name]));
    $st1 = clean($w[t_name]);
    $st2 = clean($ma[title]); 
    // Remove starting numbers
    /*
    for ($x=0; $x<20; $x++) {
      if (is_numeric($st1[0])) $st1 = substr($st1, 1); 
      else break;
    }
    */
    //echo "$st1 ";
    //echo "$st2 ";
    //$dist = levenshtein($st1, $st2);
    //echo $dist;
    // Build meta2 with main info
    if (strpos($st1, $st2) === false) {
      //echo "<font color=red>NO TITLE</font> ";
      if ($ma[title] != "") $meta2 .= "$ma[title]<br>";
    }
    if ($ma[album] != "") $meta2 .= "$ma[album]<br>";
    //echo "$w[t_name] ";
    //print_r($ma);
    //$meta2 = str_replace("\"", "'", $meta2);
    // Build meta3 with additional info
    $meta3 = "";
    foreach ($ma as $tag => $val) {
      if (!in_array($tag, $good_tags)) {
        if ($meta3 != "") $meta3 .= "<br>";
        $meta3 .= "$tag: $val";
      }
    }
    echo "$w[t_id]<br>$meta2";
    mysql_query("UPDATE cc_ctracks SET t_meta2=\"$meta2\", t_meta3=\"$meta3\", t_title=\"$ma[title]\", t_album=\"$ma[album]\" WHERE t_id=$w[t_id]");
    echo mysql_error();
  }
  arsort($mia);
  print_r($mia);
?>

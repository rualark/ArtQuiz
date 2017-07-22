<?
  include "qlib.php";
  include "style.php";
  include "menu.php";

  secure_variable("order");
  secure_variable("act");
  secure_variable("genre");
  secure_variable("rating");
  secure_variable("tag");
  secure_variable("nat");
  secure_variable("a_id");
  
  if ($a_id != 0) {
    die ("<script language=\"javascript\">location.replace(\"artist.php?a_id=$a_id\");</script>"); 
  }
  
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    if ($act == "genre") {
      for ($i=0; $i<50000; $i++) {
        $a = "a$i";
        if (isset($_GET[$a])) {
          if ($genre != "") {
            echo "Changing genre $genre for author $i<br>";
            mysql_query("UPDATE aq_artists SET a_genre='$genre' WHERE a_id='$i'");
            echo mysql_error();
          }
          if ($rating != "") {
            echo "Changing rating $rating for author $i<br>";
            mysql_query("UPDATE aq_artists SET a_rating='$rating' WHERE a_id='$i'");
            echo mysql_error();
          }
        }
      }
      die ("<script language=\"javascript\">location.replace(\"artists.php\");</script>"); 
      exit;
    }
  }
  
  start_time();
  
  if (!isset($order)) $order="a_start";
  if ($tag != '') {
    //load tag
    $r = mysql_query("SELECT * FROM aq_tags WHERE t_name = '$tag'");
    echo mysql_error();
    $wt = mysql_fetch_assoc($r);
    // show authors
    echo "Artists with tag <b>$tag</b>:";
    echo " <a target=_blank href='http://en.wikipedia.org/w/index.php?search=$tag'><img valign=top height=25 src=i/wikipedia.jpg></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$tag'><img valign=top height=25 src=i/google.png></a> ";
    if ($w[map_x2]>0) echo " <a target=_blank href='$url_main/amap/index.php#t$tag'><img valign=top height=25 src=i/time.png></a> ";
    echo "<p>";
    if ($wt[t_desc] != "") echo str_replace("\n", "<p>", $wt[t_desc])."<p>";
    $cond = "AND a_genre LIKE '%$tag%'";
  } elseif (isset($nat)) {
    // show authors
    echo "Artists by country: <b>$nat</b>:";
    echo " <a target=_blank href='https://www.google.ru/search?q=$nat'><img valign=top height=25 src=i/google.png></a> ";
    echo "<p>";
    $cond = "AND a_nation LIKE '%$nat%'";
  } else {
    $q = "SELECT COUNT(*) as cnt FROM aq_artists WHERE p_num>0";
    $r = mysql_query($q);
    echo mysql_error();
    $w = mysql_fetch_assoc($r);
    $q = "SELECT COUNT(*) as cnt FROM aq_paintings";
    $r = mysql_query($q);
    echo mysql_error();
    $w2 = mysql_fetch_assoc($r);
    $q = "SELECT COUNT(*) as cnt FROM aq_paintings WHERE p_desc_ru!='' OR p_desc_en!=''";
    $r = mysql_query($q);
    echo mysql_error();
    $w3 = mysql_fetch_assoc($r);
    echo "<p align=right>Total $w[cnt] artists, $w2[cnt] paintings ($w3[cnt] with description).<br>";
  }
  $q = "SELECT * FROM aq_artists WHERE p_num>0 $cond ORDER BY $order";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<form action=artists.php method=get>";
  echo "<input type=hidden name=act value=genre>";
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th><a href=artists.php?order=a_name>Name";
  echo "<th width=80><a href=artists.php?order=a_start>Years";
  echo "<th><a href='artists.php?order=a_nation, a_start'>Nation";
  echo "<th><a href='artists.php?order=a_genre, a_start'>Genre";
  if (($tag != '') || (isset($nat))) echo "<th>Preview";
  echo "<th><a href='artists.php?order=p_num desc'>Works";
  echo "<th><a href='artists.php?order=a_rating desc, a_start'>Rating";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td><center>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<input type=checkbox name=a$w[a_id]> ";
    }
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      //if ($w[a_genre] == "") {
        echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> ";
        echo "<a target=_blank href='http://en.wikipedia.org/w/index.php?search=".awiki($w[a_name])."'><img valign=top height=18 src=i/wikipedia.jpg></a> ";
      //}
      if ((!file_exists("paintings/$w[a_id]/photo.jpg"))) echo " <img title='No photo' src=i/painting.jpg height=16> ";
      //if (!file_exists("apic/".$w[a_id].".jpg")) echo "<a target=_blank href='https://www.google.ru/search?q=$w[a_name]'><img valign=top height=18 src=i/google.png></a> <a href=artists.php?a_id=$w[a_id]><font color=red>";
      if ($w[a_desc] != "") echo " <img style='opacity: 0.5' valign=top height=16 src=i/edit.png>";
    }
    echo "<a href=artist.php?a_id=$w[a_id]>";
    if (strlen($w[a_bio_en])>35 != "") echo "<font color=green>";
    echo "$w[a_name]</font></a>";
    //if ($w[a_er3ed] != "") echo " <a target=_blank href='http://er3ed.qrz.ru/$w[a_er3ed]'><img valign=top height=16 src=i/er3ed.jpg></a> ";
    if ($max_year>0) if (($w[a_stop] == 0) || ($w[a_stop] > $max_year)) echo " <img title='Тексты данного автора недоступны по лицензионным ограничениям' src=i/fire.png height=16>";
    echo "<td><center>$w[a_years]";
    echo "<td><center><a href='artists.php?nat=$w[a_nation]'>$w[a_nation]</a>";
    echo "<td width=300><center>";
    $ta = explode(",", $w[a_genre]);
    for ($x=0; $x<count($ta); $x++) {
      if ($x>0) echo ", ";
      $ta[$x] = trim($ta[$x]);
      echo "<a href='artists.php?tag=$ta[$x]'>$ta[$x]</a>";
    }
    // Get random painting
    if (($tag != '') || (isset($nat))) {
      $r2 = mysql_query("SELECT p_id FROM aq_paintings WHERE a_id='$w[a_id]' ORDER BY RAND() LIMIT 1");
      echo mysql_error();
      $w2 = mysql_fetch_assoc($r2);
      $p_id = $w2[p_id];
      $p_file = str_pad($p_id, 4, '0', STR_PAD_LEFT);
      echo "<td><center><a href='painting.php?a_id=$w[a_id]&p_id=$p_id'>";
      show_painting($w[a_id], $p_id, 250, 150);
      echo "</a>";
    }
    echo "<td><center>$w[p_num]";
    echo "<td><center>$w[a_rating]";
  }
  echo "</table>";
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    echo "<br>Change genre: <input type=text name=genre>";
    echo "<br>Change rating: <input type=text name=rating>";
    echo "<input type=submit>";
  }
  echo "</form>";
  stop_time();
  echo "<br>Green color shows artists with description";
?>
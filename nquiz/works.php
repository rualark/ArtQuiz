<?
  include "lib.php";
  include "style.php";
  include "menu.php";
  include "plib.php";
  
  secure_variable("w_id");
  secure_variable("c_id");
  secure_variable("p");
  secure_variable("act");
  secure_variable("margin1");
  secure_variable("margin2");
  secure_variable("order");
  secure_variable("newr");
  secure_variable("icor_y");
  secure_variable("icor2_y");
  secure_variable("time");
  
  start_time();
  
  if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
    if (isset($icor2_y)) {
      // load jpeg dimensions
      $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_{$p}.jpg'");
      echo mysql_error();
      $wj = mysql_fetch_assoc($r);
      $hei = $wj[p_height] * $jpeg_width/$wj[p_width];
      $margin2 = max(0, round($icor2_y/$hei*100, 2));
      mysql_query("UPDATE nq_pdf SET w_margin2=w_margin2-'$margin2' WHERE w_id='$w_id'");
      echo mysql_error();
      die("<script>location.href = document.referrer;</script>");
    }
    
    if (isset($time)) {
      mysql_query("UPDATE nq_jpeg SET t_time='$time' WHERE w_id='$w_id' AND page='$p'");
      echo mysql_error();
    }
    
    if (isset($icor_y)) {
      // load jpeg dimensions
      $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_{$p}.jpg'");
      echo mysql_error();
      $wj = mysql_fetch_assoc($r);
      $hei = $wj[p_height] * $jpeg_width/$wj[p_width];
      if ($icor_y < $hei/2) {
        $margin1 = max(0, round($icor_y/$hei*100, 2));
        mysql_query("UPDATE nq_pdf SET w_margin1='$margin1' WHERE w_id='$w_id'");
      } else {
        $margin2 = max(0, round(($hei-$icor_y)/$hei*100, 2));
        mysql_query("UPDATE nq_pdf SET w_margin2='$margin2' WHERE w_id='$w_id'");
      }
      echo mysql_error();
      die("<script>location.href = document.referrer;</script>");
    }
    
    if (isset($newr)) {
      if ($newr > 0) {
        mysql_query("UPDATE nq_pdf SET w_rating='$newr' WHERE w_id='$w_id'");
        echo mysql_error();
      }
      die("<script>location.href = document.referrer;</script>");
    }
    
    if ($act == "bad") {
      $fh2 = fopen("remove_bad_jpeg.bat", "a");
      for ($i=1; $i<1000; $i++) if (file_exists("$jpeg_path/{$w_id}_$i.jpg")) fputs($fh2, "del $jpeg_path\\{$w_id}_$i.jpg\r\n");
      mysql_query("UPDATE nq_pdf SET w_page1=0, w_page2=0, w_qpage=0 WHERE w_id='$w_id'");
      echo mysql_error();
      fclose($fh2);
      die("<script>location.href = document.referrer;</script>");
    }
    
    if ($act == "qpage") {
      mysql_query("UPDATE nq_pdf SET w_qpage='$p' WHERE w_id='$w_id'");
      echo mysql_error();
    }
    
    if ($act == "margin1") {
      $margin1 = min(100, max(0, $margin1));
      mysql_query("UPDATE nq_pdf SET w_margin1='$margin1' WHERE w_id='$w_id'");
      echo mysql_error();
    }
    
    if ($act == "margin2") {
      $margin2 = min(100, max(0, $margin2));
      mysql_query("UPDATE nq_pdf SET w_margin2='$margin2' WHERE w_id='$w_id'");
      echo mysql_error();
    }
  }
  
  if ($w_id>0) {
    //load work
    $r = mysql_query("SELECT * FROM nq_pdf LEFT JOIN cc_composers USING (c_id) WHERE w_id='$w_id'");
    echo mysql_error();
    $w = mysql_fetch_assoc($r);

    if (!isset($p)) {
      $p = $w[w_page1];
      //$p = $w[w_qpage];
    }

    if ($w[t_id]>0) {
      $t_id = $w[t_id];
    } elseif (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      // load names
      $r = mysql_query("SELECT * FROM cc_ctracks where c_id='$w[c_id]' AND t_bad=0");
      echo mysql_error();
      $n = mysql_numrows($r);
      for ($i=0; $i<$n; $i++) {
        $wa = mysql_fetch_assoc($r);
        $name = $wa[t_name];
        $tname[$wa[t_id]] = trim(strtolower($name));
      }
      $t_id = find_closest(strtolower($w[w_name]), $tname);
      echo "$t_id";
      //mysql_query("UPDATE nq_pdf SET t_id='$t_id' WHERE w_id='$w_id'");
      //echo mysql_error();
    }
    if ($t_id>0) {
      $r = mysql_query("SElECT * FROM cc_ctracks WHERE t_id='$t_id'");
      $ts = mysql_fetch_assoc($r);
    }

    // load jpeg dimensions
    $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_{$p}.jpg'");
    echo mysql_error();
    $wj = mysql_fetch_assoc($r);

    // load next jpeg dimensions
    $r = mysql_query("SELECT * FROM nq_jpeg WHERE f_name='{$w_id}_".($p+1).".jpg'");
    echo mysql_error();
    $nnj = mysql_numrows($r);
    $wnj = mysql_fetch_assoc($r);
    if ($nnj == 0) $wnj[t_time] = $ts[t_len];
    
    echo "<table width=100%><tr><td>";
    echo "<a href=$url_main/cquiz/am.php?c_id=$w[c_id]>$w[c_name]</a> - ";
    if ($w[t_id]>0) echo "<a href=$url_main/cquiz/ptracks.php?t_id=$w[t_id]>";
    echo "$w[w_name]</a> ";
    echo " <a target=_blank href='http://ru.wikipedia.org/w/index.php?search=$w[w_name]'><img valign=top height=18 src=i/wiki.png></a> ";
    echo " <a target=_blank href='https://www.google.ru/search?q=$w[c_name] $w[w_name]'><img valign=top height=18 src=i/google.png></a> ";
    echo " <a target=_blank href='http://www.youtube.com/results?search_query=$w[c_name] $w[w_name]'><img valign=top height=16 src=i/youtube.png></a> ";
    echo "<br>";
    if ($w[w_type] != "") echo "Instruments: <b>$w[w_type]</b> ";
    if ($w[w_rating] > 5000) echo "Work fame: <b>High</b> ";
    elseif ($w[w_rating] > 2000) echo "Work fame: <b>Medium</b> ";
    else echo "Work fame: <b>Low</b><br>";
    if ($ts[t_rating]>0) echo " <img title='Rating of popularity' height=16 src=images/rating$ts[t_rating].png>";
    echo "<br>";
    echo "<br><font size=+1>";
    echo "<hr>";
    // show
    echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
      $(document).keydown(function (event) {
        if (event.keyCode == 189) {
          window.location.href = 'works.php?w_id=$w_id&p=".($p+1)."';
        }
      });  
    });  
    </script>";
    for ($x=$w[w_page1]; $x <= $w[w_page2]; $x++) {
      if ($x == $p) echo "<b>";
      else echo "<a href=works.php?w_id=$w_id&p=$x>";
      if ($x < $w[w_qpage]) echo "<font color=red>";
      echo ($x)."</font></a></b> ";
    }
    echo "<br><hr>";
    echo "<td align=right><table><tr><td>";

    if ($t_id>0) {
      $time2 = 0;
      if ($wnj[t_time]-$wj[t_time] > 0) $time2 = $wnj[t_time];
      show_player($ts, $w_id, $p, 1, $wj[t_time], "false", $time2);
    }
    echo "</table></table>";
    //echo "<center><img src='$jpeg_path/{$w[w_id]}_{$p}.jpg' width=$jpeg_width></center>";

    
    echo "<center>";
    
    if ($wj[p_width] == 0) $hei = $wj[p_height];
    else $hei = round($wj[p_height]*$jpeg_width/$wj[p_width]);
    $margin1 = round($hei * $w[w_margin1]/100);
    $margin2 = round($hei * $w[w_margin2]/100);
    $margin3 = $hei-$margin2;
    $wid = $jpeg_width;
    echo "<form method=get>";
    echo "<input type=hidden name=w_id value='$w_id'>";
    echo "<input type=hidden name=p value='$p'>";
    echo "<div style='position: relative; width: {$wid}px; height: {$hei}px; overflow: hidden'>";
    echo "<a href='works.php?w_id=$w_id&p=".($p+1)."'><img border=0 src='$jpeg_path/{$w_id}_{$p}.jpg' width=$jpeg_width></a>";
    echo "<img src=i/black.png height=$margin1 width=$wid style='opacity: 0.3; position: absolute; top: 0px; left: 0px;'>";
    echo "<img src=i/black.png height=$margin2 width=$wid style='opacity: 0.3; position: absolute; top: {$margin3}px; left: 0px;'>";
    if ($wnj[t_time]-$wj[t_time] > 0) echo "<img id='nquiz_progressbar' src=i/black.png height=$hei width=0 style='opacity: 0.1; position: absolute; top: 0px; left: 0px;'>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      if ($p < $w[w_qpage]) {
        echo "<input type=image name=icor src='i/red.png' width=$wid height='$hei' style='position: absolute; top: 0px; left: 0px; opacity: 0.2; cursor:crosshair'>";
      } else {
        echo "<input type=image name=icor src='i/green.png' width=$wid height='$hei' style='position: absolute; top: 0px; left: 0px; opacity: 0.2; cursor:crosshair'>";
      }
    }
    echo "</div>";
    echo "</form>";
    echo "</center>";
    $next_script = "var x =  Math.round($(\"#jquery_jplayer_1\").data(\"jPlayer\").status.currentTime); window.location=\"works.php?w_id=$w_id&p=".($p+1)."&time=\"+x;";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<div align=right><a href='javascript:void(0);' onclick='$next_script'><font size=+3>Next</font></a></div>";
      echo "<script type='text/javascript'>
      $(document).ready(function(){
        $(document).keydown(function (event) {
          if (event.keyCode == 66) {
            $next_script
          }
        });  
      });  
      </script>";
    }
    
    echo "<hr>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "<a href=works.php?w_id=$w_id&p=$p&act=qpage>Mark this page as first for quiz</a><br>";
      echo "Change upper margin: ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin1&margin1=".max(0, $w[w_margin1]-5)."'>-5</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin1&margin1=".max(0, $w[w_margin1]-1)."'>-1</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin1&margin1=".min(100, $w[w_margin1]+1)."'>+1</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin1&margin1=".min(100, $w[w_margin1]+5)."'>+5</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin1&margin1=".min(100, $w[w_margin1]+10)."'>+10</a><br> ";
      echo "Change lower margin: ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin2&margin2=".max(0, $w[w_margin2]-5)."'>-5</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin2&margin2=".max(0, $w[w_margin2]-1)."'>-1</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin2&margin2=".min(100, $w[w_margin2]+1)."'>+1</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin2&margin2=".min(100, $w[w_margin2]+5)."'>+5</a> ";
      echo "<a href='works.php?w_id=$w_id&p=$p&act=margin2&margin2=".min(100, $w[w_margin2]+10)."'>+10</a><p> ";
    }
    echo "Red color indicates pages, that are not used for quiz";
    stop_time();
    echo "<br><script>window.scroll(0, 140);</script>";
    exit;
  }

  if (!isset($order)) $order="w_rating desc";
  
  if (isset($c_id)) {
    $r = mysql_query("SELECT * FROM cc_composers WHERE c_id='$c_id'");
    echo mysql_error();
    $wc = mysql_fetch_assoc($r);
    echo "<table><tr><td valign=top>";
    echo "<a target=_blank href='$url_main/cquiz/am.php?c_id=$wc[c_id]'>$wc[c_name]</a> ";
    echo " <b>[".$wc[c_years]."] ";
    echo " $wc[c_country]</b> ";
    if ($wc[c_desc] != "") echo "$wc[c_desc]<p>";
    $cond .= " AND c_id='$c_id' ";
    if (file_exists("cpic/".$wc[c_id].".jpg")) echo "<td><img align=right height=200 src=cpic/$wc[c_id].jpg>";
    echo "</table>";
  }
  if (isset($mr)) {
    $cond .= " AND w_rating>='$mr' ";
  }
  $r = mysql_query("SELECT * FROM nq_pdf
    LEFT JOIN cc_composers USING (c_id) 
    WHERE c_id != 0 AND w_page2>0 $cond ORDER BY $order LIMIT 2000");
  echo mysql_error();
  $n = mysql_numrows($r);
  echo "<table border=1 cellpadding=3 style='border-collapse: collapse;'>";
  echo "<tr>";
  echo "<th>Composer";
  echo "<th>Work";
  echo "<th>Pages";
  echo "<th>Instrument";
  echo "<th><a href='works.php?order=w_rating desc'>Rating";
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    echo "<tr>";
    echo "<td>";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      echo "$i. ";
    }
    echo "<a href=works.php?c_id=$w[c_id]>$w[c_name4]";
    echo "<td><a href=works.php?w_id=$w[w_id]>";
    if ($w[t_id]>0) echo "<font color=orange>";
    echo "$w[w_name]</font></a> ";
    if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
      if ($w[t_id]>0) {
        $q2 = "SELECT * FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE t_id='$w[t_id]' AND v_up>(v_down*2.5) ORDER BY RAND() LIMIT 1";
        $r2 = mysql_query($q2);
        echo mysql_error();
        $n2 = mysql_numrows($r2);
        if ($n2>0) {
          echo " <img src=i/painting.png height=18 valign=top> ";
        }
      }
      echo " <a target=_blank style='opacity:0.5' href='https://www.google.ru/search?q=pdf $w[c_name] $w[w_name]'><img valign=top height=18 src=i/google.png></a> ";
      echo " <a href='works.php?w_id=$w[w_id]&act=bad'><img onclick='return confirm(\"Do you really want to delete this work?\")' style='opacity: 0.5' valign=top src=i/cross.png height=16></a> ";
      echo " <a onclick='r=prompt(\"New rating:\"); window.location = \"works.php?w_id=$w[w_id]&newr=\"+r;' href=#><font color=green>NR</font></a> ";
    }
    echo "<td>".($w[w_page2]-$w[w_page1]+1);
    echo "<td>$w[w_type]";
    echo "<td>$w[w_rating]";
  }
  echo "</table>";
  echo "Only first 1000 works are shown. Tracks linked to audio files are marked orange.";
  stop_time();

?>

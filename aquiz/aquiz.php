<?
  session_start();
  include "alib.php";
  include "plib.php";
  include "style.php";
  
  start_time();
  
  secure_variable("a");
  secure_variable("act");
  secure_variable("mr");
  
  $img_width = 292;
  
  if (!isset($mr)) $mr = $_SESSION[a_mr];
  $total = $_SESSION[a_total];
  $correct = $_SESSION[a_correct];
  $state = $_SESSION[a_state];
  $ac = $_SESSION[a_ac];
  $p = $_SESSION[a_p];
  $logged = $_SESSION[a_logged];
  $p_hist = $_SESSION[a_hist];

  if (!isset($mr)) $mr = 2;
  if (!isset($correct)) $correct = 0;
  if (!isset($total)) $total = 0;

  function save_session() {
    $_SESSION[a_mr] = $GLOBALS[mr];
    $_SESSION[a_total] = $GLOBALS[total];
    $_SESSION[a_correct] = $GLOBALS[correct];
    $_SESSION[a_state] = $GLOBALS[state];
    $_SESSION[a_ac] = $GLOBALS[ac];
    $_SESSION[a_p] = $GLOBALS[p];
    $_SESSION[a_logged] = $GLOBALS[logged];
    $_SESSION[a_hist] = $GLOBALS[p_hist];
  }

  if ($act == "reset") {
    $ac=0;
    $p=0;
    $total = 0;
    $correct = 0;
    $state = 0;
    //save_session();
  }

  if (isset($a)) {
    $total++;
    if ($a == $ac) $correct++;
    mysql_query("INSERT INTO aq_log VALUES('', '$ac', '$a', '$p', '".get_ip()."', NOW(), '$_SERVER[HTTP_USER_AGENT]')");
    echo mysql_error();
    $logged=1;
    save_session();
    die("<script>location.href = 'aquiz.php'</script>");
  }
  
  include "menu.php";

  echo "<center><table><tr><td>";
  echo "<form action=aquiz.php method=get>";
  echo "<input type=hidden name=act value=reset>";
  echo "Difficulty level: ";
  echo "<select name=mr onChange='this.form.submit();'>";
  foreach ($mr_levels as $rat => $name) {
    echo "<option value=$rat";
    if ($mr == $rat) echo " selected";
    echo ">$name</option>";
  }
  echo "</select> ";
  
  // Select ids
  $q = "SELECT a_id FROM aq_artists WHERE a_name!='' AND a_rating>=$mr ORDER BY RAND() LIMIT 4";
  $r = mysql_query($q);
  $a_cnt = mysql_numrows($r);
  for ($i=0; $i<$a_cnt; $i++) {
    $w = mysql_fetch_assoc($r);
    $a_id[$i] = $w[a_id];
    if ($cond != '') $cond .= ",";
    $cond .= $a_id[$i];
  }

  // Select artists sorted
  $q = "SELECT * FROM aq_artists WHERE a_id IN ($cond) ORDER BY a_start";
  //echo $q;
  $r = mysql_query($q);
  $a_cnt = mysql_numrows($r);
  $a_correct = mt_rand(0, $a_cnt-1);
  for ($i=0; $i<$a_cnt; $i++) {
    $w = mysql_fetch_assoc($r);
    $aa[$i] = $w;
    if ($aa[$i][a_wiki_en] == '') $aa[$i][a_wiki_en] = "http://ru.wikipedia.org/w/index.php?search=".awiki($aa[$i][a_name]);
    $q2 = "SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' ORDER BY RAND() LIMIT 3";
    //echo $q;
    $r2 = mysql_query($q2);
    $w2 = mysql_fetch_assoc($r2);
    $p_id[$i] = $w2[p_id];
    $w2 = mysql_fetch_assoc($r2);
    $p_id2[$i] = $w2[p_id];
    $w2 = mysql_fetch_assoc($r2);
    $p_id3[$i] = $w2[p_id];
    /*
    $p_id[$i] = mt_rand(1, $aa[$i][p_num]);
    for ($x=0; $x<1000; $x++) {
      $p_id2[$i] = mt_rand(1, $aa[$i][p_num]);
      //if (!file_exists(get_purl($aa[$i][a_id], $p_id2[$i]))) continue;
      if ($p_id[$i] != $p_id2[$i]) break;
    }
    for ($x=0; $x<1000; $x++) {
      $p_id3[$i] = mt_rand(1, $aa[$i][p_num]);
      //if (!file_exists(get_purl($aa[$i][a_id], $p_id3[$i]))) continue;
      if (($p_id[$i] != $p_id3[$i]) && ($p_id2[$i] != $p_id3[$i])) break;
    }
    */
  }
  $w = $aa[$a_correct];
  echo "<script>";
  echo "var a_correct = $a_correct;";
  echo "var a_id = '$w[a_id]';";
  echo "var a_name = '$w[a_name]';";
  echo "var a_genre = '$w[a_genre]';";
  echo "var a_nation = '$w[a_nation]';";
  echo "var a_years = '$w[a_years]';";
  echo "var a_link = '$w[a_wiki_en]';";
  echo "</script>";
  
  // Load painting
  $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$p_id[$a_correct]'");
  echo mysql_error();
  $wp = mysql_fetch_assoc($r);
  // Descr
  if ($wp[p_desc_en] != '') $p_desc .= "Painting name: <b>".substr($wp[p_desc_en], 0, 100)."</b><br>";
  else if ($wp[p_desc_ru] != '') $p_desc .= "Painting name: <b>".substr($wp[p_desc_ru], 0, 100)."</b><br>";
  if ($wp[p_year] != '') $p_desc .= "Painting year: <b>".substr($wp[p_year], 0, 100)."]</b><br> ";
  if ($wp[p_place] != '') $p_desc .= "Painting place: <b>".substr($wp[p_place], 0, 100).")</b><br>";
  
  // Show artists
  //echo "<b>Guess artist.</b>";
  if ($total>0) echo " Total answers: <b>$total</b>. Correct: <b>".round($correct/$total*100)."%</b> <a href=aquiz.php?act=reset>Reset</a>";
  echo "</form>";
  echo "<center><table><tr>";
  echo "<td><span id=picture>";
  //echo "<a href='javascript:void(0);' onclick=\"check_answer(-1);\");'>";
  echo "<div style='width: 1200px; height: 700px; vertical-align: middle; display: table-cell'>";
  echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src='".get_purl($aa[$a_correct][a_id], $p_id[$a_correct])."'></div></span>";
  echo "<td><span id=answer>";
  echo "<a target=_blank href='http://images.google.com/searchbyimage?image_url=".get_purl($aa[$a_correct][a_id], $p_id[$a_correct])."'>";
  echo "<img valign=bottom height=20 src=i/help.png>";
  echo "</span><td><span id=alternative></span>";
  echo "</table>";
  
  show_quote($w, 'e', 1);
  if ($ru_accept) show_quote($w, 'r', 1);
  
  echo "<table cellspacing=4>";
  echo "<tr>";
  for ($i=0; $i<$a_cnt; $i++) {
    // <a href='aquiz.php?g=".base64_encode(gzcompress($aa[$i][a_id]))."&a=".base64_encode(gzcompress($aa[$a_correct][a_id]))."&p=".base64_encode(gzcompress($p_id[$a_correct]))."'>
    echo "<td width=300 valign=top bgcolor=#eeeeee><center><a href='javascript:void(0);' onclick=\"check_answer($i, ".$aa[$i][a_id].");\"><font face=arial size=6>".$aa[$i][a_name]."</font></a>";
    echo " <a target=_blank href='artist.php?a_id=".$aa[$i][a_id]."'><img valign=baseline height=20 src=i/help.png></a>";
    echo "<br><font color=#555555>".strtoupper(substr($aa[$i][a_nation], 0, 3))."-";
    if ($aa[$i][a_years] > 0) echo substr($aa[$i][a_years], 0, strpos($aa[$i][a_years], '-'));
    if ($aa[$i][a_genre] != '-') echo " <i>".$aa[$i][a_genre]."</i></font>";
    echo "<br>";
    echo "<div style='width: {$img_width}px; height: {$img_width}px; vertical-align: middle; display: table-cell'>";
    echo "<a href='javascript:void(0);' onclick=\"check_answer($i, ".$aa[$i][a_id].");\">";
    echo "<img align=top style='margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%;' src=preview/".($aa[$i][a_id])."/".str_pad($p_id2[$i], 4, '0', STR_PAD_LEFT).".jpg></a>";
    echo "</div>";
    //echo "<a href='javascript:void(0);' onclick=\"check_answer($i, ".$aa[$i][a_id].");\">";
    //echo "<img width=292 src='".get_purl($aa[$i][a_id], $p_id2[$i])."'></a>";
  }
  //echo "</table>";
  //echo "<table cellspacing=4>";
  echo "<tr>";
  for ($i=0; $i<$a_cnt; $i++) {
    echo "<td width=300 valign=top bgcolor=#eeeeee>";
    echo str_replace("\n", "<p>", $aa[$i][a_bio_en]);
  }
  echo "</table>";
  //       '<iframe width=800 height=700 src=\"http://en.m.wikipedia.org/w/index.php?search=' + a_name + '\"></iframe>';
  if (file_exists("paintings/$w[a_id]/photo.jpg")) {
    $apic = "<br><img width=250 src=\"paintings/$w[a_id]/photo.jpg\"><br>";
  }
  $logged=0;
  $ac=$aa[$a_correct][a_id];
  $p=$p_id[$a_correct];
  save_session();
  
  // show player
  $q = "SELECT * FROM ca_log 
    LEFT JOIN cc_composers USING (c_id) 
    LEFT JOIN cc_ctracks USING (t_id) 
    WHERE a_id='$w[a_id]' AND ca_log.p_id='$p_id[$a_correct]' AND v_up>(v_down*2.5) ORDER BY RAND() LIMIT 1";
  $r = mysql_query($q);
  //echo $q;
  echo mysql_error();
  $n = mysql_numrows($r);
  if ($n>0) {
    $ts=mysql_fetch_array($r);
    echo "<table><tr><td>";
    show_player($ts);
    echo "<td><font face=tahoma>";
    echo "<a href=$url_main/cquiz/am.php?c_id=$ts[c_id]><font size=+2>$ts[c_name4]</font></a> $ts[c_country] ($ts[c_years]) $ts[p_name]<br><a href=ptracks.php?t_id=$ts[t_id]>";
    if ($ts[t_folder2] != "") echo "$ts[t_folder2]/";
    echo "$ts[t_name]</a> ";
    echo str_replace("?", "", mb_convert_encoding(mb_convert_encoding($ts[t_meta2], "CP1252", "UTF-8"), "UTF-8", "CP1251"));
    echo "<br><br>";
    echo "<a target=_blank href=$url_main/compart/ca-slide.php?l_id=".($ts[l_id]-1).">Open association</a>";
    echo "</table>";
  }
?>
<script>
  function check_answer(a1, a1_id) {
    color = '#ffaaaa';
    correct = <?=$correct; ?>;
    if (a1 == a_correct) {
      color = '#aaffaa';
      correct ++;
    }
    document.getElementById('answer').innerHTML = 
      '<table cellpadding=10 width=300 height=700><tr><td bgcolor=' + color + '><center><b>Correct answer:</b><br><?=$apic;?><br>Artist: <b>' + a_name + '</b><br>Genre: <b>' + a_genre + 
      '</b><br>Nationality: <b>' + a_nation + '</b><br>Years: <b>' + a_years + '</b><br><br><?=$p_desc?><br><a target=_blank href="artist.php?a_id=<?=$aa[$a_correct][a_id];?>"><img valign=bottom height=20 src=i/help.png></a></table>';
    document.getElementById('picture').innerHTML = 
      '<? echo "<div style=\"width: 400px; height: 700px; vertical-align: middle; display: table-cell\"><a target=_blank href=\"http://images.google.com/searchbyimage?image_url=".get_purl($aa[$a_correct][a_id], $p_id[$a_correct])."\"><img align=middle style=\"margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%\" src=\"".get_purl($aa[$a_correct][a_id], $p_id[$a_correct])."\"></div>"; ?>';
    document.getElementById('alternative').innerHTML = 
      '<? echo "<div style=\"width: 400px; height: 700px; vertical-align: middle; display: table-cell\"><center>Bonus picture:<br><img align=middle style=\"margin-top: auto; margin-bottom: auto; margin-left: auto; margin-right: auto; text-align: center; display: block; max-width: 100%; max-height: 100%\" src=\"".get_purl($aa[$a_correct][a_id], $p_id3[$a_correct])."\"></div>"; ?>';
    setTimeout(function(){ location = 'aquiz.php?a=' + a1_id; }, 6000);
  }
</script>

<?
  stop_time();
?>

<script>
window.scroll(0, 100);
window.setTimeout(function () { window.scroll(0, 100); }, 500);
</script>
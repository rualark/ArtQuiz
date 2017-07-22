<?
  include "qlib.php";
  include "../auth.php";

  $max_hist = 100;

  //secure_variable("admin");
  secure_variable("l_id");
  secure_variable("c_id");
  secure_variable("a_id");
  secure_variable("action");
  secure_variable("l_id2");
  secure_variable("v_type");
  secure_variable("only_pos");

  session_start();
  $t_hist = $_SESSION[t_hist];
  $p_hist = $_SESSION[p_hist];
  $p_ha = explode(",", $p_hist);
  $t_ha = explode(",", $t_hist);

  function save_session() {
    $_SESSION[t_hist] = $GLOBALS[t_hist];
    $_SESSION[p_hist] = $GLOBALS[p_hist];
  }

  if ($c_id > 0) $cond .= " AND c_id='$c_id' ";
  if ($a_id > 0) $cond .= " AND a_id='$a_id' ";
  
  if ($action == "vote") {
    echo vote_compart($l_id2, $v_type);
    //die("<script>location.href = document.referrer;</script>");
    echo "<script language=\"javascript\">location.replace(\"ca-slide.php?l_id=$l_id&a_id=$a_id&c_id=$c_id&only_pos=$only_pos";
    //if ($admin == 1) echo "&admin=1";
    echo "\");</script>"; 
    exit;
  }
  
  if (($only_pos == 'on') && ($l_id == 0)) {
    if (($t_hist != '') && ($p_hist != '')) $cond_hist = "t_id NOT IN ($t_hist) AND p_id NOT IN ($p_hist) AND";
    $q = "SELECT * FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE 
      $cond_hist v_up>(v_down*2.5) ORDER BY RAND() LIMIT 1";
  } else {
    if ($l_id == 0) {
      $q = "SELECT l_id FROM ca_log ORDER BY RAND()";
      $r = mysql_query($q);
      echo mysql_error();
      $w = mysql_fetch_assoc($r);
      $l_id = $w[l_id];
    }
    //$cond .= " AND v_up>(v_down*2.5) ";
    $q = "SELECT * FROM ca_log LEFT JOIN aq_artists USING (a_id) WHERE l_id>$l_id $cond LIMIT 1";
  }
  //echo $q;
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  if ($n == 0) die ("<script language=\"javascript\">location.replace(\"ca-slide.php?l_id=1&a_id=$a_id&c_id=$c_id&only_pos=$only_pos\");</script>"); 
  $w = mysql_fetch_assoc($r);
  //print_r($w);

  load_track($w[t_id]);

  // Record history
  if ($p_hist != "") {
    $to_del = count($p_ha) - $max_hist;
    if ($to_del > 0) for ($x=0; $x<$to_del; $x++) unset($p_ha[$x]);
    $p_hist = implode(",", $p_ha);
    if ($p_ha[count($p_ha)-1] != $w[p_id]) $p_hist .= ",$w[p_id]";
  } else $p_hist = $w[p_id];
  if ($t_hist != "") {
    $to_del = count($t_ha) - $max_hist;
    if ($to_del > 0) for ($x=0; $x<$to_del; $x++) unset($t_ha[$x]);
    $t_hist = implode(",", $t_ha);
    if ($t_ha[count($t_ha)-1] != $w[t_id]) $t_hist .= ",$w[t_id]";
  } else $t_hist = $w[t_id];

  $us[u_oneblock] = 1;
  
  // Load vote
  $v_id = mysql_real_escape_string($_COOKIE["vote_$w[l_id]"]);
  if ($v_id>0) {
    $q = "SELECT * FROM ca_votes WHERE v_id='$v_id'";
    $r = mysql_query($q);
    echo mysql_error();
    $wv = mysql_fetch_assoc($r);
  }
  
  // Load painting
  $r = mysql_query("SELECT * FROM aq_paintings WHERE a_id='$w[a_id]' AND p_id='$w[p_id]'");
  echo mysql_error();
  $wp = mysql_fetch_assoc($r);

  share_header("$url_share/compart/ca-slide.php?l_id=".($w[l_id]-1)."&only_pos=on", 
    "$w[a_name] - $ts[c_name3]",
    "CompArt: painting-music association",
    "$url_share_art/$w[a_id]/".str_pad($w[p_id], 4, '0', STR_PAD_LEFT).".jpg");

  include "../analytics.php";
  start_time();

  include "style.php";
  //include "ca-menu.php";  
?>
<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/ca-favicon.ico">
<title>CompArt - Slideshow</title>
<div class=fade>
<center><table><tr>
<td valign=center style='max-width:850px;' width=850 height=850>
<div><div id="420065961799316593" align="left" style="width: 100%; overflow-y: hidden;" class="wcustomhtml"><script type="text/javascript">
    var chatovodOnLoad = chatovodOnLoad || [];
    chatovodOnLoad.push(function() {
        chatovod.addChatButton({host: "artquiz.chatovod.com", align: "topRight",
            width: 490, height: 600, defaultLanguage: "en"});
    });
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript'; po.charset = "UTF-8"; po.async = true;
        po.src = (document.location.protocol=='https:'?'https:':'http:') + '//st1.chatovod.com/api/js/v1.js?2';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script></div>

<script type=text/javascript src='//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".fade").delay(0).animate({"opacity": "1"}, 2000);
});
//]]> 
</script>
<?
  echo "<center><a href=ca-slide.php?";
  if ($only_pos != 'on') echo "l_id=$w[l_id]&";
  echo "a_id=$a_id&c_id=$c_id&only_pos=$only_pos>";
  $img_url = show_painting($w[a_id], $w[p_id], 850, 850);
  echo "</a>";
  //echo "<tr>";
  echo "<td><center>";

  echo "</center>";
  echo "<table cellpadding=20 style='max-width: 200' width=200 height=500><tr><td valign=middle valign=top><font face=tahoma>";
  echo "<a target=_blank href=$url_main/aquiz/artist.php?a_id=$w[a_id]><font size=+2>$w[a_name]</font></a> ".strtoupper(substr($w[a_nation], 0, 3))."-".(substr($w[a_years], 0, 4))." ".$w[a_genre];
  echo " <a target=_blank href='http://images.google.com/searchbyimage?image_url=$img_url'><img height=16 src=images/help.png></a> ";
  if ($wp[p_desc_en] != '') echo "<i>".substr($wp[p_desc_en], 0, 100)."</i>";
  else if ($wp[p_desc_ru] != '') echo "<i>".substr($wp[p_desc_ru], 0, 100)."</i>";
  if ($wp[p_year] != '') echo " <i>[".substr($wp[p_year], 0, 100)."]</i> ";
  if ($wp[p_place] != '') echo " <i>(".substr($wp[p_place], 0, 100).")</i>";
  
  echo "<tr><td valign=middle><font face=tahoma>";
  echo "<a href=$url_main/cquiz/am.php?c_id=$ts[c_id]><font size=+2>$ts[c_name4]</font></a> $ts[c_country] ($ts[c_years]) $ts[p_name]<br><a href=$url_main/cquiz/ptracks.php?t_id=$ts[t_id]>";
  if ($ts[t_folder2] != "") echo "$ts[t_folder2]/";
  echo "$ts[t_name]</a> ";
  echo meta_conv($ts[t_meta2]);
  echo "</table><br><br>";

  echo "</td><tr><td valign=bottom><center><br><br>";

  echo "<table><tr><td valign=middle align=right>";
  if ($w[v_up]>0) echo "<font color=green><b>$w[v_up]</b></font> ";
  $img = "up-g.png";
  if ($wv[v_type]==1) $img="up.png";
  if ($i_am_admin == 1) {
    if ($wv[v_type]!=-1) echo "<a title='Vote up' href=ca-slide.php onclick='location.replace(\"ca-slide.php\" + \"?action=vote&l_id=$w[l_id]&l_id2=$w[l_id]&v_type=1&c_id=$c_id&a_id=$a_id&only_pos=$only_pos\"); return false'>";
  }
  echo "<img valign=bottom border=0 height=25 src=images/$img></a> ";
  $img = "down-g.png";
  if ($wv[v_type]==-1) $img="down.png";
  if ($i_am_admin == 1) {
    if ($wv[v_type]!=1) echo "<a title='Vote down' href=# onclick='location.replace(\"ca-slide.php\" + \"?action=vote&l_id=$w[l_id]&l_id2=$w[l_id]&v_type=-1&c_id=$c_id&a_id=$a_id&only_pos=$only_pos\")'>";
  }
  echo "<img valign=bottom height=25 src=images/$img></a> ";
  if ($w[v_down]>0) echo "<font color=red><b>$w[v_down]</b></font> ";
  echo "<td width=400>";
  echo "<td valign=middle>";
  echo " <b>Share:</b><br> ";
  share_link("$url_share/compart/ca-slide.php?l_id=".($w[l_id]-1)."&only_pos=on", 
    "$w[a_name] - $ts[c_name3]",
    "CompArt: painting-music association",
    "$url_share_art/$w[a_id]/".str_pad($w[p_id], 4, '0', STR_PAD_LEFT).".jpg");
  echo "</table>";
  echo "<tr><td><center><br>";

  echo "<table><tr><td>";
  show_player($ts[t_id], $w[b_id], $us[u_oneblock], $play_symlinks, 1, $w[b_id], "false");
  echo "</table>";

  echo "<p><form action=ca-slide.php method=get>";
  echo "<input type=hidden name=c_id value='$c_id'>";
  echo "<input type=hidden name=a_id value='$a_id'>";
  echo "<input type=hidden name=l_id value='$l_id'>";
  echo "<input onChange='this.form.submit();' type=checkbox name=only_pos";
  if ($only_pos=='on') echo ' checked';
  echo "> Show only associations with 70% positive votes or more";
  echo "</form><br>";
  echo "<div id=debugDiv></div>";

  //echo "<br><a href=ca-slide.php?l_id=$w[l_id]>NEXT</a>";
  echo "<script>setTimeout(function(){ 
    $('.fade').delay(500).animate({'opacity': 0}, 2000);
    setTimeout(function(){ location = 'ca-slide.php?";
  if ($only_pos != 'on') echo "l_id=$w[l_id]&";
  echo "a_id=$a_id&c_id=$c_id&only_pos=$only_pos'; }, 2000);
  }, 62000);</script>";
  echo "<a href=index.php><img alt='Compart' align=absmiddle border=0 src=images/compart_120.png></a>";
  echo "<br>Track history: ".count($t_ha).", paintings history: ".count($p_ha)."<br>";
  //echo "$t_hist - $p_hist";

  stop_time();
  save_session();
  echo "</div>";
?>

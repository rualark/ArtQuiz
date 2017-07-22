<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/ca-favicon.ico">
<?
  share_header("$url_share/compart/", 
    "CompArt",
    "Associate paintings with music",
    "$url_share/compart/images/compart_560.png");
  include "../analytics.php";
  $nc = microtime(true);
?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>CompArt -  ";
  if ($bname != "ca") echo "(". $bname . ")";
  echo "</title>";
} 
?>
<center>
<SCRIPT TYPE='text/javascript' SRC='overlibmws/overlibmws.js'></SCRIPT>
<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=index.php><img alt='Compart' align=absmiddle style="vertical-align:middle" border=0 src=images/compart_120.png></a>
<td>
<table width=100%>
<tr>
<td>
<? 
  if (isset($uname)) echo "Hello, $uname"; 
  else echo "<a href='../login.php?nc=$nc'><font color=green>Login</font></a> | <a href=../reg.php><font color=green>Register</font></a>";
  if ($bname != "graph") {
    echo "<td align=right>Share: ";
    share_link("$url_share/compart/", 
      "CompArt",
      "Associate paintings with music",
      "$url_share/compart/images/compart_560.png");
  }
  echo "</table>";
  echo " &nbsp; ";
  echo "<font face=arial size=4>";
  echo "<a href=ca-input.php?nc=$nc>Associate</a> | ";
  echo "<a target=_blank href=ca-slide.php?only_pos=on&nc=$nc>Slideshow</a> | ";
  echo "<a href=ca-comp.php?nc=$nc>Composers</a> | ";
  echo "<a href=ca-art.php?nc=$nc>Artists</a> | ";
  echo "<a href=ca-tracks.php?nc=$nc>Tracks</a> | ";
  echo "<a href=ca-log.php?nc=$nc>Activity</a> | ";
  echo "<a href=ca-contact.php?nc=$nc>Contact</a> ";
?>
</font>
</td>
<td>
<?
  echo "<a href=$url_main><img height=70 align=right style=vertical-align:middle border=0 src=$url_main/i/artquiz_crop.png></a>";
?>
</td>
</tr>
<tr>
<td style="max-width:<?
  if (!isset($page_width)) echo "850px"; 
  else echo "$page_width";
?>;" colspan=3>
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
<hr>
<?
  //register_shutdown_function('shutdown_function');
?>
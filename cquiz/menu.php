<meta charset=utf-8 />
<?
    share_header("$url_share/cquiz/", 
      "Composer Quiz",
      "Listen to music and guess composer",
      "$url_share/cquiz/images/cquiz_560.png");
include "../analytics.php";
 ?>
<link rel="shortcut icon" href="images/site.ico?v=2">
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>CQuiz - Guess the composer ";
  if ($bname != "index") echo "(". $bname . ")";
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
<a href=prefs.php><img align=absmiddle style="vertical-align:middle" border=0 src=images/cquiz_200.png></a>
<td>
<table width=100%>
<tr>
<td>
<font face=arial size=4>
<? 
  echo "<a href=$url_main/cmap>Composers timeline</a> | ";
  if (isset($uname)) echo "Hello, $uname"; 
  if ($bname != "graph") {
    echo "<td align=right>Share: ";
    share_link("$url_share/cquiz/", 
      "Composer Quiz",
      "Listen to music and guess composer",
      "$url_share/cquiz/images/cquiz_560.png");
?>
<?
  } // 
?>
</table>
&nbsp;
<? if ($no_menu == 0) { ?>
<font face=arial size=4>
<? 
  if ($bname == "prefs") {
    echo "
      <script type='text/javascript'>
      setTimeout('blink()',300);
      var col = new String();
      var blink_state=1;
      function blink() {
        if(blink_state%2) {
          col = '#2574d0';
        } else {
          col = '#aaccdd';
        }
        blink_id.style.color=col; blink_state++; if(blink_state>2){blink_state=1}; setTimeout('blink()',300);
      }
      </script>";
    echo "<a href=quiz.php>Quiz</a> | "; // id='blink_id' 
  } else {
    echo "<a href=quiz.php>Quiz</a> | ";
  }
?>
<a href=prefs.php>Preferences</a> |
<a href=composers.php>Composers</a> |
<a href=isles.php>Isles <img border=0 height=18 align=top src=images/isle.png></a> |
<a href=stats.php>Stats</a> |
<a href=rating.php>Ratings</a> |
<a href=logs.php>Activity</a> |
<? } ?>
<a href=help.php>Help</a> |
<a href=contact.php>Contact</a>
</font>
</td>
<td>
<?
  echo "<a href=$url_main><img height=70 align=right style=vertical-align:middle border=0 src=$url_main/i/artquiz_crop.png></a>";
?>
</td>
</tr>
<tr>
<td style="max-width:850px;" colspan=3>
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
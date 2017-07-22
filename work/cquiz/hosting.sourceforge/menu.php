<meta charset=utf-8 />
<?
include "analytics.php";
 ?>
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
<a href=isles.php><img align=absmiddle style="vertical-align:middle" border=0 src=images/cquiz_200.png></a>
<td>
<table width=100%>
<tr>
<td>
<? 
  if (isset($uname)) echo "Hello, $uname"; 
  if ($bname != "graph") {
?>
<td align=right>Share: 
<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
<div style='display:inline-block' class="yashare-auto-init" 
data-yashareL10n="en" 
data-yashareType="small" 
data-yashareLink="http://composerquiz.sourceforge.net"
data-yashareTitle="Composer Quiz"
data-yashareImage="http://composerquiz.sourceforge.net/images/cquiz_200.png"
data-yashareQuickServices="vkontakte,facebook,twitter,moimir" 
data-yashareTheme="counter"></div><div style='display:inline-block' class="yashare-auto-init" 
data-yashareL10n="en" 
data-yashareType="none" 
data-yashareLink="http://composerquiz.sourceforge.net"
data-yashareTitle="Composer Quiz"
data-yashareImage="http://composerquiz.sourceforge.net/images/cquiz_200.png"
data-yashareQuickServices="odnoklassniki,lj,gplus"></div>
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
    echo "<a id='blink_id' href=quiz.php>Quiz</a> | ";
  } else {
    echo "<a href=quiz.php>Quiz</a> | ";
  }
?>
<a href=prefs.php>Preferences</a> |
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
<a href=../><img height=70 align=absmiddle style="vertical-align:middle" border=0 src=images/amp200.gif></a>
</td>
</tr>
<tr>
<td style="max-width:850px;" colspan=3>
<hr>
<?
  //register_shutdown_function('shutdown_function');
?>
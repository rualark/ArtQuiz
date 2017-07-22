<meta charset=utf-8 />
<meta property='og:image' content='<? echo "$url_share/equotes/i/equotes_560.png"; ?>' />
<meta property='og:title' content='Guess quote' />
<? if ($correct>0) { ?>
<meta property='og:description' content='Try to guess author of famous quotes' />
<? } ?>
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
include "../analytics.php";
 ?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>Guess quote";
  if ($bname != "qquiz") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center>
<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=levels.php><img width=170 align=absmiddle style="vertical-align:middle" border=0 src=i/equotes.png></a>
<td>
<table width=100%>
<tr>
<td>
<?
  if (isset($uname)) echo "Hello, $uname"; 
  else echo "<a href='../login.php?nc=$nc'><font color=green>Login</font></a> | <a href=../reg.php><font color=green>Register</font></a>";
?>
<td align=right>
Share: 
<script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
<div style='display:inline-block' class='ya-share2' 
data-services='vkontakte,facebook,odnoklassniki,gplus' 
data-title='Guess quote' 
data-url='<? echo "$url_share/equotes/"; ?>'
data-image='<? echo "$url_share/equotes/i/equotes_560.png"; ?>'
data-counter=''></div>
</table>
&nbsp;
<a href=levels.php>Guess quote</a> |
<a href=authors.php>Authors</a> |
<a href=qi.php>Isles</a> |
<a href=contact.php>Contacts</a>
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
        chatovod.addChatButton({host: "rusquiz.chatovod.com", align: "topRight",
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
<meta charset=utf-8 />
<meta property='og:image' content='<? echo "$url_share/pquiz/i/pquiz4.png"; ?>' />
<meta property='og:title' content='Угадай поэта!' />
<? if ($correct>0) { 
if ($q_num == 0) $q_num = $mr_levels[$mr];
?>
<meta property='og:description' content='Попробуйте отгадать <?=$correct; ?> поэтов подряд из <?=$q_num; ?> стихов как я!' />
<? } ?>
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
include "../analytics.php";
 ?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>Угадай поэта";
  if ($bname != "pquiz") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center>
<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=pquiz.php><img width=170 align=absmiddle style="vertical-align:middle" border=0 src=i/lquiz.png></a>
<td>
<table width=100%>
<tr>
<td>
<td align=right>
<?
  if (!isset($share)) {
    if ($max_year == 0) echo "<img title='Используется полная версия базы данных со всеми текстами стихов' src=i/lock_open.png height=16> ";
    else echo "<img title='Только открытые тексты стихов' src=i/lock.png height=16> ";
  }
?>
Поделиться: 
<script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
<div style='display:inline-block' class='ya-share2' 
data-services='vkontakte,facebook,odnoklassniki,gplus' 
data-title='Угадай поэта' 
data-url='<? echo "$url_share/pquiz/"; ?>'
data-image='<? echo "$url_share/pquiz/i/lquiz.png"; ?>'
data-counter=''></div>
</table>
&nbsp;
<a href=pquiz.php>Угадай поэта</a> |
<a href=authors.php>Поэты</a> |
<?
  echo "<a href=$url_main/rpmap>Карта поэтов</a> | ";
?>
<a href=pi.php>Острова</a> |
<a href=contact.php>Контакты</a>
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
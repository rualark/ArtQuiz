<meta charset=utf-8 />
<meta property='og:image' content='<?=$url_share?>/nquiz/i/nquiz_560.png' />
<meta property='og:title' content='I am really good at scores!' />
<meta itemprop="name" content="I am really good at scores!">
<meta itemprop="image" content="<?=$url_share?>/nquiz/i/nquiz_560.png">
<? if ($correct>0) { ?>
  <meta property='og:description' content='Try to guess <?=$correct; ?> composers in a row of <?=$mr_levels[$mr]; ?> scores and beat me!' />
  <meta name="description" content="Try to guess <?=$correct; ?> composers in a row of <?=$mr_levels[$mr]; ?> scores and beat me!" />
<? } ?>
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
include "../analytics.php";
 ?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>Guess score";
  if ($bname != "nquiz") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center>
<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=nquiz.php><img width=170 align=absmiddle style="vertical-align:middle" border=0 src=i/nquiz.png></a>
<td>
<table width=100%>
<tr>
<td>
<td align=right>
Share: 
<script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
<div style='display:inline-block' class='ya-share2' 
data-services='facebook,gplus,vkontakte,odnoklassniki' 
data-title='Guess score' 
data-url='<?=$url_share?>/nquiz/'
data-image='<?=$url_share?>/nquiz/i/nquiz_560.png'
data-counter=''></div>
</table>
&nbsp;
<a href=nquiz.php>Guess score</a> |
<a href=works.php>Scores</a> |
<a href=contact.php>Contacts</a>
</font>
</td>
<td>
<? echo "<a href=$url_main><img height=70 align=right style=vertical-align:middle border=0 src=$url_main/i/artquiz_crop.png></a>"; ?>
</td>
</tr>
<tr>
<td style="max-width:850px;" colspan=3>
<div>
<? show_chatovod("artquiz"); ?>
<hr>
<?
  //register_shutdown_function('shutdown_function');
?>
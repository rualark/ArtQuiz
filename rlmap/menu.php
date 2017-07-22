<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
    share_header("$url_share/rlmap/", 
      "Классификация писателей",
      "Карта писателей",
      "$url_share/rlmap/i/classclass_560.png");
require_once "../analytics.php";
?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>Карта писателей";
  if ($bname != "index") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center><table border=0>
<tr>
<td>
<a href=<?=$url_main?>/rlmap><img height=70 alt='ArtMap' align=absmiddle style="vertical-align:middle" border=0 src=i/Classclass200.png></a><br><center>
Классификация писателей
<td>
<table width=100%>
<tr>
<td>
<? 
  echo "<td align=right>Поделиться: ";
    share_link("$url_share/rlmap/", 
      "Классификация писателей",
      "Карта писателей",
      "$url_share/rlmap/i/classclass_560.png");
?>
</table>
&nbsp;
<font face=arial size=4>
<a href=index.php>Сокращенная карта</a> |
<a href=index3.php>Полная карта</a> |
<a href=<?=$url_main;?>/rlit/authors.php>Писатели</a> |
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
</table>
<?
  show_chatovod("artquiz");
?>

<hr>

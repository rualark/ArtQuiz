<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
    share_header("$url_share/amap/", 
      "Classics classification",
      "Map of artists",
      "$url_share/amap/i/classclass_560.png");
require_once "../analytics.php";
?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>ArtMap";
  if ($bname != "index") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center><table border=0>
<tr>
<td>
<a href=<?=$url_main?>/amap><img height=70 alt='ArtMap' align=absmiddle style="vertical-align:middle" border=0 src=i/Classclass200.png></a><br><center>
Artists classification
<td>
<table width=100%>
<tr>
<td>
<? 
  echo "<td align=right>Share: ";
    share_link("$url_share/amap/", 
      "Classics classification",
      "Map of artists",
      "$url_share/amap/i/classclass_560.png");
?>
</table>
&nbsp;
<font face=arial size=4>
<a href=index.php>Timeline</a> |
<a href=index2.php>Timeline with lifetime</a> |
<a href=<?=$url_main;?>/aquiz/artists.php>Artists</a> |
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
</table>
<?
  show_chatovod("artquiz");
?>

<hr>

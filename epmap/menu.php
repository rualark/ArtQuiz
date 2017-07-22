<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
    share_header("$url_share/epmap/", 
      "Classics classification",
      "Poets timeline",
      "$url_share/epmap/i/classclass_560.png");
require_once "../analytics.php";
?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>Poets timeline";
  if ($bname != "index") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center><table border=0>
<tr>
<td>
<a href=<?=$url_main?>/epmap><img height=70 alt='Poets timeline' align=absmiddle style="vertical-align:middle" border=0 src=i/Classclass200.png></a><br><center>
Poets classification
<td>
<table width=100%>
<tr>
<td>
<? 
  echo "<td align=right>Share: ";
    share_link("$url_share/epmap/", 
      "Classics classification",
      "Poets timeline",
      "$url_share/epmap/i/classclass_560.png");
?>
</table>
&nbsp;
<font face=arial size=4>
<a href=index.php>Timeline</a> |
<a href=<?=$url_main;?>/epquiz/authors.php>Poets</a> |
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
</center>
<?
  show_chatovod("artquiz");
?>

<hr>

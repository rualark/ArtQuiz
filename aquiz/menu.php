<meta charset=utf-8 />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<?
    share_header("$url_share/aquiz/", 
      "ArtQuiz",
      "Guess artist by painter",
      "$url_share/aquiz/i/aquiz_560.png");
include "../analytics.php";
?>
<? 
  $bname = basename($_SERVER['PHP_SELF'], '.php');
if (!isset($no_title)) { 
  echo "<title>ArtQuiz";
  if ($bname != "aquiz") echo " - (". $bname . ")";
  echo "</title>";
} 
?>
<center>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=<?=$url_main?>/aquiz><img height=70 alt='ArtQuiz' align=absmiddle style="vertical-align:middle" border=0 src=i/aquiz.png></a>
<td>
<table width=100%>
<tr>
<td>
<? 
  echo "<td align=right>Share: ";
  share_link("$url_share/aquiz/", 
    "ArtQuiz",
    "Guess artist by painter",
    "$url_share/aquiz/i/aquiz_560.png");
?>
</table>
&nbsp;
<font face=arial size=4>
<a href=aquiz.php>Quiz</a> |
<a href=artists.php>Artists</a> |
<?
  echo "<a href=$url_main/amap>Artists timeline</a> | ";
?>
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
<td style="max-width:1200px" colspan=3>
<?
  show_chatovod("artquiz");
?>

<hr>

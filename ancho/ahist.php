<?
echo "<TITLE>ACPA History</TITLE>";
echo "<H2>ACPA History</H2>";
require("mysql.php");

$REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
if (isset($_GET['admh'])) $admh=$_GET['admh'];

if (!$admh) $cond="WHERE host='$REMOTE_ADDR' ";
$r=mysql_query("SELECT * FROM am_hist $cond ORDER BY id DESC LIMIT 1000");
echo mysql_error();
$n=mysql_numrows($r);
echo "<table border=1>";
echo "<tr>";
echo "<th>Time</th>";
if ($admh) echo "<th>Host</th>";
echo "<th>Chords</th><th>Adim</th><th>Showall</th><th>Adup</th>";
echo "</tr>";
for ($i=0; $i<$n; $i++) {
  $w=mysql_fetch_array($r);
  if ($ocp!=$w[cp]) {
    echo "<tr>";
    echo "<td>$w[time]</td>";
    if ($admh) echo "<td>$w[host]</td>";
    echo "<td><a href='ancho.php?ci=$w[id]";
    if ($admh) echo "&admh=1";
    if ($w[tit]!="") {
      echo "'><font color=green><b>".$w[tit]."</b></font></a></td>";
    } else {
      echo "'>".$w[cp]."</a></td>";
    }
    echo "<td>$w[adim]</td>";
    echo "<td>$w[showall]</td>";
    echo "<td>$w[adup]</td>";
	  $ocp=$w[cp];
  } else {
    mysql_query("DELETE FROM am_hist WHERE id='$w[id]'");
	  echo mysql_error();
  }
}
?>

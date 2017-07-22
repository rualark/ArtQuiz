<?
  include "../mysql.php";
  
  function myexec($path) {
    //$output = shell_exec( $path );
    exec( $path, $ra, $rv );
    for ($x=0; $x<count($ra); $x++) $output .= $ra[$x]." ";
    echo $path."<br>";
    echo "Error: $rv<br>";
    if ($rv != 0) echo "<font color=red>";
    else echo "<font color=green>";
    echo "<b>";
    echo "Output: ". $output."<br>";
    echo "</font></b>";
  }

  $r=mysql_query("SELECT NOW() as tm");
  echo mysql_error();
  $w = mysql_fetch_assoc($r);
  
  echo "<p>PHP time: ".date("Y-m-d H:i:s");
  echo "<p>Mysql time: ".$w[tm];
  echo "<p>System time: ";
  myexec("time /t");
?>
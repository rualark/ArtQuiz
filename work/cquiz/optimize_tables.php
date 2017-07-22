<?
  include "../qlib.php";

  $alltables = mysql_query("SHOW TABLES");

  while ($table = mysql_fetch_assoc($alltables))
  {
     foreach ($table as $db => $tablename)
     {
         $q = "OPTIMIZE TABLE ".$tablename."";
         echo $q."<br>";
         mysql_query($q)
         or die(mysql_error());

     }
  }
?>
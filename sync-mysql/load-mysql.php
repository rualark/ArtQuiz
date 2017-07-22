<?
  $fname = "aquiz.sql";
  include "../mysql.php";
  echo "Loading database<br>";
  $handle = fopen($fname, "r");
  if ($handle) {
      $q = "";
      while (($buffer = fgets($handle)) !== false) {
          $buffer = trim($buffer);
          //echo $buffer;
          if (substr($buffer, 0, 2) != "--") $q .= $buffer;
          if (substr($buffer, -1) == ";") {
            mysql_query($q);
            echo mysql_error();
            $q = "";
          }
      }
      if (!feof($handle)) {
          echo "Error: unexpected fgets() fail\n";
      }
      fclose($handle);
  } else echo "Error opening file";
  echo "Loaded successfully<br>";
?>
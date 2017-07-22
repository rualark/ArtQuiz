<?
  // Set composers ratings

  include "mysql.php";
  
  $fa = file("r3.txt");
  for ($i=0; $i<count($fa); $i++) {
    $st = trim($fa[$i]);
    $st = substr($st, strpos($st, " ")+1, 100);
    $st = substr($st, 0, strpos($st, "-")-1);
    //echo "$st<br>";
    if (strlen($st)>13) $st = substr($st, strlen($st)-13, 20);
    $q = "SELECT * FROM cc_composers WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'";
    $r = mysql_query($q);
    $n = mysql_numrows($r);
    if ($n != 1) echo "<font color=red>$n results for $st</font><br>";
    else {
      $w = mysql_fetch_array($r);
      //echo "Set r2 for $w[c_name3]<br>";
      //$r2 = mysql_query("UPDATE cc_composers SET c_r3 = 1 WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
      $r2 = mysql_query("UPDATE cc_composers SET c_rating = 3 WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
    }
  }

  $fa = file("r2.txt");
  for ($i=0; $i<count($fa)/2; $i++) {
    $st = trim($fa[$i*2]);
    if (strlen($st)>13) $st = substr($st, strlen($st)-13, 20);
    $q = "SELECT * FROM cc_composers WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'";
    $r = mysql_query($q);
    $n = mysql_numrows($r);
    if ($n != 1) echo "<font color=red>$n results for $st</font><br>";
    else {
      $w = mysql_fetch_array($r);
      //echo "Set r2 for $w[c_name3]<br>";
      //$r2 = mysql_query("UPDATE cc_composers SET c_r2 = 1 WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
      $r2 = mysql_query("UPDATE cc_composers SET c_rating = 2 WHERE c_name2 LIKE '%$st%' OR c_name3 LIKE '%$st%'");
    }
  }

  $fa = file("r1.txt");
  for ($i=0; $i<count($fa); $i++) {
    $st = trim($fa[$i]);
    $q = "SELECT * FROM cc_composers WHERE c_name3 LIKE '%$st%'";
    $r = mysql_query($q);
    $n = mysql_numrows($r);
    if ($n != 1) echo "<font color=red>$n results for $st</font><br>";
    else {
      $w = mysql_fetch_array($r);
      //echo "Set r1 for $w[c_name3]<br>";
      //$r2 = mysql_query("UPDATE cc_composers SET c_r1 = 1 WHERE c_name3 LIKE '%$st%'");
      $r2 = mysql_query("UPDATE cc_composers SET c_rating = 1 WHERE c_name3 LIKE '%$st%'");
    }
  }

?>  
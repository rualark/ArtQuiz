<?
  include "../../mysql.php";
  include "../../url.php";
  set_include_path(get_include_path() . PATH_SEPARATOR . 'phpexcel/Classes/');
  include_once 'PHPExcel.php';

  $fileType = 'Excel5';
  $fileName = 'composers3.xlsx';
  $sheetName = 'Comp';

  try {
    $fileType = PHPExcel_IOFactory::identify($fileName);
    //fputs($fh, $fileType;
    $objReader = PHPExcel_IOFactory::createReader($fileType);
    //$objReader->setReadDataOnly(true);
    //$objReader->setLoadSheetsOnly($sheetName); 
    $pExcel = $objReader->load($fileName);
  } catch(Exception $e) {
    die('Error loading file $fileName: '.$e->getMessage());
  }

  $fh = fopen("cdesc.php", "w");
  $sheet = $pExcel->getSheet(0); 
  $maxRow = $sheet->getHighestRow(); 
  $maxColumn = $sheet->getHighestColumn();
  //fputs($fh, "<br>$maxRow $maxColumn<br>");
  //$pExcel->setActiveSheetIndex(0);
  //fputs($fh, ($sheet->getCell('B1')->getValue());
  
  // Read header
  $head = $sheet->rangeToArray("A1:{$maxColumn}1", NULL, TRUE, FALSE);
  $colName = array_search("Name", $head[0]);
  $colDesc = array_search("Desc", $head[0]);
  $colR = array_search("Rating", $head[0]);
  $colPeriod = array_search("Period", $head[0]);
  $colFld = array_search("Folder", $head[0]);
  $colID = array_search("ID", $head[0]);
  $colGrp = array_search("Group", $head[0]);
  $colStart = array_search("Start", $head[0]);
  $colStop = array_search("Stop", $head[0]);
  $colCountry = array_search("Country", $head[0]);
  $colNew = array_search("New", $head[0]);
  //fputs($fh, "$colName $colDesc");
  
  // Read table
  $r = mysql_query("SELECT MAX(ca_id) as ca_id, MAX(c_id) as c_id FROM cc_composers");
  echo mysql_error();
  $n = mysql_numrows($r);
  $wi = mysql_fetch_assoc($r);

  // Read data
  fputs($fh, "<?");
  fputs($fh, "  include 'style.php';");
  fputs($fh, "?>");
  fputs($fh, "<table border=1>");
  fputs($fh, "<tr>");
  fputs($fh, "<th></th>");
  fputs($fh, "<th>Composer name</th>");
  fputs($fh, "<th>Group</th>");
  fputs($fh, "<th>Short description</th>");
  fputs($fh, "</tr>");
  for ($i = 2; $i <= $maxRow; $i++){ 
    $row = $sheet->rangeToArray("A$i:{$maxColumn}$i", NULL, TRUE, FALSE);
    if ($row[0][$colName] == "") continue;
    if (($row[0][$colDesc] != "") || ($row[0][$colR] < 3)) {
      fputs($fh, "<tr>");
      $color="white";
      if ($row[0][$colR] < 3) $color = "#ccffcc";
      fputs($fh, "<td bgcolor=$color align=center><b>".$row[0][$colCountry]."</b> ".$row[0][$colStart]."-");
      if ($row[0][$colStop] > 0) fputs($fh, $row[0][$colStop]);
      fputs($fh, "<br>");
      fputs($fh, "<td bgcolor=$color ><a href='$url_main/cquiz/am.php?c_id=".$row[0][$colID]."'>".str_replace("\"", "", str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", $row[0][$colName])))."<br>");
      fputs($fh, "<td bgcolor=$color >".$row[0][$colGrp]."<br>");
      fputs($fh, "<td bgcolor=$color >".$row[0][$colDesc]."<br>");
      //fputs($fh, "<td>".$row[0][$colR]."<br>");
      //fputs($fh, "<td>".$row[0][$colFld]."<br>");
      fputs($fh, "</tr>");
    }
    if ($row[0][$colID] > 0) {
      $q = "UPDATE cc_composers SET c_desc='".$row[0][$colDesc].
        "', c_group='".$row[0][$colGrp].
        "', c_folder='".$row[0][$colFld].
        "', c_rating='".$row[0][$colR].
        "', p_name='".$row[0][$colPeriod].
        "' WHERE c_id='".$row[0][$colID]."'";
      //echo "$q<br>";
      mysql_query($q);
      echo mysql_error();
      $r = mysql_query("SELECT * FROM cc_composers WHERE c_id='".$row[0][$colID]."'");
      echo mysql_error();
      $w = mysql_fetch_array($r);
      $sheet->setCellValue("E$i","$w[c_start]");
      $sheet->setCellValue("F$i","$w[c_stop]");
      $sheet->setCellValue("J$i","$w[c_years]");
      $sheet->setCellValue("H$i","$w[c_country]");
      $sheet->setCellValue("Q$i","$w[c_len]");
      $sheet->setCellValue("R$i","$w[t_count]");
      // Check if Folder is set but no ca_id
      if (($row[0][$colFld] != "") && ($w[ca_id] == 0)) {
        $wi[ca_id]++;
        $ca_id = $wi[ca_id];
        echo "Assigning ca_id $ca_id to $w[c_name]<br>";
        $q = "UPDATE cc_composers SET ca_id = '$ca_id'
          WHERE c_id = '".$row[0][$colID]."'";
        mysql_query($q);
        echo mysql_error();
        $sheet->setCellValue("O$i","$ca_id");
      }
    } else {
      $ca_id = 0;
      if ($row[0][$colFld] != "") {
        $wi[ca_id]++;
        $ca_id = $wi[ca_id];
      }
      $wi[c_id]++;
      $name = $row[0][$colName];
      $p1 = strpos($name, ", ");
      $surname = substr($name, 0, $p1);
      $name2 = substr($name, $p1+2, strlen($name))." ".$surname;
      $q = "INSERT INTO cc_composers VALUES('$wi[c_id]','$name','','','','','','','$name2','$name2','$surname',
        '','".$row[0][$colR]."','".$row[0][$colFld]."','$ca_id','".$row[0][$colPeriod]."','','','','')";
      echo $q."<br>";
      mysql_query($q);
      echo mysql_error();
      $sheet->setCellValue("A$i","$wi[c_id]");
      $sheet->setCellValue("O$i","$ca_id");
      //break;
    }
  }
  fputs($fh, "</table>");
  fputs($fh, "<p>Most known composers are highlighted green");
  fclose($fh);

  copy($fileName, "composers3-".date("Y-m-d").".xlsx");
  include("PHPExcel/Writer/Excel2007.php");
  $objWriter = new PHPExcel_Writer_Excel2007($pExcel);
  $objWriter->save($fileName);
?>
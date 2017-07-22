<?
  include "mysql.php";
  include "lib.php";
  include "style.php";

  start_time();

  $s = $_POST[s];

  function mysearch($st) {
    $r = mysql_query("SELECT a_name, a_id FROM ep_authors WHERE $st");
    echo mysql_error();
    $n = mysql_numrows($r);
    for ($x=0; $x<$n; $x++) {
      $w = mysql_fetch_assoc($r);
      if ($x>0) echo ", ";
      echo "<a target=_blank href='http://en.wikipedia.org/w/index.php?search=$w[a_name]'>$w[a_name]</a>";
    }
    if ($x>0) echo ". ";
  }
  
  if ($s != '') {
    $s = str_replace("\\'", "", $s);
    $s = str_replace("\"", "", $s);
    $s = str_replace(")", "", $s);
    $s = str_replace("'", "", $s);
    $s = str_replace(".", "", $s);
    $s = str_replace(" and ", ", ", $s);
    $splitby = array('-', '–', ' and ', ';', ',', '\(', "\n");
    $pattern = '/\s?'.implode($splitby, '\s?|\s?').'\s?/';
    $sa = preg_split($pattern, $s); // '/[;,\n]/'
    for ($i=0; $i<count($sa); $i++) $sa[$i] = trim($sa[$i]);
    for ($i=0; $i<count($sa); $i++) if ($sa[$i] != '') {
      $sa2 = explode(' ', $sa[$i]);
      echo "<b>$sa[$i]</b> ";
      //mysearch("a_name LIKE '%$sa2[0] ".$sa2[count($sa2)-1]."%'");
      //mysearch("a_name LIKE '%$sa2[0] ".$sa2[count($sa2)-1]."%'");
      mysearch("a_name LIKE '% ".$sa2[count($sa2)-1]."'");
      mysearch("a_name LIKE '".$sa2[count($sa2)-1]."'");
      //mysearch("a_name LIKE '$sa2[0]%'");
      echo "<br>";
    }
  }
  
  echo "<hr>";
  echo "<form method=post>";
  echo "Insert text to search for authors in:<br>";
  echo "<textarea cols=100 rows=30 name=s value=>$s";
  echo "</textarea> ";
  echo "<input type=submit>";
  echo "</form>";
?>
<?
  include "lib.php";
  
  secure_variable("c");
  secure_variable("q");
  
  echo "<p>http://artquiz.sourceforge.net/pquiz/pquiz.php?share=".base64_encode(gzcompress("$c:$q"));
  echo "<p>http://artquiz.sourceforge.net/rlit/pquiz.php?share=".base64_encode(gzcompress("$c:$q"));
?>
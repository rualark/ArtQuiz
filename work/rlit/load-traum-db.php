<?
  // This is copy creator
  include "../mysql.php";
  include "style.php";

  /*
  $fa = file('db/author');
  $c = count($fa);
  for ($i=0; $i<$c; $i++) {
    $sa = explode("\t", mysql_real_escape_string(trim(iconv("windows-1251", "utf-8", $fa[$i]))));
    mysql_query("REPLACE INTO tr_authors VALUES(
      '$sa[0]', '$sa[1]', '$sa[2]', '$sa[3]', '$sa[4]', '$sa[5]', '$sa[6]'
    )");
    echo mysql_error();
    //if ($i>100) break;
  }
  */
  
  $fa = file('db/book');
  $c = count($fa);
  for ($i=0; $i<$c; $i++) {
    $sa = explode("\t", mysql_real_escape_string(trim(iconv("windows-1251", "utf-8", $fa[$i]))));
    $ext = substr($sa[9], strlen($sa[9])-3);
    mysql_query("REPLACE INTO tr_books VALUES(
      '$sa[0]', '$sa[1]', '$sa[2]', '$sa[3]', '$sa[4]', '$sa[5]', '$sa[6]',
      '$sa[7]', '$sa[8]', '$sa[9]', '$sa[10]', '$sa[11]', '$sa[12]', '$sa[13]', '$ext'
    )");
    echo mysql_error();
    //if ($i>100) break;
  }
  
  /*
  $fa = file('db/bookanno');
  $c = count($fa);
  for ($i=0; $i<$c; $i++) {
    $sa = explode("\t", mysql_real_escape_string(trim(iconv("windows-1251", "utf-8", $fa[$i]))));
    $sa[1] = trim(str_replace("\\\\n", "\n", $sa[1]));
    //echo "$sa[0] - $sa[1]<br>";
    mysql_query("REPLACE INTO tr_bookanno VALUES(
      '$sa[0]', '$sa[1]'
    )");
    echo mysql_error();
    //if ($i>100) break;
  }
  */
  
  /*
  $fa = file('db/booktags');
  $c = count($fa);
  for ($i=0; $i<$c; $i++) {
    $sa = explode("\t", mysql_real_escape_string(trim(iconv("windows-1251", "utf-8", $fa[$i]))));
    mysql_query("REPLACE INTO tr_booktags VALUES(
      '$sa[0]', '$sa[1]'
    )");
    echo mysql_error();
    //if ($i>100) break;
  }

  $fa = file('db/series');
  $c = count($fa);
  for ($i=0; $i<$c; $i++) {
    $sa = explode("\t", mysql_real_escape_string(trim(iconv("windows-1251", "utf-8", $fa[$i]))));
    mysql_query("REPLACE INTO tr_series VALUES(
      '$sa[0]', '$sa[1]', '$sa[2]'
    )");
    echo mysql_error();
    //if ($i>100) break;
  }
  */
  
?>
<?
  require "../mysql.php";

  $q = "SELECT * FROM cc_composers WHERE ca_id != 0";
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_assoc($r);
    $cor_st = "Correct";
    $text = "$cor_st. ".str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", $w[c_name3]));
    $text = str_replace(" ", "%20", $text);
    echo "$text<br>";
    if (is_file("../voice/c$w[c_id].mp3")) continue;
    file_put_contents("../voice/c$w[c_id].mp3", file_get_contents("http://alch.strangled.net/cquiz/work/text2speech.php?cst=$text"));

    $cor_st = "Wrong";
    $text = "$cor_st. ".str_replace("'", "", iconv("UTF-8", "cp1251//TRANSLIT", $w[c_name3]));
    $text = str_replace(" ", "%20", $text);
    echo "$text<br>";
    file_put_contents("../voice/w$w[c_id].mp3", file_get_contents("http://alch.strangled.net/cquiz/work/text2speech.php?cst=$text"));

    file_put_contents("../voice/$i.mp3", file_get_contents("http://alch.strangled.net/cquiz/work/text2speech.php?cst=$i"));
  }
?>
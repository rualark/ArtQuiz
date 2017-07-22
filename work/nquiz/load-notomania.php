<?
  // This is main loader
  include "mysql.php";
  include "lib.php";
  start_time();
  
  function myfile($name, $method="GET", $postdata='', $load=1, $path="cache", $fname="") {
    $ln = str_replace("http://", "", $name);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace(":", "-", $ln);
    $ln = str_replace(",", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    $ln = str_replace("#", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file($ln);
      else return 1;
    }
    usleep(100000);
    $opts = array('http' =>
      array(
        'method'  => "$method",
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
      )
    );
    $context  = stream_context_create($opts);
    $data = file_get_contents($name, false, $context);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return file($ln);
    else return 1;
  }

  function find_closest($st, $arr) {
    GLOBAL $last_lev;
    $last_lev = 100000;
    if (!is_array($arr)) return 0;
    $min = 10000;
    $c = count($arr);
    foreach ($arr as $key => $val) {
      $l = levenshtein($st, $val);
      if ($l < $min) {
        $min = $l;
        $min_key = $key;
      }
    }
    $last_lev = $min;
    return $min_key;
  }
  
  function load_composers($url) {
    GLOBAL $cname;
    $fa = myfile($url);
    $sf1 = "<a href='kompozitor.php?";
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $sa = explode($sf1, $st);
        foreach ($sa as $st2) if (strpos($st2, "'") !== false) {
          $link = substr($st2, 0, strpos($st2, "'"));
          $link = "http://www.notomania.ru/kompozitor.php?$link";
          $name = substr($st2, strpos($st2, ">")+1, strpos($st2, "<")-strpos($st2, ">")-1);
          echo "$name - $link<br>";
          load_composer($name, $link);
        }
      }
    }
  }
  
  function load_composer($c_name, $link) {
    GLOBAL $wname, $last_lev;
    $fa = myfile($link);
    $sf1 = 'href="noty_kompozitsii.php?';
    //$c = count($fa);
    //if ($c <10) return 1;
    foreach ($fa as $st) {
      $st = iconv("windows-1251", "utf-8", $st);
      if (strpos($st, $sf1) !== false) {
        $link = substr($st, strpos($st, $sf1)+6);
        $name = substr($link, strpos($link, ">")+1, strpos($link, "<")-strpos($link, ">")-1);
        $link = substr($link, 0, strpos($link, '"'));
        $link = "http://www.notomania.ru/$link";
        echo "$c_name <b>$name - <font color=red>".$wname[$a_id][$w_id]."</font> - <a href='$link' target=_blank>$link</a></b> ";
        /*
        echo "<form action='http://www.notomania.ru/comp_request.php?id=4558' method=post name=formreq>";
        echo "<input type=hidden name=pkey value=109116 />";
        echo "<input type=hidden name=id2 value=4558 />";
        echo "<input type=submit>";
        echo "</form>";
        */
        echo "<br>";
        load_work($c_name, $name, $link);
        //if ($w_id == 0) load_poem($name, $link, $a_id, $w_id);
      }
    }
  }
  
  function load_work($c_name, $w_name, $url) {
    $sf1 = 'name="pkey"';
    $sf2 = 'name="id2"';
    $sf3 = '<dt>Загрузили:</dt> <dd>';
    $sf4 = '<dt>Инструмент:</dt> <dd>';
    //$sf2 = "<div id"; // comp_request.php?id=4559&pkey=109116&id2=4559
    $fa = myfile($url);
    $c = count($fa);
    for ($i=0; $i<$c; $i++) {
      $st = $fa[$i];
      $st = iconv("windows-1251", "utf-8", $st);
      if ((strpos($st, $sf4) !== false)) {
        $w_type = substr($st, strpos($st, $sf4)+strlen($sf4));
        $w_type = substr($w_type, 0, strpos($w_type, '<'));
      }
      if ((strpos($st, $sf3) !== false)) {
        $w_rating = substr($st, strpos($st, $sf3)+strlen($sf3));
        $w_rating = substr($w_rating, 0, strpos($w_rating, ' '));
      }
      if ((strpos($st, $sf1) !== false)) {
        $pkey = substr($st, strpos($st, $sf1)+strlen($sf1)+8);
        $pkey = substr($pkey, 0, strpos($pkey, '"'));
      }
      if ((strpos($st, $sf2) !== false)) {
        $id2 = substr($st, strpos($st, $sf2)+strlen($sf2)+8);
        $id2 = substr($id2, 0, strpos($id2, '"'));
        echo "$c_name - $w_name - $link - '$id2' - '$pkey' - '$w_rating' - '$w_type'<br>";
        //$link = str_replace("noty_kompozitsii", "comp_request", $url);
        //$link = "$link&pkey=$pkey&id2=$id2";
        $link = "http://www.notomania.ru/comp_request.php";
        $postdata = http_build_query(
          array(
            'id' => "$id2",
            'id2' => "$id2",
            'pkey' => "$pkey"
          )
        );
        //print_r($postdata);
        echo "$link<br>";
        $fa2 = myfile($link, "POST", $postdata, 1, "pdf", "$id2.pdf");
        $size = filesize("pdf/$id2.pdf");
        mysql_query("INSERT INTO nq_pdf VALUES(0, '$c_name', '$w_name', '$id2', '$w_rating', '$pkey', '$size', '$w_type')");
        echo mysql_error();
        break;
      }
    }
  }
  
  for ($i=1; $i<34; $i++) {
    load_composers("http://www.notomania.ru/kompozitory.php?bukva=$i");
  }
  stop_time();
?>

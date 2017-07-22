<?
  include "../mysql.php";
  include "lib.php";
  include "style.php";

  function file_get_contents2($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $return = curl_exec($ch);
    //print_r($return);
    curl_close($ch);
    return $return;
  }

  function myfile($name, $load=1, $path="cache", $fname="") {
    $ln = $name;
    $ln = str_replace("http://", "", $ln);
    $ln = str_replace("https://", "", $ln);
    $ln = str_replace("%20", " ", $ln);
    $ln = str_replace("/", "-", $ln);
    $ln = str_replace("=", "-", $ln);
    $ln = str_replace("?", "-", $ln);
    if ($fname != "") $ln = $fname;
    //$ln = str_replace(".", "-", $ln);
    $ln = "$path/".$ln;
    //echo "$name // $ln<br>";
    if (file_exists($ln)) {
      if ($load>0) return file_get_contents($ln);
      else return 1;
    }
    usleep(100000);
    $data = file_get_contents2($name);
    if ($data === FALSE) return 0;
    file_put_contents($ln, $data);
    if ($load>0) return $data;
    else return 1;
  }

  start_time();

  $s = $_POST[s];

  if ($s != '') {
    // load names
    $r = mysql_query("SELECT * FROM rl_authors WHERE a_wiki != '' ORDER BY a_name");
    echo mysql_error();
    $n = mysql_numrows($r);
    echo "<form action=$url_main/rlit/authors.php method=get>";
    echo "<input type=hidden name=act value=tag>";
    for ($i=0; $i<$n; $i++) {
      $wa = mysql_fetch_assoc($r);
      $a_id = $wa[a_id];
      //$wikilink = "http://ru.wikipedia.org/w/index.php?search=$wa[a_name]";
      //if ($wa[a_wiki] != "") $wikilink = $wa[a_wiki];
      $st = myfile($wa[a_wiki]);
      $sa = explode($s, $st);
      if (count($sa)>1) {
        echo "<input type=checkbox name=a$a_id> ";
        echo " <a title='Add new tag' onclick='r=prompt(\"Tag:\", \"\"); t=prompt(\"Type:\", \"\"); location.replace(\"$url_main/rlit/authors.php?act=addtag&a_id=$a_id&atag=\"+r+\"&t_type=\"+t); return false' href=# target=_blank><font color=black><img src=i/plus.png height=15></font></a> ";
        echo " <a target=_blank href='$wa[a_wiki]'><img height=18 src=i/wiki.png></a> ";
        echo "<a title='$st3' target=_blank href='$url_main/rlit/authors.php?a_id=$a_id'>";
        if ($p2 !== false) echo "<font color=green>";
        echo "$wa[a_name]</font></s></font></a> ".(count($sa)-1)." ";
        $r2 = mysql_query("SELECT * FROM rl_atags WHERE a_id='$a_id' AND t_type>0 ORDER BY t_type DESC");
        echo mysql_error();
        $n2 = mysql_numrows($r2);
        echo mysql_error();
        for ($x=0; $x<$n2; $x++) {
          $w2 = mysql_fetch_assoc($r2);
          if ($x>0) echo ", ";
          echo "<a title='$w2[l_type]' href='works.php?tag=$w2[t_name]'>";
          if ($w2[t_type] == 2) echo "<font color=green>";
          echo "$w2[t_name]</font></a>";
          if (strpos($_SERVER[REMOTE_ADDR], "192.168.9.") !== false) {
            //if ($w2[t_desc] == '') echo " <img title='No description' src=i/edit.png height=14> ";
          }
        }
        echo "<br>";
      }
      //break;
    }
    echo "<br>Add tag: "; // <input type=text name=atag>";
    echo "<input type=text size=40 name=atag list=bcomlist> type ";
    echo "<input type=text size=20 name=t_type list=bcomlist2> ";
    echo "<datalist id=bcomlist>";
    $q = "SELECT t_name FROM rl_atags GROUP BY t_name";
    $r2 = mysql_query($q);
    echo mysql_error();
    $n2 = mysql_numrows($r2);
    for ($x=0; $x<$n2; $x++) {
      $w2 = mysql_fetch_assoc($r2);
      echo "<option value='$w2[t_name]'></option>";
    }
    echo "</datalist>";
    echo "</datalist>";
    echo "<datalist id=bcomlist2>";
    echo "<option value='0'></option>";
    echo "<option value='1'></option>";
    echo "<option value='2'></option>";
    echo "</datalist>";
    echo " <input type=submit>";
    echo "</form>";
  }
  
  echo "<hr>";
  echo "<form method=post>";
  echo "Find text in all authors wiki:<br>";
  echo "<input type=text size=100 name=s value='$s'> ";
  echo "<input type=submit>";
  echo "</form>";
  
  echo "<hr>";
  stop_time();
?>
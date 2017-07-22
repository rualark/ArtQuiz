<?
  // This is works loader
  include "../mysql.php";
  include "style.php";

  exit;
  $q = "SELECT * FROM rq_authors"; 
  $r = mysql_query($q);
  echo mysql_error();
  $n = mysql_numrows($r);
  for ($i=0; $i<$n; $i++) {
    $w = mysql_fetch_array($r);
    $sa = explode(' ', $w[a_name]);
    $surname = $sa[count($sa)-1];
    $letter = mb_substr($w[a_name], 0, 1);
    // Find l_author
    if ($w[rp_id] == -1) {
      $q = "SELECT * FROM l_authors WHERE a_name LIKE '$letter% $surname'"; 
      $r2 = mysql_query($q);
      echo mysql_error();
      $n2 = mysql_numrows($r2);
      if ($n2 == 0) {
        $q = "SELECT * FROM l_authors WHERE a_name LIKE '$surname'"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $n2 = mysql_numrows($r2);
      }
      if ($n2 == 1) {
        $w2 = mysql_fetch_array($r2);
        echo "$w[a_name] = $w2[a_name]<br>";
        mysql_query("UPDATE rq_authors SET rp_id='$w2[a_id]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET ep_id='$w2[ep_id]' WHERE a_id='$w[a_id]' AND ep_id=0");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET rl_id='$w2[rl_id]' WHERE a_id='$w[a_id]' AND rl_id=0");
        echo mysql_error();
        mysql_query("UPDATE l_authors SET rq_id='$w[a_id]' WHERE a_id='$w2[a_id]'");
        echo mysql_error();
        mysql_query("UPDATE rl_authors SET rq_id='$w[a_id]' WHERE a_id='$w2[rl_id]'");
        echo mysql_error();
        mysql_query("UPDATE ep_authors SET rq_id='$w[a_id]' WHERE a_id='$w2[ep_id]'");
        echo mysql_error();
      }
      if ($n2 > 1) {
        for ($x=0; $x<$n2; $x++) {
          $w2 = mysql_fetch_array($r2);
          echo "<font color=red>$w[a_name] - $w2[a_name]</font><br>";
        }
      }
    }
    if (($w[eq_id] != 0) && ($w[a_ename] != '')) {
      $sa = explode(' ', $w[a_ename]);
      $surname = $sa[count($sa)-1];
      $letter = mb_substr($w[a_ename], 0, 1);
      // Find equote
      //$q = "SELECT * FROM eq_authors WHERE a_name LIKE '$letter% $surname'"; 
      //$r2 = mysql_query($q);
      //echo mysql_error();
      //$n2 = mysql_numrows($r2);
      //if ($n2 == 0) {
        $q = "SELECT * FROM eq_authors WHERE a_name LIKE '$w[a_ename]'"; 
        $r2 = mysql_query($q);
        echo mysql_error();
        $n2 = mysql_numrows($r2);
      //}
      if ($n2 == 1) {
        $w2 = mysql_fetch_array($r2);
        echo "$w[a_name] = $w2[a_name]<br>";
        mysql_query("UPDATE rq_authors SET eq_id='$w2[a_id]' WHERE a_id='$w[a_id]'");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET ep_id='$w2[ep_id]' WHERE a_id='$w[a_id]' AND ep_id=0");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET cc_id='$w2[cc_id]' WHERE a_id='$w[a_id]' AND cc_id=0");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET aq_id='$w2[aq_id]' WHERE a_id='$w[a_id]' AND aq_id=0");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET rl_id='$w2[rl_id]' WHERE a_id='$w[a_id]' AND rl_id=0");
        echo mysql_error();
        mysql_query("UPDATE rq_authors SET rp_id='$w2[rp_id]' WHERE a_id='$w[a_id]' AND rp_id=0");
        echo mysql_error();
        //mysql_query("UPDATE l_authors SET rq_id='$w[a_id]' WHERE ep_id='$w2[a_id]' AND rq_id=0");
        echo mysql_error();
        //mysql_query("UPDATE eq_authors SET rq_id='$w[a_id]' WHERE ep_id='$w2[a_id]'");
        echo mysql_error();
      }
      if ($n2 > 1) {
        for ($x=0; $x<$n2; $x++) {
          $w2 = mysql_fetch_array($r2);
          //echo "$w[a_name] - $w2[a_name]<br>";
        }
      }
    }
    continue;
    if ($w[ep_id] != 0) {
      if ((!file_exists("apic-rl/$w[a_id].jpg")) && (file_exists("apic-ep/$w[ep_id].jpg"))) {
        echo "Detected new pic for $w[a_name]: <img src=apic-ep/$w[ep_id].jpg><br>";
        //copy("apic-ep/$w[ep_id].jpg", "apic-rl/$w[a_id].jpg");
      }
      $q = "SELECT * FROM ep_authors WHERE a_id=$w[ep_id]"; 
      $r2 = mysql_query($q);
      echo mysql_error();
      $w2 = mysql_fetch_array($r2);
      if (($w2[eq_id] != 0) && ($w[eq_id] == 0)) {
        $q = "SELECT * FROM eq_authors WHERE a_id=$w2[eq_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link from $w[a_name] to eq $w3[a_name] through ep $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET eq_id='$w2[eq_id]' WHERE a_id='$w[a_id]'");
      }
      if (($w2[eq_id] == 0) && ($w[eq_id] != 0)) {
        $q = "SELECT * FROM eq_authors WHERE a_id=$w[eq_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link through $w[a_name] from eq $w3[a_name] to ep $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET eq_id='$w2[eq_id]' WHERE a_id='$w[a_id]'");
      }
      if (($w2[ra_id] != 0) && ($w[rp_id] == 0)) {
        $q = "SELECT * FROM l_authors WHERE a_id=$w2[ra_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link from $w[a_name] to rp $w3[a_name] through ep $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET rp_id='$w2[ra_id]' WHERE a_id='$w[a_id]'");
      }
      if (($w2[eq_id] == 0) && ($w[eq_id] != 0)) {
        $q = "SELECT * FROM l_authors WHERE a_id=$w[rp_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link through $w[a_name] from rp $w3[a_name] to ep $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET eq_id='$w2[eq_id]' WHERE a_id='$w[a_id]'");
      }
    }
    if ($w[eq_id] != 0) {
      if ((!file_exists("apic-rl/$w[a_id].jpg")) && (file_exists("apic-eq/$w[eq_id].jpg"))) {
        echo "Detected new pic for $w[a_name]: <img src=apic-eq/$w[eq_id].jpg><br>";
        //copy("apic-eq/$w[eq_id].jpg", "apic-rl/$w[a_id].jpg");
      }
      $q = "SELECT * FROM eq_authors WHERE a_id=$w[eq_id]"; 
      $r2 = mysql_query($q);
      echo mysql_error();
      $w2 = mysql_fetch_array($r2);
      if (($w2[ep_id] != 0) && ($w[ep_id] == 0)) {
        $q = "SELECT * FROM ep_authors WHERE a_id=$w2[ep_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link from $w[a_name] to ep $w3[a_name] through eq $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET ep_id='$w2[ep_id]' WHERE a_id='$w[a_id]'");
      }
      if (($w2[ep_id] == 0) && ($w[ep_id] != 0)) {
        $q = "SELECT * FROM ep_authors WHERE a_id=$w[ep_id]"; 
        $r3 = mysql_query($q);
        echo mysql_error();
        $w3 = mysql_fetch_array($r3);
        echo "Detected new link through $w[a_name] from ep $w3[a_name] to eq $w2[a_name]<br>";
        //mysql_query("UPDATE rq_authors SET eq_id='$w2[eq_id]' WHERE a_id='$w[a_id]'");
      }
    }
  }
?>

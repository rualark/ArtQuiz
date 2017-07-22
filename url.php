<?
  mb_internal_encoding("UTF-8"); 
  include "url_include.php";

  $url_arkhipenko = "http://arkhipenko.weebly.com";
  $url_share_art = "$url_share/aquiz/paintings";
  $url_art = "$url_main/aquiz/paintings";
  $url_art_preview = "$url_main/aquiz/preview";
  $url_tracks = "$url_main/cquiz/tracks";
  $url_epoems = "$url_main/epquiz/poems";
  $url_blocks = "$url_main/cquiz/blocks";
  $url_cpic = "$url_main/cquiz/cpic";
  $url_apic = "$url_main/cquiz/blocks";
  $url_rppic = "$url_main/pquiz/apic";
  $url_scores = "$url_main/paintings";
  //$ru_accept = strpos(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']), 'ru')===false?0:1;
  //echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
  //echo " - $ru_accept";
  $ru_accept = 1;

  $analytics_projects = array('rquotes', 'equotes', 'pquiz', 'epquiz', 'rlit', 'cquiz', 'aquiz', 
    'nquiz', 'compart', 'cmap', 'classclass', 'amap', 'rpmap', 'epmap', 'rlmap', 'rlmap-e', 'rfmap', 'efmap', 'rfil');
    
  $log_projects = array(
    'cquiz' =>   array('cc_qlog', 'l_time', 'l_ip'),
    'epquiz' =>  array('ep_log',  'l_time', 'l_ip'),
    'pquiz' =>   array('l_log',   'l_time', 'l_ip'),
    'nquiz' =>   array('nq_log',  'l_time', 'l_ip'),
    'rlit' =>    array('rl_log',  'l_time', 'l_ip'),
    'equotes' => array('eq_log',  'l_time', 'l_ip'),
    'rquotes' => array('rq_log',  'l_time', 'l_ip'),
    'aquiz' =>   array('aq_log',  'time', 'ip'),
    'compart' => array('ca_log',  'l_time', 'ip'),
  );

  $shares_array = array(
    'ArtQuiz Portal' => array("", "/i/artquiz_560.png", "Art education portal"),
    'Guess artist' => array("/aquiz", "/aquiz/i/aquiz_560.png", "Guess artist by painter"),
    'Угадай поэта' => array("/pquiz", "/pquiz/i/lquiz.png", ""),
    'Guess poet' => array('/epquiz', '/epquiz/i/lquiz_560.png', ''),
    'Угадай писателя' => array('/rlit', '/rlit/i/rlit_560.png', ''),
    'Composer Quiz' => array('/cquiz', '/cquiz/images/cquiz_560.png', 'Listen to music and guess composer'),
    'Guess quote' => array('/equotes', '/equotes/i/equotes_560.png', ''),
    'Угадай философа' => array('/rfil', '/rfil/i/rfil_560.png', ''),
    'Карта философов' => array('/rfmap', '/rfmap/i/classclass_560', ''),
    'Philosophers map' => array('/efmap', '/efmap/i/classclass_560', ''),
    'Угадай цитату' => array('/rquotes', '/rquotes/i/rquotes_560.png', ''),
    'Guess score' => array('/nquiz', '/nquiz/i/nquiz_560.png', ''),
    'Artists timeline' => array('/amap', '/amap/i/classclass_560.png', ''),
    'Карта поэтов' => array('/rpmap', '/rpmap/i/classclass_560.png', ''),
    'Poets timeline' => array('/epmap', '/epmap/i/classclass_560.png', ''),
    'Карта писателей' => array('/rlmap', '/rlmap/i/classclass_560.png', ''),
    'Authors timeline' => array('/rlmap-e', '/rlmap-e/i/classclass_560.png', ''),
    'Compart' => array('/compart', '/compart/images/compart_560.png', 'Associate paintings with music'),
  );
  http://artquiz.sourceforge.net/pquiz/pquiz.php?share=eJwzM7AyNDAAAARFATI%3D

  function share_link($url, $title, $desc, $img, $services='facebook,vkontakte,gplus', $style='') {
    echo "
      <script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
      <script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
      <div style='display: inline-block; $style' class='ya-share2' 
      data-services='$services'
      data-counter='' 
      data-description='$desc' 
      data-title='$title' 
      data-url='$url'
      data-image='$img'></div>
    ";
  }
  
  function show_share_link($title, $services='facebook,vkontakte,gplus', $style='') {
    GLOBAL $shares_array, $url_share;
    share_link($url_share.$shares_array[$title][0], $title, $shares_array[$title][2], 
      $url_share.$shares_array[$title][1], $services, $style);
    share_link($url_share.$shares_array[$title][0].'/', $title, $shares_array[$title][2], 
      $url_share.$shares_array[$title][1], 'facebook,vkontakte', $style);
  }
  
  function share_header($url, $title, $desc, $img) {
    echo "<meta property='og:url' content='$url' />";
    echo "<meta property='og:image' content='$img' />";
    echo "<meta property='og:title' content='$title' />";
    echo "<meta property='og:description' content='$desc' />";
  }

  function show_chatovod($name) {
    echo "<div id=\"420065961799316593\" align=\"left\" style=\"width: 100%; overflow-y: hidden;\" class=\"wcustomhtml\"><script type=\"text/javascript\">";
    echo "var chatovodOnLoad = chatovodOnLoad || [];";
    echo "chatovodOnLoad.push(function() {";
    echo "    chatovod.addChatButton({host: \"$name.chatovod.com\", align: \"topRight\",";
    echo "        width: 490, height: 600, defaultLanguage: \"en\"});";
    echo "});";
    echo "(function() {";
    echo "    var po = document.createElement('script');";
    echo "    po.type = 'text/javascript'; po.charset = \"UTF-8\"; po.async = true;";
    echo "    po.src = (document.location.protocol=='https:'?'https:':'http:') + '//st1.chatovod.com/api/js/v1.js?2';";
    echo "    var s = document.getElementsByTagName('script')[0];";
    echo "    s.parentNode.insertBefore(po, s);";
    echo "})();";
    echo "</script></div>";
  }
  
  function show_integration($w) {
    GLOBAL $url_main, $button_height;
    if ($w[ep_id] > 0) echo " <a href='$url_main/epquiz/authors.php?a_id=$w[ep_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/pquiz4.png></a> ";
    if ($w[rq_id] > 0) echo " <a href='$url_main/rquotes/authors.php?a_id=$w[rq_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/rquotes.png></a> ";
    if ($w[eq_id] > 0) echo " <a href='$url_main/equotes/authors.php?a_id=$w[eq_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/equotes.png></a> ";
    if ($w[aq_id] > 0) echo " <a href='$url_main/aquiz/artist.php?a_id=$w[aq_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/aquiz.png></a> ";
    if ($w[cc_id] > 0) echo " <a href='$url_main/cquiz/am.php?c_id=$w[cc_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/cquiz_560.png></a> ";
    if ($w[rp_id] > 0) echo " <a href='$url_main/pquiz/authors.php?a_id=$w[rp_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/rpquiz_small.png></a> ";
    if ($w[rl_id] > 0) echo " <a href='$url_main/rlit/authors.php?a_id=$w[rl_id]'><img height=$button_height valign=middle border=0 src=$url_main/i/rlit_small.png></a> ";
  }
  
  function show_quote($w, $l, $repl=0, $width='100%', $col='#eeeeee', $col2='#bbbbbb', $txt='<center>') {
    GLOBAL $url_main;
    if ($w["{$l}q_id"] != 0) {
      $q = "SELECT * FROM {$l}q_quotes LEFT JOIN {$l}q_authors USING (a_id) 
        WHERE a_id=".$w["{$l}q_id"]." ORDER BY RAND() LIMIT 1";
      $r = mysql_query($q);
      //echo $q;
      echo mysql_error();
      $w2=mysql_fetch_array($r);
      if ($w2[q_txt] != '') {
        echo "<table border=0 width=$width><tr><td bgcolor=$col2>
        <table cellpadding=10 border=0 cellspacing=1 width=100%>";
        echo "<tr>";
        echo "<td bgcolor=$col align=left valign=top>";
        echo $txt;
        if ($repl) {
          $sa = explode(' ', $w2[a_name]);
          for ($x=0; $x<count($sa); $x++) $w2[q_txt] = str_replace($sa[$x], '***', $w2[q_txt]);
        } else {
          echo "<a target=_blank href='$url_main/{$l}quotes/works.php?q_id=$w2[q_id]'>";
        }
        echo "<font size=+2><pre style='display: inline; white-space: pre-wrap'>".trim($w2[q_txt]);
        echo "</table>";
        echo "</table>";
      }
    }
  }

  function insert_analytics_hit($table, $hitserver, $hitscript, $hitquery) {
    GLOBAL $analytics_projects, $analytics_project, $analytics_ip;
    if (isset($_SERVER["HTTP_X_REMOTE_ADDR"])) $analytics_ip =  $_SERVER["HTTP_X_REMOTE_ADDR"];
    else $analytics_ip = $_SERVER[REMOTE_ADDR];
    foreach ($analytics_projects as $key => $project_name) {
      if (strpos($hitscript, "$project_name/") !== false) {
        $analytics_project = $project_name;
        break;
      }
    }
    //$analytics_folder = substr($_SERVER[SCRIPT_NAME], 1);
    //$analytics_script = substr($analytics_folder, strpos($analytics_folder, '/')+1);
    //$analytics_folder = substr($analytics_folder, 0, strpos($analytics_folder, '/'));
    $q = "INSERT INTO $table VALUES(NOW(), '$analytics_ip', '$hitserver', '$analytics_project', '$hitscript', '$hitquery')";
    //echo $q;
    mysql_query($q);
    echo mysql_error();
  }
  
?>
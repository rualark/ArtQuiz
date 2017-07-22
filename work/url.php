<?
  include "url_include.php";

  $url_arkhipenko = "http://arkhipenko.weebly.com";
  $url_share_art = "$url_share/aquiz/paintings";
  $url_art = "$url_main/aquiz/paintings";
  $url_tracks = "$url_main/cquiz/tracks";
  $url_blocks = "$url_main/cquiz/blocks";
  $url_cpic = "$url_main/cquiz/cpic";
  $url_apic = "$url_main/cquiz/blocks";
  $url_rppic = "$url_main/pquiz/apic";
  $url_scores = "$url_main/paintings";

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
?>
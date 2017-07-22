<?
  $url_share_compart = "http://composerquiz.sourceforge.net";
  $url_compart = "";
  $url_share_cquiz = "http://composerquiz.sourceforge.net";
  $url_cquiz = "";
  $url_share_art = "http://artquiz.sourceforge.net/paintings";
  $url_art = "http://artquiz.sourceforge.net/paintings";
  
  function share_link($url, $title, $desc, $img, $services='facebook,vkontakte,gplus') {
    echo "
      <script type='text/javascript' src='//yastatic.net/es5-shims/0.0.2/es5-shims.min.js' charset='utf-8'></script>
      <script type='text/javascript' src='//yastatic.net/share2/share.js' charset='utf-8'></script>
      <div style='display: inline-block' class='ya-share2' 
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
?>
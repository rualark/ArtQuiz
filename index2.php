<?
  include "url.php";
  share_header("$url_share", 
    "ArtQuiz Portal",
    "Education and quiz art portal",
    "$url_share/i/artquiz_560.png");
  echo "<title>ArtQuiz Portal</title>";
?>
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<script src='js/jquery-1.9.1.min.js'></script>
<script src='js/jquery.maphighlight.js'></script>
<script type='text/javascript'>$(function() {
$('.map').maphilight({ stroke: false, fillColor: 'ffffff',});
});</script>

<center>
<a href=<?=$url_main;?>><img border=0 src=i/header-918-left.png></a><a target=_blank href=<?=$url_arkhipenko;?>><img border=0 src=i/header-918-right.png></a>
<br>
<div style='position: relative; width: 918'>
<img class=map border=0 src=i/artquiz_map.png usemap='#Navigation'>
<? 
  function show_area($x, $y, $rad, $href, $alt) {
    GLOBAL $area, $area2, $dx, $dy;
    $area .= "<area alt='$alt' href='$href' shape=circle coords='".($x+$dx).",".($y+$dy).",$rad'>";
    // Next one for Safari mobile
    $area2 .= "<a href='$href'><div class=area style='position:absolute; width:".
      ($rad*2)."px; height:".($rad*2)."px; left:".($x+$dx-$rad)."px; top:".
      ($y+$dy-$rad)."px'></div></a>";
  }
  
  share_link("$url_share", 
    "ArtQuiz Portal",
    "Education and quiz art portal",
    "$url_share/i/artquiz_560.png",
    'facebook,vkontakte,gplus',
    'position: absolute; top: 10px; left: 10px; opacity: 0.9');
  $dx = 68;
  $dy = -38;
  //echo "</div>";
  echo "<map name=Navigation>";
  show_area(638, 200, 83,  'nquiz', 'Guess composer by score');
  show_area(462, 396, 123, 'cquiz', 'Guess composer by music');
  show_area(265, 670, 123, 'aquiz', 'Guess artist by painting');
  show_area(658, 670, 123, 'epquiz', 'Guess poet by poem');
  show_area(210, 419, 83,  'compart', 'Associate music with paintings');
  show_area(288, 202, 83,  'classclass', 'Composers and genres timelines');
  show_area(58,  835, 83,  'amap', 'Artists timeline');
  echo $area;
  echo "</map>";
  $browserAsString = $_SERVER['HTTP_USER_AGENT'];
  if (strstr($browserAsString, " AppleWebKit/") && strstr($browserAsString, " Mobile/")) {
    //echo "<style>.area:hover { background: rgba(250, 250, 250, 0.3); }</style>";
    echo "<div style='background:transparent; position:absolute; z-index:1; top: 0px; left: 0px; width:100%; height:100%;'>";
    echo "$area2";
    echo "</div>";
  }
?>
</div>
</center>
<?
  show_chatovod("artquiz");
?>
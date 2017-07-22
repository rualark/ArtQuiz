<?
  //$auth_necessary = 1;
  include "mysql.php";
  include "auth.php";
  echo "<meta charset=utf-8 />";
  echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" />';
  include "url.php";
  include "style.php";
  include "analytics.php";
  include "lib.php";
  
  secure_variable("ru");
  
  if (!isset($ru)) $ru = $ru_accept;
  share_header("$url_share", 
    "ArtQuiz Portal",
    "Education and quiz art portal",
    "$url_share/i/artquiz_560.png");
  echo "<title>ArtQuiz Portal</title>";
  $col = array ("#845373", "#468966", "#846f4b", "#4a678c", "#644374", "#777777");
  $colb = array("#f2d6e4", "#e0f2e9", "#f7eede", "#e1ebf9", "#ddd6f8", "white");
  $size1 = 5; 
  $size2 = 4; 
  $size3 = 4;
?>
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<style>
.button {
    border: none;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 6px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
<?
  for ($i=0; $i<count($col); $i++) {
    echo ".button$i {";
    echo "background-color: $col[$i];";
    echo "color: white;";
    echo "border: 2px solid $col[$i];";
    echo "}";
    echo ".button$i:hover {";
    echo "background-color: $colb[$i];";
    echo "color: $col[$i];";
    echo "}";
  }
?>
</style>
<center>
<a href=<?=$url_main;?>><img border=0 src=i/header-918-left.png></a><a target=_blank href=<?=$url_arkhipenko;?>><img border=0 src=i/header-918-right.png></a>
<?
  function btn($txt, $link, $ci, $size=3) {
    echo "<form action='$link' style='display: inline'><button type=submit class='button button$ci'><font size=$size face='Trebuchet MS, Helvetica, sans-serif'>$txt</font></button></form>";
  }

  function title($txt, $ci, $size=3) {
    GLOBAL $col, $colb;
    echo "<td bgcolor=$colb[$ci]><font size=$size color=$col[$ci] face='Trebuchet MS, Helvetica, sans-serif'><center><center>$txt";
  }
  
  echo "<p>";
  echo "<table border=0 cellpadding=8 style='border-spacing: 5px 5px;' bordercolor=black>";
  echo "<tr>";
  echo "<td>";
  //$font1 = 'Lucida Sans Unicode, Lucida Grande, sans-serif';
  $font1 = 'Trebuchet MS, Helvetica, sans-serif';
  echo "<td><font size=$size2 face='$font1'><b><center>Quizes";
  echo "<td><font size=$size2 face='$font1'><b><center>Timelines";
  echo "<td><font size=$size2 face='$font1'><b><center>Databases";
  //echo "<td><font size=$size2 face='$font1'><b><center>Other projects";

  $ci = 0;
  echo "<tr>";
  title('Classical<br>music', $ci, $size1);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Guess composer by music', 'cquiz', $ci, $size3);
  echo "<br>";
  btn('Guess composer by score', 'nquiz', $ci, $size3);
  echo "<td valign=middle bgcolor=$colb[$ci]  ><center>";
  btn('Composers timeline', 'cmap', $ci, $size3);
  echo "<br>";
  btn('Music genres timelines', 'classclass', $ci, $size3);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Music', 'cquiz/composers.php', $ci, $size3);
  echo "<br>";
  btn('Scores', 'nquiz/works.php', $ci, $size3);
  $ci = 5;
  echo "<td rowspan=2 valign=middle bgcolor=$colb[$ci]><center>";
  //btn('Chord progressions<br>analyzer', 'ancho', $ci, $size3);
  echo "<br>";
  btn("Music<br>with<br>paintings<br>association", 'compart', $ci, $size3);

  $ci = 1;
  echo "<tr>";
  title('Paintings', $ci, $size1);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Guess artist by painting', 'aquiz', $ci, $size3);
  echo "<td valign=middle bgcolor=$colb[$ci]><center>";
  btn('Artists timelines', 'amap', $ci, $size3);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Paintings', 'aquiz/artists.php', $ci, $size3);
  //echo "<td valign=middle bgcolor=$colb[$ci]><center>";

  $ci = 2;
  echo "<tr>";
  title('Poetry', $ci, $size1);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Guess poet', 'epquiz', $ci, $size3);
  if ($ru) {
    echo "<br>";
    btn('Угадай поэта', 'pquiz', $ci, $size3);
  }
  echo "<td valign=middle bgcolor=$colb[$ci]><center>";
  btn('Poets timeline', 'epmap', $ci, $size3);
  if ($ru) {
    echo "<br>";
    btn('Карта поэтов', 'rpmap', $ci, $size3);
  }
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Poems', 'epquiz/authors.php', $ci, $size3);
  if ($ru) {
    echo "<br>";
    btn('Стихи', 'pquiz/authors.php', $ci, $size3);
  }
  //echo "<td valign=middle bgcolor=$colb[$ci]><center>";

  $ci = 3;
  echo "<tr>";
  title('Literature', $ci, $size1);
  echo "<td bgcolor=$colb[$ci] valign=top><center>";
  if ($ru) {
    btn('Угадай писателя', 'rlit', $ci, $size3);
  }
  echo "<td valign=middle bgcolor=$colb[$ci]><center>";
  if ($ru) {
    btn('Карта писателей', 'rlmap', $ci, $size3);
    echo "<br>";
  }
  btn('Authors timeline', 'rlmap-e', $ci, $size3);
  echo "<td bgcolor=$colb[$ci] valign=top><center>";
  if ($ru) {
    btn('Проза', 'rlit/authors.php', $ci, $size3);
  }
  //echo "<td valign=middle bgcolor=$colb[$ci]><center>";

  $ci = 4;
  echo "<tr>";
  title('Quotes', $ci, $size1);
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Guess quote author', 'equotes', $ci, $size3);
  if ($ru) {
    echo "<br>";
    btn('Угадай автора цитаты', 'rquotes', $ci, $size3);
  }
  echo "<td valign=middle bgcolor=$colb[$ci]><center>";
  echo "<td bgcolor=$colb[$ci]><center>";
  btn('Quotes', 'equotes/authors.php', $ci, $size3);
  if ($ru) {
    echo "<br>";
    btn('Цитаты', 'rquotes/authors.php', $ci, $size3);
  }
  //echo "<td valign=middle bgcolor=$colb[$ci]><center>";

  echo "</table>";
  if ($ru) echo "<a href=?ru=0>Show only english projects</a>";
  else echo "<a href=?ru=1>Показать проекты на русском языке</a>";
  echo "<table width=900>";
  echo "<td width=50%>";
  echo "<br><h2><font face='$font1'>About Artquiz Portal</h2>";
  echo "<p><font face='$font1'>Artquiz Portal is a collection of cultural educational projects: databases of music, paintings and literature; quizes; timelines and more. Quizes have many difficulty levels and can be interesting both for starters and professionals. Quizes are designed to teach and to motivate in developing knowledge of culture.";
  echo "<p><font face='$font1'>Music with paintings association project is aimed at creating, exploring such associations and viewing paintings with music.";
  echo "<p><font face='$font1'>Timelines are clickable: you will be able to see examples for each artist, composet or writer immediately.";
  echo "<br><h2><font face='$font1'>Contact</h2>";
  echo "<p><font face='$font1'>Hello! You can contact Alexey Arkhipenko <a href='http://arkhipenko.weebly.com/contact.html'>here</a>";
  if ($i_am_admin) echo "<p><a href=stats.php>Stats";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<td width=50%>";
  echo "</table>";
  echo "</center>";
  share_link("$url_share", 
    "ArtQuiz Portal",
    "Education and quiz art portal",
    "$url_share/i/artquiz_560.png",
    'facebook,vkontakte,gplus',
    'position: absolute; top: 30px; left: 45%; opacity: 1');
  show_chatovod("artquiz");
?>
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
  secure_variable("t");
  
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
  $size4 = 6;
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
  for ($i=10; $i<10+count($col); $i++) {
    echo ".button$i {";
    echo "background-color: #bbbbbb;";
    echo "color: white;";
    echo "border: 2px solid #bbbbbb;";
    echo "}";
    echo ".button$i:hover {";
    echo "background-color: {$colb[$i-10]};";
    echo "color: {$col[$i-10]};";
    echo "}";
  }
?>
</style>
<center>
<a href=<?=$url_main;?>><img border=0 src=i/header-918-left.png></a><a target=_blank href=<?=$url_arkhipenko;?>><img border=0 src=i/header-918-right.png></a>
<?
  function btn($txt, $link, $ci, $size=3) {
    echo "<button onclick='window.location.href = \"$link\"' type=submit class='button button$ci'><font size=$size face='Trebuchet MS, Helvetica, sans-serif'>$txt</font></button>";
  }

  function title($txt, $ci, $size=3) {
    GLOBAL $col, $colb;
    echo "<td bgcolor=$colb[$ci]><font size=$size color=$col[$ci] face='Trebuchet MS, Helvetica, sans-serif'><center><center>$txt";
  }
  
  //if (!isset($t)) echo "<br><br><br>";
  echo "<table width=920 border=0 cellpadding=10 cellspacing=0>";
  echo "<tr>";
  echo "<td bgcolor=#ffffff align=center>";
  btn('Music', 'index.php?t=1', !isset($t)||$t==1?0:10, $size4);
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  btn('Paintings', '?t=2', !isset($t)||$t==2?1:11, $size4);
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  btn('English texts', '?t=3', !isset($t)||$t==3?3:13, $size4);
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  btn('Русские тексты', '?t=4', !isset($t)||$t==4?3:13, $size4);
  echo "</table>";
  //if (!isset($t)) echo "<br><br><br>";

  echo "<table border=0 cellpadding=8 style='border-spacing: 5px 5px;' bordercolor=black>";
  if (isset($t)) {
    echo "<tr>";
    echo "<td>";
    //$font1 = 'Lucida Sans Unicode, Lucida Grande, sans-serif';
    $font1 = 'Trebuchet MS, Helvetica, sans-serif';
    echo "<td><font color=#aaaaaa size=$size2 face='$font1'><center>Quizes";
    echo "<td><font color=#aaaaaa size=$size2 face='$font1'><center>Timelines";
    echo "<td><font color=#aaaaaa size=$size2 face='$font1'><center>Databases";
    //echo "<td><font size=$size2 face='$font1'><b><center>Other projects";
  }

  if ($t == 1) {
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
    echo "<td valign=middle><center>";
    //btn('Chord progressions<br>analyzer', 'ancho', $ci, $size3);
    echo "<br>";
    btn("Music<br>with<br>paintings<br>association", 'compart', $ci, $size3);
  }
  
  if ($t == 2) {
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
    $ci = 5;
    echo "<td valign=middle><center>";
    //btn('Chord progressions<br>analyzer', 'ancho', $ci, $size3);
    echo "<br>";
    btn("Music<br>with<br>paintings<br>association", 'compart', $ci, $size3);
  }

  if ($t == 3) {
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
  }
  
  echo "</table>";
  //if ($ru) echo "<a href=?ru=0>Show only english projects</a>";
  //else echo "<a href=?ru=1>Показать проекты на русском языке</a>";
  echo "<br><br><br>";
  echo "<table width=450>";
  echo "<td width=100%>";
  echo "<h2><font face='$font1'>About Artquiz Portal</h2>";
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
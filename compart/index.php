<?
  include "qlib.php";
  include "style.php";
  include "ca-menu.php";  
  
?>
<p><b>Compart</b> project is aimed at exploring associations between composers and artists (painters).
<p>Please go to <a href=ca-input.php>Associate</a> section to select paintings that best suit the music that you hear.
<p>Explore other menu items to see statistics of associations made by you and other visitors.
<p>
<iframe src="https://player.vimeo.com/video/170440088" width="640" height="395" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/170440088">Paintings with classical music</a> from <a href="https://vimeo.com/user4406030">Alexey</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
<p>
I used a big database of classical and contemporary music (236 composers. 832 hours of music) and also database of about 400 painters (25 000 paintings). So, I created a web page, which plays music and shows multiple paintings to user. User selects painting (by clicking on it), which best represents music, while it is playing. Then next track is played and new paintings are displayed for selecting... Here is this page, where you can select appropriate painting for each music track. If you are not sure which painting to select, just reload the page and do not make selection. Quality of the database is maintained by your selections: <a href=ca-input.php>Test</a>
<p>As soon as you input several associations, click MENU or go to this link to see slideshow created from previouse associations:
<a href=ca-slide.php>Associations</a>
<p>Also, here is some statistics of associations. I am planning to add more statistics when more associations are created by site visitors:
<a href=ca-comp.php>Statistics</a>
<p>On the painting selection page top painters are contemporaries of the composer. As you go down, you will see older painters on the left and new painters on the right. I show the distribution of painters on the picture below:
<p><img src=i/compart_tut1.png>
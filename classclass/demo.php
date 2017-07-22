<? include "../url.php"; ?>
<? include "../analytics.php"; ?>
<HEADER><LINK href='css/main.css' rel='stylesheet' type='text/css'>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter16904035 = new Ya.Metrika({id:16904035, enableAll: true, webvisor:true});
        } catch(e) { }
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/16904035" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15267987-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<title>Classclass - classical music classification: Demo</title>
<table border=0>
<tr>
<td>
<a border=0 href=frame1.php><img border=0 align=middle src=i/Classclass200.png></a><br> <b>Classical music classification</b>
</td>
<td width=500>
<font face=arial size=4>
<a href=frame1.php>Timeline</a> |
<a href=graph.php>Graph</a> |
<a href=gtree.php>Genre tree</a> |
<a href=contact.php>Contact</a>
</td>
<td>
<a border=0 href=<?=$url_arkhipenko;?>><img border=0 align=middle src=i/amp200.gif></a></td>
</table>
<hr>
<h1>Demo library information</h1>
Due to the limitation of online hosting special limited demo version of music library is published on this site:
<ul>
<li>Not all tracks are presented as examples for genres (up to 2 times more examples in big library)
<li>Quality of examples is limited to 128 kbit/s MP3 (up to 320 kbit/s for some examples in big library)
<li>Length of examples is limited to 1-3 minutes (full-length examples in big library)
</ul>
You can download full version of library at rutracker.org (search by ClassClass).


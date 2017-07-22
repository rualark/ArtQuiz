<?
  if (!isset($mysql_link)) require_once "mysql.php";
  insert_analytics_hit('hits', $_SERVER[HTTP_HOST], $_SERVER[SCRIPT_NAME], $_SERVER[QUERY_STRING]);
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56489282-1', 'auto');
  ga('send', 'pageview');

  function httpGetAsync(theUrl, callback) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            callback(xmlHttp.responseText);
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
  }
  
<?
  echo "httpGetAsync('$url_main/hit.php?hitserver=$_SERVER[HTTP_HOST]&hitscript=$_SERVER[SCRIPT_NAME]&hitquery=$_SERVER[QUERY_STRING]');";
?>
</script>

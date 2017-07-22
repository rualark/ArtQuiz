<?
  include "../url.php";
?>
<meta property='og:url' content='<?=$url_main?>/nquiz' />
<meta property='og:image' content='<?=$url_main?>/nquiz/i/nquiz_560.png' />
<meta property='og:title' content='Guess score' />
<meta charset=utf-8 />
<META HTTP-EQUIV="REFRESH" CONTENT="0;nquiz.php">
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<script language="JavaScript">
setTimeout("refresh_location()", 500); // 1000 ms * 60 = 60 seconds

function refresh_location ()
{
location = "nquiz.php";
}
</script>
</head>
<body>
<a href=nquiz.php>Site has moved. Please go to this link.</a>

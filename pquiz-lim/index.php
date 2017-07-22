<?
  include "lib.php";
?>
<meta property='og:url' content='<? echo "$url_share/pquiz"; ?>' />
<meta property='og:image' content='<? echo "$url_share/pquiz/i/lquiz.png"; ?>' />
<meta property='og:title' content='Угадай поэта' />
<meta property='og:description' content='Попробуйте угадать 10 поэтов подряд!' />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<meta charset=utf-8 />
<META HTTP-EQUIV="REFRESH" CONTENT="0;pquiz.php">
<script language="JavaScript">
setTimeout("refresh_location()", 500); // 1000 ms * 60 = 60 seconds

function refresh_location ()
{
location = "pquiz.php";
}
</script>
</head>
<body>
<a href=pquiz.php>Site has moved. Please go to this link.</a>

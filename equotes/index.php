<?
  include "lib.php";
?>
<meta property='og:url' content='<? echo "$url_share/equotes"; ?>' />
<meta property='og:image' content='<? echo "$url_share/equotes/i/equotes.png"; ?>' />
<meta property='og:title' content='Guess quote' />
<meta property='og:description' content='Guess author of famous quotes' />
<link rel="shortcut icon" type="image/x-icon" href="i/favicon.ico">
<meta charset=utf-8 />
<META HTTP-EQUIV="REFRESH" CONTENT="0;levels.php">
<script language="JavaScript">
setTimeout("refresh_location()", 500); // 1000 ms * 60 = 60 seconds

function refresh_location ()
{
location = "levels.php";
}
</script>
</head>
<body>
<a href=levels.php>Site has moved. Please go to this link.</a>
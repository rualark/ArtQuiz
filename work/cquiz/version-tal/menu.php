<meta charset=utf-8 />
<? include "analytics.php"; ?>
<title>CQuiz - Guess the composer</title>
<center>
<SCRIPT TYPE='text/javascript' SRC='overlibmws/overlibmws.js'></SCRIPT>
<DIV ID='overDiv' STYLE='position: absolute; visibility: hidden; z-index: 1000;'></DIV>
<center><table border=0>
<tr>
<td>
<font face=arial size=5>
<a href=../><img align=absmiddle style="vertical-align:middle" border=0 src=images/amp200.gif></a>
</td>
<td>
<p align=right>
<form align=right action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="rualark@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Rualark">
<input type="hidden" name="item_number" value="Ancho">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
<? if (isset($uname)) echo "Logged in as $uname"; ?>
</form>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<? if ($no_menu == 0) { ?>
<font face=arial size=4>
<a href=quiz.php>Quiz</a> |
<a href=prefs.php>Preferences</a> |
<a href=stats.php>Stats</a> |
<a href=rating.php>Ratings</a> |
<a href=logs.php>Activity</a> |
<? } ?>
<a href=help.php>Help</a> |
<a href=contact.php>Contact</a>
</font>
</td>
</tr>
<tr>
<td style="max-width:850px;" colspan=3>
<hr>
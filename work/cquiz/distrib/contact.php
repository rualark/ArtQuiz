<?
  include "qlib.php";
  include "auth.php";
  include "style.php";
  include "menu.php";
  
  echo "Hello! You can contact me by email: rualark at gmail.com";
?>
<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<? // We need a PHP developer! ?>
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="rualark@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Rualark">
<input type="hidden" name="item_number" value="CQuiz">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

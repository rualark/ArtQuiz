<pre>
<?php

include('Mail.php');

$recipients = array( 'rualark@gmail.com' ); # Can be one or more emails

$headers = array (
    'From' => 'cquiz@artquiz.sourceforge.net',
    'To' => join(', ', $recipients),
    'Subject' => 'Testing email from project web',
);

$body = "This was sent via php from project web!\n";

$mail_object =& Mail::factory('smtp',
    array(
	//'port' => 465,
	//'SMTPSecure' => 'ssl',
	//'SMTPAuth' => true,
	//'IDHost' => 'artquiz.sourceforge.net',
        'host' => 'prwebmail',
        'auth' => true,
        'username' => 'ArtQuiz',
        'password' => 'Congress1', # As set on your project's config page
        'debug' => true, # uncomment to enable debugging
    ));

$mail_object->send($recipients, $headers, $body);
?>
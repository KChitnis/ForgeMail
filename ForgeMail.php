<?php
$to = 'somebody@something.com';
$subject = 'the subject';
$message = 'message';
$headers = 'From: webmaster@something.com' "\r\n" . 'Reply-To: webmaster@something.com . "\r\n" . 'X-Mailer: PHP/' . phpversion();
for ($i=1;$i<=1000;$i++)
{
mail($to, $subject, $message, $headers);
}
?>

<?php

$to = '25562@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
echo $message;
$headers = 'From: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Your E-Mail has been send. Thank you!';

?>

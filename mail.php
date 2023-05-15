<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$message = $_POST['message'];

$email_from = 'info.riasmsoft@gmail.com';
//$Bcc = ' sandeep2siripurapu@gmail.com';
$email_subject = "Risamsoft Contact Form";
$email_body = "Name: $name.\n".
"User Email: $email.\n".
"Phone Number: $phone.\n".
"Position: $position.\n".
"Message: $message.\n";

$to = "info.riasmsoft@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Bcc: $Bcc \r\n";

$headers .= "Reply To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:success.html");

?>

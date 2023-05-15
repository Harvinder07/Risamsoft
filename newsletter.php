<?php

$message = $_POST['message'];

$email_from = 'info.riasmsoft@gmail.com';
//$Bcc = ' sandeep2siripurapu@gmail.com';
$email_subject = "Risamsoft Newsletter";
$email_body = "User Email ID: $newsletter.\n";

$to = "info.riasmsoft@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Bcc: $Bcc \r\n";

$headers .= "Reply To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:success.html");

?>

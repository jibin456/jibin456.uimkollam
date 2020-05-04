<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$email_from = 'jibijohn456@gmail.com';

$email_subject = "New Contact Info";

$email_body = "user name : $name.\n".
               "user email : $email.\n".
               "user subject : $subject.\n".
               "user message : $message.\n";

$to = "jibinjohnson456@gmail.com";
$headers = "from : $email_from \r\n";
$headers = "reply-to: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");

?>

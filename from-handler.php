<?php
$name_email = $_POST['name'];
$visitor_email = $_POST['email'];
$orders_email = $_POST['orders'];
$message_email = $_POST['message'];

$email_from = 'file:///C:/Users/Dories/Desktop/Daniel%20HTML/contact.html?.com';

$email_order = 'New Orders Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Order: $subject.\n".
                "User Message: $message.\n";

$to = 'cafeecobitre@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");







?>
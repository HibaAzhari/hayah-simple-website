<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$enquiry = $_POST['enquiry'];

$email_from = 'info@hayah-oc.com';

$email_subject = 'New Enquiry'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Enquiry: $enquiry.\n";

$to = 'azhari@hayah-oc.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
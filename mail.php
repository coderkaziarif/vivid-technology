<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@vividtechnologybd.com';
$email_subject = 'New Mail';
$email_body = 'User Name: $name.\n',
                "User Email: $visitor_email.\n",
                "Subject: $subject.\n",
                "User Message: $message.\n";

$to = 'vividtechnologybd@gmail.com';

$headers = "From : $email_from \r\n";

$headers = "Replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

// redirect
header ("location: thankyou.html");
?>
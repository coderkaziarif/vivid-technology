<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailTo = "info@vividtechnologybd.com"
    $headers = "From: ".$visitor_email
    $text = "You have received an e-mail from ".$name.".\n\n".$message;

    // Send email
    mail($emailTo, $subject, $text, $headers);

    // redirect
    header("location:thankyou.html");
}



// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

// $email_from = 'info@vividtechnologybd.com';
// $email_subject = 'New Mail';
// $email_body = 'User Name: $name.\n',
//                 "User Email: $visitor_email.\n",
//                 "Subject: $subject.\n",
//                 "User Message: $message.\n";

// $to = 'vividtechnologybd@gmail.com';

// $headers = "From : $email_from \r\n";

// $headers = "Replay-to: $visitor_email \r\n";

// mail($to,$email_subject,$email_body,$headers);


?>
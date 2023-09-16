<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];

$email_from = 'www.test site.com';

$email_subject = 'new inquiry'

$email_body = "User Name: $name.\n". 
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n". 
              "User Messege: $messege.\n";

$to = 'johnnischecampang@gmail.com';

$headers = "From: $email_from \r\n" ;
                    
$headers .= "reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: Contact Us.html")

?>

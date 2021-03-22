<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message';
    
    $email_from = 'aesealuka@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Username: $name.\n". 
                    "User Email: $visitor_email.\n". 
                        "User Message: $message.\n";

    $to = "Anthony.Esealuka@uwdc.org";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>
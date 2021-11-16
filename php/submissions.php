<?php
    if(isset($_POST['name']) && ($_POST['email']) != Null){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $visitor_email = $_POST['email'];
            $subject = $_POST['subject'];
            $meassage = $_POST['meassage'];

            $email_from = '127.0.0.1:5500';
            $email_subject = 'woo! New message';

            $email_body = "User name: $name.\n".
                          "User email: $visitor_email.\n".
                          "User subject: $subject.\n".
                          "User messgae: $message.\n";

            $to = "rushilkoundal1611@gmail.com";
            
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-to: $visitor_email \r\n";
            mail($to,$email_subject,$email_body,$headers);
            
            header("Location: index.html");
        }
    }    
?>

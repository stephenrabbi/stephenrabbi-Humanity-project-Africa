<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];  

    $email_from = 'Humanity project Africa';
    $email_subject = 'New Message HPA Contact';    
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";
     $to = "info@humanityprojectafrica.org";
     $headers = "From: $email_from \r\n"; 
     $headers . = "Reply-To: $email \r\n";
    
     mail($to,$email_subject,$email_body,headers);

     header("location: success.html");
?>
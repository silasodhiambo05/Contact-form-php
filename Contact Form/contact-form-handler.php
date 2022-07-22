<?php
     
     $name=$_POST['name'];
     $visitor-email=$_POST['email'];
     $message=$_POST['message'];

     $email_from="silasodhiambo05@gmail.com";
     $email_subject="New Email Address";
     $email_body="User name:$name\n".
                 "User Email:$visitor-email\n".
                 "Message:$message\n";

                 $to="silasodhiambo05@gmail.com";
                 $headers="From: $email_from \r\n";

                 $headers .="Reply-To: $visitor-email \r\n";
                 mail($to, $email_body,$email_subject, $headers);
                 header(Location:index.html);

?>
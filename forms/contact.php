<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );
   $client = $_POST['email'];
   $clientName = $_POST['name'];
   $text = $_POST['message'];
   $from = "noreply@de-finance.in";
   $to = "ambrosiabates@gmail.com";
   $subject = $_POST['subject'];
   $message = "from:".$client."\n"."name:".$clientName."\n"."Message:".$text;
  // The content-type header must be set when sending HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   if(mail($to,$subject,$message, $headers)) {
      echo '<script>alert("Message has been Sent.");</script>';
      echo '<script>document.getElementById("form").reset();</script>';
    } else {
      echo "Message was not sent.";
   } 
   
?>
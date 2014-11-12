<?php

$email_to = "alecutheman@gmail.com";
$email_subject = "Contact email";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
 
    }
	
$email_message = "";
$email_message .= "Name: ".clean_string($name)."\r\n";
$email_message .= "Email: ".clean_string($email)."\r\n";
$email_message .= "Message: ".clean_string($message)."\r\n";

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();

if (mail($email_to, $email_subject, $email_message, $headers) == TRUE)
echo "Thank you for contacting us. We will be in touch with you very soon.";
else echo "Contact failed. Please try again later.";  
 
?>


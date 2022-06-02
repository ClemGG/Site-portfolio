<?php

$name = $_POST['name'];
$email_visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'; //L'adresse mail du site. C'est lui qui va nous envoyer le formulaire
$email_subject = 'New Form Submission';
$email_body = "User name: $name.\n".
             "Email: $email_visitor.\n".
             "Subject: $subject.\n".
             "Message: $message.\n";


$to = 'clement.guichard@e-artsup.net'; //L'adresse sur laquelle on va recevoir le contenu du formulaire
$headers = "From: $$email_from \r\n";
$headers .= "Reply to: $$email_visitor \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");


?>
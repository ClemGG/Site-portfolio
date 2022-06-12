<?php
header("Content-Type: text/html;charset=UTF-8");

$name = $_POST['name'];
$email_visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Arrête les pourriels
if ($_POST['description'] != "") { die(); }
if ( ! isset($_POST['description']) ) { die(); }

$email_from = 'info@clementguichard.com'; //L'adresse mail du site. C'est lui qui va nous envoyer le formulaire
$email_subject = 'Contact depuis mon site portfolio';
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
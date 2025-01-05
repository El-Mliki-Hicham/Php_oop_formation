<?php
require "./NotificationController.php";
require "./EmailNotification.php";
require "./SMSNotification.php";


// Envoi d'un email
$emailNotification = new NotificationController(new EmailNotification());
$emailNotification->sendNotification("Bienvenue sur notre application !");

// Envoi d'un SMS
$smsNotification = new NotificationController(new SMSNotification());
$smsNotification->sendNotification("Votre code est 1234.");

?>
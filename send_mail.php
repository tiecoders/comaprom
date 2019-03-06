<?php
/**
 * Created by TieCoders.
 * Date: 06/03/2019
 * Time: 16:25
 */

$to = 'ccontact@comaprom.co.ma';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if ((empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) && isset($_POST['submited'])) {
    $err = "Tout les champs sont requis.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err = "Veuillez indiquer une adresse E-mail valide.";
}

$headers = 'From: website@comaprom.co.ma' . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
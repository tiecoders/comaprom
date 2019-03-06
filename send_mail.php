<?php
/**
 * Created by TieCoders.
 * Date: 06/03/2019
 * Time: 16:25
 */

$to = 'contact@comaprom.co.ma';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if (isset($_POST['submited'])) {
    if ((empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message))) {
        $err = "Tout les champs sont requis.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Veuillez indiquer une adresse E-mail valide.";
    }

    if ($err) return;

    $success = "Message envoyée avec succès.";

    $headers = 'From: website@comaprom.co.ma' . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['mesg'];
    
    // Adresse e-mail de réception
    $to = 'votreadresse@mail.com';

    // Sujet de l'e-mail
    $subject = 'Nouveau message de ' . $name;

    // Corps de l'e-mail
    $body = "Nom et prénom: " . $name . "\n";
    $body .= "Adresse e-mail: " . $email . "\n";
    $body .= "Message: " . $message;

    // Entêtes de l'e-mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    echo "Une erreur s'est produite.";
}
?>

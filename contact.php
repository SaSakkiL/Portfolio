<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sabrielgares7@gmail.com"; // Remplace par ton adresse
    $subject = "Nouveau message de ton portfolio";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "Nom : $name\nEmail : $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>

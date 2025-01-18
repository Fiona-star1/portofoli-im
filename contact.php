<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Kontrollo që të gjitha fushat janë të mbushura
    if (empty($name) || empty($email) || empty($message)) {
        echo "Të gjitha fushat janë të detyrueshme!";
        exit;
    }

    // Emaili i destinacionit
    $to = "email@example.com"; // Ndryshoni me adresën tuaj të email-it
    $subject = "Mesazh nga Portofoli Personal";

    // Mesazhi i email-it
    $body = "Emri: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mesazhi: $message\n";

    // Headers
    $headers = "From: $email";

    // Dërgo email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesazhi juaj u dërgua me sukses!";
    } else {
        echo "Ndodhi një gabim gjatë dërgimit të mesazhit.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ota vastaan lomakkeen tiedot ja suodata ne
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Tarkistetaan, että sähköpostiosoite on kelvollinen
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Virhe: Virheellinen sähköpostiosoite.");
    }

    // Määritellään sähköpostin tiedot
    $to = "laura.makila81@gmail.com"; // Vaihda omaan sähköpostiisi
    $subject = "Uusi yhteydenotto - " . $name;
    $body = "Nimi: $name\n";
    $body .= "Sähköposti: $email\n\n";
    $body .= "Viesti:\n$message\n";

    // Paremmat otsikkotiedot
    $headers = "From: no-reply@oma-domainisi.com\r\n"; 
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Yritetään lähettää sähköposti
    if (mail($to, $subject, $body, $headers)) {
        echo "Viesti lähetetty onnistuneesti!";
    } else {
        echo "Viestin lähettäminen epäonnistui. Tarkista palvelimen asetukset.";
    }
} else {
    echo "Virheellinen pyyntö.";
}
?>
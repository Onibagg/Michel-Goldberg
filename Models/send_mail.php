<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $destinataire = "michel.goldberg@me.com";

    $sujet = "Nouveau message de $prenom $nom";

    $corps_message = "Nom: $nom\n";
    $corps_message .= "Prénom: $prenom\n";
    $corps_message .= "Téléphone: $telephone\n";
    $corps_message .= "Email: $email\n\n";
    $corps_message .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    //a modifier en fonction de la conf du serv
    if (mail($destinataire, $sujet, $corps_message, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
} else {
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>

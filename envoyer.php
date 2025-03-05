<?php
if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $destinataire = 'monemail@example.com'; // Votre email
  $sujet = 'Message de contact';
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  mail($destinataire, $sujet, $message, $headers);

  echo "Message envoyé avec succès !";
} else {
  echo "Erreur : Veuillez remplir tous les champs.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $entreprise = $_POST['entreprise'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $type_entreprise = $_POST['type_entreprise'];
    $type_evenement = $_POST['type_evenement'];
    $siren = $_POST['siren'];
    $message = $_POST['message'];

    // Exemple de stockage (tu peux connecter une base de données ici)
    echo "<h2 style='text-align:center; color: green;'>Merci $prenom $nom, votre message a été envoyé.</h2>";
    echo "<p style='text-align:center;'>Entreprise : $entreprise | Email : $email | Type : $type_entreprise | SIREN : $siren</p>";
}
?>

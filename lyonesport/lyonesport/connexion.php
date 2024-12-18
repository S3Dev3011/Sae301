<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simuler un compte valide pour la démonstration
    $valid_email = "admin@lyon-esport.fr";
    $valid_password = "1234";

    if ($email === $valid_email && $password === $valid_password) {
        // Connexion réussie
        echo "<h2 style='color: green; text-align: center;'>Connexion réussie ! Bienvenue.</h2>";
    } else {
        // Erreur de connexion
        echo "<h2 style='color: red; text-align: center;'>Erreur : Identifiants incorrects.</h2>";
    }
}
?>

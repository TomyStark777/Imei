<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    // Connectez-vous à votre base de données (remplacez par vos informations de connexion réelles)
    $dbHost = "localhost";
    $dbUser = "votre_utilisateur_db";
    $dbPass = "votre_mot_de_passe_db";
    $dbName = "votre_nom_db";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Stockez l'adresse e-mail dans la base de données
    $sql = "INSERT INTO user_emails (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Adresse e-mail enregistrée avec succès !";
    } else {
        echo "Erreur lors de l'enregistrement de l'adresse e-mail : " . $conn->error;
    }

    $conn->close();
}
?>

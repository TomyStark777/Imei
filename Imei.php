<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $firstname = $_POST["firstname"];
    $password = $_POST["password"];
    // Connectez-vous à votre base de données (remplacez par vos informations de connexion réelles)
    $dbHost = "localhost";
    $dbUser = "votre_utilisateur_db";
    $dbPass = "votre_mot_de_passe_db";
    $dbName = "votre_nom_db";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Stockez les données dans la base de données
    $sql = "INSERT INTO user_accounts (name, firstname, password) VALUES ('$name', '$firstname', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Compte créé avec succès !";
    } else {
        echo "Erreur lors de la création du compte : " . $conn->error;
    }

    $conn->close();
}
?>

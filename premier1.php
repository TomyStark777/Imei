<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les valeurs des champs
    $email = $_POST["@gmail"];
    $motDePasse = $_POST["password"];

    // Validez les données (vous pouvez ajouter des règles de validation ici)

    // Connexion à la base de données (remplacez les informations par les vôtres)
    $serveur = "localhost";
    $utilisateur = "votre_nom_d_utilisateur";
    $motDePasseBDD = "votre_mot_de_passe";
    $baseDeDonnees = "votre_base_de_donnees";

    $connexion = new mysqli($serveur, $utilisateur, $motDePasseBDD, $baseDeDonnees);

    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Requête SQL pour vérifier les informations d'identification
    $requete = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$motDePasse'";
    $resultat = $connexion->query($requete);

    if ($resultat->num_rows > 0) {
        // L'utilisateur est authentifié
        echo "Connexion réussie !";
    } else {
        // L'utilisateur n'est pas authentifié
        echo "Identifiants incorrects. Veuillez réessayer.";
    }

    // Fermez la connexion à la base de données
    $connexion->close();
}
?>

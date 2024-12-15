# Imei-service

# Projet de Gestion des IMEI
## Description

Le site web de gestion des IMEI permet aux utilisateurs d'enregistrer, consulter et supprimer des numéros IMEI. Ce système est utile pour suivre les appareils mobiles et prévenir les vols.

## Technologies Utilisées

- PHP
- MySQL
- HTML/CSS
- JavaScript

## Installation

Pour installer et exécuter ce projet en local, suivez ces étapes :

1. Clonez le dépôt :
    git clone https://github.com/TomyStark777/imei.git
   
3. Accédez au répertoire du projet :

    cd imei

4. Configurez la base de données :
    - Créez une base de données MySQL.
    - Importez le fichier `database.sql` dans votre base de données.

5. Mettez à jour les informations de connexion à la base de données dans le fichier `config.php` :
    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'votre_utilisateur');
    define('DB_PASS', 'votre_mot_de_passe');
    define('DB_NAME', 'votre_base_de_donnees');
    ?>

6. Lancez votre serveur web local (par exemple XAMPP, WAMP) et ouvrez le navigateur à l'adresse suivante :
   
    http://localhost/imei
   

## Utilisation

1. Enregistrez un IMEI :
    - Accédez à la page d'enregistrement des IMEI et saisissez les informations nécessaires.
    
##Fonctionnalités à venir

2. Consultez les IMEI enregistrés :
3. Supprimez un IMEI :
    




<?php

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=;charset=utf8';
$username = 'nom_utilisateur';
$password = 'mot_de_passe';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $bdd = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

// Création de la table "produits"
$bdd->exec("CREATE TABLE produits (
                    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nom VARCHAR(255) NOT NULL,
                    prix DECIMAL(10,2) NOT NULL,
                    image VARCHAR(255) NOT NULL)");

// Insertion de données dans la table "produits"
$bdd->exec("INSERT INTO produits (nom, prix, image)
                    VALUES ('T-shirt', 19.99, 'tshirt.jpg'),
                           ('Pantalon', 39.99, 'pantalon.jpg'),
                           ('Chaussures', 49.99, 'chaussures.jpg')");

// Récupération des données de la table "produits"
$req = $bdd->query("SELECT * FROM produits");
while ($donnees = $req->fetch()) {
    echo $donnees['nom'] . ' coûte ' . $donnees['prix'] . ' euros.<br>';
}

// Fermeture de la connexion à la base de données
$req->closeCursor();

$bdd = null

?>
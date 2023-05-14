<?php
// Vérifier si le formulaire d'inscription est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête d'insertion des données dans la table "utilisateurs"
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

    if ($conn->query($sql) === TRUE) {
        // Redirection vers la page d'accueil avec le nom de l'utilisateur
        header("Location: page_acc.php?nom=$nom");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="inscription.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br>

        <input type="submit" name="submit" value="Inscription">
    </form>
</body>
</html>
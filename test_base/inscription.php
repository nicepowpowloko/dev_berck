
<?php
// je vérifie si mon formulaire d'inscription a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscription'])) {
    // je récupére les valeurs  dans le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // je vérifie les donnés inscri pour voir si tout est en accord

    // j'effectue la connexion de la base de donnée

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "base_test";

    // je me connecte a ma base de données sinon message d'erreur

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // ici je prépare la requéte pour pouvoir inserer mes données

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nom, $prenom, $email, $mot_de_passe);
    $stmt->execute();

    // je ferme la connexion

    $stmt->close();
    $conn->close();

    // icic apres avoir je redirige l'utilisateur vers la page connexion.php
    
    header("Location: connexion.php");
    exit();
}





?>






<!DOCTYPE html>
<html>
<head>
    <title>Page d'inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br>

        <input type="submit" name="inscription" value="Inscription">
    </form>
</body>
</html>
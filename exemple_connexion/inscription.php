<?php

require_once 'config.php';

// je verifie le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // On insére les infos
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}


$conn->close();
?>

<h2>Inscription</h2>
<form action="inscription.php" method="post">
    <label>Nom :</label>
    <input type="text" name="nom" required><br><br>
    <label>Email :</label>
    <input type="email" name="email" required><br><br>
    <label>Mot de passe :</label>
    <input type="password" name="mot_de_passe" required><br><br>
    <input type="submit" value="S'inscrire">
</form>

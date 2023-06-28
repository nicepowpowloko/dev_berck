<?php

require_once 'config.php';

// Vérifie le formulaire 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifie info d'identification utilisateur
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($mot_de_passe, $user['mot_de_passe'])) {
            // Débuter  session et enregistrer les informations de l'utili es  connecté
            session_start();
            $_SESSION['utilisateur'] = $user;

            echo "Connexion réussie !";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }
}


$conn->close();
?>

<h2>Connexion</h2>
<form action="connexion.php" method="post">
    <label>Email :</label>
    <input type="email" name="email" required><br><br>
    <label>Mot de passe :</label>
    <input type="password" name="mot_de_passe" required><br><br>
    <input type="submit" value="Se connecter">
</form>

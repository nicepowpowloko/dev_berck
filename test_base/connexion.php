<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
//if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
    // Rediriger l'utilisateur vers une page sécurisée
   // header("Location: page_securisee.php");
   // exit();
//}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connexion'])) {

    // je recupere les données du formulaires

    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // j'effectue je me connecte et je fait  la verif et la connexion a la base de donnée

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "base_test";

   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // je prépare la requéte pour le preparer à récupéré les informations 



    
    $sql = "SELECT prenom, nom FROM utilisateurs WHERE email = ? AND mot_de_passe = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $mot_de_passe);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // dés que mes Identifiants sont valides
        $row = $result->fetch_assoc();
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['nom'] = $row['nom'];

        // Je Redirige l'utilisateur vers une page sécurisée
        
        header("Location: page_securisee.php");
        exit();
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $message_erreur = "Identifiants invalides. Veuillez réessayer.";
    }

    // Fermer la connexion à la base de données
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php if (isset($message_erreur)) : ?>
        <p><?php echo $message_erreur; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required><br>

        <input type="submit" name="connexion" value="Connexion">
    </form>
</body>
</html>
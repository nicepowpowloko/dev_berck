<?php
// Vérifier si le nom est passé en paramètre d'URL
if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
} else {
    // Redirection vers la page d'inscription si le nom n'est pas disponible
    header("Location: inscription.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $nom; ?> !</h1>
    <p>Ceci est la page d'accueil.</p>

    <a href="./inscription.php">Déconnexion</a>

</body>
</html>
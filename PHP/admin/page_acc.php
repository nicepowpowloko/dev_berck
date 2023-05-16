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

    

    <?php
session_start(); // Démarrer la session

// Vérifier si le bouton de déconnexion est cliqué
if (isset($_POST['deco'])) {
    // Supprimer toutes les variables de session
    session_unset();

    // Détruire la session
    session_destroy();

    // Rediriger vers la page de connexion
    header("Location: inscription.php");
    exit();
}
?>

<!-- Formulaire contenant le bouton de déconnexion -->
<form method="post" action="">
    <button type="submit" name="deco">Déconnexion</button>
</form>



<!--   Ce code commence par démarrer la session en utilisant session_start(). Ensuite, il vérifie si le bouton de déconnexion est cliqué en vérifiant si la variable $_POST['deoco'] est définie. Si le bouton de déconnexion est cliqué, toutes les variables de session sont supprimées avec session_unset() et la session est détruite avec session_destroy(). Enfin, je suis redirigé vers la page de connexion avec header("Location: inscription.php").

Le bouton de déconnexion est inclus dans un formulaire qui est soumis lorsque le bouton est cliqué. Le formulaire utilise la méthode POST pour envoyer les données et l'action est la même page (le code de déconnexion est dans la même page).

N'oubliez pas d'adapter le code en fonction de votre système de connexion et de vos noms de fichiers.    -->


</body>
</html>
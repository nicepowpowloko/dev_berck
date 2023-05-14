
<?php
require"./adminbase.php";

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Vérification si l'utilisateur existe déjà
    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0) {
        echo "Nom d'utilisateur déjà utilisé. Veuillez en choisir un autre.";
    } else {
        // Insertion des données dans la base de données
        $insertQuery = "INSERT INTO users (username, password, email, created_at) VALUES ('$username', '$password', '$email', NOW())";
        if ($conn->query($insertQuery) === TRUE) {
            header("location: succes.php");
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

<?php
// Fermeture de la connexion à la base de données
$conn->close();
?>
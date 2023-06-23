<!DOCTYPE html>
<html>
<head>
    <title>Exemple de page avec base de données</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    

// Je commençe par établir une connexion à la base de données avec le nom d'utilisateur, le mot de passe et le nom de la base de données. Ensuite, je vérifie si la connexion a réussi. Si la connexion échoue, je mets un message d'erreur.

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }
    

// Ensuite, je créer une table appelée "utilisateurs" si elle n'existe pas déjà. elle contient trois colonnes : "id" (une clé primaire auto-incrément), "nom" et "email". Si la création échoue,j 'affiche un message d'erreur

    $sql = "CREATE TABLE IF NOT EXISTS utilisateurs (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL
            )";
    if ($conn->query($sql) === FALSE) {
        echo "Erreur lors de la création de la table : " . $conn->error;
    }
    
   



    // Ensuite, je fais requête SELECT pour récupérer les données de la table "utilisateurs". Si des résultats sont trouvés, il vas m'afficher les données dans un tableau HTML. Sinon, il m'envoi un message indiquant qu'aucun résultat n'a été trouvé est affiché.


    $sql = "SELECT id, nom, email FROM utilisateurs";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nom"] . "</td>
                    <td>" . $row["email"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé dans la table.";
    }
    
  // je referme la connexion

  
    $conn->close();
    ?>

</body>
</html>

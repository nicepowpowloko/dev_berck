<?php

require_once 'config.php';

// Vérifie L 'ID
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // je selectionne le produit à partir de la base 
    $sql = "SELECT * FROM produits WHERE id = $productId";
    $result = $conn->query($sql);

    // je verifie s'il y a un résultat
    if ($result->num_rows > 0) {
        // je récupére
        $product = $result->fetch_assoc();
?>
        <h2>Modifier le produit</h2>
        <form action="traiter_modification.php" method="post">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <label>Nom :</label>
            <input type="text" name="nom" value="<?php echo $product['nom']; ?>"><br><br>
            <label>Prix :</label>
            <input type="text" name="prix" value="<?php echo $product['prix']; ?>"><br><br>
            <label>Quantité :</label>
            <input type="text" name="quantite" value="<?php echo $product['quantite']; ?>"><br><br>
            <input type="submit" value="Modifier">
        </form>
<?php
    } else {
        echo "Produit non trouvé.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>

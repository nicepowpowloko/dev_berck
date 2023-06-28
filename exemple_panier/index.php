<?php

require_once 'config.php';


$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

// verif




if ($result->num_rows > 0) {

    // icic j'affiche les prods.

    while ($row = $result->fetch_assoc()) {
        echo "ID : " . $row['id'] . "<br>";
        echo "Nom : " . $row['nom'] . "<br>";
      //  var_dump($row); // utile pour les erreurs
        echo "Prix : " . $row['prix'] . "<br>";
        echo "<a href='ajouter_au_panier.php?id=" . $row['id'] . "'>Ajouter au panier</a><br><br>";
    }
} else {
    echo "Aucun produit trouvé.";
}


$conn->close();
?>

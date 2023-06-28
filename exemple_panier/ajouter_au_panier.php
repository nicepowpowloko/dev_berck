<?php
require_once 'config.php';
session_start();

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $sql = "SELECT * FROM produits WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $_SESSION['panier'][] = $product;
        echo "Le produit a été ajouté au panier avec succès.";
    } else {
        echo "Produit non trouvé.";
    }
}

$conn->close();
?>


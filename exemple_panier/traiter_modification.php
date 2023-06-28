<?php

require_once 'config.php';

// Vérifie le formulaire 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $productId = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    // je mets à jour les informations du produit dans la base de données
    $sql = "UPDATE produits SET nom = '$nom', prix = $prix, quantite = $quantite WHERE id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Le produit a été modifié avec succès.";
    } else {
        echo "Erreur lors de la modification du produit : " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>

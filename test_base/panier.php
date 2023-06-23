<?php
session_start();

// Ajouter un produit au panier
function ajouterProduitAuPanier($idProduit, $nomProduit, $prixProduit) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['panier'][$idProduit])) {
        // Le produit existe déjà dans le panier, augmenter la quantité
        $_SESSION['panier'][$idProduit]['quantite']++;
    } else {
        // Le produit n'existe pas dans le panier, l'ajouter avec une quantité de 1
        $_SESSION['panier'][$idProduit] = array(
            'nom' => $nomProduit,
            'prix' => $prixProduit,
            'quantite' => 1
        );
    }
}

// Supprimer un produit du panier
function supprimerProduitDuPanier($idProduit) {
    if (isset($_SESSION['panier'][$idProduit])) {
        unset($_SESSION['panier'][$idProduit]);
    }
}

// Vider le panier
function viderPanier() {
    unset($_SESSION['panier']);
}

// Afficher le contenu du panier
function afficherPanier() {
    if (!isset($_SESSION['panier']) || count($_SESSION['panier']) == 0) {
        echo "Le panier est vide.";
        return;
    }

    echo "<table>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";

    foreach ($_SESSION['panier'] as $idProduit => $produit) {
        echo "<tr>";
        echo "<td>" . $produit['nom'] . "</td>";
        echo "<td>" . $produit['prix'] . " €</td>";
        echo "<td>" . $produit['quantite'] . "</td>";
        echo "<td><a href='supprimer_produit.php?id=" . $idProduit . "'>Supprimer</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation

// Ajouter des produits au panier
ajouterProduitAuPanier(1, 'Produit 1', 10.99);
ajouterProduitAuPanier(2, 'Produit 2', 5.99);
ajouterProduitAuPanier(3, 'Produit 3', 8.99);

// Afficher le contenu du panier
afficherPanier();
?>

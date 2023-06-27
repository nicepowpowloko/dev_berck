<?php
require '/laragon/www/panier/include/header.php';
?>


<style>
    td {
        background-color: white;
        height: 30vh;
        color: blue;
        text-decoration: none;
        font-weight: bolder;
    }
    a{
        text-decoration: none;
        color: yellow;
        background-color: black;
        
    }

    table{
        background-color: black;
        color: white;

    }
</style>



<table>
    <tr>
        <th>Image</th>
        <th>Produit</th>
        <th>Prix</th>
        <th>Quantité</th>
    </tr>
<?php
$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $prods = array();
}else{
    $prods = $DB->requete('SELECT * FROM produits WHERE id IN ('.implode(',', $ids).')');
}
foreach ($prods as $prodss):
?>
    <tr>
    <td><img src="/panier/img/<?= $prodss->id; ?>.webp" alt=""></td>
    <td><?= $prodss->nom_produit ?></td>
    <td><?= $prodss->prix ?>€</td>
    <td><?= $_SESSION['panier'][$prodss->id]?></td>
    <td><a href="/panier/panier.php?delPanier=<?= $prodss->id; ?>">Supprimer le produit</a></td>
    </tr>
    
    <?php
    endforeach;
    ?>
</table>
<h1>Nombre de produits : <?= $panier->count() ?></h1>
<h1>Total : <?= number_format($panier->total(),2,',',' ') ?>€</h1>
<a href="/panier/index.php">Retourner Au catalogue</a>



<?php
include '/laragon/www/panier/include/footer.php';
?>
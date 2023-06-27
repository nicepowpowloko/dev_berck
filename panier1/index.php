<?php
require '/laragon/www/panier/include/header.php'
?>

<h1 id='total'>Total : <?= number_format($panier->total(),2,',',' ') ?>€ </h1>
<h1 id='count'>Nombre de produit : <?= $panier->count() ?> </h1>

<div class="cat">

<?php 
$products = $DB->requete('SELECT * FROM produits');
foreach ($products as $product) :
?>
<div class="produit">
<img src="/panier/img/<?= $product->id?>.webp" alt="">
<h1><?= $product->nom_produit ?></h1>
<p><?= $product->prix?> €</p>
<a class='addpanier' href="/panier/include/addpanier.php?id=<?= $product->id?>" >Ajouter</a>
</div>

<?php
endforeach;
?>
<p>

</p>
<a href="/panier/panier.php">Voir le panier</a>

</div>



<?php
require '/laragon/www/panier/include/footer.php'
?>
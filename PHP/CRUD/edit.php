<?php

session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    &&isset($_POST['produit']) && !empty($_POST['produit'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])){

        require_once('connect.php');

// je  nettoie les données envoyée

        $id = strip_tags($_POST['id']);
        $produit = strip_tags($_POST['produit']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);
       

        $sql = 'UPDATE `liste` SET `produit`=:produit, `prix`=:prix, `nombre`=:nombre, WHERE `id`=:id;';

        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);
       

        $query->execute();

        $_SESSION['message'] = " Produit modifier";
        require_once('close.php');

        header('location: index.php');

    }else{
        $_SESSION['erreur'] = "le formulaire est incomplet";
    }
}


//si l'id existe et si il est pas vide

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

// je nettoie l'id
// fonction "strip_tags" qui enléve toute les balise

$id = strip_tags($_GET['id']);

$sql = 'SELECT * FROM `liste` WHERE `id` = :id;';

// je prépare la réquête

$query = $db->prepare($sql);

// j'accroche  les paramétres (id)

$query->bindValue(':id', $id, PDO::PARAM_INT);

// j'exécute la requête

$query->execute();

// je récupere le produit

$produit = $query->fetch();

// je verifie si le produit excite

if(!$produit){
    $_SESSION['erreur'] = " CETTE ID N'EXISTE PAS";
    header('location: index.php');
}

// je verifie si l'url est valide

}else{
    $_SESSION['erreur'] = "L'URL EST INVALIDE";
    header('location: index.php');
}


//je verifie si elle est definit et pas vide

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>

<style>
   body{
       display: flex;
   }

.alert{
    color: black;
    background-color: red;
    font-weight: bolder;
    font-size: 2em;
    display: flex;
    justify-content: center; 
}


</style>


</head>
<body>
    
<main class="container">
            <div class="row">
                <section class="col-12">

                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert"> '. $_SESSION['erreur'].'
                        </div>';
                       $_SESSION['erreur'] = ""; 
                    }
                    ?>

                                <h1>Modifier un produit</h1>
                                <form method="post">
                                    <div class="group">
                                        <label for="produit">Produit</label>
                                        <input type="text" id="produit" name="produit" value="<?= $produit['produit']?>">
                                    </div>
                                    
                                    <div class="group">
                                    <label for="prix">Prix</label>
                                        <input type="text" id="prix" name="prix" value="<?= $produit['prix']?>">
                                    </div>
                                    <div class="group">
                                    <label for="nombre">Nombre</label>
                                        <input type="number" id="nombre" name="nombre" value="<?= $produit['nombre']?>">
                                    </div>
                                    <input type="hidden" value="<?= $produit['id']?>" name="id">
                                   <button>ENVOYER</button>


                                </form>
                            </section>
                             </div>
                        </main>
</body>
</html>
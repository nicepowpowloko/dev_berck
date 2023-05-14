<?php

session_start();

//je verifie si elle est definit et bpas vide

if($_POST){
    if(isset($_POST['produit']) && !empty($_POST['produit'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])){

        require_once('connect.php');

// je  nettoie les données envoyée

        $produit = strip_tags($_POST['produit']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);

        $sql = 'INSERT INTO `liste` (`produit`, `prix`, `nombre`) VALUES (:produit, :prix, :nombre);';

        $query = $db->prepare($sql);

        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);

        $query->execute();

        $_SESSION['message'] = " Produit ajouter";
        require_once('close.php');

        header('location: index.php');

    }else{
        $_SESSION['erreur'] = "le formulaire est incomplet";
    }
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

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

                                <h1>Ajouter un produit</h1>
                                <form method="post">
                                    <div class="group">
                                        <label for="produit">Produit</label>
                                        <input type="text" id="produit" name="produit">
                                    </div>
                                    
                                    <div class="group">
                                    <label for="prix">Prix</label>
                                        <input type="text" id="prix" name="prix">
                                    </div>
                                    <div class="group">
                                    <label for="nombre">Nombre</label>
                                        <input type="number" id="nombre" name="nombre">
                                    </div>
                                   <button>ENVOYER</button>


                                </form>
                            </section>
                             </div>
                        </main>
</body>
</html>
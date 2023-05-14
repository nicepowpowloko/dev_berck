<?php

session_start();


require_once('connect.php');

$sql = 'SELECT * FROM `liste`';

//je prepare la requete 

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);


require_once('close.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste produits</title>

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
.succes{
    color: black;
    background-color: green;
    font-weight: bolder;
    font-size: 2em;
    display: flex;
    justify-content: center; 
}

th{
    background: #0f056b;
    border: 2px solid black;
    padding: 10px;
    color: white;
    font-weight: bolder;
}

td{
    background: yellow;
    font-weight: bolder;
    border: 2px solid black;
}

a{
    text-decoration: none;
    color: black;
}

h1{
    display: flex;
    justify-content: center;
}

button{
    padding: 10px;
    box-shadow: 5px 5px black;
   
    
    
}
</style>


</head>
<body>
    
<main class="container">
            <div class="row">
                <section class="col-12">

<!-- je fais apparatitre un message d'erreur si je n'est pas ou que mon id est vide-->

                    <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert"> '. $_SESSION['erreur'].'
                        </div>';
                       $_SESSION['erreur'] = ""; 
                    }
                    ?>

                    <?php
                    if(!empty($_SESSION['message'])){
                        echo '<div class="succes"> '. $_SESSION['message'].'
                        </div>';
                       $_SESSION['message'] = ""; 
                    }
                    ?>

<h1>tableaux des produits</h1>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Nombre</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach($result as $produit){

//recuperation  avec boucle foreach

                             ?>
                             
                        <tr>
                            <td><?= $produit['id'] ?></td>
                            <td><?= $produit['produit'] ?></td>
                            <td><?= $produit['prix'] ?></td>
                            <td><?= $produit['nombre'] ?></td>
                            
                            

<!-- recupere l'id en question pour pouvoir l'apercevoir en detail celon l'id recuperer-->

                            <td><a href="details.php?id=<?= $produit['id'] ?>">Voir</a> <a href="edit.php?id=<?= $produit['id'] ?>">modifier</a> <a href="delete.php?id=<?= $produit['id'] ?>">supprimer</a></td> 
                        </tr>

                             <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
            <a href="add.php"><button>Ajouter un produit</button> 
            <br>
            <br>
            <a href="index.php"><button>Retour</button></a></a>
            </div>
</main>



</body>
</html>
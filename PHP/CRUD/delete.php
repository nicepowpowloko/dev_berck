<?php

// je demarre la session

session_start();

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


$sql = 'DELETE FROM `liste` WHERE `id` = :id;';


$query = $db->prepare($sql);

$query->bindValue(':id', $id, PDO::PARAM_INT);


$query->execute();
$_SESSION['message'] = " PRODUIT SUPPRIMER ";
    header('location: index.php');


}else{
    $_SESSION['erreur'] = "L'URL EST INVALIDE";
    header('location: index.php');
}



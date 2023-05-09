<?php
require '/laragon/www/panier/include/_header.php';
$json = array("error" => true);
if(isset($_GET['id'])){
    $prods = $DB->requete("SELECT id FROM produits WHERE id = :id" , array('id' => $_GET['id']));
    if(empty($prods)){
        $json['message'] = "Ce produit n'existe pas ";
    }
   $panier->add($prods[0]->id);
   $json['error'] = false;
   $json['total'] = $panier->total();
   $json['count'] = $panier->count();
   $json['message'] = "Le produit à été ajouter";
   header('Location:/panier/index.php');
}else{
    $json['message'] = "Vous n'avez pas de produit";
}
echo json_encode($json);
?>


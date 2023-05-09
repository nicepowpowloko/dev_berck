<?php
require '/laragon/www/panier/include/bd.class.php';
require '/laragon/www/panier/include/panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>
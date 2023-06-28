<?php

class Panier {
    private $DB;

    public function __construct($DB) {
   
        $this->DB = $DB;
    }



    public function total() {
        $total = 0;
        $ids = array_keys($_SESSION['panier']);

        if (!empty($ids)) {
            $sql = "SELECT id, prix FROM produits WHERE id IN (" . implode(',', $ids) . ")";
            $result = $this->DB->requete($sql); // Appel à votre méthode de requête

            foreach ($result as $row) {
                $total += $row['prix'] * $_SESSION['panier'][$row['id']];
            }
        }

        return $total;
    }

   
}

?>


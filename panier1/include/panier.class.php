<?php

class panier {
    private $DB;
    public function __construct($DB) {  
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        $this->DB = $DB;
        if(isset($_GET ['delPanier'])){
            $this->del($_GET['delPanier']);
        }
}
    public function add($prod_id) {
        if(isset($_SESSION['panier'][$prod_id])){
        $_SESSION['panier'][$prod_id]++;
        }else{
        $_SESSION['panier'][$prod_id] = 1;
        }
    }
    public function del($prod_id){
        unset($_SESSION['panier'][$prod_id]);
    }

    public function total(){
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $prods = array();
        }else{
            $prods = $this->DB->requete('SELECT id, prix FROM produits WHERE id IN ('.implode(',', $ids).')');
        }
        foreach($prods as $prodss){
            $total += $prodss->prix * $_SESSION['panier'][$prodss->id];
    }
    return $total;
}
public function count(){
    return array_sum($_SESSION['panier']);
}

}

?>
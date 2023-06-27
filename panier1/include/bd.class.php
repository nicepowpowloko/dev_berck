<?php

class DB{
    private $host = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $database = 'panier';
    private $db;

    public function __construct($host = null, $username = null, $pass = null, $database = null) {
        if(!is_null($host)){
            $this->host = $host;
            $this->username = $username;
            $this->pass = $pass;
            $this->database = $database;
        }
        try{
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch(PDOException $e){
            die('Impossible de se connecter');
        }

    }
    public function requete($sql, $data = array()){
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}
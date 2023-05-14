<?php
if(!empty($_POST['pseudo'])){

    function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
$pseudo = cleandata($_POST['pseudo']);
}else{
    echo 'probleme';
}



if(!empty($_POST['motdedep']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['motdedep']) &&!empty($pseudo)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM exusers WHERE tokenconfirmed IS NOT NULL AND username = :pseudale ');
        $req->bindParam(':pseudale', $pseudo);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if(!empty($userdata) && password_verify($_POST['motdedep'], $userdata->password)){
            session_start();
            $_SESSION['auth'] = $userdata;
            print_r($_SESSION['auth']) ;
           header('location:../index.php');
        }else{
            echo 'c\'est pas bon du';
        }
    }
}else{
    echo 'sa ne fonctionne pas';
}
?>
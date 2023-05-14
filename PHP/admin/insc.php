<?php
include './include/header.php';
?>


<style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
    }
    form{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        color: yellow;
    }
    form input ~ label{
        margin: 15px;
        
    }
    form input{
        margin: 20px;
        padding: 5px;
        border: 2px solid yellow;
        border-radius: 10%;
        
    }
    fieldset{
        background-color: blue;
        height: 80vh;
        width: 50vw;
        border: 5px solid black;
        border-radius: 10%;
    }
    
  
  
</style>


<fieldset>
    <legend>INSCRIPTION</legend>
    <form action="./include/inscript.php" method="POST">

    <label for="pseudo">Nom d'utilisateur</label>
    <input type="text" name="pseudo" id="pseud" required pattern="^[A-Za-z'-]+$" max="20">
<!-- max sert a indiquer le nombre maximun de cractére acceptable pour le nom utilisateur ne peut eétre dépasser -->

    <label for="mdp">mot de passe</label>
    <input type="password" name="mdp" id="motdpe" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">


    <label for="mdpconf">confirmer votre mot de passe</label>
    <input type="password" name="mdpconf" id="motdpec" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">

 <!-- "^[A-Za-z0-9'-@!?*$.-]  pour caractéres spéciaux-->

    <label for="email">Adresse mail</label>
    <input type="email" name="email" id="email" required pattern="^[A-Za-z0-9'.-]+@{1}[A-Za-z]+\.{1}[A-Za-z0-9'.-]{2,}$">

    <input type="submit" value="Envoyer">

    </form>
</fieldset>





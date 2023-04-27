<?php
        if(isset($_POST['nom']) && isset($_POST['prenom'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            echo "<h1>Bienvenue $prenom $nom !</h1>";
        } else {
            echo "<h1>Formulaire non soumis</h1>";
        }
    ?>






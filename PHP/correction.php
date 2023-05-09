





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correction PHP exo</title>
</head>

<style>

*{
    box-sizing: border-box;
}

    p{
        font-weight:bolder;
        color: darkviolet;
        font-size: 1.5em;
    }

    h1{
        color: green;
        background-color: gray;
        display: flex;
        justify-content: center;
    }

    h2{
        color: blue;
    }

    .exo{
        display: flex;
        justify-content: center;
        background-color: burlywood;
    }


    
</style>

<body>
    
<p class="exo">exercice.1</p>
<?php
for ($i = 0; $i <= 100; $i += 2) {
    echo "<h2>" . $i . "</h2>";
}
?>

<p class="exo">exercice.2</p>
<?php
echo strrev("FarCry");
?>

<p class="exo">exercice.3</p>
<?php
echo str_word_count( "Salut les terriens");
?>

<p class="exo">exercice.4</p>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<h2>" . $i . "</h2> ";
}
?>

<p class="exo">exercice.5</p>
<?php
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . " ";
}
?>

<p class="exo">exercice.6</p>
<?php
$nombres = array(10, 20, 30);

foreach ($nombres as $nombre) {
    echo "<h2>". $nombre . "</h2><br>";
}
?>

<p class="exo">exercice.7</p>
<?php
$tortue = "<h2>Je suis un animal !</h2>";
echo $tortue;
?>

<p>exercice.9</p>

<h1>Formulaire de bienvenue</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        echo "<h2>Bienvenue, " . $nom . " !</h2>";
    }
    ?>

<p>exercice.10</p>
   
<h1>Formulaire plusieurs récupération</h1>
    <form method="POST" action="traitement.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <p>exercice.11</p>
   <?php
    if(isset($_POST['nom']) && isset($_POST['prenom'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            
            if(empty($nom) || empty($prenom)) {
                echo "<h1>Veuillez remplir tous les champs du formulaire</h1>";
            } else {
                echo "<h1>Bienvenue $prenom $nom !</h1>";
            }
        } else {
            echo "<h1>Formulaire non soumis</h1>";
        }
    ?>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <input type="submit" value="Envoyer">
    </form>




<p class="exo">exercie.12</p>

<?php

    class Admin {
  public $nom;
  public $age;
  public $sexe;

  public function afficher_infos() {
    echo "<h2>Nom : " . $this->nom . "</h2><br>";
    echo "<h2>Âge : " . $this->age . "</h2><br>";
    echo "<h2>Sexe : " . $this->sexe . "</h2><br>";
  }
}

$admin1 = new Admin();

// Définir les propriétés de l'administrateur

$admin1->nom = "Darras";
$admin1->age = 31;
$admin1->sexe = "homme";

// Appeler la méthode pour afficher les informations
$admin1->afficher_infos();

?>

<p class="exo">exercie.13</p>
<?php

$couleurs = array("rouge", "vert", "gris", "violet", "orange");

foreach ($couleurs as $couleur) {
  echo "<h2>la couleurs est  " . $couleur . "</h2<br>";
}
?>

<p class="exo">exercie.14</p>
<?php

$pays_capitales = array(
    "France" => "Paris",
    "Russie" => "Moscou",
    "Italie" => "Rome",
    "Allemagne" => "Berlin",
    "Angleterre" => "Londres"
  );
  
  foreach ($pays_capitales as $pays => $capitale) {
    echo "<h2>La capitale de " . $pays . " est " . $capitale . "</h2><br>";
  }
?>

<p class="exo">exercie.16</p>
<?php

$nombres = array(10, 6, 8, 5, 20);

$somme = 0;

foreach ($nombres as $nombre) {
  $somme += $nombre;
}

echo "<h2>La somme des nombres est : " . $somme . "</h2>";

?>

<p class="exo">exercie.17</p>
<?php

$fruit = "mangue";

switch ($fruit) {
  case "mangue":
    echo "<h2>miam miam</h2>";
    break;
  case "fraise":
    echo "<h2>tout rouge</h2>";
    break;
  case "haricots":
    echo "<h2>pas bon</h2>";
    break;
  default:
    echo "<h2>Aucune correspondance</h2>";
    break;
}

?>

<p class="exo">exercie.18</p>
<?php

$a = 15;
$b = 15;

if ($a == $b) {
  echo "<h2>Les variables sont égales</h2>";
} else {
  echo "<h2>Les variables ne sont pas égales</h2>";
}

?>

<p class="exo">exercie.19</p>
<?php

$x = 20;
$y = 3;

if ($x > $y) {
  echo "<h2>La variable x est strictement supérieure à la variable y</h2>";
} else {
  echo "<h2>La variable x n'est pas strictement supérieure à la variable y</h2>";
}

?>

<p class="exo" >exercie.20</p>
<?php
$z = 3;
if ($z != 0) {
    echo "<h2>La variable $z est bien différente de zéro.</h2>";
}

?>

<p class="exo" >exercie.21</p>
<?php
$age = 12;
if ($age >= 18 && $age <= 30) {
    echo "La personne est majeur";
} else {
    echo "<h2>La personne est mineur</h2>";
}
?>

<?php
// Définition de la variable compteur
$compteur = 0;

// Boucle do while
do {
    // Affichage du compteur
    echo "Compteur : " . $compteur . "<br>";

    // Incrémentation du compteur
    $compteur++;
} while ($compteur < 10);
?>


</body>
</html>
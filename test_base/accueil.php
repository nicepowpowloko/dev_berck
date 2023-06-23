<?php include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
<div class="parent2">
<div class="cont"> 
<div class="cards">
     
 
     <div class="position">
             <div class="conteneur conteneur-1">
               <div class="produits">
                   <img src="../img/maillot nba golden.webp" width="200px" height="200pw" alt="">
     </div>
     <h2>
    Maillot NBA</h2>
     <p>
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempora inventore esse suscipit aspernatur delectus earum commodi, porro quo sed ea placeat voluptatum voluptatibus velit aperiam eum nihil assumenda quibusdam! </p>
     <a href="#">Ajouter aux panier</a>
             </div>
     <div class="conteneur conteneur-2">
               <div class="produits2">
                   <img src="../img/maillot nba golden.webp" width="200px" height="200pw" alt="">
     </div>
     <h2>
       Maillot NBA</h2>
     <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut tempora velit expedita inventore modi. Facere fugit atque ad molestias? Impedit architecto modi velit eaque blanditiis voluptates accusamus, repudiandae alias? lorem</p>
     <a href="#">Ajouter au panier</a>
             </div>
     <div class="conteneur conteneur-3">
               <div class="produits3">
                   <img src="../img/maillot nba golden.webp" width="200px" height="200pw" alt="">
     </div>
     <h2>
       Maillot NBA</h2>
     <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ut tempora velit expedita inventore modi. Facere fugit atque ad molestias? Impedit architecto modi velit eaque blanditiis voluptates accusamus, repudiandae alias? lorem</p>
     <a href="#">Ajouer aux panier</a>
             </div>
     </div>
     </div>
   
   
   
     
    
      
       
       </div>
   </div>




</body>

<style>
.parent2 {
display: grid;
grid-template-columns: repeat(6, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 10px;
grid-row-gap: 0px;
}

.cont { grid-area: 1 / 1 / 3 / 7;
    border: solid 2px black;
    height: 500px;

}

.vide { grid-area: 1 / 1 / 2 / 2; }

.pizza2 { grid-area: 1 / 2 / 2 / 3; 
    border: solid 2px black;
    width: 40px;
    height: 500px;
    max-width:100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
}

.photopers { grid-area: 1 / 3 / 2 / 4; 
    border: solid 2px black;
}

.photomag { grid-area: 1 / 4 / 2 / 5; 
    border: solid 2px black;
}

.photopizza { grid-area: 1 / 5 / 2 / 6;
    border: solid 2px black;
 }

.vide { grid-area: 1 / 6 / 2 / 7; }

/* card photo*/

.position{
  display: flex;
  align-items: center;
}
.conteneur{
  display: flex;
  flex-wrap: wrap;
  flex: 1;
  margin: 20px;
  padding: 20px;
  border: 2px solid rgb(205, 227, 8);
  border-radius: 4px;
  transition: all .3s ease;
  border-radius: 5%;
  box-shadow: black 2px 2px 3px;
}

.conteneur > *{
  flex: 1 1 100%;
}

.conteneur:hover a{
  
  background: rgb(142, 4, 4);
}
.conteneur-1:hover a{
  
    background: rgb(47, 14, 232);
    color: black;
  }
  
  .conteneur-3:hover a{
  
    background: rgb(14, 232, 116);
  }
  
  .conteneur h2{
  font-size: 30px;
  margin: 16px 0;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-shadow: yellow 2px 2px 2px;
}
.conteneur p{
  font-size: 17px;
  font-family: 'Poppins',sans-serif;
}
.conteneur a{
  margin: 22px 0;
  background: black;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  border: 1px solid black;
  padding: 15px 0;
  border-radius: 25px;
  transition: .3s ease;
}



/* RESPONSIVE */

@media (max-width: 900px) {
  .position{
    display: flex;
    flex-direction: column;
  }
}

</style>
<footer> <?php include 'footer.php' ?> </footer>

</html>
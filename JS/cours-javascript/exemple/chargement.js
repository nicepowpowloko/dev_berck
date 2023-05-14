let i = 0;
// On défini une variable qui représentera la condition de la progression
function move() {
  if (i == 0) {
      // On défini la condition qui permettra le lancement de la fonction
    i = 1;
    // On modifie la valeur de la variable pour pouvoir lancer la boucle d'itération de la fonction
    let elem = document.getElementById("myBar");
    // On sélectionne la balise à modifier
    let width = 1;
    // On défini la variable de a width de notre élément afin de pouvoir le faire grandir
    let id = setInterval(frame, 50);
    // On défini le taux de rafraichissement de la fonction
    function frame() {
        // On défini la fonction qui encadre le fonctionnement de la progression
      if (width >= 100) {
          // On vérifie que la width n'est pas supérieur ou égale à 100 pour arrêter la boucle au bon moment
        clearInterval(id);
        // On arrête l'itération de la boucle si la valeur atteint ou dépasse 100
        i = 0;
        // On modifie la valeur de la variable pour empêcher son fonctionnement
      } else {
        // Si la valeur n'est pas supérieure ou égale à 100, on incrémente las valeur de Width à chaque itération de la boucle
        width++;
        // l'incrémentation  se fait en suffixe
        elem.style.width = width + "%";
        // on redéfini le style de la balise à chaque itération de la boucle 
        elem.innerHTML = width + "%";
        // On affiche le texte de progression (purement esthétique)
      }
    }
  }
}



// Création de la To-do app

// On commence par sélectionner les différent élément en html qui ne doivent pas être modifier 

const nouvelleTache = document.getElementById('nouvelle-tache');
//On créer une constante pour sélectionner l'input
const boutonAjouter = document.getElementById('ajout');
//On créer une constante pour sélectionner le bouton
const listeTache = document.getElementById('liste-de-tache');
//On créer une constante pour sélectionner la liste UL
boutonAjouter.addEventListener('click', () => {
    //On ajoute un fonctionnement évenementiel au bouton via la fonction addEventListener qui va scruter l'apparition d'un événement click sur le bouton d'ajout et quand l'évement aura lieu, déclenchera une fonction
    const infosTaches = nouvelleTache.value;
    //une fois la fonction déclencher on récupére les informations inscrite dans l'input via l'instruction value et on la stocke dans une constante
    if(infosTaches !== ""){
        // On vérifie que l'information n'est pas une chaine de caractère vide et si la comparaison est vraie on laisse le script continuer
        const infoListe = document.createElement('li');
        // On créer un élément li qui sera un enfant de UL et on stocke cette création dans une constante
        infoListe.innerText = infosTaches;
        // On ajoute la valeur précedemment récupérer 
        listeTache.appendChild(infoListe);
        // On transforme l'élément li en enfant de l'élément UL
        nouvelleTache.value = "";
        // on réinitialise la valeur contenue dans l'input
    }
});
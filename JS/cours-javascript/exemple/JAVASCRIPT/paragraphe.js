let string = "je m'appelle thomas";
/* la premiére donnée le "string" permet de définir une chaine de caractére pour le javascript, la création d'un texte de maniére raccourcie */ 

let numb = 29;
/* la donnée de la variable numb est une donnée de catégorie 'number' elle permet de réaliser des opérations arithmétiques */ 

let boolV = true;
/* la donnée 'booléenne' vraie permet de définir un état positif pourune variable, elle est principalement définie par l'utilisation de la commande true */

let boolF = false;
/* la donnée 'booléenne' fausse permet de définir un état négatif pour une variable, elle est principalement définie par l'utilisation de la commande false */ 
let result = 9 > 3;
/* ici il s'agit d'une variable qui contient le résultat d'une comparaison */ 
let nul = null;
/* la donnée 'null' permet de définir un vide ou une donnée effacée */
let und;
/* la donnée 'und' est une donneé indéfinie qui du coup est inexistante */


document.getElementById('exemple1').innerHTML = 'types de données : ' + typeof nul + ' : ' + nul;
/* traduction: je selcetionne dans mon document tout les élements qui posséde l'id exemple1'et j'inscrit dans une chaine de caractère les informations suivantes = */

document.getElementById('exemple2').innerHTML = 'types de données : ' + typeof und + ' : ' + und;
/* on défini une chaine de caractére avec '' et on concatène avec +, la concaténation c'est l'art et la maniere d'ajouter des informations a la suite les une des autres en permettant de travailler avec des données de types différent
en Javscript, la concaténation se représente par un + espacé avant et aprés par rapport au données qu'il concatène */

document.getElementById('exemple3').innerHTML = 'types de données : ' + typeof result + ' : ' + result;
/* typeof permet de retourner le type de donnée de la variable plutôt que le résultat de cette derniére */
document.getElementById('exemple4').innerHTML = 'types de données : ' + typeof string + ' : ' + string;
/*  */ 
document.getElementById('exemple5').innerHTML = 'types de données : ' + typeof numb + ' : ' + numb;
/*  */ 
document.getElementById('test').innerHTML = 'bonjour' + " " + string;
/*  */ 
alert('Bonjour')



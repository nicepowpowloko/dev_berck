// ici on va voir les différents type de données et leur intérêt en programmation

let string = 'Ceci est un string, une chaine de caractère'; // string représente une chaine de caractère globale comprenant caractères alphanumérique et caractères spéciaux
let number =  105000; //number représente uniquement des chiffres entiers et décimaux, positifs ET négatifs, Number est un type de données spécifique au javascript que l'on ne retrouve pas dans les autres langages
let boolean = true + false; //boolean représente une validation ou un refus, ce type de données permet de créer des embranchements logique dans la programmation de fonction et d'algorithmes
let nul = null; //Null représente un espace vide, l'absence de valeur explicitée
let und; // undefined représente une variable dont la valeur n'a pas été défini au préalable
let symbol = map(); // symbol permet de stocker des informations spécifique pour des applications techniques comme de la cartographie
let object = []; // object permet de stocker des informations spécifique pour la réalisation d'applications en orienté objet

// cas spécifique pour le type de données String

let string2 = 'J\'aime bien les chevaux'  // dans le cas de l'utilisation d'apostrophe en déclarant de chaine de caractère je dois échapper la prochaine apostrophe avec antislash (\) pour pouvoir intégrer l'information dans la chaine de caractère.
let string3 = `ma voiture à ${number} kilométre` // Si j'utilise les accents grave pour déclarer une chaine de caractère je dois utiliser un littéral de gabarit pourn déclarer l'utilisation d'une variable dans la chaine de caractère

// Cas spécifique d'une variable avec  plusieurs type de données 

let multiData = 'Bonjour' + 105000 + true; // dans le cas d'une variable avec plusieurs type de données je dois utiliser la concaténation pour pouvoir les liés, pour cela on utilisera le concaténateur + avec un espace entre les informations qu'il doit concaténer
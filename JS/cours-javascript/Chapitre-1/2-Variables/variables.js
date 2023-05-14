// On va découvrir les règles de déclarations et de stockage des variables

// Pour déclarer des variables il existe 2 mot-clés 

let variablePrems = "premier déclarant de variable : let"
var variableSec = "second déclarant de variable : var"

// ces deux mots-clés permettent de déclarer des variables mais non pas la même portée d'utilisation, en effet let est plus restreint que var sur son utilisation

function exemple(){
    let variableDansFonction = 'la variable let est spécifique à cette fonction et ne peut pas en être extraite';
    var variableDansFonction2 = 'la variable var est extractable de la fonction';
}

document.write(variableDansFonction2)
document.write(variableDansFonction)

// pour plus de simplicité on limiteras l'utilisation des mot-clés à uniquement let

// pour simplifier le dialogue entre les différents intervenants d'un code, on va désigner une structure d'écriture spécifique

let pikachuThePokémon // on éviteras d'utiliser des accents afin de prévenir tout problème de compréhension
let nikesneakersraffle // on éviteras de lier plusieurs mots en minuscule afin de garder une écriture lisible
let _mobileGamefa // on peut démarrer la variable par un _
let raclette_hfa // on peut séparer deux mots d'une variable par un _ mais on priorisera également la majuscule sur le second mot
let exercice_Javascript // cet exemple est un bon système d'écriture
let pokemon2 // les chiffres peuvent accompagner les lettre et les _
let _pokemon_2 // on peut utiliser plusieurs _ dans une variable
let pokemon@2 // on ne peut utiliser de caractères spéciaux
let 2pokemon // on ne peut pas démarrer le nom de la variable par un chiffre

// c'est trois variables sont considérées comme différentes et uniques, on eviteras donc de réaliser des variables avec des noms trop proches ou avec des changements trop subtils (sauf cas d'easter egg)
let texte
let Texte
let TeXte

// de plus certains mots sont réservés en JavaScript et on éviteras de les utiliser ppour déclarer des variables

/* 
let switch
let do
let catch
 */

//sont des mots réservés que l'ont ne pourras pas utiliser pour définir une variable

// pour stocker une information dans une variable on utilisera

let maVariable = 34

// pour modifier l'information contenue dans la variable je vais appeler la variable sans son déclarant

maVariable = 35

// Petit point sur les différences entre var et let 

let maVariable2 = "un mot"
//let maVariable2 = "Un autre mot" 
// en redéclarant ma varialble let j'obtiens une erreur
var maVariable2EnVar = 'Un mot'
var maVariable2EnVar = 'Un autre mot'
// en redéclarant ma varialble var je n'obtiens pas d'erreur

maVariableHoister = 'Salut'
let maVariableHoister
// le hoisting c'est le principe de remonter le script pour récupérer une information déployé préalablement à la déclaration de la variable let n'autorise pas le hoisting tandis que var l'autorise
maSecondeVariableHoister = 'Salut 2'
var maSecondeVariableHoister



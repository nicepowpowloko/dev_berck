// les structures de controle permettent de créer des comparaison et travaux complexes en javascript

// Structure de contrôle conditionnelle IF

let x = 6
let y = 3

if(x > 1){
    alert("x est supérieur à 1")
}
if(x == y){
    alert("x est égal à y")
}
if(y){
    alert("y existe")
}

//la structure if permet de comparer des informations et renvoi true sauf dans les cas suivants : 
/*
- un boolean false
- 0
- chaine de caractère vide
- null
- undefined
- Tout ce qui n'est pas un nombre ou un booléen
*/

// La structre de contrôle if...else

if (x < y){
    alert('x est inférieur à y')
}else{
    alert('y est inférieur à x')
}

// if...else permet de définir une situation logique que dois éxécuter le script en cas de réponse false à la comparaison

// if...elseif...else

if(x <  y){
    alert('x est inférieur à y')
}else if(x = y){
    alert('x est égal à y')
}else{
    alert('x est supérieur à y')
}

//else if à la différence de else possède une structure de comparaison spécifique défini et comprend un autre schéma logique et n'est pas la solution en cas d'échec de la comparaison.

// Renforcement des strucxtures de contrôle avec des opérateurs spécifiques, les opérateurs Logiques

if(x > 1 && x > y){
    alert('x est sup à 1 ET x est sup à y')
}else if(x < 1 || x < y){
    alert('x est inf à 1 OU x est inf à y')
}else if(!(y > 1)){
    alert('y est inf à 1')
}else{
    alert('x est y ont des valeurs équivalentes')
}


// Structures de contrôles condensés

// Opérateur ternaire ?


alert(x >= 5 ? 'x est supérieur à 5' : 'x est inférieur à 5');
    //Comparaison  Si vrai                   Si faux

// L'opérateur ternaire permet de condenser les informations afin de créer une conditions qui se résout en une seule ligne, le ternaire peut présenter des problèmes de compréhension sur des structures complexes


// Structure de contrôle multiple Switch

let s = 5

switch(s){
    case 1 :
        alert('s = 1')
        break
    case 2 :
        alert('s = 2')
        break
    case 3 :
        alert('s = 3')
        break
    case 4 :
        alert('s = 4')
        break
    case 5 :
        alert('s = 5')
        break
    default :
    alert('s = undefined')

}

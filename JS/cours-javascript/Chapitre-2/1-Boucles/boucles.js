// présentation des boucles et des opérateurs d'incrémentation et de décrémentation

let x = 5
let y = 8 

x++ // On réalise ici une post-incrémentation
++x // On réalise ici une pré-incrémentation
--y // On réalise ici une pré-décrémentation
y-- // On réalise ici une post-decrementation

// l'incrémentation et la décrementation permettent d'ajouter ou d'enlever 1 à un résultat de type Number


// la première boucle, la boucle While
x = 0
while(x < 20){
    document.getElementById('root').innerHTML += '<br> x vaut ' + x + 'à l\'étape ' + (x + 1);
    x++; 
}
// la boucle while permet de répeter une série d'instruction TANT QUE la condition est vérifiée 

// la boucle Do...While

y = 0

do{
    document.getElementById('root2').innerHTML += '<br> y vaut ' + y + 'à l\'étape ' + (y + 1);
    y++
}while(y < 12)

// la principale différence entre do...while et While réside dans l'apparition de la première boucle, l'ordre de vérification de la comparaison n'étant pas le même la boucle do va effectuer un premier passage avant de vérifier la comparaison


// la boucle for aka la meilleure boucle aka 90% de l'utilisation mondiale

for(let z = 0; z < 100; z++) {
    document.getElementById('root3').innerHTML += '<br> z vaut ' + z + 'à l\'étape ' + (z + 1);
}

// la boucle for est une structure plus complexe et plus solide que les boucles précédentes, on la compose en 3 étapes : la phase d'iniitialisation, la phase de comparaison et la phase d'incrémentation. Ces différentes informations vont permettre de créer la logique de fonctionnement de la boucle pour la création de son algorithme. la boucle for est plus lente dans son fonctionnement et réalise une vérification à chaque passage ce qui la rend également moins sujette aux erreurs. Dans le cas général on utilise i pour définir la variable de fonctionnement de la boucle (i signifie alors "iterator" ou "iterateur" dans la langue fromagère)

// Comment sauter des passages de boucle manuellement

for(let i = 0; i < 10; i++) {
    if( i == 3) {
        continue
    }
    document.getElementById('root4').innerHTML += '<br>Continue' + i;
}
// l'instruction continue permet d'interrompre prématurément un passage de boucle pour passer au suivant

// Comment interrompre une boucle 

for(let i = 0; i < 10; i++) {
    if( i == 3) {
        break
    }
    document.getElementById('root5').innerHTML += '<br> Break' + i;

}
// l'instruction break permet d'interrompre complétement une boucle quand une condition est validée




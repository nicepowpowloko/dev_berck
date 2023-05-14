// les opérateurs en Javascript permettent de mettre en place des conditions et de renforcer des structures dites complexe en allouant l'algorithme à vérifier et créer des situations spécifiques


// Opérateurs arithmétiques

// les opérateurs arithmétiques permettent de réaliser différentes opérations sur les valeurs de type Number 

let arith1 = 23 + 42 //opérateur addition
let arith2 = 42 - 23 // Opérateur soustraction
let arith3 = 23 * 4 // Opérateur Multiplication
let arith4 = 23 / 4 // Opérateur Division
let arith5 = 23 ** 5 // Opérateur Exponentielle
let arith6 = 23 % 5 // Opérateur Modulo (Reste de la division Euclidienne)

// Opérateurs affectations

// les opérateurs d'affectations permettent de modifier une variable en fonction du résultat d'une autre variable ou de lui ajouter des informations

let x = 5
let y = 8

x += 2
x -= 2
x *= 2
x /= 2
x %= 2

//Opérateurs de gabarit et de concaténation

let concabarit = `Hola j'ai ${arith1 + y} ans` // les opérateurs de concaténation et de gabarit permettent de modifier des chaines de caractères afin de créer des chaines complexes, dans un littéral de gabarit on peut concaténer plusieurs variables ou affectations si le type de données de la variable est Number
let concabarit2 = `Hola j'ai ${arith2 -= x} ans`


// Opérateur de constance 

const prenom = 'Vincent' // le mot-clé const permet de déclarer une constante, qui possède les même caractèristiques qu'une variable a la seule différence qu'elle ne peut être modifiée


// Opérateurs de comparaison

// les opérateurs de comparaison permettent de comparer deux opérandes afin d'obtenir un résultat Booléen (True ou False)

x == y // permet de comparer la valeur
x === y // permet de comparer la valeur et le type
x != y // permet de comparer la différence de valeur
// x <> y
x !== y // permet de comparer la différence de valeur et de type
x < y // permet de tester une valeur strictement inférieure
x > y // permet de tester une valeur strictement supérieure
x <= y // permet de tester une valeur inférieure ou égale
x >= y // permet de tester une valeur supérieure ou égale


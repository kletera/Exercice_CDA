//Exercice bonus (beaucoup plus compliqué) :
/*
Tour de Hanoi : https://www.mathsisfun.com/games/towerofhanoi.html
Il y a 3 tours, et des disques sur l'une d'entre elles. On ne peut déplacer qu'un seul disque à la fois, et on ne peut pas placer un disque sur un autre plus petit.

Le but est d'écrire une fonction qui **affiche dans la console** la solution de ce problème.
Exemple avec le code (obfusqué) plus bas :
*/

function hanoi(nbD,t1,t3,t2){
    if(nbD===0){
        return;
    }
    hanoi(nbD-1,t1,t2,t3);
    console.log("Déplacer de "+t1+" vers "+t2);
}
hanoi(3,"un","trois","deux"); // Je demande : comment déplacer 3 disques de la tour "un" vers la tour "trois", avec la tour "deux" en intermédiaire.
// Résultat (dans la console) :
// Déplacer de un vers trois
// Déplacer de un vers deux
// Déplacer de trois vers deux
// Déplacer de un vers trois
// Déplacer de deux vers un
// Déplacer de deux vers trois
// Déplacer de un vers trois
/*

     |            |            |
     |            |            |
     |            |            |
    -|-           |            |
   --|--          |            |
  ---|---         |            |
=====|=====  =====|=====  =====|=====
    un          deux         trois
*/

let tour1=[
    "     |     ",
    "     |     ",
    "     |     ",
    "    -|-    ",
    "   --|--   ",
    "  ---|---  ",
    "=====|=====",
    "    un     ",
];
let tour2=[
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "=====|=====",
    "   deux    "
];
let tour3=[
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "     |     ",
    "=====|=====",
    "   trois   ",
];
let tour=[tour1,tour2,tour3];

// Assemblage des tours l'une a coter de l'autre
function assembler(tours) {
    let separateur = "  ";
    let nbLignes = tours[0].length;
    let lignesFinales = [];

    for (let i = 0; i < nbLignes; i++) {
        let ligne = tours.map(t => t[i]).join(separateur);
        lignesFinales.push(ligne);
    }

    return lignesFinales;
}

let dessinFinal=assembler(tour).join("\n");

function jeux(tour,debut,fin){
    

}
console.log(dessinFinal);
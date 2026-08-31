// 
let x =997;
let y =312;
let z =663;

while(10*x>y){
    x=(y*z)%10000;
    y=(3*z)%10000;
    z=(7*z)%10000;
}
console.log(x,y,z);

// Exercice Tony Stark
let total=0;

for(let i=0; i<1435;i++){
    if(i%3==0 || i%5==0){
        total+=i;
    }
}
console.log(total);

// Désamorçage d'un explosif (I)
let seriNumbur=797114;
let U=797;
let N=114;

for(let i=0; i<N; i++){
    U*=13;
    U=U%1000;
}
console.log(U);

// Herculito10Boeufs
for(let b=1;b<1000;b++){
    for(let r=b+1;r<1000-b;r++){
        for(let noirs=r+1;noirs<2*b;noirs++){
            let totBeauf=b+r+noirs;
            if(totBeauf<1000 && b*r*noirs===777*totBeauf){
                console.log("Total de beauf",totBeauf);
                console.log("Total de beauf blanc",b);
                console.log("Total de beauf roux",r);
                console.log("Total de beauf noirs",noirs);
            }
        }
    }
}

// Le but de cet exercice est de répondre à la question :
// "Combien de personnes faut-il réunir dans une pièce pour avoir 50% de chance que deux d'entre elles (au moins) aient le même anniversaire ?" de façon expérimentale.

/*
1) Créer une fonction qui retourne un nombre au hasard entre 0 et une valeur donnée.
Exemple : `random(6)` retourne au hasard 0, 1, 2, 3, 4 ou 5
          `random(100)` retourne au hasard 0, 1, 2, ..., 98, ou 99
Pour cette fonction, vous aurez probablement besoin d'utiliser deux fonctions déjà existantes :
La fonction `Math.random`. C'est une fonction qui ne prend rien en entrée, et qui retourne une valeur au hasard entre 0 et 1 (0.??????????).
La fonction `Math.floor`. C'est une fonction qui prend un nombre en entrée et qui retourne l'arrondi en bas de ce nombre.

2) Créer une fonction `draft` qui prend deux nombres `length` et `limit` en entrée, et qui retourne un tableau de `length` cases contenant des valeurs choisies au hasard entre 0 et `limit`.
Exemple : `draft(10, 100)` retourne `[22, 38, 15, 2, 48, 14, 81, 50, 27, 16]`.

3) Créer une fonction `hasDuplicates` qui prend un tableau en entrée et qui retourne un booléen :
- true si le tableau contient (au moins) un double ;
- false si toutes les valeurs du tableau sont uniques.

4) Créer une fonction `experience` qui prend en entrée :
- un nombre `length`
- un nombre `limit`
- un nombre `nbRepeat`
et qui répète `nbRepeat` fois le fait de créer un nouveau tableau de `length` valeurs entre 0 et `limit`.
Cette fonction retourne le nombre de fois où il y a eu des doubles.

Exemple :
Appel de `experience(10, 100, 5)`
Premier tableau -> [53, 52, 27, 36, 22, 76, 69, 35, 25, 30] -> Pas de double
Deuxième tableau -> [15, 11, 3, 43, 86, 73, 22, 12, 59, 70] -> Pas de double
Troisième tableau -> [31, 58, 25, 70, 7, 34, 78, 70, 37, 8] -> Double
Quatrième tableau -> [91, 4, 9, 30, 25, 76, 61, 43, 44, 20] -> Pas de double
Cinquième tableau -> [94, 93, 17, 27, 24, 78, 73, 28, 18, 83] -> Pas de double
Il n'y a eu des doubles que dans un seul tableau, donc la fonction retourne 1.

5) Appeler la fonction `experience` plusieurs fois (avec une valeur assez grande de `nbRepeat`) 
pour déterminer combien de personnes faut-il réunir dans la pièce pour avoir 50% que deux d'entre elles partagent une même date d'anniversaire.
Est-ce que le résultat est cohérent avec ce que vous trouvez sur internet en cherchant "paradoxe des anniversaires" ?
*/

function random(n){
    return Math.floor(Math.random()*n);    
}
console.log(random(9));
function draft(length,limit){
    tab=[]
    for(let i=0;i<length;i++){
        tab.push(random(limit));
    }
    dp=hasDuplicates(tab);

    return [tab,dp]
}
function hasDuplicates(tab){
    for(let i=0;i<tab.length;i++){
        for(let j=i+1;j<tab.length;j++){
            if(tab[i]===tab[j]){
                return "true";
            }
        }
    }
    return "false";
}

function experience(length,limit,nbRepeat){
    compteur=0;
    // nb de doublon
    for(let i=0;i<nbRepeat;i++){
        tab=draft(length,limit);
        console.log(tab);
        if(tab[1]=="true"){
            compteur+=1;
        }
    }
    // probabilité qu'au moins deux personnes parmi n aient un jour d'anniversaire identique
    pourcentage=compteur/nbRepeat*100;
    return `Il y a eu ${compteur} doublon se qui donne un pourcentage de : ${pourcentage}%`;
}
console.log(experience(23,365,10));

/*
Le but de cet exercice est de réaliser un interpréteur du langage Brainfuck (https://fr.wikipedia.org/wiki/Brainfuck)
Ce langage se base sur quatre choses :
- le code à exécuter (une chaîne de caractères)
- une mémoire de 30 000 cases
- un pointeur qui indique quelle case de la mémoire le programme est en train de regarder.
- un deuxième pointeur qui se déplace dans le code.

1) Créer un tableau `memory` de 30 000 cases, avec des 0 dedans
TODO

2) Créer une variable `pointer` qui contient la valeur 0.
TODO

3) Créer une variable `output` qui contiendra le message éventuellement écrit par le code brainfuck.
Initialement, cette variable contient le mot vide.
TODO

4) Créer une fonction `movePointer` qui reçoit en entrée un nombre et qui décale le pointeur de ce nombre de cases.
Par exemple, si le pointeur montre la case 14, alors après l'appel `movePointer(1)`, il montrera la case 15.
Attention : si le pointeur sort du tableau, on le place de l'autre côté !
Par exemple, s'il montre initialement la case 0, après l'appel `movePointer(-1)`, il montrera la case 29999 (la dernière du tableau).
Puis après l'appel `movePointer(1)`, il montrera à nouveau la case 0.
TODO

5) Créer une fonction `changeValue` qui reçoit un nombre en entrée et qui incrémente la case mémoire désignée par le pointeur de cette valeur.
Attention : les valeurs du tableau doivent rester entre 0 et 255. Donc si une case contient 0 et qu'on lui retranche 1, elle passera à 255.
TODO

6) Créer une fonction `print` qui ajoute à `output` le contenu de la case mémoire désignée par le pointeur.
Attention : il faut d'abord convertir la valeur du tableau en caractère, grâce à la fonction `String.fromCharCode`.
TODO

7) Créer une fonction `read` qui demande un caractère à l'utilisateur, et qui insère la valeur correspondante dans la case mémoire désignée par le pointeur.
Par exemple, si l'utilisateur donne le caractère `"A"`, la case devra contenir 65. Pour connaître la valeur du caractère dans une variable `c`, on peut utiliser `c.charCodeAt(0)`.
Pour demander un caractère à l'utilisateur, on utilisera la fonction `prompt`, qui affiche une boîte de dialogue popup et retourne ce que l'utilisateur a donné.
TODO

8) Créer une fonction `searchClosing` qui reçoit un mot `s` et un nombre `pos` en entrée et qui retourne la position du `]` correspondant au `[` qui est à la position `pos`.
Attention : on suppose qu'il y a bien un "[" à la position `pos`. Le but principal n'est pas de le vérifier (mais on peut le faire si on le souhaite).
Attention 2 : il ne suffit pas de chercher le premier "]" dans le mot !
Exemples : `searchClosing("hello[test]bye", 5)` devra retourner 10. Le "]" correspondant au "[" en position 5 est à la position 10.
`searchClosing("hello[test[123]plusdifficile]", 5)` devra retourner 28.
TODO

console.log(searchClosing("hello[test]bye", 5));
console.log(searchClosing("hello[test[123]plusdifficile]", 5));

9) Même principe mais dans l'autre sens !
Exemples : `searchOpening("hello[test]bye", 10)` devra retourner 5.
`searchOpening("hello[test[123]plusdifficile]", 28)` devra retourner 5.
TODO

console.log(searchOpening("hello[test]bye", 10));
console.log(searchOpening("hello[test[123]plusdifficile]", 28));

10) Finalement, écrire une fonction `execute` qui reçoit un code brainfuck en entrée (une chaîne de caractères) et qui retourne la sortie de ce programme.
Pour ça, il faut utiliser un deuxième pointeur qui nous montre à quelle position on en est dans le code.
Ensuite, il faut répéter jusqu'à la fin du code :
- Faire l'instruction désignée par le caractère montré par le pointeur.
- Faire avancer le pointeur d'un caractère.
TODO


Hello World! de la page wikipedia
console.log(execute("++++++++++[>+++++++>++++++++++>+++>+<<<<-]>++.>+.+++++++..+++.>++.<<+++++++++++++++.>.+++.------.--------.>+.>."));

Pour aller plus loin :
- fonction reset pour pouvoir exécuter plusieurs programmes à la suite, sans garder de traces des exécutions précédentes.
- mode debug dans l'exécution pour afficher ce qu'il se passe / avancer instruction par instruction.
	- ajout d'un nouveau caractère au langage (par exemple "m"), pour afficher les 20 premières cases de la mémoire
- ajout de nouveaux caractères pour lire et écrire les valeurs numériques, pas avec la table ascii.
- ...
*/
memory=[];
for(let i=0;i<30000;i++){
    memory.push(0);
}
pointer=0;
output="vide";

function movePointer(n) {
    pointer=(pointer+n+memory.length)%memory.length;
    return pointer;
}

console.log("Vous vous trouver sur la case ;",movePointer(0
));
function changeValue(n){
    if(n<0){
        n=n%250+251
    }else if(n>250){
        n=n%250
    }
    return memory[movePointer(pointer)]=n;    
}

console.log("Change value",changeValue(1))
console.log(memory);

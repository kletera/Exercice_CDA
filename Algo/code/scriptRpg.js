// Le but de cet exercice est de simuler des combats entre des personnages
// Un personnage sera représenté par un nom, un nombre de points de vie, un nombre de points de mana, une force

// 1) Comment faire pour stocker toutes ces informations dans une seule variable ?

// 2) Créer une variable firstPlayer et stocker dedans le personnage "Nico Minoru" qui a 50 points de vie, 100 points de mana, et 10 de force.
let firstPlayer={
    nom:"Nico Minoru",
    pv:50,
    mana:100,
    force:10,
}
// 3) Créer une variable secondPlayer et stocker dedans le personnage "Spiderman" qui a 120 points de vie, 0 point de mana, et 50 de force.
let secondPlayer={
    nom:"Spiderman",
    pv:120,
    mana:0,
    force:50,
}
// 4) Donner 25 points de vie supplémentaires au premier personnage.
firstPlayer.pv+=50;

// 5) Créer une fonction displayInfo qui reçoit un personnage en entrée et qui affiche dans la console un message à propos de ce personnage (cf en dessous de la fonction).
function displayInfo(player) {
    let pluriel=(valeur)=> valeur>0 ? `s` : "";
    console.log(`${player.nom} a ${player.pv} point${pluriel(player.pv)} de vie, ${player.mana} point${pluriel(player.mana)} de mana et ${player.force} point${pluriel(player.force)} de force`);
}

// Par exemple, 
displayInfo(firstPlayer);
// devra afficher :
// Nico Minoru a 50 points de vie, 100 points de mana et 10 points de force.

// 6) Trouver l'erreur de français dans la fonction précédente (:innocent:) en la testant avec le second personnage.

// 7) Corriger la fonction pour faire disparaître cette erreur.

// https://legendary-digital-network-assets.s3.amazonaws.com/wp-content/uploads/2021/11/12201506/clean_259.jpg
// 8) Le deuxième personnage a perdu 3 de vie. Décrémenter la variable correspondante.
secondPlayer.pv-=3;
// 9) Vérifier que
displayInfo(secondPlayer);
// affiche bien : "Spiderman a 117 points de vie, 0 point de mana, et 50 de force."

// 10) Écrire une fonction directHit qui reçoit deux personnages en entrée et qui fait perdre des points de vie au second. Le nombre de points de vie perdus sera égal à la force du premier personnage.
function directHit(player1, player2) {
	player2.pv-=player1.force;
    console.log(`${player1.nom} a lancer un coup dévastateur a ${player2.nom} qui lui fait perdre ${player1.force} point de vie`)
}

// 11) Utiliser la fonction précédente pour que le second personnage tape le premier personnage.
directHit(secondPlayer, firstPlayer);
// 12) Le second personnage boit une potion de soin ! Ajouter 3 points de vie à Spiderman.
secondPlayer.pv+=3;
// 13) Le premier personnage va boire plusieurs potions.
let randomNumber = Math.floor(Math.random()*8)+2;
console.log("Nico Minoru s'apprête à boire",randomNumber,"potions de vie !");
firstPlayer.pv+=randomNumber*3;
// TODO
displayInfo(firstPlayer);

// 14) Écrire une fonction qui reçoit deux personnages A et B en entrée et qui fait lancer un sort à A pour attaquer B
// Cette fonction doit :
// - vérifier que le personnage a au moins 10 points de mana ; si ce n'est pas le cas, la fonction est terminée
// - faire perdre 10 points de mana à A
// - faire perdre 25 points de vie à B
function sort(playerA,playerB){
    if(playerA.mana>10){
        playerA.mana-=10;
        playerB.pv-=25;
        console.log(`${playerA.nom} a infliger 25dg a ${playerB.nom}.`)
    }else{
        console.log(`${playerA.nom} n'a pas asser de mana, attaque anuler.`);
    }
}
sort(firstPlayer,secondPlayer);
displayInfo(firstPlayer);
displayInfo(secondPlayer);
sort(secondPlayer,firstPlayer);
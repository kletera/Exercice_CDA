// Le but de cet exercice est de répondre à quelques questions concernant mes derniers relevés de Smarties®.

// Dans une boîte de Smarties®, il y a des bonbons de 8 couleurs différentes : rose, rouge, orange, jaune, vert, bleu, violet, marron
// Dans ma première boîte, j'ai eu 3, 6, 7, 3, 6, 2, 2 et 1 bonbons de chaque couleur, respectivement
// Comment pourrais-je stocker cette information là en js ?
console.log("En utilisant un tableau");
// Comment pourrais-je stocker toutes les informations du fichier smarties.data ?
console.log("Avec 2 variable différent 1 variable couleur pour stocker les couleur qui sont des strinf et un variable couleur pour stoker les boite de smartie qui sont composer de chiffre.")
// Maintenant que j'ai ces données :
const couleur=["rose", "rouge", "orange", "jaune", "vert", "bleu", "violet", "marron"];
const smarties = [
  [3,6,7,3,6,2,2,1],
  [2,1,12,4,2,3,4,2],
  [3,4,8,7,4,0,1,3],
  [3,4,5,4,4,3,5,1],
  [2,4,6,3,3,2,5,4],
  [3,1,9,4,3,3,1,5],
  [2,2,6,5,5,2,1,6],
  [4,6,7,3,1,1,3,4],
  [6,4,4,5,1,0,4,5],
  [3,1,3,3,4,3,4,8],
  [4,3,6,4,2,3,6,2],
  [4,7,3,2,5,2,5,1],
  [1,0,13,6,2,0,5,2],
  [5,2,1,5,6,3,3,4],
  [2,4,3,4,7,3,2,4],
  [8,6,3,2,1,2,1,5],
  [6,4,3,4,4,0,3,5],
  [6,8,2,2,4,5,2,1],
  [3,6,2,5,5,2,3,3],
  [4,5,4,1,6,4,2,3],
  [2,6,2,3,4,2,6,4],
  [3,2,5,8,2,3,4,1],
  [3,2,3,3,6,5,3,4],
  [2,1,1,3,4,3,7,8],
  [2,3,2,5,2,3,6,6],
  [1,6,6,0,5,4,2,5],
  [2,2,6,2,3,4,4,6],
  [4,6,7,2,3,3,3,1],
  [3,5,0,9,1,6,3,2],
  [3,2,5,3,3,6,3,4],
  [4,3,4,0,6,5,4,3],
  [6,4,4,2,6,2,1,4],
  [6,2,2,2,5,5,4,3],
  [2,4,4,2,6,4,3,4],
  [8,3,8,2,2,4,0,2],
  [2,3,8,2,3,2,1,8],
  [3,1,7,2,2,7,4,3],
  [2,3,7,2,3,5,4,3],
  [0,5,4,5,6,3,4,2],
  [1,3,5,1,6,6,4,3],
  [1,2,7,3,5,0,5,6],
  [3,2,7,3,6,2,5,1],
  [2,6,8,2,2,5,3,1],
  [1,1,9,3,0,7,6,2],
  [5,3,1,3,6,5,5,1],
  [3,4,8,4,1,3,1,5],
  [5,5,2,4,4,3,2,4],
  [4,6,10,2,3,1,2,1],
  [2,1,11,2,3,5,4,1],
  [4,5,1,3,3,6,2,5],
  [1,4,3,2,6,5,3,5],
  [3,6,1,4,5,4,5,1],
  [4,6,0,1,5,6,5,2],
  [5,7,1,4,4,2,6,0],
  [3,4,4,2,4,3,5,4],
  [4,4,2,3,3,5,2,6],
  [2,5,6,1,4,2,4,5],
  [6,4,7,1,4,1,4,2],
  [2,7,10,3,2,0,4,1],
  [1,5,5,6,4,1,3,4],
  [5,2,6,1,4,5,1,5],
  [1,1,11,3,1,3,3,6],
  [4,4,5,2,3,4,2,5],
  [5,4,4,4,2,4,4,2],
  [6,0,3,5,5,2,5,3],
  [9,3,2,2,4,5,2,1],
  [6,4,0,7,5,5,1,1],
  [6,3,1,7,1,9,1,1],
  [2,6,2,4,4,2,3,6],
  [2,4,0,4,5,7,4,3],
  [4,2,3,4,6,7,1,2],
  [3,7,5,2,0,5,1,6],
  [2,3,8,4,5,2,3,2],
  [5,2,9,2,1,1,5,4],
  [1,5,7,7,4,2,2,1],
  [4,6,7,3,5,1,2,1],
  [3,3,6,7,5,3,1,1],
  [1,5,1,6,3,3,5,5],
  [1,3,5,4,6,2,4,4],
  [0,6,1,4,7,1,7,3],
  [2,5,3,5,2,4,6,2],
  [7,3,2,0,4,5,5,2],
  [6,4,0,3,3,6,5,2],
  [4,9,2,6,2,3,1,2],
  [3,4,3,6,6,1,4,2],
  [5,1,3,2,6,5,3,4],
  [2,6,2,2,5,4,7,1],
  [5,1,3,2,5,2,6,4],
  [3,4,7,3,4,2,3,3],
  [5,4,10,2,3,1,2,1],
  [1,3,8,6,1,0,7,3],
  [2,3,8,0,3,2,8,3],
  [6,3,8,4,2,4,2,3],
  [2,5,1,3,5,3,7,3],
  [1,5,8,4,2,1,6,2],
  [5,3,10,3,1,3,2,2],
  [5,2,6,3,4,3,4,2],
  [4,4,5,1,5,4,5,1],
  [2,6,2,5,1,5,2,6],
  [4,9,4,5,0,0,0,7],
  [1,6,4,6,0,2,2,8],
  [3,6,3,3,2,4,6,2],
  [5,5,3,2,4,6,2,2],
  [4,2,4,5,2,5,3,4],
  [2,3,3,5,3,4,5,4],
  [3,5,2,7,1,4,4,3],
  [3,10,5,3,1,4,1,2],
  [3,2,4,5,1,4,7,3],
  [3,8,2,3,1,8,1,3],
  [2,4,5,2,3,7,5,1],
  [0,1,5,4,4,4,5,6],
  [4,5,4,3,2,6,3,2],
  [3,4,2,5,2,6,3,4],
  [3,7,2,2,2,4,4,5],
  [0,7,4,1,1,4,5,7],
  [3,3,5,6,2,2,5,3],
  [3,3,4,3,6,2,3,6],
  [6,3,1,4,4,5,4,3],
  [5,2,1,7,2,2,5,6],
  [5,3,4,5,2,1,3,5],
  [7,1,2,7,2,4,5,2],
  [2,4,3,3,5,2,5,5],
  [4,3,1,5,2,9,2,4],
  [3,6,3,6,4,0,1,6],
  [4,2,2,3,5,3,5,5],
  [4,3,1,2,4,4,7,4],
  [7,3,4,2,2,3,3,5],
  [5,3,3,1,2,5,1,8],
  [5,4,6,2,5,2,2,3],
  [5,1,2,7,2,1,5,6],
  [1,0,2,6,7,2,3,8],
  [3,2,7,2,4,3,4,4],
  [2,1,3,7,8,2,2,4],
  [3,5,4,3,7,1,3,3],
  [3,4,5,5,1,4,0,7],
  [4,6,1,3,5,3,3,4],
  [4,6,1,1,4,3,4,6],
  [8,2,2,3,4,5,4,1],
  [5,3,3,2,2,8,0,6],
  [7,5,2,5,3,2,3,2],
  [6,1,2,2,4,6,4,4],
  [4,6,4,5,3,2,4,1],
  [2,3,6,5,3,4,3,3],
  [3,5,2,3,4,5,2,3],
  [5,4,1,6,3,3,4,3],
  [6,2,4,5,2,2,4,4],
  [5,3,4,1,2,5,5,4],
  [3,1,8,4,1,3,4,5],
  [4,5,6,5,0,4,2,3],
  [4,4,1,2,3,3,9,3],
  [3,4,4,2,3,2,6,5],
  [4,6,3,4,2,2,3,5],
  [7,1,2,3,4,4,4,4],
  [3,5,1,9,2,3,3,3],
  [6,1,4,4,2,3,6,2],
  [6,1,6,4,3,3,4,2],
  [7,4,2,4,3,2,3,4],
  [2,6,2,6,4,3,4,1],
  [2,5,5,6,2,1,4,4],
  [6,3,1,3,4,4,5,3],
  [5,5,3,5,3,2,5,1],
  [7,1,3,5,4,3,2,4],
  [5,3,5,9,1,2,1,4],
  [5,7,1,7,2,4,1,2],
  [3,5,1,6,7,2,2,3],
  [1,4,0,2,4,3,7,8],
  [4,3,2,4,4,2,6,4],
  [0,5,2,3,7,4,6,2],
  [5,5,3,1,7,1,3,4],
  [3,6,1,3,5,1,7,3],
  [6,2,2,2,3,5,4,4],
  [3,4,3,3,5,1,7,3],
  [6,1,3,2,7,3,4,3],
  [7,2,2,2,4,4,3,5],
  [7,7,1,2,2,4,3,3]
];
// Combien y a-t-il de Smarties® dans chaque boîte ?
let nbMin=100;
let nbMax=0;
let totalColorBoiteAscante=0;
let nbBoite=0;
for(let i=0;i<smarties.length;i++){
    let totalBoite=0;
    for(let j=0;j<smarties[i].length;j++){
        totalBoite+=smarties[i][j];
        if(smarties[i][j]==0 && nbBoite!=smarties[i]){
            totalColorBoiteAscante+=1
            nbBoite=smarties[i];
        }
    }
    console.log(`Total de smarties dans la boite n°${i+1} : ${totalBoite}`);
    if (totalBoite < nbMin) {
        nbMin = totalBoite;
    }
    if (totalBoite > nbMax) {
        nbMax = totalBoite;
    }
}
// Quel est le nombre minimum de Smarties® dans une boîte ?
console.log("Minimum :", nbMin);
// Et le nombre maximum ?
console.log("Maximum :", nbMax);
// Combien y a-t-il de Smarties® bleus en tout ?
function boucleColor(color,n){
    let totalSmarties=0;
    let maxCoBoite=[0,0];
    let troisMax=0;
    let absenteColorB=0;
    let orangeSupremacie=0;
    for(let i=0;i<smarties.length;i++){
        let nbMaxBoite=0;
        totalSmarties+=smarties[i][n];
        if(smarties[i][n]>maxCoBoite[1]){
            maxCoBoite[1]=smarties[i][n];
            maxCoBoite[0]=smarties[i];
        }
        if(smarties[i][n]==3){
            troisMax+=1;
        }
        if(smarties[i][n]==0){
            absenteColorB+=1;
        }
        for(let j=0;j<smarties.length[i];j++){
            nbMaxBoite=smarties[i][j];            
        }
        if(smarties[i][n]==nbMaxBoite && color=='orange'){
            orangeSupremacie+=1;
        }
    }
    
    result=[color,totalSmarties,maxCoBoite,troisMax,absenteColorB,orangeSupremacie];
    return result
}
// Pour chaque couleur, compter le nombre de Smarties® de cette couleur.
let nbOne="";
let maxPresent=0;
for(let i=0;i<couleur.length;i++){
    console.log(`La couleur ${couleur[i]} a un total de ${boucleColor(couleur[i],i)[1]} Smarties®.`);
    if(boucleColor(couleur[i],i)[1]>maxPresent){
        nbOne=boucleColor(couleur[i],i)[0];
        maxPresent=boucleColor(couleur[i],i)[1];
    }
    // Quel est le nombre maximum de Smarties® d'une seule couleur, dans une boîte ?
    console.log(`Nombre maximum de Smarties® de la couleur ${couleur[i]}, dans une boîte : ${boucleColor(couleur[i],i)[2][1]} et dans la boite n°${boucleColor(couleur[i],i)[2][0]}`);

}
// Quelle est la couleur la plus présente, en tout ?
console.log(`Couleur la plus présente est le ${nbOne}`);
// Dans combien de boîtes y' a-t-il 3 Smarties® bleues ?
console.log(`Total smartis de 3 Smarties® ${couleur[5]} dans une boite : ${boucleColor(couleur[5],5)[3]}`);
// Dans combien de boîte une couleur est absente ?
console.log("Total de boîte avec au minimum une couleur est absente :",totalColorBoiteAscante);
// Dans combien de boîte les Smarties® oranges sont-ils les plus nombreux ?
console.log(`La couleur ${couleur[2]} est la plus nombreuse dans ${boucleColor(couleur[2],2)[5]} boite`)
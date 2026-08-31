// "J'ai bien lu les consignes"
/*
Examen d'algorithmique
FADDEV31-21-02
8 novembre 2021
Nom : Dalle Carbonare
Prénom : Olivier
*/

/**********************
Les différents concepts
**********************/

// Question 1
/*
Une variable, c'est un élément, une valeur ou un tableau qui peut être modifier.
On va utiliser une variable pour stocker une ou des valeur/information.
*/

// Question 2
/*
La déclaration d'une variable est mot-clée utiliser pour créer une variable.
Les mots clée pour déclarer une variable sont let, var.
 */
// Question 3
/*
Le symbole = nous sert a intégrer une valeur dans une valeur. Il peut aussi servire a la résolution d'un calcule.
*/
// Question 4
let a=5;
let b=a*2;
console.log(a+b);
// Question 5
/*
Pour echanger le contenus de deux variable nous avons beson de créer une troisieme variable qui vas nous servire d'intermédiaire entre les 2.
*/
// Question 6
/*
Une boucle c'est une formule qui va nous permettre de répéter un nombre de fois donner se qu'elle contient.
*/
// Question 7
for(let i=0;i<27;i++){
    console.log("IL ne faut pas tricher !");
}
// Question 8
/*
Le code suivant va aficher dans la console:
    J'ajoute -3
    J'ajoute -1
    J'ajoute 1
    J'ajoute 3
    Au final, a vaut : 7
*/
// Question 9
for(let i=1;i<=3;i++){
    for(let j=7;j<=9;j++){
        console.log(i+' et '+j);
    }
}
// Question 10
/*
Le mot-clé if nous sert a poser une condition ou des condition. 
*/
// Question 11
let c=42;
if(c>20){
    console.log("C'est grand !");
}else if(c==20){
    console.log("20 tout pile !");
}else{
    console.log( "C'est petit !");
}

// Question 12
/*
Une fonction c'est un conteneur auquel nous pouvons lui affecter une valeur et qui nous sert a stocker du code et aisni éviter toute répéition de code.
*/
// Question 13

// Question 14
/*
Ici on utilise la fonction aqualu car d'une part on insère des valeur dans cette fonction (a,b,c). Et d'autre part quand n appèle cette fonction elle nous renvoi le résultat d'un calcul prés déterminer.
*/
// Question 15
/*
1+2*2=5
5+3*3=14
Résulat final : 14
*/
// Question 16
/*
aquali(1,1,1) = (1+2*1)+3*1 = 3+3 = 6
aquali(2,2,2) = (2+2*2)+3*2 = 6+6 = 12
aquali(3,3,3)) = (3+2*3)+3*3 = 9+9= 18
*/
// Question 17
function f1(n){
   n=-n ;
   return n;
}
// Question 18
function f2(n1,n2){
    somme=f1(n1)+f1(n2);
    return somme;
}
// Question 19
/*
Un tableau est un conteneur qui nous permette de stocker plusieur valeur dans des case diférente.
*/
// Question 20
t=[5,9,2,3,17,0,8,20,10,5];
// Question 21
/*
Le numéro de la dernière case de t est 9.
*/
// Question 22
/*
Le numéro de la troisieme case de t est 2
*/
// Question 23
/*
Pour retirer la dernière case du tableau t on utilise la formule t.pop().   
*/
// Question 24
/*
    console.log(t.length);
*/
// Question 25
for(let i=0;i<t.length;i++){
    console.log(t[i]);
}

/****************************
TP1 - Les jours de la semaine
****************************/

// Question 26
days=["lundi", "mardi", "mercredi", "jeudi",
"vendredi", "samedi","dimanche"];
// Question 27
/*
Pour obtenir le nom du jour à partir d'un nombre, il suffit d'utiliser ce nombre comme index du tableau. En utilisant la formule days[index].
*/
// Question 28
function nameOfDay(n) { 
    return days[n%days.length];
}
console.log("Question 28",nameOfDay(3));

// Question 29
/*
- 2010 n'est pas un bissextile car elle n'est ni multiple de 400, ni multiple de 4. 
- 2021 n'est pas un bissextile car elle n'est ni multiple de 400, ni multiple de 4. 
*/
// Question 30
function isLeapYear(year) {
    let bissextile=false;
    if(year%4==0 && year%100!=0 || year%400==0){
        bissextile=true;
    }
    return bissextile
}
console.log("Question 30-1",isLeapYear(2021));
console.log("Question 30-2",isLeapYear(2020));
console.log("Question 30-3",isLeapYear(2000));
console.log("Question 30-4",isLeapYear(1900));

// Question 31
function nbOfDaysBetweenYears(year1,year2) {
    nbDays=0;
    while(year1<=year2){
        if(isLeapYear(year1)){
            nbDays+=366;
        }else{
            nbDays+=365;
        }
        year1+=1;
    }
    return nbDays;
}
console.log("Question 31-1",nbOfDaysBetweenYears(2021,2021));
console.log("Question 31-2",nbOfDaysBetweenYears(2020,2021));
console.log("Question 31-3",nbOfDaysBetweenYears(2000,2021));

// Question 32
function nbOfDaysInYear(year) {
    let tabl=[31,29,31,30,31,30,31,31,30,31,30,31];
    for(let i=0;i<12;i++){
        if(i==1){
            tabl[i]=isLeapYear(year)? 29 :28;
        }
    }
    return tabl;
}
console.log("Question 32",nbOfDaysInYear(2021));

// Question 33
let tablMonth=["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];
function numOfMonth(month) {
    for(let i=0; i<tablMonth.length;i++){
        if(month==tablMonth[i]){
            return i;
        }
    }
}
console.log("Question 33",numOfMonth("novembre"));

// Question 34
console.log(`Depuis le 1er janvier jusqu'au 8 novembre 2021 il c'est écoulé ${numOfMonth("novembre")-numOfMonth("janvier")} mois`);
// Question 35
function nbOfDayElapsed(year,month1,month2){
    let daysElapsed=0;
    let tablyear=nbOfDaysInYear(year);
    for(let i=numOfMonth(month1);i<numOfMonth(month2) ;i++){
        daysElapsed+=tablyear[i];
    }
    return daysElapsed;
}
console.log("Question 35",nbOfDayElapsed(2021,"janvier","novembre"));
// Question 36
function nbOfDaysSinceNewYear(day,month,year) {
    let daysElapsed=0;
    tablyear=nbOfDaysInYear(year);
    for(let i=0;i<numOfMonth(month) ;i++){
        daysElapsed+=tablyear[i];
    }
    daysElapsed+=day;
    return daysElapsed;
}
console.log("Question 36",nbOfDaysSinceNewYear(8,"novembre",2021));

// Question 37
function nbOfDaysBetween(year1,day,month,year2){
    if(year1===year2){
        return nbOfDaysSinceNewYear(day,month,year2);
    }else{
        let totalDay=0;
        totalDay+=nbOfDaysBetweenYears(year1,year2-1);
        totalDay+=nbOfDaysSinceNewYear(day, month, year2);
        
        return totalDay;
    }
}
console.log("Question 37-1",nbOfDaysBetween(1912,23,"juin",1912));
console.log("Question 37-2",nbOfDaysBetween(1912,31,"décembre",2020));
console.log("Question 37-3",nbOfDaysBetween(2021,8,"novembre",2021));
// Question 38
console.log("Question 38",nbOfDaysBetween(1912,8,"novembre",2021)-nbOfDaysSinceNewYear(23,"juin",1912));
// Question 39
console.log("Question 39", nameOfDay(nbOfDaysBetween(1912,8,"novembre",2021)-nbOfDaysSinceNewYear(23,"juin",1912)+6));
// Question 40
function dayOfTheWeek(day,month,year) {
    let diff=nbOfDaysBetween(1912,day,month,year)-nbOfDaysSinceNewYear(23,"juin",1912)
    return nameOfDay(diff+6);
}
console.log("Question 40",dayOfTheWeek(8,"novembre",2021));

/*********************
TP2 - Le jeu de la vie
*********************/

// Question 41
grille=[
    
]
// Question 42

// Question 43

// Question 44

// Question 45

// Question 46

// Question 47
function lineToString() {}

// Question 48
function displayGrid() {}

// Question 49
function createEmptyArray() {}

// Question 50
function createEmptyGrid() {}

// Question 51
function evolution() {}

// Question 52

// Question 53
function drawGrid() {}

// Question 54
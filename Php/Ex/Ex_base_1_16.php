<?php
// Exercice 1 :
echo "Bonjour le monde !
Bienvenue dans le cours PHP. \n";

// Exercice 2 - Les variables :
$prénom="Mathieu";
$nom="Mithridate";
$âge=35;
$ville="Limoges";

echo "Je m'appelle $prénom $nom.\nJ'ai $âge ans.\nJ'habite à $ville.";

// Exercice 3 :
const PI = 3.14159;
const TVA = 20;
echo "\n";
echo "Valeur de PI : ".PI."\nTVA : ".TVA."%\n";

// Exercice 4 :
$ht=10;
$nb=5;
$tva=20;
echo "Prix HT : $ht €\nNombre d'articles : $nb\nTVA : $tva %\n";
$ttc=$ht*$nb*(1+$tva/100);
echo "Prix TTC : $ttc €\n";

// Exercice 5 - Lecture clavier :
$name=readline("Quel est votre nom ? ");
echo "Bonjour $name !\n";

// Exercice 6 - Calcul de l'âge
$age_now=readline("Quel âge avez-vous ?");
echo "Vous avez $age_now ans.\n";
echo "L'année prochaine vous aurez ".($age_now+1)." ans.\n";

// Exercice 7 - Pair ou impair (condition if else)
$number=readline("Entrer un nombre :");
if($number%2==0){
    echo "le nombre est pair.\n";
}else{
    echo "le nombre est impair.\n";
}

// Exercice 8 - Majeur ou mineur
$mj_mi=readline("Quel est votre âge ?");
if(is_numeric($mj_mi)){
    echo ($mj_mi>=18 ? "Vous êtes majeur.\n" : "Vous êtes mineur.\n");
}else{
    echo "Annuler ce n'est pas un nombre.\n";
}

// Exercice 9 - Comparaison
$nb1=readline("Entrer un nombre :");
$nb2=readline("Entrer un autre nombre :");
if(is_numeric($nb1) && is_numeric($nb2)){
    if($nb1>$nb2){
        echo "Le premier nombre est plus grand.\n";
    }elseif($nb1<$nb2){
        echo "Le deuxième nombre est plus grand.\n";
    }else{
        echo "Les deux nombres sont égaux.\n";
    }
}else echo "Annuler ce ne sont pas des nombres.\n";

// Exercice 10 - Température :
$temperature=readline("Entrer la température :");
if($temperature<0)echo "Il gèle.\n";
elseif($temperature<=15)echo "Il fait froid.\n";
elseif($temperature<=25)echo "Il fait bon.\n";
else echo "il fait chaud.\n";

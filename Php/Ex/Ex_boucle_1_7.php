<?php
// Exercice 1 boucle :
echo "Exercice 1 boucle :\n";
$cpt = 1;
while($cpt<=10) echo $cpt++ . "\n";

// Exercice 2 boucles– Compte à rebours:
echo "\nExercice 2 boucles– Compte à rebours\n";
$nb=20;
while($nb>=0) {
    echo $nb-- . "\n";
    if($nb==0) echo "Décollage !\n";
}

// Exercice 3 boucle – Boucle do...while: 
echo "\nExercice 3 boucle – Boucle do...while: \n";    
do{
    $pw=readline("Entrez le mot de passe : ");   
}while($pw!=="php2026");
echo "Connexion réussie.";
        
// Exercice 4 boucle– Première boucle for
echo "\nExercice 4 boucle– Première boucle for\n";
for ($i=1; $i <= 10; $i++) { 
    echo "7 * ".$i." = ".(7*$i)."\n";
}

// Exercice 5 boucle – Somme des nombres: 
echo "\Exercice 5 boucle – Somme des nombres:\n";
$somme=0;
for ($i=1; $i <= 100; $i++) { 
    $somme+=$i;
}
echo "La somme est :".$somme."\n";

// Exercice 6 boucle – Nombres pairs:
echo "\nExercice 6 boucle – Nombres pairs:\n";
for ($i=0; $i <=50 ; $i++) { 
    if($i%2)echo ($i+1)."\n";
}

// Exercice 7 boucle – Triangle d'étoiles :
echo "\nExercice 7 boucle – Triangle d'étoiles :\n";
for ($i=1; $i <= 5; $i++) { 
    $star="";
    for ($j=0; $j < $i; $j++) {
        $star.="*";
    }
    echo $star."\n";
}


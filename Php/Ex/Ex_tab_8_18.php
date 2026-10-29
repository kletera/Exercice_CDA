<?php
// Exercice 8 – Tableau indexé :
echo "\nExercice 8 – Tableau indexé :\n";
$fruits = [
    "Pomme",
    "Poire",
    "Banane",
    "Orange",
    "Kiwi"
];
echo $fruits[0]."\n";
echo $fruits[5]."\n";
echo count($fruits)."\n";
for ($i=0; $i < count($fruits); $i++) { 
    echo $fruits[$i]."\n";
}

// Exercice 9 – Tableau de notes :
echo "\nExercice 9 – Tableau de notes :\n";
$notes = [12, 15, 8, 19, 17];
$somme=0;
for ($i=0; $i < count($notes) ; $i++) { 
    $somme+=$notes[$i];
}
echo "Somme :".$somme."\n";
echo "Moyenne : ".$somme/count($notes)."\n";

// Exercice 10 – Tableau associatif :
echo "\nExercice 10 – Tableau associatif :\n";
$personne = [
    "firstname" => "Alice",
    "lastname" => "Martin",
    "age" => 28,
    "city" => "Bordeaux"
];
echo 
"Prénom : ".$personne["firstname"]."
Nom : ".$personne["lastname"]."
Âge : ".$personne["age"]." ans
Ville : ".$personne["city"];

// Exercice 11 – foreach :
echo "\nExercice 11 – foreach :\n";
$fruits = [
    "Pomme",
    "Poire",
    "Banane",
    "Orange",
    "Kiwi"
];
foreach ($fruits as $value) {
    echo "J'aime les ".strtolower($value).".\n";
}

// Exercice 12 – Parcourir un tableau associatif:
echo "\nExercice 12 – Parcourir un tableau associatif:\n";
$personne = [
    "firstname" => "Alice",
    "lastname" => "Martin",
    "age" => 28,
    "city" => "Bordeaux"
];
foreach ($personne as $key => $value) {
    echo $key." : ".$value."\n";
}

//  Exercice 13 :
echo "\nExercice 13 :\n";
$tab = [12,3,22,6,47,89,1,187,2,26,44,22,47,1];
function plus_grand(array $tabl):void{
    $max=0;
    for ($i=0; $i < count($tabl); $i++) { 
        if($max<$tabl[$i])$max=$tabl[$i];
    }
    echo "Valleur la plus grande du tableau est :".$max. "\n";
}
plus_grand($tab);

// Exercice 14 :
echo "\nExercice 14 :\n";
function moyenne(array $tabl):void{
    $somme=$tabl[0];
    foreach ($tabl as $value) {
        $somme+=$value;
    }
    echo "La moyenne du tableau est de : ".$somme/(count($tabl))."\n";
}
moyenne($tab);

// Exercice 15 :
echo "\nExercice 15 :\n";
function plus_petite(array $tabl):void{
    $min=$tabl[0];
    $a=0;
    while ($a < count($tabl)) {
        if($min>$tabl[$a])$min=$tabl[$a];
        $a++;
    }
    echo "La valleur la plus petite du tableau est : ".$min."\n";
}

plus_petite($tab);

// Exercice 16 : 
echo "\nExercice 16 :\n";


function guess(int $answer): string{
    $tentative=10;
    $guess=(int)readline("Deviner un nombre entre 1 et 100 : ");
    // if(is_numeric($guess))$guess=(int)readline("Ce n'est pas un chffre recommencer deviner un nombre entre 1 et 100  : ");
    while($tentative>0){
        if($guess==$answer){
            return  "Bravo vous avez réussi en : ".$tentative."tentative\n";
        }else{
            echo ($answer>$guess ? "Perdu la réponse est plus grand que ".$guess."\n" : "Perdu la réponse est plus petit que ".$guess."\n");
            echo "Il vous reste ".$tentative." tentative\n";
            $guess=(int)readline("Deviner un nouveau nombre entre 1 et 100 : ");
        // if(is_numeric($guess)) $guess=(int)readline("Ce n'est pas un chffre recommencer deviner un nombre entre 1 et 100 : ");
        }     
        $tentative--;
    }
    return "Domage vous avez échouer a deviner le nombre qui était : ".$answer."\n";
        
}

echo guess(random_int(1,100));

// Exercice 17 – Mini inventaire :
echo "\nExercice 17 – Mini inventaire :\n"; 
$products = [
    [
        "name" => "Clavier",
        "price" => 49.99,
        "stock" => 12
    ],
    [
        "name" => "Souris",
        "price" => 19.90,
        "stock" => 0
    ],
    [
        "name" => "Écran",
        "price" => 189.00,
        "stock" => 5
    ]
];

foreach ($products as $value) {
    echo $value['name']." - ".$value['price']."€ - ".($value['stock']>0 ? "En stock" : "Rupture") ."\n";
}

// Exercice 18– Panier d'achat :
echo "\nExercice 18– Panier d'achat :\n"; 
$total_stock=0;
foreach ($products as $value) {
    $total_stock+=($value['stock']>0 ? $value['price']*$value['stock'] : 0);
}
echo "Valeur total du stock :".$total_stock."€\n";

<?php
// Exercice 1 - Les quatre opérations :
echo "Exercice 1 - Les quatre opérations :\n";
function addition(int $a, int $b):int{
    return $a+$b;
}
function soustraction(int $a, int $b): int{
    return $a-$b;
}
function multiplication(int $a, int $b): int{
    return $a*$b;
}
function division(float $a, float $b): float | string | int{
    if($b==0 || $a==0)return "Erreur : division par zéro.\n";
    return round($a/$b, 2);
}

echo "Addition : " . addition(5, 3) . "\n";
echo "Soustraction : " . soustraction(5, 3) . "\n";
echo "Multiplication : " . multiplication(5, 3) . "\n";
echo "Division : " . division(5, 3) . "\n";
echo "Division : " . division(0, 3) . "\n";

// Exercice 2 - Calcul de TVA :
echo "\nExercice 2 - Calcul de TVA :\n";
const TVA = 20;
function calculTTC(float $prixHT): float{
    return $prixHT*(1+TVA/100);
}
echo "Prix TTC pour 100€ HT : " . calculTTC(100) . "€\n";

// Exercice 3 - Être majeur :
echo "\nExercice 3 - Être majeur :\n";
function estMajeur(int $age): bool{
    return $age >= 18;
}
$age = (int)readline("Quel est votre âge ? ");
if(is_numeric($age)){
    echo (estMajeur($age) ? "Vous êtes majeur.\n" : "Vous êtes mineur.\n");
} else {
    echo "Veuillez entrer un âge valide.\n";
}

// Exercice 4 - Initiales :
echo "\nExercice 4 - Initiales :\n";
function initiales(string $prenom, string $nom): string{
    return strtoupper($prenom[0].$nom[0]);
}
echo "Initiales : " . initiales("Jean", "Dupont") . "\n";

// Exercice 5 - Nom formaté :
echo "\nExercice 5 - Nom formaté :\n";
function formatterNom(string $prenom, string $nom): string{
    return ucfirst(strtolower($prenom))." ".strtoupper($nom);
}

$prenom = readline("Entrez votre prénom : ");
$nom = readline("Entrez votre nom : ");
echo "Nom formaté : ".formatterNom($prenom, $nom)."\n";


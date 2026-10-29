<?php
// Exercice 17 - Longueur d'un prénom :
echo "Exercice 17 - Longueur d'un prénom :\n";
$prenom=readline("Entrer un prénom :");
echo "Votre prénom contient ".strlen($prenom)." caractères.\n";

// Exercice 18 - Nom en majuscules :
echo "\nExercice 18 - Nom en majuscules :\n";
$user_prenom=readline("Entrer un prénom :");
$user_nom=readline("Entrer un nom :");
echo $user_prenom." ".strtoupper($user_nom)."\n";

// Exercice 19 - Adresse mail :
echo "\nExercice 19 - Adresse mail :\n";
$email=readline("Entrer une adresse email :");
echo (str_contains($email, "@") ? "Adresse valide\n" : "Adresse invalide\n");

// Exercice 20 - Mot de passe:
echo "\nExercice 20 - Mot de passe :\n";
const PASSWORD = "php2026";
$pw=readline("Entrer votre mot de passe :");
echo ($pw===PASSWORD ? "Connexion réussie\n" : "Connexion refusée\n");

// Exercice 21 - Nettoyage d'une saisie :
echo "\nExercice 21 - Nettoyage d'une saisie :\n";
$pr=readline("Entrer un prénom :");
$sanitize_pr=trim($pr);
echo "Bonjour prénom nettoyé : $sanitize_pr\n";

// Exercice 22 - Initiales :
echo "\nExercice 22 - Initiales :\n";
$first_name=readline("Entrer un prénom :");
$last_name=readline("Entrer un nom :");

$initial=substr($first_name,0,1).".".substr($last_name,0,1);

echo "Vos initiales sont : $initial\n";

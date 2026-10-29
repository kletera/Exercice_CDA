<?php
// Exercice 23 :
echo "Exercice 23 - Tableau associatif :\n";
$date=date("d/m/Y");
echo "Nous sommes le $date.\n";

// Exercice 24- Calcul d'âge :
echo "\nExercice 24 - Calcul d'âge :\n";
$birth=readline("quel est votre année de naissance ?");
$date=date('Y');
$age=$date-$birth;
echo "Vous avez environ $age ans.\n";

// Exercice 25 - Heure actuelle :
echo "\nExercice 25 - Heure actuelle :\n";
date_default_timezone_set('Europe/Paris');
$time=date("H:i");
echo "Il est actuellement $time.\n";

// Exercice 26 - Date d'anniversaire :
echo "\nExercice 26 - Date d'anniversaire :\n";
$birth_date=readline("Entrer votre la date de naissance au format JJ/MM/AAAA :");
$jours = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
$timestamp = mktime(0, 0, 0, substr($birth_date, 3, 2), substr($birth_date, 0, 2), substr($birth_date, 6, 4));
$day_birth=$jours[date('w', $timestamp)];
echo "Vous êtes né le $day_birth.\n";
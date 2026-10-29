<?php
// Exercice 19 – Tableau utilisateur :
echo "\nExercice 19 – Tableau utilisateur :\n"; 
$users = [
    [
        "firstname" => "Alice",
        "lastname" => "Martin",
        "age" => 25
    ],
    [
        "firstname" => "Lucas",
        "lastname" => "Petit",
        "age" => 17
    ],
    [
        "firstname" => "Emma",
        "lastname" => "Durand",
        "age" => 32
    ]
];

foreach ($users as $key => $utilisateur) {
    echo $utilisateur['firstname']." ".$utilisateur['lastname']. " est ".($utilisateur['age']>17 ? 'majeur' : 'mineur')."\n";
}

// Exercice 20 :

$notes=[];
function prof(int $nbrNotes){
    $maxNote = [];
    $minNote = [];

    for ($i=0; $i < $nbrNotes; $i++) { 
        $prenom =readline("Prénom de l'élève ? ");
        $note=(int) readline("Note de l'élève (0-20) ? ");
        $eleve = ["prenom" => $prenom, "note" => $note];
        $notes[] = $eleve;

        if ( empty($maxNote) || $note > $maxNote["note"]) {
            $maxNote = $eleve;
        }
        if (empty($minNote) || $note < $minNote["note"]) {
            $minNote = $eleve;
        }
    }
    echo "L'élève avec la note la plus haute : " . $maxNote["prenom"] . " avec une note de " . $maxNote["note"] . "/20\n";
    echo "L'élève avec la note la plus basse : " . $minNote["prenom"] . " avec une note de " . $minNote["note"] . "/20\n";
}
prof(2);
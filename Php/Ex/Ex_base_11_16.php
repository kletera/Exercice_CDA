<?php
// Exercice 11 - Mini questionnaire :
echo "Exercice 11 - Mini questionnaire :\n";
$user_first_name=readline("Quel est votre prénom ?");
$user_last_name=readline("Quel est votre nom ?");
$user_age=readline("Quel âge avez-vous ?");
$user_city=readline("Ou habitez-vous ?");
echo 
"-------------------------
Fiche utilisateur
-------------------------

Nom : $user_last_name
Prénom : $user_first_name
Age : $user_age ans
Ville : $user_city \n";

// Exercice 12 - Deviner le nombre :
echo "\nExercice 12 - Deviner le nombre :\n";
$secret=8;
$guess=readline("Devinez le nombre secret (entre 1 et 10) :");
echo ($guess==$secret ?  "- Bravo !\n" :  "- Perdu\n");

// Exercice 13 - Calculatrice : 
echo "\nExercice 13 - Calculatrice :\n";
$num1=readline("Entrer un nombre :");
$op=readline("Enter un opérateur");
$num2=readline("Entrer un autre nombre :");
if($op=="/" && $num2==0 || $op=="/" && $num1==0){
    echo "Division par zéro impossible.\n";
}else{
    switch($op){
        case "+":
            echo "Résultat de l'addition: ".($num1+$num2)."\n";
            break;
        case "-":
            echo "Résultat de la soustraction: ".($num1-$num2)."\n";
            break;
        case "*":
            echo "Résultat de la multiplication: ".($num1*$num2)."\n";
            break;
        case "/":
            echo "Résultat de la division: ".($num1/$num2)."\n";
            break;
        default:
            echo "Opérateur innexistant.\n";
            break;
    }
}

// Exercice 14 - Bulletin de notes :
echo "\nExercice 14 - Bulletin de notes :\n";
$note1=readline("Entrer la première note :");
$note2=readline("Entrer la deuxième note :");
$note3=readline("Entrer la troisième note :");

function admis(int $note): string{
    if($note<10){
        return "échec \n";
    }else if($note<12){
        return "Passable \n";
    }elseif($note<14){
        return "Assez Bien \n";
    }elseif($note<16){
        return "Bien \n";
    }elseif($note>=16){
        return "Très Bien \n";
    }else{
        return "Note Invalide \n";
    }
}

echo admis($note1);
echo admis($note2);
echo admis($note3);

$moyenne=($note1+$note2+$note3)/3;
echo "Moyenne : $moyenne\n";

// Exercice 15 - plus grand :
echo "\nExercice 15 - Plus grand :\n";
$nombre1=readline("Entrer le premier nombre :");
$nombre2=readline("Entrer le deuxième nombre :");
$nombre3=readline("Entrer le troisième nombre :");
$nombre4=readline("Entrer le quatrième nombre :");
$nombre5=readline("Entrer le cinquième nombre :");
function plusGrand(int $n1,int $n2,int $n3,int $n4,int $n5){
    echo "1er nombre : $n1
    2ème nombre : $n2
    3ème nombre : $n3
    4ème nombre : $n4
    5ème nombre : $n5\n";

    
    if($n1==$n2 && $n1==$n3 && $n1==$n4 && $n1==$n5){
        echo "Tous les nombres sont égaux.\n";
    }else{
       if($n1>$n2 && $n1>$n3 && $n1>$n4 && $n1>$n5){
        echo "Le plus grand nombre est : $n1\n";
        }else if($n2>$n3 && $n2>$n4 && $n2>$n5){
            echo "Le plus grand nombre est : $n2\n";
        }else if($n3>$n4 && $n3>$n5){
            echo "Le plus grand nombre est : $n3\n";
        }else if($n4>$n5){
            echo "Le plus grand nombre est : $n4\n";
        }else{
            echo "Le plus grand nombre est : $n5\n";
        }     
    }
}
plusGrand($nombre1,$nombre2,$nombre3,$nombre4,$nombre5);

// Exercice 16 - plus petit :
echo "\nExercice 16 - Plus petit :\n";
$nb1=readline("Entrer le premier nombre :");
$nb2=readline("Entrer le deuxième nombre :");
$nb3=readline("Entrer le troisième nombre :");
$nb4=readline("Entrer le quatrième nombre :");
$nb5=readline("Entrer le cinquième nombre :");

function plusPetit(int $n1,int $n2,int $n3,int $n4,int $n5){
    echo "1er nombre : $n1
    2ème nombre : $n2
    3ème nombre : $n3
    4ème nombre : $n4
    5ème nombre : $n5\n";

    
    if($n1==$n2 && $n1==$n3 && $n1==$n4 && $n1==$n5){
        echo "Tous les nombres sont égaux.\n";
    }else{
       if($n1<$n2 && $n1<$n3 && $n1<$n4 && $n1<$n5){
        echo "Le plus petit nombre est : $n1\n";
        }else if($n2<$n3 && $n2<$n4 && $n2<$n5){
            echo "Le plus petit nombre est : $n2\n";
        }else if($n3<$n4 && $n3<$n5){
            echo "Le plus petit nombre est : $n3\n";
        }else if($n4<$n5){
            echo "Le plus petit nombre est : $n4\n";
        }else{
            echo "Le plus petit nombre est : $n5\n";
        }     
    }
}
plusPetit($nb1,$nb2,$nb3,$nb4,$nb5);






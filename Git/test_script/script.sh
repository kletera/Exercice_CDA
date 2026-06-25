#!/bin/bash
echo 'Ou stocker le contenu dans /Documents/CDA/Git/test_script/:'
read EMPLACEMENT
cd ~/Documents/CDA/Git/test_script/
if [ ! -d ./$EMPLACEMENT ]
    then
        cd ~/Documents/CDA/Git/test_script/$EMPLACEMENT/
    else
        echo "le projet existe déjà voulez-vous créer un nouveau dossier Y/N:"
        read yn
        if [ "$yn" == "Y" ] || [ "$yn" == "y" ]
            then
            echo 'Quel est le nom de ce projet :'
            read PROJET
            mkdir $PROJET
            cd ~/Documents/CDA/Git/test_script/$PROJET/
            else
            echo 'fin'
            exit
        fi
fi

if [ -f 'collection.txt' ]
then
    echo "la collection existe déjà"
else
    touch collection.txt
fi
echo 'Quel est le nom du film que vous voulez ajouter :'
read FILM
echo $FILM > collection.txt
while true;
do
    echo 'Voulez-vous rajouter un autre film Y (oui) / N (non)'
    read CONDITION
    if [ "$CONDITION" == "Y" ] || [ "$CONDITION" == "y" ]
        then 
            echo 'Quel est le nom du film que vous voulez ajouter :'
            read FILM2
            echo $FILM2 >> collection.txt
        else
            echo 'On n'ajoute pas de film' 
            break
    fi
done
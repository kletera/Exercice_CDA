<?php
    if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $note=$_POST['note'];
        $text=$_POST['text'];
        $ckeck=$_POST['check'];
        $mesg="";
        if(!empty($nom) && !empty($note)){
            if(is_numeric($note)){
                if($note < 1 || $note > 5){
                    $mesg=$mesg.'<li>La note doit être comprise entre 1 et 5</li>';
                }
            }else{
                $mesg=$mesg."<li>La note doit être un chiffre compris entre 1 et 5</li>";
            }

            if(!$ckeck){
                $mesg=$mesg."<li>Les condition d'utilisation doit etre valider.</li>";
            }

            if(strlen($text)>500){
                $mesg=$mesg."<li>Le commentaire doit être en dessous de 500 caractères</li>";
            }

            if($mesg==""){
                $mesg="<li>Nom : ".htmlspecialchars($nom)."</li>
                <li>Note : ".htmlspecialchars($note)."</li>
                <li>Commentaire : ".htmlspecialchars($text)."</li>
                <li>Condition de validition : ".htmlspecialchars($ckeck)."</li>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="flex-direction:column; display: flex; width:500px; gap: 10px;">
        <input type="text" name="nom" id="" placeholder="Nom du participant " >
        <input type="text" name="note" id="" placeholder="Note comprise entre 1 et 5" >
        <textarea name="text" id="" placeholder="Commentaire facultatif"></textarea>
        <div style="display: flex;">
            <input type="checkbox" name="check" id="" >
            <label for="check">Accepter les conditions d'utilisation (obligatoire)</label>
        </div>
        <input type="submit" value="submit" name="submit">
        <ul>
            <?= $mesg ?? "" ?>
        </ul>
    </form>
</body>
</html>
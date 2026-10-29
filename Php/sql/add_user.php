<?php

include_once 'database.php';
//1 tester si le formulaire est soumis

if(isset($_POST['submit'])){
    $answerTr=traitement();
    if($answerTr['valid']){
        if(!select($answerTr)){
            $msg=add($answerTr);
        }else{
            $msg="Erreur email déja utiliser";
        }
    }else{
        $msg=$answerTr['message'];
    }
}

//2 tester si les champs sont remplis
//3 nettoyer les données (trim, strip_tag)
//4 valider le format des données

function traitement():array{
    $msg="";
    // $regex="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    if(!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $nom=strip_tags(trim($_POST['lastname']));
        $prenom=strip_tags(trim($_POST['firstname']));
        $email=strip_tags(trim($_POST['email']));
        $pw=strip_tags(trim($_POST['password']));
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg=$msg."Saisir un email valide";
        }

        if($msg==""){
            return [
                'valid' => true,
                'message' => $msg,
                'data' => [
                    'nom'=> $nom,
                    'prenom' => $prenom,
                    'email'=> $email,
                    'pw'=> $pw,
                ],
            ];
        }

        return [
            'valid' => false,
            'message' => $msg, 
        ];
    }else{
        return [
            'valid' => false,
            'message' => "Veuillez renseigner tous les champs ", 
        ];
    }
}

//requête de consultation (si le compte existe déja)
//5 ecrire la requête
//6 se connecter à la BDD
//7 préparer la requête
//8 assigner les paramètres
//9 éxécuter la requête
//10 récupérer le résultat (fetch)
//10 vérifier le resultat

function select(array $tabl) : bool | array{
    $email=$tabl['data']['email'];
    try{
        $sql = "SELECT u.id_user AS id  FROM `user` AS u
        WHERE u.email = ?";
        $bdd = connect_bdd();
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue(1,$email,PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetch();
        return $users;
    }catch(PDOException $e){
       echo $e->getMessage();
       return true;
    }
}

//ajout en BDD si il n'existe pas
//11 ecrire la requête (INSERT)
//12 se connecter à la BDD
//13 préparer la requête
//14 assigner les paramètres
//15 exécution de la requête
//16 récupérer l'ID de l'enregistrement
function add(array $tabl):string{
    try{
        $prenom=$tabl['data']['prenom'];
        $nom=$tabl['data']['nom'];
        $email=$tabl['data']['email'];
        $pw=$tabl['data']['pw'];
        $sql="INSERT INTO `user`(firstname, lastname, email, hash_password) VALUES (?,?,?,?)";
        $bdd = connect_bdd();
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue(1,$prenom,PDO::PARAM_STR);
        $stmt->bindValue(2,$nom,PDO::PARAM_STR);
        $stmt->bindValue(3,$email,PDO::PARAM_STR);
        $stmt->bindValue(4,$pw,PDO::PARAM_STR);
        $stmt->execute();
        return "Enregistrement de l'utilisateur $nom $prenom réussi";
    }catch(PDOException $e){
        return $e->getMessage();
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="prénom">
        <input type="text" name="lastname" placeholder="nom">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="ajouter" name="submit">
    </form>
    <p><?= $msg ?? "" ?></p>
</body>
</html>
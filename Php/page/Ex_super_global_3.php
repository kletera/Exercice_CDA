<?php
const email= "admin@test.com";
const password = "php2026";

if(isset($_POST['submit'])){
    $em=$_POST['email'];
    $pw=$_POST['password'];
    if(!empty($em) && !empty($pw)){
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)){
           $msg="Erreur email pas au bon format \n";    
        }
        if ($em!=email) {
            $msg="Erreur email ou mot de passe incorecte"; 
        } elseif ($pw!=password) {
           $msg="Erreur email ou mot de passe incorecte";
        }else{
            $msg="Connexion réussite"; 
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
    <form action="" method="post">
        <input type="email" name="email" id="" placeholder="email@test.com">
        <input type="password" name="password" id="" placeholder="password">
        <input type="submit" value="connexion" name="submit">
        <p><?= $msg ?? "" ?></p>
    </form>
</body>
</html>
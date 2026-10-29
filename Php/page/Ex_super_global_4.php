<?php
    if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $pw=$_POST['password'];
        $cfPw=$_POST['confirmPassword'];
        $date=$_POST['date'];
        $msg="";
        if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($pw) && !empty($cfPw) && !empty($date)) {
            if(strlen($nom)<2 || strlen($prenom)<2)$msg=$msg."<li>Le nom et le prénom doivent contenir au moins deux caractères </li>";

            if(!filter_var($email, FILTER_VALIDATE_EMAIL))$msg=$msg."<li>Adresse email dans ce format email@test.com</li>";
            
            if(strlen($pw)<8)$msg=$msg."<li>Le mot de passe doit contenir au moins huit caractères</li>";

            if(!preg_match('/[A-Z]/', $pw)) $msg=$msg."<li>Le mot de passe dois contenir au moin une lettre majuscule  </li>";

            if(!preg_match('/[a-z]/', $pw)) $msg=$msg."<li>Le mot de passe dois contenir au moins une lettre minuscule </li>";

            if(!preg_match('/[0-9]/', $pw)) $msg=$msg."<li>Le mot de passe dois contenir au moins un chiffre </li>";

            if($pw != $cfPw)$msg=$msg."<li>Les deux mots de passe doivent être identiques</li>";
    
            date_default_timezone_set('Europe/Paris');
            $birth =new DateTime($date);
            $today = new DateTime('today');
            $age = $birth->diff($today)->y;
            if($age<17)$msg=$msg."<li>L’utilisateur doit avoir au moins 18 ans </li>";

            if($msg==""){
                $msg="Inscription réussite";
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
        <input type="text" name="nom" id="" placeholder="Nom">
        <input type="text" name="prenom" id="" placeholder="Prénom">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Mot de passe">
        <input type="password" name="confirmPassword" id="" placeholder="Confirmation du mot de passe">
        <input type="date" name="date" id="">
        <input type="submit" value="s'inscrire" name="submit">
    </form>
    <ul>
        <?= $msg ?? "" ?>

    </ul>
</body>
</html>
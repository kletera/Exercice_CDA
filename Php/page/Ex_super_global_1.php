<?php
if(isset($_POST["submit"])) {
    if($_POST['ht']!=='' && $_POST['quantiter']!=='' && $_POST['TVA']!=''){
        if(is_numeric($_POST['ht']) && is_numeric($_POST['quantiter']) && is_numeric($_POST['TVA'])){
            $ttc=$_POST['ht']*(1+$_POST['TVA']/100)*$_POST['quantiter'];
            $msg=htmlspecialchars("Le prix TTC est égal à : ".$ttc." €.");
        }else{
            $msg="Erreur veuiller saisir des nombre";
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
        <input type="number" name="ht" id="" placeholder="Saississer le prix HT">
        <input type="number" name="quantiter" id="" placeholder="Saisisser la quantiter">
        <input type="number" name="TVA" id="" placeholder="Saisisser la TVA">
        <input type="submit" value="Calculer" name="submit">
        <p><?=$msg ?? "" ?></p>
    </form>
</body>
</html>


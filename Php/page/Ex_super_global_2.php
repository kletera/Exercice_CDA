<?php
    if(isset($_POST['submit'])){
        $nb1=$_POST['nbr1'];
        $nb2=$_POST['nbr2'];
        $op=$_POST['operateur'];
        if(!empty($nb1) && !empty($nb2) && !empty($op)){
            switch ($op) {
                case 'add':
                    $message=$nb1." + ".$nb2." = ".$nb1+$nb2;
                    break;
                case 'sous':
                    $message=$nb1." - ".$nb2." = ".$nb1-$nb2;
                    break;
                case 'multi':
                    $message=$nb1." * ".$nb2." = ".$nb1*$nb2;
                    break;
                case 'div':
                    if($nb1==0 || $nb2==0){
                        $message="Division par 0 imposible";
                        break;
                    }
                    $message=$nb1." / ".$nb2." = ".$nb1*$nb2;
                    break;
                default:
                    $message="Cette opérateur n'existe pas";
                break;
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
        <input type="text" name="nbr1" id="" placeholder="saisir un nombre">
        <input type="text" name="nbr2" id="" placeholder="saisir un nombre">
        <!-- <input type="text" name="operateur" id="" placeholder="saisir un operateur mathématique : add, sous, multi, div"> -->
        <select name="operateur" id="">
            <option value="add">addition</option>
            <option value="sous">soustraction</option>
            <option value="multi">multiplication</option>
            <option value="div">division</option>
        </select>
        <input type="submit" value="calculer" name="submit">
        <p><?= $message ?? "" ?></p>
    </form>
</body>
</html>
<?php
$FIzz = [];

for($i=1; $i <=100; $i++){
     $FIzz[]= $i;
}

    foreach ($FIzz as &$Fiz){
    if ($Fiz % 3==0 && $Fiz % 5== 0){
        $Fiz =  'FizzBuzz';
    }else if ($Fiz  % 3 == 0){
        $Fiz =  'Fizz';
    } else if ($Fiz  % 5 ==0){
        $Fiz = 'Buzz';
    }
}?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="../water.css">
</head>
<>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>FizzBuzz</h1>
<ul>
<?php foreach ($FIzz as $Fiz) { ?>
    <li><?= $Fiz?></li>
<?php }?>

</ul>

</body>
</html>

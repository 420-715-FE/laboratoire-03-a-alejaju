
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v1</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v1</h1>
    <?php

$nombres1= []; 

for($i = 1; $i <= 100; $i++ ){
     $nombres1[] = $i; 
    }
   echo '<br/>';
    


foreach ($nombres1 as $nombres){
   echo  "<li>$nombres</li> <br>"; 
}

    ?>
</body>
</html>

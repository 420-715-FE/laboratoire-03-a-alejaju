<?php

include('dessin.php');

$matrice = $dessin;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art ASCII</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Art ASCII</h1>
    <pre>
        <?php

      
foreach ($matrice as $ligne) {
    foreach ($ligne as $caractere) {
        echo $caractere;
    }
    echo '<br />';
}

        ?>
    </pre>
</body>
</html>

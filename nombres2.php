<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v2</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v2</h1>

    <?php
if(isset($_GET['n'])){
    if (!is_numeric($_GET['n'])) {
    echo 'doit etre n'; 
    echo '</body></html>';
    exit;
} 
$n = $_GET['n']; 

}else {
    $n = 20;
}
$nombres2 = [];

for($i = 0; $i < $n; $i+=2 ){
    $nombres2 []=$i; 
   }
  echo '<br/>';

foreach ($nombres2 as $nombres){
    echo  "<li>$nombres</li> <br>"; 
 } 
 
    ?>
    <a href ="nombres2.php?n=<?= $n+20?>">Ajouter 10 nombres</a>
</body>
</html>

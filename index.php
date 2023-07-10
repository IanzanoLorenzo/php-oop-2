<?php 
//IMPORT CLASSI
    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Gadget.php';
    require_once __DIR__.'/Models/Items.php';
//DICHIARAZIONE OGGETTI
    $prova = new Food('Cibo','immagine', 'Gatti', '50kg', ['ing1', 'ing2']);
    $prova->setPrice(30.50);
    $prova2 = new Gadget('Cibo','immagine', 'Gatti', ['char1', 'char2'], '30cm x 40cm');
    $prova2->setPrice(30.50);
    $prova3 = new Items('Cibo','immagine', 'Gatti',['legno', 'ferro', 'diamanti'], null);
    $prova3->setPrice(30.50);
    echo '<pre>';
    var_dump($prova, $prova2, $prova3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
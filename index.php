<?php 
//IMPORT CLASSI
    require_once __DIR__.'/Models/Product.php';
    require_once __DIR__.'/Models/Animal.php';
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Gadget.php';
    require_once __DIR__.'/Models/Item.php';

//DICHIARAZIONE OGGETTI
    $animals = [
        'gatto' => new Animal('Gatto', 'fa-cat'),
        'pesce' => new Animal('Pesce', 'fa-fish'),
        'cane' => new Animal('Cane', 'fa-dog'),
        'uccello' => new Animal('Uccello', 'fa-crow')
    ];

    $arrayno = [
        new Food('Royal Canin Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $animals['cane'], 545, 'ing1, ing2'),
        new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $animals['cane'], 600, 'ing1, ing2'),
        new Food('Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $animals['gatto'], 400, 'ing1, ing2'),
        new Food('Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $animals['pesce'], 30, 'ing1, ing2'),
        new Item('Voliera Wilma in Legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $animals['uccello'],'legno, ferro, diamanti', null),
        new Item('Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $animals['gatto'],'legno, ferro, diamanti', null),
        new Gadget('Kong Classic','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $animals['cane'], 'char1, char2', '30cm x 40cm'),
        new Gadget('Topini di peluche Trixie','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $animals['gatto'], 'char1, char2', '30cm x 40cm')
    ];

    foreach($arrayno as $itemino){
        $itemino->setPrice(rand(10,50));
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="py-4">
        <h1 class="text-center">Boolshop pet</h1>
    </nav>
    <div class="row px-5">
        <?php foreach($arrayno as $prod) :?>
        <div class="col-2 my-4">
            <!-- CREAZIONE CARD -->
            <div class="card">
                <h6 class="card-header d-flex align-items-center"><?php echo $prod->name ?></h6>
                <img src="<?php echo $prod->image ?>" alt="" class="card-img">
                <p>
                    <i class="fa-solid <?php echo $prod->madeFor->icon; ?>"></i> <?php echo $prod->madeFor->animal; ?><br>
                    Prezzo: <?php echo $prod->getPrice(); ?>&euro;<br>
                    <?php if(get_class($prod) === 'Food'){ ?>
                        Peso: <?php echo $prod->weight; ?>g<br>
                        Ingredienti: <?php echo $prod->ingredients ?>
                    <?php }elseif(get_class($prod) === 'Item'){ ?>
                        Materiali: <?php echo $prod->madeOf; ?><br>
                        Dimensioni: <?php echo $prod->dimensions ?>
                    <?php }elseif(get_class($prod) === 'Gadget'){ ?>
                        Dettagli: <?php echo $prod->caracteristics; ?><br>
                        Dimensioni: <?php echo $prod->dimensions ?>
                    <?php } ?>
                </p>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</body>
</html>
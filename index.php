<!-- Includiamo tutti i file figli nel file padre -->
<?php
include __DIR__ . '/animals.php';
include __DIR__ . '/snack.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/kennels.php';
include __DIR__ . '/game.php';

// Array che contiene tutti i prodotti per gli animali

$ArrProducts = [
    'food' => [
        [
            'nameProduct' => 'crocchette di manzo',
            'price' => '25.99',
            'type' => 'Per Cani',
            'weight' => '15',
            'image' => 'https://www.area-dog.it/wp-content/uploads/2019/01/mantenimento-manzo-1.jpg'
        ],
        [
            'nameProduct' => 'crocchette di pesce ',
            'price' => '15.99',
            'type' => 'Per Gatto',
            'weight' => '5',
            'image' => 'https://www.area-dog.it/wp-content/uploads/2021/01/area-wild-merluzzo.jpg'

        ],
    ],
    'Games' => [
        [
            'nameProduct' => 'Osso di Gomma',
            'price' => '5.99',
            'type' => 'Per Cani',
            'image' => 'https://shop.giardineria.com/wp-content/uploads/2017/12/img_0358283.jpg'
        ],
        [
            'nameProduct' => 'tiragraffi',
            'price' => '42.99',
            'type' => 'Per Gatto',
            'image' => 'https://media.adeo.com/marketplace/MKP/87582605/3a0509285d274b4407274cac64ea83ce.jpeg?width=750&height=750&format=jpg&quality=80&fit=bounds'
        ],
    ],
    'Kennels' => [
        [
            'nameProduct' => 'Casetta in legno',
            'price' => '100.59',
            'type' => 'Per Cani',
            'image' => 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/special/9/400/4_top_seller_1000x1000_9.jpg'
        ],
        [
            'nameProduct' => 'Cuscino',
            'price' => '40.99',
            'type' => 'Per Gatto',
            'image' => 'https://shop-cdn-m.mediazs.com/bilder/cuscino/per/gatti/ginger/2/400/116106_pla_katzenkissen_ginger_fg_3511_2.jpg'
        ],
    ],
    'Snack' => [
        [
            'nameProduct' => 'Barrette',
            'price' => '19.99',
            'type' => 'Per Cani',
            'weight' => '500',
            'image' => 'https://shop-cdn-m.mediazs.com/bilder/crave/protein/bar/snack/per/cane/3/400/186528_pla_marsgermany_crave_hund_proteinbars_huhn_76g_hs_01_3.jpg'
        ],
        [
            'nameProduct' => 'Biscotti',
            'price' => '15.99',
            'type' => 'Per Gatto',
            'weight' => '350',
            'image' => 'https://shop-cdn-m.mediazs.com/bilder/whiskas/crunch/con/pollo/tacchino/anatra/1/400/14119_PLA_rgb_Whiskas_Crunch_mit_Huhn__Truthahn_Ente_100g_1.jpg'
        ],
    ],
    'Animals' => [
        [
            'species' => 'Cane',
            'size' => 'Grande-Media-Piccola',
            'image' => 'https://www.area-dog.it/wp-content/uploads/2019/01/mantenimento-manzo-1.jpg'
        ],
        [
            'species' => 'Gatto',
            'size' => 'Media-Piccola',
            'image' => 'https://www.area-dog.it/wp-content/uploads/2019/01/mantenimento-manzo-1.jpg'
        ],
    ],
];

// Facciamo un forEach per richiamarci ogni singola chiave dell'array

$ArrFood = [];
foreach ($ArrProducts['food'] as $food) {
    $ArrFood[] = new Food(
        $food['nameProduct'],
        $food['price'],
        $food['type'],
        $food['weight'],
        $food['image']
    );
}

$ArrGames = [];
foreach ($ArrProducts['Games'] as $games) {
    $ArrGames[] = new Games(
        $games['nameProduct'],
        $games['price'],
        $games['type'],
        $games['image']
    );
}

$ArrKennels = [];
foreach ($ArrProducts['Kennels'] as $kennels) {
    $ArrKennels[] = new Kennels(
        $kennels['nameProduct'],
        $kennels['price'],
        $kennels['type'],
        $kennels['image']
    );
}

$ArrSnack = [];
foreach ($ArrProducts['Snack'] as $snack) {
    $ArrSnack[] = new Snack(
        $snack['nameProduct'],
        $snack['price'],
        $snack['type'],
        $snack['weight'],
        $snack['image']
    );
}

$arrAnimals = [];
foreach ($ArrProducts['Animals'] as $animals) {
    $ArrAnimals[] = new Animals(
        $animals['species'],
        $animals['size'],
        $animals['image']
    );
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Di Animali</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Negozio Di Animali</h1>
    <div class="container">

        <!-- Creiamo delle card all'interno dell'HTML -->
        <?php
        foreach ($ArrFood as $food) { ?>
            <div class="card">
                <img src="<?php echo $food->image; ?>" alt="">
                <div><?php echo $food->nameProduct; ?></div>
                <div><?php echo $food->price; ?>€</div>
                <div><?php echo $food->type; ?></div>
            </div>
        <?php } ?>

        <?php
        foreach ($ArrGames as $games) { ?>
            <div class="card">
                <img src="<?php echo $games->image; ?>" alt="">
                <div><?php echo $games->nameProduct; ?></div>
                <div><?php echo $games->price; ?>€</div>
                <div><?php echo $games->type; ?></div>
            </div>
        <?php } ?>

        <?php
        foreach ($ArrKennels as $Kennels) { ?>
            <div class="card">
                <img src="<?php echo $Kennels->image; ?>" alt="">
                <div><?php echo  $Kennels->nameProduct; ?></div>
                <div><?php echo $Kennels->price; ?>€</div>
                <div><?php echo $Kennels->type; ?></div>
            </div>
        <?php } ?>

        <?php
        foreach ($ArrSnack as $snack) { ?>
            <div class="card">
                <img src="<?php echo $snack->image; ?>" alt="">
                <div><?php echo  $snack->nameProduct; ?></div>
                <div><?php echo $snack->price; ?>€</div>
                <div><?php echo $snack->type; ?></div>
            </div>
        <?php } ?>


    </div>



</body>

</html>
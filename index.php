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
        ],
        [
            'nameProduct' => 'crocchette di pesce ',
            'price' => '15.99',
            'type' => 'Per Gatto',
            'weight' => '5',
        ],
    ],
    'Games' => [
        [
            'nameProduct' => 'Osso di Gomma',
            'price' => '5.99',
            'type' => 'Per Cani',
        ],
        [
            'nameProduct' => 'tiragraffi',
            'price' => '42.99',
            'type' => 'Per Gatto',
        ],
    ],
    'Kennels' => [
        [
            'nameProduct' => 'Casetta in legno',
            'price' => '100.59',
            'type' => 'Per Cani',
        ],
        [
            'nameProduct' => 'Cuscino',
            'price' => '40.99',
            'type' => 'Per Gatto',
        ],
    ],
    'Snack' => [
        [
            'nameProduct' => 'Barrette',
            'price' => '19.99',
            'type' => 'Per Cani',
            'weight' => '500',
        ],
        [
            'nameProduct' => 'Biscotti',
            'price' => '15.99',
            'type' => 'Per Gatto',
            'weight' => '350',
        ],
    ],
    'Animals' => [
        [
            'species' => 'Cane',
            'size' => 'Grande-Media-Piccola',
        ],
        [
            'species' => 'Gatto',
            'size' => 'Media-Piccola',
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
        $food['weight']
    );
}

$ArrGames = [];
foreach ($ArrProducts['Games'] as $games) {
    $ArrGames[] = new Games(
        $games['nameProduct'],
        $games['price'],
        $games['type'],
        $games['type']
    );
}

$ArrKennels = [];
foreach ($ArrProducts['Kennels'] as $kennels) {
    $ArrKennels[] = new Kennels(
        $kennels['nameProduct'],
        $kennels['price'],
        $kennels['type']
    );
}

$ArrSnack = [];
foreach ($ArrProducts['Snack'] as $snack) {
    $ArrSnack[] = new Snack(
        $snack['nameProduct'],
        $snack['price'],
        $snack['type'],
        $snack['weight']
    );
}

$arrAnimals = [];
foreach ($ArrProducts['Animals'] as $animals) {
    $ArrAnimals[] = new Animals(
        $animals['species'],
        $animals['size']
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
    <div class="container">
        <!-- Creiamo delle card all'interno dell'HTML -->
        <?php
        foreach ($ArrFood as $food) { ?>
            <div class="card">
                <div><?php echo $food->nameProduct; ?></div>
                <div><?php echo $food->price; ?></div>
                <div><?php echo $food->type; ?></div>
            </div>
        <?php } ?>

        <?php
        foreach ($ArrGames as $games) { ?>
            <div class="card">
                <div><?php echo $games->nameProduct; ?></div>
                <div><?php echo $games->price; ?></div>
                <div><?php echo $games->type; ?></div>
            </div>
        <?php } ?>

        <?php
        foreach ($ArrKennels as $Kennels) { ?>
            <div class="card">
                <div><?php echo  $Kennels->nameProduct; ?></div>
                <div><?php echo $Kennels->price; ?></div>
                <div><?php echo $Kennels->type; ?></div>
            </div>
        <?php } ?>


    </div>



</body>

</html>
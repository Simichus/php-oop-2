<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/utils/functions.php';

$user = new User('Ciccio', 'Pasticcio', 'ciccio.pasticcio@email.com');
$premium = new PremiumUser('Roberto', 'Norberti', 'roberto.norberti@email.com', 2);
$product = new Product('Racchetta', 25.00, 'Giallo');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $user->getFirstName() . ' ' . $user->getLastName(); ?></h3>
    <address><?= $user->getEmail() ?></address>
    <div>
        <div>Prodotto: <?= $product->getName(); ?></div>
        <div>Colore: <?= $product->getColor(); ?></div>
        <div>Prezzo: €<?= finalPrice($product->getPrice(), 0); ?></div>
    </div>
    <hr>
    <h3><?= $premium->getFirstName() . ' ' . $premium->getLastName(); ?></h3>
    <address><?= $premium->getEmail() ?></address>
    <div>Utente premium di livello: <?= $premium->getPremiumLevel() ?></div>
    <div>Sconto premium del <?= $premium->getDiscount() ?>%</div>
    <div>
        <div>Prodotto: <?= $product->getName(); ?></div>
        <div>Colore: <?= $product->getColor(); ?></div>
        <div>Prezzo: €<?= finalPrice($product->getPrice(), $premium->getDiscount()); ?></div>
    </div>
    <hr>
</body>

</html>
<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Type.php';
require_once __DIR__ . '/models/Carne.php';
include __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Arcaboolplanet</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="pt-3 fw-bold">Arcaboolplanet</h1>
        </div>
    </header>

    <main class="container pt-5">
        <h2>Elenco prodotti</h2>
        <div class="border border-black mt-3">
            <?php
                echo var_dump($manzo_lattina);
            ?>
        </div>
    </main>
</body>
</html>
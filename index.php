<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Type.php';
require_once __DIR__ . '/models/Carne.php';
include __DIR__ . '/database/db.php';
include __DIR__ . '/partials/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                echo '<div class="card" style="width: 18rem;">
                <img src="' . $manzo_lattina->img_url . '" class="card-img-top" alt="' . $manzo_lattina->name . '">
                <div class="card-body">
                  <h5 class="card-title">' . $manzo_lattina->name . '</h5>
                  <h5>Prezzo: ' . $manzo_lattina->getPrice() . '</h5>
                  <h6>Categoria: ' . returnIcon($manzo_lattina->category->name) . '</h6>
                  <h6>Tipologia prodotto: ' . $manzo_lattina->type->name . '</h6>
                  <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
              </div>'
            ?>
        </div>
    </main>
</body>
</html>
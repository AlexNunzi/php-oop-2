<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Type.php';
require_once __DIR__ . '/models/Carne.php';
require_once __DIR__ . '/models/Trasportino.php';
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

    <main class="container py-5">
        <h2>Elenco prodotti</h2>
        <div class="row border border-black mt-3 align-items-center">
            <?php
                foreach($product_list as $product){
                    echo '  <div class="col-3 p-3">
                                <div class="card h-100">
                                    <img src="' . $product->img_url . '" class="card-img-top" alt="' . $product->name . '">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $product->name . '</h5>
                                        <h5>Prezzo: ' . $product->getPrice() . '</h5>
                                        <h6>Categoria: ' . returnIcon($product->category->name) . '</h6>
                                        <h6>Tipologia prodotto: ' . $product->type->name . '</h6>
                                        <h6>Caratteristiche aggiuntive</h6>' . $product->getInformationsListHtml()  . '
                                        <a href="#" class="btn btn-primary mt-3">Aggiungi al carrello</a>
                                    </div>
                                </div>
                            </div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
<?php

$cane = new Category("Cane");
$gatto = new Category("Gatto");

$cibo = new Type("Cibo");
$gioco = new Type("Gioco");
$accessorio = new Type("Accessorio");
$medicinale = new Type("Medicinale");

$manzo_lattina = new Carne("Carne di manzo", 2.99, $cane, $cibo, "Manzo", 400);
$manzo_lattina->img_url = "./img/manzo_cane.png";

$pollo_lattina = new Carne("Carne di pollo", 3.99, $gatto, $cibo, "Pollo", 400);
$pollo_lattina->img_url = "./img/pollo_carne_gatto.png";

$trasportino_caravan = new Trasportino("Trasportino Caravan", 49.99, $gatto, $accessorio, "70x50x51,5 cm", "Plastic");
$trasportino_caravan->img_url = "./img/trasportino_gatto.png";

$trasportino_cane_lux = new Trasportino("Trasportino Cane Lux", 79.99, $cane, $accessorio, "48x32x31 cm", "Plastic");
$trasportino_cane_lux->img_url = "./img/trasportino_cane_lux.png";

$frontline_cane = new Protezione("Frontline TRI-ACT", 40.00, $cane, $medicinale, "Antiparassitario per cani");
$frontline_cane->img_url = "./img/frontline_cane.png";

$product_list = [$manzo_lattina, $pollo_lattina, $trasportino_caravan, $trasportino_cane_lux, $frontline_cane];
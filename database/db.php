<?php

$cane = new Category("Cane");
$gatto = new Category("Gatto");

$cibo = new Type("Cibo");
$gioco = new Type("Gioco");
$accessorio = new Type("Accessorio");
$medicinale = new Type("Medicinale");

$manzo_lattina = new Carne("Carne di manzo", 2.99, $cane, $cibo, "Manzo", 400);
$manzo_lattina->img_url = "./img/manzo_cane.png";
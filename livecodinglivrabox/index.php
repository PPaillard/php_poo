<?php
require_once "./classes/DigitalProduct.php";
require_once "./classes/PhysicalProduct.php";
require_once "./classes/Cart.php";

$portal = new DigitalProduct("Portal");
$echec = new PhysicalProduct("Les echecs");

$panier = new Cart();
$panier->addProduct($portal);
$panier->addProduct($echec);
$panier->showDeliveries();

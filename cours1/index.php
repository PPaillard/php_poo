<?php
require_once "./classes/Book.php";

$gargantua = new Book("Gargantua", "François Rabelais", 688);

echo $gargantua->getSummary();


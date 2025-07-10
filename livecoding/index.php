<?php
require_once "./classes/Amphora.php";

$vin = new Amphora(100);
$vin->getCapacity();

// $vin->capacity = 100; Ne fonctionnera pas, je n'y ai pas accès
$vin->fill(50);
echo "L'amphore est rempli à {$vin->getFilling()} litres";

$eau = new Amphora(10);
$eau->fill(8);
$eau->fill(4);

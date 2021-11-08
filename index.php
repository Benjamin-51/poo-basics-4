<?php

require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';



$truck = new Truck("rouge", 2, "hybrid", 20);
$bicycle = new Bicycle("bleu", 1);

echo($truck->isFull() . PHP_EOL);

echo($truck->start() . PHP_EOL);
echo($truck->start() . PHP_EOL);
echo($truck->forward() . PHP_EOL);


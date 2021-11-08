<?php

require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$truck = new Truck("rouge", 2, "hybrid", 20);
$bicycle = new Bicycle("bleu", 1);

echo($truck->isFull() . PHP_EOL);

echo($truck->start() . PHP_EOL);
echo($truck->forward() . PHP_EOL);

$firstWay = new MotorWay();
echo $firstWay->getNbLane() . PHP_EOL;
$firstWay->addVehicle($truck);
$firstWay->addVehicle($bicycle);
var_dump($firstWay->getCurrentVehicles());
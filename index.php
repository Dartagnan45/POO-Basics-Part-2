<?php

require_once 'Truck.php';

$foodTruck = new Truck('jaune','3','fuel',0);

var_dump($foodTruck);
var_dump(Truck::ALLOWED_STORAGE);

$foodTruck->setNbWheels(4);
$foodTruck->filling();
$foodTruck->setCapacity(100);
$foodTruck->setLoad(20);
echo '<p> le camion possède ' . $foodTruck->getNbWheels(). ' roues et roule au '. $foodTruck->getEnergy(). ' et il est de couleur ' . $foodTruck->getColor(). '</p>';
echo '<p>Le camion est ' . $foodTruck->filling();

<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
// require_once 'Bike.php';
require_once 'Car.php';
// require_once 'Skateboard.php';


// $motor = new MotorWay();
$bike = new Bicycle('red_bike', 2);
$car = new Car('blue_car', 4, 'fuel');
$skateboard = new Skateboard('green_skate');

$pedestrian =  new PedestrianWay();
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($skateboard);

echo "Les véhicules circulant sur PedestrianWay sont de couleurs : " . PHP_EOL;

$vehicles = $pedestrian->getCurrentVehicles();
foreach ($vehicles as $vehicle) {
    echo "color  = " . $vehicle->getColor() . PHP_EOL;
}


$motorway =  new MotorWay();
$motorway->addVehicle($bike);
$motorway->addVehicle($car);
$motorway->addVehicle($skateboard);

echo "Les véhicules circulant sur Motorway sont de couleurs : " . PHP_EOL;

$vehicles = $motorway->getCurrentVehicles();
foreach ($vehicles as $vehicle) {
    echo "color  = " . $vehicle->getColor() . PHP_EOL;
}

$residentialway =  new ResidentialWay();
$residentialway->addVehicle($bike);
$residentialway->addVehicle($car);
$residentialway->addVehicle($skateboard);

echo "Les véhicules circulant sur ResidentialWay sont de couleurs : " . PHP_EOL;

$vehicles = $residentialway->getCurrentVehicles();
foreach ($vehicles as $vehicle) {
    echo "color  = " . $vehicle->getColor() . PHP_EOL;
}

<?php
require 'vendor/autoload.php';

use App\Bus;
use App\TripCalculator;

$bus = new Bus('Bus', 32, 300, 20, 200, 2);

$calculator = new TripCalculator();
$calculator->addVehicle($bus);

$passengers = 20;
$cargoWeight = 100;
$tripDistance = 150;

$results = $calculator->calculate($passengers, $cargoWeight, $tripDistance);

foreach ($results as $result) {
    echo "Транспортний засіб: {$result[0]}, Вартість поїздки: {$result[1]}\n";
}
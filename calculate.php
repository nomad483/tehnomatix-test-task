<?php

require 'vendor/autoload.php';

use Src\TripCalculator;
use Src\Vehicles\Bicycle;
use Src\Vehicles\Bus;
use Src\Vehicles\Truck;

$calculator = new TripCalculator();
$calculator->addVehicle(new Bus());
$calculator->addVehicle(new Truck());
$calculator->addVehicle(new Bicycle());

$passengers = 20;
$luggageWeight = 100;
$distance = 150;

$results = $calculator->calculate(passengers: $passengers, luggageWeight: $luggageWeight, distance: $distance);

foreach ($results as $result) {
    echo $result['vehicle'] . ': ' . $result['cost'] . " грн\n";
}

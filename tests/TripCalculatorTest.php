<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\TripCalculator;
use Src\Vehicles\Bus;
use Src\Vehicles\Truck;

class TripCalculatorTest extends TestCase
{
    public function testAddVehicle()
    {
        $calculator = new TripCalculator();
        $bus = new Bus();

        $calculator->addVehicle($bus);

        $this->assertNotEmpty($calculator->calculate(20, 100, 150));
    }
    public function testCalculateWithBus()
    {
        $calculator = new TripCalculator();
        $bus = new Bus();

        $calculator->addVehicle($bus);

        $results = $calculator->calculate(20, 100, 150);

        $this->assertNotEmpty($results);
        $this->assertEquals('Bus', $results[0]['vehicle']);

        $expectedFuelCost = (20 * 150 / 100) * 2; // Fuel consumption and depreciation
        $expectedDriverCost = 150 * 5 * 1.5; // Distance, cost per km, and driver coefficient
        $expectedTotalCost = $expectedFuelCost + $expectedDriverCost;

        $this->assertEquals($expectedTotalCost, $results[0]['cost']);
    }

    public function testCalculateWithMultipleVehicles()
    {
        $calculator = new TripCalculator();
        $bus = new Bus();
        $truck = new Truck();

        $calculator->addVehicle($bus);
        $calculator->addVehicle($truck);

        $results = $calculator->calculate(2, 100, 150);

        $this->assertCount(2, $results);
    }

    public function testCalculateWithExceedingParameters()
    {
        $calculator = new TripCalculator();
        $bus = new Bus();

        $calculator->addVehicle($bus);

        // Exceeding passenger capacity
        $results = $calculator->calculate(40, 100, 150);
        $this->assertEmpty($results);

        // Exceeding luggage weight
        $results = $calculator->calculate(20, 400, 150);
        $this->assertEmpty($results);

        // Exceeding trip distance
        $results = $calculator->calculate(20, 100, 250);
        $this->assertEmpty($results);
    }
}

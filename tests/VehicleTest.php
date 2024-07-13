<?php

namespace Tests;

use Src\Vehicles\Bicycle;
use Src\Vehicles\Bus;
use PHPUnit\Framework\TestCase;
use Src\Vehicles\Truck;

class VehicleTest extends TestCase
{
    public function testBusParameters()
    {
        $bus = new Bus();

        // Test the name of the vehicle
        $this->assertEquals('Bus', $bus->getName());

        // Test the passenger capacity
        $this->assertEquals(32, $bus->getPassengerCapacity());

        // Test the maximum luggage weight
        $this->assertEquals(300, $bus->getMaxLuggageWeight());

        // Test the fuel consumption per 100 km
        $this->assertEquals(20, $bus->getFuelConsumptionPer100Km());

        // Test the maximum trip distance
        $this->assertEquals(200, $bus->getMaxTripDistance());

        // Test the depreciation coefficient
        $this->assertEquals(2, $bus->getDepreciationCoefficient());

        // Test the driver category coefficient
        $this->assertEquals(1.5, $bus->getDriverCategoryCoefficient());

        // Test the cost per km
        $this->assertEquals(5, $bus->getCostPerKm());
    }
    public function testTruckParameters()
    {
        $truck = new Truck();

        // Test the name of the vehicle
        $this->assertEquals('Truck', $truck->getName());

        // Test the passenger capacity
        $this->assertEquals(2, $truck->getPassengerCapacity());

        // Test the maximum luggage weight
        $this->assertEquals(3000, $truck->getMaxLuggageWeight());

        // Test the fuel consumption per 100 km
        $this->assertEquals(40, $truck->getFuelConsumptionPer100Km());

        // Test the maximum trip distance
        $this->assertEquals(300, $truck->getMaxTripDistance());

        // Test the depreciation coefficient
        $this->assertEquals(4, $truck->getDepreciationCoefficient());

        // Test the driver category coefficient
        $this->assertEquals(2, $truck->getDriverCategoryCoefficient());

        // Test the cost per km
        $this->assertEquals(8, $truck->getCostPerKm());
    }
    public function testBicycleParameters()
    {
        $bicycle = new Bicycle();

        // Test the name of the vehicle
        $this->assertEquals('Bicycle', $bicycle->getName());

        // Test the passenger capacity
        $this->assertEquals(1, $bicycle->getPassengerCapacity());

        // Test the maximum luggage weight
        $this->assertEquals(20, $bicycle->getMaxLuggageWeight());

        // Test the fuel consumption per 100 km
        $this->assertEquals(0, $bicycle->getFuelConsumptionPer100Km());

        // Test the maximum trip distance
        $this->assertEquals(20, $bicycle->getMaxTripDistance());

        // Test the depreciation coefficient
        $this->assertEquals(1.2, $bicycle->getDepreciationCoefficient());

        // Test the driver category coefficient
        $this->assertEquals(1.2, $bicycle->getDriverCategoryCoefficient());

        // Test the cost per km
        $this->assertEquals(2, $bicycle->getCostPerKm());
    }

}

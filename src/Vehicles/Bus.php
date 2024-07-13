<?php

namespace Src\Vehicles;

use Src\VehicleInterface;

class Bus implements VehicleInterface
{

    public function getName(): string
    {
        return 'Bus';
    }

    public function getPassengerCapacity(): int
    {
        return 32;
    }

    public function getMaxLuggageWeight(): int
    {
        return 300;
    }

    public function getFuelConsumptionPer100Km(): float
    {
        return 20;
    }

    public function getMaxTripDistance(): float
    {
        return 200;
    }

    public function getDepreciationCoefficient(): float
    {
        return 2;
    }

    public function getDriverCategoryCoefficient(): float
    {
        return 1.5;
    }

    public function getCostPerKm(): float
    {
        return 5;
    }
}

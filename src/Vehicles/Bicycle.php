<?php

namespace Src\Vehicles;

use Src\VehicleInterface;

class Bicycle implements VehicleInterface
{

    public function getName(): string
    {
        return 'Bicycle';
    }

    public function getPassengerCapacity(): int
    {
        return 1;
    }

    public function getMaxLuggageWeight(): int
    {
        return 20;
    }

    public function getFuelConsumptionPer100Km(): float
    {
        return 0;
    }

    public function getMaxTripDistance(): float
    {
        return 20;
    }

    public function getDepreciationCoefficient(): float
    {
        return 1.2;
    }

    public function getDriverCategoryCoefficient(): float
    {
        return 1.2;
    }

    public function getCostPerKm(): float
    {
        return 2;
    }
}

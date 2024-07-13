<?php

namespace Src\Vehicles;

use Src\VehicleInterface;

class Truck implements VehicleInterface
{

    public function getName(): string
    {
        return 'Truck';
    }

    public function getPassengerCapacity(): int
    {
        return 2;
    }

    public function getMaxLuggageWeight(): int
    {
        return 3000;
    }

    public function getFuelConsumptionPer100Km(): float
    {
        return 40;
    }

    public function getMaxTripDistance(): float
    {
        return 300;
    }

    public function getDepreciationCoefficient(): float
    {
        return 4;
    }

    public function getDriverCategoryCoefficient(): float
    {
        return 2;
    }

    public function getCostPerKm(): float
    {
        return 8;
    }
}

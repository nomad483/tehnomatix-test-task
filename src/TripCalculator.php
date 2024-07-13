<?php

namespace Src;


class TripCalculator
{
    /**
     * @var VehicleInterface[]
     */
    private array $vehicles;

    public function addVehicle(VehicleInterface $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function calculate(int $passengers, int $luggageWeight, float $distance): array
    {
        $results = [];

        foreach ($this->vehicles as $vehicle) {
            if (
                $passengers > $vehicle->getPassengerCapacity()
                || $luggageWeight > $vehicle->getMaxLuggageWeight()
                || $distance > $vehicle->getMaxTripDistance()
            ) {
                continue;
            }

            $fuelCost = ($vehicle->getFuelConsumptionPer100Km() * $distance / 100) * $vehicle->getDepreciationCoefficient();
            $driverCost = $distance * $vehicle->getCostPerKm() * $vehicle->getDriverCategoryCoefficient();
            $totalCost = $fuelCost + $driverCost;

            $results[] = [
                'vehicle' => $vehicle->getName(),
                'cost' => $totalCost,
            ];
        }

        return $results;
    }
}

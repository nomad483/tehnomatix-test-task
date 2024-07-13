<?php

namespace Src;

interface VehicleInterface
{
    public function getName(): string;
    public function getPassengerCapacity(): int;
    public function getMaxLuggageWeight(): int;
    public function getFuelConsumptionPer100Km(): float;
    public function getMaxTripDistance(): float;
    public function getDepreciationCoefficient(): float;
    public function getDriverCategoryCoefficient(): float;
    public function getCostPerKm(): float;
}

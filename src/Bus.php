<?php
namespace App;

class Bus extends Vehicle {

    /**
     * @param $passengers
     * @param $cargoWeight
     * @param $tripDistance
     * @return float|int
     * @throws \Exception
     */
    public function calculateCost($passengers, $cargoWeight, $tripDistance) {
        if ($passengers > $this->passengerCapacity || $cargoWeight > $this->maxCargoWeight || $tripDistance > $this->maxTripDistance) {
            throw new \Exception("Неприпустимі параметри для поїздки на автобусі.");
        }

        $driverWage = $tripDistance * 5 * 1; // Коэффициент категории водія = 1
        $fuelCost = ($tripDistance / 100) * $this->fuelConsumptionPer100km * $this->depreciationRate;

        return $driverWage + $fuelCost;
    }
}
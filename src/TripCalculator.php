<?php
namespace App;

class TripCalculator
{
    private $vehicles = [];

    /**
     * @param Vehicle $vehicle
     */
    public function addVehicle(Vehicle $vehicle) {
        $this->vehicles[] = $vehicle;
    }

    /**
     * @param $passengers
     * @param $cargoWeight
     * @param $tripDistance
     * @return array
     */
    public function calculate($passengers, $cargoWeight, $tripDistance) {
        $results = [];
        foreach ($this->vehicles as $vehicle) {
            try {
                $cost = $vehicle->calculateCost($passengers, $cargoWeight, $tripDistance);
                $results[] = [$vehicle->getName(), $cost];
            } catch (\Exception $e) {

            }
        }
        return $results;
    }
}
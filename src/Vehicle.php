<?php
namespace App;

abstract class Vehicle {
    protected $name;
    protected $passengerCapacity;
    protected $maxCargoWeight;
    protected $fuelConsumptionPer100km;
    protected $maxTripDistance;
    protected $depreciationRate;

    /**
     * Vehicle constructor.
     * @param $name
     * @param $passengerCapacity
     * @param $maxCargoWeight
     * @param $fuelConsumptionPer100km
     * @param $maxTripDistance
     * @param $depreciationRate
     */
    public function __construct($name, $passengerCapacity, $maxCargoWeight, $fuelConsumptionPer100km, $maxTripDistance, $depreciationRate) {
        $this->name = $name;
        $this->passengerCapacity = $passengerCapacity;
        $this->maxCargoWeight = $maxCargoWeight;
        $this->fuelConsumptionPer100km = $fuelConsumptionPer100km;
        $this->maxTripDistance = $maxTripDistance;
        $this->depreciationRate = $depreciationRate;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param $passengers
     * @param $cargoWeight
     * @param $tripDistance
     * @return mixed
     */
    abstract public function calculateCost($passengers, $cargoWeight, $tripDistance);
}
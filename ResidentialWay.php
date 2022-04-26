<?php
require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


final class ResidentialWay extends HighWay
{
    //attributs
    protected int $maxSpeed = 50;
    protected int $nbLane= 2;

    //methodes
    public function addVehicle(Vehicle $vehicle) : string
    {
        $this->setCurrentVehicles($vehicle);
        return 'vehicle added';
    }
}
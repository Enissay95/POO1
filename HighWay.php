<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

abstract class HighWay
{
    //attributs
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    //methodes addVehicle() prenant en paramètre un objet de type Vehicle.

    abstract public function addVehicle(Vehicle $vehicle);

    //getters

    /**
     * @return
     */

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @return int
     */
    public function getMaxspeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    //setters

    /**
     * @param object $currentVehicle
     */
    public function setCurrentVehicles($currentVehicle): void
    {
        $this->currentVehicles[] = $currentVehicle;
    }

    /**
     * @param int $maxspeed
     */
    public function setMaxSpeed(int $maxspeed): void
    {
        $this->maxSpeed = $maxspeed;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }
}

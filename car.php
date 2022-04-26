<?php

require_once 'Vehicle.php';
require_once 'lightableInterface.php';

class Car extends Vehicle implements lightableInterface
{

    // attributs
    private bool $hasParkBrake = true; // représentant l'état du frein à main

    private string $energy;

    private int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }



    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }







    // POO Part 04


    public function start(): string
    {
        $brake = $this->getHasParkBrake();

   
        if ($brake === true)
        {
            throw new Exception('le frein à main est actif');
        }else{
                 
            $this->currentSpeed=15;
            return 'engine started.<br>';

        }

    }










    /**
     * Set the value of hasParkBrake
     *
     * @param bool $hasParkBrake
     *
     * @return void
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;

    }


    /**
     * Get the value of hasParkBrake
     *
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    // POO 05

    public function switchOn(): bool
    {
        return  $this->switchOn(true);
    }
    public function switchOff(): bool
    {
        return  $this->switchOn(false);
    }
    
}

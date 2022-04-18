<?php


class car
{
    protected int $nbWheeels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;



    public function __construct( string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {

        $this->currentSpeed = 15;
        return " Go ! <br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !"; //concatenating assignment operator
        return $sentence;
    }
    public function start(): string
    {

        return 'engine started.<br>';
    }

    public function dump()
    {
        var_dump($this);
    }



    /**
     * Get the value of nbWheeels
     *
     * @return int
     */
    public function getNbWheeels(): int
    {
        return $this->nbWheeels;
    }

    /**
     * Get the value of currentSpeed
     *
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     *
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energy
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * Get the value of energyLevel
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}

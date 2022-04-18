<?php 

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $payload = 0;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * Get the value of payload
     *
     * @return int
     */
    public function getPayload(): int
    {
        return $this->payload;
    }

    /**
     * Set the value of payload
     *
     * @param int $payload
     *
     * @return self
     */
    public function setPayload(int $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get the value of storageCapacity
     *
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     *
     * @param int $storageCapacity
     *
     * @return self
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;

        //return $this;
    }

    public function getFilling()
    {
        if ($this->getStorageCapacity() > 0) {
            echo "in filling";
        } elseif ($this->getStorageCapacity() <= 0) {
            echo "full";
        }
    }

    /*
    public function getFilling(): string
    {
        if($this->payload < $this->storageCapacity)
        {
            return 'in filling';
        }
        else if ($this->payload == $this->storageCapacity)
        {
            return 'Full';
        }
        else 
        {
            return 'large payload !!';
        }
    }
    */



}
<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{
    const ALLOWED_STORAGE = [
        'fuel',
        'electric',
    ];

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $load = 0;

    /**
     * @var string
     */
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function filling()
    {
        if($this->load <= $this->capacity){
            return 'in filling';
        }else{
            return 'full';
        }
    }


}
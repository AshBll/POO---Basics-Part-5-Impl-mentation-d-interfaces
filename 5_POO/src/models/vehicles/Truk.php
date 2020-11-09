<?php

require_once 'Vehicle.php';

class Truk extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $loading = 0;

    /**
     * @var string
     */
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading()
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function usedCapacity(): string
    {
        if($this->loading >= $this->storageCapacity) {
            $this->loading = $this->storageCapacity;
            return 'full';
        } else {
            return 'in filling';
        }
    }
}

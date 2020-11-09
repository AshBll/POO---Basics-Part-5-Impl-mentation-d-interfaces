<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->currentVehicles = [];
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Vehicle) {
            $this->currentVehicle[] = $vehicle;
        }
    }
}
<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
        $this->currentVehicles = [];
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicle[] = $vehicle;
        }
    }
}

<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn() {
        return true;
    }

    public function switchOff() {
        return false;
    }

    public function dynamo(int $currentSpeed) {
        if($currentSpeed >= 10) {
            return $this->switchOn();
        } else {
            return $this->switchOff();
        }
    }
}

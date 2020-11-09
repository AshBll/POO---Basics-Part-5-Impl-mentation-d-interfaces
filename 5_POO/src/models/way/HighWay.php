<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

abstract class HighWay
{
    /**
     * @return array
     */
    protected $currentVehicles = [];

    /**
     * @return int
     */
    protected $nbLane;

    /**
     * @return int
     */
    protected $maxSpeed;

    // Attribut des valeurs avant d'instancier un objet.
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = [];
    }

    // Affiche l'objet CurrentVehicles.
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    // Récupere l'objet CurrentVehicles via une entré.
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    // Affiche l'objet nbLane.
    public function getNbLane()
    {
        return $this->nbLane;
    }

    // Récupere l'objet nbLane via une entré.
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    // Affiche l'objet maxSpeed.
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    // Récupere l'objet maxSpeed via une entré.
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    // Défini une méthode pour ajouter un véhicule pour toute les classes filles.
    abstract function addVehicle($vehicle);
}
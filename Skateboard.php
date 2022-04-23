<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle
{
    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        parent::__construct($color, $nbSeats);
        $nbWheels = $this->nbWheels;
    }
}
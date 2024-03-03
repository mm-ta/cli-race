<?php

namespace App\Data\DTOs;

/**
 * This class represents a vehicle with its properties
 */
class VehicleDTO
{
//    private int $uniformSpeed =

    public function __construct(
        private string $name,
        private float|int $maxSpeed,
        private string $unit,
    )
    {
    }

    /**
     * ---------------------------------------------------
     * --------------------  Getters ---------------------
     * ---------------------------------------------------
     */

    public function getName(): string
    {
        return $this->name;
    }

    public function getMaxSpeed(): int|float
    {
        return $this->maxSpeed;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }
}
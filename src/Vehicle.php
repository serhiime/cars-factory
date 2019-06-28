<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

abstract class Vehicle implements IVehicle
{
    protected $speed = 0;
    protected $direction = 'forward';
    protected $driver = null;
    protected $passengers = [];
    protected $wheels = 1;
    protected $hasEngine = true;
    protected $hasTrailer = false;

    public function __construct()
    {
        $this->setWheels();
    }

    public function moveForward()
    {
        $this->direction = 'forward';
    }

    public function moveBackward()
    {
        $this->direction = 'backward';
    }

    public function moveLeft()
    {
        $this->direction = 'left';
    }

    public function moveRight()
    {
        $this->direction = 'right';
    }

    public function setDriver(Person $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver(): ?Person
    {
        return $this->driver;
    }

    public function addPassenger(Person $passenger)
    {
        if(!array_key_exists($passenger.'',$this->passengers)) {
            $this->passengers[$passenger.''] = $passenger;
        }
    }

    public function getPassengers(): array
    {
        return array_values($this->passengers);
    }

    public function upSpeed(int $speed)
    {
        $this->speed += $speed;
    }

    public function downSpeed(int $speed)
    {
        $this->speed -= $speed;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    abstract protected function setWheels();
}
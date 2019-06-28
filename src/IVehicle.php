<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

/**
 * Interface IVehicle
 * @package SerhiiMe\Cars
 */
interface IVehicle
{
    public function moveForward();
    public function moveBackward();
    public function moveLeft();
    public function moveRight();

    public function setDriver(Person $driver);
    public function getDriver(): ?Person;

    public function addPassenger(Person $passenger);
    public function getPassengers(): array;

    public function upSpeed(int $speed);
    public function downSpeed(int $speed);
    public function getSpeed(): int ;
}
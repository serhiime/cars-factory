<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

class CarFactory
{
    public function createCar(): IVehicle
    {
        return new Car();
    }

    public function createTruck(): IVehicle
    {
        return new Truck();
    }

    public function createMotorcycle(): IVehicle
    {
        return new Motorcycle();
    }

    public function createBicycle(): IVehicle
    {
        return new Bicycle();
    }
}
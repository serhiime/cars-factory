<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

class Motorcycle extends Vehicle
{
    protected function setWheels()
    {
        $this->wheels = 2;
    }
}
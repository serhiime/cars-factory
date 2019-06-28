<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

class Bicycle extends Motorcycle
{
    public function __construct()
    {
        parent::__construct();
        $this->hasEngine = false;
    }
}
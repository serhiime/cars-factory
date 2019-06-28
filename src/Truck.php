<?php

namespace SerhiiMe\Cars;

class Truck extends Car
{
    public function __construct()
    {
        parent::__construct();
        $this->hasTrailer = true;
    }
}
<?php

namespace Creational\FactoryMethod\Car;

use Creational\FactoryMethod\Car\Interfaces\CarBrandInterface;

class BmwBrand implements CarBrandInterface
{
    /**
     * Create brand
     *
     * @return void
     */
    public function createBrand()
    {
        // TODO: Implement createBrand() method.
        return "Bmw Brand";
    }
}

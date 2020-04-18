<?php

namespace Creational\FactoryMethod\Car;

use Creational\FactoryMethod\Car\Interfaces\CarBrandInterface;


class BenzBrand implements CarBrandInterface
{
    /**
     * Create brand
     *
     * @return void
     */
    public function createBrand()
    {
        // TODO: Implement createBrand() method.
        return "Benz Brand";
    }
}

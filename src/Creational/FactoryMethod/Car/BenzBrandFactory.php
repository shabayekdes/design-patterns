<?php


namespace Creational\FactoryMethod\Car;

use Creational\FactoryMethod\Car\Interfaces\BrandFactory;
use Creational\FactoryMethod\Car\BenzBrand;


class BenzBrandFactory implements BrandFactory
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BenzBrand();
    }
}

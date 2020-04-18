<?php


namespace Creational\FactoryMethod\Car;

use Creational\FactoryMethod\Car\BmwBrand;
use Creational\FactoryMethod\Car\Interfaces\BrandFactory;


class BmwBrandFactory implements BrandFactory
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BmwBrand();
    }
}

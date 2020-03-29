<?php

namespace Creational\AbstractFactory\Product;

use Creational\AbstractFactory\Product\Interfaces\AbstractFactory;
use Creational\AbstractFactory\Product\ProductA\ConcreteProductA1;
use Creational\AbstractFactory\Product\ProductB\ConcreteProductB1;
use Creational\AbstractFactory\Product\Interfaces\AbstractProductA;
use Creational\AbstractFactory\Product\Interfaces\AbstractProductB;

/**
 * Concrete Factories produce a family of products that belong to a single
 * variant. The factory guarantees that resulting products are compatible. Note
 * that signatures of the Concrete Factory's methods return an abstract product,
 * while inside the method a concrete product is instantiated.
 */
class ConcreteFactory implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }
}

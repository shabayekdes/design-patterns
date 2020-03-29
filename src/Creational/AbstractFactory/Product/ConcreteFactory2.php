<?php

namespace Creational\AbstractFactory\Product;

use Creational\AbstractFactory\Product\Interfaces\AbstractFactory;
use Creational\AbstractFactory\Product\ProductA\ConcreteProductA2;
use Creational\AbstractFactory\Product\ProductB\ConcreteProductB2;
use Creational\AbstractFactory\Product\Interfaces\AbstractProductA;
use Creational\AbstractFactory\Product\Interfaces\AbstractProductB;

/**
 * Each Concrete Factory has a corresponding product variant.
 */
class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}

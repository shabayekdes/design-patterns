<?php

namespace Creational\AbstractFactory\Product\ProductA;

use Creational\AbstractFactory\Product\Interfaces\AbstractProductA;


/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}

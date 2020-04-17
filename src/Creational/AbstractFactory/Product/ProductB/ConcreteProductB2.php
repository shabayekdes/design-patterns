<?php

namespace Creational\AbstractFactory\Product\ProductB;

use Creational\AbstractFactory\Product\Interfaces\AbstractProductA;
use Creational\AbstractFactory\Product\Interfaces\AbstractProductB;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.";
    }

    /**
     * The variant, Product B2, is only able to work correctly with the variant,
     * Product A2. Nevertheless, it accepts any instance of AbstractProductA as
     * an argument.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}

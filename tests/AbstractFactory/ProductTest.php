<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\Product\ConcreteFactory;
use Creational\AbstractFactory\Product\ConcreteFactory2;
use Creational\AbstractFactory\Product\ProductA\ConcreteProductA1;
use Creational\AbstractFactory\Product\ProductA\ConcreteProductA2;
use Creational\AbstractFactory\Product\ProductB\ConcreteProductB1;
use Creational\AbstractFactory\Product\ProductB\ConcreteProductB2;


class ProductTest extends TestCase
{
    /**
     * Can create products A1, B1 from concrete factory
     *
     * @test
     * @return void
     */
    public function test_can_create_product1_from_concrete_factory()
    {
        $ConcreteFactory = new ConcreteFactory();
        $ProductA = $ConcreteFactory->createProductA();

        $this->assertInstanceOf(ConcreteProductA1::class, $ProductA);

        $actualProductA = $ProductA->usefulFunctionA();
        $expectedProductA = "The result of the product A1.";

        $this->assertEquals(
            $expectedProductA,
            $actualProductA,
            "actual value is not equals to expected"
        );

        $ProductB = $ConcreteFactory->createProductB();

        $this->assertInstanceOf(ConcreteProductB1::class, $ProductB);

        $actualProductB  = $ProductB->anotherUsefulFunctionB($ProductA);
        $expectedProductB  = "The result of the B1 collaborating with the ({$actualProductA})";

        $this->assertEquals(
            $expectedProductB,
            $actualProductB,
            "actual value is not equals to expected"
        );
    }
    /**
     * Can create products A2, B2 from concrete factory2
     *
     * @test
     * @return void
     */
    public function test_can_create_product2_from_concrete_factory()
    {
        $ConcreteFactory = new ConcreteFactory2();
        $ProductA = $ConcreteFactory->createProductA();

        $this->assertInstanceOf(ConcreteProductA2::class, $ProductA);

        $actualProductA = $ProductA->usefulFunctionA();
        $expectedProductA = "The result of the product A2.";

        $this->assertEquals(
            $expectedProductA,
            $actualProductA,
            "actual value is not equals to expected"
        );

        $ProductB = $ConcreteFactory->createProductB();

        $this->assertInstanceOf(ConcreteProductB2::class, $ProductB);

        $actualProductB  = $ProductB->anotherUsefulFunctionB($ProductA);
        $expectedProductB  = "The result of the B2 collaborating with the ({$actualProductA})";

        $this->assertEquals(
            $expectedProductB,
            $actualProductB,
            "actual value is not equals to expected"
        );
    }
}

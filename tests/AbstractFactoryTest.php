<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\Car\BMWCar;
use Creational\AbstractFactory\Car\BenzCar;
use Creational\AbstractFactory\Car\CarAbstractFactory;


class AbstractFactoryTest extends TestCase
{
    /**
     * Can create bmw car
     *
     * @test
     * @return void
     */
    public function testCanCreateBMWCar()
    {
        $careFactory = new CarAbstractFactory(200000);
        $myCar = $careFactory->createBMWCare();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    /**
     * Can create benz car
     *
     * @test
     * @return void
     */
    public function testCanCreateBenzCar()
    {

        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}

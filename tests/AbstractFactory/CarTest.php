<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\Car\BMWCar;
use Creational\AbstractFactory\Car\BenzCar;
use Creational\AbstractFactory\Car\CarAbstractFactory;


class CarTest extends TestCase
{
    /**
     * Can create bmw car
     *
     * @test
     * @return void
     */
    public function test_can_create_BMW_car()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    /**
     * Can create benz car
     *
     * @test
     * @return void
     */
    public function test_canC_create_Benz_car()
    {

        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}

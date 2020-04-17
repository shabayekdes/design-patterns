<?php


namespace Tests\Builder;

use PHPUnit\Framework\TestCase;
use Creational\Builder\Car\CarProducer;
use Creational\Builder\Car\BmwCarBuilder;
use Creational\Builder\Car\BenzCarBuilder;
use Creational\Builder\Car\Models\BenzCarModel;
use Creational\Builder\Car\Models\BmwCarModel;

class CarTest extends TestCase
{
    /**
     * Can produce bmw car
     *
     * @test
     * @return void
     */
    public function test_can_produce_bmw_car()
    {
        $Builder = new BmwCarBuilder();
        $carProducer = new CarProducer($Builder);
        $myCar = $carProducer->ProduceCar();
        $this->assertInstanceOf(BmwCarModel::class, $myCar);
    }

    /**
     * Can produce benz car
     *
     * @test
     * @return void
     */
    public function test_can_produce_benz_car()
    {
        $Builder = new BenzCarBuilder();
        $carProducer = new CarProducer($Builder);
        $myCar = $carProducer->ProduceCar();
        $this->assertInstanceOf(BenzCarModel::class, $myCar);
    }
}

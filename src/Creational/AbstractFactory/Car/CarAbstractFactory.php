<?php


namespace Creational\AbstractFactory\Car;

use Creational\AbstractFactory\Car\BMWCar;
use Creational\AbstractFactory\Car\BenzCar;


class CarAbstractFactory
{

    private  $tax = 100000;
    private  $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public  function createBMWCare(): BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}

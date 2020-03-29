<?php


namespace Creational\AbstractFactory\Car;

use Creational\AbstractFactory\Car\BMWCar;
use Creational\AbstractFactory\Car\BenzCar;

class CarAbstractFactory
{
    /**
     * Tax
     *
     * @var $tax
     */
    private  $tax = 100000;

    /**
     * Price
     *
     * @var $price
     */
    private  $price;

    /**
     * Construct function
     *
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Create BMW Car Instance
     *
     * @return BMWCar
     */

    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    /**
     * Create Benz Car Instance
     *
     * @return BenzCar
     */

    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}

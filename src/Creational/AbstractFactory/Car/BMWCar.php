<?php


namespace Creational\AbstractFactory\Car;

use Creational\AbstractFactory\Car\Interfaces\CarInterface;


class BMWCar implements CarInterface
{
    /**
     * Price
     *
     * @var $price
     */
    private $price;

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
     * Calculate price
     *
     * @return void
     */
    public function calculatePrice()
    {
        return $this->price + 120000;
    }
}

<?php


namespace Creational\AbstractFactory\Car;

use Creational\AbstractFactory\Car\Interfaces\CarInterface;


class BenzCar implements CarInterface
{
    /**
     * Price
     *
     * @var $price
     */
    private $price;

    /**
     * Tax
     *
     * @var $tax
     */
    private $tax;

    /**
     * Construct function
     *
     * @param $price
     * @param $tax
     */
    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * Calculate price
     *
     * @return void
     */
    public function calculatePrice()
    {
        return $this->price + $this->tax + 200000;
    }
}

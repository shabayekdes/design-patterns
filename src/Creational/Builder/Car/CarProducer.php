<?php

namespace Creational\Builder\Car;

use Creational\Builder\Car\Interfaces\CarBuilderInterface;
use Creational\Builder\Car\Models\CarModel;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */
    private  $Builder;

    /**
     * Car Producer construct
     *
     * @param  mixed $builder
     * @return void
     */
    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }

    public  function  ProduceCar(): CarModel
    {
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        return  $this->Builder->getCar();
    }
}
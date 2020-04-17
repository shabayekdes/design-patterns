<?php

namespace Creational\Builder\Car;

use Creational\Builder\Car\Interfaces\CarBuilderInterface;
use Creational\Builder\Car\Models\BmwCarModel;
use Creational\Builder\Car\Models\CarModel;

class BmwCarBuilder implements CarBuilderInterface
{
    /**
     * @var CarModel $type
     */
    private $type;

    /**
     * Create BmwCarModel Method
     *
     * @return void
     */
    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BmwCarModel();
    }

    /**
     * Add Body Method
     *
     * @return void
     */
    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY', 'body');
    }

    /**
     * Add Doors Method
     *
     * @return void
     */
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR', 'door');
    }

    /**
     * Add Engine Method
     *
     * @return void
     */
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE', 'engine');
    }
    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL', 'wheel');
    }

    /**
     * Get Car Model
     *
     * @return CarModel
     */
    public function getCar(): CarModel
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}

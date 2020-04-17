<?php

namespace Creational\Builder\Car\Interfaces;

use Creational\Builder\Car\Models\CarModel;

/**
 * Car Builder interface
 */
interface CarBuilderInterface
{
    public  function  createCar();
    public  function  addEngine();
    public  function  addDoors();
    public  function  addBody();
    public  function  addWheel();
    public  function  getCar(): CarModel;
}

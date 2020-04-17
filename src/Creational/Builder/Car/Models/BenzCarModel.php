<?php

namespace Creational\Builder\Car\Models;


class BenzCarModel extends CarModel
{
    /**
     * data
     *
     * @var array
     */
    private $data = [];

    /**
     * set Part
     *
     * @param  mixed $name
     * @param  mixed $value
     * @return void
     */
    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
<?php

namespace Creational\Builder\Product\Models;

/**
 * It makes sense to use the Builder pattern only when your products are quite
 * complex and require extensive configuration.
 *
 * Unlike in other creational patterns, different concrete builders can produce
 * unrelated products. In other words, results of various builders may not
 * always follow the same interface.
 */
class Product1
{
    public $parts = [];

    public function listParts()
    {
        return "Product parts: " . implode(', ', $this->parts);
    }
}

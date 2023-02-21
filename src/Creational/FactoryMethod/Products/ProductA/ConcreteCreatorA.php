<?php

namespace App\Creational\FactoryMethod\Products\ProductA;

use App\Creational\FactoryMethod\Creator\AbstractCreator;
use App\Creational\FactoryMethod\Products\ProductA\Product;

class ConcreteCreatorA extends AbstractCreator
{
    public function createShape()
    {
        return new Product();
    }
}

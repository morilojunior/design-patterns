<?php

namespace App\Creational\FactoryMethod\Creator;

use App\Creational\FactoryMethod\Products\Shape;

abstract class AbstractCreator
{
    abstract protected function createShape();

    public function render()
    {
        return $this->createShape();
    }
}

<?php

namespace App\Creational\FactoryMethod\Products\ProductA;

use App\Creational\FactoryMethod\Products\Shape;

class Product implements Shape
{
    public function action(): string
    {
        return 'Rolar';
    }
}

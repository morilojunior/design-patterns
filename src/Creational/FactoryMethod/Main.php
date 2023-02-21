<?php

namespace App\Creational\FactoryMethod;

use App\Creational\FactoryMethod\Products\ProductA\ConcreteCreatorA;

class Main
{
    public function execute($type)
    {
        $object = null;

        if ($type === 'Bola') {
            $object = new ConcreteCreatorA();
        }

        return $object->render();
    }
}

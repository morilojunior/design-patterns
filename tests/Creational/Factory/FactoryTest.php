<?php

namespace Test\Creational\Factory;

use PHPUnit\Framework\TestCase;
use App\Creational\FactoryMethod\Main;

class FactoryTest extends TestCase
{
    public function testFunctionName()
    {
        $factory = new Main();
        $objeto = $factory->execute('Bola');
        $this->assertEquals('Rolar', $objeto->action());

        // $objeto = $factory->execute('Quadrado');
        // $this->assertEquals('Tombar', $objeto->action());
    }
}

<?php

namespace Test\Creational\Factory;

use PHPUnit\Framework\TestCase;
use App\Creational\Factory\Factory;

class FactoryTest extends TestCase
{
    public function testFunctionName()
    {
        $factory = new Factory();
        $this->assertEquals(12, $factory->FunctionName(11));
    }
}

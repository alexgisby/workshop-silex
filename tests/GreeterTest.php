<?php

namespace DemoApplication\Tests;

use DemoApplication\Greeter;

class GreeterTest extends \PHPUnit_Framework_TestCase
{
    public function testGreeting()
    {
        $g = new Greeter();
        $this->assertEquals('Hello World', $g->getMessage());
    }
}

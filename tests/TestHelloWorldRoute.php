<?php

use PHPUnit\Framework\TestCase;

class TestHelloWorldRoute extends TestCase
{
    public function testHelloWorldRoute() {

        $result = file_get_contents('http://localhost:4444/');
        $this->assertEquals('Hello World!', $result);
    }

}

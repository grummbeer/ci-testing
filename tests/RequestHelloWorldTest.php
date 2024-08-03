<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use CiTesting\RequestHelloWorld;

class RequestHelloWorldTest extends TestCase
{
    public function testHelloWorldRoute() {
        $this->assertEquals('Hello World!', RequestHelloWorld::helloWorld());
    }
}
<?php

namespace Tests;

use CiTesting\RequestHelloWorld;
use PHPUnit\Framework\TestCase;

class RequestHelloWorldTest extends TestCase
{
    public function testHelloWorldRoute(): void
    {
        $this->assertEquals('Hello World!', RequestHelloWorld::helloWorld());
    }

    public function testPowRoute(): void
    {
        $this->assertSame(4, RequestHelloWorld::pow());
    }
}

<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use CiTesting\SomeMath;

class SomeMathTest extends TestCase
{
    public function testHelloWorldRoute(): void
    {
        $math = new SomeMath();
        $this->assertSame('4', $math->pow(2));
    }
}

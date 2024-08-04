<?php

namespace Tests;

use CiTesting\SomeMath;
use PHPUnit\Framework\TestCase;

class SomeMathTest extends TestCase
{
    public function testHelloWorldRoute(): void
    {
        $math = new SomeMath();
        $this->assertSame('4', $math->pow(2));

    }
}

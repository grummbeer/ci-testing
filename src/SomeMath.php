<?php

namespace CiTesting;

use function bcpow;

class SomeMath
{
    public function pow(int $number): float|int
    {


        return bcpow($number, 2);
    }
}

<?php

namespace CiTesting;

use function bcadd;
use function bcpow;

class SomeMath
{

    public function pow(int $number): float|int
    {
        return bcpow($number, 2);
    }
}

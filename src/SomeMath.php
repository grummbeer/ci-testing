<?php

namespace CiTesting;

use function bcpow;

class SomeMath
{
    public function pow(int $number): string
    {
        return bcpow((string) $number, '2');
    }
}

<?php

namespace CiTesting;

class RequestHelloWorld
{
    public static function helloWorld(): ?string
    {
        return file_get_contents('http://localhost:4444/');
    }

    public static function pow(): int
    {
        // @todo make the URL and port dynamic
        return (int) file_get_contents('http://localhost:4444/pow.php');
    }

    public static function random(): string
    {
        return "random";
    }
}

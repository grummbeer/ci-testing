<?php

namespace CiTesting;

class RequestHelloWorld
{
    public static function helloWorld(): ?string
    {
        return file_get_contents('http://localhost:4444/');
    }
}

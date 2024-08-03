<?php

/*
 * invalid docblock?
 */
class myclass
{
    private $name;

    public function getname($name = 'foiobar')
    {

        return $this->name;
    }
}

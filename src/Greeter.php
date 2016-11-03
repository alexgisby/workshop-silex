<?php

namespace DemoApplication;

class Greeter
{
    protected $name = 'World';

    public function __construct($name = 'World')
    {
        $this->name = $name;
    }

    public function getMessage()
    {
        return 'Hello '.$this->name;
    }
}
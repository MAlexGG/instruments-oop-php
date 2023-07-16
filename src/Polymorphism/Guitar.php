<?php

namespace App\Polymorphism;

class Guitar extends StringInstruments
{
    public function __construct(string $color, bool $electric)
    {
        Parent::__construct($color, $electric);
        $this->strings = 6;
    }

    public function play()
    {
        return "Hi, I'm a guitar of {$this->strings} strings";
    }
}

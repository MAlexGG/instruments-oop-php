<?php

namespace App\Inheritance;

use App\Inheritance\StringInstruments;

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

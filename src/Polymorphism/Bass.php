<?php

namespace App\Polymorphism;

use App\Inheritance\StringInstruments;

class Bass extends StringInstruments implements PlayTemplate
{
    public function __construct(string $color, bool $electric)
    {
        Parent::__construct($color, $electric);
        $this->strings = 4;
    }

    public function play()
    {
        return "Hi, I'm a bass of {$this->strings} strings";
    }
}

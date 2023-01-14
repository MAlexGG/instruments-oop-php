<?php

namespace App\Abstraction;

class Guitar
{
    public int $strings;
    public string $color;
    public bool $electric;

    public function __construct(string $color, bool $electric)
    {
        $this->strings = 6;
        $this->color = $color;
        $this->electric = $electric;
    }

    public function play()
    {
        return "Hi, I'm a guitar of {$this->strings} strings";
    }
}

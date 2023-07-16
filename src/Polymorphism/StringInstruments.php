<?php

namespace App\Polymorphism;

abstract class StringInstruments implements PlayTemplate
{
    protected int $strings;
    private string $color;
    private bool $electric;

    public function __construct(string $color, bool $electric)
    {
        $this->color = $color;
        $this->electric = $electric;
    }

    public function getStrings()
    {
        return $this->strings;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $newColor)
    {
        return $this->color = $newColor;
    }

    public function getElectric()
    {
        return $this->electric;
    }

    public function startPlaying(PlayTemplate $playTemplate)
    {
        return $playTemplate->play();
    }
}

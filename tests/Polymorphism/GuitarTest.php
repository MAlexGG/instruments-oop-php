<?php

namespace Tests\Polymorphism;

use App\Polymorphism\Guitar;
use PHPUnit\Framework\TestCase;

class GuitarTest extends TestCase
{
    public function testIfGuitarHas6Strings()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->getStrings();
        $this->assertEquals(6, $sut);
    }

    public function testIfGuitarCanPlay()
    {
        $guitar = new Guitar('black', false);
        $sut = $guitar->startPlaying($guitar);
        $this->assertEquals("Hi, I'm a guitar of 6 strings", $sut);
    }
}
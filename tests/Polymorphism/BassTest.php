<?php

namespace Tests\Polymorphism;

use App\Polymorphism\Bass;
use PHPUnit\Framework\TestCase;

class BassTest extends TestCase
{
    public function testIfBassHas4Strings()
    {
        $bass = new Bass('black', true);
        $sut = $bass->getStrings();
        $this->assertEquals(4, $sut);
    }
    
    public function testIfBassCanPlay()
    {
        $bass = new Bass('black', false);
        $sut = $bass->startPlaying($bass);
        $this->assertEquals("Hi, I'm a bass of 4 strings", $sut);
    }
}
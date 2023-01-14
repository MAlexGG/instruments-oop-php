<?php

namespace Tests\Abstraction;

use App\Abstraction\Guitar;
use PHPUnit\Framework\TestCase;

class GuitarTest extends TestCase
{
    public function testIfGuitarHas6Strings()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->strings;
        $this->assertEquals(6, $sut);
    }

    public function testIfGuitarHasColor()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->color;
        $this->assertEquals('black', $sut);
    }

    public function testIfGuitarIsElectric()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->electric;
        $this->assertTrue($sut);
    }

    public function testIfGuitarIsNotElectric()
    {
        $guitar = new Guitar('black', false);
        $sut = $guitar->electric;
        $this->assertFalse($sut);
    }

    public function testIfGuitarCanPlay()
    {
        $guitar = new Guitar('black', false);
        $sut = $guitar->play();
        $this->assertEquals("Hi, I'm a guitar of 6 strings", $sut);
    }
}

<?php

namespace Tests\Encapsulation;

use App\Encapsulation\Guitar;
use PHPUnit\Framework\TestCase;

class GuitarTest extends TestCase
{
    public function testIfGuitarHas6Strings()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->getStrings();
        $this->assertEquals(6, $sut);
    }

    public function testIfGuitarHasColor()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->getColor();
        $this->assertEquals('black', $sut);
    }

    public function testIfGuitarCanChangeOfColor()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->setColor('red');
        $this->assertEquals('red', $sut);
    }

    public function testIfGuitarIsElectric()
    {
        $guitar = new Guitar('black', true);
        $sut = $guitar->getElectric();
        $this->assertTrue($sut);
    }

    public function testIfGuitarIsNotElectric()
    {
        $guitar = new Guitar('black', false);
        $sut = $guitar->getElectric();
        $this->assertFalse($sut);
    }

    public function testIfGuitarCanPlay()
    {
        $guitar = new Guitar('black', false);
        $sut = $guitar->play();
        $this->assertEquals("Hi, I'm a guitar of 6 strings", $sut);
    }
}

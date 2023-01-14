<?php

namespace Tests\Inheritance;

use App\Inheritance\Bass;
use PHPUnit\Framework\TestCase;

class BassTest extends TestCase
{
    public function testIfGuitarHas6Strings()
    {
        $bass = new Bass('black', true);
        $sut = $bass->getStrings();
        $this->assertEquals(4, $sut);
    }

    public function testIfGuitarCanPlay()
    {
        $bass = new Bass('black', false);
        $sut = $bass->play();
        $this->assertEquals("Hi, I'm a bass of 4 strings", $sut);
    }
}

<?php

namespace Tests\Polymorphism;

use App\Polymorphism\Bass;
use App\Polymorphism\Guitar;
use App\Polymorphism\PlayController;
use PHPUnit\Framework\TestCase;

class PlayControllerTest extends TestCase
{
    public function testIfCanPlayAGuitar()
    {
        $instrument = new PlayController();
        $sut = $instrument->start(new Guitar('black', true));
        $this->assertEquals("Hi, I'm a guitar of 6 strings", $sut);
    }

    public function testIdCanPlayABass()
    {
        $controller = new PlayController();
        $sut = $controller->start(new Bass('black', true));
        $this->assertEquals("Hi, I'm a bass of 4 strings", $sut);
    }
}

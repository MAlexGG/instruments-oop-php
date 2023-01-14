<?php

namespace App\Polymorphism;

class PlayController
{
    public function start(PlayTemplate $playTemplate)
    {
        return $playTemplate->play();
    }
}

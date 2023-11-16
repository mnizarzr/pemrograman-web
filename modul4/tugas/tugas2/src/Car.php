<?php

namespace TugasDua;

use TugasDua\Traits\Engine as EngineTrait;


class Car extends Vehicle
{
    use EngineTrait;

    public function start()
    {
        $this->startEngine();
    }

    public function stop()
    {
        $this->stopEngine();
    }
}

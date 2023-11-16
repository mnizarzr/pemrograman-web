<?php

namespace TugasDua;

abstract class Vehicle
{
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    abstract public function start();

    abstract public function stop();

    public function displayInfo()
    {
        echo "Vehicle: {$this->year} {$this->brand} {$this->model}\n";
    }
}

<?php

require_once './vendor/autoload.php';

use TugasDua\Car;
use TugasDua\Motorcycle;

class Main
{
    public function __invoke()
    {
        $car = new Car("Toyota", "Camry", 2022);
        $car->start();
        $car->displayInfo();
        $car->stop();

        echo "\n";

        $motorcycle = new Motorcycle("Harley", "Davidson", 2022);
        $motorcycle->start();
        $motorcycle->displayInfo();
        $motorcycle->stop();

        echo "\n";
    }
}

$main = new Main();
$main();

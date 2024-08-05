<?php

namespace Src\Station16\Question;

class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
        $human = new Human($humanName);
        $car = new Car($carName);

        echo $car->run();
        echo $human->buyCar($car);
    }
}

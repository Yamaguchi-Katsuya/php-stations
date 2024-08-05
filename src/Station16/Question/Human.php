<?php

namespace Src\Station16\Question;

class Human
{
    private string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function buyCar(Car $car): void
    {
        print $this->name . 'は' . $car->name . 'を購入しました';
    }
}

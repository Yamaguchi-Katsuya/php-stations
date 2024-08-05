<?php

namespace Src\Station16\Question;

class Human
{
    private string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function buyCar(Car $car): string
    {
        return $this->name . 'は' . $car->name . 'を購入しました';
    }
}

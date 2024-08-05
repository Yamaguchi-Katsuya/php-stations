<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        $colors = [
            'red',
            'blue',
            'yellow',
        ];

        unset($colors[2]);
        array_splice($colors, 1, 0, 'green');
        array_splice($colors, 0, 0, 'white');
        array_splice($colors, 1, 0, 'black');

        return $colors;
    }
}

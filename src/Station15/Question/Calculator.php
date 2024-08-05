<?php

namespace Src\Station15\Question;

class Caluculator
{
    public function multiply(array $multiplieds, int $multiplier): array|false
    {
        if (!$multiplieds) {
            return false;
        }

        return array_map(function ($multiplied) use ($multiplier) {
            return $multiplied * $multiplier;
        }, $multiplieds);
    }
}

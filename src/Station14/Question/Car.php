<?php

namespace Src\Station14\Question;

class Car
{
    const DOOR = 5;
    private static int $passenger = 0;

    private function getPassenger(): void
    {
        echo self::$passenger;
    }

    public function pickup(): void
    {
        self::$passenger++;
        $this->getPassenger();
    }

    public function getDoors(): void
    {
        echo self::DOOR;
    }
}

<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    public function __construct(string $name = '車', int $maxSpeed = 100)
    {
        parent::__construct($name, $maxSpeed);
    }

    public function hazard(): void
    {
        print 'ハザードランプを点灯する';
    }

    protected function run(): void
    {
        $this->maxSpeed = 60;
        parent::run();
    }

    protected function back(): void
    {
        $this->hazard();
        parent::back();
    }
}

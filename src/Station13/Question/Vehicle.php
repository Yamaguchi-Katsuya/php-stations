<?php

namespace Src\Station13\Question;

class Vehicle
{
    protected string $name;

    protected int $maxSpeed;

    public function __construct(string $name = '車', int $maxSpeed = 100)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
    }

    protected function run(): void
    {
        print 'アクセルを踏む';
    }

    private function stop(): void
    {
        print 'ブレーキを踏む';
    }

    private function right(): void
    {
        print '右にハンドルを回す';
    }

    private function left(): void
    {
        print '左にハンドルを回す';
    }

    protected function back(): void
    {
        print 'バックする';
    }

    public function turnRight(): void
    {
        $this->stop();
        $this->right();
        $this->run();
    }

    public function backLeft(): void
    {
        $this->stop();
        $this->left();
        $this->back();
    }
}

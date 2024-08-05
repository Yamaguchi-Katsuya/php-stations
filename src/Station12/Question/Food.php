<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    protected int $originalPrice;
    protected CarbonImmutable $useByDate;

    public function __construct(int $originalPrice, CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
        $this->useByDate = $useByDate;
    }

    public function price(): int
    {
        if ($this->useByDate->diffInHours(CarbonImmutable::now()) < 5) {
            return (int) floor($this->originalPrice / 2);
        }

        return $this->originalPrice;
    }
}

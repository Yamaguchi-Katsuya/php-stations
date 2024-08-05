<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        // 予算上限
        $budget = 300;

        // 単価が予算以下のお菓子を取得
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);

        // 予算内で収まる3つのお菓子の組み合わせを見つける
        $combination = [];
        do {
            $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
            $combination = $this->makeCombination($lessThanBudgetSweets, $keys);
            $totalPrice = array_sum(array_column($combination, 'price'));
        } while ($totalPrice > $budget);

        return $combination;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget): array
    {
        return array_filter($sweets, function ($sweet) use ($budget) {
            return $sweet['price'] <= $budget;
        });
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget): array
    {
        $keys = [];
        shuffle($lessThanBudgetSweets);
        $totalPrice = 0;
        foreach ($lessThanBudgetSweets as $key => $sweet) {
            if ($totalPrice + $sweet['price'] <= $budget) {
                $keys[] = $key;
                $totalPrice += $sweet['price'];
            }
            if (count($keys) == 3) {
                break;
            }
        }
        return $keys;
    }

    private function makeCombination(array $sweets, array $keys): array
    {
        return array_map(function ($key) use ($sweets) {
            return $sweets[$key];
        }, $keys);
    }
}

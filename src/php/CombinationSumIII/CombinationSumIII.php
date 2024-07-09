<?php

/**
 * Autogenerated file for problem CombinationSumIII
 */

namespace LeetCode\Problems\CombinationSumIII;

class CombinationSumIII
{
    protected $combination = [];
    /**
     * @param Integer $k
     * @param Integer $n
     * @return Integer[][]
     */
    public function combinationSum3($k, $n)
    {
        $track = [];
        $this->buildCombination(1, $track, 0, $k, $n);
        return $this->combination;
    }

    public function buildCombination($begin, $track, $sum, $k, $n)
    {
        if (count($track) > $k || $sum > $n) {
            return;
        }
        if (count($track) == $k && $sum == $n) {
            $this->combination[] = $track;
            return;
        }
        for ($i = $begin; $i <= 9; $i++) {
            $track[] = $i;
            $sum = $sum + $i;
            $this->buildCombination($i + 1, $track, $sum, $k, $n);
            array_pop($track);
            $sum = $sum - $i;
        }
    }
}

<?php

namespace LeetCode\Problems\TwoSums;

class TwoSums
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $total = count($nums);
        foreach ($nums as $key => $value) {
            for ($i = ($key + 1); $i < $total; $i++) {
                if ((($value) + ($nums[$i])) === $target) {
                    return [$key, $i];
                }
            }
        }
    }
}

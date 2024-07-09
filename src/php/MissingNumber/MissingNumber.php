<?php

/**
 * Autogenerated file for problem MissingNumber
 */

namespace LeetCode\Problems\MissingNumber;

class MissingNumber
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function missingNumber($nums)
    {
        $n = count($nums);
        $targetSum = $n * ($n + 1) / 2;
        $actualSum = array_sum($nums);
        return $targetSum - $actualSum;
    }
}

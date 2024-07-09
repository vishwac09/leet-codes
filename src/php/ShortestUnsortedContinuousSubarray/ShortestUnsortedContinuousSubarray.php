<?php

/**
 * Autogenerated file for problem ShortestUnsortedContinuousSubarray
 */

namespace LeetCode\Problems\ShortestUnsortedContinuousSubarray;

class ShortestUnsortedContinuousSubarray
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findUnsortedSubarray($nums)
    {
        $sortedNums = $nums;
        sort($sortedNums);
        $start = PHP_INT_MAX;
        $end = PHP_INT_MIN;
        for ($i = 0; $i < count($nums); $i++) {
            if ($sortedNums[$i] != $nums[$i]) {
                $start = min($i, $start);
                $end = max($i, $end);
            }
        }
        return $end - $start >= 0 ? $end - $start + 1 : 0;
    }
}

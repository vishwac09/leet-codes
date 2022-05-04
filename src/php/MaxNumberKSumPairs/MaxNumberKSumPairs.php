<?php

/**
 * Autogenerated file for problem MaxNumberKSumPairs
 */

namespace LeetCode\Problems\MaxNumberKSumPairs;

class MaxNumberKSumPairs
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxOperations($nums, $k) {
        $length = count($nums);
        $indexes = [];
        $count = 0;
        for ($i=0;$i<$length;$i++) {
            for ($j=0;$j<$length;$j++) {
                if ($i != $j && !isset($indexes[$i]) && !isset($indexes[$j])) {
                    if ($nums[$i] + $nums[$j] == $k) {
                        $indexes[$i] = $i;
                        $indexes[$j] = $j;
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}

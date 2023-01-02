<?php

/**
 * Autogenerated file for problem NondecreasingArray
 */

namespace LeetCode\Problems\NondecreasingArray;

class NondecreasingArray
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function checkPossibility($nums) {
        $flag = false;
        for($i=0;$i<count($nums)-1;++$i) {
            if ($nums[$i+1] < $nums[$i]) {
                if ($flag) {
                return false;
                }
                $flag = true;
                if (($i-1 < 0) || ($nums[$i-1] <= $nums[$i+1])) {
                    $nums[$i] =$nums[$i+1];
                } else {
                    $nums[$i+1] = $nums[$i];
                }
            }
        }
        return true;
    }
}
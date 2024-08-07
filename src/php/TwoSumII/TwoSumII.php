<?php

/**
 * Autogenerated file for problem TwoSumII
 */

namespace LeetCode\Problems\TwoSumII;

class TwoSumII
{
    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($numbers, $target)
    {
        $h = [];
        foreach($numbers as $key => $value) {
            $tmp = $target - $value;
            if(array_key_exists($tmp, $h)) {
                $old_key = $h[$tmp];
                return [$old_key + 1,$key + 1];
            } else {
                $h[$value] = $key;
            }
        }
    }
}

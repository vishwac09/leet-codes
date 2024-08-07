<?php

/**
 * Autogenerated file for problem AddDigits
 */

namespace LeetCode\Problems\AddDigits;

class AddDigits
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function addDigits($num)
    {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = floor($num / 10);
            if ($num == 0 && $sum > 9) {
                $num = $sum;
                $sum = 0;
            }
        }
        return $sum;
    }
}

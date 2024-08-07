<?php

/**
 * Autogenerated file for problem PlusOne
 */

namespace LeetCode\Problems\PlusOne;

class PlusOne
{
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    public function plusOne($digits)
    {
        $length = count($digits) - 1;
        $carry = 1;
        for ($i = $length; $i >= 0; $i--) {
            if (($digits[$i] + $carry) > 9) {
                $digits[$i] = 0;
                $carry = 1;
            } else {
                $digits[$i] += 1;
                $carry = 0;
                break;
            }
        }
        if ($carry && count($digits) > 0) {
            array_unshift($digits, $carry);
        }
        return $digits;
    }
}

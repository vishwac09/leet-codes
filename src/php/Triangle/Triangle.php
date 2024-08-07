<?php

/**
 * Autogenerated file for problem Triangle
 */

namespace LeetCode\Problems\Triangle;

class Triangle
{
    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    public function minimumTotal($triangle)
    {
        $sum = 0;
        foreach ($triangle as $value) {
            $sum += min($value);
        }
        return $sum;
    }
}

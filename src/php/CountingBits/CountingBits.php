<?php

/**
 * Autogenerated file for problem CountingBits
 */

namespace LeetCode\Problems\CountingBits;

class CountingBits
{
    /**
     * @param Integer $n
     * @return Integer[]
     */
    public function countBits($n)
    {
        $res = [];
        for ($i = 0;$i <= $n;$i++) {
            $res[] = substr_count(decbin($i), 1);
        }
        return $res;
    }
}

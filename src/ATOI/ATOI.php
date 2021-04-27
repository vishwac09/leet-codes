<?php

namespace LeetCode\Problems\ATOI;

class ATOI
{
    /**
     * @param String $s
     * @return Integer
     */
    public function myAtoi(string $s): int
    {
        $s = preg_replace("/[A-Za-z](.*)/", "", trim($s));
        $number = intval($s);
        if($number >= 2147483648) return 2147483647;
        if($number < -2147483647) return -2147483648;
        return $number;
    }
}

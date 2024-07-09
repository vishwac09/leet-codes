<?php

/**
 * Autogenerated file for problem RichestCustomerWealth
 */

namespace LeetCode\Problems\RichestCustomerWealth;

class RichestCustomerWealth
{
    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    public function maximumWealth($accounts)
    {
        $max = 0;
        foreach ($accounts as $key => $value) {
            $temp = array_sum($value);
            $max = $max >= $temp ? $max : $temp;
        }
        return $max;
    }
}

<?php

/**
 * Autogenerated file for problem MaximumIceCreamBars
 */

namespace LeetCode\Problems\MaximumIceCreamBars;

class MaximumIceCreamBars
{
    /**
     * @param int[] $costs
     * @param int $coins
     * @return int
     */
    function maxIceCream($costs, $coins) {
        sort($costs);
        $n = count($costs);
        $ice_cream = 0;
        while ($ice_cream< $n&& $costs[$ice_cream] <= $coins) {
            $coins -= $costs[$ice_cream];
            $ice_cream += 1;
        }
        return $ice_cream;
    }
}

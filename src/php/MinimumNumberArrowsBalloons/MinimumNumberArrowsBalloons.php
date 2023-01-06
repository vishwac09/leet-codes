<?php

/**
 * Autogenerated file for problem MinimumNumberArrowsBalloons
 */

namespace LeetCode\Problems\MinimumNumberArrowsBalloons;

class MinimumNumberArrowsBalloons
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function findMinArrowShots($points) {
        if (count($points) === 0 ) {
            return 0;
        }
        uasort($points, function($a, $b) {
            return (int) ($a[0] <=> $b[0] && $a[1] <=> $b[1]);
        });
        $result = 1;
        // 9
        $pierce_point = $points[0][1];
        for ($i=1; $i<count($points); $i++) {
            if ($points[$i][0] <= $pierce_point && $pierce_point <= $points[$i][1]) {
                $pierce_point = min($pierce_point, $points[$i][1]);
            } else {
                $result += 1;
                $pierce_point = $points[$i][1];
            }
        }
        return $result/2;
    }
}

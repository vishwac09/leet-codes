<?php

namespace LeetCode\Problems\ThreeSum;

class ThreeSum
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum(array $nums): array
    {
        if (count($nums) < 3) {
            return [];
        }
        $result = [];
        $length = count($nums);
        foreach ($nums as $key => $value) {
            $left = $key + 1;
            $right = $key + 2;
            while ($right < $length) {
                if (($value + $nums[$left] + $nums[$right]) === 0) {
                    $result[] = [$value, $nums[$left], $nums[$right]];
                }
                $left ++;
                $right++;
            }
        }
        return $result;
    }
}

//$ts = new ThreeSum();
//$y = $ts->threeSum([-1,0,1,2,-1,-4,-1,0,1]);
//print_r($y);

//$y = array_diff([1,0,1], [1,1,0]);
//print_r($y);

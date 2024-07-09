<?php

namespace LeetCode\Problems\MedianSortedArrays;

class MedianSortedArrays
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $final = array_merge($nums1, $nums2);
        sort($final);
        $elemCount = count($final);
        $isOdd = $elemCount % 2 !== 0;
        if ($isOdd) {
            return (float) $final[(int)floor($elemCount / 2)];
        } else {
            $middle = $elemCount / 2;
            return (float) (($final[$middle] + $final[$middle - 1]) / 2);
        }
    }
}

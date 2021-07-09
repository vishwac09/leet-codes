<?php

namespace LeetCode\Problems\MaximumProduct;

class MaximumProduct
{
  
  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function maxProductDifference($nums) {
    sort($nums);
    $count = count($nums);
    return ($nums[$count-1]*$nums[$count-2]) - ($nums[0]*$nums[1]);
  }
}
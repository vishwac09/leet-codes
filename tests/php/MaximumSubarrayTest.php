<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MaximumSubarray\MaximumSubarray;
use PHPUnit\Framework\TestCase;

final class MaximumSubarrayTest extends TestCase
{
    public function testMaximumSubarrayExample1()
    {
        $msa = new MaximumSubarray();
        $this->assertEquals(6, $msa->maxSubArray([4, -1 , 2, 1]));
    }
}

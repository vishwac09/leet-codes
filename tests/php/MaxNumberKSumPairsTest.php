<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MaxNumberKSumPairs\MaxNumberKSumPairs;
use PHPUnit\Framework\TestCase;

final class MaxNumberKSumPairsTest extends TestCase
{
    public function testMaxNumberKSumPairsTestExample1()
    {
        $mnksp = new MaxNumberKSumPairs();
        $this->assertEquals(2, $mnksp->maxOperations([1,2,3,4], 5));
        $this->assertEquals(1, $mnksp->maxOperations([3,1,3,4,3], 6));
    }
}

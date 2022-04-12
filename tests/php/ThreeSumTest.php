<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ThreeSum\ThreeSum;
use PHPUnit\Framework\TestCase;

final class ThreeSumTest extends TestCase
{
    public function testThreeSum()
    {
        $threeSum = new ThreeSum();
        //$this->assertSame([[-1,-1,2],[-1,0,1]], $threeSum->threeSum([-1,0,1,2,-1,-4]));
        $this->assertSame([], $threeSum->threeSum([]));
        $this->assertSame([], $threeSum->threeSum([0]));
    }
}

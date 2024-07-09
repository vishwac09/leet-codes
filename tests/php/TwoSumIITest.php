<?php

namespace LeetCode\Tests;

use LeetCode\Problems\TwoSumII\TwoSumII;
use PHPUnit\Framework\TestCase;

final class TwoSumIITest extends TestCase
{
    public function testTwoSumIITestExample1()
    {
        $ts = new TwoSumII();
        $this->assertEquals([1,2], $ts->twoSum([2,7,11,15], 9));
    }
}

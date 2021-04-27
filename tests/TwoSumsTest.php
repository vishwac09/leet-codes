<?php

namespace LeetCode\Tests;

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\TwoSums\TwoSums;

final class TwoSumsTest extends TestCase
{
    public function testTwoSumExample1(): void
    {
        $twoSum = new TwoSums();
        $this->assertSame([0,1], $twoSum->twoSum([2, 7, 11, 15], 9));
        $this->assertSame([1,2], $twoSum->twoSum([3,2,4], 6));
        $this->assertSame([0,1], $twoSum->twoSum([3,3], 6));
        $this->assertNotSame([0,2], $twoSum->twoSum([2, 7, 11, 15], 9));
    }
}

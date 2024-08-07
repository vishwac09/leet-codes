<?php

/**
 * Autogenerated test case file for problem RangeSumQueryTest
 */

namespace LeetCode\Tests;

use LeetCode\Problems\RangeSumQuery\RangeSumQuery;
use PHPUnit\Framework\TestCase;

final class RangeSumQueryTest extends TestCase
{
    public function testRangeSumQueryTestExample1()
    {
        $rsq = new RangeSumQuery([-2, 0, 3, -5, 2, -1]);
        $this->assertEquals(1, $rsq->sumRange(0, 2));
        $this->assertEquals(-1, $rsq->sumRange(2, 5));
        $this->assertEquals(-3, $rsq->sumRange(0, 5));
    }
}

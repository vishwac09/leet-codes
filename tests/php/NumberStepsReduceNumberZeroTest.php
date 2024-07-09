<?php

namespace LeetCode\Tests;

use LeetCode\Problems\NumberStepsReduceNumberZero\NumberStepsReduceNumberZero;
use PHPUnit\Framework\TestCase;

final class NumberStepsReduceNumberZeroTest extends TestCase
{
    public function testNumberStepsReduceNumberZeroTestExample1()
    {
        $nsrns = new NumberStepsReduceNumberZero();
        $this->assertEquals(6, $nsrns->numberOfSteps(14));
        $this->assertEquals(7, $nsrns->numberOfSteps(15));
    }
}

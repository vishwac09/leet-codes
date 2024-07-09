<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RunningSum1dArray\RunningSum1dArray;
use PHPUnit\Framework\TestCase;

final class RunningSum1dArrayTest extends TestCase
{
    public function testRunningSum1dArrayTestExample1()
    {
        $rsa = new RunningSum1dArray();
        $this->assertEquals([1,3,6,10], $rsa->runningSum([1,2,3,4]));
    }
}

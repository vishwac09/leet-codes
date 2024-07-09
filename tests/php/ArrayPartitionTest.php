<?php

/**
 * Autogenerated test case file for problem ArrayPartitionTest
 */

namespace LeetCode\Tests;

use LeetCode\Problems\ArrayPartition\ArrayPartition;
use PHPUnit\Framework\TestCase;

final class ArrayPartitionTest extends TestCase
{
    public function testArrayPartitionTestExample1()
    {
        $ap = new ArrayPartition();
        $this->assertSame(4, $ap->arrayPairSum([1,4,3,2]));
    }
}

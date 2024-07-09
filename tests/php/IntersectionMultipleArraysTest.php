<?php

namespace LeetCode\Tests;

use LeetCode\Problems\IntersectionMultipleArrays\IntersectionMultipleArrays;
use PHPUnit\Framework\TestCase;

final class IntersectionMultipleArraysTest extends TestCase
{
    public function testIntersectionMultipleArraysTestExample1()
    {
        $ima = new IntersectionMultipleArrays();
        $this->assertEquals([0 => 3,3 => 4], $ima->intersection([[3,1,2,4,5],[1,2,3,4],[3,4,5,6]]));
    }
}

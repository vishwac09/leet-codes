<?php

namespace LeetCode\Tests;

use LeetCode\Problems\IntersectionTwoArrays\IntersectionTwoArrays;
use PHPUnit\Framework\TestCase;

final class IntersectionTwoArraysTest extends TestCase
{
    public function testIntersectionTwoArraysTestExample1()
    {
        $ita = new IntersectionTwoArrays();
        $this->assertEquals([1 => 2], $ita->intersection([1,2,2,1], [2,2]));
    }
}

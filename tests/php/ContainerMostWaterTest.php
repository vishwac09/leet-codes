<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ContainerMostWater\ContainerMostWater;
use PHPUnit\Framework\TestCase;

final class ContainerMostWaterTest extends TestCase
{
    public function testContainerMostWaterTestExample1()
    {
        $cmw = new ContainerMostWater();
        $this->assertEquals(49, $cmw->maxArea([1,8,6,2,5,4,8,3,7]));
        $this->assertEquals(1, $cmw->maxArea([1,1]));
        $this->assertEquals(1, $cmw->maxArea([1,2]));
        $this->assertEquals(17, $cmw->maxArea([2,3,4,5,18,17,6]));
    }
}

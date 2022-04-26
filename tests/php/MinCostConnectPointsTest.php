<?php

namespace LeetCode\Tests;

use LeetCode\Problems\MinCostConnectPoints\MinCostConnectPoints;
use PHPUnit\Framework\TestCase;
final class MinCostConnectPointsTest extends TestCase
{
	public function testMinCostConnectPointsTestExample1()
	{
        $mccp = new MinCostConnectPoints();
        $this->assertEquals(20, $mccp->minCostConnectPoints([[0,0], [2,2], [3,10], [5,2], [7,0]]));
        $this->assertEquals(18, $mccp->minCostConnectPoints([[3,12],[-2,5],[-4,1]]));
        $this->assertEquals(53, $mccp->minCostConnectPoints([[2,-3],[-17,-8],[13,8],[-17,-15]]));
	}
}

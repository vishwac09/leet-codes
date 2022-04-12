<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ClimbingStairs\ClimbingStairs;
use PHPUnit\Framework\TestCase;
final class ClimbingStairsTest extends TestCase
{
	public function testClimbingStairsExample1()
	{
        $cs = new ClimbingStairs();
        $this->assertEquals(2, $cs->climbStairs(2));
        $this->assertEquals(3, $cs->climbStairs(3));
        $this->assertEquals(8, $cs->climbStairs(5));
	}
}


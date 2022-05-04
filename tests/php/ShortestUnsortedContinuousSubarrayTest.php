<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ShortestUnsortedContinuousSubarray\ShortestUnsortedContinuousSubarray;
use PHPUnit\Framework\TestCase;
final class ShortestUnsortedContinuousSubarrayTest extends TestCase
{
	public function testShortestUnsortedContinuousSubarrayTestExample1()
	{
        $sucs = new ShortestUnsortedContinuousSubarray();
        $this->assertEquals(5, $sucs->findUnsortedSubarray([2,6,4,8,10,9,15]));
	}
}

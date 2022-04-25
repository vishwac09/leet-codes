<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SummaryRanges\SummaryRanges;
use PHPUnit\Framework\TestCase;

final class SummaryRangesTest extends TestCase
{
	public function testSummaryRangesTestExample1()
	{
        $sr = new SummaryRanges();
        $this->assertEquals(["0->2", "4->5", "7"], $sr->summaryRanges([0,1,2,4,5,7]));
        $this->assertEquals(["0->2", "4->7"], $sr->summaryRanges([0,1,2,4,5,6,7]));
        $this->assertEquals(["0", "2->4", "6", "8->9"], $sr->summaryRanges([0,2,3,4,6,8,9]));
	}
}

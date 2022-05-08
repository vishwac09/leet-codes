<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ReplaceElemGreatElemRtSide\ReplaceElemGreatElemRtSide;
use PHPUnit\Framework\TestCase;
final class ReplaceElemGreatElemRtSideTest extends TestCase
{
	public function testReplaceElemGreatElemRtSideTestExample1()
	{
        $regers = new ReplaceElemGreatElemRtSide();
        $this->assertEquals([18,6,6,6,1,-1], $regers->replaceElements([17,18,5,4,6,1]));
        $this->assertEquals([-1], $regers->replaceElements([17]));
        $this->assertEquals([18,6,6,6,1,-1], $regers->replaceElementsOpt([17,18,5,4,6,1]));
        $this->assertEquals([-1], $regers->replaceElementsOpt([17]));
	}
}

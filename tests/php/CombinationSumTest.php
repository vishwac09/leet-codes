<?php

namespace LeetCode\Tests;

use LeetCode\Problems\CombinationSum\CombinationSum;
use PHPUnit\Framework\TestCase;

final class CombinationSumTest extends TestCase
{
	public function testCombinationSumTestExample1()
	{
        $cs = new CombinationSum();
        $this->assertEquals([[2,2,3], [7]], $cs->combinationSum([2,3,6,7], 7));
	}
}

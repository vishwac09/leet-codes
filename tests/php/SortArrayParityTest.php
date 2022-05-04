<?php

namespace LeetCode\Tests;

use LeetCode\Problems\SortArrayParity\SortArrayParity;
use PHPUnit\Framework\TestCase;

final class SortArrayParityTest extends TestCase
{
	public function testSortArrayParityTestExample1()
	{
        $sap = new SortArrayParity();
        $this->assertEquals([2,4, 3, 1], $sap->sortArrayByParity([3, 1, 2, 4]));
        $this->assertEquals([0], $sap->sortArrayByParity([0]));
	}
}

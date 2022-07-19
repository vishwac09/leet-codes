<?php

namespace LeetCode\Tests;

use LeetCode\Problems\NondecreasingArray\NondecreasingArray;
use PHPUnit\Framework\TestCase;

final class NondecreasingArrayTest extends TestCase
{
	public function testNondecreasingArrayTestExample1()
	{
		$nda = new NondecreasingArray();
		$this->assertEquals(true, $nda->checkPossibility([4,2,3]));
	}
}

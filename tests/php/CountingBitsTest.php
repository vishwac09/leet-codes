<?php

namespace LeetCode\Tests;

use LeetCode\Problems\CountingBits\CountingBits;
use PHPUnit\Framework\TestCase;

final class CountingBitsTest extends TestCase
{
	public function testCountingBitsTestExample1()
	{
		$cb = new CountingBits();
		$this->assertEquals([0, 1, 1], $cb->countBits(2));
	}
}

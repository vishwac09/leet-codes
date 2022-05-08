<?php

namespace LeetCode\Tests;

use LeetCode\Problems\DivideTwoIntegers\DivideTwoIntegers;
use PHPUnit\Framework\TestCase;
final class DivideTwoIntegersTest extends TestCase
{
	public function testDivideTwoIntegersTestExample1()
	{
        $dti = new DivideTwoIntegers();
        $this->assertEquals(3, $dti->divide(10, 3));
        $this->assertEquals(5, $dti->divide(10, 2));
        $this->assertEquals(-2, $dti->divide(7, -3));
        $this->assertEquals(2, $dti->divide(-7, -3));
	}
}

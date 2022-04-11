<?php

namespace LeetCode\Tests;

use LeetCode\Problems\Sqrt\Sqrt;
use PHPUnit\Framework\TestCase;

final class SqrtTest extends TestCase
{
	public function testSqrtExample1()
	{
        $sqrt = new Sqrt();
        $this->assertEquals(2, $sqrt->mySqrt(4));
        $this->assertEquals(2, $sqrt->mySqrt(8));
        $this->assertEquals(5, $sqrt->mySqrt(25));
        $this->assertEquals(20, $sqrt->mySqrt(400));
	}
}

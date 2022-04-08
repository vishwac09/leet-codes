<?php

namespace LeetCode\Tests;

use LeetCode\Problems\RomanToInteger\RomanToInteger;
use PHPUnit\Framework\TestCase;

final class RomanToIntegerTest extends TestCase
{
	public function testRomanToIntegerExample1()
	{
		$romanToInteger = new RomanToInteger();
		$this->assertSame(3, $romanToInteger->romanToInt('III'));
		$this->assertSame(5, $romanToInteger->romanToInt('V'));
		$this->assertSame(9, $romanToInteger->romanToInt('IX'));
		$this->assertSame(90, $romanToInteger->romanToInt('XC'));
		$this->assertSame(7, $romanToInteger->romanToInt('VII'));
	}
}

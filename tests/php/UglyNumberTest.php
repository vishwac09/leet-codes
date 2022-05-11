<?php

namespace LeetCode\Tests;

use LeetCode\Problems\UglyNumber\UglyNumber;
use PHPUnit\Framework\TestCase;
final class UglyNumberTest extends TestCase
{
	public function testUglyNumberTestExample1()
	{
        $un = new UglyNumber();
        $this->assertEquals(true, $un->isUgly(6));
        $this->assertEquals(true, $un->isUgly(1));
        $this->assertEquals(false, $un->isUgly(14));
	}
}

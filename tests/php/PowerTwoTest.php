<?php

namespace LeetCode\Tests;

use LeetCode\Problems\PowerTwo\PowerTwo;
use PHPUnit\Framework\TestCase;

final class PowerTwoTest extends TestCase
{
	public function testPowerTwoTestExample1()
	{
        $pt = new PowerTwo();
        $this->assertEquals(true, $pt->isPowerOfTwo(2));
        $this->assertEquals(false, $pt->isPowerOfTwo(5));
        $this->assertEquals(false, $pt->isPowerOfTwo(20));
        $this->assertEquals(false, $pt->isPowerOfTwo(18));
        $this->assertEquals(true, $pt->isPowerOfTwo(32));
	}
}

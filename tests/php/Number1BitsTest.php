<?php

namespace LeetCode\Tests;

use LeetCode\Problems\Number1Bits\Number1Bits;
use PHPUnit\Framework\TestCase;

final class Number1BitsTest extends TestCase
{
	public function testNumber1BitsExample1()
	{
        $nb = new Number1Bits();
        $this->assertEquals(3, $nb->hammingWeight(0b00000000000000000000000000001011));
        $this->assertEquals(1, $nb->hammingWeight(0b00000000000000000000000010000000));
        $this->assertEquals(31, $nb->hammingWeight(0b11111111111111111111111111111101));
	}
}

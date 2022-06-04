<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ReverseString\ReverseString;
use PHPUnit\Framework\TestCase;
final class ReverseStringTest extends TestCase
{
	public function testReverseStringTestExample1()
	{
		$rs = new ReverseString();
		$s = ["h","e","l","l","o"];
		$this->assertEquals(['o', 'l', 'l', 'e', 'h'], $rs->reverseString($s));
	}
}

<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ImplementStrStr\ImplementStrStr;
use PHPUnit\Framework\TestCase;

final class ImplementStrStrTest extends TestCase
{
	public function testImplementStrStrExample1()
	{
        $iss = new ImplementStrStr();
        $this->assertEquals(2, $iss->strStr("hello", "ll"));
        $this->assertEquals(-1, $iss->strStr("aaaaaaa", "sdsd"));
	}
}

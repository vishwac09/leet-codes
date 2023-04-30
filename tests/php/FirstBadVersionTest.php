<?php

namespace LeetCode\Tests;

use LeetCode\Problems\FirstBadVersion\FirstBadVersion;
use PHPUnit\Framework\TestCase;

final class FirstBadVersionTest extends TestCase
{
	public function testFirstBadVersionTestExample1()
	{
		$fbd = new FirstBadVersion();
		$this->assertEquals($fbd->firstBadVersion(5), 4);
	}
}

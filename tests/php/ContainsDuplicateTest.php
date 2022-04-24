<?php

namespace LeetCode\Tests;

use LeetCode\Problems\ContainsDuplicate\ContainsDuplicate;
use PHPUnit\Framework\TestCase;

final class ContainsDuplicateTest extends TestCase
{
	public function testContainsDuplicateTestExample1()
	{
        $cd = new ContainsDuplicate();
        $this->assertEquals(true, $cd->containsDuplicate([1,2,1]));
        $this->assertEquals(false, $cd->containsDuplicate([1,2]));
	}
}

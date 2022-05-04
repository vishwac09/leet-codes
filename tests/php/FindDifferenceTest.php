<?php

namespace LeetCode\Tests;

use LeetCode\Problems\FindDifference\FindDifference;
use PHPUnit\Framework\TestCase;
final class FindDifferenceTest extends TestCase
{
	public function testFindDifferenceTestExample1()
	{
        $fd = new FindDifference();
        $this->assertEquals('e', $fd->findTheDifference('abcd', 'abecd'));
        $this->assertEquals('k', $fd->findTheDifference('', 'k'));
        $this->assertEquals('a', $fd->findTheDifference('a', 'aa'));
	}
}

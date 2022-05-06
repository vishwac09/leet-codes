<?php

namespace LeetCode\Tests;

use LeetCode\Problems\CountPrefixesGivenString\CountPrefixesGivenString;
use PHPUnit\Framework\TestCase;
final class CountPrefixesGivenStringTest extends TestCase
{
	public function testCountPrefixesGivenStringTestExample1()
	{
        $cpgs = new CountPrefixesGivenString();
        $this->assertEquals(3, $cpgs->countPrefixes(["a","b","c","ab","bc","abc"], 'abc'));
        $this->assertEquals(2, $cpgs->countPrefixes(["a","a"], 'aa'));
	}
}
